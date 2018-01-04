@extends('layouts.app')

@section('content')
            <div class="panel panel-default">

            	@foreach($discussions as $key => $array)

				<tr>
				@foreach($array as $title => $value)
					<th><strong>{{ $value }}</strong></th>
				@endforeach
				</tr>			

				<tr>
				@foreach($array as $content => $value)
					<td>{{ $value }}</td>
				@endforeach
				</tr>
				@endforeach
</div>
@endsection
