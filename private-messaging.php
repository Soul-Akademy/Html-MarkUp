<?php include("inc/create.header.php"); ?>
<div id="private-messaging">
  <div class="container">
    <div class="col-md-4 inbox">
      <div class="panel panel-special">
        <!-- Default panel contents -->
        <div class="panel-heading gray widget-title">
          My Inbox
          <div class="angled-deco-gray"></div>
        </div>
        <!-- <div class="panel-body">
          <img class="img-circle img-responsive" src="/assets/img/profile/profile-pic.jpg" width="50" height="50" alt="">
          <p class="msg-user">Friend's Name <span class="time">3:03pm</span></p>
          <span class="snippet">Here is the message preview...</span>
        </div> -->
        <!-- List group -->
        <ul class="list-group">
          <a href="#" class="list-group-item">
            <img class="img-circle img-responsive" src="/assets/img/profile/profile-pic.jpg" width="50" height="50" alt="">
            <p class="msg-user">Friend's Name <span class="badge primary">&nbsp;</span> <span class="time">3:03pm</span></p>
            <span class="snippet">Here is the message preview...</span>
          </a>
          <a class="list-group-item" href="">
            <img class="img-circle img-responsive" src="/assets/img/profile/profile-pic.jpg" width="50" height="50" alt="">
            <p class="msg-user">Friend's Name <span class="time">3:03pm</span></p>
            <span class="snippet">Here is the message preview...</span>
          </a>
          <a class="list-group-item" href="">
            <img class="img-circle img-responsive" src="/assets/img/profile/profile-pic.jpg" width="50" height="50" alt="">
            <p class="msg-user">Friend's Name <span class="time">3:03pm</span></p>
            <span class="snippet">Here is the message preview...</span>
          </a>
          <a class="list-group-item" href="">
            <img class="img-circle img-responsive" src="/assets/img/profile/profile-pic.jpg" width="50" height="50" alt="">
            <p class="msg-user">Friend's Name <span class="time">3:03pm</span></p>
            <span class="snippet">Here is the message preview...</span>
          </a>
        </ul>
      </div>
    </div>
    <div class="col-md-8 msgs">
      <div class="panel panel-special">
        <!-- Default panel contents -->
        <div class="panel-heading gray widget-title">
          Message from Friend’s Name
          <div class="angled-deco-gray"></div>
        </div>
        <div class="panel-body">
          <div class="message">
            <div class="col-sm-2 col-xs-3">
              <img class="img-circle img-responsive" src="/assets/img/profile/profile-pic.jpg" width="50" height="50" alt="">  
            </div>
            <div class="col-sm-10 col-xs-9">
              <p class="msg-user">Friend's Name <span class="time">3:03pm</span></p>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sed sapien quam. Sed dapibus est id enim facilisis, at posuere turpis adipiscing. Quisque sit amet dui dui.</p>
            </div>
          </div>
          
          <div class="message user">
            <div class="col-sm-10 col-xs-9">
              <p class="msg-user">You <span class="time">3:03pm</span></p>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sed sapien quam. Sed dapibus est id enim facilisis, at posuere turpis adipiscing. Quisque sit amet dui dui.</p>
            </div>
            
            <div class="col-sm-2 col-xs-3">
              <img class="img-circle img-responsive" src="/assets/img/profile/profile-pic.jpg" width="50" height="50" alt="">  
            </div>
          </div>
          
          <div class="message">
            
            <div class="col-sm-2 col-xs-3">
              <img class="img-circle img-responsive" src="/assets/img/profile/profile-pic.jpg" width="50" height="50" alt="">  
            </div>
            <div class="col-sm-10 col-xs-9">
              <p class="msg-user">Friend's Name <span class="time">3:03pm</span></p>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sed sapien quam. Sed dapibus est id enim facilisis, at posuere turpis adipiscing. Quisque sit amet dui dui.</p>
            </div>
          </div>
          
          <div class="message">
            <div class="col-sm-2 col-xs-3">
              <img class="img-circle img-responsive" src="/assets/img/profile/profile-pic.jpg" width="50" height="50" alt="">  
            </div>
            <div class="col-sm-10 col-xs-9">
              <p class="msg-user">Friend's Name <span class="time">3:03pm</span></p>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sed sapien quam. Sed dapibus est id enim facilisis, at posuere turpis adipiscing. Quisque sit amet dui dui.</p>
            </div>
          </div>
          
        </div>
        <div class="panel-footer">
          <form class="" action="index.html" method="post">
            <div class="form-group">
              <!-- <label for="inputdefault">Default input</label>
              <input class="form-control" id="inputdefault" type="text"> -->
              
              <div class="input-group">
                <input class="input-field form-control" placeholder="Type a Message...">
                <span class="input-group-btn">
                    <!-- <button id="submit_btn" class="btn btn-default" type="submit"><i class="fa fa-usd"></i></button> -->
                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#specials-form"><i class="glyphicon icon-send"></i></button>
                </span>
              </div>
              
            </div>
          </form>
        </div>
        
      </div>
    </div>
  </div>
</div>

<?php include("inc/footer.php"); ?>
