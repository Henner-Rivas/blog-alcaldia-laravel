@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>crear artitulo</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::open(['route' => 'admin.posts.store','autocomplete'=> 'off']) !!}

        {!! Form::hidden('user_id', auth()->user()->id) !!}
        <div class="form-group">
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name', '', ['placeholder'=> 'ingrese nombre' , 'class' => 'form-control']) !!}
            @error('name')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group">
            {!! Form::label('slug', 'Slug') !!}
            {!! Form::text('slug', '', ['placeholder'=> 'ingrese nombre' , 'class' => 'form-control','readonly']) !!}
            @error('slug')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            {!! Form::label('category_id', 'Categoria') !!}
            {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
            @error('color')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group">
            <div class="font-weight-blold">Etiquetas</div>
            @foreach ($tags as $tag)
            <label>
                {!! Form::checkbox('tags[]', $tag->id, null) !!}
                {{$tag->name}}
            </label>
            @endforeach
            @error('tags')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group">
            <div class="font-weight-blold">Estado</div>
            <label>
                {!! Form::radio('status', 1 , true) !!}
                Borrador
            </label>

            <label>
                {!! Form::radio('status', 2) !!}
                Publicado
            </label>
            @error('status')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group">
            {!! Form::label('extract', 'Extracto') !!}
            {!! Form::textarea('extract', null, ['class'=> 'form-control']) !!}

            @error('extract')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group">
            {!! Form::label('body', 'Cuerpo') !!}
            {!! Form::textarea('body', null, ['class'=> 'form-control']) !!}

            @error('body')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>




        {!! Form::submit('crear artitulo', ['class'=> 'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
</div>

@stop
@section('js')
<script src=" @vite(['public/vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js'])
">


</script>

<script>
    $(document).ready( function() {
  $("#name").stringToSlug({
    setEvents: 'keyup keydown blur',
    getPut: '#slug',
    space: '-'
  });
});
</script>
@stop
