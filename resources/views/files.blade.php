@extends('layout')

@section('content')
    <main role="main" class="files-list inner">
        <h1 class="heading">Files</h1>

        <ul class="list-group">
            @foreach($items as $file)
                <li class="list-group-item">
                    <a href="{{ $file['link'] }}" download>{{ $file['name'] }}</a>
                    <a href="{{ $file['remove'] }}" class="btn btn-danger">X</a>
                </li>
            @endforeach
        </ul>
    </main>
@endsection
