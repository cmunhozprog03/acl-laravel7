@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Tópicos</h1>
@stop

@section('content')

    @forelse ($threads as $thread)
        
    @empty
      <div class="alert alert-warning">
        Nenhum tópico encontrado.
      </div>  
    @endforelse
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop