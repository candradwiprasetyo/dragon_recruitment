<script type="text/javascript">
$(function () {
    // total application
    $('#container1').highcharts({
        title: {
            text: ' ',
            x: 20 //center
        },
        subtitle: {
            text: ' ',
            x: 20
        },

        xAxis: {
            categories: [
                <?php
                $date_now = date("Y-m-d");
                $date_awal = date('Y-m-d', strtotime($date_now. ' - 9 days'));
                
                $data_x = '';
                while(strtotime($date_awal) <= strtotime($date_now)){
                    
                    $data_x .= "'".$this->access->format_date($date_awal)."',";

                    $date_awal = date("Y-m-d", strtotime("+1 day", strtotime($date_awal)));
                }

                echo substr($data_x, 0, -1);

                ?>
                ]
        },
        yAxis: {
            title: {
                text: ' '
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: ' data'
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [{
            name: 'Total',
            data: [<?php 
                $date_now2 = date("Y-m-d");
                $date_awal2 = date('Y-m-d', strtotime($date_now2. ' - 9 days'));

                $data_x2 = '';
                while(strtotime($date_awal2) <= strtotime($date_now2)){
                    
                    $data_x2 .= $this->admin_model->get_total_application_bydate($date_awal2).", ";

                    $date_awal2 = date("Y-m-d", strtotime("+1 day", strtotime($date_awal2)));
                }

                echo substr($data_x2, 0, -1);
                
                ?>]
        }]
    });

    // Top 10 position
     $('#container2').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: ''
        },
        subtitle: {
            text: ''
        },
        xAxis: {
            type: 'category',
            labels: {
                         enabled:false
                     }
        },
        yAxis: {
            title: {
                text: ''
            }

        },
        legend: {
            enabled: false
        },
        plotOptions: {
            series: {
                borderWidth: 0,
                dataLabels: {
                    enabled: true,
                    format: '{point.y:.0f}'
                }
            }
        },

        tooltip: {
            headerFormat: '',
            pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.0f}</b><br/>'
        },

        series: [{
            name: 'Brands',
            colorByPoint: true,
            data: [
            <?php 
            foreach($list_top_ten_position as $row_top_ten_position): ?>
            {
                name: '<?= $row_top_ten_position['position_name'] ?>',
                y: <?= ($row_top_ten_position['jumlah']) ? $row_top_ten_position['jumlah'] : 0;  ?>
            },
            <?php 
            endforeach; 
            ?>
            ]
        }]
        
    });

     // top 10 education
     $('#container3').highcharts({
        chart: {
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45
            }
        },
        title: {
            text: ''
        },
        subtitle: {
            text: ''
        },
        plotOptions: {
            pie: {
                innerSize: 100,
                depth: 45
            }
        },
        series: [{
            name: 'Total ',
            data: [
                <?php 
                foreach($list_top_ten_education as $row_top_ten_education): ?>
                ['<?= $row_top_ten_education['education_type_name'] ?>', <?= $row_top_ten_education['jumlah'] ?>],
                <?php 
                endforeach; 
                ?>
            ]
        }]
    });

     // top 10 city
     $('#container4').highcharts({
        chart: {
            type: 'bar'
        },
        title: {
            text: ''
        },
        subtitle: {
            text: ''
        },
        xAxis: {
            categories: [
                <?php 
                foreach($list_top_ten_city as $row_top_ten_city): ?>
                '<?= $row_top_ten_city['city_name'] ?>',
                <?php 
                endforeach; 
                ?>
                ],
            title: {
                text: null
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: '',
                align: 'high'
            },
            labels: {
                overflow: 'justify'
            }
        },
        tooltip: {
            valueSuffix: ' '
        },
        plotOptions: {
            bar: {
                dataLabels: {
                    enabled: false
                }
            }
        },
        
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: -40,
            y: 80,
            floating: true,
            borderWidth: 1,
            backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
            shadow: true,
            enabled: false
        },
        credits: {
            enabled: false
        },
        series: [{
            name: 'Total',
            data: [
             <?php 
                foreach($list_top_ten_city as $row_top_ten_city2): ?>
                <?= $row_top_ten_city2['jumlah']."," ?>
                <?php 
                endforeach; 
                ?>
            ]
        }]
    });
});
        </script>              

                <!-- Main content -->
                <section class="content">
                    
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                    <div class="toggle_dashboard">
                                        <!--<div class="btn-group">
                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                                <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Today</a></li>
                                                <li><a href="#">Does not fit the criteria</a></li>
                                            </ul>
                                        </div>  -->

                                        <div class="form-group">
                                            <div class="input-group">
                                                <button class="btn btn-primary pull-left" id="daterange-btn">
                                                    <i class="fa fa-calendar"></i> 
                                                    <i class="fa fa-caret-down"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                     

                                <div class="inner">
                                    <h3>
                                        <?= $data['total_application'] ?>
                                    </h3>
                                    <p>
                                       Number of applicants
                                        
                                    </p>
                                </div>
                                
                                <a class="small-box-footer">
                                    <?= $this->admin_model->get_format_param_type($this->session->userdata('param1_type')) ?>
                                </a>
                                 
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-green">
                                <div class="toggle_dashboard">
                                        <!--<div class="btn-group">
                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                                <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Today</a></li>
                                                <li><a href="#">Does not fit the criteria</a></li>
                                            </ul>
                                        </div>  -->

                                        <div class="form-group">
                                            <div class="input-group">
                                                <button class="btn btn-success pull-left" id="daterange2-btn">
                                                    <i class="fa fa-calendar"></i> 
                                                    <i class="fa fa-caret-down"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                <div class="inner">
                                   <h4><?= $data['top_position'] ?>&nbsp;</h4>
                                    <p>
                                        Top Position
                                    </p>
                                </div>
                                
                                <a href="#" class="small-box-footer">
                                   <?= $this->admin_model->get_format_param_type($this->session->userdata('param2_type')) ?>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="toggle_dashboard">
                                        <!--<div class="btn-group">
                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                                <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Today</a></li>
                                                <li><a href="#">Does not fit the criteria</a></li>
                                            </ul>
                                        </div>  -->

                                        <div class="form-group">
                                            <div class="input-group">
                                                <button class="btn btn-warning pull-left" id="daterange3-btn">
                                                    <i class="fa fa-calendar"></i> 
                                                    <i class="fa fa-caret-down"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                <div class="inner">
                                   <h4><?= $data['top_education'] ?>&nbsp;</h4>
                                    <p>
                                        Top Education
                                    </p>
                                </div>
                                
                                <a href="#" class="small-box-footer">
                                   <?= $this->admin_model->get_format_param_type($this->session->userdata('param3_type')) ?>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-red">
                                <div class="toggle_dashboard">
                                        <!--<div class="btn-group">
                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                                <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Today</a></li>
                                                <li><a href="#">Does not fit the criteria</a></li>
                                            </ul>
                                        </div>  -->

                                        <div class="form-group">
                                            <div class="input-group">
                                                <button class="btn btn-danger pull-left" id="daterange4-btn">
                                                    <i class="fa fa-calendar"></i> 
                                                    <i class="fa fa-caret-down"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                <div class="inner">
                                   <h4><?= $data['top_city'] ?>&nbsp;</h4>
                                    <p>
                                        Top City
                                    </p>
                                </div>
                                
                                <a href="#" class="small-box-footer">
                                   <?= $this->admin_model->get_format_param_type($this->session->userdata('param4_type')) ?>
                                </a>
                            </div>
                        </div><!-- ./col -->
                    </div><!-- /.row -->


                    <?php /*
                     <div class="row">
                     
                     <div class="col-md-12">
                    
                   <!-- <img src="<?= base_url() ?>assets/images/banner.png" style="width:100%;" /> -->
                    
                             <div class="box">
                           
                             
                                <div class="box-body2 table-responsive" style="padding:20px; text-align:center;">
                                
									<div style="font-size:11px; color:#ccc;">Copyright © 2016, Dragon Recruitment</div>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                       
                        </div>
                        
                      
                        
                    </div>
                       <!-- /.row -->
                       */ ?>


                    <div class="row">
                        <div class="col-md-6">
                            <!-- AREA CHART -->
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Total Applications</h3>
                                </div>
                                <div class="box-body chart-responsive">
                                    <div id="container1" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

                                </div><!-- /.box-body -->
                            </div><!-- /.box -->

                            <!-- DONUT CHART -->
                            <div class="box box-danger">
                                <div class="box-header">
                                    <h3 class="box-title">Top 10 Education</h3>
                                </div>
                                <div class="box-body chart-responsive">
                                    <div id="container3" style="height: 400px"></div>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                            
                        </div><!-- /.col (LEFT) -->
                        <div class="col-md-6">
                            <!-- LINE CHART -->
                            <div class="box box-info">
                                <div class="box-header">
                                    <h3 class="box-title">Top 10 Position</h3>
                                </div>
                                <div class="box-body chart-responsive">
                                   <div id="container2" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->

                            <!-- BAR CHART -->
                            <div class="box box-success">
                                <div class="box-header">
                                    <h3 class="box-title">Top 10 City</h3>
                                </div>
                                <div class="box-body chart-responsive">
                                    <div id="container4" style="min-width: 310px; max-width: 800px; height: 400px; margin: 0 auto"></div>

                                </div><!-- /.box-body -->
                            </div><!-- /.box -->

                        </div><!-- /.col (RIGHT) -->
                    </div><!-- /.row -->

                </section><!-- /.content -->
               
             

<script type="text/javascript">
                  
            $(function() {
                // number of applications
                $('#daterange-btn').daterangepicker(
                        {
                            ranges: {
                                'Today': [moment(), moment()],
                                'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
                                'This week': [moment().subtract('days', 6), moment()],
                                //'Last 30 Days': [moment().subtract('days', 29), moment()],
                                'This month': [moment().startOf('month'), moment().endOf('month')],
                                //'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
                            },
                            startDate: moment().subtract('days', 29),
                            endDate: moment()
                        },
                function(start, end) {
                    var date_value = (start.format('YYYY-MM-DD') + '_' + end.format('YYYY-MM-DD'));
                    /*
                     var interest = $('.ranges ul').find('li.active');
                    console.dir($('.ranges ul'));
                        alert(interest);
                    */
                        var target = event.target || event.srcElement;
                        param1_type = (event.target.innerHTML);


                    //alert(ranges());
                    window.location.href = '<?= site_url() ?>admin/search/1/'+ date_value+'/'+param1_type;
                    }
                );

                // top position
                $('#daterange2-btn').daterangepicker(
                        {
                            ranges: {
                                'Today': [moment(), moment()],
                                'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
                                'This week': [moment().subtract('days', 6), moment()],
                                //'Last 30 Days': [moment().subtract('days', 29), moment()],
                                'This month': [moment().startOf('month'), moment().endOf('month')],
                                //'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
                            },
                            startDate: moment().subtract('days', 29),
                            endDate: moment()
                        },
                function(start, end) {
                    var date_value = (start.format('YYYY-MM-DD') + '_' + end.format('YYYY-MM-DD'));
                    /*
                     var interest = $('.ranges ul').find('li.active');
                    console.dir($('.ranges ul'));
                        alert(interest);
                    */
                        var target = event.target || event.srcElement;
                        param2_type = (event.target.innerHTML);


                    //alert(ranges());
                    window.location.href = '<?= site_url() ?>admin/search/2/'+ date_value+'/'+param2_type;
                    }
                );

                // top education
                $('#daterange3-btn').daterangepicker(
                        {
                            ranges: {
                                'Today': [moment(), moment()],
                                'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
                                'This week': [moment().subtract('days', 6), moment()],
                                //'Last 30 Days': [moment().subtract('days', 29), moment()],
                                'This month': [moment().startOf('month'), moment().endOf('month')],
                                //'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
                            },
                            startDate: moment().subtract('days', 29),
                            endDate: moment()
                        },
                function(start, end) {
                    var date_value = (start.format('YYYY-MM-DD') + '_' + end.format('YYYY-MM-DD'));
                    /*
                     var interest = $('.ranges ul').find('li.active');
                    console.dir($('.ranges ul'));
                        alert(interest);
                    */
                        var target = event.target || event.srcElement;
                        param3_type = (event.target.innerHTML);


                    //alert(ranges());
                    window.location.href = '<?= site_url() ?>admin/search/3/'+ date_value+'/'+param3_type;
                    }
                );

                // top city
                $('#daterange4-btn').daterangepicker(
                        {
                            ranges: {
                                'Today': [moment(), moment()],
                                'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
                                'This week': [moment().subtract('days', 6), moment()],
                                //'Last 30 Days': [moment().subtract('days', 29), moment()],
                                'This month': [moment().startOf('month'), moment().endOf('month')],
                                //'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
                            },
                            startDate: moment().subtract('days', 29),
                            endDate: moment()
                        },
                function(start, end) {
                    var date_value = (start.format('YYYY-MM-DD') + '_' + end.format('YYYY-MM-DD'));
                    /*
                     var interest = $('.ranges ul').find('li.active');
                    console.dir($('.ranges ul'));
                        alert(interest);
                    */
                        var target = event.target || event.srcElement;
                        param4_type = (event.target.innerHTML);


                    //alert(ranges());
                    window.location.href = '<?= site_url() ?>admin/search/4/'+ date_value+'/'+param4_type;
                    }
                );
           
            });


        </script>

<!-- highchart -->
<script src="<?= site_url() ?>assets/admin/js/highchart/highcharts.js"></script>
<script src="<?= site_url() ?>assets/admin/js/highchart/exporting.js"></script>
<script src="<?= site_url() ?>assets/admin/js/highchart/highcharts-3d.js"></script>
        