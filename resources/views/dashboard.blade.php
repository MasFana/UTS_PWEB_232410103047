@extends('layouts.app')

<style>
    .neon {
        position: relative;
        display: inline-block;
    }

    .neon::after {
        content: attr(data-text);
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
        filter: blur(12px);
        opacity: 0.7;
        background: linear-gradient(to left, #6366f1, #ef4444, #3b82f6);
        -webkit-background-clip: text;
        color: transparent;
        pointer-events: none;
    }
</style>

@section('content')
    {{-- Simple gradient buat wellcome --}}
    <main class="container mx-auto flex min-h-screen w-full flex-col items-center justify-center px-4 text-center">
        <h1 class="neon bg-gradient-to-l from-indigo-500 via-red-500 to-blue-500 bg-clip-text pb-4 text-4xl font-bold text-transparent transition-transform duration-300 ease-in-out hover:scale-105 sm:text-5xl md:text-6xl lg:text-7xl xl:text-8xl"
            data-text="Selamat Datang King {{ request('username') }}">
            Selamat Datang King {{ request('username') }}
        </h1>
    </main>
@endsection
