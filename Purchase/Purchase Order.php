<!DOCTYPE html>
<html>
<?php include('../routes/html_file/headers.php'); ?>
<?php include('../routes/html_file/nav.php');?>
<?php include('../routes/html_file/footer.php'); ?>
<body>
    <div class="container">
        <div class="title"> Purchase Order</div>
        <form action="">
            <div class="purchaser-details">
                <div class="input-box">
                    <span class="details"> Product ID</span>
                    <input type="text" placeholder="Product ID" required>
                </div>
  
                <div class="input-box">
                  <span class="details">Supplier Name</span>
                  <input type="text" placeholder=" Supplier Name" required>
              </div>
              <div class="input-box">
                  <span class="details">GST Number</span>
                  <input type="text" placeholder="GST Number" required>
              </div>
              <div class="input-box">
                  <span class="details">Order Number</span>
                  <input type="text" placeholder="Order Number" required>
              </div>
            <div class="input-box">
                <label for="calendar">Order Date</label>
                <input type="date" name="calendar">
            </div>
            <div class="input-box">
                <span class="details">Purchaser Address</span>
                <input type="text" placeholder="Purchaser Address" required>
            </div>
           
            
              
              <div class="input-box">
                  <span class="details">Contact</span>
                  <input type="tel" placeholder="Contact Number" required>
              </div>
              
              <div class="input-box">
                <span class="details">Email</span>
                <input type="url" placeholder="Enter Your Email" required>
            </div>

             
            </div>
        </form>
        <div class="button">
          <a href="#" class="color2">Save</a>
          <a href="#" class="color2">Discard</a>
          <a href="#" class="color2">Print</a>
          <a href="#" class="color2">Payment</a>
          
      </div>
    </div>
    <h3>Special Instructors</h3>
    <table >
        <tr>
            <th width="20%"> SR.no</th>
            <th width="20%"> Supplier Name</th>
            <th width=20%> Item/Description</th>
            <th width="20%"> Quantity</th>
            <th with="20%">Unit Price <br>SAR</th>
            <th width=10%> CGST</th>
            <th width="10%">SGST</th>
            <th width="30%"> Total Amount</th>
            <th width="30% ">  Del-Date</th>
        </tr>
    </table>
 
</body>



</html>