<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Document</title>

        <link rel="stylesheet" href="{{ asset('css/prestasi.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/flip.css') }}" />

        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
        />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
            crossorigin="anonymous"
        />
    </head>
    <body>
        {{-- navbar --}}
        <nav class="navbar shadow p-2 mb-6">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img
                        src="{{ asset('img/smktelkomjkt 1.png') }}"
                        alt="SMK Telkom"
                        width="120"
                        height="55"
                    />
                </a>
                <div class="d-flex flex-row-reverse">
                    <div class="p-1"><a class="btn" href="">Contact</a></div>
                    <div class="p-1">
                        <a class="btn" href="">Business Center</a>
                    </div>
                    <div class="p-1"><a class="btn" href="">Gallery</a></div>

                    <div class="dropdown">
                        <a
                            class="btn dropdown-toggle"
                            href="#"
                            role="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                        >
                            Kesiswaan
                        </a>

                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="#"
                                    >Struktur Osis dan MPK</a
                                >
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"
                                    >Prestasi Siswa</a
                                >
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Ekstrakulikuler
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Daftra Alumni
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="dropdown">
                        <a
                            class="btn dropdown-toggle"
                            href="#"
                            role="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                        >
                            Kurikulum
                        </a>

                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="#"
                                    >Daftar Wali Kelas</a
                                >
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Kejuruan</a>
                            </li>
                        </ul>
                    </div>

                    <div class="p-1"><a class="btn" href="">News</a></div>
                    <div class="p-1">
                        <a class="btn" href="guru.blade.php">Profile</a>
                    </div>
                    <div class="p-1"><a class="btn" href="">Home</a></div>
                </div>
            </div>
        </nav>
        {{-- end navbar --}}

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

        <div class="content">
            <div class="maincontainer">
                <div class="thecard">
                    <div class="thefront">
                        <img
                            src="{{ asset('img/alexander.png') }}" alt="" width="300px" height="330"/>
                    </div>

                    <div class="theback">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit. Harum beatae explicabo hic id velit deserunt
                            voluptas quos, vel suscipit facere omnis nesciunt
                            obcaecati laborum animi neque quas aut possimus
                            facilis.
                        </p>
                        <div class="social">
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

                    <div class="nama">
                        <h1>Selamat Kepada</h1>
                        <p>Alexander Nelson Joses</p>
                    </div>
                </div>

                <div class="thecard">
                    <div class="thefront">
                        <img
                            src="{{ asset('img/alexander.png') }}" alt="" width="300px" height="330"/>
                    </div>

                    <div class="theback">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit. Harum beatae explicabo hic id velit deserunt
                            voluptas quos, vel suscipit facere omnis nesciunt
                            obcaecati laborum animi neque quas aut possimus
                            facilis.
                        </p>
                        <div class="social">
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
                    <div class="nama">
                        <h1>Selamat Kepada</h1>
                        <p>Christian Julianto, 
                          Fanan Agfian M, Keya Dipa P</p>
                    </div>
                </div>

                <div class="thecard">
                    <div class="thefront">
                        <img
                            src="{{ asset('img/alexander.png') }}" alt="" width="300px" height="330"/>
                    </div>

                    <div class="theback">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit. Harum beatae explicabo hic id velit deserunt
                            voluptas quos, vel suscipit facere omnis nesciunt
                            obcaecati laborum animi neque quas aut possimus
                            facilis.
                        </p>
                        <div class="social">
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
                    <div class="nama">
                        <h1>Selamat Kepada</h1>
                        <p>Alexander Nelson Joses</p>
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
      
          <div class="kanan col-3 p-4 my-auto bg-primar">
            <center>Follow us</center>
            <div class="social mx-auto my-auto d-flex justify-content-center">
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
    </body>
</html>
