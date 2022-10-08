<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CardsRequest;
use App\Models\Cards;

class CardsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cards.index',['cards'=>Cards::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cards.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CardsRequest $request)
    {
        $cards = new Cards();
        $cards->holder_name=$request->get('holder_name');
        $cards->number=$request->get('number');
        $cards->verification_code=$request->get('verification_codel');
        $cards->franchise=$request->get('franchise');

        if ($request->has('status')){
            $cards->status=true;
        }else{
            $cards->status=false;
        }


        $cards->save();
        return redirect('/cards');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*public function show($id)
    {
        //
    }
    */
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cards= Cards::findOrFail($id);
        return view('cards.edit',['cards'=>$cards]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CardsRequest $request, $id)
    {
        $cards = new Cards();
        $cards->holder_name=$request->get('holder_name');
        $cards->number=$request->get('number');
        $cards->verification_code=$request->get('verification_code');
        $cards->franchise=$request->get('franchise');

        if ($request->has('status')){
            $cards->status=true;
        }else{
            $cards->status=false;
        }


        $cards->save();
        return redirect('/cards');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cards=Cards::findOrFail($id);
        $cards->delete();
        return back();
    }
}
