        <table class="table table-hover table-bordered  " id="tablefill">
           <thead>
                    <tr>
                      <th>Question paper code</th>
                      <th>Exam name</th>
                      <th>Course</th>
                      <th>Status</th>
                      
                      
                      <th>Operations</th>
                      
                    </tr>
                  </thead>
                  <tbody>

                    <?php 
                    
                    foreach($res as $row){?>
                        <tr>
                          <td><?php echo $row->qpaper_code?></td>
                          <td><?php echo $row->qpaper_exam_name?></td>
                          <td><?php echo $row->course_name?></td>
                          <td>
                          <?php 
                          $stat = $row->qpaper_status;

                          if($stat==1)
                          {

                          ?>
                          <button style="color: white;background-color: green" onclick="priority_set1('<?php echo $row->qpaper_id;?>','1');" >Active</button>
                         <?php
                           }
                           else
                           {
                          ?>
                          <button style="color: white;background-color: red" onclick="priority_set1('<?php echo $row->qpaper_id;?>','2');" >Inactive</button>
                        <?php } ?>
                           </td>
                          
                          
                          
                          
                          <td>
                           <div class="media-right" class="col-md-2">
                           <div class="col-md-12">
                           <i data-toggle="modal" data-target="#trackermodal" onclick="editqpaper('<?php echo $row->qpaper_id;?>');" style="margin-left: 10px" class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i> 

                           <i onclick="deleteqpaper('<?php echo $row->qpaper_id;?>');" style="margin-left: 30px" class="fa fa-times fa-lg" aria-hidden="true"></i>
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
               