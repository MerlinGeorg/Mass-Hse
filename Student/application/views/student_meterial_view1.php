

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Study Meterials</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Study Meterials</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">


      <div id="embed">
        
      </div>

      <!-- Default box -->
      <div class="card" id="moduleTable">

        <div class="card-header">
          <h3 class="card-title">Modules</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <!-- <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button> -->
          </div>
        </div>
        <div class="card-body p-0">
          
          <!-- <?php print_r($st_mtrl)  ?> -->

          <table class="table table-striped projects">
              <thead style="text-align: center;">
                  <tr>
                      <th style="width: 15%">
                          Module No
                      </th>
                      <th style="width: 50%">
                          Module Name
                      </th>
                      
                      
                      
                      <th style="width: 20%">
                      </th>
                  </tr>
              </thead>
              <tbody>
             
             <?php 
                    
                    foreach($st_mtrl as $row){?>

                  <tr style="text-align: center;">
                      <td>
                         <?php echo $row->module_no?>
                      </td>
                      <td>
                          <a>
                            <?php echo $row->module_name?>
                          </a>
                          
                      </td>
                      
                      
                      
                      <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" onclick="view_pdf('<?php echo $row->module_id ?>')">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a>
                          <!-- <a class="btn btn-info btn-sm" href="#">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a> -->
                      </td>
                  </tr>
                <?php } ?>  
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 <script type="text/javascript">
   
   function view_pdf(mid)
   {
       $.ajax({
              method: "POST",
              url: "<?php echo base_url('index.php/Student_meterial/show_embed_pdf');?>/",
              data: {mid:mid}, // serializes the form's elements.
             success: function(data){
              
             
             $('#embed').html(data);
             $('#embed').show();  
             $('#moduleTable').hide();
            }
        });
   }

 </script>