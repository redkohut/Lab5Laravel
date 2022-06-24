<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    // контролер до сайту з курсової, 5 лаба
    public function main(){
        return view('main');
    }

    public function team(){
        return view('team');
    }

    public function games(){
        return view('games');
    }

    public function collaboration(){
        return view('collaboration');
    }
    // ----------------------------------- 

    public function review(){
        return view('collaboration');
    }
    //отримуємо всі дані із форми відправлення
    //які згодом відправимо в базу даних
    public function review_check(Request $request){
        $valid = $request->validate([
            'email' => 'required|min:5|max:70',
            'subject' => 'required|min:5|max:70',
            'me' => 'required|min:15|max:300',
        ]);
    }
} 
