        <table class="table table-hover table-bordered  " id="tablefill">
           <thead>
                    <tr>
                      <th>Fees file(pdf)</th>
                      
                    <!--    <th>Priority</th> -->
                      <th>Update file</th>
                      
                    </tr>
                  </thead>
                  <tbody>

                  	<?php 
                  	
                  	foreach($fee as $row){?>
                  		  <tr>
		                      
                           <td><a href="<?php echo base_url(); ?>uploads/<?php echo $row->file ?>"><i class="fa fa-file-pdf-o fa-3x" aria-hidden="true"></i></a></td>

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
                           <i data-toggle="modal" data-target="#trackermodal" onclick="editfees('<?php echo $row->id;?>');" style="margin-left: 10px" class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i>
                           <!-- <i onclick="deletecollege1('<?php echo $row->id;?>');" style="margin-left: 30px" class="fa fa-times fa-lg" aria-hidden="true"></i> -->
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
               