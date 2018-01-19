<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


/**
* This table holds all the users of the dream secure app
*/
class Client extends Model
{
    //this connects to the clients table in the connection mysql2
    protected $connection = 'mysql2';
}
