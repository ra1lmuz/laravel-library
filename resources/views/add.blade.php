@extends('layouts.index')

@section('page_title', 'Library | add new book')

@section('content')
    @auth
        <div class="wrapper-content">
            <div class="container">
                <h1>Добавление новой книги</h1>
                @if($errors->any())
                    <li class="errors">
                        @foreach($errors->all() as $error)
                            <p>
                                {{ $error }}
                            </p>
                        @endforeach
                    </li>
                @endif
                <form action="{{route('add')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="title" placeholder="Title..">
                    <textarea name="content" placeholder="Content.." id="content" cols="30" rows="10"></textarea>
                    <input type="file" name="file"> <br><br>

                    <select name="category_id">
                        @foreach($categories as $category)
                            <option value="{{ $category['id'] }}">
                                {{ $category['name'] }}
                            </option>
                        @endforeach
                    </select>

                    <br>

                    <input type="submit" value="Add book">
                </form>
            </div>
        </div>
    @endauth
@endsection
