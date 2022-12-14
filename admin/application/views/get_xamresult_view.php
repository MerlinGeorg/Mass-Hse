        <table class="table table-hover table-bordered  " id="tablefill">
           <thead>
                    <tr>
                      <th>Register No</th>
                      <th>Student Name</th>
                      <th>Question paper code</th>
                      <th>Cutoff mark</th>
                      <th>Score</th>
                      <th>Status</th>
                      <th>Remaining Attempts</th>
                      <th>Start time</th>
                      <th>End time</th>
                      
                      <!-- <th>Operations</th> -->
                      
                    </tr>
                  </thead>
                  <tbody>

                  	<?php 
                  	
                  	foreach($result as $row){?>
                  		  <tr>
                          <td><?php echo $row->s_reg_no?></td>
                        <?php $studentname=  $row->firstname." ".$row->lastname;    $xstat = $row->xam_status;

                          ?>
                          <td><?php echo $studentname?></td>
		                      <td><?php echo $row->qp_code?></td>
                          <td><?php echo $row->cutoff?></td>
		                      <td><?php echo $row->s_score?></td>

                          <?php if($xstat=='1') {?>
                          
                            <td>pass</td>

                          <?php  
                            }

                          else if ($xstat=='2')
                          {?>
                           <td>Failed</td>

                          <?php 
                            }
                          else
                            { ?>
                          
                                 <td>N/A</td>
                          <?php }?>

                          <td><?php echo $row->rem_attempt?></td>
                          <td><?php echo $row->xam_time_start?></td>
                          <td><?php echo $row->xam_time_end?></td>
                          
                          
                          
		                      <!-- <td>
                           <div class="media-right" class="col-md-2">
                           <div class="col-md-12">
                           <i data-toggle="modal" data-target="#trackermodal" onclick="editcertficate('<?php echo $row->cert_id;?>');" style="margin-left: 10px" class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i>
                           <i onclick="deletecertficate('<?php echo $row->cert_id;?>','<?php echo $row->cert_file;?>');" style="margin-left: 30px" class="fa fa-times fa-lg" aria-hidden="true"></i>
                           </div>
                         </div>
 
                          </td> -->
		                        <!-- <div class="media-right">
                              <button class="btn btn-success btn-xs" data-toggle="modal" data-target="#trackermodal"  onclick="edituser('<?php echo $row->user_id;?>');">Edit</button>
		                          <button class="btn btn-danger btn-xs" onclick="deleteuser('<?php echo $row->user_id;?>');">Delete</button>
		                          </div>    -->
                     	 		
                    		</tr>
                  	<?php }?>  
                  </tbody>
                </table>
               