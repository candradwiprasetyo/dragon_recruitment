
               
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
                                                <th>Images</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Workplace Name</th>
                                                <th>Type</th>
                                                <th>Email</th>
                                                <!--<th>Config</th>-->
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php 
										   $no = 1;
										   foreach($list as $row): ?>
                                            <tr>
                                                <td><?= $no?></td>
                                                <td><img src="<?= base_url(); ?>assets/images/profile/<?= $row['creative_img']?>" width="80" /></td>
                                                <td><?= $row['user_first_name']?></td>
                                                 <td><?= $row['user_last_name']?></td>
                                                  <td><?= $row['creative_wp_name']?></td>
                                                   <td><?= $row['user_type_name']?></td>
                                                <td><?= $row['user_email']?></td>
                                                <!-- <td style="text-align:center;">

                                                     <a href="<?= site_url() ?>/admin_member/form/<?= $row['user_id']?>" class="btn btn-default" ><i class="fa fa-pencil"></i></a>
                                                  <a href="javascript:void(0)" onclick="confirm_delete(<?= $row['user_id']; ?>, '<?= site_url().'/admin_member/delete/'; ?>')" class="btn btn-default" ><i class="fa fa-trash-o"></i></a>

                                                </td> -->
                                            </tr>
                                           <?php 
										   $no++;
										   endforeach; 
										   ?>
                                            

                                           
                                          
                                        </tbody>
                                          <tfoot>
                                            <tr>
                                                <td colspan="4"><a href="<?= $data_head['add_button'] ?>" class="btn btn-success " >Print Member</a></td>
                                               
                                            </tr>
                                        </tfoot>
                                    </table>

                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>

                </section><!-- /.content -->