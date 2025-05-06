@extends('layouts.app')

@section('content')
    <main class="flex min-h-screen items-center justify-center px-4 pb-12 sm:px-6 lg:px-8">
        <div class="w-full max-w-md space-y-8 rounded-lg  md:border md:border-white/20 md:bg-black/20 md:px-8 md:shadow-lg md:backdrop-blur-sm md:pb-12">
            <div class="text-center">
                <h2 class="md:mt-6 text-3xl font-extrabold text-white">
                    Masuk
                </h2>
            </div>
            <form class="mt-8 space-y-6" method="POST" action="/login">
                @csrf
                <div class="space-y-4 rounded-md shadow-sm">
                    <div>
                        <label for="username">Username</label>
                        <input
                            class="relative block w-full appearance-none rounded-lg border border-gray-700 bg-gray-800 px-3 py-2 text-white placeholder-gray-400 focus:border-transparent focus:outline-none focus:ring-2 focus:ring-indigo-500"
                            id="username" name="username" type="text" required placeholder="Username">
                    </div>
                    <div>
                        <label for="password">Password</label>
                        <input
                            class="relative block w-full appearance-none rounded-lg border border-gray-700 bg-gray-800 px-3 py-2 text-white placeholder-gray-400 focus:border-transparent focus:outline-none focus:ring-2 focus:ring-indigo-500"
                            id="password" name="password" type="password" required placeholder="Password">
                    </div>
                </div>

                <button
                    class="group relative flex w-full justify-center rounded-lg border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white transition-colors duration-200 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                    type="submit">
                    Sign in
                </button>
                @if ($errors->any())
                    <div class="mt-2 text-center text-sm text-red-500">
                        {{ $errors->first() }}
                    </div>
                @endif
            </form>
        </div>
    </main>
@endsection
