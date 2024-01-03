<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/header-footer.css')}}">
    <link rel="stylesheet" href="{{ asset('bootstrap-icons/font/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('css/flip2.css')}}">
    <link rel="stylesheet" href="{{ asset('css/prestasi.css')}}">

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
                    Prestasi Siswa dan Siswi <br />
                    SMK Telkom Jakarta
                </p>
            </div>
            <div class="garis"></div>
        </div>
        <div class="kalimat" style="margin-left: 40px">
          <p>Berikut adalah beberapa Prestasi <br>
            siswa dan siswi SMK Telkom Jakarta</p>
        </div>
    </div>
</div>
{{-- end --}}

<div class="container">
    <div class="maincontainer">
    <div class="thecard">
        <div class="thefront">
            <div class="image"><img src="{{asset('img/alexander.png') }}" alt="" width="300px" height="320"></div>
            <div class="title" style="font-size: 20px"><center>Alexander Nelson Joses</center></div>
        </div>
        <div class="theback">
            <div class="penjelasan" style="text-align: center; margin-top: 10px">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam vel repellendus, ipsam voluptate hic error minima harum at, fugiat consequatur sequi, tempora recusandae distinctio necessitatibus quaerat ullam sunt? Illo, quidem.
            </div>
            <div class="social" style="margin-top: 20px">
                <div class="social mx-auto my-auto d-flex justify-content-center h-100">
                    <div class="facebook">
                        <a style="text-decoration: none" href="a">
                            <i class="bi bi-facebook p-1 my-auto" style="font-size: 2rem; color: black;"></i>
                        </a>
                    </div>
                    <div class="instagram">
                        <a style="text-decoration: none" href="b">
                            <i class="bi bi-instagram p-5 my-auto" style="font-size: 2rem; color: black;"></i>
                        </a>
                    </div>
                    <div class="twitter">
                        <a style="text-decoration: none" href="">
                            <i class="bi bi-twitter p-1 my-auto" style="font-size: 2rem; color: black;"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="thecard">
        <div class="thefront">
            <div class="image"><img src="{{asset('img/alexander.png') }}" alt="" width="300px" height="320"></div>
            <div class="title" style="font-size: 20px"><center>Alexander Nelson Joses</center></div>
        </div>
        <div class="theback">
            <div class="penjelasan" style="text-align: center; margin-top: 10px">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam vel repellendus, ipsam voluptate hic error minima harum at, fugiat consequatur sequi, tempora recusandae distinctio necessitatibus quaerat ullam sunt? Illo, quidem.
            </div>
            <div class="social" style="margin-top: 20px">
                <div class="social mx-auto my-auto d-flex justify-content-center h-100">
                    <div class="facebook">
                        <a style="text-decoration: none" href="a">
                            <i class="bi bi-facebook p-1 my-auto" style="font-size: 2rem; color: black;"></i>
                        </a>
                    </div>
                    <div class="instagram">
                        <a style="text-decoration: none" href="b">
                            <i class="bi bi-instagram p-5 my-auto" style="font-size: 2rem; color: black;"></i>
                        </a>
                    </div>
                    <div class="twitter">
                        <a style="text-decoration: none" href="">
                            <i class="bi bi-twitter p-1 my-auto" style="font-size: 2rem; color: black;"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="thecard">
        <div class="thefront">
            <div class="image"><img src="{{asset('img/alexander.png') }}" alt="" width="300px" height="320"></div>
            <div class="title" style="font-size: 20px"><center>Alexander Nelson Joses</center></div>
        </div>
        <div class="theback">
            <div class="penjelasan" style="text-align: center; margin-top: 10px">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam vel repellendus, ipsam voluptate hic error minima harum at, fugiat consequatur sequi, tempora recusandae distinctio necessitatibus quaerat ullam sunt? Illo, quidem.
            </div>
            <div class="social" style="margin-top: 20px">
                <div class="social mx-auto my-auto d-flex justify-content-center h-100">
                    <div class="facebook">
                        <a style="text-decoration: none" href="a">
                            <i class="bi bi-facebook p-1 my-auto" style="font-size: 2rem; color: black;"></i>
                        </a>
                    </div>
                    <div class="instagram">
                        <a style="text-decoration: none" href="b">
                            <i class="bi bi-instagram p-5 my-auto" style="font-size: 2rem; color: black;"></i>
                        </a>
                    </div>
                    <div class="twitter">
                        <a style="text-decoration: none" href="">
                            <i class="bi bi-twitter p-1 my-auto" style="font-size: 2rem; color: black;"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="thecard">
        <div class="thefront">
            <div class="image"><img src="{{asset('img/alexander.png') }}" alt="" width="300px" height="320"></div>
            <div class="title" style="font-size: 20px"><center>Alexander Nelson Joses</center></div>
        </div>
        <div class="theback">
            <div class="penjelasan" style="text-align: center; margin-top: 10px">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam vel repellendus, ipsam voluptate hic error minima harum at, fugiat consequatur sequi, tempora recusandae distinctio necessitatibus quaerat ullam sunt? Illo, quidem.
            </div>
            <div class="social" style="margin-top: 20px">
                <div class="social mx-auto my-auto d-flex justify-content-center h-100">
                    <div class="facebook">
                        <a style="text-decoration: none" href="a">
                            <i class="bi bi-facebook p-1 my-auto" style="font-size: 2rem; color: black;"></i>
                        </a>
                    </div>
                    <div class="instagram">
                        <a style="text-decoration: none" href="b">
                            <i class="bi bi-instagram p-5 my-auto" style="font-size: 2rem; color: black;"></i>
                        </a>
                    </div>
                    <div class="twitter">
                        <a style="text-decoration: none" href="">
                            <i class="bi bi-twitter p-1 my-auto" style="font-size: 2rem; color: black;"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="thecard">
        <div class="thefront">
            <div class="image"><img src="{{asset('img/alexander.png') }}" alt="" width="300px" height="320"></div>
            <div class="title" style="font-size: 20px"><center>Alexander Nelson Joses</center></div>
        </div>
        <div class="theback">
            <div class="penjelasan" style="text-align: center; margin-top: 10px">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam vel repellendus, ipsam voluptate hic error minima harum at, fugiat consequatur sequi, tempora recusandae distinctio necessitatibus quaerat ullam sunt? Illo, quidem.
            </div>
            <div class="social" style="margin-top: 20px">
                <div class="social mx-auto my-auto d-flex justify-content-center h-100">
                    <div class="facebook">
                        <a style="text-decoration: none" href="a">
                            <i class="bi bi-facebook p-1 my-auto" style="font-size: 2rem; color: black;"></i>
                        </a>
                    </div>
                    <div class="instagram">
                        <a style="text-decoration: none" href="b">
                            <i class="bi bi-instagram p-5 my-auto" style="font-size: 2rem; color: black;"></i>
                        </a>
                    </div>
                    <div class="twitter">
                        <a style="text-decoration: none" href="">
                            <i class="bi bi-twitter p-1 my-auto" style="font-size: 2rem; color: black;"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="thecard">
        <div class="thefront">
            <div class="image"><img src="{{asset('img/alexander.png') }}" alt="" width="300px" height="320"></div>
            <div class="title" style="font-size: 20px"><center>Alexander Nelson Joses</center></div>
        </div>
        <div class="theback">
            <div class="penjelasan" style="text-align: center; margin-top: 10px">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam vel repellendus, ipsam voluptate hic error minima harum at, fugiat consequatur sequi, tempora recusandae distinctio necessitatibus quaerat ullam sunt? Illo, quidem.
            </div>
            <div class="social" style="margin-top: 20px">
                <div class="social mx-auto my-auto d-flex justify-content-center h-100">
                    <div class="facebook">
                        <a style="text-decoration: none" href="a">
                            <i class="bi bi-facebook p-1 my-auto" style="font-size: 2rem; color: black;"></i>
                        </a>
                    </div>
                    <div class="instagram">
                        <a style="text-decoration: none" href="b">
                            <i class="bi bi-instagram p-5 my-auto" style="font-size: 2rem; color: black;"></i>
                        </a>
                    </div>
                    <div class="twitter">
                        <a style="text-decoration: none" href="">
                            <i class="bi bi-twitter p-1 my-auto" style="font-size: 2rem; color: black;"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>

<div class="end"></div>

<div class="promosi ">
    <p>
      SMK TELKOM Jakarta <br><br>

      Sekolah Berintegritas yang bernaung di bawah <br>
      Pendidikan Telkom. 021-5442800 atau WA 08111442600 <br>
      Jl. Daan mogot KM.11 Cengkareng Jakarta Barat <br>
      Email : smkteljkt@ypt.or.id atau smkteljkt@gmail.com twitter : smktelkomjakarta <br>
    </p>
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