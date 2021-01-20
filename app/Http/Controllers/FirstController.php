<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use PulkitJalan\GeoIP\GeoIP;

class FirstController extends Controller
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
        $ip_addrss = file_get_contents('https://api.my-ip.io/ip');
        $geoip = new GeoIP();
        $geoip->setIp($ip_addrss);
        $timezone = $geoip->getTimezone();

        echo "timeZone: " .$timezone;

        try {
            DB::connection('mysql2')->getPdo();
        } catch (\Exception $e) {
            echo "ERROR: " .$e->getMessage() ."<br>" ."second database is not connected!";
        }
        return view('first')->with('firstdb', \DB::connection('mysql')->getDatabaseName());
    }
}
