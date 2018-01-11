@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">LARAVEL TDD </div>
			</div>
			<div class="panel-body">
				@foreach ($comments as $comment)
					<article>
						 	<h3>ID: {{ $comment->id }}</h3>
						 	<div class="body">BODY: <br/> {{ $comment->body }}</div>
					</article>	
				@endforeach
			</div>
		</div>
	</div>
</div>
@endsection