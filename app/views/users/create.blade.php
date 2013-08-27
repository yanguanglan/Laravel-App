@extends('_layout')

@section('content')
<div class="row">
  {{Form::open()}}
    <div class="field">
      {{Form::text('first_name', $user->first_name, array('placeholder' => 'First Name', 'class' => 'input'))}}
    </div>
    <div class="field">
      {{Form::text('last_name', $user->last_name, array('placeholder' => 'Last Name', 'class' => 'input'))}}
    </div>
    <div class="btn primary medium">
      {{Form::submit('Submit')}}
    </div>
  {{Form::close()}}
</div>
@stop