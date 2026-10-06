@extends('layout')
@section('title', 'Skills')
@section('content')
    <h1 class="text-3xl font-bold mb-6 text-gray-900">💡 Skill Saya</h1>
    <div class="grid gap-3">
        @foreach ($skills as $skill)
            <div class="flex items-center gap-3 bg-blue-50 border border-blue-100 rounded-lg px-4 py-3">
                <span class="text-blue-600">✔</span>
                <span class="font-medium">{{ $skill }}</span>
            </div>
        @endforeach
    </div>
@endsection