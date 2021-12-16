<?php

namespace App\Http\Controllers;

use App\Models\ShopUser;
use Illuminate\Http\Request;

class ShopUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('shop.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('shop.createuser');
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
        $shopuser=ShopUser::create([
            "fullname"=>$request->fullname,
            "address" => $request->address,
            "mobile" =>$request->mobile,
            "email" => $request->email,
            "shopname" =>$request->shopname,
        ]);
        redirect('shopuser');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ShopUser  $shopUser
     * @return \Illuminate\Http\Response
     */
    public function show(ShopUser $shopUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ShopUser  $shopUser
     * @return \Illuminate\Http\Response
     */
    public function edit(ShopUser $shopUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ShopUser  $shopUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ShopUser $shopUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ShopUser  $shopUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShopUser $shopUser)
    {
        //
    }
}
