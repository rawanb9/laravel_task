<?php

namespace App\Http\Controllers;

use App\Models\userCertificate;
use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Auth;

class UserCertificateController extends Controller
{
    public function index()
    {
        $user_id = Auth::user()->id;
        $users_certificates = DB::table('users_certificates')->get();
        $certicatesByUser = DB::table('users_certificates')->where('userId', $user_id)->get();
        return view('users_certficates', ['users_certificates' => $users_certificates]);
    }
    public function addCer(Request $request, $certificateId)
    {
        $user_id = Auth::user()->id;

        if (DB::table('user_certificates')->where('userId', $user_id)->where('certificateId',$certificateId)->first()) {
           return Redirect::to('/certificates')->with('message certificate already exist.');
        }
        else{
            $userCertificate = new userCertificate;
            $userCertificate->certificateId = $certificateId;
            
            $userCertificate->userId = $user_id;
            $userCertificate->save();
            return Redirect::to('/certificates')->with('success Certificate has been added sucessfully.');
        }
    }
    public function destroy($id)
    {
        $blog = userCertificate::findOrFail($id);

        $blog->delete();

        return Redirect::to('/certificates');
    }
    public function listCertificates()
    {
        $certificatesCount =  DB::table('user_certificates')->select('certificateId', DB::raw('count(*) as total'))
                     ->groupBy('certificateId')
                     ->get();;
        return view('list', ['certificatesCount' => $certificatesCount]);
    }
}
