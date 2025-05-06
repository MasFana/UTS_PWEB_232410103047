@extends('layouts.app')

@section('content')
    <main class="mt-12 container mx-auto flex min-h-screen flex-col items-center px-4 py-8">
        {{-- tittle kek dashboard --}}
        <h1 class="mb-8 text-center text-4xl font-bold sm:text-5xl md:text-6xl">
            <span class="bg-gradient-to-r from-indigo-500 via-red-500 to-blue-500 bg-clip-text text-transparent">
                Profile King {{ $user['username'] }}
            </span>
        </h1>

        {{-- card profile --}}
        <div class="w-full max-w-md rounded-xl border border-white/20 bg-black/20 p-6 shadow-lg backdrop-blur-sm transition-all duration-300 hover:border-white/40 hover:shadow-xl">
            <div class="flex flex-col items-center space-y-4 sm:flex-row sm:space-x-6 sm:space-y-0">
                <!-- Profile Image -->
                <img class="h-24 w-24 rounded-lg object-fit shadow-md sm:h-28 sm:w-28" 
                     src="image.png" 
                     alt="Profile Picture">

                {{-- detail info --}}
                <div class="text-center sm:text-left">
                    <h2 class="text-xl font-bold text-white md:text-2xl">Informasi Akun</h2>
                    <div class="mt-3 space-y-1">
                        <p class="text-gray-300">
                            <span class="font-medium text-white">Username:</span> {{ $user['username'] }}
                        </p>
                        <p class="text-gray-300">
                            <span class="font-medium text-white">Email:</span> {{ $user['email'] }}
                        </p>
                        <p class="text-gray-300">
                            <span class="font-medium text-white">Role:</span> {{ $user['role'] }}
                        </p>
                    </div>
                </div>
            </div>

            {{-- logout --}}
            <div class="mt-8">
                <a href="/logout" class="block w-full rounded-lg bg-gradient-to-r from-red-500 to-red-600 px-6 py-3 text-center font-medium text-white shadow-md transition-all hover:from-red-600 hover:to-red-700 hover:shadow-lg">
                    Logout
                </a>
            </div>
        </div>
    </main>
@endsection