<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/header-footer.css')}}">
    <link rel="stylesheet" href="{{ asset('css/osis-mpk.css')}}">
    <link rel="stylesheet" href="{{ asset('bootstrap-icons/font/bootstrap-icons.css')}}">

    <title>header-footer</title>
</head>
<body>
    {{-- navbar --}}
    <nav class="navbar shadow p-2 mb-6">
      <div class="container">
        <a class="navbar-brand" href="homepage">
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
              <li><a class="dropdown-item" href="osis-mpk">Struktur Osis dan MPK</a></li>
              <li><a class="dropdown-item" href="/prestasi-siswa">Prestasi Siswa</a></li>
              <li><a class="dropdown-item" href="ekstrakulikuler"> Ekstrakulikuler </a></li>
              <li><a class="dropdown-item" href="#"> Daftra Alumni </a></li>
            </ul>
          </div>
  
          <div class="dropdown">
            <a class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Kurikulum
            </a>
          
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="daftar-wali-kelas">Daftar Wali Kelas</a></li>
              <li><a class="dropdown-item" href="kejuruan">Kejuruan</a></li>
            </ul>
          </div>
  
          <div class="p-1"><a class="btn" href="berita">News</a></div>
          <div class="p-1"><a class="btn" href="">Profile</a></div>
          <div class="p-1"><a class="btn" href="homepage">Home</a></div>
        </div>
      </div>
    </nav>
  {{-- end navbar --}}

  {{-- isi --}}
  <p>a</p>
  <p>a</p>
  
  <div class="judul">  
    <div class="container">
        <img
            src="{{ asset('img/smktelkomjkt2.png') }}"
            alt="smk telkom"
            style="float: right"
        />
        <br /><br /><br /><br /><br />
        <div class="kata">
            <div class="kalimat">
                <p>
                    Struktur Organisasi Osis <br />
                    dan MPK SMK Telkom Jakarta
                </p>
            </div>
            <div class="garis"></div>
        </div>
        {{-- <div class="kalimat" style="margin-left: 40px">
          <p>contoh <br>
          aja </p>
        </div> --}}
    </div>
  </div>

  <div class="container osis-mpk">
    <div class="paragraph-sec" style="font-size: 22px; color:black;">
      <br>Selamat datang di halaman Bagan Struktur Organisasi OSIS MPK SMK
      Telkom Jakarta!<br></br>

      <p>Visi kami adalah menciptakan lingkungan
      sekolah yang inspiratif, inklusif, dan memungkinkan setiap siswa
      untuk berkembang secara holistik. Kami yakin bahwa melalui kegiatan
      dan komitmen yang kuat, OSIS MPK SMK Telkom Jakarta akan menjadi
      wadah yang tepat untuk mengembangkan kepemimpinan, kreativitas, dan>kerjasama
      di antara siswa-siswa kami.<br></p>

      <p>Misi kami Organisasi OSIS MPK SMK
      Telkom Jakarta adalah mendorong partisipasi aktif siswa,
      mengembangkan keterampilan kepemimpinan, menyelenggarakan kegiatan
      bermanfaat dan menghibur, menjaga komunikasi yang efektif, sertamenjalin
      kemitraan yang kuat.<br></p>

      <p>Dengan komitmen kami untuk menciptakan lingkungan
      yang inspiratif dan inklusif, kami bertujuan untuk mengembangkan siswa
      secara holistik melalui kegiatan yang memotivasi, membangun kepemimpinan,
      dan meningkatkan keterampilan, sambil memastikan keberhasilan acara
      yang bermanfaat, komunikasi yang jelas, serta kerjasama yang erat
      dengan semua pihak terkait.<br></p>
    </div>
    <div class="h-3-section-title-sec"><br>
      Struktur Organisasi MPK SMK Telkom Jakarta<br></br>
      <center><img class="mpk" src="{{ asset('img/struktur-mpk.png') }}" alt="SMK Telkom" width="600" height="350"></center>
    </div>   
    <div class="h-3-section-title-sec "><br>
      Struktur Organisasi OSIS SMK Telkom Jakarta<br></br>
      <center><img class="osis" src="{{ asset('img/struktur-osis.png') }}" alt="SMK Telkom" width="600" height="350"></center>
    </div>  

    <div class="bawah d-flex justify-content-between" style="padding-top:5% ">
    <div class="kiri"></div>
    <div class="tengah"></div>
    <div class="kanan col-4 promosi">
      <p>SMK TELKOM Jakarta</p>
      <p> Sekolah Berintegritas yang bernaung di bawah 
          Pendidikan Telkom. 021-5442800 atau WA 08111442600
          Jl. Daan mogot KM.11 Cengkareng Jakarta Barat
          Email : smkteljkt@ypt.or.id atau smkteljkt@gmail.com twitter : smktelkomjakarta
      </p>
    </div>
    </div>
  </div>
    
  {{-- end isi  --}}

  {{-- footer --}}
  <div class="footer">
    <div class="kiri">

      <div class="gambar">
        <img src="{{ asset('img/smktelkomjkt 1.png') }}" alt="SMK Telkom" width="140" height="60">
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

  <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>