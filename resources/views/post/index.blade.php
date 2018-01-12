@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">LARAVEL TDD </div>
			</div>
			<div class="panel-body">
				@foreach ($posts as $post)
					<article>
						 	<h3>ID: {{ $post->id }}</h3>
						 	<div class="body">BODY: <br/> {{ $post->title }}</div>
					</article>	
				@endforeach
			</div>
		</div>
	</div>
</div>
@endsection