<?php 
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="shared.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <header>
     <div class="container-fluid">
	   <div class="row">
			<img class="img-responsive center-block" src="images/FoodNotes.jpg" alt="background image of pets" height="50" width="100">
	   </div>
       <div class="row">
         <div class="col-sm-1 col-xs-12 col-sm-offset-10 text-right" >Register</div>
         <div class="col-sm-1 col-xs-12 text-right" >
		 <?php 
		 if (isset($_SESSION['username']))
			 echo $_SESSION['username'] .'<a href="logout.php">Logout</a>';
		 
		 else 
			 echo '<a href="login.php">Login</a>';
		 ?>
		 </div>
       </div>
	 </div>
       
  </header>
<div class="container-fluid">
  <h1>Total Potential Savings:10$</h1>
  <p>May-2017</p>
  <div id="content">
        <ul id="grocery-list" class="list-group">
			<li class="list-group-item">
				<a class="toggle-link" href="#meat-area" data-toggle="collapse">
				<span class="h4">Meat</span>
				</a>
				<div id="meat-area" class="collapse categories">
					<table id="meat-table" class="table table-hover">
						<tbody>
							<thead>
								<tr>
									<th>Product</th>
									<th>Bought($)</th>
									<th>Waste</th>
								</tr>
							</thead>
								<tr>
									<th>Beef</th>
									<th>30</th>
									<th>25%</th>
								</tr>
								<tr>
									<th>Pork</th>
									<th>15</th>
									<th>0%</th>
								</tr>
								<tr>
									<th>Chicken</th>
									<th>10</th>
									<th>50%</th>
								</tr>
						</tbody>
						
					</table>
				</div>
			</li>
			<li class="list-group-item">
				<a class="toggle-link" href="#vegitable-area" data-toggle="collapse">
					<span class="h4">Vegitable</span>
				</a>
				<div id="vegitable-area" class="collapse categories">
					<table id="vegitable-table" class="table table-hover">
						<tbody>
							<thead>
								<tr>
									<th>Product</th>
									<th>Bought($)</th>
									<th>Waste</th>
								</tr>
							</thead>
								<tr>
									<th>Beef</th>
									<th>30</th>
									<th>25%</th>
								</tr>
								<tr>
									<th>Pork</th>
									<th>15</th>
									<th>0%</th>
								</tr>
								<tr>
									<th>Chicken</th>
									<th>10</th>
									<th>50%</th>
								</tr>
						</tbody>
					</table>
				</div>
			</li>
			<li class="list-group-item">
				<a class="toggle-link" href="#diary-area"  data-toggle="collapse">
					<span class="h4">Diary</span>
				</a>
				<div id="diary-area" class="collapse categories">
					<table id="diary-table" class="table table-hover">
						<tbody>
							<thead>
								<tr>
									<th>Product</th>
									<th>Bought($)</th>
									<th>Waste</th>
								</tr>
							</thead>
								<tr>
									<th>Beef</th>
									<th>30</th>
									<th>25%</th>
								</tr>
								<tr>
									<th>Pork</th>
									<th>15</th>
									<th>0%</th>
								</tr>
								<tr>
									<th>Chicken</th>
									<th>10</th>
									<th>50%</th>
								</tr>
						</tbody>
					</table>
				</div>
			</li>
        </ul>
    </div>
</div>

</body>
</html>
