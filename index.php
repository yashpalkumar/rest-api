<!DOCTYPE html>
<html lang="en">
  <head> <?php include 'config.php';?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Meetup is a free responsive single page bootstrap template by designerdada.com">
    <meta name="author" content="Akash Bhadange">
    <title>Meetup: Free Responsive One Page Bootstrap Template</title>
	
    <!-- Model JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">
        <img src="img/logo.png" />
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span>
            </a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
  </head>
  <body id="page-top" data-spy="scroll" data-target=".side-menu">
    <div>
      <div class="emp-table"> Employee Details <table class="all-emp">
          <tr>
            <th>Id</th>
            <th>Name..</th>
            <th>DOB</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Salary</th>
            <th>Action</th>
          </tr> <?php
			$sql = "SELECT * FROM employee";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
				  // output data of each row
				while($row = mysqli_fetch_assoc($result)) {
					?> <tr>
            <td> <?php echo $row["empid"]; ?> </td>
            <td> <?php echo $row["name"]; ?> </td>
            <td> <?php echo $row["dob"]; ?> </td>
            <td> <?php echo $row["email"]; ?> </td>
            <td> <?php echo $row["mobile"]; ?> </td>
            <td> <?php echo $row["salary"]; ?> </td>
            <td>
              <a class="edit" data-id=<?php echo $row["empid"]; ?>>
                <i class="material-icons" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Edit</i>
              </a>
              <a class="delete" data-id=<?php echo $row["empid"]; ?>>
                <i class="material-icons">Delete</i>
              </a>
			
            </td>
          </tr> <?php
				  }
				} else {
				  echo "0 results";
				}

			?>
        </table>
      </div>
    </div>
	
  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Edit Employe SHYAM</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">

			<form>
			  <div class="form-group">
				<label for="name">Name</label>
				<input type="name" class="form-control" id="name" placeholder="Enter Full Name">

				<label for="dob">Date of Birth</label>
				<input type="dob" class="form-control" id="dob" placeholder="Enter DOB">
				
				<label for="email">Email ID</label>
				<input type="email" class="form-control" id="email" placeholder="Enter email">
				
				<label for="mobile">Mobile No.</label>
				<input type="mobile" class="form-control" id="mobile" placeholder="Enter Mobile No.">
				
				<label for="salary">Salary</label>
				<input type="salary" class="form-control" id="salary" placeholder="Enter Salary">	
			  </div>

			  <button type="submit" class="btn btn-primary">Submit</button>
			</form>

        </div>

      </div>
    </div>
  </div>
  
    <!-- End: Schedule -->
    <!-- Start: Footer -->
    <div class="container-fluid footer">
      <div class="row footer-credit">
        <div class="col-md-6 col-sm-6">
          <p>&copy; 2023, <a href="#">Employee Management System</a> | All rights reserved. </p>
        </div>
        <div class="col-md-6 col-sm-6">
          <ul class="footer-menu">
            <li>
              <a href="#">About Us</a>
            </li>
            <li>
              <a href="#">Privacy Policy</a>
            </li>
            <li>
              <a href="#">Terms &amp; Condition</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- End: Footer -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/custom.js"></script>
  </body>
</html>