<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Hash;
use App\User;

class AuthController extends Controller
{
   
    public function login(Request $request)


{

if(Auth::attempt([

'email' =>$request->email,
'password' =>$request->password


	])){

	$user = User::where('email',$request->email)->first();

if($user->is_admin())
{
	return view('admin.home.homecontent');
}

return view('user.user');


}

return view('login');
}


public function viewForm(){


	return view('authentication.sign');
}


	public function signup(Request $request)
	{
		//$data=Request::except(array('_token'));
		//var_dump($data);
 $request->except('_token');


$this->validate($request,['name'=>'required','email'=>'required','password'=>'required','cpassword'=>'required|same:password',
		]);

    
			$sign=new User();


			  $sign->name = $request->name;
              $sign->email = $request->email;
              $sign->password =Hash::make( $request->password);


			$sign->save();
			return view('user.user');

    }



    public function logout(Request $request)
    {
        Session::flush();

        return redirect('/');
    }







}
