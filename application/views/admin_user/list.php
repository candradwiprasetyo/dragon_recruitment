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
                                                <th>Photo</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Config</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php 
										   $no = 1;
										   foreach($list as $row): ?>
                                            <tr>
                                                <td><?= $no?></td>
                                                <td><img src="<?= base_url() ?>assets/admin/img/user/<?= $row['user_img']?>" width="50"></td>
                                                <td><?= $row['user_name']?></td>
                                                <td><?= $row['user_email']?></td>
                                                <td style="text-align:center;">

                                                    <a href="<?= site_url() ?>admin_user/form/<?= $row['user_id']?>" class="btn btn-default" ><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" onclick="confirm_delete(<?= $row['user_id']; ?>, '<?= site_url().'admin_user/delete/'; ?>')" class="btn btn-default" ><i class="fa fa-trash-o"></i></a>

                                                </td> 
                                            </tr>
                                           <?php 
										   $no++;
										   endforeach; 
										   ?>
                                            

                                           
                                          
                                        </tbody>
                                          <tfoot>
                                            <tr>
                                                <td colspan="5"><a href="<?= $data_head['add_button'] ?>" class="btn btn-primary " >Add</a></td>
                                               
                                            </tr>
                                        </tfoot>
                                    </table>

                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>

                </section><!-- /.content -->