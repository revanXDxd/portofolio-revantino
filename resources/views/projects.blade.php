@extends('layouts.app')

@section('title', 'Projects')

@section('content')
    <h2 class="mb-4 text-center">Projects</h2>

    @php
        $projects = [
            [
                'title' => 'Nama Project 1',
                'desc' => 'Deskripsi singkat tentang project ini, teknologi yang dipakai, dan masalah yang diselesaikan.',
                'link' => '#',
            ],
            [
                'title' => 'Nama Project 2',
                'desc' => 'Deskripsi singkat tentang project ini, teknologi yang dipakai, dan masalah yang diselesaikan.',
                'link' => '#',
            ],
            [
                'title' => 'Nama Project 3',
                'desc' => 'Deskripsi singkat tentang project ini, teknologi yang dipakai, dan masalah yang diselesaikan.',
                'link' => '#',
            ],
        ];
    @endphp

    <div class="row g-4">
        @foreach ($projects as $project)
            <div class="col-md-4">
                <div class="card h-100 p-3">
                    <div class="card-body">
                        <h5 class="card-title">{{ $project['title'] }}</h5>
                        <p class="card-text">{{ $project['desc'] }}</p>
                        <a href="{{ $project['link'] }}" class="btn btn-outline-secondary btn-sm">Lihat Detail</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection