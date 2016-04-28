<!-- Add fancyBox main JS and CSS files -->
<script type="text/javascript" src="<?= base_url() ?>assets/admin/js/fancybox/jquery.fancybox.js?v=2.1.5"></script>
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/admin/js/fancybox/jquery.fancybox.css?v=2.1.5" media="screen" />

<script type="text/javascript">
  $(document).ready(function() {
    /*
     *  Simple image gallery. Uses default settings
     */

    $('.fancybox').fancybox();

  });
</script>
<div class="box box-info">
                                <div class="box-header">
                                    <h3 class="box-title">Secondary Info</h3>
                                     <div class="box-tools pull-right">
                                        <button class="btn btn-default btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>

                                    </div>
                                </div>
                                <div class="box-body chart-responsive">
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <span class="application_label">Weight</span>
                                        </div>
                                        <div class="col-xs-8">
                                            <div class="form-group">
                                            <?= $data['secondary_info_weight']." kg" ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xs-4">
                                            <span class="application_label">Height</span>
                                        </div>
                                        <div class="col-xs-8">
                                            <div class="form-group">
                                            <?= $data['secondary_info_height']." cm" ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xs-4">
                                            <span class="application_label">Blood group</span>
                                        </div>
                                        <div class="col-xs-8">
                                            <div class="form-group">
                                            <?= $data['secondary_info_blood_group']; ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xs-4">
                                            <span class="application_label">Blood group type</span>
                                        </div>
                                        <div class="col-xs-8">
                                            <div class="form-group">
                                            <?= $data['secondary_info_blood_group_type'] ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xs-4">
                                            <span class="application_label">Last blood donors</span>
                                        </div>
                                        <div class="col-xs-8">
                                            <div class="form-group">
                                            <?= $data['secondary_info_blood_donation'] ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xs-4">
                                            <span class="application_label">Wearing glasses or softlens</span>
                                        </div>
                                        <div class="col-xs-8">
                                            <div class="form-group">
                                            <?= ($data['secondary_info_use_glasses']==1) ? "Yes" : "No"; ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xs-4">
                                            <span class="application_label">Smoker</span>
                                        </div>
                                        <div class="col-xs-8">
                                            <div class="form-group">
                                            <?= ($data['secondary_info_smoker']) ? "Yes" : "No"; ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xs-4">
                                            <span class="application_label">House status</span>
                                        </div>
                                        <div class="col-xs-8">
                                            <div class="form-group">
                                            <?= $data['house_status_name']; ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xs-4">
                                            <span class="application_label">Allergy</span>
                                        </div>
                                        <div class="col-xs-8">
                                            <div class="form-group">
                                            <?= $data['allergy_name']; ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xs-4">
                                            <span class="application_label">Sport</span>
                                        </div>
                                        <div class="col-xs-8">
                                            <div class="form-group">
                                           <?= $data['sport_name']; ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xs-4">
                                            <span class="application_label">Letters of reference </span>
                                        </div>
                                        <div class="col-xs-8">
                                            <div class="form-group">
                                             <a href="<?= base_url() ?>assets/images/email_reference/<?= $data['secondary_info_reference_letter'] ?>" class="btn btn-primary fancybox">VIEW</a>
                                            </div>
                                        </div>
                                    </div>





                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
