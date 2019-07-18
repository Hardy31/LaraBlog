@extends('nav')




@section('creat')


    <form  action="/store" method="post" enctype="multipart/form-data">

        {{csrf_field()}}
        <h1 class="h3 mb-3 font-weight-normal">Добавить запись</h1>

        <label for="inputEmail" class="sr-only">Название</label>
        <input type="text" id="inputEmail" class="form-control" placeholder="Название статьи" name="title">



        <label for="inputEmail" class="sr-only">Содержание</label>
        <textarea  class="form-control" cols="30" rows="10" placeholder="Текст статьи" name="content"></textarea>

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
