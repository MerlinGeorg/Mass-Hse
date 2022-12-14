        <table class="table table-hover table-bordered  " id="tablefill">
           <thead>
                    <tr>
                      <th>Register number</th>
                      <th>Company Name</th>
                      <th>Project No</th>
                      <th>Certification type</th>
                      <th>Company Course</th>
                      <th>Company Service</th>
                      <th>Site Location</th><!-- <th>Image</th> -->
                      <th>Certificate</th>
                     
                      <th>Operations</th>
                      
                    </tr>
                  </thead>
                  <tbody>

                  	<?php 
                  	
                  	foreach($res as $row){?>
                  		  <tr>
                          <td><?php echo $row->company_regno?></td>
                          <td><?php echo $row->company_name?></td>
                          <td><?php echo $row->company_project?></td>
                          <td><?php echo $row->company_certtype?></td>
		                      <td><?php echo $row->coursname?></td>
		                      <td><?php echo $row->servicename?></td>
                          <td><?php echo $row->company_location?></td>
                          
                           
                          <td><a href="<?php echo base_url(); ?>uploads/<?php echo $row->company_certificate ?>"><img height="60" width="60" src="<?php echo base_url(); ?>uploads/dfile.png"></a></td>
                          
                          
                          
		                      <td>
                           <div class="media-right" class="col-md-2">
                           <div class="col-md-12">
                           <i data-toggle="modal" data-target="#trackermodal" onclick="editcomp('<?php echo $row->company_id;?>');" style="margin-left: 10px" class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i>
                           <i onclick="deletecomp('<?php echo $row->company_id;?>','<?php echo $row->company_certificate;?>');" style="margin-left: 30px" class="fa fa-times fa-lg" aria-hidden="true"></i>
                           </div>
                         </div>
 
                          </td>
		                        
                     	 		
                    		</tr>
                  	<?php }?>  
                  </tbody>
                </table>
               