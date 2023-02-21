@extends('layouts.index')

@section('page_title', 'Library Sign-in')

@section('content')
    <div class="wrapper-content">
        <div class="container">
            <h1>Авторизация</h1>
            @if($errors->any())
                <li class="errors">
                @foreach($errors->all() as $error)
                    <p>
                        {{ $error }}
                    </p>
                @endforeach
                </li>
            @endif
            <form action="{{ route('signin') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="text" name="username" placeholder="Username..">
                <input type="text" name="password" placeholder="Password..">
                <input type="submit" value="Sign-in">
            </form>
        </div>
    </div>
@endsection
