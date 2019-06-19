@extends ('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Cadastro Bordero</h1>
@endsection
<style>

</style>
@section('content')
    {!! form($form) !!}
@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@endsection

@section('js')
    <script> console.log('Hi!'); </script>
@endsection

