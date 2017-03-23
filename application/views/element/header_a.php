<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <title><?php echo $title;?></title>

  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width">

  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700">
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,300,700">
  <link rel="stylesheet" href="<?php echo base_url();?>/admin-assets/css/font-awesome.css">
  <link rel="stylesheet" href="<?php echo base_url();?>/admin-assets/js/libs/css/ui-lightness/jquery-ui-1.9.2.custom.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>/admin-assets/css/bootstrap.min.css">

  <!-- Plugin CSS -->
  <link rel="stylesheet" href="<?php echo base_url();?>/admin-assets/js/plugins/morris/morris.css">
  <link rel="stylesheet" href="<?php echo base_url();?>/admin-assets/js/plugins/icheck/skins/minimal/blue.css">
  <link rel="stylesheet" href="<?php echo base_url();?>/admin-assets/js/plugins/select2/select2.css">
  <link rel="stylesheet" href="<?php echo base_url();?>/admin-assets/js/plugins/fullcalendar/fullcalendar.css">
  <link rel="stylesheet" href="<?php echo base_url();?>/admin-assets//js/plugins/datepicker/datepicker.css">
  <!-- App CSS -->
  <link rel="stylesheet" href="<?php echo base_url();?>/admin-assets/css/target-admin.css">
  <link rel="stylesheet" href="<?php echo base_url();?>/admin-assets/css/custom.css">

    <link rel="stylesheet" href="<?php echo base_url();?>/admin-assets/js/plugins/fileupload/bootstrap-fileupload.css">


   <link rel="stylesheet" href="<?php echo base_url();?>/assets/validator/dist/css/bootstrapValidator.css"/>
   <link rel="stylesheet" href="<?php echo base_url();?>/assets/js/plugins/timepicker/bootstrap-timepicker.css">



    <link href="<?php echo base_url();?>/admin-assets/smart/styles/smart_wizard.css" rel="stylesheet" type="text/css">





  <style type="text/css">

.panel-info > .panel-heading{


  color: #fff;
background-color: #1995d4;
border-color: #00bde4;

}

  .stepNumber{

    position: relative;
    display: block;
    float: left;
    text-align: left;
    padding: 1px 0 0 5px;
    font: bold 62px Verdana, Arial, Helvetica, sans-serif;
    text-shadow: 3px 3px 3px #dadada;
  }

  .stepDesc{

    position: relative;
    display: block;
    float: right;
    text-align: left;
    margin-top: 10px ;
    margin-right: 40px;
    font: bold 16px Verdana, Arial, Helvetica, sans-serif;
}
  }

    .stepwizard-step p {
    margin-top: 10px;
}


.stepwizard-row {
    display: table-row;
}

.stepwizard {
    display: table;
    width: 100%;
    position: relative;
}

.stepwizard-step button[disabled] {
    opacity: 1 !important;
    filter: alpha(opacity=100) !important;
}

.stepwizard-row:before {
    top: 19px;
    bottom: 0;
    position: absolute;
    content: " ";
    width: 100%;
    height: 1px;
    background-color: #df2e1b;
    z-order: 0;

}

.stepwizard-step {
    display: table-cell;
    text-align: center;
    position: relative;
}

.btn-circle {
  width: 273px;
  height: 80px;
  text-align: center;
  padding: 6px 0;
  font-size: 12px;
  line-height: 4;
  border-radius: 0px;
  margin-right: 10px;
  box-shadow: 5px 5px 8px #888;
  /*background:  #EA8511; */
}

/*.btn-circle:before{
   position: absolute;
    content: " ";
    width: 30px;
    height: 60px;
    top:0px;

    background-color: transparent;
    z-index: 20;
    left: 240px;
    border-top: 30px solid #fff;
      border-bottom: 30px solid #fff;

      border-left: 30px solid transparent;
} */


  </style>





</head>

<body>

  <div class="navbar" style="background:#164792;color:#fff">

  <div class="container">

    <div class="navbar-header">

      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <i class="fa fa-cogs"></i>
      </button>

      <a class="navbar-brand navbar-brand-image" href="<?php echo site_url('publikhome');?>">
        <img src="<?php echo base_url();?>/admin-assets/img/logo5.png" alt="Site Logo" height="60px">
      </a>

    </div> <!-- /.navbar-header -->

    <div class="navbar-collapse collapse" style="background:#164792">



      <ul class="nav navbar-nav noticebar navbar-left">




      </ul>

      <ul class="nav navbar-nav navbar-right" style="color:#fff">

  

        <li class="dropdown">
          <a href="" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-bell"></i>
            <span class="navbar-visible-collapsed">&nbsp;Notifications&nbsp;</span>

            <?php if (isset($notif_survey)){
                 foreach ($notif_survey as $row) {

                   $j=$row->jml;

                   ?>

                   <?php if (isset($notif_ormas)){
                        foreach ($notif_ormas as $row) {
                          $k=$row->jml1;
                           ?>

                           <?php if (isset($count_pesanuser)){
                                foreach ($count_pesanuser as $row) {
                                if($row->jml2 == null){
                                  $l='0';
                                }else{
                                  $l=$row->jml2;
                                }

                                  $tot=$j+$k+$l;
                                   ?>

              <?php if($tot >= '1'){?>
                  <span class="label label-danger" style="font-size:10px"><?php echo $tot;?></span>
              <?php }else{ ?>
              <?php } ?>


            <?php }
            }
             ?>

             <?php }
             }
           }
         }
              ?>


          </a>

          <ul class="dropdown-menu noticebar-menu" role="menu">



            <li class="nav-header">
              <div class="pull-left">
                <h5 style="color:#164792">Pemberitahuan</h5>
              </div>

            </li>
            <?php if (isset($pesan_survey)){
                 foreach ($pesan_survey as $row) {  ?>
            <li>
              <a class="noticebar-item">
                <span class="noticebar-item-image">
                  <i class="fa fa-laptop text-success"></i>
                </span>
                <span class="noticebar-item-body">
                  <strong class="noticebar-item-title" style="font-weight:800;font-size:14px">Jenis Ijin <?php echo $row->jenisijin;?></strong>
                  <span class="noticebar-item-text">
                    <p style="text-align:justify">Permohonan <span class="label label-success"><?php echo $row->jenisijin;?></span> telah sukses diverifikasi ,
                      silahkan klik pemberitahuan ini untuk mencetak bukti permohonan anda</p>
                   </span>
                   <?php if(($row->notif) == 'unread' ){?>
                   <form method="post" action="<?php echo site_url('publikhome/notif');?>">
                     <input type="hidden" name="kd_ijin" value="<?php echo $row->kd_ijin;?>">
                     <input type="hidden" name="notif" value="read">
                     <button type="submit" class="btn btn-primar btn-sm">Lihat</button>
                   </form>
                 <?php }else{ ?>
                   <a href="<?php echo site_url('publikdatasurvey');?>" class="">Lihat</a>
                 <?php } ?>
                </span>
              </a>
            </li>
            <?php }
             } ?>

             <?php if (isset($pesan_ormas1)){
                  foreach ($pesan_ormas1 as $row) {  ?>
            <li>
              <a href="<?php echo site_url('publikdataormas');?>" class="noticebar-item">
                <span class="noticebar-item-image">
                  <i class="fa fa-group text-warning" style="color:#ed9c28"></i>
                </span>
                <span class="noticebar-item-body">
                  <strong class="noticebar-item-title" style="font-weight:800;font-size:14px">Jenis Ijin <?php echo $row->jenisijin;?></strong>
                  <span class="noticebar-item-text">
                    <p style="text-align:justify">Permohonan <span class="label label-warning"><?php echo $row->jenisijin;?></span>
                      telah sukses diverifikasi berkas,
                     selanjutnya kami akan menghubungi anda untuk verifikasi lapangan</p>
                   </span>
                </span>
              </a>
            </li>
            <?php }
             } ?>

             <?php if (isset($pesan_ormas2)){
                  foreach ($pesan_ormas2 as $row) {  ?>
            <li>
              <a href="<?php echo site_url('publikdataormas');?>" class="noticebar-item">
                <span class="noticebar-item-image">
                  <i class="fa fa-laptop text-success"></i>
                </span>
                <span class="noticebar-item-body">
                  <strong class="noticebar-item-title" style="font-weight:800;font-size:14px">Jenis Ijin <?php echo $row->jenisijin;?></strong>
                   <span class="noticebar-item-text">
                    <p style="text-align:justify">Permohonan <span class="label label-success"><?php echo $row->jenisijin;?></span>
                      telah sukses diverifikasi lapangan,
                     silahkan klik pemberitahuan ini untuk mencetak bukti permohonan anda</p>
                   </span>
                </span>
              </a>
            </li>
            <?php }
             } ?>


             <?php if (isset($count_pesanuser)){
                  foreach ($count_pesanuser as $row) {



              if($row->jml2 == null){
                    ?>
             <?php }else{?>

             <li>
             <a class="noticebar-item">
               <span class="noticebar-item-image">
                 <i class="fa fa-envelope text-danger"></i>
               </span>
               <span class="noticebar-item-body">
                 <strong class="noticebar-item-title" style="font-weight:800;font-size:14px">Pesan Anda</strong>
                 <?php foreach ($pesanuser as $row) { ?>
                  <?php if(($row->notif) == 'unread' ){?>
                  <form method="post" action="<?php echo site_url('publikhome/notifpesan');?>">
                    <input type="hidden" name="kd_pesan" value="<?php echo $row->kd_pesan;?>">
                    <input type="hidden" name="notif" value="read">
                    <button type="submit" class="btn btn-primar btn-sm">Lihat</button>
                  </form>
                <?php }else{ ?>
                  <a href="<?php echo site_url('publikpengaduan');?>" class="">Lihat</a>
                <?php } ?>
                <?php } ?>
               </span>
             </a>
           </li>
             <?php

           }
              }
            }
          ?>
          </ul>
        </li>

        <li>
          <a href="<?php echo site_url('publikprofile/cekuser/'.$this->session->userdata('ID'))?>"><i class="fa fa-user"></i> Edit Profile</a>
        </li>



         <li>
          <a href="<?php echo site_url('home/logout')?>"><i class="fa fa-sign-out"></i> Keluar</a>
        </li>
      </ul>







    </div> <!--/.navbar-collapse -->

  </div> <!-- /.container -->

</div> <!-- /.navbar -->
