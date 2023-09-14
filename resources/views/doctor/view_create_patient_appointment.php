<!-- =============================================== -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-world"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('create_appointment');?></h1>
            <small><?php echo display('create_appointment');?></small>
            <ol class="breadcrumb">
                <li class="active"><a href="<?php echo base_url();?>admin/doctor/Dashboard"><?php echo display('deashbord');?></a></li>
            </ol>
        </div>
    </section>



<section class="content">
    <div class="row">
        <!--  form area -->
        <div class="col-sm-12">

            <?php 
                $mag = $this->session->flashdata('exception');
                    if($mag !=''){
                        echo '<div class="alert alert-danger alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                             <strong>'.$mag.'</strong>
                        </div>';
                    }
            ?>
                
            <div  class="panel panel-bd panel-form">
                
                <div class="panel-heading">
                    <div ><a href="<?php echo base_url();?>admin/doctor/Patient_controller/create_new_patient" class="btn btn-success pull-right"><?php echo display('create_new_patient')?></a></div>
                    <div class="panel-title" >
                        <h4><?php echo display('create_appointment');?> </h4>
                    </div>
                </div>
                
                <div class="panel-body">
                    <div class="portlet-body form">
                    <?php 
                    
                        $attributes = array('class' => 'form-horizontal','target'=>'_blank','post','name'=>'p_info','role'=>'form');
                        echo form_open('admin/doctor/Appointment_controller/save_appointment', $attributes);                
                    ?>
                        <div class="form-body">

                                <div class="form-group">
                                    <label class="col-md-3 control-label"><?php echo display('date');?></label>
                                    <div class="col-md-5">
                                       <input type="text" id="date" value="<?php echo set_value('date'); ?>"  onchange="loadSchedul()" name="date" class="form-control datepicker1"  placeholder="yyyy-mm-dd" required>
                                        <span class="error-msg"><?php echo form_error('date'); ?> </span>
                                     </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label"> <?php echo display('phone_number')?> </label>
                                    <div class="col-md-5">
                                        <input type="text" onkeyup="loadName()" value="<?php echo @$info['patient_phone'];?>" name="phone" id="phone" class="form-control" required> 
                                        <div class="p_name"></div>
                                    </div>
                                </div>
                                <input type="hidden" name="patient_id" value="<?php echo @$info['patient_id'];?>">
                                <input type="hidden" id="doctor_id" name="doctor_id" value="<?php echo $this->session->userdata('doctor_id')?>">

                                
                                <div class="form-group">
                                    <label class="col-md-3 control-label"><?php echo display('choose_serial');?></label>
                                    <div class="col-md-5 schedul">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label"><?php echo display('notes');?></label>
                                    <div class="col-md-5">
                                         <textarea name="problem" class="form-control" rows="3">
                                         </textarea>
                                          <span class="error-msg"><?php echo form_error('problem'); ?> </span>
                                    </div>
                                </div>


                          <div class="form-group row">
                                <div class="col-sm-offset-3 col-sm-6">
                                     <button type="reset" class="btn btn-danger"><?php echo display('reset')?></button>
                                    <button type="submit" class="btn btn-success"><?php echo display('submit')?></button>
                                </div>
                            </div>

                          </div>  
                        <?php echo form_close();?>
                    </div>
                </div>
            </div>
        </div>
    </div>            
    </section>
</div>





<script>


    // load patient name
    function loadName(){          
        var phone = document.getElementById('phone').value;


        if (phone!='') {
            $('input[type=submit]').prop('disabled', true);
            $.ajax({ 
                'url': '<?php echo base_url();?>' + 'admin/Ajax_controller/get_patinet_name/'+phone.trem(),
                'type': 'GET', //the way you want to send data to your URL
                'data': {'phone': phone },
                'success': function(data) { 
                    var container = $(".p_name");
                    if(data==0){
                        container.html("<?php echo display('patient_name_load_msg')?>");
                    }else{ 
                        container.html(data);
                        $('input[type=submit]').prop('disabled', false);
                    }
                }
            });
        };
    }



// load load schedul
    function loadSchedul(){

        var doctor_id = $('#doctor_id').val();
        var date     = $('#date').val();

        if (doctor_id!='') {
            $.ajax({ 
                'url': '<?php echo base_url();?>' + 'admin/Ajax_controller/get_schedul/'+doctor_id+'/'+date,
                'type': 'GET', //the way you want to send data to your URL
                'data': {'doctor_id': doctor_id },

                'success': function(data) {
                    var container = $(".schedul");
                    container.html(data);
                }
                });
            };
        } 
        
// sequence 
    function myBooking(data){
       var id = $("#t_" + data).text();
       document.getElementById("msg_c").innerHTML = "<div style=' color:green; font-size:20px;'><?php echo display('book_sequence')?> " +id +"</div>";
       document.getElementById('serial_no').value = id;        
    }     

</script>