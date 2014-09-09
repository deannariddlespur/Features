@extends('layouts.default')

@section('content')

		<h1>Create New </h1>
		{{ Form::open(['route' => 'features.store']) }}
		<div>
		  {{ Form::label('featurename', 'featurename:') }}
		  {{ Form::text('featurename') }}
		  </div>
		  
		  <div>
		  {{ Form::submit('Create') }}</div>
		
		{{ Form::close()}}

@stop
	   
	