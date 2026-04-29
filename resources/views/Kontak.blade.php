@extends('app')

@section('title', 'Kontak')

@section('content')
<div class="max-w-5xl mx-auto py-20 px-6">
    <div class="mb-16">
        <h1 class="text-4xl font-bold text-gray-900 mb-4">Mari terhubung.</h1>
        <p class="text-lg text-gray-500">Kami terbuka untuk diskusi, pertanyaan, maupun kolaborasi.</p>
    </div>

    <div class="grid md:grid-cols-3 gap-12">
        
        <div class="space-y-12 md:col-span-1">
            <div>
                <h3 class="text-xs font-bold uppercase tracking-widest text-purple-600 mb-3">Kantor</h3>
                <p class="text-gray-700">Jl. Pahala No. 123 <br> Pontianak, Indonesia</p>
            </div>
            
            <div>
                <h3 class="text-xs font-bold uppercase tracking-widest text-purple-600 mb-3">Email</h3>
                <a href="mailto:ayoberdonasi@donasiku.com" class="text-gray-700 hover:text-purple-600 transition-colors border-b border-gray-300 hover:border-purple-600">ayoberdonasi@donasiku.com</a>
            </div>
        </div>

        <div class="md:col-span-2">
            <form action="#" method="POST" class="space-y-6">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-600 mb-2">Nama</label>
                        <input type="text" class="w-full bg-white border border-purple-500 rounded-md focus:ring-2 focus:ring-purple-500 outline-none py-2 px-3 transition-all">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-600 mb-2">Email</label>
                        <input type="text" class="w-full bg-white border border-purple-500 rounded-md focus:ring-2 focus:ring-purple-500 outline-none py-2 px-3 transition-all">
                    </div>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-600 mb-2">Pesan</label>
                   <textarea rows="4" class="w-full bg-white border border-purple-500 rounded-md focus:ring-2 focus:ring-purple-500 outline-none p-3 transition-all"></textarea>
                
                <button type="submit" class="bg-purple-900 text-white px-8 py-3 hover:bg-purple-600 transition-all uppercase tracking-widest text-sm font-bold">
                    Kirim Pesan
                </button>
            </form>
        </div>
    </div>
</div>
@endsection