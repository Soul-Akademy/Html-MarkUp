<?php 
  $channels = 
  '
  <div class="col-md-6 col-sm-6 channel">
    <div class="col-md-4">
      <img class="img-responsive" src="http://placehold.it/180x160" alt="">
    </div>
    <div class="col-md-8">
      <div class="type">All Fitness Channel - <span>45 videos</span></div>
      <div class="subs">55 subscribers</div>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sed sapien quam. Sed dapibus est id enim facilisis, at posuere turpis adipiscing. Quisque sit amet dui dui.</p>
    </div>
  </div>  
  ';
?>

<?php include("inc/create.header.php"); ?>
  <div class="simple-cover">
    <div class="container">
      <img class="atrium-logo" src="/assets/img/atrium.png" alt="">
    </div>
  </div>
  <div class="brand-gradient"></div>  
  <div class="container">
    <div id="mychannels">
      <div class="search-wrap">
        <div class="col-lg-2 visible-lg">
          <img class="search-icon" src="/assets/img/tv-icon.png" alt="">
        </div>  
        <div class="col-lg-10">
          <div class="search green">
            <h1>Search Channels <span>Find your favorite channels</span></h1>
            
            <form role="form" >
              <div class="form-group">
                <input class="form-control" placeholder="Lifting, Yoga, Basketball etc....">
              </div>
            </form>
            
            <a class="submit" href="#"><span class="icon-search"></span></a>
            
          </div>
        </div>
      </div>
      
      <div class="spacer">

        <div class="col-md-12">
          <h2><span class="glypicon icon-tv"></span> My Channels</h2>
        </div>
            
        <div class="col-md-2 col-sm-3 col-xs-4 thumb">
          <img class="img-responsive" src="/assets/img/mychannel/running.jpg" alt="">
          Running
        </div>
        <div class="col-md-2 col-sm-3 col-xs-4 thumb">
          <img class="img-responsive" src="/assets/img/mychannel/yoga.jpg" alt="">
          Yoga
        </div>
        <div class="col-md-2 col-sm-3 col-xs-4 thumb">
          <img class="img-responsive" src="/assets/img/mychannel/track.jpg" alt="">
          Track and Field
        </div>
        <div class="col-md-2 col-sm-3 col-xs-4 thumb">
          <img class="img-responsive" src="/assets/img/mychannel/swimming.jpg" alt="">
          Swimming
        </div>
        
        <div class="col-md-12">
          <a class="pull-right" href="#">view top channels <span class="glyphicon glyphicon-chevron-right"></span></a>
        </div>
        
        
        <div class="clearfix"></div>
        
        <div class="col-md-12">
          <h2><span class="glypicon icon-connection"></span> Top Channels</h2>
        </div>
        
        <div class="row">
          <?php print $channels; ?>
          <?php print $channels; ?>
          <?php print $channels; ?>
          <?php print $channels; ?>
          <?php print $channels; ?>
        </div>
        <div class="col-md-12">
          <a class="pull-right" href="#">view top channels <span class="glyphicon glyphicon-chevron-right"></span></a>
        </div>
      
      </div>
      
    </div>
  </div>
  
<?php include("inc/footer.php"); ?>
