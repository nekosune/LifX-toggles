@extends('master')
@section('title', 'Lights')

@section('content')
<div class="panel panel-default">
	<div class="panel-heading">@lang('common.title')</div>
	<div class="panel-body">
		<div class="text-center">
			<div class="row">
@if((session('error')))
				<p class="alert alert-danger">{{session('error')}}</p>
@endif
@foreach($lights as $light)
				<div class="col-md-4">
					{!! Form::open(array('action' => ['LightsController@toggle',$light->id])) !!}
						<h1 class="margin-top-100">{{$light->label}}</h1>
						{!!Form::image(($light->power=="on")? '/img/lightbulbOn.jpg' : '/img/lightbulbOff.jpg',$light->power,['width'=>194,'height'=>259,'type'=>'submit'])!!}
					{!! Form::close() !!}
				</div>
@endforeach
		       	</div>
               	</div>

	</div>
 </div>
@endsection
