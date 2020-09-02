<?php

namespace App\Http\Controllers;

use App\Prize;
use Illuminate\Http\Request;

class PrizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $prizes = prize::all();
       return  view('admin.prizes')->with('prizes',$prizes);
       
    }

    public function viewprize()
    {
       
        $prizes = prize::all();
        return  view('customer.prizes')->with('prizes',$prizes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $Prize = new Prize();

        $Prize->start_place=$request->input('start_place');
        $Prize->end_place=$request->input('end_place');
        $Prize->prize=$request->input('prize');
        $Prize->save();
        return view('vendor.multiauth.admin.home');
        
        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Prize  $prize
     * @return \Illuminate\Http\Response
     */
    public function show(Prize $prize)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Prize  $prize
     * @return \Illuminate\Http\Response
     */
    public function edit(Prize $prize)
    {
        //
        $prize =prize::find($prize->id);
        return view ("prize.edit",['prize'=>$prize]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Prize  $prize
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prize $prize)
    {
        //
        $Prize= prize::find($prize->id);
        $Prize->start_place=$request->input('start_place');
        $Prize->end_place=$request->input('end_place');
        $Prize->prize=$request->input('prize');
        $Prize->save();
        return view('vendor.multiauth.admin.home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Prize  $prize
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prize $prize)
    {
        //
        if (prize::destroy($prize->id)) {
            # code.
            echo "recored deleted sucessfully";

        }
    }
}
