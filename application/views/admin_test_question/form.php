<!-- Content Header (Page header) -->
        
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
                                    
                      
                                       
                                        <div class="col-md-12">
                                      
                                      
                                         <div class="form-group">
                                         <label>Question</label>
                                            <input required type="text" name="i_name" class="form-control" placeholder="" value="<?= @$data['question_name'] ?>" title="Fill question name"/>
                                			</div>

                                      <div class="form-group">
                                         <label>Description</label>
                                            <textarea name="i_desc" rows="5" class="form-control"><?= @$data['question_description'] ?></textarea>
                                      </div>

                                      <?php
                                      for($i=1; $i<=2; $i++){
                                      ?>
                                      <div class="form-group">
                                         <label>Option <?= $i ?></label>
                                            <input required type="text" name="i_option<?= $i ?>" class="form-control" placeholder="" value="<?= @$data['option'.$i] ?>" title="Fill option <?= $i ?>"/>
                                            <input type="hidden" name="i_option_hidden<?= $i ?>" class="form-control" placeholder="" value="<?= @$data['option_hidden'.$i] ?>"/>
                                      </div>

                                      <?php
                                      }
                                      ?>
                                        
                                      
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