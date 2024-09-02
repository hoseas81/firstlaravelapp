@extends('layout')

@section('title', 'Editar proyecto')

@section('content')
    <h1>@lang('Edit Projects')</h1>

<form method="POST" action="{{ route('projects.store') }}">
    @csrf
    <lable>
        Título del proyecto <br>
        <input type="text" name="title" value="{{ $project->title }}"/>
    </lable>
    <br>
    {!! $errors->first('title', '<small>:message</small><br>') !!}
    <lable>
        URL del proyecto <br>
        <input type="text" name="url" value="{{ $project->url }}"/>
    </lable>
    <br>
    {!! $errors->first('url', '<small>:message</small><br>') !!}
    <lable>
        Descripción del proyecto <br>
        <textarea name="description">{{ $project->description }}</textarea>
    </lable>
    <br>
    {!! $errors->first('description', '<small>:message</small><br>') !!}
    <button>Guardar</button>
</form>
@endsection()