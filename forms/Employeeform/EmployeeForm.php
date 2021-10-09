<!DOCTYPE html>
<html>
<?php include('../../routes/html_file/headers.php'); ?>
<?php include('../../routes/html_file/nav.php '); ?>
<?php include('../../routes/html_file/footer.php'); ?>
<body>
    <div class="container">
        <div class="title">Employee Form</div>
        <form action="">
            <div class="purchaser-details">
                <div class="input-box">
                    <span class="details">Employee ID</span>
                    <input type="text" placeholder="Employee ID" required>
                </div>
  
                <div class="input-box">
                  <span class="details"> Name</span>
                  <input type="text" placeholder=" Name" required>
              </div>
              <div class="input-box">
                  <span class="details">Address</span>
                  <input type="text" placeholder="Address" required>
              </div>
              <div class="input-box">
                  <span class="details">Aadhar Number</span>
                  <input type="text" placeholder="Aadhar Number" required>
              </div>
              <div class="input-box">
                <span class="details">Designation</span>
                <input type="text" placeholder="Designation" required>
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
          
      </div>
    </div>
  
</body>



</html>