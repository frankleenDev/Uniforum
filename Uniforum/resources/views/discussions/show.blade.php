@extends('layouts.app')

@section('content')


            <div class="panel panel-default">
                    <div class="panel-heading">
                        <img src="{{ $diss->user->avatar }}" alt="" width="50px" height="50px">
                        <span>{{ $diss->user->name }}, <b>{{ $diss->created_at->diffForHumans() }}</b> </span>

                        <a href="{{ route('discussion',['slug' => $diss->slug ]) }}" class="btn btn-default pull-right">view</a>
                    </div>

                    <div class="panel-body">
                        <h5>
                            <b><i>{{ $diss->title }}</i></b>
                        </h5>

                        <p>
                            {{ $diss->content }}
                        </p>
                    </div>

                    <div class="panel-footer">
                        <p>
                            {{ $diss->replies->count() }}&nbsp;Replies
                        </p>
                    </div>
                </div>

                @foreach($diss->replies as $rep)

                	<div class="panel panel-default">
                    <div class="panel-heading">
                        <img src="{{ $rep->user->avatar }}" alt="" width="50px" height="50px">
                        <span>{{ $rep->user->name }}, <b>{{ $rep->created_at->diffForHumans() }}</b> </span>

                    </div>

                    <div class="panel-body">
                        

                        <p>
                            {{ $rep->content }}
                        </p>
                    </div>

                    <div class="panel-footer">
                        @if($rep->is_liked_by_auth_user())

                        	<span class="">{{ $rep->likes->count() }}</span>
                        	<a href="{{ route('reply.unlike', ['id' => $rep->id ]) }}" class="fa fa-thumbs-up">
                        		
                        	</a>
                        @else

                        	<span class="">{{ $rep->likes->count() }}</span>
                        	<a href="{{ route('reply.like', ['id'=> $rep->id ]) }}" class="fa fa-thumbs-o-up">
                        		
                        	</a>

                        @endif

                    </div>
                </div>

                @endforeach

                <div class="panel panel-default">
                	<div class="panel panel-body">
                		<form action="{{ route('discussion.reply', ['id' => $diss->id ]) }}" method="post">
                			{{ csrf_field() }}

                			<textarea name="reply" id="reply" cols="30" rows="10" class="form-control"></textarea>

                			<div class="form-group">
                				<button class="btn pull-right">Reply</button>
                			</div>
                		</form>
                	</div>
                </div>
@endsection
