<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Validator;
use Laravel\Passport\Token;

class PassportController extends Controller
{
    //
    public $successStatus = 200;

    protected function guard()
    {
      return Auth::guard('api');
    }

    /**
    * login api
    *
    * @return \Illuminate\Http\Response
    */
    public function login(Request $request){
      if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
        $user = Auth::user();

        /*
        TODO: Come back to the logout plan
        PLAN: 1. first check if the authenticated user, has a token already, get that token and den send back.
        2. for logout, remove the user details from oauth_access_token so that we have not too much data in the db.
        3. when creating a token the name should be the same as the email address of the user requesting for the tokens
        as in $user->createToken($user->email)->accessToken
        this returns the user attached to a particular user dd($token->user->name); # use Laravel\Passport\Token;
        */

        //return response()->json(['success' => $user->accessToken()], $this->successStatus);

        $success['token'] = $user->createToken('MyApp')->accessToken;
        return response()->json(['success' => $success], $this->successStatus);
      }
      else{
        return response()->json(['error' => 'Unauthorised'], 401);
      }
    }//end of login

    /**
    * Register api
    *
    * @return \Illuminate\Http\Response
    */
    public function register(Request $request){
      $validator = Validator::make($request->all(), [
        'name' => 'required',
        'email' => 'required|email|unique:users,email',
        'password' => 'required',
        'c_password' => 'required|same:password',
      ]);

      if ($validator->fails()) {
        return response()->json(['error' => $validator->errors()], 401);
      }

      $input = $request->all();
      $input['password'] = bcrypt($input['password']);
      $user = User::create($input);
      $success['token'] = $user->createToken('MyApp')->accessToken;
      $success['name'] = $user->name;

      return response()->json(['success' => $success], $this->successStatus);
    }// end of register

    /**
    * details api
    * @return \Illuminate\Http\Response
    */
    public function getDetails(){
      $user = Auth::user();
      return response()->json(['success' => $user], $this->successStatus);
    }

    public function logout(Request $request)
    {
      if(!$this->guard()->check()){
        return response()->json([
          'message' => 'No active user session found'
        ], 404);
      }

        //logout activity
        $request->user('api')->token()->revoke();
        //$token = $request->user('api')->token();
        //dd($token->user->name);

        /*return response()->json([
          'token' => $token
        ]);*/

        //Auth::guard()->logout();

        Session::flush();
        Session::regenerate();

        return response()->json([
          'message' => 'User was logged out'
        ]);
    }//end of logout
}
