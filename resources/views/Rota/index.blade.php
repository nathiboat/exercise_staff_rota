@extends('layouts.layout')

@section('body')
    @foreach($rota as $item)
        <h1>hi</h1>
    @endforeach
    <example-component></example-component>
@endsection


@section('footer')
    <script src="{{url('/')}}/js/app.js" ></script>
@endsection