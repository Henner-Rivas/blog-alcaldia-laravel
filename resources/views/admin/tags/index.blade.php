@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div class="d-flex justify-content-between">

    <h1>Lista etiquetas</h1>
    <a class=" btn btn-secondary " href="{{route('admin.tags.create')}}">Crear
        etiquetas</a>

</div>
@stop

@section('content')

@if (session('info'))
<div class="alert alert-success"><strong>{{session('info')}}</strong> </div>

@endif
<div class="card">


    <div class="card-header">
        <form action="{{route('admin.tags.index')}}" method="GET" class="d-flex">
            <input type="text" class="form-control" value="{{request('search')}}" name="search" placeholder="Buscar">
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


            @foreach ($tags as $tag)
            <tr>
                <th scope="row">{{$tag->id}}</th>
                <td>{{$tag->name}}</td>
                <td>{{$tag->slug}}</td>

                <td width="10px">
                    <a class="btn btn-primary btn-sm" href={{route('admin.tags.edit',$tag)}}>
                        Editar
                    </a>

                </td>
                <td class="btn" width="10px">
                    <form action="{{route('admin.tags.destroy',$tag)}}" method="POST">
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
    {{$tags->links()}}
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
