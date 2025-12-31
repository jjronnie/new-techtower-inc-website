@extends('layouts.main')
@section('content')

@include('layouts.nav')

<main >

    {{ $slot }}
</main>

@include('layouts.footer')

@endsection
