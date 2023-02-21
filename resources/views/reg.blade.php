@extends('layouts.index')

@section('page_title', 'Library Sign-up')

@section('content')
    @guest
    <div class="wrapper-content">
        <div class="container">
            <h1>Регистрация</h1>
            @if($errors->any())
                <li class="errors">
                    @foreach($errors->all() as $error)
                        <p>
                            {{ $error }}
                        </p>
                    @endforeach
                </li>
            @endif
            <form action="{{route('signup')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="text" name="username" placeholder="Username..">
                <input type="text" name="password" placeholder="Password..">
                <input type="text" name="re_password" placeholder="Password confirm..">
                <input type="submit" value="Sign-up">
            </form>
        </div>
    </div>
    @endguest
@endsection


