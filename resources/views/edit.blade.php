@extends('nav')




@section('content')
    <h1 class="h3 mb-3 font-weight-normal" xmlns="http://www.w3.org/1999/html">Edit post</h1>

    <div class="post-thumb">
        <a href="#"><img src="../../public/app/{{$post->picture}}" alt=""></a>
    </div>

    <form  action="/update/{{$post->id}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}

        <label for="inputEmail" class="sr-only">Название</label>
        <input type="text" name="title"  size="30" maxlength="30"  value={{$post->title}} />


        <label for="inputEmail" class="sr-only">Содержание</label>
        <textarea  class="form-control" cols="30" rows="10"   name="content">
        {{$post->content}}
        </textarea>



        <select class="custom-select" name="categories_post">
            <option selected>Open this select menu</option>
            <option selected value="жанр 1"> ganr1</option>
            <option value="жанр 2">ganr2</option>
            <option value="жанр 3">ganr3</option>
        </select>

        <input type="file" name="image"> <br>


        <button class="btn btn-lg btn-primary btn-block" type="submit">Отправить</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2018-2019</p>
    </form>











@endsection
