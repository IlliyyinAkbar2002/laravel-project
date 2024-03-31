@extends('layout.main')

@section('content')

<h1>List of restaurants</h1>
<table class="table table-striped table-bordered">
    <thead>
        <th>Title</th>
        <th>Slug</th>
        <th>Location</th>
        <th>Body</th>
    </thead>
    <tbody>
        @foreach ($restaurants as $restaurant)
        <tr>
            <td>{{ $restaurant->title }}</td>
            <td>{{ $restaurant->slug }}</td>
            <td>{{ $restaurant->location }}</td>
            <td>{{ $restaurant->body }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection