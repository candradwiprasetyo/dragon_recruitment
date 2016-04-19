<script type="text/javascript">
<?php
//foreach($list as $row_js): 
?>


function upload_file(id, value, type){
    //alert(id+"_"+value);
    window.location.href = "<?= site_url() ?>admin_position/upload_file/"+id+"/"+value+"/"+type;
}
<?php
//endforeach;
?>

</script>

<?php
if(isset($_GET['did']) && $_GET['did']==1){

    $this->access->get_message(1);

}else if(isset($_GET['did']) && $_GET['did']==2){

    $this->access->get_message(2);

}else if(isset($_GET['did']) && $_GET['did']==3){

    $this->access->get_message(3);

}else if(isset($_GET['err']) && $_GET['err']==4){

    $this->access->get_message(4);
    
}
?>        
                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            
                              <div class="title_page"> <?= $data_head['title'] ?></div>
                            
                            <div class="box">
                             
                                <div class="box-body2 table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th width="5%">No</th>
                                                <th>Name</th>
                                                <th>Scope</th>
                                                <!--<th>Description</th>-->
                                                <th>Test 1</th>
                                                <th>Test 2</th>
                                                <th>Test 3</th>
                                                <th>Config</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php 
										   $no = 1;
										   foreach($list as $row): ?>
                                            <tr>
                                                <td><?= $no?></td>
                                               
                                                <td><?= $row['position_name']?></td>
                                                <td><?= $row['scope_name']?></td>
                                                <!--<td><?= $row['position_description']?></td>-->
                                                <td>
                                                

                                                <form action="<?= site_url() ?>admin_position/upload_file/1/<?= $row['position_id'] ?>" enctype="multipart/form-data" method="POST">
                                                
                                                <?php
                                                if($row['position_file1']){
                                                    $upload_name = "Change";
                                                ?>
                                                 <a download href="<?= site_url() ?>assets/admin/file/<?= $row['position_file1'] ?>" class="btn btn-success" ><i class="fa fa-download"></i></a>

                                                <?php
                                                }else{
                                                    $upload_name = "Upload";
                                                }
                                                ?>

                                                 <div class="fileUpload btn btn-primary">
                                                        <span><?= $upload_name ?></span>
                                                        <input id="i_uploadBtn" name="i_uploadBtn" type="file" class="upload" onchange="form.submit()"/>
                                                    </div>
                                                   
                                                </form>

                                                </td>
                                                <td>
                                                    
                                                    <form action="<?= site_url() ?>admin_position/upload_file/2/<?= $row['position_id'] ?>" enctype="multipart/form-data" method="POST">
                                                
                                                    <?php
                                                    if($row['position_file2']){
                                                        $upload_name = "Change";
                                                    ?>
                                                      <a download href="<?= site_url() ?>assets/admin/file/<?= $row['position_file2'] ?>" class="btn btn-success" ><i class="fa fa-download"></i></a>

                                                    <?php
                                                    }else{
                                                        $upload_name = "Upload";
                                                    }
                                                    ?>

                                                    <div class="fileUpload btn btn-primary">
                                                        <span><?= $upload_name ?></span>
                                                        <input id="i_uploadBtn" name="i_uploadBtn" type="file" class="upload" onchange="form.submit()"/>
                                                    </div>
                                                   
                                                </form>

                                                </td>
                                                <td>
                                                    <form action="<?= site_url() ?>admin_position/upload_file/3/<?= $row['position_id'] ?>" enctype="multipart/form-data" method="POST">
                                                
                                                    <?php
                                                    if($row['position_file3']){
                                                        $upload_name = "Change";
                                                    ?>
                                                 <a download href="<?= site_url() ?>assets/admin/file/<?= $row['position_file3'] ?>" class="btn btn-success" ><i class="fa fa-download"></i></a>

                                                    <?php
                                                    }else{
                                                        $upload_name = "Upload";
                                                    }
                                                    ?>

                                                    <div class="fileUpload btn btn-primary">
                                                        <span><?= $upload_name ?></span>
                                                        <input id="i_uploadBtn" name="i_uploadBtn" type="file" class="upload" onchange="form.submit()"/>
                                                    </div>
                                                   
                                                </form>

                                                </td>
                                                <td style="text-align:center;">

                                                    <a href="<?= site_url() ?>admin_position/form/<?= $row['position_id']?>" class="btn btn-default" ><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" onclick="confirm_delete(<?= $row['position_id']; ?>, '<?= site_url().'admin_position/delete/'; ?>')" class="btn btn-default" ><i class="fa fa-trash-o"></i></a>

                                                </td> 
                                            </tr>
                                           <?php 
										   $no++;
										   endforeach; 
										   ?>
                                            

                                           
                                          
                                        </tbody>
                                          <tfoot>
                                            <tr>
                                                <td colspan="7"><a href="<?= $data_head['add_button'] ?>" class="btn btn-primary " >Add</a></td>
                                               
                                            </tr>
                                        </tfoot>
                                    </table>

                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>

                </section><!-- /.content -->