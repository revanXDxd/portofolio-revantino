@extends('layouts.app')

@section('title', 'Portfolio - Revantino Meysi')

@section('content')

        {{-- HOME --}}
    <section id="home" class="py-5">
        <div class="row align-items-center">
            <div class="col-md-6">
                <p class="text-accent fw-semibold mb-1">Halo Semua 👋, Saya</p>
                <h1 class="display-5 fw-bold">Revantino Meysi</h1>
                <p class="lead mb-2">Junior Web Developer</p>
                <p class="mb-4">Saya membangun aplikasi web menggunakan Laravel &amp; Bootstrap, dengan fokus pada kode yang rapi dan antarmuka yang fungsional.</p>
                <a href="#contact" class="btn btn-primary btn-lg">Hubungi Saya</a>
            </div>
            <div class="col-md-6 text-center mt-4 mt-md-0">
                <div class="photo-blob">
                    <img src="{{ asset('img/Revan1.jpeg') }}" alt="Foto Revantino Meysi">
                </div>
            </div>
        </div>
    </section>

    {{-- ABOUT --}}
    <section id="about" class="py-5 border-top">
        <div class="row g-5">
            <div class="col-md-6">
                <p class="text-accent fw-semibold mb-1">Tentang Saya</p>
<h2 class="mb-3">Junior Web Developer</h2>
<p>
    Saya adalah lulusan SMK Bina Mandiri Multimedia, jurusan Rekayasa Perangkat Lunak (RPL).
    Selama masa Praktik Kerja Lapangan (PKL) di Kantor Kecamatan Klapanunggal, saya terlibat
    dalam pengelolaan sistem administrasi surat masuk dan surat keluar, yang membangun
    pemahaman saya tentang alur kerja sistem informasi di lingkungan instansi pemerintahan.
    Saat ini saya fokus mengembangkan kemampuan sebagai Web Developer menggunakan PHP dan
    Laravel, dengan minat khusus pada pembuatan aplikasi berbasis web yang rapi dan fungsional.
</p>
            </div>
            <div class="col-md-6">
               <h5 class="mb-3">Tech Stack</h5>
<div class="d-flex flex-wrap gap-3 mb-4">
    <span class="badge bg-dark p-2 fs-6"><i class="devicon-php-plain colored"></i> PHP</span>
    <span class="badge bg-dark p-2 fs-6"><i class="devicon-laravel-plain colored"></i> Laravel</span>
    <span class="badge bg-dark p-2 fs-6"><i class="devicon-bootstrap-plain colored"></i> Bootstrap</span>
    <span class="badge bg-dark p-2 fs-6"><i class="devicon-mysql-plain colored"></i> MySQL</span>
    <span class="badge bg-dark p-2 fs-6"><i class="devicon-git-plain colored"></i> Git</span>
    <span class="badge bg-dark p-2 fs-6"><i class="devicon-html5-plain colored"></i> HTML</span>
    <span class="badge bg-dark p-2 fs-6"><i class="devicon-css3-plain colored"></i> CSS</span>
</div>
                <h5 class="mb-3">Mari Terkoneksi</h5>
                <p>Terbuka untuk kolaborasi, diskusi proyek, atau peluang profesional baru.</p>
            </div>
        </div>
    </section>

    {{-- PORTFOLIO --}}
    <section id="portfolio" class="py-5 border-top border-secondary-subtle">
        <h2 class="text-center mb-4">Portfolio</h2>

        @php
    $projects = [
        [
            'title' => 'Cafe-VNZ',
            'desc' => 'Website cafe yang dibangun menggunakan Next.js dengan database MySQL (Prisma ORM) dan sistem autentikasi pengguna. Dilengkapi dengan animasi dan tampilan interaktif menggunakan GSAP.',
            'image' => 'img/portofolio/portofolio1.png',
            'link' => 'https://github.com/revanXDxd/cafe-vnz',
        ],
        [
            'title' => 'Booking-Goor',
            'desc' => 'Sistem booking lapangan olahraga berbasis web menggunakan Laravel. Pengguna dapat melakukan reservasi lapangan secara online, sementara admin memiliki panel khusus untuk mengelola data booking dan lapangan.',
            'image' => 'img/portofolio/portofolio2.png',
            'link' => 'https://github.com/revanXDxd/Projek-Akhir',
        ],
    ];
@endphp

<div class="row g-4 justify-content-center">
    @foreach ($projects as $project)
        <div class="col-md-5">
            <div class="card h-100">
                <img src="{{ asset($project['image']) }}" class="card-img-top" alt="{{ $project['title'] }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $project['title'] }}</h5>
                    <p class="card-text">{{ $project['desc'] }}</p>
                    <a href="{{ $project['link'] }}" target="_blank" class="btn btn-outline-secondary btn-sm">Lihat di GitHub</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
    </section>

{{-- PENDIDIKAN --}}
<section id="pendidikan" class="py-5 border-top">
    <h2 class="text-center mb-4">Pendidikan</h2>
    <div class="row justify-content-center">
        <div class="col-auto logo-box">
            <a href="https://smkbinamandirimultimedia.sch.id/" target="_blank">
                <img src="{{ asset('img/pendidikan/bm3.png') }}" alt="SMK Bina Mandiri Multimedia">
            </a>
        </div>
    </div>
</section>

    {{-- PENGALAMAN --}}
<section id="pengalaman" class="py-5 border-top">
    <h2 class="text-center mb-4">Pengalaman</h2>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card p-4">
                <div class="d-flex align-items-start gap-3">
                    <img src="{{ asset('img/pengalaman/klapanunggal.jpg') }}" alt="Kecamatan Klapanunggal" style="width: 60px; height: 60px; object-fit: contain;">
                    <div>
                        <h5 class="mb-1">Praktik Kerja Lapangan (PKL)</h5>
                        <p class="text-accent mb-2">Kantor Kecamatan Klapanunggal &middot; Juni 2025 - Agustus 2025</p>
                        <p class="mb-0">
                            Bertanggung jawab dalam pengelolaan administrasi surat masuk dan surat keluar
                            menggunakan Microsoft Excel dan Word, mendukung kelancaran arsip dan dokumentasi
                            instansi selama masa PKL.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

  {{-- BLOG --}}
<section id="blog" class="py-5 border-top">
    <h2 class="text-center mb-4">Blog</h2>
    <div class="row g-4">
        <div class="col-md-6">
            <div class="card h-100">
                <img src="{{ asset('img/blog/blog1.png') }}" class="card-img-top" alt="PHP Native vs Laravel">
                <div class="card-body">
                    <h5 class="card-title">Perbedaan PHP Native vs Laravel: Kenapa Saya Pilih Laravel</h5>
                    <p class="card-text">
                        Cerita transisi belajar saya dari PHP native ke Laravel, dan alasan kenapa
                        framework ini lebih efisien untuk membangun aplikasi web modern.
                    </p>
                    <a href="https://sites.google.com/view/blog-revantino-meysi/perbedaan-laravel-native-dan-laravel" target="_blank" class="btn btn-outline-secondary btn-sm">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card h-100">
                <img src="{{ asset('img/blog/blog2.png') }}" class="card-img-top" alt="CRUD Laravel">
                <div class="card-body">
                    <h5 class="card-title">Cara Membuat CRUD Sederhana di Laravel untuk Pemula</h5>
                    <p class="card-text">
                        Tutorial step-by-step membuat fitur Create, Read, Update, Delete (CRUD)
                        menggunakan Laravel, cocok buat yang baru mulai belajar framework ini.
                    </p>
                    <a href="https://sites.google.com/view/blog-revantino-meysi/cara-membuat-crud-sederhana-di-laravel-untuk-pemula" target="_blank" class="btn btn-outline-secondary btn-sm">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
</section>

    {{-- CONTACT --}}
<section id="contact" class="py-5 border-top text-center">
    <h2 class="mb-4">Kontak</h2>
    <p class="mb-4">Terbuka untuk kolaborasi, diskusi proyek, atau peluang profesional baru.</p>

    <div class="d-flex justify-content-center gap-4 fs-3">
    <a href="mailto:revanmeysi130508@gmail.com" title="Email">
        <i class="bi bi-envelope-fill"></i>
    </a>
    <a href="https://github.com/revanXDxd" target="_blank" title="GitHub">
        <i class="bi bi-github"></i>
    </a>
    <a href="https://instagram.com/username-kamu" target="_blank" title="Instagram">
        <i class="bi bi-instagram"></i>
    </a>
</div>
</section>

@endsection