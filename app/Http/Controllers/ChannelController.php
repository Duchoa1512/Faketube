<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Channel;
use Illuminate\Http\Request;

class ChannelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Channel::latest()->paginate(10);

        return view('index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Name'          =>  'required',
            'Description'  =>  'required',
            'SubscribersCount'     =>  'required',
            'URL'    =>  'required',

        ]);

        $chanel = new Channel;

        $channel->Name = $request->Name;
        $channel->Description = $request->Description;
        $channel->SubscribersCoun = $request->SubscribersCount;
        $channel->URL =  $request->URL;

        $channel->save();

        return redirect()->route('channels.index')->with('success', 'Channel Added successfully.');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Channel $channel)
    {
        return view('show', compact('channel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Channel $channel)
    {
        return view('edit', compact('channel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Channel $channel)
    {
        $journal->update($request->all());
        return redirect()->route('channels.index')->with('success', 'Channels Data has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Channel $channel)
    {
        $channel->delete();

        return redirect()->route('channels.index')->with('success', 'channels Data deleted successfully');

    }
   

