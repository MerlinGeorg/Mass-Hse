<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

 <style type="text/css">
    .ui-autocomplete {
    z-index: 5000;
}
  </style>

<script type="text/javascript">
$(function(){
    $("#compregno").autocomplete({
        source: "<?php echo base_url('index.php/Company_area/search_compregno');?>/"
    });
});
</script>

<div class="page-header">
          <div class="row">
            <div class="col-md-4">
              <div class="media">
                <div class="media-body">
                  <div class="display-6">Company Area</div>
                  <!-- <p class="small text-muted">
                     Info Table Design</p> -->
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="pull-xs-right" role="toolbar">
                <!-- <a class="btn btn-icon icon-only"><i class="fa fa-rss"></i></a><a class="btn btn-icon icon-only"><i class="fa fa-star text-warning"></i></a> -->
               <!--  <button class="btn btn-secondary" type="button" data-toggle="collapse" href="#qmenu" aria-expanded="false" aria-controls="qmenu">Open menu</button> -->
                <button class="btn btn-success" data-toggle="modal" data-target="#trackermodal"  onclick="clearall();">Add Company</button>
              </div>
            </div>
          </div>
        </div>
        <div class="container-fluid">
          <div class="panel-wrapper">
            <div class="panel" >
              <div class="panel-body table-responsive" style="overflow-x:auto;" id="tablefillextend" >
               
              </div>
            </div>
          </div>
        </div>
        <!-- END PAGE CONTENT-->
        </div>
      <!-- END VIEW WAPPER-->

    </div>
    <!-- END MAIN WRAPPER-->
<div class="modal fade-scale" id="trackermodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="block-header bg-primary" id="modalcaption"></div>
          <div class="modal-body">
           <form method="POST" id="companyform">

              <div class="row m-b-2">
                    
                   
                   <div class="form-group col-sm-6">
                      <input type="hidden" id = 'compid' name="compid"/>
                      <h4 class="demo-sub-title">Company Registration No</h4>
                      <input class="form-control focus" type="text" required="required" onchange="getcompname();"  name="compregno" id="compregno">
                    </div>
                    

                    <div class="form-group col-sm-6">
                      
                      <h4 class="demo-sub-title">Company name</h4>
                      <input class="form-control focus" type="text" required="required" readonly="readonly" name="compname" id="compname">
                    </div>
                    
                    <div class="form-group col-sm-6">
                      <h4 class="demo-sub-title">Project Number</h4>
                       <input class="form-control focus " type="text" required="required" name="compproject" id="compproject">
                    </div>

                    
                     
                    

                    <div class="form-group col-sm-6">
                      <h4 class="demo-sub-title">Certification Type</h4>
                      <select class="form-control focus" onchange="showtypes();"  name="compctype" id="compctype">
                        <option value="">Select</option>
                        <option value="Service">Service</option>
                        <option value="Course">Course</option>
                      </select>
                    </div>
                    

                    
                    <div class="form-group col-sm-6" id="servtype">
                      <h4 class="demo-sub-title">Service Type</h4>
                      <select class="form-control focus"  name="compservice" id="compservice">
                        <option value="">Select</option>
                        <?php
                        foreach($serv as $row){?>
                          <option value="<?php echo $row->service_id;?>"><?php echo $row->service_name;?></option>
                    <?php } 
                        ?>
                      </select>
                    </div>


                    <div class="form-group col-sm-6" id="corstype">
                      <h4 class="demo-sub-title">Course Type</h4>
                      <select class="form-control focus"  name="compcourse" id="compcourse">
                        <option value="">Select</option>
                        <?php
                        foreach($cors as $row){?>
                          <option value="<?php echo $row->id;?>"><?php echo $row->course;?></option>
                    <?php } 
                        ?>
                      </select>
                    </div>

                    <div class="form-group col-sm-6">
                      <h4 class="demo-sub-title">Certificate</h4>
                      <input class="form-control focus" type="file"   name="image_file"  id="comp_file" >
                      <input type="hidden" name="image1" id="image1">
                       <div id="imagefill"></div>
                    </div>

                    <div class="form-group col-sm-6">
                      <h4 class="demo-sub-title">Site Location</h4>
                       <textarea class="form-control focus " type="text" required="required" name="complocation" id="complocation"></textarea>
                    </div>

                    


                    <!-- <input type="hidden" name="colgimage1" id="colgimage1"> -->

                     


                  </div>
                  
                   


                    
                  </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
            <button class="btn btn-primary"  type="submit" >Save</button>
            <!-- <button type="submit" class="form-control tn btn-primary btn-lg" name="save" value="save">Save</button> -->
          </div>
           </form>
        </div>
      </div>
    </div>
     <script src="<?php echo base_url(); ?>/templateadmin/assets/scripts/lib/jquery-1.11.3.min.js"></script>

     <script type="text/javascript">
      $( document ).ready(function() {
          gtsrtudets();

        $('#servtype').hide();
        $('#corstype').hide();

         

      });

      var chk = 0;
      function gtsrtudets(){
           $.ajax({
                method: "POST",
                url: "<?php echo base_url('index.php/Company_area/getcompany');?>/",
                data: '', // serializes the form's elements.
               success: function(data){
                // console.log(data);
                $('#tablefillextend').html(data);
                $('#tablefill').DataTable();
                
              }
             });
      }



         function clearall()
      {
        $('#modalcaption').text("Add Company");
        $('#compid').val('');
        $('#compregno').val('');
        $('#compname').val('');
        $('#compproject').val('');
        $('#compctype').val('');
        $('#compservice').val('');
        $('#compcourse').val('');
        $('#complocation').val('');  
        
        
         $('#comp_file').val('');
         $('#image1').val(''); 
          $('#imagefill').val('');  
       
        gtsrtudets();
        showtypes();
          
      }


      function showtypes()
      {
        var ctype = $('#compctype').val();

        if(ctype=='Service')
        {
          $('#servtype').show();
          $('#corstype').hide();
        }
        else if(ctype=='Course')
        {
          $('#servtype').hide();
          $('#corstype').show();
        }
        else
        {
           $('#servtype').hide();
           $('#corstype').hide();
        }  

      }

     
      

      $("#companyform").submit(function(e) {

        // alert("hi");
        e.preventDefault(); // avoid to execute the actual submit of the form.
        var form = $(this);
         $.ajax({
                method: "POST",
                url: "<?php echo base_url('index.php/Company_area/add_Company');?>/",
              data: new FormData(this),
              processData:false,
                     contentType:false,
                     cache:false,
              // serializes the form's elements.
               success: function(data){

                alert(data);
               if(data == "success")
               {
                  notifyresult('Data Saved','success');
                  $('#trackermodal').modal('hide');
                  gtsrtudets();
               }
               else if(data=='projectnoexist')
               {
                 notifyresult('Project number already exist','danger');
                  $('#trackermodal').modal('hide');
               }
               
               else
               {
                  notifyresult('Error','danger');
                  $('#trackermodal').modal('hide');
               }

              // show response from the php script.            
              }
             });
      });



      function editcomp(id){
        // alert(id);
        $('#modalcaption').text("Edit Admission");
        $.ajax({
              method: "POST",
              url: "<?php echo base_url('index.php/Company_area/editcompany');?>/",
              data: {id:id}, // serializes the form's elements.
             success: function(data)
             {
               
               

              var res = JSON.parse(data);

              

              // var new_course = res.course_name;

              // alert(res.student_id);

              gtsrtudets();
              // console.log(data);
              $('#compid').val(res.company_id);
              $('#compname').val(res.company_name);
              $('#compproject').val(res.company_project);
              $('#compctype').val(res.company_certtype);
              $('#compservice').val(res.company_serv);
              $('#compcourse').val(res.company_cors);
              $('#complocation').val(res.company_location);
             
              

               
              

              $('#image1').val(res.company_certificate); 
              $('#imagefill').html('<a  href="<?php echo base_url();?>/uploads/'+res.company_certificate+'"><img  style="width:250px;height:200px;" title="click to see certificate" src="<?php echo base_url();?>/uploads/dfile.png"></a>') 
              
              
               

                    }
                });
              }
      
      function deletecomp(id,img)
      {

        var result = confirm("Are you want to delete?");
          if (result) {
              $.ajax({
              method: "POST",
              url: "<?php echo base_url('index.php/Company_area/delete_comp');?>/",
              data: {id:id,img:img}, // serializes the form's elements.
             success: function(data){
              alert(data);
              if($.trim(data) == "success"){
                  notifyresult('Data Deleted','success');
                  gtsrtudets();
               }else{
                  notifyresult('Error','danger');
                  gtsrtudets();
               }
               

            }
        });
          }
        
      }

      // function priority_set1(id,status)
      //     {
      //       // alert("hai");
      //      $.ajax({
      //         method: "POST",
      //         url: "<?php echo base_url('index.php/Admin_college/pro_check_colg');?>/",
      //         data: {id:id,status:status}, // serializes the form's elements.
      //        success: function(data){
      //         // if(data == "high"){
      //         //     notifyresult('Data Deleted','success');
      //         //     getusers();
      //         //  }else{
      //         //     notifyresult('Error','danger');

      //         window.location.href="";
      //         getcollege();
      //          }
      //          });
      //     }

    function getcompname()
    {
      alert('hai');
      var cregno = $('#compregno').val();


              $.ajax({
              method: "POST",
              url: "<?php echo base_url('index.php/Company_area/getcname');?>/",
              data: {cregno:cregno}, // serializes the form's elements.
             success: function(data){
              // alert(data);
              if(data=="No match found")
              {
                 alert("Register number not exist");
                 $('#compname').val('');
              }
              else
              {
                $('#compname').val(data);
              }
              
               

            }
        });
    }
         




        
    </script>
   
   