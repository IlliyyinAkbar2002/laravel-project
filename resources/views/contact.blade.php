@extends('layout.main')

@section('content')


@if(isset($data_all))
<h1>{{$data_all['name']}}</h1>
<p>{{$data_all['description']}}</p>
@else
<p>No restaurant found.</p>
@endif


@endsection