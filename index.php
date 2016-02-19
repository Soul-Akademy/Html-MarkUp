<?php include("inc/create.header.php"); ?>
<div id="create-profile">
  <div class="cover">
    <div class="container">
      <img class="atrium-logo" src="/assets/img/atrium.png" alt="">
    </div>
  </div>
  <div class="brand-gradient"></div>
  
  <div class="container">
  <div class="pro-form">
      <h1>Create A Profile - <span class="acct-type">Professional Account</span></h1>
      <form method="" >
        <h2><span class="icon icon-personal-info"></span>Personal Information</h2>
        <div class="form-group">
          <div class="col-md-6">
            <label>First Name</label>
            <input type="text" class="form-control" name="first_name" placeholder="Enter First Name" required>            
          </div>
          <div class="col-md-6">
            <label>Last Name</label>
            <input type="text" class="form-control" name="last_name" placeholder="Enter Last Name" required>
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-6">
            <label>Display Name - this is what users will see when you post</label>
            <input type="text" class="form-control" name="username" placeholder="Enter username">
            <label>Company / Organization Name</label>
            <input type="text" class="form-control" name="organization" placeholder="Enter Company Name">
          </div>       
        </div>
        
        <div class="clearfix"></div>
        
        <div class="form-group">
          <div class="col-md-6">
            <div class="form-group">
              <label for="occupation">Occupation</label>
              <div class="selectwrap">
                <select class="form-control">
                  <option selected disabled>Choose Your Occupation</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="specialties">Specialties</label>
              <div class="selectwrap">
                <select class="form-control">
                  <option selected disabled>Select Specialties</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                </select>
              </div>
            </div>
            <div class="label-with-close">
              Running
              <a class="x" href="#"><span aria-hidden="true">&times;</span></a>
            </div>
            <div class="label-with-close">
              Lifting
              <a class="x" href="#"><span aria-hidden="true">&times;</span></a>
            </div>
            <div class="label-with-close">
              Soccer
              <a class="x" href="#"><span aria-hidden="true">&times;</span></a>
            </div>

          </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-md-6">
          <div class="form-group">
              <label for="dob">Date of Birth</label>
              <div class="row">
                <div class="col-sm-4 col-xs-6">
                  <div class="selectwrap">
                    <select class="form-control" name="dob">
                      <option selected disabled>Month</option>
                      <option value="01">Jan (01)</option>
                      <option value="02">Feb (02)</option>
                      <option value="03">Mar (03)</option>
                      <option value="04">Apr (04)</option>
                      <option value="05">May (05)</option>
                      <option value="06">June (06)</option>
                      <option value="07">July (07)</option>
                      <option value="08">Aug (08)</option>
                      <option value="09">Sep (09)</option>
                      <option value="10">Oct (10)</option>
                      <option value="11">Nov (11)</option>
                      <option value="12">Dec (12)</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-4 col-xs-6">
                  <div class="selectwrap">
                    <select class="form-control" name="day">
                      <option selected disabled>Day</option>
                      <option>01</option>
                      <option>02</option>
                      <option>03</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-4 col-xs-12">
                  <div class="selectwrap">
                    <select class="form-control" name="expiry-year">
                      <option selected disabled>Year</option>
                      <option value="13">2013</option>
                      <option value="14">2014</option>
                      <option value="15">2015</option>
                      <option value="16">2016</option>
                      <option value="17">2017</option>
                      <option value="18">2018</option>
                      <option value="19">2019</option>
                      <option value="20">2020</option>
                      <option value="21">2021</option>
                      <option value="22">2022</option>
                      <option value="23">2023</option>
                    </select>
                  </div>
                </div>
              </div>
              <label for="dob">Gender</label>
              <div class="row">
                <div class="col-md-4 col-xs-6">
                  <div class="selectwrap">
                    <select class="form-control" name="gender">
                      <option selected disabled>Gender</option>
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-4 col-xs-6">
                  <input type="text" class="form-control" name="age" placeholder="Enter Age" required>            
                </div>
              </div>
            
          </div>
          <div class="form-group">  
            <label>City</label>
            <input type="text" class="form-control" name="city" placeholder="Enter your City" required>
            <div class="row">
              <div class="col-md-4">
                <label>State</label>
                <div class="selectwrap">
                  <select class="form-control" name="gender">
                    <option selected disabled>Select State</option>
                    <option>FL</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="clearfix"></div>
        
        <h2><span class="icon icon-certificate"></span>Credential Information</h2>
        <p>Note: We manually verify all our professionals ( takes 2-3 days )</p>
        
        <div class="form-group">
          <div class="col-md-6">
            <label>License / Certification Number</label>
            <input type="text" class="form-control" name="first_name" placeholder="">            
          </div>
          <div class="col-md-6">
            <label>Accrediting Organization</label>
            <input type="text" class="form-control" name="last_name" placeholder="">
          </div>
        </div>
      </form>
      
  </div>
  <a class="btn save" type="submit" name="save" href="#">Save</a>
</div>

<?php include("inc/footer.php"); ?>
