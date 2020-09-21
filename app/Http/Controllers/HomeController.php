<?php

namespace App\Http\Controllers;

use DB;
use Session;
use Illuminate\Support\Carbon;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\CompanyUser;
use App\User;
use App\Models\Language;
use App\Models\SaveTheJob;
use App\Models\Rating;
use App\Models\Recruitment;
use App\Models\Zones;
use Illuminate\Database\Query\Builder;
use Auth;


session_start();
class HomeController extends Controller
{
    public function getList(Request $request){

        $zones =Zones::all();
        $joball = Job::all();
        $job = Job::where([
            ['status', '=', '1'],
            ['job_top', '=', '1'],
        ])->take(12)->get();
        $company = CompanyUser::all();

        if($user = Auth::user()){
            $jobzone = Job::where('id_zone',$user->id_zone)->take(4)->get();
        }
        else{
            $jobzone = null;
        }
            $ip = $_SERVER['REMOTE_ADDR'];
            if(getenv($_SERVER['REMOTE_ADDR']) == false){
                $ip = '117.5.213.42';
            }
            $json   = file_get_contents( 'http://ip-api.com/php/'.$ip);
            
            $timezone = '';
            if (!empty($json )) {
                
                $ipData = unserialize($json);

                if (!empty($ipData['timezone'])) {
                    $timezoneout = $ipData['city'];
                }
            }
            $zone = Zones::all()->where('type', $timezoneout);

            if ($zone[0]->type ==  "$timezoneout" ) {
                $jobcc = Job::all()->where('id_zone',$zone[0]->id)->take(12);
            }
            else{
                $jobcc = Job::all()->take(12);
            }

        //end if
        $jobuser = Job::all()->take(4);
        return view('pages.home.home',['job'=>$job,'jobuser'=> $jobuser,'user'=> $user,'zones'=> $zones,'jobzone'=>$jobzone,'company'=>$company,'jobcc'=>$jobcc,'joball'=>$joball]);
    }
    public function getPost($id){

        $job = Job::find($id);
        $date = now();

        $company = CompanyUser::find($job->company_user_id);

        if($user = Auth::user()){

            $savetjob = DB::table('save_the_job')->join('users', 'save_the_job.user_id', '=', 'users.id')
            ->join('jobs', 'save_the_job.job_id', '=', 'jobs.id')
            ->select('save_the_job.*', 'users.id', 'jobs.id')
            ->where([
                ['job_id', '=', $job->id],
                ['user_id', '=', $user->id],
            ])
            ->first();

        }else{
            $savetjob = null;
        }

        if($user = Auth::user()){

            $recruitment = DB::table('recruitment')->join('users', 'recruitment.user_id', '=', 'users.id')
            ->join('jobs', 'recruitment.job_id', '=', 'jobs.id')
            ->select('recruitment.*', 'users.id', 'jobs.id')
            ->where([
                ['job_id', '=', $job->id],
                ['user_id', '=', $user->id],
            ])
            ->first();
        }else{
            $recruitment = null;
        }
        return view('pages.home.detail',compact('job','date','user','savetjob','recruitment','company'));
    }









    public function getlistCompany(){
        $company = CompanyUser::all();
        $zones = Zones::all();
        return view('pages.home.companys',['company'=>$company,'zones'=>$zones]);
    }
    public function getCompany($id){
        $company = CompanyUser::find($id);

        return view('pages.home.companydetail',compact('company'));
    }

    public function getRate($id){
        $company = CompanyUser::find($id);
        $user = Auth::user();
        $date = now();


        return view('pages.home.rating',compact('company','user','date'));
    }

     public function postRate(Request $request,$id){
        $company = CompanyUser::find($id);
        $user = Auth::user();
        $date = now();

        $rate = new Rating();
        $rate->user_id = $user->id;
        $rate->company_id = $company->id;
        $rate->title = $request->title;
        $rate->pros = $request->pros;
        $rate->cons = $request->cons;
        $rate->date = $date;

        $rate->save();

        return redirect()->back()->with('success',"Gửi thành công !");
    }


    public function search(Request $request){
        $kw=$request->search;
        $zone=$request->zone;
        if(!$request->has('search') || empty($zone)){
            $language = Language::where('name_language','like', '%'.$kw.'%')->orderBy('id','DESC')->paginate(9);
        }else{
            $job = Job::where([
                ['job_name','like', '%'.$kw.'%'],
                ['id_zone','=', $zone],
            ])->orderBy('id','DESC')->paginate(9);
            // $job->withPath("search/?keyword=$kw");
        }


        return view('pages.home.search',['job'=>$job]);
    }
    public function getAllJob(){
        $jobs = Job::inRandomOrder()->limit(16)->get();
        $zones =Zones::all();
        $company = CompanyUser::all();
        return view('pages.home.all-job',['jobs'=>$jobs,'company'=>$company,'zones'=>$zones]);
    }
    public function getUserIp(Request $request){

        // Gettingip address of remote user

        return $user_ip_address=$request->ip();
        dd($user_ip_address);
    }

}