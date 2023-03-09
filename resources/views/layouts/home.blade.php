@extends('templates.master')

@section('content')
<section id="home" class="flex items-top justify-center min-h-screen bg-gray-900 sm:items-center py-4 sm:pt-0">
    <div>
        <img src="{{ asset('img/bubble.png') }}" alt="bubble" class="absolute left-0 z-10">
    </div>
    <div class="container">
        <div class="flex flex-wrap">
            <div class="w-full px-4 self-center lg:w-1/2">
                <h1 class="text-base font-semibold text-slate-200 mb-2 md:text-xl">Hallo 👋🏻 saya <span class="block h-14 font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-violet-900 text-4xl mt-1 lg:text-5xl">{{ $user }}</span></h1>
                <h2 class="font-normal text-slate-200 text-lg mb-5 lg:text-2xl"><span class="font-medium text-white">Front End Developer</span> & UI/UX Designer</h2>
                <p class="font-normal text-slate-200 mb-10 leading-relaxed">Studi Independen Bersertifikat • <b>Gits Indonesia</b> • <i class="text-blue-500 font-bold">Tugas 4 - MVC </i></p>

                <a href="{{ route('contact') }}" class="text-base font-semibold text-white bg-blue-700 py-3 px-8 rounded-xl hover:shadow-lg hover:bg-blue-600 transition duration-300 ease-in-out ">Hubungi Saya</a>
            </div>

            <div class="w-full self-end px-4 lg:w-1/2">
                <div class="mt-10">
                    <img src="{{ asset('img/foto-diri.png') }}" alt="Foto Aqil" class="max-w-full mx-auto" />
                </div>
            </div>
        </div>
    </div>
</section>

@endsection