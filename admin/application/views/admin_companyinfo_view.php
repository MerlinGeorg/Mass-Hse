<div class="page-header">
          <div class="row">
            <div class="col-md-4">
              <div class="media">
                <div class="media-body">
                  <div class="display-6">Company Info</div>
                  <!-- <p class="small text-muted">
                     Info Table Design</p> -->
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="pull-xs-right" role="toolbar">
                <!-- <a class="btn btn-icon icon-only"><i class="fa fa-rss"></i></a><a class="btn btn-icon icon-only"><i class="fa fa-star text-warning"></i></a> -->
               <!--  <button class="btn btn-secondary" type="button" data-toggle="collapse" href="#qmenu" aria-expanded="false" aria-controls="qmenu">Open menu</button> -->
                <button class="btn btn-success" data-toggle="modal" data-target="#trackermodal"  onclick="clearall();">Register Company</button>
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
           <form method="POST" id="companyinfoform">

              <div class="row m-b-2">
                    
                   

                    

                    <div class="form-group col-sm-6">
                      <input type="hidden" id = 'compinfoid' name="compinfoid"/>
                      <h4 class="demo-sub-title">Register number</h4>
                      <input class="form-control focus" type="text" required="required" readonly="readonly" name="compreg" id="compreg">
                    </div>
                    
                    <div class="form-group col-sm-6">
                      <h4 class="demo-sub-title">Company name</h4>
                       <input class="form-control focus " type="text" required="required" name="compname" id="compname">
                    </div>

                    
                     
                    

                    <div class="form-group col-sm-6">
                      <h4 class="demo-sub-title">Password</h4>
                      <input class="form-control focus" type="text" required="required" name="comppass" id="comppass">
                    </div>
                    

                    
                    <div class="form-group col-sm-6">
                      <h4 class="demo-sub-title">Mail id</h4>
                      <input class="form-control focus" type="mail" required="required" name="compmail" id="compmail">
                    </div>


                    <div class="form-group col-sm-6" >
                      <h4 class="demo-sub-title">Phone number</h4>
                      <input class="form-control focus" type="mail" required="required" name="compphon" id="compphon">
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
          gtcompany();

        // $('#servtype').hide();
        // $('#corstype').hide();

         

      });

      var chk = 0;
      function gtcompany(){
           $.ajax({
                method: "POST",
                url: "<?php echo base_url('index.php/Admin_companyinfo/getcompanyinfo');?>/",
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
        $('#compinfoid').val('');
        $('#compreg').val('');
        $('#compname').val('');
        $('#comppass').val('');
        $('#compmail').val('');
        $('#compphon').val('');
        
       
        gtcompany();
        regno_pas();
          
      }

       function regno_pas()
                {
                  $.ajax({
                method: "POST",
                url: "<?php echo base_url('index.php/Admin_companyinfo/auto_regno');?>/",
               // data: form.serialize(), // serializes the form's elements.
                data:{}, 
               success: function(data){

                alert(data);

                $('#trackermodal').modal('show');
              
                 $("#compreg").val(data);
                        
              }
             });
            }  


     
      $("#companyinfoform").submit(function(e) {

        // alert("hi");
        e.preventDefault(); // avoid to execute the actual submit of the form.
        var form = $(this);
         $.ajax({
                method: "POST",
                url: "<?php echo base_url('index.php/Admin_companyinfo/reg_Company');?>/",
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
                  gtcompany();
               }
               else if(data=='regnoexist')
               {
                 notifyresult('Register number already exist','danger');
                  $('#trackermodal').modal('hide');
                  gtcompany();
               }
               else if(data=='mailexist')
               {
                 notifyresult('Mailid already exist','danger');
                  $('#trackermodal').modal('hide');
                  gtcompany();
               }
               
               else
               {
                  notifyresult('Error','danger');
                  $('#trackermodal').modal('hide');
                  gtcompany();
               }

              // show response from the php script.            
              }
             });
      });



      function editcomp(id){
        // alert(id);
        $('#modalcaption').text("Edit Company info");
        $.ajax({
              method: "POST",
              url: "<?php echo base_url('index.php/Admin_companyinfo/editcompany');?>/",
              data: {id:id}, // serializes the form's elements.
             success: function(data)
             {
               
               

              var res = JSON.parse(data);

              

              // var new_course = res.course_name;

              // alert(res.student_id);

              gtcompany();
              // console.log(data);
              $('#compinfoid').val(res.company_info_id);
              $('#compreg').val(res.company_info_regno);
              $('#compname').val(res.company_info_name);
              $('#comppass').val(res.company_info_pwd);
              $('#compmail').val(res.company_info_mail);
              $('#compphon').val(res.company_info_phon);
              
              
               

                    }
                });
              }
      
      function deletecomp(id)
      {

        var result = confirm("Are you want to delete?");
          if (result) {
              $.ajax({
              method: "POST",
              url: "<?php echo base_url('index.php/Admin_companyinfo/delete_comp');?>/",
              data: {id:id}, // serializes the form's elements.
             success: function(data){
              // alert(data);
              if($.trim(data) == "success"){
                  notifyresult('Data Deleted','success');
                  gtcompany();
               }else{
                  notifyresult('Error','danger');
                  gtcompany();
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
   
   