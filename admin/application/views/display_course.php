        <table class="table table-hover table-bordered  " id="tablefill">
           <thead>
                    <tr>
                      <th>Course Name</th>
                      <th>Category</th>
                       <th>Description</th>
                       <th>Code</th>
                       <th>Image</th>
                      <th>Operations</th>
                      
                    </tr>
                  </thead>
                  <tbody>

                  	<?php 
                  	
                  	foreach($res as $row){?>
                  		  <tr>
		                      <td><?php echo $row->course?></td>
                          <td><?php echo $row->catname?></td>
                          <td><?php echo $row->course_desc?></td>
                          <td><?php echo $row->course_code?></td>
                          
                           <td><img height="60" width="60" src="<?php echo base_url(); ?>uploads/<?php echo $row->course_pic ?>"></td>

		                      <td>
                           <div class="media-right" class="col-md-2">
                           <div class="col-md-12">
                           <i data-toggle="modal" data-target="#trackermodal" onclick="editcourse('<?php echo $row->id;?>');" style="margin-left: 10px" class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i>
                           <i onclick="deletecourse('<?php echo $row->id;?>','<?php echo $row->course_pic;?>');" style="margin-left: 30px" class="fa fa-times fa-lg" aria-hidden="true"></i>
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
               