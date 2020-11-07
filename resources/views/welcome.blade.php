@extends('layout')

@section('content')
    <main role="main" class="inner">
        <h1 class="heading">Upload file</h1>

        <form action="/" method="POST" class="input-group" enctype="multipart/form-data">
            @csrf
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="upload-file" name="file">
                <label class="custom-file-label" for="upload-file">Choose file</label>
            </div>
            <button class="btn btn-primary">Upload</button>
        </form>

        @if(isset($file_name))
            <div class="alert alert-success" role="alert">
                {{ $file_name }} uploaded successful!
            </div>
        @endif
    </main>
@endsection
