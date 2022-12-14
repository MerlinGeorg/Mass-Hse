<div class="page-header">
          <div class="row">
            <div class="col-md-4">
              <div class="media">
                <div class="media-body">
                  <div class="display-6">Student Admission</div>
                  <!-- <p class="small text-muted">
                     Info Table Design</p> -->
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="pull-xs-right" role="toolbar">
                <!-- <a class="btn btn-icon icon-only"><i class="fa fa-rss"></i></a><a class="btn btn-icon icon-only"><i class="fa fa-star text-warning"></i></a> -->
               <!--  <button class="btn btn-secondary" type="button" data-toggle="collapse" href="#qmenu" aria-expanded="false" aria-controls="qmenu">Open menu</button> -->
                <button class="btn btn-success" data-toggle="modal" data-target="#trackermodal"  onclick="clearall();">Add Meterial</button>
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
           <form method="POST" id="moduleform">

              <div class="row m-b-2">
                    
                    <div class="form-group col-sm-6">
                      
                      <h4 class="demo-sub-title">Module name</h4>
                      <input type="hidden" name="moduleid" id="moduleid">
                      <input class="form-control focus" type="text" required="required" name="modulename" id="modulename">
                    </div>

                    <div class="form-group col-sm-6">
                      
                      <h4 class="demo-sub-title">Module number</h4>
                      <input class="form-control focus" type="number" required="required" name="modulenumber" id="modulenumber">
                    </div>

                   


                    <div class="form-group col-sm-6">
                      <h4 class="demo-sub-title">Module course</h4>
                      <select class="form-control focus"  name="modulecourse" id="modulecourse">
                        <option value="">Select</option>
                        <?php
                        foreach($cors as $row){?>
                          <option value="<?php echo $row->id;?>"><?php echo $row->course;?></option>
                        <?php } 
                        ?>
                      </select>
                    </div>

                    <div class="form-group col-sm-6">
                      <h4 class="demo-sub-title">Module file</h4>
                      <input class="form-control focus" type="file" name="image_file"  id="modulefile" >
                      <input type="hidden" name="image1" id="image1">
                       <div id="imagefill"></div>
                    </div>


                    <div class="form-group col-sm-6">
                      <h4 class="demo-sub-title">Module video</h4>
                      <input class="form-control focus" type="file" name="image_file1"  id="modulevideo" >
                      <input type="hidden" name="image2" id="image2">
                       <div id="imagefill1"></div>
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
          gtmeterials();


          

      });
      var chk = 0;
      function gtmeterials(){
           $.ajax({
                method: "POST",
                url: "<?php echo base_url('index.php/Study_meterial/display_meterials');?>/",
                data: '', // serializes the form's elements.
               success: function(data){
                // console.log(data);
                $('#tablefillextend').html(data);
                $('#tablefill').DataTable();
                // if(chk == 0){
                  
                // var table = $('#tablefill');
                //   table.DataTable({
                //   paging: true,
                //   searching: true,
                //   ordering: true,
                //   autoWidth: false,
                //   info: false,
                //   stateSave: false,
                //   responsive: true
                //   });
                
                // }
                
                // var table = $('#tablefill').DataTable();
                
              // show response from the php script.            
              }
             });
      }

      function clearall()
      {
        $('#modalcaption').text("Add Admission");
        $('#moduleid').val('');
        $('#modulename').val('');
        $('#modulenumber').val('');
        $('#modulecourse').val('');
        
        

        $('#modulefile').val('');
        $('#image1').val('');
        $('#imagefill').val('');
        
        
        
        gtmeterials();
          
      }
      

      $("#moduleform").submit(function(e) {

        // alert("hi");
        e.preventDefault(); // avoid to execute the actual submit of the form.
        var form = $(this);
         $.ajax({
                method: "POST",
                url: "<?php echo base_url('index.php/Study_meterial/add_module');?>/",
              data: new FormData(this),
              processData:false,
                     contentType:false,
                     cache:false,
              // serializes the form's elements.
               success: function(data){

                alert(data);
               if(data == "success")
               {
                  notifyresult('Module added','success');
                  $('#trackermodal').modal('hide');
                  gtmeterials();
               }

               else if(data=="exist")
               {
                 notifyresult('Module number exist for this course','danger');
                  $('#trackermodal').modal('hide');
                  gtmeterials();
               }
               
               else
               {
                  notifyresult('Something wend wrong','danger');
                  $('#trackermodal').modal('hide');
                  gtmeterials();
               }

                         
              }
             });
      });

     

      function editmeterial(id){
        // alert(id);
        $('#modalcaption').text("Edit Meterial");
        $.ajax({
              method: "POST",
              url: "<?php echo base_url('index.php/Study_meterial/editmeterial');?>/",
              data: {id:id}, // serializes the form's elements.
             success: function(data)
             {
               
               // alert(data);

              var res = JSON.parse(data);

              

              // var new_course = res.course_name;

              // alert(res.student_id);

              gtmeterials();
              // console.log(data);
              $('#moduleid').val(res.module_id);
              $('#modulename').val(res.module_name);
              $('#modulenumber').val(res.module_no);
              $('#modulecourse').val(res.module_course);
              

               
              

              $('#image1').val(res.module_file); 
              $('#imagefill').html('<a href="<?php echo base_url();?>/uploads/'+res.module_file+'"><img  style="width:250px;height:200px;" title="click to see module" src="<?php echo base_url();?>/uploads/demofile.png"></a>');


              $('#image2').val(res.module_video); 
              $('#imagefill1').html('<video width="250" height="200" controls="controls"><source src="<?php echo base_url();?>uploads/'+res.module_video+'" type="video/mp4"></video>');  
              
              
               

                    }
                });
              }
      
      function deletemeterial(id,img){
        var result = confirm("Are you want to delete?");
          if (result) {
              $.ajax({
              method: "POST",
              url: "<?php echo base_url('index.php/Study_meterial/delete_meterial');?>/",
              data: {id:id,img:img}, // serializes the form's elements.
             success: function(data){
              if(data == "success"){
                  notifyresult('Data Deleted','success');
                  gtmeterials();
               }else{
                  notifyresult('Error','danger');
                  gtmeterials();
               }
               

            }
        });
          }
        
      }

      function priority_set1(id,status)
          {
            // alert("hai");
           $.ajax({
              method: "POST",
              url: "<?php echo base_url('index.php/Admin_college/pro_check_colg');?>/",
              data: {id:id,status:status}, // serializes the form's elements.
             success: function(data){
              // if(data == "high"){
              //     notifyresult('Data Deleted','success');
              //     getusers();
              //  }else{
              //     notifyresult('Error','danger');

              window.location.href="";
              getcollege();
               }
               });
          }


          function regno_pas()
                {
                  $.ajax({
                method: "POST",
                url: "<?php echo base_url('index.php/Admin_college/auto_regno');?>/",
               // data: form.serialize(), // serializes the form's elements.
                data:{}, 
               success: function(data){

                alert(data);

                $('#trackermodal').modal('show');
              
                 $("#regno").val(data);
                        
              }
             });
            }  




        
    </script>
   
   