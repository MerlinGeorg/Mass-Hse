<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
 <style type="text/css">
    .ui-autocomplete {
    z-index: 5000;
}
  </style>

<script>
$(function() {
    $("#qcode").autocomplete({
        source: "<?php echo base_url('index.php/Admin_qpaper/search_qpapercode');?>/"
    });
});
</script>





<div class="page-header">
          <div class="row">
            <div class="col-md-4">
              <div class="media">
                <div class="media-body">
                  <div class="display-6">Questions</div>
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
           <form method="POST" id="qpaperform">

              <div class="row m-b-2">
                    

                    <div class="col-md-12">
                    <div class="form-group col-sm-6">
                      <input type="hidden" id = 'qid' name="qid"/>
                      <h4 class="demo-sub-title">Question Paper Code</h4>
                      <input class="form-control focus" type="text" required="required" name="qcode" id="qcode" onchange="getqparedtls();">
                    </div>

                    <div class="form-group col-sm-6">
                      
                      <h4 class="demo-sub-title">Exam Name</h4>
                      <input class="form-control focus" readonly="readonly" type="text" required="required" name="qxam" id="qxam">
                    </div>
                   </div>
                    
                    <div class="col-md-12"> 
                    <div class="form-group col-sm-6">
                      <h4 class="demo-sub-title">Course</h4>
                      <input type="hidden" name="qcourse" id="qcourse">
                      <input class="form-control focus " type="text" readonly="readonly" name="qcoursename" id="qcoursename">
                    </div>
                    
                    <div class="form-group col-sm-6">
                      <h4 class="demo-sub-title">Question</h4>
                       <textarea class="form-control focus " required="required" name="qquestion" id="qquestion"></textarea>
                    </div>
                  </div>

                    <div class="col-md-12" >
                    <div class="form-group col-sm-6" style="height: 57.88px">
                      <h4 class="demo-sub-title">Option A</h4>
                       <textarea class="form-control focus " required="required" name="qoptiona" id="qoptiona"></textarea>
                    </div>


                    <div class="form-group col-sm-6" style="height: 57.88px">
                      <h4 class="demo-sub-title">Option B</h4>
                       <textarea class="form-control focus " required="required" name="qoptionb" id="qoptionb"></textarea>
                    </div>
                  </div>

                    <div class="col-md-12" style="margin-top: 10px">
                    <div class="form-group col-sm-6" style="height: 57.88px">
                      <h4 class="demo-sub-title">Option C</h4>
                       <textarea class="form-control focus " required="required" name="qoptionc" id="qoptionc"></textarea>
                    </div>

                    <div class="form-group col-sm-6" style="height: 57.88px">
                      <h4 class="demo-sub-title">Option D</h4>
                       <textarea class="form-control focus " required="required" name="qoptiond" id="qoptiond"></textarea>
                    </div>
                  </div>

                  <div class="col-md-12" style="margin-top: 10px">
                    <div class="form-group col-sm-6" style="height: 57.88px">
                      <h4 class="demo-sub-title">Answer</h4>
                       <select class="form-control focus " name="qanswer" id="qanswer" required="required">
                         <option value="">Select</option>
                         <option value="Option_A">Option_A</option>
                         <option value="Option_B">Option_B</option>
                         <option value="Option_C">Option_C</option>
                         <option value="Option_D">Option_D</option>

                       </select>
                    </div>
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
          gtquestions();


          

      });
      var chk = 0;
      function gtquestions(){
           $.ajax({
                method: "POST",
                url: "<?php echo base_url('index.php/Admin_qpaper/get_questions');?>/",
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
        $('#modalcaption').html("Add Question");
        $('#qid').val('');
        $('#qcode').val('');
        $('#qxam').val('');
        $('#qcourse').val('');
        $('#qquestion').val('');
        $('#qoptiona').val('');
        $('#qoptionb').val('');  
        $('#qoptionc').val('');
        $('#qoptiond').val('');
        $('#qanswer').val('');
        
        
        
        
        gtquestions();
        // $('#userfullname').val('');
        // $('#userfullname').val('');    
      }
      

      $("#qpaperform").submit(function(e) {

        // alert("hi");
        e.preventDefault(); // avoid to execute the actual submit of the form.
        var form = $(this);
         $.ajax({
                method: "POST",
                url: "<?php echo base_url('index.php/Admin_qpaper/add_question');?>/",
              data: new FormData(this),
              processData:false,
                     contentType:false,
                     cache:false,
              // serializes the form's elements.
               beforeSend: function() {
        // setting a timeout
              $('#qcourse').attr('disabled',false);
              },
               success: function(data){

                alert(data);
               if($.trim(data) == "true")
               {
                  notifyresult('Data Saved','success');
                  $('#trackermodal').modal('hide');
                  gtquestions();
               }
               
               else
               {
                  notifyresult('Error','danger');
                  $('#trackermodal').modal('hide');

                  gtquestions();
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
      
      



      function editquestion(id){
        // alert(id);
        $('#modalcaption').html("Edit Question");
        $.ajax({
              method: "POST",
              url: "<?php echo base_url('index.php/Admin_qpaper/editquestions');?>/",
              data: {id:id}, // serializes the form's elements.
             success: function(data)
             {
               
               

              var res = JSON.parse(data);

              

              // var new_course = res.course_name;

              // alert(res.student_id);

            gtquestions();
              // console.log(data);
              $('#qid').val(res.questions_id);
              $('#qcode').val(res.questions_qcode);
              $('#qxam').val(res.questions_xam);
              $('#qcourse').val(res.questions_course);
              $('#qcoursename').val(res.course_name);
              $('#qquestion').val(res.questions_question);
              $('#qoptiona').val(res.Option_A);
              $('#qoptionb').val(res.Option_B);  
              $('#qoptionc').val(res.Option_C);
              $('#qoptiond').val(res.Option_D);
              $('#qanswer').val(res.questions_answer);
              
              
              
               

                    }
                });
              }
      
      function deletequestion(id){
        var result = confirm("Are you want to delete?");
          if (result) {
              $.ajax({
              method: "POST",
              url: "<?php echo base_url('index.php/Admin_qpaper/delete_quest');?>/",
              data: {id:id}, // serializes the form's elements.
             success: function(data){
              if(data == "success"){
                  notifyresult('Data Deleted','success');
                 gtquestions();
               }else{
                  notifyresult('Error','danger');
                  gtquestions();
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
              url: "<?php echo base_url('index.php/Admin_qpaper/stat_check');?>/",
              data: {id:id,status:status}, // serializes the form's elements.
             success: function(data){
              // if(data == "high"){
              //     notifyresult('Data Deleted','success');
              //     getusers();
              //  }else{
              //     notifyresult('Error','danger');

             
              gtquestions();
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

  function getqparedtls()
  {
    var qcode = document.getElementById('qcode').value;

    // alert(qcode);

      $.ajax({
                method: "POST",
                url: "<?php echo base_url('index.php/Admin_qpaper/getqpaperdtls');?>/",
                data: {qcode:qcode}, 
                // serializes the form's elements.
                
               success: function(data){

                
               
              var res = JSON.parse(data);
                res
                alert(data);

              $('#qxam').val(res.qpaper_exam_name);
              $('#qcourse').val(res.qpaper_course);
               $('#qcoursename').val(res.course_name);
              // $('#qcourse').attr('disabled',true);
             
              gtquestions();
                
              }
             });
  }


        
    </script>
   
   