
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
                <button class="btn btn-success" data-toggle="modal" data-target="#trackermodal"  onclick="clearall();">Add trainer</button>
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
           <form method="POST" id="trainerform">

              <div class="row m-b-2">
                    
                    

                    <!-- <div class="form-group col-sm-6">
                      
                      <h4 class="demo-sub-title">Civil Id</h4>
                      <input class="form-control focus" type="text" required="required" minlength="12" placeholder="unique" maxlength="12" name="tcivilid" id="tcivilid">
                    </div> -->

                    <div class="form-group col-sm-6">
                      <input type="hidden" id = 'meetid' name="meetid"/>
                      <h4 class="demo-sub-title">Meeting title</h4>
                      <input class="form-control focus" type="text" required="required" name="mtitle" id="mtitle">
                    </div>
                    
                    <div class="form-group col-sm-6">
                      <h4 class="demo-sub-title">Joining link</h4>
                      <input class="form-control focus" type="text" placeholder="complete join link" required="required" name="mlink" id="mlink">
                    </div>

                    <div class="form-group col-sm-6" style="height: 57.88px">
                      <h4 class="demo-sub-title">Date</h4>
                      <input class="form-control focus" type="date" required="required" name="mdate" id="mdate">
                    </div>


                    

                    <div id="sample2" class="form-group col-sm-6">
                      
                      <h4 class="demo-sub-title">Time</h4>
                      <input class="form-control focus" type="time" placeholder="unique mail id" required="required" name="mtime" id="mtime">
                    </div>

                    
                    <div class="form-group col-sm-6">
                      <h4 class="demo-sub-title">Course</h4>
                      
                      <select class="form-control focus"  name="mcourse" id="mcourse">
                        <option value="">Select</option>
                        <?php
                        foreach($corslist as $row){?>
                          <option value="<?php echo $row->id;?>"><?php echo $row->course;?></option>
                    <?php } 
                        ?>
                      </select>

                    </div>


                    


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
          gtzcls();
          

          
          

      });
      var chk = 0;
      function gtzcls(){
           $.ajax({
                method: "POST",
                url: "<?php echo base_url('index.php/Admin_zoomclass/getzoomcls');?>/",
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
        $('#modalcaption').text("Add Meeting");
        $('#meetid').val('');
        $('#mtitle').val('');
        $('#mlink').val('');
        $('#mdate').val('');
        $('#mtime').val('');  
        $('#mcourse').val('');
        
        
        
        // regno_pas();
        gtzcls();
        // $('#userfullname').val('');
        // $('#userfullname').val('');    
      }
      

      $("#trainerform").submit(function(e) {

        // alert("hi");
        e.preventDefault(); // avoid to execute the actual submit of the form.
        var form = $(this);
         $.ajax({
                method: "POST",
                url: "<?php echo base_url('index.php/Admin_zoomclass/insert_meeting');?>/",
              data: new FormData(this),
              processData:false,
                     contentType:false,
                     cache:false,
              // serializes the form's elements.
               success: function(data){

                // alert(data);
               if($.trim(data) == "success")
               {
                  notifyresult('Data Saved','success');
                  $('#trackermodal').modal('hide');
                  gtzcls();
               }
              
               else
               {
                  notifyresult('failed','danger');
                  $('#trackermodal').modal('hide');
                  gtzcls();
               }

              // show response from the php script.            
              }
             });
      });

      

      function editmeet(id){
        // alert(id);
        $('#modalcaption').text("Edit Trainer");
        $.ajax({
              method: "POST",
              url: "<?php echo base_url('index.php/Admin_zoomclass/editmeeting');?>/",
              data: {id:id}, // serializes the form's elements.
             success: function(data)
             {
        
              var res = JSON.parse(data);

      
              gtzcls();
              // console.log(data);
              $('#meetid').val(res.meeting_id);
              $('#mtitle').val(res.meeting_title);
              $('#mlink').val(res.meeting_link);
              $('#mdate').val(res.meeting_date);
              $('#mtime').val(res.meeting_time);
              $('#mcourse').val(res.meeting_course);
              
              
              
               

                    }
                });
              }
      
      function deletemeet(id){
        var result = confirm("Are you want to delete?");
          if (result) {
              $.ajax({
              method: "POST",
              url: "<?php echo base_url('index.php/Admin_zoomclass/delete_meet');?>/",
              data: {id:id}, // serializes the form's elements.
             success: function(data){
              // alert(data);
              if($.trim(data) == "success"){
                  notifyresult('Data Deleted','success');
                  gtzcls();
               }else{
                  notifyresult('Error','danger');
                  gtzcls();
               }
               

            }
        });
          }
        
      }

     

          // function regno_pas()
          //       {
          //         $.ajax({
          //       method: "POST",
          //       url: "<?php echo base_url('index.php/Admin_college/auto_regno');?>/",
          //      // data: form.serialize(), // serializes the form's elements.
          //       data:{}, 
          //      success: function(data){

          //       alert(data);

          //       $('#trackermodal').modal('show');
              
          //        $("#regno").val(data);
                        
          //     }
          //    });
          //   }  




        
    </script>
   
   