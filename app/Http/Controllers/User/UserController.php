<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Mail;
use App\Mail\UserRegistrationMail;
use Hash;
use Auth;

class UserController extends Controller
{
  public function register(Request $request) {

  $verification_token=md5(mt_rand());
    $user=new User(array(
      'name'=>$request->name,
      'nickname'=>$request->nickname,
      'username'=>$request->username,
      'email'=>$request->email,
      'dob'=>$request->dob,
      'verification_token'=>$verification_token,
      'country_id'=>$request->country_id,
      'state_id'=>$request->state_id,
      'city_id'=>$request->city_id,
      'gender'=>$request->gender,
      'race_id'=>$request->race_id,
      'category_id'=>$request->category_id,
      'experience_id'=>$request->experience_id,
      'sponsor'=>$request->sponsor,
      'sponsor_details'=>$request->sponsor_details,
      'facebook'=>$request->facebook,
      'instagram'=>$request->instagram,
      'twitter'=>$request->twitter,
      'snapchat'=>$request->snapchat,
      'no_of_followers'=>$request->no_of_followers,
      'acp'=>$request->acp
    ));

    $user->save();
    $data = array(
      'user_id' => $user->id,
      'email' => $request->email,
      'token'=>$verification_token
    );

    Mail::send(new UserRegistrationMail($data));
/*
    Mail::send('register.sendmail', $data, function($message) use($request) {
      $message->subject("Warm welcome from Blaze10");
      $message->to($request->email);
    });
  */
  //[ "email" => $request->email, "token" => $verification_token, "user_id" => $user->id ]
    return redirect(route('user.unverified'))->with("message", 'Link sent.')->with('token', $verification_token)->with('email', $request->email)->with('user_id', $user->id);

  }

  public function resend_verification_email(Request $request) {

    $user_id = $request->input("user_id");
    $email = $request->input("email");
    $token = $request->input("token");


    $user = User::find($user_id);

    if($user !== null) {
      $data = array(
        'user_id' => $user_id,
        'email' => $email,
        'token'=> $token
      );

      Mail::send(new UserRegistrationMail($data));
    }
    return redirect()->back()->with("message", 'Link sent.')->with('token', $token)->with('email', $email)->with('user_id', $user_id);
  }

  public function update_password(Request $request) {
    $user_id = $request->input('user_id');
    $password = $request->input('password');
    $re_password = $request->input('re_password');

    $validation=$request->validate([
      'password'=>'required_with:re_password|same:re_password',
      're_password'=>'required'

    ]);

if($validation)
{
    $user = User::find($user_id);
    $user->verified = "1";
    $user->password = Hash::make($password);
    $user->save();

    if($user) {
      Auth::login($user);
      return redirect(route('user.home'));
    } else {
        return redirect()->back();
    }
  }
  }
}
