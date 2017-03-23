<div class="container">

  <div class="content" style="min-height:460px">

    <div class="content-container">

      

      <div>
        <h4 class="heading-inline">Hi. <?php echo $this->session->userdata('NAME');?>
        &nbsp;&nbsp;<small><?php date_default_timezone_set("Asia/Jakarta"); echo date(" h:i:s d/m/Y ");?></small>
        &nbsp;&nbsp;</h4>

    
      </div>



      <br>



      <div class="row">
<hr/>

 <div class="panbel panel-primary" style="border-radius:0"> 

     <div class="panel-heading" style="border-radius:0"><a href="<?php echo site_url('publikmonitoring');?>" class="btn btn-danger btn-xs">Kembali!</a></small>
          </div>   
      <div class="panel-body" style="border:2px solid #eee;background-color:#fff"> 
       

         <?php foreach($monitor_ormas as $row){  ?>
              <div class="form-group">
                <label class="col-md-4 control-label">No. Resi</label>
                <label class="col-md-6 control-label">: <?php echo $row->kd_ijin1;?></label>
              </div>

               <div class="form-group">
                <label class="col-md-4 control-label">Jenis Izin</label>
                <?php if($row->jenisijin == 'ormas'){?>
                <label class="col-md-6 control-label">: ORMAS</label>
                <?php }else{?>
                <label class="col-md-6 control-label">: LSM</label>
                <?php } ?>
              </div>

               <div class="form-group">
                <label class="col-md-4 control-label">Waktu Pengajuan </label>
                <label class="col-md-6 control-label">: <?php echo $row->tglajuan;?></label>
              </div>

              <div class="form-group">
                <label class="col-md-4 control-label">Nama Organisasi</label>
                <label class="col-md-6 control-label">: <?php echo $row->nmorganisasi;?></label>
              </div>

              <div class="form-group">
                <label class="col-md-4 control-label">Bidang Organisasi</label>
                <label class="col-md-6 control-label">: <?php echo $row->bidang;?></label>
              </div>

              <div class="form-group">
                <label class="col-md-4 control-label">Ruang Lingkup Organisasi</label>
                <label class="col-md-6 control-label">: <?php echo $row->ruanglingkup;?></label>
              </div>

              <div class="form-group">
                <label class="col-md-4 control-label">Status Berkas </label>
                <?php if( $row->verifikasi == '0'){?>
                <label class="col-md-6 control-label">: <span class="label label-primary">Pemeriksaan Dokumen</span></label>
                <?php }elseif ($row->verifikasi == '1') {?>
                <label class="col-md-6 control-label">: <span class="label label-warning">Verifikasi Lapangan</span></label>
                <?php }else{?>
                 <label class="col-md-6 control-label">: <span class="label label-success">Permohonan Sukses</span></label>

                <?php } ?>
              </div>


          <?php } ?>
            <hr/>


      </div>


      </div>
   

   


      </div> <!-- /.row -->

    </div> <!-- /.content-container -->
      
  </div> <!-- /.content -->

</div> <!-- /.container -->










