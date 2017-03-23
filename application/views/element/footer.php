<!--Footer (with Social Media)-->
	<div class="copyright">
			<div class="container">
				<div class="social-media">
					<span class="social">
						<a href="#"><i class="icon-facebook"></i></a>
						<a href="#"><i class="icon-twitter"></i></a>
						<a href="#"><i class="icon-google-plus"></i></a>
						
					</span>
				</div>
					&copy; 2016 Perizinan Online v(1.0) BKBPM Kota Bandung. All rights reserved.
			</div><!--end container-->
	</div><!--end copyright-->
	<!--End Footer (with Social Media)-->
	
</div><!-- end wrapper -->

<script type="text/javascript" src="<?php echo base_url();?>/assets/js/bootstrap.min.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>/assets/js/modernizr.custom.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>/assets/js/main.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>/assets/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>/assets/js/jquery.localscroll-1.2.7-min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>/assets/js/jquery.scrollTo-1.4.2-min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>/assets/js/jquery.parallax-1.1.3.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>/assets/js/jquery.bxslider.min.js"></script>

<!--bootstrap chart highcahr js-->
<script src="<?php echo base_url(); ?>assets/highcharts/js/highcharts.js"></script>
<script src="<?php echo base_url(); ?>assets/highcharts/js/modules/exporting.js"></script>
    
<script type="text/javascript">
$(document).ready(function() {
    // Generate a simple captcha
    function randomNumber(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
    };
    $('#captchaOperation').html([randomNumber(1, 100), '+', randomNumber(1, 200), '='].join(' '));

    $('#defaultForm').bootstrapValidator({
//        live: 'disabled',
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-oka',
            invalid: 'glyphicon glyphicon-removae',
            validating: 'glyphicon glyphicon-refaresh'
        },
        fields: {
          
            username: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'username tidak boleh Kosong'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'username terdiri 6 sampai 30 karakter'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_\.]+$/,
                        message: 'The username can only consist of alphabetical, number, dot and underscore'
                    },
                   
                    different: {
                        field: 'password,confirmPassword',
                        message: 'Username tidak boleh sama dengan password'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'Tidak Boleh Kosong'
                    },
                    emailAddress: {
                        message: 'Email Harus Di isi .. !'
                    }
                }
            },
         
            password: {
                validators: {
                    notEmpty: {
                        message: 'Password Tidak Boleh Kosong'
                    },
                    identical: {
                        field: 'confirmPassword',
                        message: 'Password Tidak Sama'
                    },
                    different: {
                        field: 'username',
                        message: 'Password tidak boleh sama dengan email'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'paswwrod minimum terdiri dari 6 karakter sampai 30 karakter'
                    },
                }
            },
            confirmPassword: {
                validators: {
                    notEmpty: {
                        message: 'Tidak Boleh Kosong'
                    },
                    identical: {
                        field: 'password',
                        message: 'Tidak Sama Dengan Password Di atas'
                    },
                    different: {
                        field: 'username',
                        message: 'Tidak boleh sama dengan email'
                    }
                }
            },
            tgllahir: {
                validators: {
                    notEmpty: {
                        message: 'Tidak Boleh Kosong'
                    },
                    date: {
                        format: 'DD/MM/YYYY',
                        message: 'Data Tanggal Lahir Tidak Ditemukan'
                    }
                }
            },
            jeniskelamin: {
                validators: {
                    notEmpty: {
                        message: 'Jenis Kelamin Belum Dipilih'
                    }
                }
            },

             tempatlahir: {
                validators: {
                    notEmpty: {
                        message: 'Tidak Boleh Kosong'
                    }
                }
            },

             noktp: {
                validators: {
                    notEmpty: {
                        message: 'Tidak Boleh Kosong'
                    },
                    integer: {
                            message: 'Silahkan Masukkan No Ktp Yang Benar',
                     
                        }
                }
            },

             nama: {
                validators: {
                    notEmpty: {
                        message: 'Tidak Boleh Kosong'
                    }
                }
            },

             alamat: {
                validators: {
                    notEmpty: {
                        message: 'Tidak Boleh Kosong'
                    }
                }
            },

             rt: {
                validators: {
                    notEmpty: {
                        message: 'Tidak Boleh Kosong'
                    },
                     integer: {
                            message: 'Silahkan Masukkan RT Yang Benar',
                     
                        }
                }
            },

              rw: {
                validators: {
                    notEmpty: {
                        message: 'Tidak Boleh Kosong'
                    },
                     integer: {
                            message: 'Silahkan Masukkan RW Yang Benar',
                     
                        }
                }
            },

              kelurahan: {
                validators: {
                    notEmpty: {
                        message: 'Tidak Boleh Kosong'
                    }
                }
            },


              kecamatan: {
                validators: {
                    notEmpty: {
                        message: 'Tidak Boleh Kosong'
                    }
                }
            },

              kota: {
                validators: {
                    notEmpty: {
                        message: 'Tidak Boleh Kosong'
                    }
                }
            },

              agama: {
                validators: {
                    notEmpty: {
                        message: 'Tidak Boleh Kosong'
                    }
                }
            },

             pekerjaan: {
                validators: {
                    notEmpty: {
                        message: 'Tidak Boleh Kosong'
                    }
                }
            },

             status: {
                validators: {
                    notEmpty: {
                        message: 'Tidak Boleh Kosong'
                    }
                }
            },

            nohp: {
                validators: {
                    
                     notEmpty: {
                            message: 'Silahkan Masukkan No Hp Yang Benar',
                     
                        },
                      digits: true,
                              minlength:11,
                              maxlength:12
                }
            },



            'languages[]': {
                validators: {
                    notEmpty: {
                        message: 'Please specify at least one language you can speak'
                    }
                }
            },
            'programs[]': {
                validators: {
                    choice: {
                        min: 2,
                        max: 4,
                        message: 'Please choose 2 - 4 programming languages you are good at'
                    }
                }
            },
            captcha: {
                validators: {
                    callback: {
                        message: 'Wrong answer',
                        callback: function(value, validator) {
                            var items = $('#captchaOperation').html().split(' '), sum = parseInt(items[0]) + parseInt(items[2]);
                            return value == sum;
                        }
                    }
                }
            }
        }
    });

    // Validate the form manually
    $('#validateBtn').click(function() {
        $('#defaultForm').bootstrapValidator('validate');
    });

    $('#resetBtn').click(function() {
        $('#defaultForm').data('bootstrapValidator').resetForm(true);
    });
});
</script>


<script type="text/javascript">
/* -- Parallax Effect Settings -- */
$(document).ready(function() {
  "use strict";
    $('#nav').localScroll({
        target:'#content'
    });   
    
    //.parallax(xPosition, speedFactor, outerHeight) options:
    //xPosition - Horizontal position of the element
    //inertia - speed to move relative to vertical scroll. Example: 0.1 is one tenth the speed of scrolling, 2 is twice the speed of scrolling
    //outerHeight (true/false) - Whether or not jQuery should use it's outerHeight option to determine when a section is in the viewport
    $('#intro').parallax("50%", 0.2);
    $('#masuk').parallax("50%", 0.2);
    $('#alur').parallax("50%", 0.5);
    $('#syarat').parallax("50%", 0.2);
    $('#daftar').parallax("50%", 0.5);
    $('#plans').parallax("50%", 0.2);
    $('#contact').parallax("50%", 0.5);
});


/* -- Scrolling -- */
$('#navbar').scrollspy();


/* -- Testimonials -- */
$('.testimonials-slider').bxSlider({
    slideWidth: 800,
    minSlides: 1,
    maxSlides: 1,
    slideMargin: 32,
    auto: true,
    autoControls: true
    });

    
/* -- Elements Animation on Scroll -- */
$(window).scroll(function () {
   "use strict";
    var topOfWindow = $(window).scrollTop();

    function _checkOffset(className) {
        return function () {
            var $this = $(this),
                imagePos = $this.offset().top;

            $this.toggleClass(className, (imagePos < topOfWindow + 900));
        };
    }

    $('.white-iphone').each(_checkOffset('animated fadeIn'));
    $('.arrow-fast').each(_checkOffset('animated bounceInLeft'));
    $('.fast').each(_checkOffset('animated bounceInLeft'));
    $('.arrow-friendly').each(_checkOffset('animated bounceInLeft'));
    $('.friendly').each(_checkOffset('animated bounceInLeft'));
    $('.arrow-simple').each(_checkOffset('animated bounceInLeft'));
    $('.simple').each(_checkOffset('animated bounceInLeft'));
    $('.arrow-intuitive').each(_checkOffset('animated bounceInRight'));
    $('.intuitive').each(_checkOffset('animated bounceInRight'));
    $('.arrow-secure').each(_checkOffset('animated bounceInRight'));
    $('.secure').each(_checkOffset('animated bounceInRight'));
    $('.arrow-stable').each(_checkOffset('animated bounceInRight'));
    $('.stable').each(_checkOffset('animated bounceInRight'));
    $('.screen1').each(_checkOffset('animated bounceInLeft'));
    $('.screen2').each(_checkOffset('animated bounceInLeft'));
    $('.screen3').each(_checkOffset('animated bounceInLeft'));
    $('.fa-icon-wrap').each(_checkOffset('animated fadeIn'));
    $('.text-features').each(_checkOffset('animated fadeIn'));
    $('.view').each(_checkOffset('animated fadeIn'));
    $('.testimonials-slider').each(_checkOffset('animated fadeIn'));
    $('.pricing_table').each(_checkOffset('animated bounceIn'));
    $('.contact-form').each(_checkOffset('animated fadeInLeft'));
    $('.contact-map').each(_checkOffset('animated fadeInRight'));
});

</script>



</body>
</html>