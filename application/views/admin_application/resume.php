<div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Education</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-default btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                       
                                    </div>
                                </div><!-- /.box-header -->
                                <div class="box-body no-padding">
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <th>Qualification</th>
                                            <th>Major</th>
                                            <th>School Name</th>
                                            <th>Graduate year</th>
                                        </tr>

                                        <?php
                                        foreach ($list_education as $row_education):
                                           
                                        ?>
                                        <tr>
                                            
                                            <td><span class="badge bg-light-blue"><?= $row_education['education_type_name'] ?></span></td>
                                            <td><?= $row_education['education_major'] ?></td>
                                            <td><?= $row_education['education_name'] ?></td>
                                            <td><?= $row_education['education_graduate_year'] ?></td>
                                        </tr>
                                        <?php
                                        endforeach;
                                        ?>
                                      
                                    </tbody></table>
                                </div><!-- /.box-body -->
                            </div>

                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Work Experience</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-default btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                       
                                    </div>
                                </div><!-- /.box-header -->
                                <div class="box-body no-padding">
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <th>From</th>
                                            <th>To</th>
                                            <th>Company</th>
                                            <th>Position</th>
                                            <th>Level Position</th>
                                        </tr>

                                        <?php
                                        foreach ($list_work_experience as $row_work_experience):
                                           
                                        ?>
                                        <tr>
                                            
                                            <td><?= $row_work_experience['work_experience_from'] ?></td>
                                            <td><?= $row_work_experience['work_experience_to'] ?></td>
                                            <td><?= $row_work_experience['work_experience_company'] ?></td>
                                            <td><?= $row_work_experience['work_experience_position'] ?></td>
                                            <td><?= $row_work_experience['position_level_name'] ?></td>
                                        </tr>
                                        <?php
                                        endforeach;
                                        ?>
                                      
                                    </tbody></table>
                                </div><!-- /.box-body -->
                            </div>

                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Tools</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-default btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                       
                                    </div>
                                </div><!-- /.box-header -->
                                <div class="box-body no-padding">
                                    <table class="table">
                                        <tbody>
                                       
                                        <tr>
                                            
                                            <td>Computer</td>
                                            <td><?= $data['computer_name'] ?></td>
                                            
                                        </tr>

                                        <?php
                                        foreach ($list_tool as $row_tool):
                                           
                                        ?>
                                        <tr>
                                            
                                            <td><?= $row_tool['tool_name'] ?></td>
                                            <td><?= ($row_tool['resume_tool_value']==1) ? '<span class="badge bg-green">YES</span>' : '<span class="badge bg-red">NO</span>' ?></td>
                                            
                                        </tr>
                                       <?php
                                        endforeach;
                                        ?>
                                      
                                    </tbody></table>
                                </div><!-- /.box-body -->
                            </div>