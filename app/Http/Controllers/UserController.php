<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //


    /**
     * Display a listing of the resource.
     */

     public function __construct()
     {
         $this->middleware('auth');
         //middleware
         // يطبق بعد انشاء الابجكت تبع الكونترلور

     }

    public function index(Request $request)
    {

        // $user = Auth::user(); // Assuming the user is logged in
        // $customers = $user->customers; // Get the associated customers
        
        $user= User::all();//return all user from db

        return view('users.index', ['user' => $user]);

}



}
