<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactModel;

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
            'message' => 'required|min:15|max:300',
        ]);
        // пеерекидаємо дані в табличку
        $review = new ContactModel();
        $review->email = $request->input('email');
        $review->subject = $request->input('subject');
        $review->message = $request->input('message');

        $review->save();
        //переадресація користувача до голоної сторінки
        return redirect()->route('collaboration');
    }
} 
