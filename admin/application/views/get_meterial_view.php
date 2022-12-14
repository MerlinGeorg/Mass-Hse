        <table class="table table-hover table-bordered  " id="tablefill">
           <thead>
                    <tr>
                      <th>Module No</th>
                      <th>Module Name</th>
                      <th>Module Course</th>
                      <th>Module file</th>
                      <th>Module video tutorial</th>
    
                      <th>Operations</th>
                      
                    </tr>
                  </thead>
                  <tbody>

                  	<?php 
                  	
                  	foreach($res as $row){?>
                  		  <tr>
                          <td><?php echo $row->module_no?></td>
                          <td><?php echo $row->module_name?></td>
                          <td><?php echo $row->course_name?></td>
		                      
                          
                           
                          <td><a target="blanck" href="<?php echo base_url(); ?>uploads/<?php echo $row->module_file ?>"><img height="60" width="60" title="click to see module" src="<?php echo base_url(); ?>uploads/demofile.png ?>"></a></td>


                          <td><video width="200" height="150" controls="controls">
                            <source src="<?php echo base_url(); ?>uploads/<?php echo $row->module_video ?>" type="video/mp4">
                          </video></td>
                          
                         <!--  <td><?php echo $row->course_name?></td> -->
                          
		                      <td>
                           <div class="media-right" class="col-md-2">
                           <div class="col-md-12">

                           <i data-toggle="modal" data-target="#trackermodal" onclick="editmeterial('<?php echo $row->module_id;?>');" style="margin-left: 10px" class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i>

                           <i onclick="deletemeterial('<?php echo $row->module_id;?>','<?php echo $row->module_file;?>');" style="margin-left: 30px" class="fa fa-times fa-lg" aria-hidden="true"></i>

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
               