@extends('layouts.app')

@section('library')
    <div class="container">
        <table>
            @foreach($library as $entry)
            <tr>
                <td>{{ $entry->song }}</td>
                <td>{{ $entry->artist }}</td>
                <td>{{ $entry->album }}</td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection
