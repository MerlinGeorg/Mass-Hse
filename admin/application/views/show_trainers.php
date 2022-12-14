        <table class="table table-hover table-bordered  " id="tablefill">
           <thead>
                    <tr>
                      <!-- <th>Civil id</th> -->
                      <th>Name</th>
                      <th>DOB</th>
                      <th>Gender</th>
                      <th>Mail id</th>
                      <th>Password</th>
                      <th>Phone no</th>
                      <th>Qualification</th> 
                       <th>Photo</th>
                        <th>Teaching</th>
                        
                      <th>Operations</th>
                      

                      
                    </tr>
                  </thead>
                  <tbody>

                  	<?php 
                  	
                  	foreach($res as $row){?>
                  		  <tr>
		                      <!-- <td><?php echo $row->trainer_civilid?></td> -->
                          <td><?php echo $row->trainer_name?></td>
		                      <td><?php echo $row->trainer_dob?></td>
		                      <td><?php echo $row->trainer_gender?></td>
		                      <td><?php echo $row->trainer_mailid?></td>
                          <td><?php echo $row->trainer_password?></td>
                          <td><?php echo $row->trainer_phone?></td>
                          <td><?php echo $row->trainer_qualification?></td>
                          <td><img height="60" width="60" src="<?php echo base_url(); ?>uploads/<?php echo $row->trainer_pic ?>"></td>
                          
                         
                          
                          

                          <td><?php echo $row->course_name?></td>

                        
		                     <td>

                           <div class="media-right" class="col-md-2">
                           <div class="col-md-12">
                           <i data-toggle="modal" data-target="#trackermodal" onclick="edittrainer('<?php echo $row->trainer_id;?>');" style="margin-left: 10px" class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i>
                           <i onclick="deletetrainer('<?php echo $row->trainer_id;?>','<?php echo $row->trainer_pic;?>');" style="margin-left: 30px" class="fa fa-times fa-lg" aria-hidden="true"></i>
                           </div>
                         </div>
 
                          </td>
		                        <!-- <div class="media-right">
                              <button class="btn btn-success btn-xs" data-toggle="modal" data-target="#trackermodal"  onclick="edituser('<?php echo $row->user_id;?>');">Edit</button>
		                          <button class="btn btn-danger btn-xs" onclick="deleteuser('<?php echo $row->user_id;?>');">Delete</button>
		                          </div>    -->
                     	 		
                    		</tr>
                  	<?php }?>  
                  </tbody>
                </table>
               

          <script type="text/javascript">
           

          </script>     