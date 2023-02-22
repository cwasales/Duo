<?php 
include('navbar.php');
include('footer.php');


?>
    <div class="container">
      <div class="row">
      <div class="col-md-12">
        <h1 class="picText"><br>Duo Event Calendar</h1>
        <p></p>
      </div>      
      </div>

      <div class="row">
      <div class="col-md-12">
        <div class="calendarContainer">
          <h2>2023</h2>
          <div class="leftSide">Every<br>Tuesday</div>
          <div class="calendarChild">Taco Tuesday!<br>Buy 2 Get One FREE!<br><img src="images/clock1.png" alt="clock" class="clock"> 11:30AM - 5PM</div>
        </div>
      </div>

      </div>    
      
      <div class="row">
      <div class="col-md-12">
        <div class="calendarContainer">
          <div class="leftSide">Every<br>Friday</div>
          <div class="calendarChild">Happy Hour<br>Tacos & Tequila!<br><img src="images/clock1.png" alt="clock" class="clock"> 5PM - 9PM</div>
        </div>
      </div>

      </div><br /><br /><br>   
    </div>
    

    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
          <button type="button" class="btn1" data-toggle="modal" data-target="#myModal">Join Our Communty!</button>
        </div>
      </div><br /><br />
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

    