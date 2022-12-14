<div class="page-header">
          <div class="row">
            <div class="col-md-4">
              <div class="media">
                <div class="media-body">
                  <div class="display-6">Exam Results</div>
                  <!-- <p class="small text-muted">
                     Info Table Design</p> -->
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="pull-xs-right" role="toolbar">
                <!-- <a class="btn btn-icon icon-only"><i class="fa fa-rss"></i></a><a class="btn btn-icon icon-only"><i class="fa fa-star text-warning"></i></a> -->
               <!--  <button class="btn btn-secondary" type="button" data-toggle="collapse" href="#qmenu" aria-expanded="false" aria-controls="qmenu">Open menu</button> -->
                <!-- <button class="btn btn-success" data-toggle="modal" data-target="#trackermodal"  onclick="clearall();">Add Meterial</button> -->
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
          gtxam();


          

      });
      var chk = 0;
      function gtxam(){
           $.ajax({
                method: "POST",
                url: "<?php echo base_url('index.php/Admin_xam/display_xamres');?>/",
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

                // alert(data);
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
   
   