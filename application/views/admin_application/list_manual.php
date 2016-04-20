<?php
if(isset($_GET['did']) && $_GET['did']==1){

    $this->access->get_message(1);

}else if(isset($_GET['did']) && $_GET['did']==2){

    $this->access->get_message(2);

}else if(isset($_GET['did']) && $_GET['did']==3){

    $this->access->get_message(3);

}else if(isset($_GET['err']) && $_GET['err']==4){

    $this->access->get_message(4);
    
}
?>       
                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            
                              <div class="title_page"> <?= $data_head['title'] ?></div>
                            
                            <div class="box">
                             
                                <div class="box-body2 table-responsive">

<?php 

    $this->table->set_heading(array('id', 'Artikel'));
 
    foreach($artikel as $a){    
        $this->table->add_row(array($a->nama, $a->alamat,));
    }

    $tmpl = array ( 'table_open'  => '<table id="" class="table table-bordered table-striped">' );

    $this->table->set_template($tmpl);
    
    echo $this->table->generate(); 
    echo $this->pagination->create_links();

    ?>


                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>

                </section><!-- /.content -->

              