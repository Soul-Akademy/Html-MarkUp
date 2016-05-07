<?php include("inc/create.header.php"); ?>
<div id="profile" class="enthusiast">
  <div style="" class="cover">
    <div class="container">
      <a class="change-cover" href="#">
        <span class="glyphicon icon-addphoto"></span><br>
        Change Cover
      </a>
    </div>
  </div>
  <div class="brand-gradient bar"></div>

  <div class="container user-nav">
    <div class="col-md-3 col-sm-3 col-xs-12">
      <a class="addphoto" href="#">
        <span class="glyphicon icon-addphoto"></span>
      </a>
      <img class="pic" src="/assets/img/profile/profile-pic.jpg" alt="">
    </div>
    <div class="col-md-6 col-sm-6 col-xs-6">
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
        <li><a class="active" href="#">Profile</a></li>
        <li><a href="#">Video</a></li>
        <li><a href="#">Milestones</a></li>
        <li><a href="#">Friends</a></li>
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
          Konrad's Videos
          <div class="angled-deco-gray"><span class="glyphicon glyphicon-triangle-top"></span></div>
        </div>
        <div class="panel-body">
          <?php 
          $videos =
          '
          <div class="col-lg-4 col-md-6 video-wrap">
            <a data-toggle="modal" data-target="#videoModal" data-theVideo="http://www.youtube.com/embed/loFtozxZG0s" href="#" class="video">
              <div class="runtime">12:42</div>
            </a>
            
            <div class="title">Video Title that can Drop down to two lines of text or more</div>
            <span class="exercise-num">10 Reps</span>
            <span class="exercise-type">Rep <span class="icon-reps"></span></span>
          </div>
          ';
           ?>
          
          <?php print $videos; ?>
          <?php print $videos; ?>
          <?php print $videos; ?>
          <?php print $videos; ?>
          <?php print $videos; ?>
          <?php print $videos; ?>
          <?php print $videos; ?>
          <?php print $videos; ?>
        </div>
      </div>
      
    
    </div>
    
  </div>
  
</div>

<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModal" aria-hidden="true">
  <div class="vertical-alignment-helper">
  <div class="modal-dialog vertical-align-center">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

        <img class="img-circle" src="/assets/img/profile/profile-pic.jpg" width="50" height="50" alt="">
        <p><a href="#">Konrad Gungor</a> udpated his status</p>
        <span>5 mins ago</span>
        
      </div>
      <div class="modal-body">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe src=""></iframe>
        </div>
      </div>
      <div class="modal-footer">
        <h4>Video Title</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sed sapien quam. Sed dapibus est id enim facilisis.</p>
        <span class="exercise-num">10 Reps</span>
        <span class="exercise-type">Rep <span class="icon-reps"></span></span>
      </div>
    </div>
  </div>
  </div>
</div>
<?php include("inc/footer.php"); ?>
