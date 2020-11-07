@extends('layout')

@section('content')
    <main role="main" class="inner">
        <h1 class="heading">Auth</h1>

        <form action="/login" method="POST" class="form-inline justify-content-center">
            @csrf
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control mx-sm-3">
            </div>
            <button class="btn btn-primary">send</button>
        </form>

    </main>
@endsection
