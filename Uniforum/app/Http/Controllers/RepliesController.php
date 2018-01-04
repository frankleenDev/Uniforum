<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Reply;
use App\Like;

use Auth;

use Session;

class RepliesController extends Controller
{

    public function like($id)
    {
    	Like::create([

    		'reply_id' => $id,
    		'user_id' => Auth::id()
    		]);

    	Session::flash('Success', 'You liked the reply');

    	return redirect()->back();
    }

    public function unlike($id)
    {
    	$like = Like::where('reply_id', $id)->where('user_id', Auth::id())->first();

    	$like->delete();

    	Session::flash('success','You have unliked' );

    	return redirect()->back();
    }

}
