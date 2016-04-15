<div class="menu_mobile">

<div class="col-xs-3">
    <div class="row">
    	<a href="<?=site_url('showcase')?>">
        <div class="menu">
            <i class="fa fa-folder-open fa-2x"></i>
            <div class="menu_caption">Showcase</div>
        </div>
        </a>
    </div>
</div>
<div class="col-xs-3">
    <div class="row">
    <a href="<?=site_url('creative')?>">
        <div class="menu">
            <i class="fa fa-users fa-2x"></i>
            <div class="menu_caption">Creatives</div>
        </div>
    </a>
    </div>
</div>
<div class="col-xs-3">
    <div class="row">
    <a href="<?=site_url('news')?>">
        <div class="menu">
            <i class="fa fa-newspaper-o fa-2x"></i>
            <div class="menu_caption">News</div>
        </div>
        </a>
    </div>
</div>
<div class="col-xs-3">
    <div class="row">
    <a href="<?=site_url('workshop')?>">
        <div class="menu">
            <i class="fa fa-calendar-plus-o fa-2x"></i>
            <div class="menu_caption">Events</div>
        </div>
        </a>
    </div>
</div>
</div>


</div>

<div class="col-md-12" style="padding:0px; ">
<div class="navbar-footer_frame">
<div class="col-md-9" style="padding:0px; ">
<div class="navbar navbar-default navbar-footer" role="navigation" style="height:60px !important; min-height:60px !important; background:#2a5da8 !important; font-family:'Roboto-Regular'">
      
        <div class="navbar-header">
          <a class="navbar-brand footer-copyright" href="<?=site_url('')?>" style="background:none;">COPYRIGHT 2015 8BULBS. ALL RIGHTS RESERVED</a>
        </div>
        <div class="navbar-collapse collapse " style="float:right">
         
         <ul class="nav navbar-nav navbar-footer">
         <?php
         $q_fm = mysql_query("select * from pages");
		 while($r_fm = mysql_fetch_array($q_fm)){
			 if($r_fm['page_id']==3){ ?>
              <li  style="padding-top:15px;"><a href="about_us" class="footer-menu" style="height:45px !important;">About Us</a></li>
             <?php
			 }else{
		 ?>
            <li  style="padding-top:15px;"><a href="<?=site_url("footer_menu/?id=".$r_fm['page_id'])?>" class="footer-menu" style="height:45px !important;"><?= $r_fm['page_name']?></a></li>
          
            <?php
			 }
		 	}
			?>
          </ul>
          
        </div>
     
    </div>
</div>

<div class="col-md-3" style="padding:0px;">
	<div class="navbar navbar-default navbar-icon-footer" role="navigation" style="background:#477cbd; height:60px !important; min-height:60px !important; ">
     
         <a href="#" ><div class="footer-icon"><i class="fa fa-facebook"></i></div></a>
         <a href="#" ><div class="footer-icon"><i class="fa fa-twitter"></i></div></a>
         <a href="#" ><div class="footer-icon"><i class="fa fa-instagram"></i></div></a>
     
    </div>
</div>
</div>
</div>



<div class="md-overlay"></div>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/docs.min.js') ?>"></script>
    <!-- select -->
	  <script type="text/javascript" src="<?= base_url('assets/js/select/bootstrap-select.js') ?>"></script>
   
    
    <!-- slider -->
    
    <!-- FlexSlider -->
	  <script defer src="<?= base_url('assets/js/slider/jquery.flexslider.js') ?>"></script>
    
    <!-- modal -->
    <script src="<?= base_url('assets/js/modal/classie.js') ?>"></script>
    <script src="<?= base_url('assets/js/modal/modalEffects.js') ?>"></script>
    
   
        

    <script type="text/javascript">



        $(function(){
          SyntaxHighlighter.all();
		  
		  
		  
		  
        });
        $(window).load(function(){

        
          $('.flexslider').flexslider({
            animation: "slider",
            start: function(slider){
              $('body').removeClass('loading');
            }
          });
        });
		
		$('.btn-toggle').click(function() {
			$(this).find('.btn').toggleClass('active');  
			
			if ($(this).find('.btn-primary').size()>0) {
				$(this).find('.btn').toggleClass('btn-primary');
			}
			if ($(this).find('.btn-danger').size()>0) {
				$(this).find('.btn').toggleClass('btn-danger');
			}
			if ($(this).find('.btn-success').size()>0) {
				$(this).find('.btn').toggleClass('btn-success');
			}
			if ($(this).find('.btn-info').size()>0) {
				$(this).find('.btn').toggleClass('btn-info');
			}
			
			$(this).find('.btn').toggleClass('btn-default');
			   
		});

		
    window.setTimeout(function() {
        $(".alert-message").fadeTo(300, 0).slideUp(300, function(){
        //$(".alert-message").fadeTo(300, function(){
          
            $(this).remove(); 
        });
    }, 3000);
	
	$(window).on("scroll touchmove", function () {
        if (document.documentElement.clientWidth > 768) {
		$('#navbar1').toggleClass('tiny_header', $(document).scrollTop() > 0);
		$('#navbar_brand_resize').toggleClass('tiny_navbar-brand', $(document).scrollTop() > 0);
		$('.navbar-nav > li > a').toggleClass('tiny_li', $(document).scrollTop() > 0);
		$('#main_content').toggleClass('tiny_main_content', $(document).scrollTop() > 0);
		
		}
	});
	
	// button follow
	
      </script>
      
  </body>
</html>
