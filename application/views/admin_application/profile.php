 <div class="box box-primary">
                                
                                <div class="box-body chart-responsive">
                                    <div class="col-sm-4">
                                    <img src="<?= base_url() ?>assets/images/application/<?= $data['resume_photo'] ?>" class="application_photo">
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                        <h3><?= $data['basic_info_first_name']." ".$data['basic_info_last_name'] ?></h3>
                                        </div>

                                        <div class="form-group">
                                        Apply as <?= $data['position_name']." (".$data['position_level_name'].")" ?>
                                        </div>

                                        <div class="form-group">
                                        <i class="fa fa-fw fa-money"></i> <?= "Rp ".number_format($data['portfolio_expected_salary'],0) ?>
                                        </div>

                                        <div class="form-group">
                                        <i class="fa fa-fw fa-envelope"></i> <?= $data['basic_info_email'] ?>
                                        </div>

                                        <div class="form-group">
                                        <i class="fa fa-fw fa-phone-square"></i> <?= $data['basic_info_phone_number'] ?>
                                        </div>
                                    </div>
                                </div><!-- /.box-body -->
                                <div class="box-footer">
                                    <div class="form-group">
                                        <div class="reason_join">
                                            
                                            <?= '" '.$data['basic_info_join_reason'].' "' ?>

                                        </div>
                                    </div>
                             
                             </div>
                            </div><!-- /.box -->

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