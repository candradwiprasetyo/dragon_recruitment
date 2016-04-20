<!-- Content Header (Page header) -->
        
                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-md-6">
                            <!-- AREA CHART -->
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

                            <div class="box box-info">
                                <div class="box-header">
                                    <h3 class="box-title">Basic Info</h3>
                                </div>
                                <div class="box-body chart-responsive">
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <span class="application_label">First Name</span>
                                        </div>
                                        <div class="col-xs-8">
                                            <div class="form-group">
                                            <?= $data['basic_info_first_name'] ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xs-4">
                                            <span class="application_label">Last name</span>
                                        </div>
                                        <div class="col-xs-8">
                                            <div class="form-group">
                                            <?= $data['basic_info_last_name'] ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xs-4">
                                            <span class="application_label">Gender</span>
                                        </div>
                                        <div class="col-xs-8">
                                            <div class="form-group">
                                            <?= ($data['basic_info_gender']==1) ? "Male" : "Female"; ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xs-4">
                                            <span class="application_label">Place and date of birth</span>
                                        </div>
                                        <div class="col-xs-8">
                                            <div class="form-group">
                                            <?= $data['basic_info_birth_place'].", ".$this->access->format_date($data['basic_info_birth_date']) ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xs-4">
                                            <span class="application_label">Country</span>
                                        </div>
                                        <div class="col-xs-8">
                                            <div class="form-group">
                                            <?= $data['country_name'] ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xs-4">
                                            <span class="application_label">NPWP number</span>
                                        </div>
                                        <div class="col-xs-8">
                                            <div class="form-group">
                                            <?= $data['basic_info_npwp_number']; ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xs-4">
                                            <span class="application_label">BPJS number</span>
                                        </div>
                                        <div class="col-xs-8">
                                            <div class="form-group">
                                            <?= $data['basic_info_bpjs_number']; ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xs-4">
                                            <span class="application_label">Driver's license</span>
                                        </div>
                                        <div class="col-xs-8">
                                            <div class="form-group">
                                            <?= "(".$data['license_type'].") ".$data['basic_info_bpjs_number']; ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xs-4">
                                            <span class="application_label">Religion</span>
                                        </div>
                                        <div class="col-xs-8">
                                            <div class="form-group">
                                            <?= $data['religion_name']; ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xs-4">
                                            <span class="application_label">Marital Status</span>
                                        </div>
                                        <div class="col-xs-8">
                                            <div class="form-group">
                                            <?= ($data['basic_info_marital_status']==1) ? "Lajang" : "Menikah"; ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xs-4">
                                            <span class="application_label">Children</span>
                                        </div>
                                        <div class="col-xs-8">
                                            <div class="form-group">
                                            <?= $data['basic_info_child_number']; ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xs-4">
                                            <span class="application_label">Address</span>
                                        </div>
                                        <div class="col-xs-8">
                                            <div class="form-group">
                                            <?= $data['basic_info_address']; ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xs-4">
                                            <span class="application_label">City</span>
                                        </div>
                                        <div class="col-xs-8">
                                            <div class="form-group">
                                            <?= $data['city_name']; ?>
                                            </div>
                                        </div>
                                    </div>

                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                            
                        </div><!-- /.col (LEFT) -->
                        <div class="col-md-6">
                            <!-- LINE CHART -->
                            <div class="box box-info">
                                <div class="box-header">
                                    <h3 class="box-title">Status and Action</h3>
                                </div>
                                <div class="box-body chart-responsive">
                                    
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->

                            <!-- BAR CHART -->
                            <div class="box box-success">
                                <div class="box-header">
                                    <h3 class="box-title">Portfolio</h3>
                                </div>
                                <div class="box-body chart-responsive">
                                     <div class="row">
                                        <div class="col-xs-4">
                                            <span class="application_label">Last company</span>
                                        </div>
                                        <div class="col-xs-8">
                                            <div class="form-group">
                                            <?= $data['portfolio_last_company'] ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xs-4">
                                            <span class="application_label">Last position</span>
                                        </div>
                                        <div class="col-xs-8">
                                            <div class="form-group">
                                            <?= $data['portfolio_last_position'] ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xs-4">
                                            <span class="application_label">Last position level</span>
                                        </div>
                                        <div class="col-xs-8">
                                            <div class="form-group">
                                            <?= $data['last_position_level_name'] ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xs-4">
                                            <span class="application_label">Last salary</span>
                                        </div>
                                        <div class="col-xs-8">
                                            <div class="form-group">
                                            <?= $this->access->format_money($data['portfolio_last_salary']) ?>
                                            </div>
                                        </div>
                                    </div>

                                     <div class="row">
                                        <div class="col-xs-4">
                                            <span class="application_label">Reason out</span>
                                        </div>
                                        <div class="col-xs-8">
                                            <div class="form-group">
                                            <?= $data['reason_out_name'] ?>
                                            </div>
                                        </div>
                                    </div>

                                     <div class="row">
                                        <div class="col-xs-4">
                                            <span class="application_label">Interview date</span>
                                        </div>
                                        <div class="col-xs-8">
                                            <div class="form-group">
                                            <?= $this->access->format_date($data['portfolio_interview_date1'])." until ".$this->access->format_date($data['portfolio_interview_date2']) ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xs-4">
                                            <span class="application_label">Interview type</span>
                                        </div>
                                        <div class="col-xs-8">
                                            <div class="form-group">
                                            <?= $data['interview_type_name'] ?>
                                            </div>
                                        </div>
                                    </div>

                                


                                </div><!-- /.box-body -->
                            </div><!-- /.box -->

                            <div class="box box-primary">
                                
                                <div class="box-body chart-responsive">
                                    <div class="col-sm-4">
                                    <img src="<?= base_url() ?>assets/images/portfolio/<?= $data['portfolio_file'] ?>" class="application_photo">
                                     <button type="submit" class="btn btn-primary btn-block" style="margin-top:10px;">VIEW DETAIL</button>  
                                    </div>
                                    <div class="col-sm-8">

                                        <div class="form-group">
                                            <i class="fa fa-globe fa-1x"></i>&nbsp;&nbsp;&nbsp;
                                            <a href="<?= $data['portfolio_link'] ?>"><?= $data['portfolio_link'] ?></a>
                                        </div>
                                        <div class="form-group">
                                        <i class="fa fa-linkedin fa-1x"></i>&nbsp;&nbsp;&nbsp;
                                        <a href="<?= $data['portfolio_linkedin'] ?>"><?= $data['portfolio_linkedin'] ?></a>
                                        </div>

                                        <div class="form-group">
                                        <i class="fa fa-behance fa-1x"></i>&nbsp;&nbsp;&nbsp;
                                        <a href="<?= $data['portfolio_behance'] ?>"><?= $data['portfolio_behance'] ?></a>
                                        </div>

                                        <div class="form-group">
                                        <i class="fa fa-facebook fa-1x"></i>&nbsp;&nbsp;&nbsp;
                                        <a href="<?= $data['portfolio_behance'] ?>"><?= $data['portfolio_facebook'] ?></a>
                                        </div>

                                        <div class="form-group">
                                        <i class="fa fa-instagram fa-1x"></i>&nbsp;&nbsp;&nbsp;
                                        <a href="<?= $data['portfolio_behance'] ?>"><?= $data['portfolio_instagram'] ?></a>
                                        </div>
                                    </div>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->

                        </div><!-- /.col (RIGHT) -->
                    </div><!-- /.row -->
               
                </section><!-- /.content -->