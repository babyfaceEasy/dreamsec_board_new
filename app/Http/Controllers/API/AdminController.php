<?php

namespace App\Http\Controllers\API;

use DB;
use App\Client;
use App\Data;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //TODO Learn how to return errors for APIs to the front end guys and den implement it here
    //TODO 2: learn how to add pagination for your list data and apply where needed.

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

    public function clientFullDetails(Request $request, $client_id)
    {
      try {
        $details = Client::find($client_id);
        //$details = Client::findOrFail($client_id);
      } catch (Exception $e) {
        //TODO: log this error
        $return = $this->generateResponse("ERROR", "110", null);
        return response()->json($return, 110);
      }
      $return = $this->generateResponse('DONE', "200", null);
      $return['body']['data'] =  $details;
      return response()->json($return, 200);

    }//end of clientFullDetails

    public function clientSearch(Request $request, $query)
    {
      //return response()->json(['val'=>$query], 200);
      try {
        $last_names = Client::where('last_name', 'LIKE', '%'.$query.'%');
        $other_names = Client::where('other_names', 'LIKE','%'.$query.'%');
        //$search_results = Client::where('email', 'LIKE', '%'.$query.'%')->orWhere('last_name', 'like', '%'.$query.'%')->orWhere('other_names', 'like', '%'.$query.'%')->get();
        //$search_results = DB::connection('mysql2')->table('clients')->where('last_name', 'like', "%$query%")->get();
        $search_results = Client::where('email', 'LIKE', '%'.$query.'%')->union($last_names)->union($other_names)->get();

      } catch (Exception $e) {
        //TODO: log this error
        $return = $this->generateResponse("ERROR", "110", null);
        return response()->json($return, 110);
      }

      $return = $this->generateResponse("DONE", "200", null);
      $return['body']['data'] = $search_results;
      return response()->json($return, 200);
    }//end of clientSearch

    public function clientDangerOccurencesCount(Request $request, $client_id)
    {
      try {
        $occurences_count = Data::where('client_id', $client_id)->count();
      } catch (Exception $e) {
        //TODO: log this error
        $return = $this->generateResponse("ERROR", "110", null);
        return response()->json($return, 110);
      }
      $return = $this->generateResponse("DONE", "200", null);
      $return['body']['data'] = $occurences_count;
      return response()->json($return, 200);
    }//end of clientDangerOccurencesCount

    public function clientDangerOccurencesDetails(Request $request, $client_id)
    {
      try {
        $occurences_details = Data::where('client_id', $client_id)->get();
      } catch (Exception $e) {
        //TODO: log this error
        $return = $this->generateResponse("ERROR", "110", null);
        return response()->json($return, 110);
      }
      $return = $this->generateResponse("DONE", "200", null);
      $return['body']['data'] = $occurences_details;
      return response()->json($return, 200);

    }// end of clientDangerOccurencesDetails

    public function clientDangerOccurencesCoordinates(Request $request, $client_id)
    {
      try {
        $occurences_coordinates = Data::select('id', 'client_id', 'lon', 'lat', 'created_at')->where('client_id', $client_id)->get();
      } catch (Exception $e) {
        //TODO: log this error
        $return = $this->generateResponse("ERROR", "110", null);
        return response()->json($return, 110);
      }

      $return = $this->generateResponse("DONE", "200", null);
      $return['body']['data'] = $occurences_coordinates;
      return response()->json($return, 200);

    }//end of clientDangerOccurencesCoordinates

    public function allClientDangerOccurencesCoordinates(Request $request)
    {
      try {
        $client_panic_coordiantes = Data::select('id', 'client_id', 'lon', 'lat', 'created_at')->get();
      } catch (Exception $e) {
        //TODO: log this error
        $return = $this->generateResponse("ERROR", "110", null);
        return response()->json($return, 110);
      }
      $return = $this->generateResponse("DONE", "200", null);
      $return['body']['data'] = $client_panic_coordiantes;
      return response()->json($return, 200);
    }//end of clientDangerOccurencesCoordinates
}//end of AdminController
