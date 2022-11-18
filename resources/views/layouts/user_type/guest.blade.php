@extends('layouts.app')

@section('guest')
    @include('layouts.navbar.guest')
    <main class="py-4">
        @yield('content')
    </main>
@endsection
