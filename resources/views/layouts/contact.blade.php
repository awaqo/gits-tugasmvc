@extends('templates.master')

@section('content')
<section id="contact" class="pt-36 pb-32 bg-gray-900">
    <div class="container">
        <div class="w-full px-4">
            <div class="max-w-xl mx-auto text-center mb-10">
                <h4 class="font-semibold text-lg text-white mb-1">Kontak</h4>
                <div class="h-1 w-16 bg-white rounded-full mb-5 mx-auto"></div>
                <h2 class="font-bold text-3xl text-white mb-4">Hubungi Saya</h2>
            </div>
        </div>

        <div class="flex flex-wrap justify-center items-center">
            <!-- whatsapp -->
            <div class="w-full px-4 lg:w-1/4">
                <div class="w-48 py-4 text-slate-700 rounded-xl mx-auto hover:text-green-500 transition duration-500">
                    <a href="https://wa.me/628176741866" target="_blank">
                        <div class="flex items-center justify-center">
                            <svg role="img" width="40" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>WhatsApp</title><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                            <p class="inline-block ml-2 text-2xl font-semibold">WhatsApp</p>
                        </div>
                    </a>
                </div>
            </div>
            <!-- email -->
            <div class="w-full px-4 lg:w-1/4">
                <div class="w-48 py-4 text-slate-700 rounded-xl mx-auto hover:text-red-600 transition duration-500">
                    <a href="mailto:aqiljawadalfurqon@gmail.com" target="_blank">
                        <div class="flex items-center justify-center">
                        <svg role="img" width="40" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Gmail</title><path d="M24 5.457v13.909c0 .904-.732 1.636-1.636 1.636h-3.819V11.73L12 16.64l-6.545-4.91v9.273H1.636A1.636 1.636 0 0 1 0 19.366V5.457c0-2.023 2.309-3.178 3.927-1.964L5.455 4.64 12 9.548l6.545-4.91 1.528-1.145C21.69 2.28 24 3.434 24 5.457z"/></svg>
                            <p class="inline-block ml-2 text-2xl font-semibold">Email</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection