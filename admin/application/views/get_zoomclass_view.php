        <table class="table table-hover table-bordered  " id="tablefill">
           <thead>
                    <tr>
                      <th>Meeting title</th>
                      <th>Course</th>
                      <th>Date</th>
                      <th>Time</th>
                      <th>Joining link</th>
    
                      <th>Operations</th>
                      
                    </tr>
                  </thead>
                  <tbody>

                  	<?php 
                  	
                  	foreach($res as $row){?>
                  		  <tr>
                          <td><?php echo $row->meeting_title?></td>
                          <td><?php echo $row->course?></td>
                          <td><?php echo $row->meeting_date?></td>
                          <?php $row->meeting_time;
                           $time = date('h:i a',strtotime($row->meeting_time));
                           ?>
                            
                          <td><?php echo $time?></td>
                          <td><?php echo $row->meeting_link?></td>
		                      
                          
                           
                          


                          
                         <!--  <td><?php echo $row->course_name?></td> -->
                          
		                      <td>
                           <div class="media-right" class="col-md-2">
                           <div class="col-md-12">

                           <i data-toggle="modal" data-target="#trackermodal" onclick="editmeet('<?php echo $row->meeting_id;?>');" style="margin-left: 10px" class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i>

                           <i onclick="deletemeet('<?php echo $row->meeting_id;?>');" style="margin-left: 30px" class="fa fa-times fa-lg" aria-hidden="true"></i>

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
               