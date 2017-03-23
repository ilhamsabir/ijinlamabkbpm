<div class="container">

  <div class="content" style="min-height:460px">

    <div class="content-container">



      <div>
        <h4 class="heading-inline">Selamat Datang , <?php echo $this->session->userdata('NAME');?>
        &nbsp;&nbsp;<small><?php date_default_timezone_set("Asia/Jakarta"); echo date(" h:i:s d/m/Y ");?></small>
        &nbsp;&nbsp;</h4>


      </div>



      <br>



      <div class="row">

        <div class="col-md-12">

          <div class="portlet">

            <div class="portlet-header">

              <h3>
                <i class="fa fa-info-circle"></i>
                Cetak Data Permohonan
              </h3>

            </div> <!-- /.portlet-header -->

            <div class="portlet-content">


              <div class="col-sm-9 col-sm-offset-2">
              <table width="861" border="0">
                <tr>
                  <td width="130">
                    <img class="medi-responsive" src="<?php echo base_url();?>/uploads/bandung-logo.png" width="130px">
                  </td>
                  <td width="764"><p class="fontajah" style="font-family:Bookman Old Style;font-size:32px;text-align:center;line-height:0.9"><strong>PEMERINTAH   KOTA   BANDUNG </strong></p>
                  <p class="fontajah" style="font-size:24px;text-align:center;line-height:0.9"><strong>BADAN KESATUAN BANGSA </strong></p>
                <p class="fontku" style="font-size:24px;text-align:center;line-height:0.9"><strong>DAN PEMBERDAYAAN MASYARAKAT </strong></p>
                <p class="fontku" style="font-size:14px;text-align:center;line-height:0.9">Jalan Wastukencana No.2 Tlp. 022.4230393, 4230097 - Bandung</p></td>
                </tr>

              </table>
              <hr/ style="border-top: 4px double #323232;">
            <?php if(isset($dt_survey)){ foreach($dt_survey as $row){ ?>
            <table width="861" border="0">
              <tr>
                <td width="679">&nbsp;</td>
                <!-- TGL HRI ini -->
                <td width="172" class="fontku">Bandung, <?php date_default_timezone_set('Asia/Jakarta');?><?php echo date("j F Y"); ?></td>
              </tr>

            </table>
            <br/>
            <table width="862" border="0">
              <tr>
                <td width="95" class="fontku">Nomor</td>
                <td width="415" class="fontku">: 070/<?php echo $row->nmsurat;?>-OL/BKBPM</td>
                <td width="338" class="fontku">Kepada Yth. Bapak/Ibu/Sdr :</td>

              </tr>
               <tr>
                <td width="95" class="fontku">Lampiran</td>
                <td width="415" class="fontku">: 1 </td>
                <td width="338" class="fontku">Kepala  <?php echo $row->lokasi1;?></td>

              </tr>
               <tr>
                <td width="95" class="fontku">Perihal</td>
                <td width="415"><p>:
                  <strong class="fontku" style="font-weight:bold">Rekomendasi</strong>&nbsp;<strong class="fontku" style="font-weight:bold">Penelitian/Survey/Praktek Kerja</strong></p>
                 </td>
                <td width="338" class="fontku">Kota Bandung </td>

              </tr>
            </table>
            <table width="861" border="0">
              <tr>
                <td width="521">&nbsp;</td>
                <td width="330" class="fontku">Di </td>
              </tr>
                <tr>
                <td width="521">&nbsp;</td>
                <td width="330" class="fontku">&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; B A N D U N G </td>
              </tr>
            </table>
            <br/>
            <table width="864" border="0">
              <tr>
                <td width="30" class="fontku">1.</td>
                <td width="824" class="fontku">Yang bertanda tangan di bawah ini </td>
              </tr>
              <tr>
                <td width="30">&nbsp;</td>
                <td width="824" class="fontku">Kepala Badan Kesatuan Bangsa dan Pemberdayaan Masyarakat Kota Bandung</td>
              </tr>
            </table>
            <table width="865" border="0">
              <tr>
                <td width="29">&nbsp;</td>
                <td width="223" class="fontku">Berdasarkan Surat dari</td>
                <td width="599" class="fontku">: <?php echo $row->kampus;?> : <?php echo $row->nosuratkampus;?>  &nbsp; &nbsp; Tanggal <?php echo $row->tglsuratkampus;?></td>
              </tr>
            </table>
            <table width="866" border="0">
              <tr>
                <td width="30">&nbsp;</td>
                <td width="826" class="fontku">Sehubungan hal tersebut di atas, kami hadapkan :</td>
              </tr>
            </table>
            <table width="866" border="0">
              <tr>
                <td width="30">&nbsp;</td>
                <td width="221" class="fontku">Nama </td>
                <td width="601" class="fontku">: <?php echo $row->nama;?> </td>
              </tr>
              <tr>
                <td width="30">&nbsp;</td>
                <td width="221" class="fontku">Tempat ,Tanggal Lahir</td>
                <td width="601" class="fontku">: <?php echo $row->tempatlahir;?> , <?php echo $row->tgllahir;?> </td>
              </tr>
              <tr>
                <td width="30" class="fontku">&nbsp;</td>
                <td width="221" class="fontku">Alamat</td>
                <td width="601" class="fontku">: <?php echo $row->alamat;?> </td>
              </tr>
              <tr>
                <td width="30">&nbsp;</td>
                <td width="221" class="fontku">Pekerjaan,NRP,NPM/NIP </td>
                <td width="601" class="fontku">: <?php echo $row->noktp;?> </td>
              </tr>
              <tr>
                <td width="30">&nbsp;</td>
                <td width="221" class="fontku">HP/E-Mail</td>
                <td width="601">: <?php echo $row->nohp;?> </td>
              </tr>
              <tr>
                <td width="30">&nbsp;</td>
                <td width="221" class="fontku">Peserta</td>
                <td width="601" class="fontku">: Tidak Ada</td>
              </tr>
               <tr>
                <td width="30">&nbsp;</td>
                <td width="221" class="fontku">Untuk Melakukan</td>
                <?php if($row->jenisijin == 'survey'){?>
                <td width="601" class="fontku">: <strong>Survey</strong> </td>
                <?php }elseif ($row->jenisijin == 'penelitian'){?>
                  <td width="601" class="fontku">: <strong>Penelitian</strong> </td>
                <?php }else{?>
                  <td width="601" class="fontku">: <strong>Praktek Kerja Lapangan</strong></td>
                <?php } ?>
              </tr>
            </table>
            <?php if($row->jenisijin == 'survey'){?>
              <p></p>
                <table width="861" border="0">
                  <tr>
                    <td width="85">&nbsp;</td>
                    <td width="766"><p><h3 class="fontku" style="font-size:12px;font-weight:bold;text-align:center">Dengan Judul "<?php echo $row->judul;?>"</h3></p></td>
                  </tr>
                </table>
                <p>&nbsp;</p>

              <?php }elseif ($row->jenisijin == 'penelitian'){?>
                <p></p>
                  <table width="861" border="0">
                    <tr>
                      <td width="85">&nbsp;</td>
                      <td width="766"><p><h3 class="fontku" style="font-size:12px;font-weight:bold;text-align:center">Dengan Judul "<?php echo $row->judul;?>"</h3></p></td>
                    </tr>
                  </table>
                  <p>&nbsp;</p>
               <?php }else{?>
                 <?php } ?>
            <table width="867" border="0">
              <tr>
                <td width="30" style="padding-bottom:20px">2.</td>
                <td width="827" align="justify" class="fontku">Yang bersangkutan telah menghadap kami tanggal <?php date_default_timezone_set("Asia/Jakarta"); echo date("j F Y ");?> dan Surat Rekomendasi ini berlaku <?php echo $row->tglawal;?> sampai dengan
            tanggal <?php echo $row->tglakhir;?></td>
              </tr>
              <tr>
                <td width="30" style="padding-bottom:40px">3</td>
                <td width="827" align="justify" class="fontku">Dengan memperhatikan Identitas serta untuk kelancaran memperoleh bahan yang diperlukan, Pada prinsipnya kami tidak keberatan yang bersangkutan melaksanakan Penelitian/Survey/Praktek Kerja, Sepanjang tidak menggangu tugas yang menyangkut rahasia jabatan masing-masing Instansi/SKPD.</td>
              </tr>
               <tr>
                <td width="30">4</td>
                <td width="827" align="justify" class="fontku">Demikian atas kerjasamanya kami haturkan terimakasih.</td>
              </tr>
            </table>
            <br/>
            <table width="868" border="0">
              <tr>
                <td width="461">&nbsp;</td>
                <td width="397" align="center" class="fontku" style="font-weight:bold">a.n. KEPALA BADAN KESATUAN BANGSA DAN </td>
              </tr>
               <tr>
                <td width="461">&nbsp;</td>
                <td width="397" align="center" class="fontku" style="font-weight:bold">PEMBERDAYAAN MASYARAKAT</td>
              </tr>
              <tr>
                <td width="461">&nbsp;</td>
                <td width="397" align="center" class="fontku" style="font-weight:bold">KOTA BANDUNG</td>
              </tr>
              <tr>
                <td width="461">&nbsp;</td>
                <td width="397" align="center" class="fontku">Kepala Bidang Bina Ideologi dan Wawasan </td>
              </tr>
              <tr>
                <td width="461">&nbsp;</td>
                <td width="397" align="center" class="fontku">Kebangsaan</td>
              </tr>
            </table>
            <br/>
            

            <table width="868" border="0">
              <tr>
                <td width="465">&nbsp;</td>
                <td width="393" align="center"><strong><img src="<?php echo base_url();?>/uploads/ttdajat2.png" width="300px" style="margin-top:-10px;"></strong></td>
              </tr>
              <tr>
                <td width="465">&nbsp;</td>
                <td width="393" align="center"><strong><u class="fontku" style="margin-top:-220px;">Drs.  H. AJAT SUDRAJAT, M. Si</u></strong></td>
              </tr>
              <tr>
                <td width="465">&nbsp;</td>
                <td width="393" align="center" class="fontku">Pembina Utama Muda</td>
              </tr>
              <tr>
                <td width="465">&nbsp;</td>
                <td width="393" align="center" class="fontku">NIP. 19580609 198503 1 014</td>
              </tr>
            </table>
            <br/>
            <strong class="fontku">Catatan:</strong>
            <table width="868" border="0">
              <tr>
                <td width="15" style="font-size:10px" class="fontku">1</td>
                <td width="843" style="font-size:10px" class="fontku">Yang akan melakukan survey  di wajibkan membawa kartu identitas masing-masing;</td>
              </tr>
              <tr>
                <td width="15" style="font-size:10px" class="fontku">2</td>
                <td width="843" style="font-size:10px" class="fontku">Pengumpulan bahan data hanya  dibenarkan dalam bidang yang tercantum dalam surat pengantar ini;</td>
              </tr>
              <tr>
                <td width="15" style="font-size:10px" class="fontku">3</td>
                <td width="843" style="font-size:10px" class="fontku">Hasil penelitian tidak  boleh digunakan keperluan lain;</td>
              </tr>
              <tr>
                <td width="15" style="font-size:10px" class="fontku">4</td>
                <td width="843" style="font-size:10px" class="fontku">Selain ketentuan diatas, harus pula memperhatikan petunjuk para pejabat dimana para pelaksana
            mengadakan penelitian/survey/praktek kerja;</td>
              </tr>
              <tr>
                <td width="15" style="font-size:10px" class="fontku">5</td>
                <td width="843" style="font-size:10px" class="fontku">Pejabat terakhir yang didatangi pelaksana tersebut harus menyimpan pengantar ini setelah yang bersangkutan
            selesai dengan keperluannya;
            </td>
              </tr>
                <tr>
                <td width="15" style="font-size:10px" class="fontku">6</td>
                <td width="843" style="font-size:10px" class="fontku">Melaporkan hasil penelitian/survey/praktek kerja kepada Walikota Bandung c.p Kepala Badan Kesatuan Bangsa dan Pemberdayaan Masyarakat selambat-lambatnya 1 minggu setelah selesai.
            </td>
              </tr>
            </table>

          </div>




        </div><!-- BODY PANEL -->
      </div><!-- PANEWL-->



      <a href="<?php echo site_url('adminsurvey')?>" class="btn btn-secondary btn-sm">
                 <i class="fa fa-left"></i> Kembali
             </a>
      <a href="<?php echo site_url('adminsurvey/cetak_sktsurvey/'.$row->kd_ijin)?>" class="btn btn-primary btn-sm btnPrint" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Cetak Data Penjualan">

        <i class="fa fa-print"></i> cetak</a>

        <a href="<?php echo site_url('adminsurvey/cetak_surveylampiran/'.$row->kd_ijin)?>" class="btn btn-success btn-sm btnPrint" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Cetak Data Penjualan">

          <i class="fa fa-print"></i> cetak lampiran</a>

          <?php }
        } ?>


            </div> <!-- /.portlet-content -->

          </div> <!-- /.portlet -->

        </div> <!-- /.col -->


      </div> <!-- /.row -->

    </div> <!-- /.content-container -->

  </div> <!-- /.content -->

</div> <!-- /.container -->
