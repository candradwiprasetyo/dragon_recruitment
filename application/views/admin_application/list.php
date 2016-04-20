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
                                                <th>Position</th>
                                                <th>Email</th>
                                                <th>Phone Number</th>
                                                <th>Config</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php 
                                           $no = 1;
                                           foreach($list as $row): ?>
                                            <tr>
                                                <td><?= $no?></td>
                                                <td><?= $row['basic_info_first_name']." ".$row['basic_info_last_name'] ?></td>
                                                <td><?= $row['position_name']?></td>
                                                <td><?= $row['basic_info_email']?></td>
                                                <td><?= $row['basic_info_phone_number']?></td>
                                                <td style="text-align:center;">

                                                    <a href="<?= site_url() ?>admin_application/form/<?= $row['basic_info_id']?>" class="btn btn-default" >Process</a>
                                                   
                                                </td> 
                                            </tr>
                                           <?php 
                                           $no++;
                                           endforeach; 
                                           ?>
                                            

                                           
                                          
                                        </tbody>
                                          
                                    </table>

                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>

                </section><!-- /.content -->