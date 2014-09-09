
@extends('layouts.default')

@section('content')
	<h1> All features </h1>
	   
     <a href='/features/create'>Create New </a>
	{{ Form::open(['route' => 'features.store']) }}
  <div>
		  {{ Form::submit('Create') }}</div>
		
		{{ Form::close()}}
		
	
	@if ($features->count())
	
	@foreach ($features as $feature)
	    	<li>{{ link_to("/features/{$feature->name}", $feature->name) }}</li>
	    
	    @endforeach
	
	@else
		<p>Unfortunately, there are no features</p>
	@endif
	

@stop
	   