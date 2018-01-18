<?php

namespace App\Http\Controllers\API;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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

    //return the total number of dreamsecure app users in the db
    public function totalUsersInDB(Request $request)
    {
      $db_ext =  DB::connection('mysql2');
      $clients_count = $db_ext->table('clients')->count();

      $return = $this->generateResponse("DONE", "200", null);
      $return['body']['total_clients'] = $clients_count;

      return response()->json($return, 200);
    }
}
