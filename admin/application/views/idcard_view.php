

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
    $("#idpassno").autocomplete({
        source: "<?php echo base_url('index.php/Idcard/search_pass');?>/"
    });
});
</script>





<div class="page-header">
          <div class="row">
            <div class="col-md-4">
              <div class="media">
                <div class="media-body">
                  <div class="display-6">Student Certification</div>
                  <!-- <p class="small text-muted">
                     Info Table Design</p> -->
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="pull-xs-right" role="toolbar">
                <!-- <a class="btn btn-icon icon-only"><i class="fa fa-rss"></i></a><a class="btn btn-icon icon-only"><i class="fa fa-star text-warning"></i></a> -->
               <!--  <button class="btn btn-secondary" type="button" data-toggle="collapse" href="#qmenu" aria-expanded="false" aria-controls="qmenu">Open menu</button> -->
                <button class="btn btn-success" data-toggle="modal" data-target="#trackermodal"  onclick="clearall();">Creat student ID</button>
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
           <form method="POST" action="../../hse_idcard_pdf.php" id="idcardform">

              <div class="row m-b-2">
                    
                   

                    <div class="form-group col-sm-6">
                      <input type="hidden" id = 'idcardid' name="idcardid"/>
                      <h4 class="demo-sub-title">Passport No</h4>
                      <input class="form-control focus" type="text" required="required" 
                      onchange="idgetsname()" name="idpassno" id="idpassno" placeholder="Search student">
                    </div>
                    
                    <div class="form-group col-sm-6">
                      
                      <h4 class="demo-sub-title">Student name</h4>
                      <input class="form-control focus"  type="text" name="idname" readonly="readonly" id="idname">
                    </div>


                    <div class="form-group col-sm-6">
                      
                      <h4 class="demo-sub-title">Training Topic</h4>
                      <!--<input class="form-control focus" type="text" required="required" name="cert_name" id="cert_name">-->
                      <select class="form-control focus" required="required" name="idcorse" id="idcorse" onchange="getcoursecode();">
                          <option>select</option>
                          <?php foreach($cors as $row){ ?>
                          <option value="<?php echo $row->course ?>"><?php echo $row->course ?></option>
                          <?php } ?>
                      </select>
                    </div>
                    

                    <div class="form-group col-sm-6">
                      <h4 class="demo-sub-title">Training Code</h4>
                      <input class="form-control focus" type="text" readonly="readonly"  name="idtraincode"  id="idtraincode" >
                      <!-- <input type="hidden" name="image1" id="image1">
                       <div id="imagefill"></div> -->
                    </div>

                    <div class="form-group col-sm-6">
                      <h4 class="demo-sub-title">Completion Date</h4>
                      <input class="form-control focus" type="date"   name="idcomdate"  id="idcomdate.
                      " >
                      <!-- <input type="hidden" name="image1" id="image1">
                       <div id="imagefill"></div> -->
                    </div>
                   
                    <div class="form-group col-sm-6">
                      <h4 class="demo-sub-title">Student photo</h4>
                      <input class="form-control focus" type="file"   name="file"  id="file" >
                      <input type="hidden" name="uploaded_image_name" id="uploaded_image_name">
                       <div id="imagefill"></div>
                    </div>

                     


                  </div>
                  
                   


                    
                  </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
           <!--  <a href="../../test.php?" class="btn btn-primary">view certificate</a> -->
            <button class="btn btn-primary" disabled="disabled" id="subbtn" type="submit" >Save</button>
            <!-- <button type="submit" class="form-control tn btn-primary btn-lg" name="save" value="save">Save</button> -->
          </div>
           </form>
        </div>
      </div>
    </div>
     <script src="<?php echo base_url(); ?>/templateadmin/assets/scripts/lib/jquery-1.11.3.min.js"></script>

     <script type="text/javascript">
      $( document ).ready(function() {
          getcert();


          $(document).on('change','#file',function(){
      var property = document.getElementById("file").files[0];
      var image_name = property.name;
      var image_extension = image_name.split('.').pop().toLowerCase();
      if(jQuery.inArray(image_extension,['png','jpeg','jpg'])== -1)
      {
        alert('Invalid file');
      }
      var image_size = property.size;
      if(image_size > 3000000)
      {
        alert('file size is big');
      }
      else
      {
        var form_data = new FormData();
        form_data.append("file",property);
        $.ajax({
                method: "POST",
                url: "../../testupload.php",
                data: form_data,
                processData:false,
                     contentType:false,
                     cache:false,
                     // beforeSend:function(){
                     //  $('#uploaded_image').html("<label>image upload..</label>");
                     // },
                     success: function(data){

                      // alert(data);
                         
                         $('#uploaded_image_name').val(data);

                          $('#subbtn').prop('disabled', false);
                     }
                  }); 
      }

    })



      });
      var chk = 0;
      function getcert(){
           $.ajax({
                method: "POST",
                url: "<?php echo base_url('index.php/Idcard/get_idcard');?>/",
                data: '', // serializes the form's elements.
               success: function(data){
                // console.log(data);
                $('#tablefillextend').html(data);
                $('#tablefill').DataTable();
                // if(chk == 0){
                  
               
              }
             });
      }

      
      function idgetsname()
      {
        var passno = document.getElementById("idpassno").value;
        
        // alert(s_rg);

        $.ajax({
                method: "POST",
                url: "<?php echo base_url('index.php/Idcard/get_studentname');?>/",
                data: {passno:passno}, // serializes the form's elements.
               success: function(data){
                // alert(data);
                  
                 $('#idname').val(data); 
               
              }
             });

      } 



      function getcoursecode()
      {
         var corsename = $('#idcorse').val();
        
        // alert(corsename);  

        $.ajax({
                method: "POST",
                url: "<?php echo base_url('index.php/Certification/get_corscode');?>/",
                data: {corsename:corsename}, // serializes the form's elements.
               success: function(data){
                // alert(data);
                  
                 $('#idtraincode').val(data); 
               
              }
             });
      }
      


      function clearall()
      {
        $('#modalcaption').text("Add certification");
        $('#cerid').val('');
        $('#cregno').val('');
        $('#cername').val(''); 
        $('#cert_name').val('');
        $('#cert_file').val('');

        $('#image1').val('');
        
      

        getcert();
        // $('#userfullname').val('');
        // $('#userfullname').val('');    
      }
      

      // $("#idcard_file").submit(function(e) {

      //   // alert("hi");
      //   e.preventDefault(); // avoid to execute the actual submit of the form.
      //   var form = $(this);
      //    $.ajax({
      //           method: "POST",
      //           url: "../../test.php",
      //         data: new FormData(this),
      //         processData:false,
      //                contentType:false,
      //                cache:false,
      //         // serializes the form's elements.
      //          success: function(data){

      //           alert(data);
               
      //          else if(data == "exist")
      //          {
      //             notifyresult('Priority exist','danger');
      //             $('#trackermodal').modal('hide');
      //          }
      //          else{
      //             notifyresult('Error','danger');
      //             $('#trackermodal').modal('hide');
      //          }

      //         show response from the php script.            
      //         }
      //        });
      // });


      

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
      
      



      // function editcertficate(id)
      // {
      //   // alert(id);
      //   $('#modalcaption').text("Edit Banner");
      //   $.ajax({

      //         method: "POST",
      //         url: "<?php echo base_url('index.php/Idcard/editidcard');?>/",
      //         data: {id:id}, // serializes the form's elements.
      //        success: function(data)
      //        {
               
               

      //         var res = JSON.parse(data);

              

      //         // var new_course = res.course_name;

      //         // alert(res.student_id);

      //         getcert();
      //         // console.log(data);
      //         $('#cerid').val(res.cert_id);
      //         $('#cregno').val(res.st_regno);
      //         $('#cername').val(res.st_name);
      //         $('#cert_name').val(res.st_cert_name);  
              
      //         // $('#colgimage_file').val(res.picture);

               
              

      //         $('#image1').val(res.cert_file); 
      //         $('#imagefill').html('<img  style="width:250px;height:200px;"src="<?php echo base_url();?>unnamed.png">') 
              
              
               

      //               }
      //           });
      //         }
      
      function deleteidcard(id,img){
        var result = confirm("Are you want to delete?");
          if (result) {
              $.ajax({
              method: "POST",
              url: "<?php echo base_url('index.php/Idcard/deletecard');?>/",
              data: {id:id,img:img}, // serializes the form's elements.
             success: function(data){
              alert(data);
              if(data == "success"){
                  notifyresult('Data Deleted','success');
                  getcert();
               }else{
                  notifyresult('Error','danger');
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

 
         
    </script>
   
   