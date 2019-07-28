@extends('admin.categories.layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Blank page
                <small>it all starts here</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Examples</a></li>
                <li class="active">Blank page</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Листинг сущности</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="form-group">

                            <a href="{{route('categories.create')}}}" class="btn btn-success">Добавить</a>
                    </div>
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Название</th>
                            <th>Действияzzzz</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categoriesFoView as $categoryFoView )
                                <tr>
                                    <td>{{$categoryFoView->id}}</td>
                                    <td>{{$categoryFoView->title}}</td>
                                    <td><a href="{{route('categories.edit')}}" class="fa fa-pencil"></a></td>

                                    <td><a href="{{route('categories.delite')}}" class="fa fa-remove"></a></td>

                                </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->

@endsection
