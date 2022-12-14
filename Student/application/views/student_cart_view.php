

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>My cart</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">My cart</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">My cart</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <!-- <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button> -->
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          No
                      </th>
                      <th style="width: 49%">
                          Course Name
                      </th>
                      <th style="width: 25%">
                          sample image
                      </th>
                      <th style="width: 15%">
                          Price
                      </th>
                      
                      <th style="width: 10%">
                      </th>
                  </tr>
              </thead>
              <tbody>

        <?php
              $i=1;
         foreach($cartitem as $row) {?>
                  <tr>
                      <td>
                          <?php echo $i ?>
                      </td>
                      <td>
                          <a>
                              <?php echo $row->cart_c_name ?>
                          </a>
                          
                      </td>
                      <td>
                          <ul class="list-inline">
                              <li class="list-inline-item" >
                                  <img alt="Avatar" style="width:100px;" class="table-avatar" src="../../admin/uploads/<?php echo $row->coursepic; ?>">
                              </li>
                              
                          </ul>
                      </td>
                      <td class="project_progress">
                          <h2 style="color: red"><b><?php echo $row->cart_item_price ?></b></h2>
                      </td>
                      
                      <td class="project-actions text-right">
                          
                          <a onclick="deleteitem('<?php echo $row->cart_id ?>')" class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-trash">
                              </i>
                          </a>

                      </td>

                  </tr>

     <?php $i++;
      } ?>
                 
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

      <div class="col-md-12" style="text-align: right;">

        <a href="<?php echo base_url('index.php/Student_checkout/');?>"><b class="col-md-2 btn btn-success" style="height: 50px;font-size: 20px">Checkout</b></a>
        
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <script type="text/javascript">
    
   function deleteitem(crid)
   {
    var result = confirm("Remove item from cart?");
    if(result)
    {
     $.ajax({
              method: "POST",
              url: "<?php echo base_url('index.php/Student_cart/deletecartitem');?>/",
              data: {crid:crid}, // serializes the form's elements.
             success: function(data)
             {

              alert(data);

              if($.trim(data)=='success')
              {
              
              window.location.href="";
              }
              else
              {
                alert("Oops!..error occured")
              }  
              
             }
        });
     }
   }



   // function checkingot()
   // {
   //   $.ajax({
   //            method: "POST",
   //            url: "<?php echo base_url('index.php/Student_checkout/');?>/",
   //            data: {crid:crid}, // serializes the form's elements.
   //           success: function(data)
   //           {

   //            alert(data);

   //            if($.trim(data)=='success')
   //            {
              
   //            window.location.href="";
   //            }
   //            else
   //            {
   //              alert("Oops!..error occured")
   //            }  
              
   //           }
   //      });
   // }

  </script>