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
                                         <label>Name</label>
                                    <input required type="text" name="i_name" class="form-control" placeholder="" value="<?= @$data['position_name'] ?>" title="Fill position name"/>
                                			</div>

                                             <div class="form-group">
                                         <label>Scope</label>
                                   <select id="basic" name="i_scope_id" size="1" class="selectpicker show-tick form-control" data-live-search="true">
                                        <?php foreach($list_scope as $row_scope): ?>
                                                                                        <option value="<?= $row_scope['scope_id'] ?>" <?php
                                                                                        if(@$data['position_scope_id'] == $row_scope['scope_id']){ echo "selected"; }
                                                                                        ?>><?= $row_scope['scope_name'] ?></option>
                                                                                      <?php
                                                                                      endforeach;
                                                                                      ?>
                                                                                        </select>
                                            </div>

                                         <div class="form-group">
                                            <label>Description</label>
                                           <textarea id="i_desc" name="i_desc" rows="10" cols="80" class="form-control"><?php
                                            echo @$data['position_description']
                                            ?></textarea>
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