@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <table class="table table-bordered">
                <tr>
                    <th>Song</th>
                    <th>Artist</th>
                    <th>Album</th>
                </tr>
            @foreach($artists as $artist)
                <tr>
                    <td>{{ $artist->name }}</td>
                    <td>{{ $artist->surname }}</td>
                    <td><img src="/storage/albums/{{ $artist->image }}" alt="" width="30px"></td>
                </tr>
            @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
