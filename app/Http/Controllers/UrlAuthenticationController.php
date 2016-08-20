<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Http\Response;
use App\User;
use Auth;
use Illuminate\Support\Facades\View;

class UrlAuthenticationController extends Controller
{
    public function AccessAccountByUrl($url){

    	// echo $url;
    	// die();

		$user = User::where('session_link',$url)->get()->first();
		// print_r($user);
		// die();

		if ($user->session_link == $url) {
			// $data = array();
			$user_id = $user->user_id;
			$user_name = $user->username;
			$session_link = $user->session_link;
			$password = $user->password;

			// return View::make('app')->nest('include', 'include.header');

			return redirect()->back()->withCookie('user_id', $user_id)
									->withCookie('user_name', $user_name)
									->withCookie('password', $password)
									->withCookie('session_link', $session_link);

			// return redirect()->route('/', [$data]);

			// return json_encode($data);
			// echo $user_id;
			// die();
			return redirect()->back()->withInput($data);
			// return $response;
			// return view('app', compact('user_id','user_name','session_link'));
		}else{
			return "Invalid Authentication link.";
		}


    }
}
