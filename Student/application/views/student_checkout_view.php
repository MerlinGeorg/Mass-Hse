

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Checkout</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Checkout</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid" id="checkindiv" style="display: none;">
        <h3 class="col-md-12" style="margin-top: 100px;text-align: center;color: green;font-style: bold;" id="checkinwords"></h3>
      </div>
      <div class="container-fluid" id="checkoutdiv">
        <div class="row">
          <div class="col-12">
            <div class="callout callout-info">
              <h5><i class="fas fa-info"></i> Note:</h5>
              Once you checkout. all the products from your cart will get purchased.You can Use purchase Coupones if its available.
            </div>


            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <!-- <i class="fas fa-globe"></i> -->MASS HSE Consultand Co.
                    <small class="float-right">Date: <?php echo $tday ?></small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>#</th>
                      <th>Course</th>
                      <th>Course code</th>
                      <th>Amount</th>
                    </tr>
                    </thead>
                    <tbody>


                    
                   <?php
                    $i=1;
                    foreach ($cartitem as $row) {?>  
                     <tr>
                      <td><?php echo $i; ?></td>
                      <td><?php echo $row->cart_c_name; ?></td>
                      <td><?php echo $row->coursecode; ?></td>
                      <td><?php echo $row->cart_item_price; ?></td>
                      </tr>
                   <?php $i++;
                    } ?>   
                    
                   
                    
                    
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <div class="row">
                <!-- accepted payments column -->
                <div class="col-6">
                  <p class="lead">Payment Methods:</p>
                  <img src="<?php  echo base_url()."AdminLTE-master/"; ?>dist/img/credit/visa.png" alt="Visa">
                  <img src="<?php  echo base_url()."AdminLTE-master/"; ?>dist/img/credit/mastercard.png" alt="Mastercard">
                  <!-- <img src="<?php  echo base_url()."AdminLTE-master/"; ?>dist/img/credit/american-express.png" alt="American Express">
                  <img src="<?php  echo base_url()."AdminLTE-master/"; ?>dist/img/credit/paypal2.png" alt="Paypal"> -->

                  <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                    Payment through Net banking Feature will launch soon.. 
                  </p>
                </div>
                <!-- /.col -->
                <div class="col-6">
                  <!-- <p class="lead">Amount Due 2/22/2014</p> -->

                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <th style="width:50%">Subtotal:</th>
                        <td>N/A</td>
                      </tr>
                      <tr>
                        <th>Discount</th>
                        <td>N/A</td>
                      </tr>
                      
                      <tr>
                        <th>Total:</th>
                        <td>N/A</td>
                      </tr>
                    </table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->



              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12 " style="padding-right: 10px;padding-bottom: 30px">
                
                  <div class="float-right">
                  <label for="pcoupon"  style="font-size: 22px;color:#007bff;">Purechase Coupon Code : </label>
                  <input type="text" style="min-width: 350px;height: 50px;border-radius: 7px;background-color: #e8e9ec;border-color: green" name="pcoupon" id="pcoupon" placeholder="Enter coupon code here...">
                  <span id="couponcodespan" style="color: red"></span>
                  </div>
                
                </div>

                <div class="col-12">
                  <!-- <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a> -->
                  <button type="button" onclick="paymentprocess();" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Proceed
                    Payment
                  </button>
                  <!-- <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                    <i class="fas fa-download"></i> Generate PDF
                  </button> -->
                </div>
              </div>
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  

  <script type="text/javascript">
    
   function paymentprocess()
   {
     var coupon = $('#pcoupon').val();

     if(coupon=='')
     {
         $('#couponcodespan').text('please enter coupon code');
     }
     else
     {
        $('#couponcodespan').text('');
        var result = confirm("Proceed to purchase?");
      if(result)
      {
       $.ajax({
                method: "POST",
                url: "<?php echo base_url('index.php/Student_checkout/proceedcheck');?>/",
                data: {coupon:coupon}, // serializes the form's elements.
               success: function(data)
               {

                alert(data);
                if($.trim(data)=='checkoutcomplete')
                {
                   $('#checkoutdiv').hide();
                   $('#checkindiv').css('display','block');
                   $('#checkinwords').text('Course purchase completed successfully.check "My course" section to see your courses.')
                   cartcoutset();
                }
                else if($.trim(data)=='checkoutissue')
                {
                
                   alert('Oops!..checkout system failed .try again');
                }
                else if($.trim(data)=='checkoutissue')
                {
                
                   alert('Oops! system failed .try again');
                }
                else if($.trim(data)=='checkinserterror')
                {
                
                   alert('Oops!..checkout system failed .try again');
                }
                else if($.trim(data)=='invalidcoupon')
                {
                
                   $('#couponcodespan').text('invalid Coupon Code');
                }
                else
                {
                  alert("Oops!..error occured")
                }  
                
               }
          });
       }
     }
   }

  </script>