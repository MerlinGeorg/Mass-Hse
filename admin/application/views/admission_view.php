<div class="page-header">
          <div class="row">
            <div class="col-md-4">
              <div class="media">
                <div class="media-body">
                  <div class="display-6">Course</div>
                  <!-- <p class="small text-muted">
                     Info Table Design</p> -->
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="pull-xs-right" role="toolbar">
                <!-- <a class="btn btn-icon icon-only"><i class="fa fa-rss"></i></a><a class="btn btn-icon icon-only"><i class="fa fa-star text-warning"></i></a> -->
               <!--  <button class="btn btn-secondary" type="button" data-toggle="collapse" href="#qmenu" aria-expanded="false" aria-controls="qmenu">Open menu</button> -->
                <button class="btn btn-success" data-toggle="modal" data-target="#trackermodal"  onclick="clearall();">Add Course</button>
              </div>
            </div>
          </div>
        </div>
        <div class="container-fluid">
          <div class="panel-wrapper">
            <div class="panel" >
              <div class="panel-body table-responsive" style="overflow-x:auto;" id="tablefillextend" >
                <!-- <table class="table table-hover table-bordered  "  id="tablefill"> -->
<!--                   <thead>
                    <tr>
                      <th>First name</th>
                      <th>Last name</th>
                      <th>Position</th>
                      <th>Office</th>
                      <th>Salary</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Tiger</td>
                      <td>Nixon</td>
                      <td>System Architect</td>
                      <td>Edinburgh</td>
                      <td>$320,800</td>
                      <td>
                        <div class="media-right"><a class="btn btn-primary btn-xs" href="#" data-toggle="modal" data-target="#trackermodal">Edit</a>
                          <a class="btn btn-primary btn-xs" href="#" data-toggle="modal" data-target="#trackermodal">Delete</a>
                          </div>   
                      </td>
                    </tr>
                    <tr>
                      <td>Garrett</td>
                      <td>Winters</td>
                      <td>Accountant</td>
                      <td>Tokyo</td>
                      <td>$320,800</td>
                      <td>
                        <div class="media-left"><a class="btn btn-primary btn-xs" href="#" data-toggle="modal" data-target="#trackermodal">Edit</a>
                          <a class="btn btn-primary btn-xs" href="#" data-toggle="modal" data-target="#trackermodal">Delete</a>
                          </div>   
                      </td>
                    </tr>
                    <tr>
                      <td>Ashton</td>
                      <td>Cox</td>
                      <td>Junior Technical Author</td>
                      <td>San Francisco</td>
                      <td>$320,800</td>
                      <td>
                        <div class="media-left"><a class="btn btn-primary btn-xs" href="#" data-toggle="modal" data-target="#trackermodal">Edit</a>
                          <a class="btn btn-primary btn-xs" href="#" data-toggle="modal" data-target="#trackermodal">Delete</a>
                          </div>   
                      </td>
                    </tr>
                    <tr>
                      <td>Cedric</td>
                      <td>Kelly</td>
                      <td>Senior Javascript Developer</td>
                      <td>Edinburgh</td>
                      <td>$320,800</td>
                      <td>
                        <div class="media-left"><a class="btn btn-primary btn-xs" href="#" data-toggle="modal" data-target="#trackermodal">Edit</a>
                          <a class="btn btn-primary btn-xs" href="#" data-toggle="modal" data-target="#trackermodal">Delete</a>
                          </div>   
                      </td>
                    </tr>
                    <tr>
                      <td>Airi</td>
                      <td>Satou</td>
                      <td>Accountant</td>
                      <td>Tokyo</td>
                      <td>$320,800</td>
                      <td>
                        <div class="media-left"><a class="btn btn-primary btn-xs" href="#" data-toggle="modal" data-target="#trackermodal">Edit</a>
                          <a class="btn btn-primary btn-xs" href="#" data-toggle="modal" data-target="#trackermodal">Delete</a>
                          </div>   
                      </td>
                    </tr>
                    <tr>
                      <td>Brielle</td>
                      <td>Williamson</td>
                      <td>Integration Specialist</td>
                      <td>New York</td>
                      <td>$320,800</td>
                      <td>
                        <div class="media-left"><a class="btn btn-primary btn-xs" href="#" data-toggle="modal" data-target="#trackermodal">Edit</a>
                          <a class="btn btn-primary btn-xs" href="#" data-toggle="modal" data-target="#trackermodal">Delete</a>
                          </div>   
                      </td>
                    </tr>
                    <tr>
                      <td>Herrod</td>
                      <td>Chandler</td>
                      <td>Sales Assistant</td>
                      <td>San Francisco</td>
                      <td>$320,800</td>
                      <td>
                        <div class="media-left"><a class="btn btn-primary btn-xs" href="#" data-toggle="modal" data-target="#trackermodal">Edit</a>
                          <a class="btn btn-primary btn-xs" href="#" data-toggle="modal" data-target="#trackermodal">Delete</a>
                          </div>   
                      </td>
                    </tr>
                    <tr>
                      <td>Rhona</td>
                      <td>Davidson</td>
                      <td>Integration Specialist</td>
                      <td>Tokyo</td>
                      <td>$320,800</td>
                      <td>
                        <div class="media-left"><a class="btn btn-primary btn-xs" href="#" data-toggle="modal" data-target="#trackermodal">Edit</a>
                          <a class="btn btn-primary btn-xs" href="#" data-toggle="modal" data-target="#trackermodal">Delete</a>
                          </div>   
                      </td>
                    </tr>
                    <tr>
                      <td>Colleen</td>
                      <td>Hurst</td>
                      <td>Javascript Developer</td>
                      <td>San Francisco</td>
                      <td>$320,800</td>
                      <td>
                        <div class="media-left"><a class="btn btn-primary btn-xs" href="#" data-toggle="modal" data-target="#trackermodal">Edit</a>
                          <a class="btn btn-primary btn-xs" href="#" data-toggle="modal" data-target="#trackermodal">Delete</a>
                          </div>   
                      </td>
                    </tr>
                    <tr>
                      <td>Sonya</td>
                      <td>Frost</td>
                      <td>Software Engineer</td>
                      <td>Edinburgh</td>
                      <td>$320,800</td>
                      <td>
                        <div class="media-left"><a class="btn btn-primary btn-xs" href="#" data-toggle="modal" data-target="#trackermodal">Edit</a>
                          <a class="btn btn-primary btn-xs" href="#" data-toggle="modal" data-target="#trackermodal">Delete</a>
                          </div>   
                      </td>
                    </tr>
                    <tr>
                      <td>Jena</td>
                      <td>Gaines</td>
                      <td>Office Manager</td>
                      <td>London</td>
                      <td>$320,800</td>
                      <td>
                        <div class="media-left"><a class="btn btn-primary btn-xs" href="#" data-toggle="modal" data-target="#trackermodal">Edit</a>
                          <a class="btn btn-primary btn-xs" href="#" data-toggle="modal" data-target="#trackermodal">Delete</a>
                          </div>   
                      </td>
                    </tr>
                    <tr>
                      <td>Quinn</td>
                      <td>Flynn</td>
                      <td>Support Lead</td>
                      <td>Edinburgh</td>
                      <td>$320,800</td>
                      <td>
                        <div class="media-left"><a class="btn btn-primary btn-xs" href="#" data-toggle="modal" data-target="#trackermodal">Edit</a>
                          <a class="btn btn-primary btn-xs" href="#" data-toggle="modal" data-target="#trackermodal">Delete</a>
                          </div>   
                      </td>
                    </tr>
                    <tr>
                      <td>Charde</td>
                      <td>Marshall</td>
                      <td>Regional Director</td>
                      <td>San Francisco</td>
                      <td>$320,800</td>
                      <td>
                        <div class="media-left"><a class="btn btn-primary btn-xs" href="#" data-toggle="modal" data-target="#trackermodal">Edit</a>
                          <a class="btn btn-primary btn-xs" href="#" data-toggle="modal" data-target="#trackermodal">Delete</a>
                          </div>   
                      </td>
                    </tr>
                    <tr>
                      <td>Haley</td>
                      <td>Kennedy</td>
                      <td>Senior Marketing Designer</td>
                      <td>London</td>
                      <td>$320,800</td>
                      <td>
                        <div class="media-left"><a class="btn btn-primary btn-xs" href="#" data-toggle="modal" data-target="#trackermodal">Edit</a>
                          <a class="btn btn-primary btn-xs" href="#" data-toggle="modal" data-target="#trackermodal">Delete</a>
                          </div>   
                      </td>
                    </tr>
                    <tr>
                      <td>Tatyana</td>
                      <td>Fitzpatrick</td>
                      <td>Regional Director</td>
                      <td>London</td>
                      <td>$320,800</td>
                      <td>
                        <div class="media-left"><a class="btn btn-primary btn-xs" href="#" data-toggle="modal" data-target="#trackermodal">Edit</a>
                          <a class="btn btn-primary btn-xs" href="#" data-toggle="modal" data-target="#trackermodal">Delete</a>
                          </div>   
                      </td>
                    </tr>
                  

                   
                  </tbody> -->
                <!-- </table> -->
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
           <form method="POST" id="catForm"  >
                                <div class="row m-b-2">
                    <div class="form-group col-sm-6">
                      <input type="hidden" id = 'colid' name="colid"/>
                      <h4 class="demo-sub-title"> Course</h4>
                      <input class="form-control focus " type="text" required="required" name="name" id="colname">
                      <!-- <select class="form-control" name="name" id="colname">
                      <option value="">Select</option>
                      <?php 
                      foreach ($only as $row) {
                        
                      
                      ?>
                      <option value="<?php echo $row->course_name; ?>"><?php echo $row->course_name ?></option>
                    <?php 
                  } 
                  ?>
                </select> -->
                    </div>

                    
                    <div class="form-group col-sm-6" style="display: none;">
                      <h4 class="demo-sub-title">Sub.course 1</h4>
                      <input class="form-control" type="text"   name="course1"  id="course1" >
                    </div>

                    <div class="form-group col-sm-6" style="display: none;">
                      <h4 class="demo-sub-title">Sub.course 2</h4>
                      <input class="form-control" type="text"   name="course2"  id="course2" >
                    </div>

                    <div class="form-group col-sm-6" style="display: none;">
                      <h4 class="demo-sub-title">Sub.course 3</h4>
                      <input class="form-control" type="text"   name="course3"  id="course3" >
                    </div>

                    <div class="form-group col-sm-6" style="display: none;">
                      <h4 class="demo-sub-title">Sub.course 4</h4>
                      <input class="form-control" type="text"   name="course4"  id="course4" >
                    </div>
                    <!-- <div class="form-group col-sm-6">
                      <h4 class="demo-sub-title"> Category</h4>
                      <select class="form-control" name="colcat" id="colcat">
                        <option value="">Select</option>
                        <option value="UG">UG</option>
                        <option value="PG">PG</option>
                      </select>
                    </div> -->
                    <!-- <div class="form-group col-sm-6">
                      <h4 class="demo-sub-title">Fees (Rs)</h4>
                      <input class="form-control" type="text"   name="fees"  id="colfees" required="required">
                    </div> -->
                    <!-- <div class="form-group col-sm-6">
                      <h4 class="demo-sub-title">Details</h4>
                      <textarea class="form-control" rows="3"   name="details"  id="coldetails" required="required"></textarea>
                    </div> -->
                    <div class="form-group col-sm-6">
                      <h4 class="demo-sub-title">image</h4>
                      <input class="" type="file"   name="image_file"  id="colimage_file" required="required">
                    
                    <input type="hidden" name="image1" id="image1">
                    <div id="imagefill"></div>
                    </div>

                    <!-- <div class="form-group col-sm-6">
                      <h4 class="demo-sub-title">file</h4>
                      <input class="" type="file"   name="other_file"  id="colother_file" required="required">
                    
                    <input type="hidden" name="file1" id="file1"> -->
                     <div id="otherfill"></div>
                     <!-- </div>
                    
                  </div> -->

                 <!--  <div class="form-group col-sm-6">
                      <h4 class="demo-sub-title">file</h4>
                      <input class="" type="file"   name="other_file"  id="colother_file" required="required">
                    </div>
                    <input type="hidden" name="image1" id="image1">

                    
                  </div> -->
                  <!-- <div class="row m-b-2">
                    <div class="form-group col-sm-6">
                      <h4 class="demo-sub-title">Password</h4>
                      <input class="form-control" type="text" required="required" name="userpassword" id="userpassword">
                    </div> -->
                    <!-- <div class="form-group col-sm-6">
                      <h4 class="demo-sub-title">Address</h4>
                      <textarea class="form-control" rows="2" name="useraddress" required="required" id="useraddress"></textarea>
                    </div> -->
                    
                    <!-- <input type="text" id = 'catid' name="catid"/> -->
                  <!-- </div> -->
                <!-- <div class="row m-b-2">
                    <div class="form-group col-sm-6">
                      <h4 class="demo-sub-title">City</h4>
                      <input class="form-control" name="usercity" type="text" required="required" id="usercity">
                    </div>
                    <div class="form-group col-sm-6">
                      <h4 class="demo-sub-title">Pincode</h4>
                      <input class="form-control" name="userpincode" type="text" required="required" id="userpincode">
                    </div>
                    
                  </div> -->
                <!-- <div class="row m-b-2">
                    <div class="form-group col-sm-6">
                      <h4 class="demo-sub-title">Phone</h4>
                      <input class="form-control" name="userphone" type="text" required="required" id="userphone">
                    </div>
                    <div class="form-group col-sm-6">
                      <h4 class="demo-sub-title">Level</h4>
                      <select class="form-control c-select" name="userlevel" required="required" id="userlevel" data-plugin="selectpicker">
                        <option value="">select</option>
                        <option value="admin" data-subtext="(High priority)">Admin</option>
                        <option value="agent">Agent</option>
                        <option value="dealer">Dealer</option>
                      </select>
                    </div> -->
                    
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
          getusers();

      });
      var chk = 0;
      function getusers(){
           $.ajax({
                method: "POST",
                url: "<?php echo base_url('index.php/Admin_board/display_college');?>/",
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
        $('#modalcaption').text("Add Course");
        $('#colname').val('');
        $('#course1').val('');
        $('#course2').val('');
        $('#course3').val('');
        $('#course4').val('');
        $('#colimage_file').val('');
        $('#imagefill').html('');
        $('#image1').val('');
        $('#file1').val('');  
        $('#colid').val('');
        
        
        getusers();
        // $('#userfullname').val('');
        // $('#userfullname').val('');    
      }
      

      $("#catForm").submit(function(e) {

        // alert("hi");
        e.preventDefault(); // avoid to execute the actual submit of the form.
        var form = $(this);
         $.ajax({
                method: "POST",
                url: "<?php echo base_url('index.php/Admin_board/doit_upload');?>/",
              data: new FormData(this),
              processData:false,
                     contentType:false,
                     cache:false,
              // serializes the form's elements.
               success: function(data){

                // alert(data);
               if(data == "true"){
                  notifyresult('Data Saved','success');
                  $('#trackermodal').modal('hide');
                  getusers();
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
      
      



      function editcollege(id){
        $('#modalcaption').text("Edit Course");
        $.ajax({
              method: "POST",
              url: "<?php echo base_url('index.php/Admin_board/editcol');?>/",
              data: {id:id}, // serializes the form's elements.
             success: function(data){
              var res = JSON.parse(data);
              getusers();
              // console.log(data);
              $("#colimage_file").prop('required',false);
              $('#colid').val(res.id);
              $('#colname').val(res.course);
              $('#course1').val(res.sub_course1);
              $('#course2').val(res.sub_course2);
              $('#course3').val(res.sub_course3);
              $('#course4').val(res.sub_course4);
              $('#image1').val(res.picture); 
              $('#imagefill').html('<img  style="width:250px;height:200px;"src="<?php echo base_url();?>/uploads/'+res.picture+'">') 
              // $('#file1').val(res.file);
              // $('#otherfill').html(res.file); 
              
               

            }
        });
      }
      
      function deletecollege(id){
        var result = confirm("Are you want to delete?");
          if (result) {
              $.ajax({
              method: "POST",
              url: "<?php echo base_url('index.php/Admin_board/deletecol');?>/",
              data: {id:id}, // serializes the form's elements.
             success: function(data){
              if(data == "success"){
                  notifyresult('Data Deleted','success');
                  getusers();
               }else{
                  notifyresult('Error','danger');
               }
               

            }
        });
          }
        }

          function priority_set(id,status)
          {
            // alert("hai");
           $.ajax({
              method: "POST",
              url: "<?php echo base_url('index.php/Admin_board/pro_check');?>/",
              data: {id:id,status:status}, // serializes the form's elements.
             success: function(data){
              // if(data == "high"){
              //     notifyresult('Data Deleted','success');
              //     getusers();
              //  }else{
              //     notifyresult('Error','danger');

              window.location.href="";
              getusers();
               }
               });
          }
        
     
    </script>
   
   