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
                Pilih Layanan Perizinan BKBPM Kota Bandung
              </h3>

            </div> <!-- /.portlet-header -->

            <div class="portlet-content">

                <div class="col-md-8 col-md-offset-2">


        <div class="col-sm-6">


            <h1>
            <a href="<?php echo site_url('publikpermohonanspp');?>" class="btn btn-success btn-md" type="button" style="border-radius:0;line-height:4;font-size:18px;width:320px">
            <i class="fa fa-file-text"></i> &nbspSurvey / PKL / Penelitian
            </a>
             </h1>



        </div> <!-- /.col -->

        <div class="col-sm-6">
          <h1>
            <a href="<?php echo site_url('publikpermohonanol');?>" class="btn btn-warning btn-md" type="button" style="border-radius:0;line-height:4;font-size:18px;width:320px">
            <i class="fa fa-users"></i> &nbsp ORMAS / LSM
            </a>
             </h1>
        </div> <!-- /.col -->

                </div>


            </div> <!-- /.portlet-content -->



          </div> <!-- /.portlet -->



          <div class="portlet">

            <div class="portlet-header">

              <h3>
                <i class="fa fa-info"></i>
                Info Gagal Verifikasi
              </h3>

            </div> <!-- /.portlet-header -->

            <div class="portlet-content panel-thread scrollable-panel">

              <ul class="panel-lists">
                <?php foreach ($datagagal as $key) { ?>

                <li>
                  <img src="<?php echo base_url();?>/uploads/admin-icon.png" alt="Avatar" class="panel-list-avatar">
                  <div class="panel-list-content">
                      <span class="panel-list-time"><?php echo $key->tglkirim;?></span>
                      <p class="panel-list-title"><?php echo $key->isigagal;?></p>
                      <a href="<?php echo site_url('publikpermohonansppbaru/surveybaru/'.$key->kd_ijin);?>">perbaharui data</a>
                      <span class="panel-list-meta">by <a href="#">Admin </a>  </span>
                  </div>
                </li>
                <?php } ?>


              </ul>


            </div> <!-- /.portlet-content -->

          </div> <!-- /.portlet -->




        </div> <!-- /.col -->


      </div> <!-- /.row -->

    </div> <!-- /.content-container -->

  </div> <!-- /.content -->

</div> <!-- /.container -->
