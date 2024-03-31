@extends('layout.main')

@section('content')

<h1>List of restaurant</h1>
@foreach ($restaurants as $restaurant)
<table class="table table-striped table-bordered">
    <thead>
        <th>Title</th>
        <th>Slug</th>
        <th>Location</th>
        <th>Body</th>
    </thead>
    <tbody>
        <tr>
            <td>{{ $restaurant->title }}</td>
            <td>{{ $restaurant->slug }}</td>
            <td>{{ $restaurant->location }}</td>
            <td>{{ $restaurant->body }}</td>
        </tr>
    </tbody>
</table>
@endforeach

@endsection