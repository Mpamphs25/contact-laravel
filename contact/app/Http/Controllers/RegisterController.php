<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function create(Request $request){

        $value = $request->session()->get('key');
        return view('welcome');
    }

    public function store(Request $request){
        $validation = $request->validate([
             'name' => ['required', 'max:10'],
             'epwnymo'=>['required', 'max:10'],
             'tel' => ['required','mindigits:10','maxdigits:10'],
             'country' =>['required'],
             'story' =>['required','max:255'],
        ]);
        

      User::create($validation);
      
      $welcome = "Welcome  {$validation['epwnymo']} {$validation['name']}";
      
    
    return redirect('/')->with('task',  $welcome);
    }
}
