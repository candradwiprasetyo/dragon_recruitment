<div class="box box-info">
                                <div class="box-header">
                                    <h3 class="box-title">Basic Info</h3>
                                     <div class="box-tools pull-right">
                                        <button class="btn btn-default btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                       
                                    </div>
                                </div>
                                <div class="box-body chart-responsive">
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <span class="application_label">KTP Number</span>
                                        </div>
                                        <div class="col-xs-8">
                                            <div class="form-group">
                                            <?= $data['basic_info_ktp_number'] ?>
                                            </div>
                                        </div>
                                    </div>
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
                                            <?= "(".$data['license_type'].") ".$data['basic_info_license_number']; ?>
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

                                    <div class="row">
                                        <div class="col-xs-4">
                                            <span class="application_label">Motto</span>
                                        </div>
                                        <div class="col-xs-8">
                                            <div class="form-group">
                                            <?= $data['basic_info_life_motto']; ?>
                                            </div>
                                        </div>
                                    </div>

                                </div><!-- /.box-body -->
                            </div><!-- /.box -->