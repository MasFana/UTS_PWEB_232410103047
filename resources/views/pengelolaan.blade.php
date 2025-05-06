@extends('layouts.app')

@section('content')
    <main class="container mx-auto mt-12 flex min-h-screen flex-col items-center md:px-4 py-8">
        {{-- tittle kek dashboard --}}
        <h1 class="mb-8 text-center text-4xl font-bold sm:text-5xl md:text-6xl">
            <span class="bg-gradient-to-r from-indigo-500 via-red-500 to-blue-500 bg-clip-text text-transparent">
                Pengelolaan Akun
            </span>
        </h1>

        {{-- table akun --}}
        <div
            class="w-full max-w-4xl md:rounded-xl border border-white/20 bg-black/20 p-4 md:p-8 shadow-lg backdrop-blur-sm transition-all duration-300 hover:border-white/40 hover:shadow-xl">
            <div class="mb-4 flex gap-4 items-center justify-between">
                <input type="text" placeholder="Search..."
                    class="w-full rounded-lg border border-white/20 bg-black/20 px-4 py-2 text-sm text-gray-300 placeholder-gray-400 focus:border-transparent focus:outline-none focus:ring-2 focus:ring-indigo-500">
                
                <a class="rounded-lg border border-white/20 px-4 py-2 text-sm font-medium text-white shadow-md transition-all hover:from-green-600 hover:to-green-700 hover:shadow-lg">
                    Tambah
                </a>
            </div>
            <div class="overflow-x-scroll md:overflow-hidden rounded-lg border border-white/20">

                <table class="w-full table-auto text-left text-gray-300">
                    <thead class="">
                        <tr class="">
                            <th class="px-4 py-2 font-bold">Username</th>
                            <th class="px-4 py-2 font-bold">Email</th>
                            <th class="px-4 py-2 font-bold">Role</th>
                            <th class="px-4 py-2 font-bold">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr class="border-t border-white/20 hover:bg-white/10">
                                <td class="px-4 py-2">{{ $user['username'] }}</td>
                                <td class="px-4 py-2">{{ $user['email'] }}</td>
                                <td class="px-4 py-2">{{ $user['role'] }}</td>
                                <td class="flex gap-4 px-4 py-2">
                                    <a class="text-blue-500 hover:text-blue-700"">Edit</a>
                                    <a class="text-red-500 hover:text-red-700" type="submit">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </main>
@endsection
