@extends('layout')
@section('title', 'Data Mahasiswa')
@section('content')
    <h1 class="text-3xl font-bold mb-6 text-gray-900">📋 Data Mahasiswa</h1>
    @if ($mahasiswa->count() > 0)
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-gray-100 text-gray-600 text-sm uppercase">
                    <th class="p-3 rounded-l-lg">Nama</th>
                    <th class="p-3">NIM</th>
                    <th class="p-3 rounded-r-lg">Jurusan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswa as $m)
                    <tr class="border-b border-gray-100 hover:bg-blue-50 transition">
                        <td class="p-3 font-medium">{{ $m->nama }}</td>
                        <td class="p-3 text-gray-600">{{ $m->nim }}</td>
                        <td class="p-3 text-gray-600">{{ $m->jurusan }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p class="text-gray-500">Belum ada data.</p>
    @endif
@endsection