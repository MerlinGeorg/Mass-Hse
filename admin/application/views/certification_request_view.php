        <div class="container-fluid">
          <div class="panel-wrapper">
            <div class="panel" >
              <div class="panel-body table-responsive" style="overflow-x:auto;" id="tablefillextend" >
        <table class="table table-hover table-bordered  " id="tablefill">
           <thead>
            <tt><h3 style="text-align: center;font-family: sans-serif;">Certification Requests</h3></tt>
                    <tr>
                      <th>Reg.no</th>
                      <th>Name</th>
                      <th>Course</th>
                      <th>Score</th>
                      <th>Address</th>
                      <th>City</th>
                      <th>State</th>
                      <th>Country</th> 
                      <th>Postel code</th>
                      <th>Time</th>
                      <th>Status</th>
                     
                    </tr>
            </thead>
                  <tbody>

                  	<?php 
                  	
                  	foreach($requests as $row){?>
                  		  <tr>
		                      <td><?php echo $row->t_s_regno?></td>
                          <td><?php echo $row->t_s_name?></td>
		                      <td><?php echo $row->course_name?></td>
		                      <td><?php echo $row->t_s_score?></td>
		                      <td><?php echo $row->t_s_adrs?></td>
                          <td><?php echo $row->t_s_city?></td>
                          <td><?php echo $row->t_s_state?></td>
                          <td><?php echo $row->t_s_country?></td>
                          <td><?php echo $row->t_s_pincod?></td>
                          <td><?php echo $row->t_s_date?></td>
                          <?php
                             
                             $rqst_status = $row->t_s_status;

                             if ($rqst_status== 2)
                              {
                            
                           ?>
                          <td><button class="btn btn-danger" onclick="statuschange(<?php echo $row->t_id?>);" >Unchecked</button></td>
                          <?php
                           }
                           else
                           { 
                           ?>
                           <td><button class="btn btn-success" disabled="disabled">checked</button></td>
                           <?php } ?>
                         
                          

                          <!-- <?php
                           
                           $check = $row->priority;
                           if($check==0)
                           {
                          ?>
                          <button style="color: white;background-color: green" onclick="priority_set('<?php echo $row->id;?>','high');" >High</button>
                            <?php
                            }
                            else
                            {  
                            ?>
                            <button style="color: white;background-color: red" onclick="priority_set('<?php echo $row->id;?>','low');" >Low</button>
                          <?php } ?>
                           </td> -->
		                      
		                        <!-- <div class="media-right">
                              <button class="btn btn-success btn-xs" data-toggle="modal" data-target="#trackermodal"  onclick="edituser('<?php echo $row->user_id;?>');">Edit</button>
		                          <button class="btn btn-danger btn-xs" onclick="deleteuser('<?php echo $row->user_id;?>');">Delete</button>
		                          </div>    -->
                     	 		
                    		</tr>
                  	<?php }?>  
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
               
<script src="<?php echo base_url(); ?>/templateadmin/assets/scripts/lib/jquery-1.11.3.min.js"></script>
          <script type="text/javascript">
            
            // $('#tablefill').DataTable();


           function statuschange(id)
           {
              $.ajax({
              method: "POST",
              url: "<?php echo base_url('index.php/CertificationRequest/changestatus');?>/",
              data: {id:id}, // serializes the form's elements.
             success: function(data)
             {
              if(data=="success")
              {
                window.location.reload();
              }
             }
        });
           }
               
          </script>     