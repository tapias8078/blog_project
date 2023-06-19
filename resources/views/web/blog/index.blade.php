@extends('web.layout')
@section('content')
    <x-web.blog.post.index :posts='$posts'>
        <h2>Listado de Publicaciones</h2>
        @slot('header')
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Listado Principal de Publicacionefa -- slot
            </h2>
        @endslot
        @slot('footer')
            <fotter>
                Pie de página
            </fotter>
        @endslot
    </x-web.blog.post.index>
@endsection

