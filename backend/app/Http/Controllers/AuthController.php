<?php

namespace App\Http\Controllers;



use App\Models\Admins;
use Illuminate\Http\Request;
use App\Mail\Forgetmail;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Message;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function register(Request $request) {

        $fields = $request->validate([
            'RoId' => 'numeric',
            'AdFname' => 'required|string',
            'AdMname' => 'required|string',
            'AdLname' => 'required|string',
            'AdImage' => 'required|string',
            'AdPhone' => 'required',
          
            'AdEnabled' => 'required|string',
            'AdEmail' => 'required|string|unique:admins,AdEmail',
            'AdPassword' => 'required|string|confirmed'
        ]);

        $user = Admins::create([

            'RoId' => 1,
            'AdFname' => $fields['AdFname'],
            'AdMname' => $fields['AdMname'],
            'AdLname' => $fields['AdLname'],
            'AdImage' => $fields['AdImage'],
            'AdPhone' => $fields['AdPhone'],
          
            'AdEnabled' => $fields['AdEnabled'],
            'AdEmail' => $fields['AdEmail'],
            'AdPassword' => bcrypt($fields['AdPassword'])
        ]);


        $token =$user->createToken('myapptoken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];


        return response($response, 201);
    }



    public function login(Request $request) {

  
    

        $fields = $request->validate([
            
            'AdEmail' => 'required|string',
            'AdPassword' => 'required|string'
        ]);

      // check email
      $user = Admins::where('AdEmail', $fields['AdEmail'])->where('AdEnabled','active')->first();



      // check password

      if (!$user || !Hash::check($fields['AdPassword'], $user->AdPassword)){
        return response ([
            'message' => 'Bad creds'
        ], 401);
      }
     

        $token =$user->createToken('myapptoken')->plainTextToken;
        // $cookie = Admins::withCookie(cookie('token', $token, 60*24));
        

        Cookie::queue('token', $request->test,  60*24);

        


     
        
         $value = Cookie::get('name');

        $response = [
            "token"=>$value,
            'admin' => $user            
        ];



        return response($response, 201);
    }


    public function logout (Request $request) {
        auth()->user()->tokens()->delete();

        return 
        [
            'message' => 'Logged out'
        ];
    }



public function forget (Request $request) {


    $fields = $request->validate([
          
        'email' => 'required|email|exists:admins,AdEmail'
      
    ]);



    $email = $request->input('email',$fields['email']);
    $token = Str::random(12);

    DB::table('password_resets')->insert([
        'email' => $email,
        'token' => $token
    ]);

  Mail::send( 'reset',['token' => $token], function(Message $message) use ($email){

    $message->subject('Reset your password');
     $message->to($email);
});
   

    return response([
        'message' => 'Check your Email'
    ]);


}

public function reset (Request $request) {

    $fields = $request->validate([
          
        'AdPassword' => 'required|string|confirmed'
      
    ]);
    
   $passwordReset = DB::table('password_resets')->where('token', $request->input('token'))->first();

if (!$user = Admins::where('AdEmail', $passwordReset->email)->where('AdEnabled','active')->first()){
    throw new NotFoundHttpException('User not found!');

}
if($request->AdPassword===$request->AdPassword_confirmation){
$user->AdPassword = Hash::make($request->input('AdPassword',$fields['AdPassword']));
$user->save();
return response ([
    'message'=>'Success'
], 200);
}else{
    return response ([
        'message'=>'error'
    ], 404); 
}
}
}










