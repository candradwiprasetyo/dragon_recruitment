<div class="gallery_page">
<div class="container">
    <div class="row" style="margin-top:10px;">
    	<div class="gallery_page_title">Featured Works</div>
        <div class="col-md-6">
        	
            	<div class="row">
                    <div class="col-md-12" style="padding-left:0px; padding-right:0px;">
                        	<div class="box-showcase_gallery">
                                <div class="box-showcaseInner">
                                <?php
                                $img_class1 = $this->access->get_valid_img(base_url()."assets/images/feature/".$no1);
								?>
                                    <a href="<?=site_url($id1)?>"><img src="<?php echo base_url('assets/images/feature/'.$no1); ?>" class="<?= $img_class1 ?>"  /></a>
                                </div>
                    		</div>
                    </div>
                   
                </div>
           
            	<div class="row">
                    <div class="col-md-6" style="padding-left:0px; padding-right:0px;">
                        	<div class="box-showcase_gallery">
                                <div class="box-showcaseInner">
                                	<?php
									$img_class2 = $this->access->get_valid_img(base_url()."assets/images/feature/".$no2);
									?>
                                     <a href="<?=site_url($id2)?>"><img src="<?php echo base_url('assets/images/feature/'.$no2); ?>"  class="<?= $img_class2 ?>" /></a>
                                </div>
                            </div>
                    </div>
                    <div class="col-md-6" style="padding-left:0px; padding-right:0px;">
                        	<div class="box-showcase_gallery">
                                <div class="box-showcaseInner">
                               	 	<?php
									$img_class3 = $this->access->get_valid_img(base_url()."assets/images/feature/".$no3);
									?>
                                    <a href="<?=site_url($id3)?>"><img src="<?php echo base_url('assets/images/feature/'.$no3); ?>" class="<?= $img_class3?>"  /></a>
                                </div>
                            </div>
                    </div>
                </div>
                
        </div>
        <div class="col-md-6">
        	
           	 	
           
            	<div class="row">
                    <div class="col-md-6" style="padding-left:0px; padding-right:0px;">
                        	<div class="box-showcase_gallery">
                                <div class="box-showcaseInner">
                                	<?php
									$img_class4 = $this->access->get_valid_img(base_url()."assets/images/feature/".$no4);
									?>
                                     <a href="<?=site_url($id4)?>"><img src="<?php echo base_url('assets/images/feature/'.$no4); ?>"   class="<?= $img_class4?>"/></a>
                                </div>
                            </div>
                    </div>
                    <div class="col-md-6" style="padding-left:0px; padding-right:0px;">
                        	<div class="box-showcase_gallery">
                                <div class="box-showcaseInner">
                                	<?php
									$img_class5 = $this->access->get_valid_img(base_url()."assets/images/feature/".$no5);
									?>
                                     <a href="<?=site_url($id5)?>"><img src="<?php echo base_url('assets/images/feature/'.$no5); ?>"   class="<?= $img_class5?>"/></a>
                                </div>
                            </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12" style="padding-left:0px; padding-right:0px;">
                        	<div class="box-showcase_gallery">
                                <div class="box-showcaseInner">
                                	<?php
									$img_class6 = $this->access->get_valid_img(base_url()."assets/images/feature/".$no6);
									?>
                                    <a href="<?=site_url($id6)?>"><img src="<?php echo base_url('assets/images/feature/'.$no6); ?>" class="<?= $img_class6?>"  /></a>
                                </div>
                            </div>
                    </div>
                   
                </div>
            
        </div>

       <div class="col-md-4 col-md-offset-4">
                                                        <div class="form-group">
                                                            <a href="<?= site_url('showcase'); ?>" class="btn button_signup">VIEW MORE IN SHOWCASE</a>
                                                        </div>
                                                    </div>
    </div>
</div>
</div>
<br />