       
            <div class="box box-widget widget-user">
                <div class="widget-user-header bg-aqua">
                  <h3 class="widget-user-username"><?= $data['basic_info_first_name']." ".$data['basic_info_last_name'] ?></h3>
                  <h5 class="widget-user-desc"><?= $data['position_name']." (".$data['position_level_name'].")" ?></h5>
                </div>
                <div class="widget-user-image">
                <img src="<?= base_url() ?>assets/images/application/<?= $data['resume_photo'] ?>" class="img-circle">
                  
                </div>
                <div class="box-footer_new">
                  <div class="row">
                    <div class="col-sm-4 border-right">
                      <div class="description-block">
                        <h5 class="description-header"><?= "Rp ".number_format($data['portfolio_expected_salary'],0) ?></h5>
                        <span class="description-text">Expected Salary</span>
                      </div>
                    </div>
                    <div class="col-sm-4 border-right">
                      <div class="description-block">
                        <h5 class="description-header"><?= $data['basic_info_phone_number'] ?></h5>
                        <span class="description-text">Phone number</span>
                       
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="description-block">
                        <h5 class="description-header"><?= $data['basic_info_email'] ?></h5>
                        <span class="description-text">Email</span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="box-footer">
                                    
                                        <div class="reason_join">
                                            
                                            <?= '" '.$data['basic_info_join_reason'].' "' ?>

                                        </div>
                                   
                             
                             </div>
              </div>

               <div class="row" style="margin-left: -15px; margin-right:-15px;">
                                <div class="col-sm-6">
                                <!-- DONUT CHART -->
                                <div class="box box-danger">
                                    
                                    <div class="box-body chart-responsive" style="text-align: center; padding-bottom: 10px;">
                                        <div class="col-md-12">
                                           <i class="fa fa-map-marker fa-1x"></i>&nbsp;&nbsp;&nbsp;<?= $data['city_name'].", ".$data['country_name'] ?>
                                        </div>
                                    </div><!-- /.box-body -->
                                </div><!-- /.box -->
                                </div>
                                <div class="col-sm-6">
                                <!-- DONUT CHART -->
                                <div class="box box-danger">
                                    
                                    <div class="box-body chart-responsive" style="text-align: center; padding-bottom: 10px;">
                                        <div class="col-md-12">
                                           <i class="fa fa-briefcase fa-1x"></i>&nbsp;&nbsp;&nbsp;
                                           <?= $data['resume_total_work_year']." years of experience "; ?>
                                        </div>
                                    </div><!-- /.box-body -->

                                </div><!-- /.box -->
                                </div>
                            </div>

<!--
<div class="box box-widget widget-user-2">
                <div class="widget-user-header bg-yellow">
                  <div class="widget-user-image">
                    <img src="<?= base_url() ?>assets/images/application/<?= $data['resume_photo'] ?>" class="img-circle">
                  </div>
                  <h3 class="widget-user-username">Nadia Carmichael</h3>
                  <h5 class="widget-user-desc">Lead Developer</h5>
                </div>
                <div class="box-footer">
                  <div class="row">
                    <div class="col-md-4 border-right">
                      <div class="description-block">
                        <h5 class="description-header"><?= "Rp ".number_format($data['portfolio_expected_salary'],0) ?></h5>
                        
                      </div>
                    </div>
                    <div class="col-md-4 border-right">
                      <div class="description-block">
                        <h5 class="description-header"><?= $data['basic_info_phone_number'] ?></h5>
                       
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="description-block">
                        <h5 class="description-header"><?= $data['basic_info_email'] ?></h5>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>-->