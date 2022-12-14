        <table class="table table-hover table-bordered  " id="tablefill">
           <thead>
                    <tr>
                      <th>Service name</th>
                      <th>Description</th>
                     <!--  <th>Sub.course1</th>
                      <th>Sub.course2</th>
                      <th>Sub.course3</th>
                      <th>Sub.course4</th> -->
                      <th>Image</th>
                     <!--  <th>File</th> -->
                      <!-- <th>Priority</th>  -->
                      <th>Operations</th>
                      

                      
                    </tr>
                  </thead>
                  <tbody>

                  	<?php 
                  	
                  	foreach($res as $row){?>
                  		  <tr>
		                      <td><?php echo $row->service_name?></td>
                          
		                      <td><?php echo $row->service_desc?></td> 

                         <td>
                          <img height="60" width="60" src="<?php echo base_url(); ?>uploads/<?php echo $row->service_image ?>">
                         </td>                             

                          
                         
		                      <td>

                           <div class="media-right" class="col-md-2">
                           <div class="col-md-12">
                           <i data-toggle="modal" data-target="#trackermodal" onclick="editservice('<?php echo $row->service_id;?>');" style="margin-left: 10px" class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i>
                           <i onclick="deleteservice1('<?php echo $row->service_id;?>','<?php echo $row->service_image;?>');" style="margin-left: 30px" class="fa fa-times fa-lg" aria-hidden="true"></i>
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
               