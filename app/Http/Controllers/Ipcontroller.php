<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Zones;
use Illuminate\Support\Facades\DB;
class Ipcontroller extends Controller
{
    function getTimeZoneUser() {
        $json   = file_get_contents( 'http://ip-api.com/json');
        $timezone = '';
        if (!empty($json )) {
            $ipData = json_decode( $json, true);
            if (!empty($ipData['timezone'])) {
                $timezone = $ipData['city'];
            }
        }
       $zone = DB::table('zones')->select('type')->get();
       $zoneId = DB::table('zones')->select('id')->get();
       $jobdefaul = Job::where('id_zone',$zoneId);
       if ($timezone == $zone) {
          $jobdefaul = Job::where('id_zone',$zoneId);
       }
       else {
           $jobs = Job::All();
       }
       dd($jobdefaul);
       return view('pages.home.home',['jobdefaul'=>$jobdefaul]);
    }
    
}
