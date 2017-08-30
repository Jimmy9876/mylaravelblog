@extends('layouts.app')

@section('content')
    @component('particals.jumbotron')
        <h3>{{ config('blog.article.title') }}</h3>

        {{-- <h6>{{ config('blog.article.description') }}</h6> --}}
        <h6 class="hotarticle"><i class="fa fa-free-code-camp" aria-hidden="true"></i><a href="{{ url('hot') }}">热点文章</a></h6>
    @endcomponent

    @include('widgets.article')

    {{ $articles->links('pagination.default') }}

@endsection