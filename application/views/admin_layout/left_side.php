 <aside class="left-side sidebar-offcanvas">                
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="image" style="text-align:center; margin-bottom:10px; margin-top:10px;">
                        	 <?php
                            
							if($data_user['user_img']==""){
								$img = base_url()."assets/admin/img/user/default.png";
							}else{
								$img = base_url()."assets/admin/img/user/".$data_user['user_img'];
							}
							?>
                            <img src="<?= $img ?>" class="img-circle" alt="User Image" />
                        </div>
                        <div class="info" style="text-align:center;">
                            <p style="color:#a0acbf; ">
                                        <?php
                                       
                                        echo "Welcome, ".$data_user['user_username'];
                                        ?>
                                </p>

                            <a style="color:#a0acbf;  "><?= $data_user['user_type_name']?></a>
                        </div>
                    </div>
                   
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                   <?php //if(isset($_SESSION['menu_active'])) { echo $_SESSION['menu_active']; }?>
                    <ul class="sidebar-menu">


                         <li <?php if($this->session->userdata('menu_active') == 5){ echo "class='active'"; } ?>>
                            <a href="<?= site_url('admin') ?>">
                                <i class="fa fa-dashboard"></i>
                                <span>Dashboard</span>
                               
                            </a>
                            
                        </li>

                    <li class="treeview <?php if($this->session->userdata('menu_active') == 1){ echo "active"; } ?>" >
                      <a href="#">
                        <i class="fa fa-list"></i>
                        <span>Data Master</span>
                        <i class="fa fa-angle-left pull-right"></i>
                      </a>
                      <ul class="treeview-menu" style="display: none;">
                        <li><a href="<?= site_url('admin_scope') ?>"><i class="fa fa-circle-o"></i>Scope</a></li>
                        <li><a href="<?= site_url('admin_position') ?>"><i class="fa fa-circle-o"></i>Position</a></li>
                        <li><a href="<?= site_url('admin_position_level') ?>"><i class="fa fa-circle-o"></i>Position Level</a></li>
                        <li><a href="<?= site_url('admin_hard_skill_type') ?>"><i class="fa fa-circle-o"></i>Hard Skill</a></li>
                        <li><a href="<?= site_url('admin_soft_skill_type') ?>"><i class="fa fa-circle-o"></i>Soft Skill</a></li>
                        <li><a href="<?= site_url('admin_allergy') ?>"><i class="fa fa-circle-o"></i>Allergy</a></li>
                        <li><a href="<?= site_url('admin_sport') ?>"><i class="fa fa-circle-o"></i>Sport</a></li>
                        <li><a href="<?= site_url('admin_computer') ?>"><i class="fa fa-circle-o"></i>Tools</a></li>
                        <li><a href="<?= site_url('admin_status') ?>"><i class="fa fa-circle-o"></i>Status</a></li>
                      </ul>
                    </li>
                    
                <li <?php if($this->session->userdata('menu_active') == 2){ echo "class='active'"; } ?>>
                            <a href="<?= site_url('admin_test_question') ?>">
                                <i class="fa fa-edit"></i>
                                <span>Psychological Test</span>
                               
                            </a>
                            
                  </li>

                    <li <?php if($this->session->userdata('menu_active') == 3){ echo "class='active'"; } ?>>
                            <a href="<?= site_url('admin_application') ?>">
                                <i class="fa fa-book"></i>
                                <span>Application</span>
                               
                            </a>
                            
                  </li>
                   
                 
                  
                 
                 
                  <li <?php if($this->session->userdata('menu_active') == 4){ echo "class='active'"; } ?>>
                            <a href="<?= site_url('admin_user') ?>">
                                <i class="fa fa-users"></i>
                                <span>User</span>
                               
                            </a>
                            
                  </li>
               
            
              
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>