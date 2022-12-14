
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Courses</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Courses</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">




      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body pb-0">
          <div class="row d-flex align-items-stretch">

          <div class="col-md-12" style="text-align: center;margin-bottom: 30px;margin-top: 30px">
            <h1 style="width: 100%;font-style: inherit;font-size: 42">Here is the full available course list. You can purchase from here.</h1>
          </div> 

<?php foreach($corse as $row){ ?>   

            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
              <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                 <!--  Digital Strategist -->
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-12" style="text-align: center;">
                      <h2 class="lead" style="font-style: inherit;color: #2c6c5b"><b><?php echo $row->course; ?></b></h2>
                     
                      
                    </div>
                    <div class="col-12 text-center">
                      <img src="../../admin/uploads/<?php echo $row->course_pic; ?>" alt="" class="img-circle img-fluid">
                    </div>
                    <div class="col-12 " style="text-align: center;margin-top: 10px">
                      <h3 class="lead"> Price:&nbsp;<span style="color: red;font-style: inherit;"> <b>N/A</b></span></h3>
                    </div>
                  </div>
                </div>

                <div class="card-footer" style="display: flex;">

                  <div class="col-md-6">
                    <a class="btn btn-sm bg-teal"><b data-toggle="modal" data-target="#myModal<?php echo $row->id?>">
                      View Details
                    </b>
                    </a>
                    
                  </div>
                  <div class="col-md-6" style="text-align: right;">
                    
                   <a onclick="addcart('<?php echo $row->id?>');" class="btn btn-sm btn-primary"><b style="color: #fff">
                       Add to Cart
                    </b></a>
                  </div>
                  
                </div>

              </div>
            </div>

         

        <div class="modal fade" id="myModal<?php echo $row->id?>" role="dialog">
              <div class="modal-dialog">
              
                <!-- Modal content-->
                <div class="modal-content">

                  <div class="modal-header">
                    <h4 class="modal-title col-md-10"  style="text-align: center;"><?php echo $row->course;; ?></h4>
                    <button type="button" class="close col-md-2" data-dismiss="modal">&times;</button>
                    
                  </div>
                  <div class="modal-body">
                    
                    <p><b>category: <?php echo $row->catname ?></b></p>

                    <p style="font-size: 20px;color: blue"><?php echo $row->course_desc; ?></p>

                  </div>
                 <!--  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div> -->
                </div>
                
              </div>
        </div>

            
<?php } ?>
  


          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <nav aria-label="Contacts Page Navigation">
            <!-- <ul class="pagination justify-content-center m-0">
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">4</a></li>
              <li class="page-item"><a class="page-link" href="#">5</a></li>
              <li class="page-item"><a class="page-link" href="#">6</a></li>
              <li class="page-item"><a class="page-link" href="#">7</a></li>
              <li class="page-item"><a class="page-link" href="#">8</a></li>
            </ul> -->
          </nav>
        </div>
        <!-- /.card-footer -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 
 <script type="text/javascript">
   

function addcart(cid)
{
  $.ajax({
              method: "POST",
              url: "<?php echo base_url('index.php/Fullcourse/addtocart');?>/",
              data: {cid:cid}, // serializes the form's elements.
             success: function(data){

              // alert(data);
              
              if($.trim(data)=='success')
              {
                alert("Item added to Cart")
                cartcoutset();
              }
              else if($.trim(data)=='exist')
              {
                  alert("Item Already in Cart")
              }
              else
              { 
                 alert("Oops!something went wrong")
              }
            }
        });
}


 </script>