<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class loginController extends Controller
{
    //

    public function create()
    {
        return view ('login');
    }
    public function store(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password'=>'required'

        ]);

        $credinatils=[
            'email'=>$request->email,
            'password'=>$request->password,
            // 'status'=>'active',
        ];
        // طريقة اخرى
        // تحقق و
        //login
        $result=Auth::attempt($credinatils,
            $request->boolean('remember')
        );


        if($result){
            return redirect()->intended('/');
            // بمعنى اليوزر  طلب هاي الصفحة قبل م يعمل login
            // لذلك بعد م يعمل  login
           //  لازم يتم توجيه لهاي الصفحة

   // return redirect()->route('classrooms.index');
}

//if not authactited return to login page with same inputs
return back()->withInput()->withErrors([
   'email'=>'invalid cardentals'
   // اذا دخل اشي غلط بدي يحتفظلي القيم الي دخلها اليوزر
]);

}




    }
