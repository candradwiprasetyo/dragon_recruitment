<!-- Content Header (Page header) -->
        
                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-md-6">

                            <!-- PROFILE -->
                            <?php $this->load->view('admin_application/profile_new'); ?>
                            <!-- PROFILE -->
                            <?php //$this->load->view('admin_application/profile'); ?>
                            
                            <!-- status and action -->
                            <?php $this->load->view('admin_application/status'); ?>

                            <!-- basic info -->
                            <?php $this->load->view('admin_application/basic_info'); ?>

                            <!-- secondary info -->
                            <?php $this->load->view('admin_application/secondary_info'); ?>

                            <!-- soft skill -->
                            <?php $this->load->view('admin_application/soft_skill'); ?>
                            
                        </div><!-- /.col (LEFT) -->
                        <div class="col-md-6">
                            
                            <!-- portfolio -->
                            <?php $this->load->view('admin_application/portfolio'); ?>
                            
                            <!-- resume -->
                            <?php $this->load->view('admin_application/resume'); ?>
                            
                            <!-- hard skill -->
                            <?php $this->load->view('admin_application/hard_skill'); ?>

                        </div><!-- /.col (RIGHT) -->
                    </div><!-- /.row -->

                    <div class="row">
                        <div class="col-md-12">
                            <a href="<?= site_url() ?>admin_application" class="btn btn-primary" >Close</a>
                        </div>
                    </div>
                </section><!-- /.content -->