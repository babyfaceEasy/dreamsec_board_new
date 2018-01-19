<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //this connects to the clients table in the connection mysql2

    /**
    * This table holds all the users of the dream secure app
    */

    protected $connection = 'mysql2';
}
