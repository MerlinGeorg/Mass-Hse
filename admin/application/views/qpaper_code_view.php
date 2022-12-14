<div class="page-header">
          <div class="row">
            <div class="col-md-4">
              <div class="media">
                <div class="media-body">
                  <div class="display-6">Questions Paper Code</div>
                  <!-- <p class="small text-muted">
                     Info Table Design</p> -->
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="pull-xs-right" role="toolbar">
                <!-- <a class="btn btn-icon icon-only"><i class="fa fa-rss"></i></a><a class="btn btn-icon icon-only"><i class="fa fa-star text-warning"></i></a> -->
               <!--  <button class="btn btn-secondary" type="button" data-toggle="collapse" href="#qmenu" aria-expanded="false" aria-controls="qmenu">Open menu</button> -->
                <button class="btn btn-success" data-toggle="modal" data-target="#trackermodal"  onclick="clearall();">Add Questions</button>
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
           <form method="POST" id="qpapercodecform">

              <div class="row m-b-2">
                    


                    <div class="form-group col-sm-6">
                      <input type="hidden" id = 'qcodid' name="qcodid"/>
                      <h4 class="demo-sub-title">Question Paper Code</h4>
                      <input class="form-control focus" type="text" required="required" name="qcode" id="qcode">
                    </div>

                    <div class="form-group col-sm-6">
                      
                      <h4 class="demo-sub-title">Exam Name</h4>
                      <input class="form-control focus" type="text" required="required" name="qcodename" id="qcodename">
                    </div>

                    <div class="form-group col-sm-6">
                      <h4 class="demo-sub-title">Course</h4>
                      <select class="form-control focus"  name="qcodecourse" id="qcodecourse">
                        <option value="">Select</option>
                        <?php
                        foreach($cors as $row){?>
                          <option value="<?php echo $row->id;?>"><?php echo $row->course;?></option>
                    <?php } 
                        ?>
                      </select>
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
          gtqpaper();


          

      });
      var chk = 0;
      function gtqpaper(){
           $.ajax({
                method: "POST",
                url: "<?php echo base_url('index.php/Qpaper_code/display_qpaper_list');?>/",
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
        $('#modalcaption').text("Add Admission");
        $('#qcodid').val('');
        $('#qcode').val('');
        $('#qcodename').val('');
        $('#qcodecourse').val('');
        
        
       
        gtqpaper();
        // $('#userfullname').val('');
        // $('#userfullname').val('');    
      }
      

      $("#qpapercodecform").submit(function(e) {

        // alert("hi");
        e.preventDefault(); // avoid to execute the actual submit of the form.
        var form = $(this);
         $.ajax({
                method: "POST",
                url: "<?php echo base_url('index.php/Qpaper_code/insertQcode');?>/",
              data: new FormData(this),
              processData:false,
                     contentType:false,
                     cache:false,
              // serializes the form's elements.
               success: function(data){

                console.log(data);
               if($.trim(data) == "true")
               {
                  notifyresult('Data Saved','success');
                  $('#trackermodal').modal('hide');
                  gtqpaper();
               }
               else if($.trim(data) == "exist")
               {
                 notifyresult('Qestion paper code already exist','danger');
                  $('#trackermodal').modal('hide');
                  gtqpaper();

               }
              
               else
               {
                  notifyresult('Error','danger');
                  $('#trackermodal').modal('hide');
                  gtqpaper();

               }

              // show response from the php script.            
              }
             });
      });

      // $('#submit').on('click',function(){
      //   var inputFile=$('input[name=file]');
      //   var fileToUpload=inputFile[0].files[0];
      //   var other_data = $('#frm_imageuupload').serializeArray();
      //   var formdata=new FormData();
      //   formdata.append(fileToUpload);
      //   formdata.append(other_data);
      //       $.ajax({
      //         url:"<?php echo base_url('index.php/Categoriesadmin/do_upload');?>",
      //         method:'POST',
      //         data: formdata,
      //         contentType:false,
              
      //         processData:false,
      //         success:function(data)
      //         {
      //           if (data== 'true'){   
      //          window.location.reload();
      //       }
      //       else{
      //          alert("Pls Try Again");
      //         }
      //       }
      //       });
      //     }
      //   );


      // $(document).ready(function(){
 
      //   $('#submit').submit(function(e){
      //       e.preventDefault(); 
      //            $.ajax({
      //                url:'<?php echo base_url();?>index.php/Admin_board/do_upload',
      //                type:"post",
      //                data:new FormData(this),
      //                processData:false,
      //                contentType:false,
      //                cache:false,
      //                async:false,
      //                 success: function(data){
      //                     alert("Upload Image Successful.");
      //              }
      //            });
      //       });
      
      



      function editqpaper(id){
        // alert(id);
        $('#modalcaption').text("Edit Admission");
        $.ajax({
              method: "POST",
              url: "<?php echo base_url('index.php/Qpaper_code/editqpaper');?>/",
              data: {id:id}, // serializes the form's elements.
             success: function(data)
             {
               
               

              var res = JSON.parse(data);

              

              // var new_course = res.course_name;

              // alert(res.student_id);

              gtqpaper();

              // console.log(data);
              $('#qcodid').val(res.qpaper_id);
              $('#qcode').val(res.qpaper_code);
              $('#qcodename').val(res.qpaper_exam_name);
              $('#qcodecourse').val(res.qpaper_course);
              
              
               

                    }
                });
              }
      
      function deleteqpaper(id){
        var result = confirm("Are you want to delete?");
          if (result) {
              $.ajax({
              method: "POST",
              url: "<?php echo base_url('index.php/Qpaper_code/delete_qpaper');?>/",
              data: {id:id}, // serializes the form's elements.
             success: function(data){
              if(data == "success"){
                  notifyresult('Data Deleted','success');
                 gtqpaper();

               }else{
                  notifyresult('Error','danger');
                  gtqpaper();

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
              url: "<?php echo base_url('index.php/Qpaper_code/change_stat');?>/",
              data: {id:id,status:status}, // serializes the form's elements.
             success: function(data){
            
              
              gtqpaper();

               }
               });
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
   
   