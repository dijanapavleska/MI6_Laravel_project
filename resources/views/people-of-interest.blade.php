@extends('layouts.main')

@section('content')
    <div id="react-app">

        <h1>A react app will be rendered</h1>

    </div>
    @viteReactRefresh
    @vite('resources/js/people-of-interest.jsx')
@endsection
