<?php

namespace App\Http\Controllers;

use App\Models\RentUser;
use Illuminate\Http\Request;

class RentUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rentuser=RentUser::all();
        return view('rent.index',compact('rentuser'));   
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('rent.createuser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $shopuser=RentUser::create([
            "fullname"=>$request->fullname,
            "address" => $request->address,
            "mobile" =>$request->mobile,
            "email" => $request->email,
            "usertype" => $request->usertype,
            "shopname" =>$request->shopname,
            "active"=>1,
        ]);
       return redirect('rentuser');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RentUser  $rentUser
     * @return \Illuminate\Http\Response
     */
    public function show(RentUser $rentUser)
    {
        //
       
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RentUser  $rentUser
     * @return \Illuminate\Http\Response
     */
    public function edit(RentUser $rentUser,$id)
    {
        //
        $a=RentUser::find($id);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RentUser  $rentUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RentUser $rentUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RentUser  $rentUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(RentUser $rentUser)
    {
        //
    }
}
