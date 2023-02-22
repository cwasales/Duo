<?php 
include('navbar.php');
include('footer.php');


?>
    <div class="container">
      <div class="row">
      <div class="col-md-6">
        <h1 class="picText"><br>Duo Storefront</h1>
        <img src="images/duoStore.jpg" class="pics2" alt="Duo Building" />
      </div>

      <div class="col-md-6">
        <h1 class="picText"><br>Owner</h1>
        <img src="images/rolland.jpg" class="pics2" alt="Owner" />
      </div>
      </div>

      <div class="row">
      <div class="col-md-6">
      <h1 class="picText"><br>Bio</h1><br>
      </div>  
      
      <div class="col-md-6">
      <h1 class="picText"><br>Contact Information</h1><br>
      <div class="info">
      
        <h3>DUO Taco Entrepreneur
         <br>The Taco Spot!
          <br>540 Ave of the States
          <br>Chester, PA 19013
        </h3>
      
      <h4>
      <br>Hours: Monday - Thursday 11AM - 9pm
      <br>       Friday & Saturday 1PM - 9PM
      <br>       Sunday Closed

      <br>Phone: (484) - 483 - 7425 
      </h4>
    </div> 

      </div><br /><br /><br>
    </div>
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

    