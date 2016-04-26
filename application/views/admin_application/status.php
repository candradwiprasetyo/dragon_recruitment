<!--<div class="box box-info">
                                <div class="box-header">
                                    <h3 class="box-title">Status and Action</h3>
                                     <div class="box-tools pull-right">
                                        <button class="btn btn-default btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                       
                                    </div>
                                </div>
                                
                                    <div class="box-body no-padding">
                                    <table class="table">
                                        <tbody>
                                       

                                        <?php
                                        foreach ($list_history as $row_history):
                                           
                                        ?>
                                        <tr>
                                            
                                            <td><?= $this->access->format_date($row_history['application_history_date']) ?></td>
                                            <td><?= $row_history['status_name'] ?></td>
                                        </tr>
                                        <?php
                                        endforeach;
                                        ?>

                                      
                                    </tbody>
									<tfoot>
                                            <tr>
                                                <td colspan="3">
                                                <a href="" class="btn btn-primary " >Sent Test 1</a>
                                                <a href="" class="btn btn-primary " >Rejected because the document to incomplete</a>
                                                </td>
                                               

                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                
                            </div>
                            -->
 <div class="box" style="background: #F9FAFC">
                                <div class="box-header">
                                    <h3 class="box-title">Status and action</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-default btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                       
                                    </div>
                                </div><!-- /.box-header -->
                                <div class="box-body" style="padding: 20px;">
                                    <div class="row">                        
                                        <div class="col-md-12">
                                            <!-- The time line -->
                                            <ul class="timeline">
                                                
                                                <!-- /.timeline-label -->
                                                <!-- timeline item -->
                                                <?php
                                                $no = 1;
                                                foreach ($list_history as $row_history):
                                                ?>
                                                <li>
                                                    <i class="fa bg-aqua fa-check"></i>
                                                    <div class="timeline-item">
                                                        <span class="time"><?= $this->access->format_date($row_history['application_history_date']) ?></span>
                                                        <div class="timeline-header no-border"><?= $row_history['status_name'] ?></div>

                                                        <?php
                                                        if($row_history['status_id']==8){
                                                            if($data['basic_info_test_status']==1){
                                                        ?>
                                                        <div class="timeline-body">

                                                                Applicant had to fill a psychological test at <?= $this->access->format_date($data['basic_info_test_date']) ?>.
                                                                <br>
                                                                Result : <br>

                                                                A. <?= number_format($data['option_a'],2)." %"; ?><br>
                                                                B. <?= number_format($data['option_b'],2)." %"; ?>
                                                        </div>
                                                        <div class="timeline-footer">
                                                          <a target="_blank" class="btn btn-primary btn-xs" href="<?= site_url() ?>psychological_test/view/<?= $data['basic_info_id'] ?>">View test</a>
                                                        </div>
                                                        <?php
                                                        }
                                                        }
                                                        ?>
                                                       
                                                    </div>
                                                </li>
                                                <?php
                                                $no++;
                                                endforeach;
                                                ?>
                                               
                                               
                                            </ul>
                                        </div><!-- /.col -->

                                    </div>

               

                    
                    </div>
                     <div class="box-footer" style="background: #fff; ">
                        <div class="row">
                              
                            <?php
                            if($data['basic_info_status_id']==1){
                            ?>
                                    <a href="<?= $data_head['sent_test1']?>" class="btn btn-primary" >Sent Test 1</a>
                                    <div class="btn-group">
                                            <button type="button" class="btn btn-danger">Rejected</button>
                                            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
                                                <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="<?= $data_head['rejected1']?>">Incomplete documents</a></li>
                                                <li><a href="<?= $data_head['rejected2']?>">Does not fit the criteria</a></li>
                                            </ul>
                                        </div>
                                         <a href="<?= $data_head['save_draft']?>" class="btn btn-success  " >Save in draft</a>
                            <?php
                            } else if($data['basic_info_status_id']==4){
                            ?>
                                <a href="<?= $data_head['sent_test1']?>" class="btn btn-primary" >Sent Test 1</a>
                                <a href="<?= $data_head['rejected2']?>" class="btn btn-danger" >Rejected</a>
                               
                            <?php
                            } else if($data['basic_info_status_id']==5){
                            ?>
                                <a href="<?= $data_head['sent_test2']?>" class="btn btn-primary" >Sent Test 2</a>
                                 <a href="<?= $data_head['sent_psikologi']?>" class="btn btn-primary" >Sent Psychological Test</a>
                                 <a href="<?= $data_head['rejected2']?>" class="btn btn-danger" >Rejected</a>
                            <?php
                            } else if($data['basic_info_status_id']==6){

                            ?>
                                <a href="<?= $data_head['sent_test3']?>" class="btn btn-primary" >Sent Test 3</a>
                                <a href="<?= $data_head['sent_psikologi']?>" class="btn btn-primary" >Sent Psychological Test</a>
                                <a href="<?= $data_head['rejected2']?>" class="btn btn-danger" >Rejected</a>
                                <?php
                            }else if($data['basic_info_status_id']==7){

                            ?>
                                <a href="<?= $data_head['rejected2']?>" class="btn btn-danger" >Rejected</a>
                                <a href="<?= $data_head['sent_psikologi']?>" class="btn btn-primary" >Sent Psychological Test</a>
                                <a href="<?= $data_head['rejected2']?>" class="btn btn-danger" >Rejected</a>
                                <?php
                            } else if($data['basic_info_status_id']==8){

                            ?>
                                <a href="<?= $data_head['interview']?>" class="btn btn-primary" >Interview</a>
                                <a href="<?= $data_head['rejected2']?>" class="btn btn-danger" >Rejected</a>
                            <?php
                            } else if($data['basic_info_status_id']==9){

                            ?>
                            <a href="<?= $data_head['accepted']?>" class="btn btn-primary" >Accept</a>
                            <a href="<?= $data_head['rejected2']?>" class="btn btn-danger" >Rejected</a>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
                    