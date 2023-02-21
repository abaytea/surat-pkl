<!DOCTYPE html>
<html lang="en">
<head>
        <style type="text/css">
            table {
                background: #fff;
                padding: 5px;
            }
            tr, td {
                border: table-cell;
                border: 1px  solid #444;
            }
            tr,td {
                vertical-align: top!important;
            }
            #right {
                border-right: none !important;
            }
            #left {
                border-left: none !important;
            }
            .isi {
                height: 300px!important;
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
            @media print{
                body {
                    font-size: 12px;
                    color: #212121;
                }
                nav {
                    display: none;
                }
                table {
                    width: 100%;
                    font-size: 12px;
                    color: #212121;
                }
                tr, td {
                    border: table-cell;
                    border: 1px  solid #444;
                    padding: 8px!important;

                }
                tr,td {
                    vertical-align: top!important;
                }
                #lbr {
                    font-size: 20px;
                }
                .isi {
                    height: 200px!important;
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
                    font-size: 20px!important;
                    font-weight: bold;
                    text-transform: uppercase;
                    margin: -10px 0 -20px 0;
                }
                .up {
                    font-size: 17px!important;
                    font-weight: normal;
                }
                .status {
                    font-size: 17px!important;
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

        <!-- Container START -->
            <div id="colres">
                <div class="disp">';
                    $query2 = mysqli_query($config, "SELECT institusi, nama, status, alamat, logo FROM tbl_instansi");
                    list($institusi, $nama, $status, $alamat, $logo) = mysqli_fetch_array($query2);
                        echo '<img class="logodisp" src="./upload/'.$logo.'"/>';
                        echo '<h6 class="up">'.$institusi.'</h6>';
                        echo '<h5 class="up" id="nama">'.$nama.'</h5><br/>';
                        echo '<h6 class="status">'.$status.'</h6>';
                        echo '<span id="alamat">'.$alamat.'</span>';

                    echo '
                </div>
                <div class="separator"></div>';

                $id_surat = mysqli_real_escape_string($config, $_REQUEST['id_surat']);
                $query = mysqli_query($config, "SELECT * FROM tbl_surat_masuk WHERE id_surat='$id_surat'");

                if(mysqli_num_rows($query) > 0){
                $no = 0;
                while($row = mysqli_fetch_array($query)){

            echo '</br>
                            <strong>Lampiran &emsp;&emsp;:&nbsp;1(satu)halaman</strong>
                            </br>
                            <strong>Hal &ensp;&emsp;&emsp;&emsp;&emsp;:&nbsp;Permohonan untuk Pengajuan Tempat Praktek Kerja Industri ( PRAKERIN )
                            </br>
                                <td id="right"><strong>Kepada Yth</strong></td>
                                <td id="left" colspan="2"> &emsp;:&nbsp;Ibu/Bapak Pimpinan ' . $row['asal_surat'] . '</td>
                            </br></br>
                            <strong>Dengan hormat.</br>
                            &emsp;&emsp; Dalam rangka melaksanakan program pemerintah tentang link and Match atau
                            Pendidikan Sistem Ganda (PSG) untuk semua Sekolah Menengah Kejuruan (SMK) di
                            Indonesia, mengharuskan siswa untuk mengikuti Praktek Kerja Industri (PRAKERIN) yang
                            penyelenggaraannya dilaksanakan bagi kelas XI dengan tujuan untuk memperkenalkan siswa
                            kepada situasi Dunia Usaha/Dunia Industri/Dunia Kerja (DU/DI) yang sebenarnya.
                            Sehubungan dengan hal tersebut diatas, SMK Pasundan Jatinangor Kabupaten Sumedang
                            memohon bantuan Saudara untuk dapat memberikan kesempatan dalam rangka pelaksanaan
                            PRAKERIN kepada para siswa/I kami selama 3 Bulan yaitu pada tanggal 17 Desember 2022
                            s.d 17 Maret 2023.</br></br>
                            Demikian permohonan ini kami sampaikan, besar harapan kami Ibu/Bapak bisa menerima
                            permohonan Prakerin kepada Siswa/i kami.Atas perhatian Saudara kami ucapkan terimakasih.<strong>
                            ';
                            $query3 = mysqli_query($config, "SELECT * FROM tbl_disposisi JOIN tbl_surat_masuk ON tbl_disposisi.id_surat = tbl_surat_masuk.id_surat WHERE tbl_disposisi.id_surat='$id_surat'");

                            if(mysqli_num_rows($query3) > 0){
                                $no = 0;
                                $row = mysqli_fetch_array($query3);{
                                echo '
                            <tr class="isi">
                                <td colspan="2">
                                    <strong>Isi Disposisi :</strong><br/>'.$row['isi_disposisi'].'
                                    <div style="height: 50px;"></div>
                                    <strong>Batas Waktu</strong> : '.indoDate($row['batas_waktu']).'<br/>
                                    <strong>Sifat</strong> : '.$row['sifat'].'<br/>
                                    <strong>Catatan</strong> :<br/> '.$row['catatan'].'
                                    <div style="height: 25px;"></div>
                                </td>
                                <td><strong>Diteruskan Kepada</strong> : <br/>'.$row['tujuan'].'</td>
                            </tr>';
                                }
                            } else {
                                echo '
                                <tr class="isi">

                                </tr>';
                            }
                        } echo '

            <div id="lead">
            </br></br></br>
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
        </div></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
        <div class="jarak2"></div>
    <!-- Container END -->

    </body>
        <style type="text/css">
            table {
                background: #fff;
                padding: 5px;
            }
            tr, td {
                border: table-cell;
                border: 1px  solid #444;
            }
            tr,td {
                vertical-align: top!important;
            }
            #right {
                border-right: none !important;
            }
            #left {
                border-left: none !important;
            }
            .isi {
                height: 300px!important;
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
            @media print{
                body {
                    font-size: 12px;
                    color: #212121;
                }
                nav {
                    display: none;
                }
                table {
                    width: 100%;
                    font-size: 12px;
                    color: #212121;
                }
                tr, td {
                    border: table-cell;
                    border: 1px  solid #444;
                    padding: 8px!important;

                }
                tr,td {
                    vertical-align: top!important;
                }
                #lbr {
                    font-size: 20px;
                }
                .isi {
                    height: 200px!important;
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
                    font-size: 20px!important;
                    font-weight: bold;
                    text-transform: uppercase;
                    margin: -10px 0 -20px 0;
                }
                .up {
                    font-size: 17px!important;
                    font-weight: normal;
                }
                .status {
                    font-size: 17px!important;
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

        <!-- Container START -->
            <div id="colres">
                <div class="disp">';
                    $query2 = mysqli_query($config, "SELECT institusi, nama, status, alamat, logo FROM tbl_instansi");
                    list($institusi, $nama, $status, $alamat, $logo) = mysqli_fetch_array($query2);
                        echo '<img class="logodisp" src="./upload/'.$logo.'"/>';
                        echo '<h6 class="up">'.$institusi.'</h6>';
                        echo '<h5 class="up" id="nama">'.$nama.'</h5><br/>';
                        echo '<h6 class="status">'.$status.'</h6>';
                        echo '<span id="alamat">'.$alamat.'</span>';

                    echo '
                </div>
                <div class="separator"></div>';

                $id_surat = mysqli_real_escape_string($config, $_REQUEST['id_surat']);
                $query = mysqli_query($config, "SELECT * FROM tbl_surat_masuk WHERE id_surat='$id_surat'");

                if(mysqli_num_rows($query) > 0){
                $no = 0;
                while($row = mysqli_fetch_array($query)){

            echo '</br>
                            <strong>Lampiran &emsp;&emsp;:&nbsp;Permohonan untuk Pengajuan Tempat Praktek Kerja Industri ( PRAKERIN )
                            </br>
                            <strong>Nomor &emsp;&emsp;&nbsp;&nbsp;&nbsp; :&nbsp; 043/423.5/PKL/SMK PASJA/IX/2022
                            </br>
                                <td id="right"><strong>Tamggal &emsp;&emsp;</strong></td>
                                <td id="left" colspan="2"> :&nbsp;'.$row['tgl_surat'].'</td>
                            </br></br></br>
                            <center><strong>DAFTAR SISWA PRAKERIN</strong></center></br>
                            <table boder="1">
        <tr>
            <td>No</td>
            <td>No Induk</td>
            <td>Nama Siswa</td>
            <td>Nomer Hp</td>
            <td>Kelas</td></center>
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
                            ';
                        } echo '

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

    </body>'
        <style type="text/css">
            table {
                background: #fff;
                padding: 5px;
            }
            tr, td {
                border: table-cell;
                border: 1px  solid #444;
            }
            tr,td {
                vertical-align: top!important;
            }
            #right {
                border-right: none !important;
            }
            #left {
                border-left: none !important;
            }
            .isi {
                height: 300px!important;
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
            @media print{
                body {
                    font-size: 12px;
                    color: #212121;
                }
                nav {
                    display: none;
                }
                table {
                    width: 100%;
                    font-size: 12px;
                    color: #212121;
                }
                tr, td {
                    border: table-cell;
                    border: 1px  solid #444;
                    padding: 8px!important;

                }
                tr,td {
                    vertical-align: top!important;
                }
                #lbr {
                    font-size: 20px;
                }
                .isi {
                    height: 200px!important;
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
                    font-size: 20px!important;
                    font-weight: bold;
                    text-transform: uppercase;
                    margin: -10px 0 -20px 0;
                }
                .up {
                    font-size: 17px!important;
                    font-weight: normal;
                }
                .status {
                    font-size: 17px!important;
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

        <!-- Container START -->
            <div id="colres">
                <div class="disp">';
                    $query2 = mysqli_query($config, "SELECT institusi, nama, status, alamat, logo FROM tbl_instansi");
                    list($institusi, $nama, $status, $alamat, $logo) = mysqli_fetch_array($query2);
                        echo '<img class="logodisp" src="./upload/'.$logo.'"/>';
                        echo '<h6 class="up">'.$institusi.'</h6>';
                        echo '<h5 class="up" id="nama">'.$nama.'</h5><br/>';
                        echo '<h6 class="status">'.$status.'</h6>';
                        echo '<span id="alamat">'.$alamat.'</span>';

                    echo '
                </div>
                <div class="separator"></div>';

                $id_surat = mysqli_real_escape_string($config, $_REQUEST['id_surat']);
                $query = mysqli_query($config, "SELECT * FROM tbl_surat_masuk WHERE id_surat='$id_surat'");

                if(mysqli_num_rows($query) > 0){
                $no = 0;
                while($row = mysqli_fetch_array($query)){

            echo '</br>
                            <strong><center>SURAT KETERANGAN DITERIMA</center></strong>

                            <strong><center>Nomor:&nbsp; 043/423.5/PKL/SMK PASJA/IX/2022</center></strong>
                            </br>
                                <td><strong><center>Yang bertanda tangan dibawah ini, Pimpinan Perusahaan/ Lembaga / Instansi </center></strong></td>
                                <td id="left" colspan="2"><center>'.$row['asal_surat'].'</center></td>
                                </br>
                                <td><center>Nama &emsp;&emsp;:................................................</center></td></br>
                                <td><center>Jabatan &nbsp;&emsp;:................................................</center></td></br>
                                <td><center>Alamat &nbsp;&emsp;:................................................</center></td></br>
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
            <td>Kelas</td></center>
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

    </body>
