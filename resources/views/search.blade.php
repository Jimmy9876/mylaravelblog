@extends('layouts.app')

@section('content')
    @component('particals.jumbotron')
        <h4>以下为'{{ request()->get('q') }}'相关的内容</h4>

        {{--  <h6>🔍</h6>  --}}
    @endcomponent

    @include('widgets.article')

@endsection