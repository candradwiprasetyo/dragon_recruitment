<div class="col-md-9" style="padding:0px;">
<div class="row" style="margin:0px; padding:0px;">
<form action="<?=site_url('home/search')?>" method="post" enctype="multipart/form-data">
<div class="search_page" id="search_page">

	
      <!-- Main jumbotron for a primary marketing message or call to action -->
     
		
        <div class="col-md-1">
        </div>
        	 <div class="col-md-5">
             	<div class="form-group">
                
             	<div class="search_quote">Find Creatives in Your Area</div>
               
                </div>
             </div>
             
              <div class="col-md-6">
              
             	
                	<div class="row">
                    <div class="col-md-4"> 
                    <div class="form-group">
                	<select name="i_location_id" size="1" class="form-control select_search new_select" required style="-webkit-appearance:none !important;"/>
                                             <option value="">Concentration</option>
                                             <?php
											$q_pc  = mysql_query("select * from profile_categories order by pc_id");
											while($r_pc = mysql_fetch_array($q_pc)){ 
											?>
                                           <option value="<?= $r_pc['pc_id']?>"><?= $r_pc['pc_name'] ?></option>      
                                           <?php
											}
                                           ?> 
                                           </select>  
                                           </div>
               		 </div>
                    
                	<div class="col-md-4"> 
                     <div class="form-group">
                	<select name="i_pc_id" size="1" class="form-control select_search new_select" required style="-webkit-appearance:none !important;"/>
                                             <option value="">Location</option>
                                            <?php
											$q_l  = mysql_query("select * from locations order by location_id");
											while($r_l = mysql_fetch_array($q_l)){ 
											?>
                                           <option value="<?= $r_l['location_id']?>"><?= $r_l['location_name'] ?></option>      
                                           <?php
											}
                                           ?> 
                                           </select>  
                     </div>
                	</div>
                     
                	<div class="col-md-4"> 
                    <div class="form-group">
                	<input class="btn button_search" type="submit" value="SEARCH"/>
                     </div>
                	</div>
                    </div>
             </div>
        
		

   
    
</div>
</form>
</div>
</div>
  
<div class="slider_page">



<div class="row" style="margin-left:0px; margin-right:0px;">
    <div class="col-md-9" style="padding:0px; ">
      
        
        
          <?php /*
    <div id="sliderb_container" style="position: relative; top: 0px; left: 0px; width: 1200px !important; height: 700px !important; overflow: hidden; ">

       

        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 700px;
            overflow: hidden;">
            <div>
               
                <img u=image src="<?= base_url(); ?>assets/images/project2.jpg" />
                <div u="thumb">Verve Coffee Roasters by Manual Creative</div>
            </div>
            <div>
                <img u=image src="<?= base_url(); ?>assets/images/project.jpg" />
                <div u="thumb">Verve Coffee Roasters by Manual Creative</div>
            </div>
            <div>
                <img u=image src="<?= base_url(); ?>assets/images/project3.jpg" />
                <div u="thumb">Verve Coffee Roasters by Manual Creative</div>
            </div>
            <div>
                <img u=image src="<?= base_url(); ?>assets/images/project4.jpg" />
                <div u="thumb">Verve Coffee Roasters by Manual Creative</div>
            </div>
        </div>
        
        <!--#region Thumbnail Navigator Skin Begin -->
        <!-- Help: http://www.jssor.com/development/slider-with-thumbnail-navigator-jquery.html -->
        <!-- thumbnail navigator container -->
        <div u="thumbnavigator" style="position: absolute; bottom: 0px; right: 0px; height:150px; width:1000px;">
            <div style="filter: alpha(opacity=70); opacity:0.7;
                background-color: #477CBD; top: 0px; right: 0px; width: 100%; height: 100%; ">
            </div>
            <!-- Thumbnail Item Skin Begin -->
            <div u="slides">
                <div u="prototype" style="position: absolute; width: 900px; height: 45px; top: 0; left: 0; ">
                    <div u="thumbnailtemplate" style="font-family:'new_title'; position: absolute; width: 100%; height: 100%; top: 0; left: 0; text-transform:capitalize; font-size:34px !important;  color:#fff; line-height: 45px; padding-left:10px;"></div>
                </div>
            </div>
            <!-- Thumbnail Item Skin End -->
        </div>
        <!--#endregion ThumbnailNavigator Skin End -->
        
        <!--#region Bullet Navigator Skin Begin -->
        <!-- Help: http://www.jssor.com/development/slider-with-bullet-navigator-jquery.html -->
       
        <!-- bullet navigator container -->
        <div u="navigator" class="jssorb01" style="bottom: 16px; right: 10px;">
            <!-- bullet navigator item prototype -->
            <div u="prototype"></div>
        </div>
        <!--#endregion Bullet Navigator Skin End -->
        
        <!--#region Arrow Navigator Skin Begin -->
        <!-- Help: http://www.jssor.com/development/slider-with-arrow-navigator-jquery.html -->
      
        <!-- Arrow Left -->
        <span u="arrowleft" class="jssora05l" style="top: 50%; left: 8px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora05r" style="top: 50%; right: 8px;">
        </span>
        <a style="display: none" href="http://www.jssor.com">Bootstrap Slider</a>
        <!-- Trigger -->
       
    </div>
  */
  ?>
    
  
 <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
      <?php
      $no_slider = 0;
	  $q_slider = mysql_query("select * from sliders order by slider_id desc");
	  while($r_slider = mysql_fetch_array($q_slider)){
	  ?>
        <li data-target="#myCarousel" data-slide-to="<?= $no_slider ?>" <?php if($no_slider == 0){ ?> class="active"><?php } ?></li>
        <?php
		$no_slider++;
	  }
		?>
      </ol>
      
      <div class="carousel-inner">
      
      <?php
	  $no_slider2 = 1;
      $q_slider2 = mysql_query("select * from sliders order by slider_id desc");
	  while($r_slider2 = mysql_fetch_array($q_slider2)){
	  ?>
        <div class="item <?php if($no_slider2 == 1){ echo "active"; } ?>">
          <div class="box-showcase_slider">
          <div class="box-showcaseInner_slider">
            <img src="<?= base_url(); ?>assets/images/slider/<?= $r_slider2['slider_img'] ?>" alt="First slide" style="width:100%;">
          </div>
           </div>
          <div class="container">
            <div class="carousel-caption">
              <div class="title">Features</div>
              <p class="desc"><?= $r_slider2['slider_name'] ?></p>
              <div class="read_more"><a href="<?= site_url() ?>/home/slider_view/<?= $r_slider2['slider_id'] ?>" role="button" style="color:#fff;">Read more</a></div>
            </div>
          </div>
        </div>
      <?php
	  $no_slider2++;
	  }
	  ?>
      </div>
      
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->
    
    
    </div>
 <script>
           // jssor_sliderb_starter('sliderb_container');
      
      function sign_up_type(type) {
        
        if(type==2){
          document.getElementById("t_sign_up3").value = "2";
        }else{
          document.getElementById("t_sign_up3").value = "3";
        }
      }
      
      function signup_facebook(link){
        var type = document.getElementById("t_sign_up3").value;
        window.location.href = "<?= site_url(); ?>" + "/login/signup_facebook/" + type;
        
        
      }
	  
	  $(document).ready(function(){  /* when the page has loaded... */
  $('.boxSet').click(function(){  /* ...bind click event to .boxSet elements */
    $('.boxSet').removeClass('hilite'); /* On click, remove any 'hilite' class */
    $(this).addClass('hilite'); /* ...and add 'hilite' class to clicked element */ 
   });
});
      
        </script>
    <div class="col-md-3" style="padding:0px; " >
      
      <div class="col-md-10">
          <div class="login_page">
           
            
             <div class="box box-cokelat">
                                
                                <?php
                                        $logged = $this->session->userdata('logged');
										if(!$logged){
											
										?>
                                <div class="box-body">
                                    
                      
                                       
                                        <div class="col-md-12">
                                        <div class="row" style="padding:0; margin:0">
                                        
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <div class="form-group">
                                                           
                                                           <div class="btn btn-lg button_option_registration boxSet hilite" onclick="sign_up_type(2)">CREATIVES</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-6">
                                                	<div class="row">
                                                    	<div class="form-group">
                                                     
                                                       		<div class="btn btn-lg button_option_registration boxSet" onclick="sign_up_type(3)">REGULAR</div>
                                                         </div>
                                                	</div>
                                                </div>
                                         
                                        </div>
                                         <div class="row" style="padding:0; margin:0">
                                        
                                               
                                                 <form action="<?=site_url('home/signup')?>" method="post" enctype="multipart/form-data">
                                                <div class="form-group">
                                                <input required type="text" name="i_first_name" class="form-control" placeholder="First Name" value="" title=""/> <input id="t_sign_up3" name="t_sign_up3" type="hidden" value="2" style="color:#000"/>
                                                </div>
                                                <div class="form-group">
                                                    <input required type="text" name="i_last_name" class="form-control" placeholder="Last Name" value="" title=""/>
                                                </div>
                                                 <div class="form-group">
                                                    <input required type="email" name="i_email" class="form-control" placeholder="Email Address" value="" title=""/>
                                                </div>
                                                 <div class="form-group">
                                                    <input required type="text" name="i_username" class="form-control" placeholder="Username" value="" title=""/>
                                                </div>
                                                 <div class="form-group">
                                                    <input required type="password" name="i_password" class="form-control" placeholder="Password" value="" title=""/>
                                                </div>
                                                <div class="form-group">
                                                <div class="row">
                                                <div class="col-md-6">
                                                <img src="<?= site_url() ?>home/create_captcha" />
                                                                   <?php //echo $this->recaptcha->render(); ?>
                                                </div>
                                                
                                                <div class="col-md-6">
                                                 <input required type="text" name="i_captcha" class="form-control" placeholder="Captcha" value="" title=""/>
                                                </div>
                                                 
                                                </div>
                                                </div>
                                                
                                                 <div class="form-group">
                                                   
                                                  
                                                      <label>
                                                        <input type="checkbox" name="CheckboxGroup1" value="checkbox" id="CheckboxGroup1_0" checked="checked">
                                                        Subscribe to 8Bulbs Newsletter</label>
                                                      
                                                     
                                                     
                                                 </div>
                                                
                                                 
                                                 <div class="form-group">
                                                    <input class="btn button_signup" type="submit" value="SIGN UP"/>
                                                </div>
                                                 <div class="form-group">
                                                    <a href="#" onclick="signup_facebook('test')" class="btn button_login_facebook"><i class="fa fa-facebook fa-fw"></i>&nbsp;LOG IN WITH FACEBOOK</a>
                                                </div>
                                                <div class="form-group" style="margin-bottom:30px;">
                                                    By Signing Up, you agree to our Terms & Conditions
                                                and that you have read our <a href="<?= site_url() ?>footer_menu/?id=1" style="color:#fff; font-weight:bold;">Privacy Policy</a>.
                                                </div>
                                                
                                              
                                               </form>
                                      </div>
                                      	
                                        </div>
                                        
                    
                                        <div style="clear:both;"></div>
                                        
                                        
                                     
                                </div><!-- /.box-body -->
                                
                                  <?php
										}
									   ?>
                            
                            </div><!-- /.box -->
           
        </div>
        
        </div>
        
        
        
    </div>
</div>
</div>