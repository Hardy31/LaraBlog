@extends('nav')



@section('content')
        <h1>
            Здесь форычем выводятся статьи
        </h1>
        <div class="span9">
            <div class="row">
                <div class="col-md-12">


                    @foreach ($posts as $post)



                            <article class="single-blog">
                                <div class="post-thumb">
                                    <div class="post-thumb">
                                        <a href="#"><img src="../../public/app/{{$post->picture}}" alt=""></a>

                                    </div>
                                </div>
                                <div class="post-content">
                                    <div class="entry-header text-center text-uppercase">

                                        <h2><a href="single-page.html">{{$post->title}}</a></h2>
                                    </div>
                                    <div class="entry-content">
                                        <p>

                                            {{$post->content}}



                                        </p>
                                    </div>
                                    <div class="continue-reading text-center text-uppercase">



                                        <a href="/post/{{$post->id}}">Читать</a>
                                        <a href="/edit/{{$post->id}}">Редактировать статью</a>
                                        <a href="/delit/{{$post->id}}">Удалить статью</a>

                                        <a href="../../../comment/creat/{{$post->id}}">Новый комментарий</a>



                                    </div>

                                </div>
                            </article>
                    @endforeach














                </div>
            </div>
        </div>



@endsection

@section('popular-post')
    <aside class="widget widget-popular-post">
        <h3 class="widget-title text-uppercase text-center">Popular Posts</h3>
        <ul>





        </ul>
    </aside>
@endsection


@section('last-post')
    <aside class="widget widget-popular-post">
        <h3 class="widget-title text-uppercase text-center">Last Posts</h3>
        <ul>





        </ul>
    </aside>
@endsection
