@extends('nav')
<?PHP
$post =     [

        'id' =>  '22',
        'user_id' =>  '3' ,
        'picture_name' =>  'sss.svg',
        'name' =>  'Мужская',
        'title' =>  'Когда я смотрю на женщину',
        'content' =>  'Первое – это ТО САМОЕ, второе — искренняя надежда в своего избранника jhgdflsbmsdnab f fh kjehd f hd;ksd hksdjhf ;ksdfHF KJDFSH ;KDF;KIHF kH;KF HA;KSFH ;AHSGFK JAS;KFYHA sk;kashf kjsadfkjahsdkjfh kajFH;KJH KHKLFDSAF
DSFG ARFG FDSG

FDG GLKSADLKFJHG ADSH;GKH;FADSKH GKHADSFKLHGLKFDSHG LKFDSHGALKFG JHAKFGLK FDSLKGJLKAHDSFGJLKN.',

];

    ?>



@section('content')
        <h1>
            Здесь выводится одна статья
        </h1>



        <div class="span9">
            <div class="row">
                <div class="col-md-12">


                        <article class="single-blog">
                            <div class="post-thumb">
                                <a href="#"><img src="../public/img/<?php echo $post['picture_name'];?>" alt=""></a>
                            </div>
                            <div class="post-content">
                                <div class="entry-header text-center text-uppercase">

                                    <h2><a href="single-page.html"><?php echo $post['title'];?></a></h2>
                                </div>
                                <div class="entry-content">
                                    <p><?php if (strlen($post['content'])>200){echo substr($post['content'],0).'...';}
                                        else{echo $post['content'];}?></p>
                                </div>
                                <div class="continue-reading text-center text-uppercase">




                                    <a href="single-page.html">Редактировать статью</a>
                                    <a href="./../../deletepost/<?=$post['id'];?>">Удалить статью</a>

                                    <a href="../../../comment/creat/<?=$post['id'];?>">Новый комментарий</a>



                                </div>
                                <div class="post-meta">
                                    <ul class="pull-left list-inline author-meta">
                                        <li class="author">By <a href="#"><?php echo $post['id'];?> </a></li>

                                    </ul>
                                    <ul class="pull-right list-inline social-share">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </article>


                </div>
            </div>
        </div>













@endsection
