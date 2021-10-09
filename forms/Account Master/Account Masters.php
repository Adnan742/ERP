<!DOCTYPE html>
<html>
<?php include('../../routes/html_file/headers.php'); ?>
<?php include('../../routes/html_file/nav.php'); ?>
<?php include('../../routes/html_file/footer.php'); ?>
<body>
    <div class="container">
        <div class="title">Account Master Form</div>
        <form action="">
            <div class="purchaser-details">
                <div class="input-box">
                    <span class="details"> Bank Name</span>
                    <input type="text" placeholder="Bank Name" required>
                </div>
  
                <div class="input-box">
                  <span class="details">Branch</span>
                  <input type="text" placeholder=" Branch" required>
              </div>
              <div class="input-box">
                  <span class="details">Account Number</span>
                  <input type="text" placeholder="Account Number" required>
              </div>
              <div class="input-box">
                  <span class="details">Name</span>
                  <input type="text" placeholder="Name" required>
              </div>
            
            
              
              <div class="input-box">
                  <span class="details">Contact</span>
                  <input type="tel" placeholder="Contact Number" required>
              </div>
              <div class="input-box">
                  <span class="details">IFS Code</span>
                  <input type="url" placeholder="IFS Code" required>
              </div>
              <div class="input-box">
                <span class="details">Opening Balance</span>
                <input type="url" placeholder="Opening Balance" required>
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