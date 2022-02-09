<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Chef;
use App\Models\Food;
use App\Models\Reservation;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }


   public function redirects(){

            $chefs = Chef::get();
            $foods = Food::get();
            $users = User::orderBy('id','desc')->paginate(10);
            $role = Auth::user()->role;


            if($role =='admin'){
                return view('users.index')->with(compact('users'));
            }
            elseif($role =='member'){
                return view('welcome')
                ->with(compact('foods'))
                ->with(compact('chefs'));
            }
            else{
                return view('auth.login');
            }
    }



   /* public function create(){
        $foods = Food::get();
        $chefs = Chef::get();
        return view('welcome')
        ->with(compact('foods'))
        ->with(compact('chefs'));
    }*/

    public function redirects_store(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'guest' => 'required',
            'date' => 'required',
            'time' => 'required',
            'message' => 'required',
        ]);
        
        $foods = Food::get();
        $chefs = Chef::get();
    
        $name = filter_var($request->input('name'), FILTER_SANITIZE_STRING);
        $email = filter_var($request->input('email'), FILTER_SANITIZE_STRING);
        $phone = filter_var($request->input('phone'), FILTER_SANITIZE_STRING);
        $guest = filter_var($request->input('guest'), FILTER_SANITIZE_STRING);
        $date = filter_var($request->input('date'), FILTER_SANITIZE_STRING);
        $time = filter_var($request->input('time'), FILTER_SANITIZE_STRING);
        $message = filter_var($request->input('message'), FILTER_SANITIZE_STRING);

            $reservations = new Reservation();
    
            $reservations->name=$name;
            $reservations->email=$email;
            $reservations->phone=$phone;
            $reservations->guest=$guest;
            $reservations->date=$date;
            $reservations->time=$time;
            $reservations->message=$message;
            $reservations->user_id = Auth::id();

            if($reservations->save()){
                return view('welcome')
                ->with(compact('foods'))
                ->with(compact('chefs'));
            }
            else{
                echo 'deshtoi';
            }
    }

}