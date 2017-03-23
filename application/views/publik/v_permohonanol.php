<?php
  $atribut_popup = array(
            'width' => '900',
            'height' => '550',
            'scrollbars' => 'yes',
             'status' => 'no',
            'resizable' => 'no',
            'screenx' => '100',
            'screeny' => '30',

      //'class'=>'btn btn-warning'

        );
?>
<div class="container">

  <div class="content">

    <div class="content-container">

      <div class="row">


<div class="stepwizard">
    <div class="setup-panel">
        <div class="stepwizard-step">
            <a href="#step-1" type="button" class="btn btn-primary btn-circle">
            <span class="stepNumber">1</span>
            <span class="stepDesc">Tahap 1 <br/><small style="font-size:12px">Pilih Layanan Perizinan</small> </span>
            </a>

        </div>
        <div class="stepwizard-step">
            <a href="#step-2" type="button" class="btn btn-circle btn-info" disabled="disabled" style="opacity:100;" >
           <span class="stepNumber">2</span>
           <span class="stepDesc">Tahap 1 <br/><small style="font-size:12px">Mengisi Form Permohonan</small> </span>
            </a>

        </div>
        <div class="stepwizard-step">
            <a href="#step-3" type="button" class="btn btn-circle btn-info" disabled="disabled" style="opacity:100;">
            <span class="stepNumber">3</span>
            <span class="stepDesc">Tahap 3 <br/><small style="font-size:12px">Upload Berkas</small> </span>
            </a>

        </div>

    </div>
</div>



 <form role"form" method="post" class="form-horizontal" action="<?php echo site_url('publikpermohonanol/daftar')?>" enctype="multipart/form-data">
    <div class="row setup-content" id="step-1">
        <div class="col-xs-12">
         <div class="panel panel-primary" style="margin-top:20px;border-radius:0px">

                <div class="panel-heading" style="border-radius:0px">
                <h4> <i class="fa fa-building"></i> Pilih Jenis Izin</h4></div>
                <div class="panel-body">
            <div class="col-md-6 col-md-offset-3">


              <br/>
                 <div class="form-group">
                  <div class="radio">
                                    <label>
                                        <input type="radio" class="control-label" name="jenisijin" value="ormas" required="required"/>
                                        <strong>Ormas</strong>
                                    </label>
                  </div>
                  </div>

                                <br/>
                   <div class="form-group">
                  <div class="radio">
                                    <label>
                                        <input type="radio" class="control-label" name="jenisijin" value="lsm" required="required"/>
                                        <strong>LSM</strong>
                                    </label>
                  </div>
                  </div>
                  <br/>


                  </div>
                </div><!-- panel body-->
                <div class="modal-footer">
                <button class="btn btn-primary nextBtn btn-md" type="button" id="validateBtn">Lanjut</button>
                </div>


            </div><!-- panel -->

        </div>
    </div>
    <div class="row setup-content" id="step-2">
        <div class="col-xs-12">
         <div class="panel panel-primary" style="margin-top:20px;border-radius:0px;">

           <div class="panel-heading" style="border-radius:0px">
                <h4>Lengkapi Data Berikut</h4></div>
          <div class="panel-body">


          <label class="control-label" style="font-weight:100px;background:#eee;border:2px solid #eee;width:100%;text-align:left">Data Pemohon</label>
          <br/>
             <br/>
             <div class="form-group">
                <label class="col-md-4 control-label" style="font-weight:100px">No. Resi</label>
                 <div class="col-md-4">
                    <input type="text" class="form-control" name="kd_ijin1" value="<?php echo $kd_ijin1;?>" readonly/>
                     <input type="hidden" class="form-control" name="kd_user" value="<?php echo $this->session->userdata('ID');?>" readonly/>
                     <input type="hidden" class="form-control" name="verifikasi" value="0" readonly/>

                     <input type="hidden" class="form-control" name="tglajuan" value="<?php date_default_timezone_set("Asia/Jakarta"); echo date(" d/m/Y ");?>" readonly/>
                 </div>
                </div>

               <div class="form-group">
                <label class="col-md-4 control-label" style="font-weight:100px">Nama Lengkap</label>
                 <div class="col-md-4">
                    <input type="text" class="form-control" value="<?php echo $this->session->userdata('NAME');?>" readonly />
                 </div>
                </div>

                <div class="form-group">
                  <label class="col-md-4 control-label" style="font-weight:100px">Email</label>
                  <div class="col-md-4">
                    <input type="text" class="form-control" value="<?php echo $this->session->userdata('EMAIL');?>" readonly/>
                  </div>
                </div>

                 <div class="form-group">
                  <label class="col-md-4 control-label" style="font-weight:100px">No Hp</label>
                  <div class="col-md-4">
                    <input type="text" class="form-control" value="<?php echo $this->session->userdata('NOHP');?>" readonly/>
                  </div>
                </div>

            <label class="control-label" style="font-weight:100px;background:#eee;border:2px solid #eee;width:100%;text-align:left">Data Organisasi</label>
             <br/>
             <br/>

             <div class="form-group">
                <label class="col-md-4 control-label">Nama Organisasi <font color="red">&nbsp;*</font></label>
                 <div class="col-md-6">
                    <input type="text" class="form-control" name="nmorganisasi" required="required"/>
                 </div>
                </div>

                <div class="form-group">
                  <label class="col-md-4 control-label">Bidang Kegiatan <font color="red">&nbsp;*</font></label>
                  <div class="col-md-6">
                    <input class="form-control" type="text" name="bidang" required="required">

                  </div>
                </div>

             <div class="form-group">
                <label class="col-md-4 control-label">Ruang Lingkup <font color="red">&nbsp;*</font></label>
                 <div class="col-md-6">
                    <input type="text" class="form-control" name="ruanglingkup" required="required"/>
                 </div>
                </div>

                <div class="form-group">
                  <label class="col-md-4 control-label">Alamat Kantor / Sekretariat <font color="red">&nbsp;*</font></label>
                  <div class="col-md-6">
                    <input class="form-control" type="text" name="alamatkantor" required="required">

                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-4 control-label">Tempat Waktu Pendirian <font color="red">&nbsp;*</font></label>
                  <div class="col-md-6">
                    <input class="form-control" type="text" name="tmptpendirian" required>

                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-4 control-label">Asas Ciri Organisasi <font color="red">&nbsp;*</font></label>
                  <div class="col-md-6">
                    <input class="form-control" type="text" name="asas" required>

                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-4 control-label">Tujuan Organisasi <font color="red">&nbsp;*</font></label>
                  <div class="col-md-6">
                    <input class="form-control" type="text" name="tujuan" required>

                  </div>
                </div>

               -
         <div class="form-group">
                <label class="col-md-4 control-label">Unit / Satuan / Organisasi<font color="red">&nbsp;*</font></label>
                 <div class="col-md-6">
                    <input type="text" class="form-control" name="unit" required/>
                 </div>
            </div>

           <div class="form-group">
                <label class="col-md-4 control-label">Usaha Organisasi<font color="red">&nbsp;*</font></label>
                 <div class="col-md-6">
                    <input type="text" class="form-control" name="usaha" required/>
                 </div>
            </div>

           <div class="form-group">
                <label class="col-md-4 control-label">Sumber Keuangan<font color="red">&nbsp;*</font></label>
                 <div class="col-md-6">
                    <input type="text" class="form-control" name="sumber" required/>
                 </div>
            </div>



                </div><!-- panel body-->
                <div class="modal-footer">
                <button class="btn btn-default prevBtn btn-md pull-left" type="button" >Kembali</button>
                <button class="btn btn-primary nextBtn btn-md pull-right" type="button" >Lanjut</button>
                </div>


            </div><!-- panel -->

        </div>
    </div>
    <div class="row setup-content" id="step-3">
       <div class="col-xs-12">
          <div class="panel panel-primary" style="margin-top:20px;border-radius:0px">

                <div class="panel-heading" style="border-radius:0">
                Kelengkapan Data</div>
          <div class="panel-body">
            <!-- mulai -->
             <label class="col-md-4 control-label">Lambang /Logo Organisasi<font color="red">&nbsp;*</font></label>
             <div class="col-md-6 bootstrap-timepicker">

               <div class="input-group">
                      <input name="lambang" class="form-control" type="text" id="lambang" style="background-color:#fff" required="true" readonly="true">
                      <span class="input-group-addon" style="background-color:#24AD20">
                      <?php echo anchor_popup(base_url().'publikdokumenlambang',
                        '<i class="fa fa-file-photo-o" style="color:#fff"></i> <i style="color:#fff">Pilih Gambar</i>',$atribut_popup); ?>
                     </span>
                </div>
            </div>
            <!-- batas-->
            <br/>
             <br/>
             <br/>
            <!-- mulai -->
            <label class="col-md-4 control-label">Bendera Organisasi<font color="red">&nbsp;*</font></label>
            <div class="col-md-6 bootstrap-timepicker">

               <div class="input-group">
                      <input name="bendera" class="form-control" type="text" id="bendera" style="background-color:#fff" required="true" readonly="true">
                      <span class="input-group-addon" style="background-color:#24AD20">
                      <?php echo anchor_popup(base_url().'publikdokumenbendera',
                        '<i class="fa fa-file-photo-o" style="color:#fff"></i> <i style="color:#fff">Pilih Gambar</i>',$atribut_popup); ?>
                     </span>
                  </div>
            </div>
            <!-- batas-->
            <br/>
             <br/>
              <br/>
            <!-- mulai -->
             <label class="col-md-4 control-label">Akte Pendirian Atau Status ORKESMAS Yang Disahkan Notaris Dan Dilegalisir<font color="red">&nbsp;*</font></label>
             <div class="col-md-6 bootstrap-timepicker">

               <div class="input-group">
                      <input name="akteorganisasi" class="form-control" type="text" id="akteorganisasi" style="background-color:#fff" required="true" readonly="true">
                      <span class="input-group-addon" style="background-color:#24AD20">
                      <?php echo anchor_popup(base_url().'publikdokumenakte',
                        '<i class="fa fa-file-pdf-o" style="color:#fff"></i> <i style="color:#fff">Pilih File</i>',$atribut_popup); ?>
                     </span>
                  </div>
            </div>
            <!-- batas-->

            <br/>
             <br/>
              <br/>
            <!-- mulai -->
             <label class="col-md-4 control-label">AD/ART Yang Disahkan Notaris Dan Dilegalisir<font color="red">&nbsp;*</font></label>
             <div class="col-md-6 bootstrap-timepicker">

               <div class="input-group">
                      <input name="adartorganisasi" class="form-control" type="text" id="adartorganisasi" style="background-color:#fff"required="true" readonly="true">
                      <span class="input-group-addon" style="background-color:#24AD20">
                      <?php echo anchor_popup(base_url().'publikdokumenadart',
                        '<i class="fa fa-file-pdf-o" style="color:#fff"></i> <i style="color:#fff">Pilih File</i>',$atribut_popup); ?>
                     </span>
                  </div>
            </div>
            <!-- batas-->

             <br/>
             <br/>
              <br/>
            <!-- mulai -->
             <label class="col-md-4 control-label">Tujuan & Program Kerja Organisasi<font color="red">&nbsp;*</font></label>
             <div class="col-md-6 bootstrap-timepicker">

               <div class="input-group">
                      <input name="tujuanorganisasi" class="form-control" type="text" id="tujuanorganisasi" style="background-color:#fff" required="true" readonly="true">
                      <span class="input-group-addon" style="background-color:#24AD20">
                      <?php echo anchor_popup(base_url().'publikdokumentujuan',
                        '<i class="fa fa-file-pdf-o" style="color:#fff"></i> <i style="color:#fff">Pilih File</i>',$atribut_popup); ?>
                     </span>
                  </div>
            </div>
            <!-- batas -->


             <br/>
             <br/>
              <br/>
            <!-- mulai -->
             <label class="col-md-4 control-label">Surat Keputusan Tentang Susunan Pengurus ORKESMAS Secara Lengkap Dan Sah Sesuai AD/ART <font color="red">&nbsp;*</font></label>
             <div class="col-md-6 bootstrap-timepicker">

               <div class="input-group">
                      <input name="skorganisasi" class="form-control" type="text" id="skorganisasi" style="background-color:#fff" required="true" readonly="true">
                      <span class="input-group-addon" style="background-color:#24AD20">
                      <?php echo anchor_popup(base_url().'publikdokumenskp',
                        '<i class="fa fa-file-pdf-o" style="color:#fff"></i> <i style="color:#fff">Pilih File</i>',$atribut_popup); ?>
                     </span>
                  </div>
            </div>
            <!-- batas -->

             <br/>
             <br/>
              <br/>
              <br/>
              <br/>
            <!-- mulai -->
             <label class="col-md-4 control-label">FOTOCOPY KTP Pengurus<font color="red">&nbsp;*</font></label>
             <div class="col-md-6 bootstrap-timepicker">

               <div class="input-group">
                      <input name="ktporganisasi" class="form-control" type="text" id="ktporganisasi" style="background-color:#fff" required="true" readonly="true">
                      <span class="input-group-addon" style="background-color:#24AD20">
                      <?php echo anchor_popup(base_url().'publikdokumenfotoktp',
                        '<i class="fa fa-file-pdf-o" style="color:#fff"></i> <i style="color:#fff">Pilih File</i>',$atribut_popup); ?>
                     </span>
                  </div>
            </div>
            <!-- batas -->

             <br/>
             <br/>
              <br/>
            <!-- mulai -->
             <label class="col-md-4 control-label">Surat Keterangan Domisili Yang Telah Dilegalisir<font color="red">&nbsp;*</font></label>
             <div class="col-md-6 bootstrap-timepicker">

               <div class="input-group">
                      <input name="domisiliorganisasi" class="form-control" type="text" id="domisiliorganisasi" style="background-color:#fff" required="true" readonly="true">
                      <span class="input-group-addon" style="background-color:#24AD20">
                      <?php echo anchor_popup(base_url().'publikdokumendomisili',
                        '<i class="fa fa-file-pdf-o" style="color:#fff"></i> <i style="color:#fff">Pilih File</i>',$atribut_popup); ?>
                     </span>
                  </div>
            </div>
            <!-- batas -->

             <br/>
             <br/>
              <br/>
            <!-- mulai -->
             <label class="col-md-4 control-label">NPWP Atas Nama Organisasi<font color="red">&nbsp;*</font></label>
             <div class="col-md-6 bootstrap-timepicker">

               <div class="input-group">
                      <input name="npwporganisasi" class="form-control" type="text" id="npwporganisasi" style="background-color:#fff" required="true" readonly="true">
                      <span class="input-group-addon" style="background-color:#24AD20">
                      <?php echo anchor_popup(base_url().'publikdokumennpwp',
                        '<i class="fa fa-file-photo-o" style="color:#fff"></i> <i style="color:#fff">Pilih Gambar</i>',$atribut_popup); ?>
                     </span>
                  </div>
            </div>
            <!-- batas -->

             <br/>
             <br/>
              <br/>
            <!-- mulai -->
             <label class="col-md-4 control-label">Foto Kantor / Sekretariat ORKESMAS (tampak depan dan memuat papan nama)<font color="red">&nbsp;*</font></label>
             <div class="col-md-6 bootstrap-timepicker">

               <div class="input-group">
                      <input name="fotokantor" class="form-control" type="text" id="fotokantor" style="background-color:#fff" required="true" readonly="true">
                      <span class="input-group-addon" style="background-color:#24AD20">
                      <?php echo anchor_popup(base_url().'publikdokumenkantor',
                        '<i class="fa fa-file-photo-o" style="color:#fff"></i> <i style="color:#fff">Pilih Gambar</i>',$atribut_popup); ?>
                     </span>
                  </div>
            </div>
            <!-- batas -->

             <br/>
             <br/>
              <br/>
            <!-- mulai -->
             <label class="col-md-4 control-label">Bukti Kepemilikan Atau Surat Perjanjian Kontrak Atau Izin Pakai Kantor/Sekretariat ORKESMAS<font color="red">&nbsp;*</font></label>
             <div class="col-md-6 bootstrap-timepicker">

               <div class="input-group">
                      <input name="izinkantor" class="form-control" type="text" id="izinkantor" style="background-color:#fff" required="true" readonly="true">
                      <span class="input-group-addon" style="background-color:#24AD20">
                      <?php echo anchor_popup(base_url().'publikdokumenizin',
                        '<i class="fa fa-file-pdf-o" style="color:#fff"></i> <i style="color:#fff">Pilih File</i>',$atribut_popup); ?>
                     </span>
                  </div>
            </div>
            <!-- batas -->






                </div><!-- panel body-->
                <div class="modal-footer">
                <button class="btn btn-default prevBtn btn-md pull-left" type="button" >Kembali</button>
                <button class="btn btn-success nextBtn btn-md pull-right" type="submit" >Simpan</button>
                </div>


            </div><!-- panel -->

        </div>
    </div>

</form>

      </div><!-- ROW -->




    </div> <!-- /.content-container -->

  </div> <!-- /.content -->

</div> <!-- /.container -->
