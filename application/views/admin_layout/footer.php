
        
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->


        
       
       <!--calendar -->
    

    </body>
</html>

       
<!-- export -->
      <script src="<?= base_url() ?>assets/admin/js/export/dataTables.buttons.min.js"></script>
      <script src="<?= base_url() ?>assets/admin/js/export/buttons.flash.min.js"></script>
      <script src="<?= base_url() ?>assets/admin/js/export/jszip.min.js"></script>
      <script src="<?= base_url() ?>assets/admin/js/export/pdfmake.min.js"></script>
      <script src="<?= base_url() ?>assets/admin/js/export/vfs_fonts.js"></script>
      <script src="<?= base_url() ?>assets/admin/js/export/buttons.html5.min.js"></script>
      <script src="<?= base_url() ?>assets/admin/js/export/buttons.print.min.js"></script>

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
            } );
                $('#example2').dataTable({
                    "bPaginate": true,
                    "bLengthChange": false,
                    "bFilter": false,
                    "bSort": true,
                    "bInfo": true,
                    "bAutoWidth": false
                });
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
					//	e.preventcokelat();
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