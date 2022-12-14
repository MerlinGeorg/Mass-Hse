        <table class="table table-hover table-bordered  " id="tablefill">
           <thead>
                    <tr>
                      <th>Register No</th>
                      <th>Student Name</th>
                      <th>Passport No</th>
                      <th>Certification name</th>
                      <th>Id Card</th>
                      
                      <th>Operations</th>
                      
                    </tr>
                  </thead>
                  <tbody>

                  	<?php 
                  	
                  	foreach($res as $row){?>
                  		  <tr>
                          <td><?php echo $row->st_id_regno?></td>
		                      <td><?php echo $row->st_id_name?></td>
                          <td><?php echo $row->st_id_pasport?></td>
		                      <td><?php echo $row->st_id_cert_name?></td>
                         
                           
                          <td>
                            <a href="<?php echo base_url(); ?>uploads/<?php echo $row->cert_id_file ?>" target="blank">
                            <img title="click to view" height="60" width="60" src="<?php echo base_url(); ?>unnamed.png"></a>
                          </td>
                          
                          
                          
		                      <td>
                           <div class="media-right" class="col-md-2">
                           <div class="col-md-12">
                           <!-- <i data-toggle="modal" data-target="#trackermodal" onclick="editcertficate('<?php echo $row->cert_id;?>');" style="margin-left: 10px" class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i> -->
                           <i onclick="deleteidcard('<?php echo $row->card_id ;?>','<?php echo $row->cert_id_file;?>');" style="margin-left: 30px" class="fa fa-times fa-lg" aria-hidden="true"></i>
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
               