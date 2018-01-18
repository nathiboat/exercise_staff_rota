@extends('layouts.layout')


@section('body')
    <rota-slot></rota-slot>
@endsection


@section('footer')
    <script src="{{url('/')}}/js/app.js" ></script>
@endsection