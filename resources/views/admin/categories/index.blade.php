@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div class="d-flex justify-content-between">

    <h1>Lista categorias</h1>
    <a class=" btn btn-secondary " href="{{route('admin.categories.create')}}">Crear
        categoria</a>

</div>

@stop

@section('content')
<div>


    @if (session('info'))
    <div class="alert alert-success"><strong>{{session('info')}}</strong> </div>

    @endif
    <div class="card">


        <div class="card-header">
            <form action="{{route('admin.categories.index')}}" method="GET" class="d-flex">
                <input type="text" class="form-control" value="{{request('search')}}" name="search"
                    placeholder="Buscar">
                <button class="btn btn-primary">Buscar</button>
            </form>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>

                </tr>
            </thead>
            <tbody>


                @foreach ($categories as $category)
                <tr>
                    <th scope="row">{{$category->id}}</th>
                    <td>{{$category->name}}</td>
                    <td>{{$category->slug}}</td>

                    <td width="10px">
                        <a class="btn btn-primary btn-sm" href={{route('admin.categories.edit',$category)}}>
                            Editar
                        </a>

                    </td>
                    <td class="btn" width="10px">
                        <form action="{{route('admin.categories.destroy',$category)}}" method="POST">
                            @csrf
                            @method('delete')

                            <button type="submit" class="btn btn-danger btn-sm">
                                Eliminar
                            </button>



                        </form>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>

    <div class="card-footer">
        {{$categories->links()}}
    </div>

</div>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop
