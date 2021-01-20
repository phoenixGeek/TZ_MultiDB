<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Config;
use DB;

class SecondController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    public function index() 
    {
        Config::set("database.connections.mysql2", [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL_SECOND'),
            'host' => env('DB_HOST_SECOND', '127.0.0.1'),
            'port' => env('DB_PORT_SECOND', '3306'),
            'database' => env('DB_DATABASE_SECOND', 'forge'),
            'username' => env('DB_USERNAME_SECOND', 'forge'),
            'password' => env('DB_PASSWORD_SECOND', ''),
            'unix_socket' => env('DB_SOCKET_SECOND', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix'    => '',
            'strict'    => false,
        ]);
        \DB::disconnect('mysql');

        if(\DB::connection('mysql2')) {
            echo "Second DB connected successfully!";
        }
        return view('second')->with('firstdb', \DB::connection('mysql')->getDatabaseName())->with('seconddb', \DB::connection('mysql2')->getDatabaseName());
    }
}
