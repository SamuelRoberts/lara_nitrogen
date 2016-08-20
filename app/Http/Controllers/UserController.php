<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\UserRequest;
use App\Http\Requests\ChangePassRequest;

use App\User;

use Auth;
use Hash;

class UserController extends Controller
{
	public function __construct() {

		$this->middleware('auth');

	}

	public function addUsername(UserRequest $request)
	{
		$link=md5(uniqid(rand(), true)).md5(uniqid(rand(), true));

		$user = User::findOrFail(Auth::user()->id);

		$user->username = $request->username;

		$user->password = bcrypt($request->password);
		
		$user->session_link = $link;

		$user->save();
	}

	public function changePass(ChangePassRequest $request)
	{
		$user = User::findOrFail($request->id);

		if (Hash::check($request->oldpass, $user->password)) {
    		
    		$user->password =  bcrypt($request->newpass1);

    		$user->save();
		}else{
			return 'The old password you entered did not match';
		}
	}
}
