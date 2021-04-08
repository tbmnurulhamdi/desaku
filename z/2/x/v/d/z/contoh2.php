<?php
$header = '<!--mpdf

<htmlpageheader name="letterheader">
    <table width="100%" style=" font-family: serif;">
        <tr>
				<td><img src="/img/logo.png" width="90" height="100"></td>
        <td>
			<center>
					<font size="6"><b>PEMERINTAH KABUPATEN SERANG</b></font><br>
					<font size="6"><b>KECAMATAN BAROS</b></font><br>
					<font size="6"><b>DESA SUKAMENAK</b></font><br>
					<font size="2">Alamat: Jl. Palwate Km.15 Panaragan Desa Sukamenak Baros-Serang Kode Pos 42173</font>
				</center>
				</td>
        </tr>
        <tr>
				<td colspan="2"><hr></td>
			</tr>
    </table>

    
  <font face="Arial" color="red" size="5"> <p align="center"> <u> <b> SURAT KETERANGAN</b></u></font><br>
  <font face="Arial" color="red" size="2"> Nomer: 8021/SMKN1/2015 </p></font>






  <p class="justify">       Berdasarkan surat dari Universitas Pendidikan Indonesia (UPI) Nomor 4609/UN404/DT/2014
  tanggal 15 Desember 2015 perihal ijin melakukan penelitian, dengan ini kami menerangkan bahwa:
  </p>


    <pre style=" font-family: serif; font-size: 12pt;">
    Nama  :Riffa Alfaridzi Priatna
    NIM  :0804252
    Fakultas :Pendidikan Matematika dan Ilmu Pengetahuan Alam
    Jurusan  :Pendidikan Ilmu Komputer
    </pre>



  <p class="justify" style=" font-family: serif; font-size: 12pt;"><font>
   Telah melakukan penelitian di sekolah kami tanggal<font color="red"> 7 s/d 21 Maret 2015</font>, dengan judul
  "Penerapan Metode Pembelajaran IMPROVE Berbasis Multimedia Interaktif Untuk Meningkatkan
   Intrapersonal intelegensi siswa dalam Mata Pelajaran TIK"
  </font></p>
</htmlpageheader>

<style>
    @page {
        margin-top: 2.5cm;
        margin-bottom: 2.5cm;
        margin-left: 2cm;
        margin-right: 2cm;
        footer: html_letterfooter2;
        background-color: pink;
    }
  
    @page :first {
        margin-top: 8cm;
        margin-bottom: 4cm;
        header: html_letterheader;
        footer: _blank;
        resetpagenum: 1;
        background-color: white;
    }
  
    .letter {
        page-break-before: always;
        page: letterhead;
    }
    .justify {
        text-align: justify;
    }
</style>';

require __DIR__ . '/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();

$mpdf->WriteHTML($header);

$mpdf->Output();
