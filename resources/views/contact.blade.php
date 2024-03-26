@extends('layout.main')
@section('content')

    <h1>Restaurant List</h1>
        @foreach ($restaurant as $r)
            <h1>{{$r['name']}}</h1>
            <h1>{{$r['name']}}</h1>
        @endforeach

@endsection

@section('footer')
@endsection
