<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Auth;

class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$certificates = DB::table('certificates')->get();
        //return view('certficates', ['certificates' => $certificates]);

        //$users_certificates = DB::table('users_certificates')->get();
        //return view('users_certficates', ['users_certificates' => $users_certificates]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        //return Certififcate::create([
        //    'name' => $data['name'],
        //   'userId'=>Auth::user()->id,
        //]);
        //return Redirect::to('Admin');
    }
    public function addCer(Request $request)
    {
        $certificate = new Certificate;
        $certificate->name = $request->name;
        //
        $user_id = Auth::user()->id;
        $certificate->userId = $user_id;
        $certificate->save();

        return Redirect::to('/Admin')->with('message certificate has been changed sucessfully.');
    }
    
    public function dropDownShow()
    {
        $certificates = DB::table('certificates')->get();
        $user_id = Auth::user()->id;
        $users_certificates = DB::table('user_certificates')->get();
        $certicatesByUser = DB::table('user_certificates')->where('userId', $user_id)->get();

        return view('certificates', ['certificates' => $certificates], ['certifactesByUser' => $certicatesByUser]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function show(Certificate $certificate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function edit(Certificate $certificate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Certificate $certificate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Certificate $certificate)
    {
        //
    }
}
