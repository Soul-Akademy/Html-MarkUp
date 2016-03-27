<?php include("inc/create.header.php"); ?>
<div id="profile" class="enthusiast">
  <div style="" class="cover"></div>
  <div class="brand-gradient bar"></div>

  <div class="container user-nav">
    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
      <img class="pic" src="/assets/img/profile/profile-pic.jpg" alt="">
    </div>
    <div class="col-lg-7 col-md-6 col-sm-6 col-xs-6">
      <div class="name">Konrad Gungor</div>
      <div class="location">Miami, FL</div>
    </div>
    <div class="col-md-3 col-sm-3 col-xs-6">
      <div class="pull-right">
        <a class="add-friend-icon" href="#"> + </a>
        <a class="add-friend-text" href="#">Add Friend</a>
      </div>
    </div>
    <div class="col-md-9 col-sm-7 col-xs-12">
      <ul class="profile-nav">
        <li><a href="#">Profile</a></li>
        <li><a href="#">Video</a></li>
        <li><a href="#">Milestones</a></li>
        <li><a class="active" href="#">Friends</a></li>
      </ul>
    </div>  
  </div>

  <div class="feed-wrap">
    <div class="col-md-4 col-sm-6">
      <div class="panel panel-default">
        <div class="panel-heading">Info</div>
        <div class="panel-body">
          <p><strong>Profession:</strong> Personal Trainer</p>
          <p><strong>Hobbies:</strong> Sports</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sed sapien quam.</p>
        </div>
      </div>
      
      <div class="panel panel-default">
        <div class="panel-heading">Konrad’s Channel - 10 Videos</div>
        <div class="panel-body">
          <a href="#"><img class="col-xs-3 nogutters" src="http://placehold.it/90x70" alt=""></a>
          <a href="#"><img class="col-xs-3 nogutters" src="http://placehold.it/90x70" alt=""></a>
          <a href="#"><img class="col-xs-3 nogutters" src="http://placehold.it/90x70" alt=""></a>
          <a href="#"><img class="col-xs-3 nogutters" src="http://placehold.it/90x70" alt=""></a>
        </div>
        <div class="panel-footer"><a class="pull-right" href="#">See All ></a></div>
      </div>
      
      <div class="panel panel-default">
        <div class="panel-heading">Advert</div>
        <div class="panel-body ad">
          <a href="#">
            <img src="/assets/img/profile/ad.jpg" alt="">
          </a>
        </div>
        <div class="panel-footer"></div>
      </div>
      
      <div class="panel panel-default">
        <div class="panel-heading">Konrad’s Friends - 132 Friends</div>
        <div class="panel-body">
          <a href="#"><img class="col-xs-3 circled" src="http://placehold.it/70x70" alt=""></a>
          <a href="#"><img class="col-xs-3 circled" src="http://placehold.it/70x70" alt=""></a>
          <a href="#"><img class="col-xs-3 circled" src="http://placehold.it/70x70" alt=""></a>
          <a href="#"><img class="col-xs-3 circled" src="http://placehold.it/70x70" alt=""></a>
        </div>
        <div class="panel-footer"><a class="pull-right" href="#">See All ></a></div>
      </div>
      
    </div>
    
    <div class="col-md-8 col-sm-6">
      <div class="panel panel-special">
        <div class="panel-heading">
          Konrad's Friends
          <div class="angled-deco-gray"><span class="glyphicon glyphicon-triangle-top"></span></div>
        </div>
        <div class="panel-body">
          <div class="row">
            <div class="searchbox">
              
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search through Konrad’s Friends">
                <div class="input-group-btn"> 
                  <!-- <button type="button" class="btn btn-default" aria-label="Help"><span class="glyphicon glyphicon-question-sign"></span></button> -->
                  <button type="button" class="btn btn-default">
                    <span class="glyphicon icon-search"></span>
                  </button>
                </div>
              </div>
              
            </div>
          </div>
          <?php
          $buddy =
          '
          <div class="col-lg-4 col-md-6">
            <div class="buddy">
              <img src="http://placehold.it/90x90" alt="" class="img-circle">
              <p>
                <span>Konrad Gungor</span><br>
                Miami, FL<br>
                <a class="btn btn-outline" href="#"><span class="">+</span> Add Friend</a>
              </p>
            </div>
          </div>
          ';
          
           ?>
          
          <?php print $buddy; ?>
          <?php print $buddy; ?>
          <?php print $buddy; ?>
          <?php print $buddy; ?>
          <?php print $buddy; ?>
          <?php print $buddy; ?>
          <?php print $buddy; ?>
          <?php print $buddy; ?>
          
            
        </div>
      </div>
    </div>
    
  </div>
  
</div>
<?php include("inc/footer.php"); ?>
