<!-- Content Header (Page header) -->
<?php
if(isset($_GET['did']) && $_GET['did']==2){

    $this->access->get_message(2);

}
?>           
                <!-- Main content -->
                <section class="content">
                    <div class="row">
                      
                        <!-- right column -->
                        <div class="col-md-12">
                            <!-- general form elements disabled -->

                          
                            <div class="title_page"> <?= $data_head['title'] ?></div>
                            

                             <form  class="cmxform" id="createForm" action="<?= $data_head['action']?>" method="post" enctype="multipart/form-data" role="form">

                            <div class="box box-cokelat">
                                
                               
                                <div class="box-body">
                                    
                      
                                       
                                        <div class="col-md-9">
                                      
                                      
                                        <div class="form-group">
                                          <label>Name</label>
                                          <input required type="text" name="i_name" class="form-control" placeholder="" value="<?= @$data['user_name'] ?>" title="Fill user name"/>
                                        </div>
                                        
                                        <div class="form-group">
                                          <label>Email</label>
                                          <input required type="text" name="i_email" class="form-control" placeholder="" value="<?= @$data['user_email'] ?>" title="Fill user email"/>
                                        </div>

                                        <div class="form-group">
                                          <label>Password</label>
                                          <input type="password" name="i_password" class="form-control" placeholder="" value="" title="Fill user password"/>
                                        </div>
                                      
                                        </div>
                                      
                                        <div class="col-md-3">
                                      
                                      
                                        <div class="form-group">
                                          <label>Photo</label>
                                          <img src="<?= base_url() ?>assets/admin/img/user/<?= @$data['user_img'] ?>" width="100%">
                                          <input type="file" name="i_img"></input>
                                        </div>
                                        
                                       
                                      
                                        </div>
                                        
 										
                                    
                                      
                                        
                                        <div style="clear:both;"></div>
                                     
                                </div><!-- /.box-body -->
                                
                                  <div class="box-footer">
                                <input class="btn btn-primary" type="submit" value="Save"/>
                                <a href="<?= $data_head['close_button']?>" class="btn btn-primary" >Close</a>
                             
                             </div>
                            
                            </div><!-- /.box -->
                       </form>
                        </div><!--/.col (right) -->
                    </div>   <!-- /.row -->
               
                </section><!-- /.content -->