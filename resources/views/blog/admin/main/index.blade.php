@extends('adminlte::page')

@section('title', 'Admin dashboard')

@section('content_header')
    @component('blog.admin.components.breadcrumb')
        @slot('title')
            Панель управления
        @endslot
        @slot('parent')
            Главная
        @endslot
        @slot('active')
        @endslot
    @endcomponent
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
@stop

@section('meta_tags')
    {!! Meta::toHtml() !!}
@stop

@section('css')
    <?php
        echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
          integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>';
    ?>

@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop

