@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    <h2 class="mb-4 text-center">Contact</h2>

    <div class="row justify-content-center">
        <div class="col-md-6 text-center">
            <p class="mb-4">Silakan hubungi saya lewat salah satu channel di bawah ini.</p>

            <ul class="list-unstyled fs-5">
                <li class="mb-3">
                    <i class="bi bi-envelope-fill"></i>
                    Email: <a href="mailto:emailkamu@gmail.com">revanmeysi130508@gmail.com</a>
                </li>
                {{-- <li class="mb-3">
                    LinkedIn: <a href="https://linkedin.com/in/username-kamu" target="_blank">linkedin.com/in/username-kamu</a>
                </li> --}}
                <li class="mb-3">
                    GitHub: <a href="https://github.com/username-kamu" target="_blank">github.com/username-kamu</a>
                </li>
            </ul>
        </div>
    </div>
@endsection