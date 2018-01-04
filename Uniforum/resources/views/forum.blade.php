@extends('layouts.app')

@section('content')
           @foreach($discussions as $diss)

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
                            {{ str_limit($diss->content, 200) }}
                        </p>
                    </div>

                    <div class="panel-footer">
                        <p>
                            {{ $diss->replies->count() }}&nbsp;Replies
                        </p>
                    </div>
                </div>

           @endforeach

           <div class="text-center">
               {{ $discussions->links() }}
           </div>
@endsection
