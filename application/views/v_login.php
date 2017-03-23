
	
		<!--Screens-->
	<div id="" style="background:#7e2b58;height:600px">
	
		

			
		<div class="container">
	     
	     <div class="row">	
	      <div class="col-md-4 col-md-offset-4">
			   <div class="panel panel-warning" style="border-color:#f2cb00;border-radius:0;margin-top:200px">
                <div class="panel-heading" style="background-color:#f2cb00;color:#fff;border-radius:0">
                Silahkan Login Disini </div>
                <div class="panel-body">	


 			  	<?php echo $this->session->flashdata('pesan');?>

			

                     

				
				  <form id="defaultForm" method="post" class="form-horizontal" action="<?php echo site_url('login/cek_login')?>" enctype="multipart/form-data">
					    
				  		
                        <div class="form-group">
                            <label class="col-lg-4 control-label">Email</label>
                            <div class="col-lg-8">
                                <input type="email" class="form-control" name="email" readonly/>
                            </div>
                        </div>

				         <div class="form-group">
                            <label class="col-lg-4 control-label">Password</label>
                            <div class="col-lg-8">
                                <input type="password" class="form-control" name="password" />
                            </div>
                        </div>

                         
                        
                        <div class="panel-footer">
					      <button type="submit" class="btn btn-success btn-sm" value="Login">submit</button>
					    </div>

				  </form>
				
			
          			</div><!-- BODY -->
				
				</div>
				</div>
			</div>
		

		</div>	
	</div><!--end #screens>

