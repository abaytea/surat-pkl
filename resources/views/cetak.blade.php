<!DOCTYPE html>
<html lang="en">

<head>
    <style type="text/css">
        .page-break {
            page-break-after: always;
        }

        body {
                font-size: 12px;
                margin-top: 1,55in;
                margin-bottom: 1,11in;
                margin-left: 0.5in;
                margin-right: 0.5in;
                color: #212121;
            }

        #right {
            border-right: none !important;
        }

        #left {
            border-left: none !important;
        }

        .isi {
            height: 300px !important;
        }

        .disp {
            text-align: center;
            padding: 1.5rem 0;
            margin-bottom: .5rem;
        }

        .logodisp {
            float: left;
            position: relative;
            width: 110px;
            height: 110px;
            margin: 0 0 0 1rem;
        }

        #lead {
            width: auto;
            position: relative;
            margin: 25px 0 0 75%;
        }

        .lead {
            font-weight: bold;
            text-decoration: underline;
            margin-bottom: -10px;
        }

        .tgh {
            text-align: center;
        }

        #nama {
            font-size: 2.1rem;
            margin-bottom: -1rem;
        }

        #alamat {
            font-size: 16px;
        }

        .up {
            text-transform: uppercase;
            margin: 0;
            line-height: 2.2rem;
            font-size: 1.5rem;
        }

        .status {
            margin: 0;
            font-size: 1.3rem;
            margin-bottom: .5rem;
        }

        #lbr {
            font-size: 20px;
            font-weight: bold;
        }

        .separator {
            border-bottom: 2px solid #616161;
            margin: -1.3rem 0 1.5rem;
        }

        @media print {


            nav {
                display: none;
            }

            #lbr {
                font-size: 20px;
            }

            .isi {
                height: 200px !important;
            }

            .tgh {
                text-align: center;
            }

            .disp {
                text-align: center;
                margin: -.5rem 0;
            }

            .logodisp {
                float: left;
                position: relative;
                width: 80px;
                height: 80px;
                margin: .5rem 0 0 .5rem;
            }

            #lead {
                width: auto;
                position: relative;
                margin: 15px 0 0 75%;
            }

            .lead {
                font-weight: bold;
                text-decoration: underline;
                margin-bottom: -10px;
            }

            #nama {
                font-size: 20px !important;
                font-weight: bold;
                text-transform: uppercase;
                margin: -10px 0 -20px 0;
            }

            .up {
                font-size: 17px !important;
                font-weight: normal;
            }

            .status {
                font-size: 17px !important;
                font-weight: normal;
                margin-bottom: -.1rem;
            }

            #alamat {
                margin-top: -15px;
                font-size: 13px;
            }

            #lbr {
                font-size: 17px;
                font-weight: bold;
            }

            .separator {
                border-bottom: 2px solid #616161;
                margin: -1rem 0 1rem;
            }

        }

    </style>

<body onload="window.print()">
    <div class="halaman1">
        <!-- Container START -->
        <div id="colres">
            <div class="disp">
                <img class="logodisp" src="{{ asset('logo.png') }}" />';
                <h6 class="up">YAYASAN PENDIDIKAN DASAR DAN MENENGAH (YPDM) PASUNDAN</h6>
                <h6 class="up">SMK PASUNDAN JATINAGNOR</h6>
                <h5 class="status">TERAKREDITASI "A"</h5><br />
                <h5 class="up" id="nama">NSS : 40.2.02.10.15.027, NPSN : 20254180</h5><br />
                <h6 class="status">JALAN KOL. AHMAD SYAM CIKERUH TLP .(022) 77782242 JATINANGOR 45363 KAB. SUMEDANG</h6>
                <span id="alamat">e-mail : smkpasundanjatinangor@gmail.com</span> <br>
                <span id="alamat">website : www.smkpasundanjatinangor.wordpress.com</span>
            </div>
            <div class="separator"></div>
            <table>
                <tr>
                    <td>Lampiran</td>
                    <td>:</td>
                    <td>1 ( satu ) Berkas</td>
                </tr>
                <tr>
                    <td>Hal</td>
                    <td>:</td>
                    <td><strong>Permohonan untuk Pengajuan Tempat Praktek Kerja Industri ( PRAKERIN )</strong></td>
                </tr>
                <tr>
                    <td>Kepada Yth</td>
                    <td>:</td>
                    <td>
                        Ibu/Bapak Pimpinan
                        <br>
                        …………………………………………………………………. …………………………………………………………………. …………………………………………………………………. ………………………………………………………………….
                        <br>
                        …………………………………………………………………. …………………………………………………………………. …………………………………………………………………. ………………………………………………………………….
                        <br>
                        …………………………………………………………………. …………………………………………………………………. …………………………………………………………………. ………………………………………………………………….
                    </td>
                </tr>
            </table>
            <p>
                Dengan hormat.</br>
                &emsp;&emsp; Dalam rangka melaksanakan program pemerintah tentang link and Match atau
                Pendidikan Sistem Ganda (PSG) untuk semua Sekolah Menengah Kejuruan (SMK) di
                Indonesia, mengharuskan siswa untuk mengikuti Praktek Kerja Industri (PRAKERIN) yang
                penyelenggaraannya dilaksanakan bagi kelas XI dengan tujuan untuk memperkenalkan siswa
                kepada situasi Dunia Usaha/Dunia Industri/Dunia Kerja (DU/DI) yang sebenarnya.
                Sehubungan dengan hal tersebut diatas, SMK Pasundan Jatinangor Kabupaten Sumedang
                memohon bantuan Saudara untuk dapat memberikan kesempatan dalam rangka pelaksanaan
                PRAKERIN kepada para siswa/I kami selama 3 Bulan yaitu pada tanggal @php
                $date = date('d M Y');
                $end = date('d M Y', strtotime("+3 Months"));
                @endphp
                {{ $date }} s.d {{ $end }}.</br></br>
                Demikian permohonan ini kami sampaikan, besar harapan kami Ibu/Bapak bisa menerima
                permohonan Prakerin kepada Siswa/i kami.Atas perhatian Saudara kami ucapkan terimakasih.
            </p>
            <div id="lead">
                </br></br></br>
                <p>Kepala Sekolah</p>
                <div style="height: 50px;"></div>
                <p class="lead">H. Riza Fachri, S.Kom.</p>
            </div>
        </div></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
        <div class="jarak2"></div>
    </div>
    <div class="page-break"></div>

    <div class="halaman2">
        <div id="colres">
            <div class="disp">
                <img class="logodisp" src="{{ asset('logo.png') }}" />';
                <h6 class="up">YAYASAN PENDIDIKAN DASAR DAN MENENGAH (YPDM) PASUNDAN</h6>
                <h6 class="up">SMK PASUNDAN JATINAGNOR</h6>
                <h5 class="status">TERAKREDITASI "A"</h5><br />
                <h5 class="up" id="nama">NSS : 40.2.02.10.15.027, NPSN : 20254180</h5><br />
                <h6 class="status">JALAN KOL. AHMAD SYAM CIKERUH TLP .(022) 77782242 JATINANGOR 45363 KAB. SUMEDANG</h6>
                <span id="alamat">e-mail : smkpasundanjatinangor@gmail.com</span> <br>
                <span id="alamat">website : www.smkpasundanjatinangor.wordpress.com</span>
            </div>
            <div class="separator"></div>
            </br>
            <table border="0px" style="padding: 0%">
                <tr style="border:0px">
                    <td>Lampiran</td>
                    <td>:</td>
                    <td>Permohonan untuk Pengajuan Tempat Praktek Kerja Industri ( PRAKERIN )</td>
                </tr>
                <tr>
                    <td>Nomor</td>
                    <td>:</td>
                    <td>043/423.5/PKL/SMK PASJA/IX/2022</td>
                </tr>
                <tr>
                    <td>Tanggal</td>
                    @php
                    $tanggal = date('d M Y')
                    @endphp
                    <td>:</td>
                    <td>{{ $tanggal }}</td>
                </tr>
            </table>

            </br></br></br>
            <center>
                <strong>DAFTAR SISWA PRAKERIN</strong><br>
                <strong>Program Keahlian : .......................</strong>
            </center></br>
            <table boder="1">
                <tr>
                    <td>No</td>
                    <td>No Induk</td>
                    <td>Nama Siswa</td>
                    <td>Nomer Hp</td>
                    <td>Kelas</td>
                    </center>
                </tr>
                <tr>
                    <td>1</td>
                    <td>'.$row['no_surat'].'</td>
                    <td>'.$row['isi'].'</td>
                    <td>'.$row['nomerhp'].'</td>
                    <td>'.$row['indeks'].'</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>No Induk</td>
                    <td>Nama Siswa</td>
                    <td>Kelas</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>No Induk</td>
                    <td>Nama Siswa</td>
                    <td>Kelas</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>No Induk</td>
                    <td>Nama Siswa</td>
                    <td>Kelas</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>No Induk</td>
                    <td>Nama Siswa</td>
                    <td>Kelas</td>
                </tr>
            </table>

            <div id="lead">
                </br></br></br></br></br>
                <p>Kepala Sekolah</p>
                <div style="height: 50px;"></div>';
                $query = mysqli_query($config, "SELECT kepsek, nip FROM tbl_instansi");
                list($kepsek,$nip) = mysqli_fetch_array($query);
                if(!empty($kepsek)){
                echo '<p class="lead">'.$kepsek.'</p>';
                } else {
                echo '<p class="lead">H. Riza Fachri, S.Kom.</p>';

                }
                echo '
            </div>
        </div></br></br></br></br></br></br></br></br></br></br></br></br></br>
        <div class="jarak2"></div>
        <!-- Container END -->
    </div>
    <div class="page-break"></div>

    <div class="halaman3">
        <div id="colres">
            <div class="disp">
                <img class="logodisp" src="{{ asset('logo.png') }}" />';
                <h6 class="up">YAYASAN PENDIDIKAN DASAR DAN MENENGAH (YPDM) PASUNDAN</h6>
                <h6 class="up">SMK PASUNDAN JATINAGNOR</h6>
                <h5 class="status">TERAKREDITASI "A"</h5><br />
                <h5 class="up" id="nama">NSS : 40.2.02.10.15.027, NPSN : 20254180</h5><br />
                <h6 class="status">JALAN KOL. AHMAD SYAM CIKERUH TLP .(022) 77782242 JATINANGOR 45363 KAB. SUMEDANG</h6>
                <span id="alamat">e-mail : smkpasundanjatinangor@gmail.com</span> <br>
                <span id="alamat">website : www.smkpasundanjatinangor.wordpress.com</span>
            </div>
            <div class="separator"></div>
            </br>
            <strong>
                <center>SURAT KETERANGAN DITERIMA</center>
            </strong>

            <strong>
                <center>Nomor:&nbsp; 043/423.5/PKL/SMK PASJA/IX/2022</center>
            </strong>
            </br>
            <td><strong>
                    <center>Yang bertanda tangan dibawah ini, Pimpinan Perusahaan/ Lembaga / Instansi </center>
                </strong></td>
            <td id="left" colspan="2">
                <center>'.$row['asal_surat'].'</center>
            </td>
            </br>
            <td>
                <center>Nama &emsp;&emsp;:................................................</center>
            </td></br>
            <td>
                <center>Jabatan &nbsp;&emsp;:................................................</center>
            </td></br>
            <td>
                <center>Alamat &nbsp;&emsp;:................................................</center>
            </td></br>
            </br>
            <strong>Dengan ini (bersedia/tidak bersedia) menerima Siswa/Siswi SMK Pasundan Jatinangor untuk
                melaksanakan prakerin di perusahaan kami pada tanggal 17 Desember 2022 s.d 17 Maret 2023.</br></br>
                Demikian keterangan ini kami buat untuk dipergunakan sebagaimana mestinya.</strong>
            </br></br>
            <center><strong>DAFTAR SISWA PRAKERIN</strong></center></br>

            <table boder="1">
                <tr>
                    <td>No</td>
                    <td>No Induk</td>
                    <td>Nama Siswa</td>
                    <td>Kelas</td>
                    </center>
                </tr>
                <tr>
                    <td>1</td>
                    <td>'.$row['no_surat'].'</td>
                    <td>Nama Siswa</td>
                    <td>Kelas</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>No Induk</td>
                    <td>Nama Siswa</td>
                    <td>Kelas</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>No Induk</td>
                    <td>Nama Siswa</td>
                    <td>Kelas</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>No Induk</td>
                    <td>Nama Siswa</td>
                    <td>Kelas</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>No Induk</td>
                    <td>Nama Siswa</td>
                    <td>Kelas</td>
                </tr>
            </table>

            <div id="lead">
                </br></br></br>
                <p>Kepala Sekolah</p>
                <div style="height: 50px;"></div>
            </div>
            <div class="jarak2"></div>
            <!-- Container END -->
        </div>
</body>
