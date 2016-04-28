

<div class="box box-success">
                                <div class="box-header">
                                    <h3 class="box-title">Portfolio</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-default btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>

                                    </div>
                                </div>
                                <div class="box-body chart-responsive">
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <span class="application_label">Total Experience</span>
                                        </div>
                                        <div class="col-xs-8">
                                            <div class="form-group">
                                            <?= $data['resume_total_work_year']." year" ?>
                                            </div>
                                        </div>
                                    </div>
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

                                    <br>

                                    <div class="row">
                                        <div class="col-sm-4">
                                        
                                            <embed width="160" height="160" name="plugin" src="<?= base_url() ?>assets/images/portfolio/<?= $data['portfolio_file'] ?>" type="application/pdf">

                                    <!--<img src="<?= base_url() ?>assets/images/portfolio/<?= $data['portfolio_file'] ?>" class="application_photo">
                                    --><a target="_blank" href="<?= $data_head['view_portfolio'] ?>" class="btn btn-primary btn-block" style="margin-top:10px;">VIEW DETAIL</a>
                                    </div>
                                    <div class="col-sm-8">

                                        <?php if($data['portfolio_link']){ ?>
                                        <div class="form-group">
                                            <i class="fa fa-globe fa-1x"></i>&nbsp;&nbsp;&nbsp;
                                            <a href="<?= $data['portfolio_link'] ?>" target="_blank"><?= $data['portfolio_link'] ?></a>
                                        </div>
                                        <?php
                                        }
                                        if($data['portfolio_linkedin']){
                                        ?>
                                        <div class="form-group">
                                        <i class="fa fa-linkedin fa-1x"></i>&nbsp;&nbsp;&nbsp;
                                        <a href="<?= $data['portfolio_linkedin'] ?>" target="_blank"><?= $data['portfolio_linkedin'] ?></a>
                                        </div>
                                        <?php
                                        }
                                        if($data['portfolio_behance']){
                                        ?>
                                        <div class="form-group">
                                        <i class="fa fa-behance fa-1x"></i>&nbsp;&nbsp;&nbsp;
                                        <a href="<?= $data['portfolio_behance'] ?>" target="_blank"><?= $data['portfolio_behance'] ?></a>
                                        </div>
                                        <?php
                                        }
                                        if($data['portfolio_facebook']){
                                        ?>
                                        <div class="form-group">
                                        <i class="fa fa-facebook fa-1x"></i>&nbsp;&nbsp;&nbsp;
                                        <a href="<?= $data['portfolio_facebook'] ?>" target="_blank"><?= $data['portfolio_facebook'] ?></a>
                                        </div>
                                        <?php
                                        }
                                        if($data['portfolio_instagram']){
                                        ?>
                                        <div class="form-group">
                                        <i class="fa fa-instagram fa-1x"></i>&nbsp;&nbsp;&nbsp;
                                        <a href="<?= $data['portfolio_instagram'] ?>" target="_blank"><?= $data['portfolio_instagram'] ?></a>
                                        </div>
                                        <?php
                                        }

                                        ?>
                                    </div>
                                    </div>


                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
