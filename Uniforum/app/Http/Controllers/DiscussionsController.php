<?php

namespace App\Http\Controllers;

use Auth;

use App\Discussion;

use App\Reply;

use Session;

use Illuminate\Http\Request;

class DiscussionsController extends Controller
{
    public function create()
    {
    	return view('discussion');
    }

    public function store()
    {
    	$req = request();
    	$this->validate($req, [

    			'channel_id' => 'required',
    			'content' => 'required',
    			'title' => 'required'
    		]);

    	$discussion =Discussion::create([

    		'title' => $req->title,
    		'content' => $req->content,
    		'channel_id' => $req->channel_id,
    		'user_id' => Auth::id(),
    		'slug' => str_slug($req->title)
    	]);

    	Session::flash('success', 'Discussion successfully created');

    	return redirect()->route('discussion',['slug' => $discussion->slug]);
    }

    public function show($slug)
    {

    	return view('discussions.show')->with('diss', Discussion::where('slug', $slug)->first());
    }

    public function reply($id)
    {
    	$diss = Discussion::find($id);

    	$reply = Reply::create([
    		'user_id' =>Auth::id(),
    		'discussion_id' => $id,
    		'content' => request()->reply
    	]);

    	Session::flash('Success', 'Replied to discussion.');

    	return redirect()->back();
    }
}
