@extends('app')

@section('title', 'Profil')

@section('content')
<div class="max-w-5xl mx-auto py-12 px-6">
    <div class="text-center mb-12">
        <h1 class="text-4xl font-extrabold text-purple-600 mb-4">Tentang Donasiku</h1>
        <div class="h-1 w-20 bg-purple-500 mx-auto rounded-full"></div>
    </div>

    <div class="grid md:grid-cols-2 gap-10 items-center">
        <div class="bg-purple-100 rounded-2xl p-8 flex justify-center items-center h-64">
            <span class="text-purple-500 text-6xl font-bold">Donasiku</span>
        </div>

        <div>
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Membangun Kebaikan Bersama</h2>
            <p class="text-gray-600 leading-relaxed mb-6">
                Donasiku hadir sebagai platform filantropi digital yang mengedepankan transparansi, kemudahan, dan keamanan. 
                Kami percaya bahwa setiap kontribusi, sekecil apa pun, memiliki kekuatan untuk menciptakan perubahan besar bagi mereka yang membutuhkan.
            </p>
            <div class="space-y-4">
                <div class="flex items-start">
                    <span class="text-purple-600 mr-3">✔</span>
                    <p class="text-gray-700"><strong>Transparan:</strong> Laporan penyaluran dana yang dapat diakses secara real-time.</p>
                </div>
                <div class="flex items-start">
                    <span class="text-purple-600 mr-3">✔</span>
                    <p class="text-gray-700"><strong>Terpercaya:</strong> Verifikasi ketat terhadap setiap kampanye donasi.</p>
                </div>
                <div class="flex items-start">
                    <span class="text-purple-600 mr-3">✔</span>
                    <p class="text-gray-700"><strong>Mudah:</strong> Dukungan berbagai metode pembayaran digital.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-3 gap-6 mt-16 text-center">
        <div class="p-6 bg-white shadow-lg rounded-xl border border-gray-100">
            <h3 class="text-3xl font-bold text-purple-600">1000+</h3>
            <p class="text-gray-500">Donatur Tergabung</p>
        </div>
        <div class="p-6 bg-white shadow-lg rounded-xl border border-gray-100">
            <h3 class="text-3xl font-bold text-purple-600">500+</h3>
            <p class="text-gray-500">Program Terbantu</p>
        </div>
        <div class="p-6 bg-white shadow-lg rounded-xl border border-gray-100">
            <h3 class="text-3xl font-bold text-purple-600">99%</h3>
            <p class="text-gray-500">Kepuasan Pengguna</p>
        </div>
    </div>
</div>
@endsection