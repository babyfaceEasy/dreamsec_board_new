<?php

namespace App\Http\Controllers\API;

use DB;
use App\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    private function generateResponse($status_txt, $code, $body='')
    {
        $return['header']['status'] = $status_txt;
        $return['header']['code'] = $code;

        if($code == "200"){
            $return['header']['completedTime'] = date('l jS \of F Y h:i:s A');
        }

        return $return;
    }//end of generateResponse

    //This controller handles everything the admin can do.
    public function totalDBClients(Request $request)
    {
      $totalUsersInDB = DB::connection('mysql2')->table('clients')->count();
      $return = $this->generateResponse('DONE', '200');
      $return['body']['db_users_count'] = $totalUsersInDB;

      return response()->json($return, 200);
    }//end of totalDBClients

    //this is to select all the clients in the db and return it to our frontend engineers
    public function listOfClients(Request $request)
    {
      try {
        $clients = Client::all();
      } catch (\Exception $e) {
        //TODO: log this error
        $return = $this->generateResponse("ERROR", "110", null);
        return response()->json($return, 110);
      }
      $return = $this->generateResponse('DONE', "200", null);
      $return['body']['data'] = $clients;
      return response()->json($return, 200);
    }//end of listOfClients
}//end of AdminController
