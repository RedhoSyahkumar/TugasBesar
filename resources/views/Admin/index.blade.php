@extends('adminlte::page')

@section('title', 'Kyodan.id')

@section('content_header')
    <h1>Dasboard</h1>
@stop

@section('content')
<div class="row">
        <div class="col-lg-3 col-6">
            <div class="small-box bg-primary">
                <div class="inner">
                <h3>{{$usersco}}</h3>

                <p> User</p>
                </div>
                <div class="icon">
                <i class="fas fa-user" style="color:white;"></i>
                </div>
                <a href="" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-primary">
                <div class="inner">
                <h3>{{$productsco}}</h3>

                <p>Pengelolaan Barang</p>
                </div>
                <div class="icon">
                <i class="fas fa-fw fa-box" style="color:white;"></i>
                </div>
                <a href="" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-primary">
                <div class="inner">
                <h3>{{$categoriesco}}</h3>

                <p>Kategori</p>
                </div>
                <div class="icon">
                <i class="fas fa-fw fa-folder" style="color:white;"></i>
                </div>
                <a href="" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-primary">
                <div class="inner">
                <h3>{{$brandsco}}</h3>

                <p>Merek</p>
                </div>
                <div class="icon">
                <i class="fas fa-fw fa-pen" style="color:white;"></i>
                </div>
                <a href="" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
</div>

   
@stop

@section('js')
    <script>

    </script>
@stop


