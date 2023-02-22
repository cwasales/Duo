<?php 
include('navbar.php');
include('footer.php');


?>
    <div class="container">
      <div class="row">
        <div class="col-md-4"><img src="images/logo.jpeg" class="logo" /></div>
        <div class="col-md-4 feature glow">
          Taco Tuesdays<br />$2.00 Off All Orders<br />Come and Get It!
        </div>
        <div class="col-md-4">
          <a href="https://www.instagram.com/duotaco610/tagged/" target="_blank"
            ><img src="images/insta1.jpg" class="logo"
          /></a>
        </div>
      </div><br /><br />
    </div>

    <div class="container">
      <div class="row picText">
        <div class="col-sm-4 col-md-4 col-lg-4">
          <img src="images/bg3.jpg" class="pic1" /><br /><br />Steak Tacos
        </div>
        <div class="col-sm-4 col-md-4 col-lg-4">
          <img src="images/chB.jpg" class="pic1" /><br /><br />Chicken Birria
        </div>
        <div class="col-sm-4 col-md-4 col-lg-4">
          <img src="images/dish1.jpg" class="pic1" /><br /><br />Pico De Gallo Shrimp
        </div>
      </div>
      </div>

    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
          <button type="button" class="btn1" data-toggle="modal" data-target="#myModal">Join Our Communty!</button>
        </div>
      </div>
      </div>

    <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Join our newsletter and get $1.00 off any purchase of 4 tacos</h4>
        </div>
        <div class="modal-body">
          <form method="post" action="">
  <div class="form-group">
    <label for="fName">First Name</label>
    <input type="text" class="form-control" id="fName" placeholder="Enter your first name" required>
    
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" placeholder="youremail@yahoo.net" required>
    <br><small id="email" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  
  <button type="submit" class="btn1">Submit</button>
</form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
</div>

    