@extends('layouts.master')

@section('content')
  <h1>Hello, {{{ $name }}}!</h1>
  <a href="{{{ action('HomeController@showResume') }}}"></a>
@stop

@section('bottomscript')

@stop

