<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quote;

class QuotesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($textToSave = null, $urlToSave = null)
    {
        //
        $data = (object) ['textToSave' =>null, 'urlToSave' => null];

        if($textToSave != null)
        {
            $data->textToSave = $textToSave;
        }

        if($urlToSave != null)
        {
            $data->urlToSave = $urlToSave;
        }


        return view('quote.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $quote = new Quote();
        $quote->user_id = auth()->user()->id;
        $quote->text = $request->textToSave;
        $quote->url = $request->urlToSave;

        $quote->save();

        return $quote->id;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
