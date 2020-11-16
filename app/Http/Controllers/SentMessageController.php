<?php

namespace App\Http\Controllers;

use App\SentMessage;
use Illuminate\Http\Request;

use App\Rules\PhoneNumber;

class SentMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return [
            'sent_messages' => SentMessage::orderBy('created_at', 'desc')->get()
        ];
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
        $response = SentMessage::create($request->validate([
            'recipient' => ['required', new PhoneNumber],
            'content' => 'required',
            'sender' => 'required'
        ]));

        return [
            'response' => $response,
            'message' => 'Message sent!'
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SentMessage  $sentMessage
     * @return \Illuminate\Http\Response
     */
    public function show(SentMessage $sentMessage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SentMessage  $sentMessage
     * @return \Illuminate\Http\Response
     */
    public function edit(SentMessage $sentMessage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SentMessage  $sentMessage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SentMessage $sentMessage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SentMessage  $sentMessage
     * @return \Illuminate\Http\Response
     */
    public function destroy(SentMessage $sentMessage)
    {
        //
    }
}
