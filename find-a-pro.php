<?php 
  $pro = 
  '
  <div class="col-md-6 col-sm-6">
    <img src="http://placehold.it/120x120" alt="" class="img-circle">
    <div class="pro">
      <span>Konrad Gungor</span><br>
      Personal Trainer, Yoga, Track<br>
      Miami, FL
      <div class="rating">
        <span class="star filled">☆</span>
        <span class="star filled">☆</span>
        <span class="star">☆</span>
        <span class="star">☆</span>
        <span class="star">☆</span>
        <span class="average">4.2</span> &ndash; &nbsp; (<a href="">24</a>)
      </div>
    </div>
  </div>  
  ';
?>
<?php include("inc/create.header.php"); ?>
<div id="find-pro">
  <div class="simple-cover">
    <div class="container">
      <img class="atrium-logo" src="/assets/img/atrium.png" alt="">
    </div>
  </div>
  <div class="brand-gradient"></div>  
  <div class="container">
    <div class="pros-listings">
      <div class="search-wrap">
        <div class="col-lg-2 visible-lg">
          <img class="search-icon" src="/assets/img/lift-icon.png" alt="">
        </div>  
        <div class="col-lg-10">
          <div class="search">
            <h1>Find a Professional <span>Search for professionals</span></h1>
            
            <form class="form-inline" role="form">
              <div class="form-group">
                <input class="form-control" placeholder="Name">
              </div>
              <div class="form-group">
                <input class="form-control" placeholder="Location">
              </div>
              <div class="form-group">
                <input class="form-control" placeholder="Organization">
              </div>
              <div class="form-group">
                <input class="form-control" placeholder="Specialty">
              </div>
            </form>
            
            <a class="submit" href="#"><span class="icon-search"></span></a>
            
          </div>
        </div>
      </div>
      <div class="spacer">
        <h2>Top Professionals in Your Area</h2>
        <?php print $pro; ?>
        <?php print $pro; ?>
        <?php print $pro; ?>
        <?php print $pro; ?>
      </div>
    </div>
    
    <div class="pros-listings">
      <div class="spacer">
        <h2>Search Results</h2>
        <?php print $pro; ?>
        <?php print $pro; ?>
        <?php print $pro; ?>
        <?php print $pro; ?>
      </div>
    </div>
  </div>
</div>
<?php include("inc/footer.php"); ?>
