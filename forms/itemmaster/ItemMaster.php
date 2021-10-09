<!DOCTYPE html>
<html>
    <?php include('../../routes/html_file/headers.php'); ?>
    <?php include('../../routes/html_file/nav.php'); ?>
    <?php include('../../routes/html_file/footer.php'); ?>
        <body>
            <form action="#">
       <div class="conatiner">
           <section class="p5">
               <fieldset>
                   <center>
                       <legend>Item Master Form</legend>
                       <hr>
                   </center>
                   <center>
                    <div class="col-md-3">

                        <div class=" input-group input-group-lg ">
                            <span class="input-group-text" id="inputGroup-sizing-lg ">Item Code</span>
                            <input type="text" class="form-control" aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-lg">

                        </div>
                    </div> <br>
                    <div class="col-md-3">

                        <div class=" input-group input-group-lg ">
                            <span class="input-group-text" id="inputGroup-sizing-lg ">Group Type</span>
                            <input type="text" class="form-control" aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-lg">

                        </div>
                    </div> <br>
                    <div>
                        <select id="dropdown" name="role">
                            <option value="1">Voter</option> 
                            <option value="2">Group </option>
                        </select> <br> <br>
               
                    </div>
                    <div>
                        <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required> 
            <label class="form-check-label" for="invalidCheck3">
            Agree to terms and conditions
                        </label>
            <div class="invalid-feedback">
            You must agree before submitting.
                </div>
            <button class="btn btn-primary" type="submit">Submit form</button>

                    </div>
                   </center>
               </fieldset>
           </section>
       </div>
            </form> 
        </body>
    
</html>