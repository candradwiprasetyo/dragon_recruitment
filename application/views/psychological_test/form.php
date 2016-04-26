<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?= ucwords($data_head['title']) ?> | Dragon Recruitment</title>
        <link href="<?= base_url('assets/images/favicon.ico') ?>" type="image/x-icon" rel="shortcut icon">
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="<?= base_url() ?>assets/admin/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="<?= base_url() ?>assets/admin/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="<?= base_url() ?>assets/admin/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- DATA TABLES -->
        <link href="<?= base_url() ?>assets/admin/css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?= base_url() ?>assets/admin/css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <!-- Popup Modal -->
        <link href="<?= base_url() ?>assets/admin/css/popModal.css" type="text/css" rel="stylesheet" >
        <!-- Preview -->
        <link href="<?= base_url() ?>assets/admin/css/preview.css" type="text/css" rel="stylesheet" >
         <!-- iCheck for checkboxes and radio inputs -->
        <link href="<?= base_url() ?>assets/admin/css/iCheck/all.css" rel="stylesheet" type="text/css" />
         <!-- daterange picker -->
        <link href="<?= base_url() ?>assets/admin/css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- Bootstrap time Picker -->
        <link href="<?= base_url() ?>assets/admin/css/timepicker/bootstrap-timepicker.min.css" rel="stylesheet"/>
        <!-- datepicker -->
       <link href="<?= base_url() ?>assets/admin/css/datepicker/datepicker.css" rel="stylesheet">
        <!-- Bootstrap Color Picker -->
        <link href="<?= base_url() ?>assets/admin/css/colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet"/>

       <!-- lookup -->
       <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/admin/css/lookup/bootstrap-select.css">
        
         <!-- export -->
       <link href="<?= base_url() ?>assets/admin/css/export/buttons.dataTables.min.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        
        <!-- footable 
           <link href="../css/footable/footable.core.css?v=2-0-1" rel="stylesheet" type="text/css"/>
            <link href="../css/footable/footable.standalone.css" rel="stylesheet" type="text/css"/>
           
           
            <script src="../js/footable/footable.js?v=2-0-1" type="text/javascript"></script>
            <script src="../js/footable/footable.sort.js?v=2-0-1" type="text/javascript"></script>
            <script src="../js/footable/footable.filter.js?v=2-0-1" type="text/javascript"></script>
            <script src="../js/footable/footable.paginate.js?v=2-0-1" type="text/javascript"></script>
            <script src="../js/footable/bootstrap-tab.js" type="text/javascript"></script>
         -->

        <!-- jQuery 2.0.2 -->
       <script src="<?= base_url() ?>assets/admin/js/jquery.js"></script>
        <script src="<?= base_url() ?>assets/admin/js/function.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="<?= base_url() ?>assets/admin/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- DATA TABES SCRIPT -->
        <script src="<?= base_url() ?>assets/admin/js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/admin/js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
        <!-- date-range-picker -->
        <script src="<?= base_url() ?>assets/admin/js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <!-- InputMask -->
        <script src="<?= base_url() ?>assets/admin/js/plugins/input-mask/jquery.inputmask.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/admin/js/plugins/input-mask/jquery.inputmask.date.extensions.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/admin/js/plugins/input-mask/jquery.inputmask.extensions.js" type="text/javascript"></script>
        <!-- pop Modal-->
        <script src="<?= base_url() ?>assets/admin/js/popup/popModal.js"></script>
        <!-- bootstrap time picker -->
        <script src="<?= base_url() ?>assets/admin/js/plugins/timepicker/bootstrap-timepicker.min.js" type="text/javascript"></script>
        <!-- Datepicker -->
        <script src="<?= base_url() ?>assets/admin/js/plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- select -->
    <script type="text/javascript" src="<?= base_url() ?>assets/admin/js/lookup/bootstrap-select.js"></script>
        <!-- AdminLTE App -->
        <script src="<?= base_url() ?>assets/admin/js/AdminLTE/app.js" type="text/javascript"></script>
        <!-- validasi -->
        <script src="<?= base_url() ?>assets/admin/js/plugins/validate/jquery.validate.js" type="text/javascript"></script>
          <!-- bootstrap color picker -->
        <script src="<?= base_url() ?>assets/admin/js/plugins/colorpicker/bootstrap-colorpicker.min.js" type="text/javascript"></script>

      <!-- CK Editor -->
        <script src="<?= base_url() ?>assets/admin/js/plugins/ckeditor/ckeditor.js"></script>
        <script src="<?= base_url() ?>assets/admin/js/plugins/ckeditor/samples/js/sample.js"></script>

    </head>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->



<!-- Content Header (Page header) -->
        
                <!-- Main content -->
                <section class="content">
                    <div class="row">
                      
                        <!-- right column -->
                        <div class="col-md-8 col-md-offset-2">
                            <!-- general form elements disabled -->
                            <section class="content">
                           
                          
                            <div class="title_page"> Psycological Test </div>
                            

                             <form  class="cmxform" id="createForm" action="<?= $data_head['action'] ?>" method="post" enctype="multipart/form-data" role="form">

                            <div class="box box-cokelat">
                                
                               
                                <div class="box-body" style="padding:20px;">
                                    
                      
                                       
                                        <div class="col-md-12">
                                      
                                        <?php 
                                       $no = 1;
                                       foreach($list as $row): ?>
                                         <div class="form-group">
                                         <label><?= $no.". ".$row['question_name']?></label>

                                         <?php if($row['question_description']){ ?>
                                         <span><?= $row['question_description']?></span>
                                         <?php
                                          }
                                         ?>
                                           <!-- radio -->
                                        <div class="form-group"> 
                                            <?php
                                            $list_option =  $this->psychological_test_model->list_data_option($row['question_id']);
                                            foreach($list_option as $row_option): 
                                            ?>
                                            <div class="radio">
                                                <label>
                                                    <input required type="radio" name="i_option_<?= $row['question_id']?>" id="i_option_<?= $row['question_id']?>" value="<?= $row_option['question_option_id']?>">
                                                    <?= $row_option['question_option_name'] ?>
                                                </label>
                                            </div>
                                            
                                           <?php 
                                        
                                         endforeach; 
                                         ?>
                                        </div><br>
                                      </div>
                                      <?php 
                                     $no++;
                                     endforeach; 
                                     ?>
                                         
                                        </div>
                                      
                                        
                    
                                    
                                      
                                        
                                        <div style="clear:both;"></div>
                                     
                                </div><!-- /.box-body -->
                                
                                  <div class="box-footer">
                                <input class="btn btn-primary" type="submit" value="Save"/>
                             
                             </div>
                            
                            </div><!-- /.box -->
                       </form>
                       
                       </section>
                        </div><!--/.col (right) -->
                    </div>   <!-- /.row -->
               
                </section><!-- /.content -->
        
          


        
       
       <!--calendar -->
    

    </body>
</html>

       

 <!-- page script -->
        <script type="text/javascript">
            $(function() {
                $('#example1').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    
                    {
                        extend: 'pageLength'
                    },
                    {
                        extend: 'copy'
                    },
                    {
                        extend: 'excel'
                    },
                    {
                        extend: 'pdf'
                    },
                    {
                        extend: 'csv'
                    }
                ],
                lengthMenu: [
                    [ 10, 25, 50, -1 ],
                    [ '10 rows', '25 rows', '50 rows', 'Show all' ]
                ]
            } );$('#example2').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    
                    {
                        extend: 'pageLength'
                    },
                    {
                        extend: 'copy'
                    },
                    {
                        extend: 'excel'
                    },
                    {
                        extend: 'pdf'
                    },
                    {
                        extend: 'csv'
                    }
                ],
                lengthMenu: [
                    [ 10, 25, 50, -1 ],
                    [ '10 rows', '25 rows', '50 rows', 'Show all' ]
                ]
            } );
                /*$('#example2').dataTable({
                    "bPaginate": true,
                    "bLengthChange": false,
                    "bFilter": false,
                    "bSort": true,
                    "bInfo": true,
                    "bAutoWidth": false
                });*/
        $("#example3").dataTable();
        $("#example4").dataTable();
        $('#example_simple').dataTable({
                    "bPaginate": false,
                    "bLengthChange": false,
                    "bFilter": false,
                    "bSort": false,
                    "bInfo": false,
                    "bAutoWidth": false
                });
        
        $('#example99').dataTable({
                   
                    "bFilter": false,
                   
                });
        /*
        $(function() {
          $('#new_table').footable();
        });
        
        $('.footable').data('limit-navigation', 5);
        $('.footable').trigger('footable_initialized');
            
        $('#change-page-size').change(function (e) {
          //  e.preventcokelat();
            var pageSize = $(this).val();
            $('.footable').data('page-size', pageSize);
            $('.footable').trigger('footable_initialized');
        });
          */
                //Datemask dd/mm/yyyy
                $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
                //Datemask2 mm/dd/yyyy
                $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
                //Money Euro
                $("[data-mask]").inputmask();
        
        //iCheck for checkbox and radio inputs
                $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
                    checkboxClass: 'icheckbox_minimal',
                    radioClass: 'iradio_minimal'
                });
                //Red color scheme for iCheck
                $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
                    checkboxClass: 'icheckbox_minimal-red',
                    radioClass: 'iradio_minimal-red'
                });
                //Flat red color scheme for iCheck
                $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
                    checkboxClass: 'icheckbox_flat-red',
                    radioClass: 'iradio_flat-red'
                });
        
        //Date range picker
                $('#reservation').daterangepicker();
        
        //date picker
        $('#date_picker1').datepicker({
          format: 'dd/mm/yyyy'
        });
        
        $('#date_picker2').datepicker({
          format: 'dd/mm/yyyy'
        });
        
        $('#date_picker3').datepicker({
          format: 'dd/mm/yyyy'
        });
                
                //Timepicker
                $(".timepicker").timepicker({
                    showInputs: false
                });

                 //Colorpicker
                $(".my-colorpicker1").colorpicker();
                //color picker with addon
                $(".my-colorpicker2").colorpicker();
        
        
        
        
            });
      
      initSample();

          
        </script>