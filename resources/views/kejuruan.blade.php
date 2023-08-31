<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <link rel="stylesheet" href="{{ asset('css/kejuruan.css') }}">
</head>

<body>
    {{-- navbar --}}
    <nav class="navbar shadow p-2 mb-6">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('img/logo.jpg') }}" alt="SMK Telkom" width="120" height="55">
            </a>
            <div class="d-flex flex-row-reverse">
                <div class="p-1"><a class="btn" href="">Contact</a></div>
                <div class="p-1"><a class="btn" href="">Business Center</a></div>
                <div class="p-1"><a class="btn" href="">Gallery</a></div>

                <div class="dropdown">
                    <a class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Kesiswaan
                    </a>

                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Struktur Osis dan MPK</a></li>
                        <li><a class="dropdown-item" href="#">Prestasi Siswa</a></li>
                        <li><a class="dropdown-item" href="#"> Ekstrakulikuler </a></li>
                        <li><a class="dropdown-item" href="#"> Daftra Alumni </a></li>
                    </ul>
                </div>

                <div class="dropdown">
                    <a class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Kurikulum
                    </a>

                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Daftar Wali Kelas</a></li>
                        <li><a class="dropdown-item" href="#">Kejuruan</a></li>
                    </ul>
                </div>

                <div class="p-1"><a class="btn" href="">News</a></div>
                <div class="p-1"><a class="btn" href="guru.blade.php">Profile</a></div>
                <div class="p-1"><a class="btn" href="">Home</a></div>
            </div>
        </div>
    </nav>
    {{-- end navbar --}}

    <div class="end1"></div>

    <div class="isi">
        <div class="container">
            <div class="telkom d-flex justify-content-between">
                <div class="kiri"></div>
                <div class="tengah"></div>
                <div class="kanan">
                    <img src="{{ asset('img/logo.jpg') }}">
                </div>
            </div>

            <div class="judul">
                <b>Jurusan</b>
                <p class="paragraph-sec">Disini dapat anda melihat<br />jurusan apa saja yang ada di SMK Telkom Jakarta
                </p>
            </div>



            <div class="kotak">
                <div class="card " style="width: 18rem;">
                    <img src="{{ asset('img/transmisi.jpg') }}" class="rounded" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Teknik Transmisi</h5>
                        <p class="card-text">Teknik Transmisi Telekomunikasi
                            adalah jurusan yang mempelajari
                            semua aspek teknologi,
                            implementasi penyampaian
                            informasi dan pengendali dengan
                            menggunakan media Fiber Optik,
                            gelombang elektromagnetik,
                            Radio Microwave dan Satellite.</p>
                    </div>
                </div>
            </div>



            <div class="kotak">
                <div class="card " style="width: 18rem;">
                    <img src="{{ asset('img/tja.jpg') }}" class="rounded" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Teknik Jaringan Akses</h5>
                        <p class="card-text">Teknik Transmisi Telekomunikasi
                            adalah jurusan yang mempelajari
                            semua aspek teknologi,
                            implementasi penyampaian
                            informasi dan pengendali dengan
                            menggunakan media Fiber Optik,
                            gelombang elektromagnetik,
                            Radio Microwave dan Satellite.
                        </p>
                    </div>
                </div>
            </div>





            <div class="kotak">
                <div class="card " style="width: 18rem;">
                    <img src="{{ asset('img/tkj.jpg') }}" class="rounded" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Teknik Komputer Jaringan</h5>
                        <p class="card-text">Pengertian Teknik Komputer Jaringan
                            (Computer Network Engineering)
                            adalah : “Suatu disiplin ilmu yang
                            membahas semua aspek teknologi
                            dan implementasi jaringan komputer,
                            pengendalian layanan pada
                            jaringan komputer local dan internet,
                            pengaturan perangkat jaringan
                            Wireline dan Wireless.”
                        </p>
                    </div>
                </div>
            </div>




            <div class="kotak">
                <div class="card " style="width: 18rem;">
                    <img src="{{ asset('img/rpl.jpg') }}" class="rounded" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Rekayasa Perangkat Lunak</h5>
                        <p class="card-text">Rekayasa Perangkat Lunak
                            (Software Engineering) adalah :
                            “ Suatu disiplin ilmu yang membahas
                            semua aspek produksi
                            perangkat lunak, mulai dari tahap
                            awal yaitu analisa,kebutuhan pengguna,
                            menentukan spesifikasi dari kebutuhan
                            pengguna, desain, pengkodean,
                            pengujian sampai pemeliharaan
                            sistem setelah digunakan.”
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>



    <div class="end">

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>
