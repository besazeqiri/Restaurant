<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


//User
use App\Models\User;
use Validator;
use Illuminate\Support\Facades\Hash;

//Food
use App\Models\Food;

//Reservation
use App\Models\Reservation;

//Chef
use App\Models\Chef;


class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('is_admin');
    }

    //users
    public function index(){
        $users = User::orderBy('id','desc')->paginate(10);
        return view('users.index')->with(compact('users'));
    }


    public function create(){
        return view('users.create');
    }


public function store(Request $request){

    $request->validate([
        'name' => 'required',
        'email' => 'required',
        'password' => 'required',
    ]);

    $name = filter_var($request->input('name'), FILTER_SANITIZE_STRING);
    $email = filter_var($request->input('email'), FILTER_SANITIZE_STRING);
    $password= Hash::make($request->password);


        $users = new User();

        $users->name=$name;
        $users->email=$email;
        $users->password=$password;

        if($users->save()){
            return redirect(route('users.index'));
        }
        else{
            echo 'deshtoi';
        }
}

    public function delete($id){
       
        $users = User::find($id);
        if ($users->delete()) {
            return redirect(route('users.index'));
        }
    }


    public function edit($id){
        $users = User::find($id);
        return view('users.edit')->with(compact('users'));
    }


    public function update(Request $request, $id){

            $request->validate([
                'name' => 'required',
                'email' => 'required',
                'password' => 'required',
            ]);
                     $users = User::find($id);
                    
                     $users->name=$request->name;
                     $users->email=$request->email;
                     $users->password=$request->password;

            if ($users->save()){
                return redirect(route('users.index'));
            } 
            else {
                echo "deshtoi";
            }
}


    //food
    public function food_index(){
        $foods = Food::orderBy('id','desc')->paginate(10);
        return view('foods.index')->with(compact('foods'));
    }


    public function food_create(){
        $chefs = Chef::get();
        return view('foods.create')->with(compact('chefs'));
}


public function food_store(Request $request){

    $request->validate([
        'title' => 'required',
        'price' => 'required',
        'description' => 'required',
        'image' => 'required',

    ]);

    $title = filter_var($request->input('title'), FILTER_SANITIZE_STRING);
    $price = filter_var($request->input('price'), FILTER_SANITIZE_STRING);
    $description = filter_var($request->input('description'), FILTER_SANITIZE_STRING);



        $foods = new Food();

        $foods->title=$title;
        $foods->price=$price;
        $foods->image=$request->image;
        $foods->description=$description;
        $foods->chef_id=$request->chef_id;


        if($foods->save()){
            return redirect(route('foods.index'));
        }
        else{
            echo 'deshtoi';
        }
}

        public function foods_delete($id){
       
            $foods = Food::find($id);
            if ($foods->delete()) {
                return redirect(route('foods.index'));
            }
        }


        
    public function foods_edit($id){
        $foods = Food::find($id);
        return view('foods.edit')->with(compact('foods'));
    }


    public function foods_update(Request $request, $id){

        $request->validate([
            'title' => 'required',
            'price' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);

        $foods = Food::find($id);
       
        $foods->title=$request->title;
        $foods->price=$request->price;
        $foods->image=$request->image;
        $foods->description=$request->description;

            if ($foods->save()){
            return redirect(route('foods.index'));
            } 
            else {
            echo "deshtoi";
            }
}


//reservation
        public function reservation_index(){
            $reservations = Reservation::orderBy('id','desc')->paginate(10);
            return view('reservation.index')->with(compact('reservations'));
        }


        public function reservation_create(){
            $foods=Food::get();
            return view('reservation.create')->with(compact('foods'));
    }


    public function reservation_store(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'guest' => 'required',
            'date' => 'required',
            'time' => 'required',
            'message' => 'required',
        ]);
    
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
                return redirect(route('reservation.index'));
            }
            else{
                echo 'deshtoi';
            }
    }

    public function reservation_delete($id){
       
        $reservations = Reservation::find($id);
        if ($reservations->delete()) {
            return redirect(route('reservation.index'));
        }
    }


    public function reservation_edit($id){
       
        $reservations = Reservation::find($id);
        return view('reservation.edit')
        ->with(compact('reservations'));
    }


    public function reservation_update(Request $request, $id){

        $reservations = Reservation::find($id);
       
        $reservations->name=$request->name;
        $reservations->email=$request->email;
        $reservations->phone=$request->phone;
        $reservations->guest=$request->guest;
        $reservations->date=$request->date;
        $reservations->time=$request->time;
        $reservations->message=$request->message;
 

            if ($reservations->save()){
            return redirect(route('reservation.index'));
            } 
            else {
            echo "deshtoi";
            }
}

//chefs

    public function chef_index(){
        $chefs = Chef::orderBy('id','desc')->paginate(10);
        return view('chef.index')->with(compact('chefs'));
    }

    public function chef_create(){
        return view('chef.create');
}

public function chef_store(Request $request){
    
    $request->validate([
        'name' => 'required',
        'speciality' => 'required',
        'image' => 'required',
    ]);


    $name = filter_var($request->input('name'), FILTER_SANITIZE_STRING);
    $speciality = filter_var($request->input('speciality'), FILTER_SANITIZE_STRING);
    $image = filter_var($request->input('image'), FILTER_SANITIZE_STRING);

        $chefs = new Chef();

        $chefs->name=$name;
        $chefs->speciality=$speciality;
        $chefs->image=$image;
     
        if($chefs->save()){
            return redirect(route('chefs.index'));
        }
        else{
            echo 'deshtoi';
        }
}


    public function chef_delete($id){
        
        $chefs = Chef::find($id);
        if ($chefs->delete()) {
            return redirect(route('chefs.index'));
        }
    }



    public function chef_edit($id){
       
        $chefs = Chef::find($id);
        return view('chef.edit')->with(compact('chefs'));
    }


    public function chef_update(Request $request, $id){

        $request->validate([
            'name' => 'required',
            'speciality' => 'required',
            'image' => 'required',
        ]);
        
        $chefs = Chef::find($id);
       
        $chefs->name=$request->name;
        $chefs->speciality=$request->speciality;
        $chefs->image=$request->image;

            if ($chefs->save()){
            return redirect(route('chefs.index'));
            } 
            else {
            echo "deshtoi";
            }
}

}