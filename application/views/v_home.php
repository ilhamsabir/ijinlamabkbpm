
	<div style="clear: both;"></div>


	<!--Headline Area-->
	<div id="intro">
		<div class="headline-bg">
			<div class="headline-left-content">
				<div class="animated fadeIn">
				<img src="<?php echo base_url();?>/assets/images/w3.png" />
				</div>
				<div class="headline-icons">
					<br/>
					<br/>
					<br/>
					<div id="store-buttons" class="animated bounceIn tada">
						<div class="penelitian-button">
						    <a href="#masuk">
						       <img src="<?php echo base_url();?>/assets/images/i1a.png" alt="playstore" class="gambar">

						    </a>
						</div>
						<div class="survey-button">
						   <a href="#alur">
						   <img src="<?php echo base_url();?>/assets/images/i5a.png" alt="playstore" class="gambar">

						   </a>
						 </div>
						<div class="kp-button"><a href="#syarat">
						   <img src="<?php echo base_url();?>/assets/images/i4a.png" alt="playstore" class="gambar"/>

						</div>

					</div>

					<div id="store-buttons" class="animated bounceIn tada" style="margin-top:4%;">

					    <div class="ormas-button">
						   <a href="<?php echo site_url('monitoringberkas');?>">
						   <img src="<?php echo base_url();?>/assets/images/i6a.png" alt="playstore" class="gambar"/>

						   </a>
						</div>
						<div class="lsm-button">
						   <a href="#contact"><!-- contak -->
						   <img src="<?php echo base_url();?>/assets/images/i2a.png" alt="playstore" class="gambar"/>

						   </a>
						</div>

            <div class="lsmi-button"><!-- pengaduan -->
               <a href="#">
               <img src="<?php echo base_url();?>/assets/images/i3a.png" alt="playstore" class="gambar"/>

               </a>
            </div>

					</div>


				</div>
			</div>


		</div>


	</div><!--end #intro-->
	<!--End Headline Area-->




	<!--Features-->
	<div id="masuk">


		 <h2>Sudah Punya Akun</h2>
    <div class="col-md-4 col-md-offset-4">

     <?php echo $this->session->flashdata('pesan');?>
     </div>
    <div class="container">
    <div class="row">
     <div class="col-md-4 col-md-offset-4">
      <div class="panel panel-warning" style="border-color:#3ea225;border-radius:0;margin-top:0px;">

        <div class="panel-heading" style="background-color:#3ea225;color:#fff;border-radius:0">
        <i class="icon icon-signin"></i> <small> Belum Punya Akun ? <a href="#daftar" class="btn btn-default btn-xs" style="float:right">Klik Disini !</a></small>
          </div>
         <div class="panel-body">

        <form action="<?= site_url('home/cek_login');?>" method="post" class="form-horizontal">
            <div class="input-group input-append date">
               <input type="text" class="form-control" name="email" placeholder="Email"/>
                <span class="input-group-addon add-on" style="background-color:#7d7d7d;border:2px solid #7d7d7d"><span class="icon-user"></span></span>
            </div>
          <br/>
            <div class="input-group input-append date">
               <input type="password" class="form-control" name="password" placeholder="Password"/>
                <span class="input-group-addon add-on" style="background-color:#7d7d7d;border:2px solid #7d7d7d"><span class="icon-lock"></span></span>
            </div>




          <div class="modal-footer">
              <button type="submit" class="btn btn-success btn-md" style="float:left">Login</button>
              <a class="btn btn-default btn-sm" href="<?php echo site_url('home/lupa_pass');?>">Lupa Password</a>
           </div>
           </form>


         </div>
      </div>
      </div>
      </div>
      </div>

	</div><!--end #features-->
	<!--End Features-->

		<!--Screens-->
	 <!--Features-->
  <div id="daftar">
    <div class="dot-daftar">
      <a class="icon-user1" href="#daftar"><i class="icon icon1-check"></i></a>
    </div>

    <div class="container">

        <div class="features"><h2>Form Pendaftaran</h2></div>
        <br/>
      <div class="row">
         <div class="panel panel-danger" style="border-color:#cc4040;border-radius:0">
                <div class="panel-heading" style="background-color:#cc4040;color:#fff;border-radius:0">
                <i class="icon icon-smile"></i> Silahkan Lengkapi Data Diri Anda Di Bawah Ini</div>
                <div class="panel-body">

          <form id="defaultForm" method="post" class="form-horizontal" action="<?php echo site_url('home/daftar')?>" enctype="multipart/form-data">

            <div class="col-md-6">

              <input type="hidden" class="form-control" name="kd_user" value="<?php echo $kd_user;?>" />
              <input type="hidden" class="form-control" name="level" value="pengguna" />
              <div class="form-group">
                            <label class="col-lg-4 control-label">Username</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" name="username" />

                            </div>
              </div>



                 <div class="form-group">
                            <label class="col-lg-4 control-label">Password</label>
                            <div class="col-lg-8">
                                <input type="password" class="form-control" name="password" />
                            </div>
                        </div>

                          <div class="form-group">
                            <label class="col-lg-4 control-label">Retype password</label>
                            <div class="col-lg-8">
                                <input type="password" class="form-control" name="confirmPassword" />
                            </div>
                          </div>

             <div class="form-group">
                 <label class="col-lg-4 control-label">Email</label>
                  <div class="col-lg-8">
                   <input type="text" class="form-control" name="email" />

                  </div>
              </div>

                          <hr/>
                          <div class="form-group">
                            <label class="col-lg-4 control-label">Nama Lengkap</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" name="nama" placeholder="" />
                            </div>
                           </div>
                          <div class="form-group">
                            <label class="col-lg-4 control-label">No KTP</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" name="noktp" />
                            </div>
                           </div>
                            <div class="form-group">
                            <label class="col-lg-4 control-label">Jenis Kelamin</label>
                            <div class="col-lg-8">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="jeniskelamin" value="laki-laki" required /> Laki-laki
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="jeniskelamin" value="perempuan" required/> Perempuan
                                    </label>
                                </div>

                            </div>
                           </div>

                           <div class="form-group">
                            <label class="col-lg-4 control-label">Tempat Lahir</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" name="tempatlahir" placeholder="" />
                            </div>
                           </div>

                          <div class="form-group">
                            <label class="col-lg-4 control-label">Tanggal Lahir</label>
                            <div class="col-lg-8">
                               <div class="input-group input-append date" id="datetimepicker1">
                                   <input type="text" class="form-control" name="tgllahir" placeholder="dd/mm/yyyy" />
                                   <span class="input-group-addon add-on"><span class="icon-calendar"></span></span>
                                </div>
                            </div>


                           </div><!-- form gorp-->


                       </div>

                       <div class="col-md-6">

                        <div class="form-group">
                            <label class="col-lg-4 control-label">Alamat</label>
                            <div class="col-lg-8">
                               <textarea name="alamat" class="form-control" rows="2"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-4 control-label">RT/ RW</label>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" name="rt" placeholder="" />
                            </div>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" name="rw" placeholder="" />
                            </div>
                        </div>

                         <div class="form-group">
                            <label class="col-lg-4 control-label">Kelurahan</label>
                            <div class="col-lg-8">
                              <input type="text" class="form-control" name="kelurahan" placeholder="" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-4 control-label">Kecamatan</label>
                            <div class="col-lg-8">
                              <input type="text" class="form-control" name="kecamatan" placeholder="" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-4 control-label">Kota</label>
                            <div class="col-lg-8">
                              <input type="text" class="form-control" name="kota" placeholder="" />
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-lg-4 control-label">Agama</label>
                            <div class="col-lg-8">

                               <select name="agama" class="form-control">
                          <option value=""></option>
                          <option value="Islam">Islam</option>
                          <option value="Kristen Protestan">Kristen Protestan</option>
                          <option value="Kristen Katolik">Kristen Katolik</option>
                          <option value="Budha">Budha</option>
                          <option value="Hindu">Hindu</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-4 control-label">Pekerjaan</label>
                            <div class="col-lg-8">
                              <input type="text" class="form-control" name="pekerjaan" placeholder="" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-4 control-label">Status Perkawinan</label>
                            <div class="col-lg-8">

                               <select name="status" class="form-control">
                          <option value=""></option>
                                    <option value="Menikah">Menikah</option>
                                    <option value="Belum Menikah">Belum Menikah</option>
                                    <option value="Cerai">Cerai</option>
                                    <option value="Cerai Hidup">Cerai Hidup</option>
                                    <option value="Cerai Mati">Cerai Mati</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-4 control-label">No Hp</label>
                            <div class="col-lg-8">
                              <input type="text" class="form-control" name="nohp" placeholder="" />
                            </div>
                        </div>



                        <div class="form-group">
                           <label class="col-lg-4 control-label">Kode Kemanan</label>
                            <label class="col-lg-3 control-label" id="captchaOperation"
                            style="border:1px solid #368ee0;background-color:#368ee0;color:#fff;pading-bottom:20px;line-height:25px;border-radius:5%;margin:0 0 0 15px;text-align:center"></label>
                            <div class="col-lg-3">
                                <input type="text" class="form-control" name="captcha" />
                            </div>
                        </div>


                       </div> <!-- col - md- 6-->

                       <div class="col-md-8">
                         <div class="form-group">
                            <div class="col-lg-9 col-lg-offset-3">
                                 <hr/>

                                <button type="submit" class="btn btn-success">Submit</button>
                                <button type="button" class="btn btn-danger" id="resetBtn">Reset form</button>
                            </div>
                        </div>
                        </div>

                    </form>
          </div>
          </div>

      </div>

    </div><!--end container -->

  </div><!--end #features-->


  <!--Pricing & Plans-->
  <div id="syarat">
    <div class="dot-syarat">
    <a class="icon-site1map" href="#plans"></a>
    </div>
      <div class="plans"><h2 style="color:#fff">Persyaratan</h2> </div>
      <hr style="width:75%" />

    <div class="container">

      <!--Pricing Tables-->
      <div class="row">
        <img src="<?php echo base_url();?>/uploads/syarat_1a.png" style="max-width:1110px">
      </div>
			<div class="row">
				<img src="<?php echo base_url();?>/uploads/syarat_2a.png" style="max-width:1110px">
			</div>


    </div><!--end container-->
  </div> <!--#plans-->
  <!--End Pricing & Plans-->


  <!--Pricing & Plans-->
  <div id="alur">
    <div class="dot-alur">
    <a class="icon-sit1emap" href="#alur"></a>
    </div>
      <div class="plans"><h2>Alur Pelayanan</h2></div>


    <div class="container">

      <!--Pricing Tables-->
      <div class="row">
        <img src="<?php echo base_url();?>/uploads/alur_a1.png" style="max-width:1150px">
      </div>
			<div class="row">
				<img src="<?php echo base_url();?>/uploads/alur_a2.png" style="max-width:1150px">
			</div>



    </div><!--end container-->
  </div> <!--#plans-->
  <!--End Pricing & Plans-->



  <!--Contact-->
  <div id="contact">
    <div class="dot-contact">
      <a class="icon-map-marker" href="#contact"></a>
    </div>
    <div class="contact">
      <h2>Call Center</h2>
    </div>

    <div class="container">

        <div class="row" style="padding-top: 40px;">
          <div class="contact-details-title">Perizinan Online BKBPM Kota Bandung</div>
          <div class="contact-details">
          Jl. Wastukencana No. 2 Bandung, Jawa Barat 40117, Indonesia.<br />
          Tlp. 022-4230097<br/>
          sekretariat@bkbpm.bandung.go.id<br />
          www.bkbpm.bandung.go.id<br />

          </div>
        </div>

        <div class="row">
          <div class="contact-form">
          <div class="col-md-6">
            <form method="POST" id="contact-form" class="form-horizontal" action="" onSubmit="alert('Thank you for your feedback!');">

            <div class="form-group">
            <label class="col-lg-2 control-label">Nama</label>
              <div class="col-lg-10">
              <input class="form-control" type="text" name="name" required/>
              </div>
            </div>

            <div class="form-group">
            <label class="col-lg-2 control-label">Email</label>
              <div class="col-lg-10">
              <input class="form-control" name="email" type="text" required/>
            </div>
            </div>

            <div class="form-group">
            <label class="col-lg-2 control-label">Pesan</label>
              <div class="col-lg-10">
              <textarea class="form-control" name="message" rows="10" maxlength="1024" required></textarea>
            </div>
            </div>

            <div class="form-group">
            <div class="col-lg-offset-2 col-lg-10">
              <button class="btn btn-default" type="reset" >Reset</button>
              <input type="hidden" name="save" value="contact-form">
              <button class="btn btn-success" id="submit" type="submit">Kirim</button>
            </div>
            </div>

            </form>
          </div><!--end coll-md-6-->
          </div><!--end contact-form-->

          <div class="col-md-6">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.8315285446824!2d107.607851614027!3d-6.910738069553777!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6377cb15e9d%3A0x3548c27e3a7ee6b3!2sBalai+Kota+Bandung!5e0!3m2!1sid!2sid!4v1456689000430"
           width="600" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div><!--end row-->

    </div><!--end container-->

  </div><!--end #contact-->
  <!--End Contact-->
