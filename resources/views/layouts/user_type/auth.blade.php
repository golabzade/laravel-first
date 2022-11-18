@extends('layouts.app')

@section('auth')
    @include('layouts.navbar.auth')
    <main class="py-4">
        @yield('content')
    </main>
@endsection
