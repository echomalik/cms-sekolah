<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <link rel="stylesheet" href="{{ asset('css/homepage.css')}}">
</head>
<body>
  {{-- navbar --}}
  <nav class="navbar shadow p-2 mb-6">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="./img/smktelkomjkt 1.png" alt="SMK Telkom" width="120" height="55">
      </a>
      <div class="d-flex flex-row-reverse">
        <div class="p-1"><a class="btn" href="">Contact</a></div>
        <div class="p-1"><a class="btn" href="">Business Center</a></div>
        <div class="p-1"><a class="btn" href="">Gallery</a></div>

        <div class="dropdown">
          <a class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Kesiswaan
          </a>
        
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Struktur Osis dan MPK</a></li>
            <li><a class="dropdown-item" href="/prestasi-siswa">Prestasi Siswa</a></li>
            <li><a class="dropdown-item" href="#"> Ekstrakulikuler </a></li>
            <li><a class="dropdown-item" href="#"> Daftra Alumni </a></li>
          </ul>
        </div>

        <div class="dropdown">
          <a class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Kurikulum
          </a>
        
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="daftar-wali-kelas">Daftar Wali Kelas</a></li>
            <li><a class="dropdown-item" href="#">Kejuruan</a></li>
          </ul>
        </div>

        <div class="p-1"><a class="btn" href="berita">News</a></div>
        <div class="p-1"><a class="btn" href="guru.blade.php">Profile</a></div>
        <div class="p-1"><a class="btn" href="">Home</a></div>
      </div>
    </div>
  </nav>
  {{-- end navbar --}}
  
  <div class="batas"></div>

  <div class="isi">
    <div class="container">
      <div class="welcom">Welcom</div>
      <div class="kotak">
        <div class="kiri">
          <div class="judul">
            SMK TELKOM JAKARTA PRESENT
          </div>
          <div class="keterangan">
            SMK Telkom Jakarta adalah sekolah menengah kejuruan yang berdedikasi untuk mempersiapkan siswa-siswa kami menjadi pemimpin di bidang teknologi informasi dan komunikasi
          </div>
          <button>test ajaya </button>
          <button>test ajaya </button>
        </div>
        <div class="kanan">
          <div class="gambar">
            <img src="./img/smktelkomjkt 1.png" alt="pembuka">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="end"></div>

  {{-- footer --}}
  <div class="footer">
    <div class="kiri">

      <div class="gambar">
        <img src="{{ asset('img/smktelkomjkt 1.png') }}" alt="SMK Telkom" width="120" height="55">
      </div>

      <div class="alamat col-6 p-4 my-auto">
        Alamat : Jl. Daan Mogot KM.11 RT.01/RW.04, Jl. Raya Daan Mogot No.KM. 11, RT.1/RW.4, Kedaung Kali Angke, Kecamatan Cengkareng, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11710
      </div>
      <div class="keterangan my-auto col-6 p-4">
        <p>Sekolah Berintegritas yang bernaung di bawah Yayasan Pendidikan Telkom.</p> 
        <p>021-5442800 atau WA 08111442600</p>
      </div>
    </div>

    <div class="kanan col-2 p-4 my-auto bg-primar">
      <center>Follow us</center>
      <div class="social mx-auto my-auto d-flex justify-content-center h-100">
        <div class="facebook">
          <a style="text-decoration: none," href="a">
            <i class="bi bi-facebook p-1 my-auto" style="font-size: 2rem; color:black;"></i>
          </a>
        </div>
        <div class="instagram">
          <a style="text-decoration: none," href="b">
            <i class="bi bi-instagram p-5 my-auto" style="font-size: 2rem; color:black;"></i>
          </a>
        </div>
        <div class="twitter">
          <a style="text-decoration: none," href="s">
            <i class="bi bi-twitter p-1 my-auto" style="font-size: 2rem; color:black;"></i>
          </a>        
        </div>
      </div>
    </div>
  </div>
  {{-- end footer --}}

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>