        <table class="table table-hover table-bordered  " id="tablefill">
           <thead>
                    <tr>
                      <th>Register Number</th>
                      <th>Company Name</th>
                      <th>Password</th>
                      <th>Mail Id</th>
                      <th>Phone no</th>
                                          
                      <th>Operations</th>
                      
                    </tr>
                  </thead>
                  <tbody>

                  	<?php 
                  	
                  	foreach($res as $row){?>
                  		  <tr>
                          <td><?php echo $row->company_info_regno?></td>
                          <td><?php echo $row->company_info_name?></td>
                          <td><?php echo $row->company_info_pwd?></td>
		                      <td><?php echo $row->company_info_mail?></td>
		                      <td><?php echo $row->company_info_phon?></td>
                          
                          
                           
                          
                          
                          
                          
		                      <td>
                           <div class="media-right" class="col-md-2">
                           <div class="col-md-12">
                           <i data-toggle="modal" data-target="#trackermodal" onclick="editcomp('<?php echo $row->company_info_id;?>');" style="margin-left: 10px" class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i>
                           <i onclick="deletecomp('<?php echo $row->company_info_id;?>');" style="margin-left: 30px" class="fa fa-times fa-lg" aria-hidden="true"></i>
                           </div>
                         </div>
 
                          </td>
		                        
                     	 		
                    		</tr>
                  	<?php }?>  
                  </tbody>
                </table>
               