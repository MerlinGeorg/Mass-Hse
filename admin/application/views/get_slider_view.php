        <table class="table table-hover table-bordered  " id="tablefill">
           <thead>
                    <tr>
                      <th>Banner name</th>
                     
                      <th>photo</th>
                      <th>Priority</th>
                      <th>Operations</th>
                      
                    </tr>
                  </thead>
                  <tbody>

                  	<?php 
                  	
                  	foreach($res as $row){?>
                  		  <tr>
		                      <td><?php echo $row->slider_name?></td>
                          <td><?php echo $row->slide_priority?></td>
		                      
                          <td><img height="60" width="60" src="<?php echo base_url(); ?>uploads/<?php echo $row->slide_image ?>"></td>
                          
                          
                          
		                      <td>
                           <div class="media-right" class="col-md-2">
                           <div class="col-md-12">
                           <i data-toggle="modal" data-target="#trackermodal" onclick="editslide('<?php echo $row->slider_id;?>');" style="margin-left: 10px" class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i>
                          <i onclick="deleteslide('<?php echo $row->slider_id;?>','<?php echo $row->slide_image;?>');" style="margin-left: 30px" class="fa fa-times fa-lg" aria-hidden="true"></i> 
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
               