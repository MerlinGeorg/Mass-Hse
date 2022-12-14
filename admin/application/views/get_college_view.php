        <table class="table table-hover table-bordered  " id="tablefill">
           <thead>
                    <tr>
                      <th>Register No</th>
                      <th>International Id</th>
                      <th>Passport No</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Password</th><!-- <th>Image</th> -->
                      <th>Gender</th>
                      <th>DOB</th>
                      <th>Mail id</th>
                      <th>Phone</th>
                      <th>Qualification</th>
                      <th>Course</th>
                      <th>photo</th>
                      <th>Operations</th>
                      
                    </tr>
                  </thead>
                  <tbody>

                  	<?php 
                  	
                  	foreach($res as $row){?>
                  		  <tr>
                          <td><?php echo $row->student_reg?></td>
                          <td><?php echo $row->student_civil_id?></td>
                          <td><?php echo $row->pass_no?></td>
		                      <td><?php echo $row->first_name?></td>
		                      <td><?php echo $row->last_name?></td>
                          <td><?php echo $row->student_pwd?></td>
                           <td><?php echo $row->gender?></td>
                           <td><?php echo $row->dob?></td>
                           <td><?php echo $row->email?></td>
                           <td><?php echo $row->phno?></td>
                           <td><?php echo $row->qualification?></td>
                           <td>

                            <?php 
                               if($row->cors!='N/A')
                               {
                                foreach($row->cors as $row1)
                                {
                                 echo $row1->course.",";
                                }
                               }
                               else
                               {
                                echo $row->cors;
                               } 
                               ?>
                            </td>
                           
                          <td><img height="60" width="60" src="<?php echo base_url(); ?>uploads/<?php echo $row->picture ?>"></td>
                          
                          
                          
		                      <td>
                           <div class="media-right" class="col-md-2">
                           <div class="col-md-12">
                           <i data-toggle="modal" data-target="#trackermodal" onclick="editcollege1('<?php echo $row->student_id;?>');" style="margin-left: 10px" class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i>
                           <i onclick="deletecollege1('<?php echo $row->student_id;?>','<?php echo $row->picture;?>');" style="margin-left: 30px" class="fa fa-times fa-lg" aria-hidden="true"></i>
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
               