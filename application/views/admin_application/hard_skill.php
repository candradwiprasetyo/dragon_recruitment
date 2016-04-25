<div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Hard Skill</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-default btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                       
                                    </div>
                                </div><!-- /.box-header -->
                                <div class="box-body no-padding table-responsive">
                                <!--
                                     <table id="" class="table">
                                        <tbody>
                                        

                                        <?php
                                        foreach ($list_hard_skill as $row_hard_skill):
                                           
                                        ?>
                                        <tr>
                                            
                                            <td style="width: 40%"><?= $row_hard_skill['hard_skill_type_name'] ?></td>
                                            <td>
                                            <?php
                                            $value =  $row_hard_skill['hard_skill_value'] * 10;
                                            ?>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-danger" style="width: <?= $value ?>%"></div>
                                            </div>
                                            </td>
                                            <td style="width: 10%"><?= $row_hard_skill['hard_skill_value'] ?></td>
                                        </tr>
                                        <?php
                                        endforeach;
                                        ?>
                                      
                                    </tbody></table>
                                -->


                                    <table id="example1" class="table table-bordered">
                                        <thead>
                                            <tr>
                                               
                                                <th width="40%">Skill</th>
                                                <th>Value</th>
                                                <th width="10%"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php 
                                           $no = 1;
                                           foreach ($list_hard_skill as $row_hard_skill):
                                            ?>
                                            <tr>
                                               
                                                <td><?= $row_hard_skill['hard_skill_type_name'] ?></td>
                                                <td>
                                            <?php
                                            if($row_hard_skill['hard_skill_value'] >= 0 && $row_hard_skill['hard_skill_value']<=3){
                                                $color = "red";
                                            }else if($row_hard_skill['hard_skill_value'] >= 4 && $row_hard_skill['hard_skill_value']<=7){
                                                $color = "yellow";
                                            }else{
                                                $color = "green";
                                            }
                                            $value =  $row_hard_skill['hard_skill_value'] * 10;
                                            ?>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-<?= $color ?>" style="width: <?= $value ?>%"></div>
                                            </div>
                                            </td>
                                                <td><span class="badge bg-<?= $color ?>"><?= $row_hard_skill['hard_skill_value']?></span></td>
                                               
                                            </tr>
                                           <?php 
                                           $no++;
                                           endforeach; 
                                           ?>
                                            

                                           
                                          
                                        </tbody>
                                          
                                    </table>
                                </div><!-- /.box-body -->
                            </div>

                          