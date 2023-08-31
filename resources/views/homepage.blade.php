<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
</head>
<body>
  {{-- navbar --}}
  <nav class="navbar shadow p-2 mb-6">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="{{ asset('img/smktelkomjkt 1.png') }}" alt="SMK Telkom" width="120" height="55">
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
            <li><a class="dropdown-item" href="#">Prestasi Siswa</a></li>
            <li><a class="dropdown-item" href="#"> Ekstrakulikuler </a></li>
            <li><a class="dropdown-item" href="#"> Daftra Alumni </a></li>
          </ul>
        </div>

        <div class="dropdown">
          <a class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
  
  <div class="NEWS">
    <div class="overlap-wrapper">
      <div class="overlap">
        <div class="frame">
          <div class="overlap-group">
            <div class="div">
              <div class="flexcontainer">
                <p class="text">
                  <span class="text-wrapper">PENGUMUMAN PERIODE 4 TAHAP 3<br /></span>
                </p>
                <p class="text">
                  <span class="text-wrapper">JALUR KEMITRAAN DAN MANDIRI<br /></span>
                </p>
                <p class="text"><span class="text-wrapper">2023/2024</span></p>
              </div>
              <img class="line" src="img/line-1.svg" />
            </div>
            <img class="smktelkomjkt" src="img/smktelkomjkt-2.png" />
          </div>
        </div>
        <div class="group">
          <p class="untuk-link-daftar">
            <span class="span">Untuk link daftar ulang klik </span>
            <a href="http://bit.ly/PPDB_PERIODE4T3_TA2324" target="_blank" rel="noopener noreferrer"
              ><span class="text-wrapper-2">bit.ly/PPDB_PERIODE4T3_TA2324<br /></span
            ></a>
            <span class="span"><br /><br /></span>
          </p>
          <img class="element" src="img/1-23-750x430-1.png" />
          <div class="overlap-2">
            <div class="ellipse"></div>
            <div class="ellipse-2"></div>
            <img class="young-woman-studying" src="img/young-woman-studying-online.png" />
          </div>
          <a href="https://www.facebook.com/smktelkomjkt/?ref=embed_page" target="_blank" rel="noopener noreferrer"
            ><img class="facebook" src="img/facebook.svg"
          /></a>
          <div class="instagram">
            <a href="https://www.instagram.com/smktelkomjakarta/" target="_blank" rel="noopener noreferrer"
              ><img class="ant-design-instagram" src="img/image.svg"
            /></a>
          </div>
          <div class="twitter">
            <a href="https://twitter.com/telkomschool?s=20" target="_blank" rel="noopener noreferrer"
              ><img class="ant-design-twitter" src="img/ant-design-twitter-outlined.svg"
            /></a>
          </div>
          <div class="div-wrapper"><div class="text-wrapper-3">Share</div></div>
          <img class="whatsapp-image" src="img/whatsapp-image-2023-05-27-at-08-58-1.png" />
          <p class="SMK-TELKOM-jakarta">
            SMK TELKOM Jakarta<br /><br />Sekolah Berintegritas yang bernaung di bawah <br />Pendidikan Telkom.
            021-5442800 atau WA 08111442600<br />Jl. Daan mogot KM.11 Cengkareng Jakarta Barat<br />Email :
            smkteljkt@ypt.or.id atau smkteljkt@gmail.com twitter : smktelkomjakarta
          </p>
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