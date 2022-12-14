        <table class="table table-hover table-bordered  " id="tablefill">
           <thead>
                    <tr>
                      <th>Name</th>
                      <th>Image</th>
                      <!-- <th>Address</th>
                      <th>Image</th>
                      <th>Course</th> -->
                    <!--    <th>Priority</th> -->
                      <th>Operations</th>
                      
                    </tr>
                  </thead>
                  <tbody>

                  	<?php 
                  	
                  	foreach($res as $row){?>
                  		  <tr>
		                      <td><?php echo $row->cat_name?></td>

		                      <!-- <td><?php echo $row->description?></td> -->
                           <td><img height="60" width="60" src="<?php echo base_url(); ?>uploads/<?php echo $row->cat_image ?>"></td>
                           <!-- <td><?php echo $row->course;?></td> -->
                          <!--  <td> <div class="media-right">

                          <?php
                           
                           $check = $row->priority;
                           if($check==0)
                           {
                          ?>
                          <button style="color: white;background-color: green" onclick="priority_set1('<?php echo $row->id;?>','high');" >High</button>
                            <?php
                            }
                            else
                            {  
                            ?>
                            <button style="color: white;background-color: red" onclick="priority_set1('<?php echo $row->id;?>','low');" >Low</button>
                          <?php } ?>
                           </td> -->
                          
		                      <td>
                           <div class="media-right" class="col-md-2">
                           <div class="col-md-12">
                           <i data-toggle="modal" data-target="#trackermodal" onclick="editcategory('<?php echo $row->cat_id;?>');" style="margin-left: 10px" class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i>
                           <i onclick="deletecategory('<?php echo $row->cat_id;?>','<?php echo $row->cat_image;?>');" style="margin-left: 30px" class="fa fa-times fa-lg" aria-hidden="true"></i>
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
               