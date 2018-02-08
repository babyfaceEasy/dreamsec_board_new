<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Data;
use App\Client;

use DataTables;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get the total number of clicks
        $total_clicks = Data::count();
        $total_users = Client::count();
        return view('home', compact('total_clicks', 'total_users'));
    }

    public function getData()
    {
      //$registered_users = Client::orderBy('created_at', 'desc');
      $registered_users = Client::select(['id', 'last_name', 'other_names', 'email', 'phone', 'gender', 'created_at'])
        ->orderBy('created_at', 'desc')
        ->get();
      return DataTables::of($registered_users)
        ->addIndexColumn()
        ->addColumn('view', function(Client $client){
          return '<a href="'.route('client.activity', ['client_id' => $client->id]).'"><span class="glyphicon glyphicon-eye-open"></span></a>';
        })
        ->rawColumns(['view'])
        ->toJson();
    }

    public function showClientActivity(Request $request, $client_id)
    {
      //select all the panic activities from data table for the given user
      $panic_data = Data::where('client_id', $client_id)->get();
      $js_data = Data::select(['id', 'lat', 'lon'])->where('client_id', $client_id)->get();
      $js_data = $js_data->toArray();
      //dd(json_encode($panic_data));
      return view('activity', compact('panic_data', 'js_data'));
    }

    /**
     * This returns the view that shows all emails of dream secure app users in the database.
     * @return \Illuminate\Http\Response
     */
    public function showAllClientEmails()
    {
      return view('all_emails');
    }

    /**
     * This returns all the emails of dream secure app users.
     * @return \Yajra\Datatables\Datatables
     */
     public function allClientEmails()
     {
       $emails = Client::select(['id', 'last_name', 'other_names', 'email'])->orderBy('created_at', 'desc')->get();
       return DataTables::of($emails)
        ->addIndexColumn()
        ->toJson();
     }

     /**
      * This returns the view that shows all phone numbers of dream secure app users in db
      * @return \Illuminate\Http\Response
      */
      public function showAllClientDigits()
      {
        return view('all_digits');
      }

      /**
       * This returns all mobile nos of dream secure app users
       * @return \Yajra\Datatables\Datatables
       */
       public function allClientDigits()
       {
         $digits = Client::select(['id', 'last_name', 'other_names', 'phone'])->orderBy('created_at', 'desc')->get();
         return DataTables::of($digits)
          ->addIndexColumn()
          //->make(true)
          ->toJson();
       }

       /**
        * This returnt the general reports page for you
        * @return \Illuminate\Http\Response
        */
        public function showGeneralReport()
        {
          return view('general_report');
        }

        /**
         * This returns all the users in tthe db with their hit rate
         * @return \Yajra\Datatables\Datatables
         */
         public function generalReportData()
         {
           $clients = Client::all();
           //$data = Data::where('client_id', '=', $client->id)->get();
           //dd($data->count());

           return DataTables::of($clients)
           ->addColumn('fullname', function( Client $client){
             return $client->last_name .' '. $client->other_names;
           })
           ->addColumn('total_panics', function(Client $client){
              return Data::where('client_id', '=', $client->id)->count();
           })
           ->addColumn('actions', function(Client $client){
             return '<a href="'.route('client.activity', ['client_id' => $client->id]).'"><span class="glyphicon glyphicon-eye-open"></span></a>';
           })
           ->rawColumns(['actions'])
           ->addIndexColumn()
           ->toJson();

           /*$report = DB::table('clients')
            ->join('data', 'clients.id', '=', 'data.client_id')
            ->select('clients.last_name', 'clients.other_names', )
            */
         }
}
