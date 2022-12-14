<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Purchase</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="card-title m-0">Purchase entries</h5>
              </div>
              <div class="card-body">
                
                <button id="Purchaseid" onclick="invoice_pas();"  class="btn btn-primary float-right" >Add Purchase</button>
              </div>


    </div>

    
    

     <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Default Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <div class="modal-body">
              <form method="POST"  id="prchaseForm" enctype="multipart/form-data" accept-charset="utf-8">
                <div class="col-md-12" style="display: flex;">
                <div class="col-md-6">
                <label>Invoice No:</label>
                <input class="form-control" type="text" readonly="readonly" name="invno" id="invno" >
                </div>
                <div class="col-md-6">
                <label>Item Name:</label>
                <input class="form-control" type="text" name="pitemname" id="pitemname" required="required" >
                </div>
                </div>
                <div class="col-md-12" style="display: flex;">
                <div class="col-md-6">
                <label>Brand:</label>
                <select class="form-control" name="pbrand" id="pbrand" value="0">
                 <option value="0">Select</option> 
                <?php foreach ($brands as $row) {?>  
                  <option value="<?php echo $row->brand_id; ?>"><?php echo $row->brand_name; ?></option>
                 <?php } ?> 
                </select>
                </div>
                <div class="col-md-6">
                <label>Category:</label>
                <select class="form-control" name="pcat" id="pcat" value="0" required="required">
                  <option value="0">Select</option> 
                <?php foreach ($cats as $row) {?>  
                  <option value="<?php echo $row->cat_id; ?>"><?php echo $row->cat_name; ?></option>
                 <?php } ?> 
                </select>
                </div>
                </div>
                <div class="col-md-12" style="display: flex;">

                <div class="col-md-6">
                <div class="col-md-12" style="display: flex;padding: 0;margin: 0">  
                <div class="col-md-7" style="padding: 0px"> 
                <label>Quantity:</label>
                <input class="form-control" type="text" name="pqty" id="pqty" required="required" >
                </div>
                <div class="col-md-5" style="padding: 0px">
                <label>Msr</label> 
                <select class="form-control" name="mesr" id="mesr">
                  <option>Kg</option>
                  <option>grm</option>
                  <option>Ltr</option>
                  <option>piece</option>
                </select>
                </div>
                <!-- <div class="col-md-2" style="margin-top: 35px">
                  <button style="background: #fff;color: green;border-color: green;border-radius: 15px" title="add field" onclick="multyiprice">+</button>
                </div> -->
                </div>
                </div>

                <div class="col-md-6">
                <label>Price(single item)</label>
                <input class="form-control" type="text" name="pprice" id="pprice" >
                </div>
                </div>
                <div class="col-md-12" style="display: flex;">
                
                </div>

              
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

</div>    



<script src="<?php echo base_url(); ?>/AdminLTE-master/js/jquery-1.11.3.min.js"></script>

<script type="text/javascript">


function invoice_pas()
{
  $.ajax({
                method: "POST",
                url: "<?php echo base_url('index.php/Purchase/invoice_auto');?>/",
               // data: form.serialize(), // serializes the form's elements.
                data:{}, 
               success: function(data){

                $('#modal-default').modal('show');
              
                 $("#invno").val(data);
                        
              }
             });
}  



 // $(function() {
 //    const Toast = Swal.mixin({
 //      toast: true,
 //      position: 'top-end',
 //      showConfirmButton: false,
 //      timer: 3000
 //    }); 
 //  }
  

$("#prchaseForm").submit(function(e) {
         e.preventDefault(); 
         var form = $(this);
         $.ajax({
                method: "POST",
                url: "<?php echo base_url('index.php/Purchase/add_purchase');?>/",
               // data: form.serialize(), // serializes the form's elements.
                data:new FormData(this),  
                     contentType: false,  
                     cache: false,  
                     processData:false, 
               success: function(data){

                // alert(data);
              
                 if (data=='success') {
                      
                         
                  Swal.fire({
                        position: 'top-end',
                        icon: 'failed',
                        title: 'Purchase Added',
                        showConfirmButton: false,
                        timer: 2000
                        })
                     
                 }
                 else
                 {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'error',
                        title: 'Operation Failed',
                        showConfirmButton: false,
                        timer: 2000
                        })
                 }
              // show response from the php script.            
              }
             });
      });




</script>