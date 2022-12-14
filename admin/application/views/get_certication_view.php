        <table class="table table-hover table-bordered  " id="tablefill">
           <thead>
                    <tr>
                      
                      <th>Name</th>
                      <th>Seriel No</th>
                      <th>Passport No</th>
                      <th>Certification name</th>
                      <th>Certification file</th>

                      
                      <th>Operations</th>
                      
                    </tr>
                  </thead>
                  <tbody>

                  	<?php 
                  	
                  	foreach($res as $row){?>
                  		  <tr>
                         
		                      <td><?php echo $row->st_name?></td>
                          <td><?php echo $row->cert_sr_no?></td>
                          <td><?php echo $row->st_pasport?></td>
		                      <td><?php echo $row->st_cert_name?></td>
                         
                           
                          <td>
                            <a href="<?php echo base_url(); ?>uploads/<?php echo $row->cert_file ?>" target="blank">
                            <img title="click to view" height="60" width="60" src="<?php echo base_url(); ?>unnamed.png"></a>
                          </td>
                          
                          
                          
		                      <td>
                           <div class="media-right" class="col-md-2">
                           <div class="col-md-12">
                           <!-- <i data-toggle="modal" data-target="#trackermodal" onclick="editcertficate('<?php echo $row->cert_id;?>');" style="margin-left: 10px" class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i> -->
                           <i onclick="deletecertficate('<?php echo $row->cert_id;?>','<?php echo $row->cert_file;?>');" style="margin-left: 30px" class="fa fa-times fa-lg" aria-hidden="true"></i>
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
               