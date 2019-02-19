@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8"></div>
            <h1>Add New Song</h1>
            <form action="/songs" method="post">
                {{csrf_field()}}

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>

                <div class="form-group">
                    <label for="artist_id">Select Artist</label>
                    <select name="artist_id" id="artist_id">
                        @foreach($artists as $id => $artist)
                            <option value="{{$id}}">{{$artist}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="artist">Or Enter New</label>
                    <input type="text">
                </div>
            </form>
        </div>
    </div>

@endsection