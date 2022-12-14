<div class="page-header">
          <div class="row">
            <div class="col-md-4">
              <div class="media">
                <div class="media-body">
                  <div class="display-6">Category</div>
                  <!-- <p class="small text-muted">
                     Info Table Design</p> -->
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="pull-xs-right" role="toolbar">
                <!-- <a class="btn btn-icon icon-only"><i class="fa fa-rss"></i></a><a class="btn btn-icon icon-only"><i class="fa fa-star text-warning"></i></a> -->
               <!--  <button class="btn btn-secondary" type="button" data-toggle="collapse" href="#qmenu" aria-expanded="false" aria-controls="qmenu">Open menu</button> -->
                <button class="btn btn-success" data-toggle="modal" data-target="#trackermodal"  onclick="clearall();">Add Category</button>
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
           <form method="POST" id="courscatform"  >
                                <div class="row m-b-2">
                    <div class="form-group col-sm-6">
                      <input type="hidden" id = 'catid' name="catid"/>
                      <h4 class="demo-sub-title"> Course category name</h4>
                      <input class="form-control focus " type="text" required="required" name="catname" id="catname">
                    </div>
                    <div class="form-group col-sm-6">
                     
                      <h4 class="demo-sub-title">Priority</h4>
                     <select class="form-control focus" name="catprio" id="catprio" required="required">
                       <option value="">Select</option>
                       <option value="1">1</option>
                       <option value="2">2</option>
                       <option value="3">3</option>
                       <option value="4">4</option>
                       <option value="5">5</option>
                       <option value="6">6</option>
                       <option value="7">7</option>
                       <option value="8">8</option>
                       <option value="9">9</option>
                     </select>
                    </div>
                    <div class="form-group col-sm-6">
                      <h4 class="demo-sub-title">Image</h4>
                      <input class="form-control focus" type="file"   name="image_file"  id="coursecat_file" >
                      <input type="hidden" name="image1" id="image1">
                       <div id="imagefill"></div>
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
          getcourse();

      });
      var chk = 0;
      function getcourse(){
           $.ajax({
                method: "POST",
                url: "<?php echo base_url('index.php/Admin_category/display_category_part');?>/",
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
      function clearall(){
        $('#modalcaption').text("Add Category");
        $('#catname').val('');
        $('#coursecat_file').val('');
        $('#image1').val(''); 
        $('#imagefill').html(''); 
        $('#catid').val(''); 
        $('#catprio').val('');
        
        
        getcourse();
        // $('#userfullname').val('');
        // $('#userfullname').val('');    
      }
      

      $("#courscatform").submit(function(e) {

        // alert("hi");
        e.preventDefault(); // avoid to execute the actual submit of the form.
        var form = $(this);
         $.ajax({
                method: "POST",
                url: "<?php echo base_url('index.php/Admin_category/add_category');?>/",
              data: new FormData(this),
              processData:false,
                     contentType:false,
                     cache:false,
              // serializes the form's elements.
               success: function(data){

                alert(data);
               if(data == "true"){
                  notifyresult('Data Saved','success');
                  $('#trackermodal').modal('hide');
                  getcourse();
               }else{
                  notifyresult('Error','danger');
                  $('#trackermodal').modal('hide');
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
      
      



      function editcategory(id){
        $('#modalcaption').text("Edit Category");
        $.ajax({
              method: "POST",
              url: "<?php echo base_url('index.php/Admin_category/editcategory');?>/",
              data: {id:id}, // serializes the form's elements.
             success: function(data){
              var res = JSON.parse(data);
              getcourse();
              // console.log(data);
              $('#catid').val(res.cat_id);
              $('#catname').val(res.cat_name);
              $('#catprio').val(res.cat_prio);
              // $('#coursecat_file').val(res.cat_image);
              

              $('#image1').val(res.cat_image); 
              $('#imagefill').html('<img  style="width:250px;height:200px;"src="<?php echo base_url();?>/uploads/'+res.cat_image+'">')
              // $('#corscat').val(res.category);
              
              
              
               

            }
        });
      }
      
      function deletecategory(id){
        var result = confirm("Are you want to delete?");
          if (result) {
              $.ajax({
              method: "POST",
              url: "<?php echo base_url('index.php/Admin_category/deletecategory');?>/",
              data: {id:id}, // serializes the form's elements.
             success: function(data){
              if(data == "success"){
                  notifyresult('Data Deleted','success');
                  getcourse();
               }else{
                  notifyresult('Error','danger');
               }
               

            }
        });
          }
        
      }
    </script>
   
   