<!DOCTYPE html>
<html>

<head>
	<title>All Products</title>
	<style>
		<?php include 'body.css'; ?>
	</style>

</head>
<style>

</style>
<body>
	<center>
        <?php include 'project\header.html';?>
		<?php
		// require_once("./body.css")
		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost:4306", "root", "", "ecomm");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		
		// Performing insert query execution
		// here our table name is college
		$sql = "SELECT * FROM headphones";
		$result=$conn->query($sql);
		
		if($result-> num_rows > 0)
				{
					while($row=$result->fetch_assoc())
					{
						
						echo ' <table>
						<tr><td>
						<div class="small-container"><div class="row">
						<div class="col-4"><img src="'.$row["img_link"].'" style = "height:250px"></td>
						 <br> <td><div class ="temp"><h2>'.$row["head_name"].'</h2><br> 
						 <h3>'.$row["price"].'</h3> <p>'.$row["description"].' <br>
						  <a href="'.$row["amazon"].' "target="_blank" style="color : blue">Amazon link</a> 
						  <br> <a href="'.$row["flipkart"].' "target="_blank" style="color : blue">flipkart link</a></p>
						  <br></div></div></div></div></td></tr></table><br>';
                        
					}
				}
				
				echo '<br>';
        $sql1 = "SELECT * FROM earbuds";
        $result=$conn->query($sql1);

        if($result-> num_rows > 0)
        {
            while($row=$result->fetch_assoc())
            {
                                
                    echo ' <table>
						<tr><td>
						<div class="small-container"><div class="row">
						<div class="col-4"><img src="'.$row["img_link"].'" style = "height:250px"></td>
						 <br> <td><div class ="temp"><h2>'.$row["head_name"].'</h2><br> 
						 <h3>'.$row["price"].'</h3> <p>'.$row["description"].' <br>
						  <a href="'.$row["amazon"].' "target="_blank" style="color : blue">Amazon link</a> 
						  <br> <a href="'.$row["flipkart"].' "target="_blank" style="color : blue">flipkart link</a></p>
						  <br></div></div></div></div></td></tr></table><br>';
                                
           }
        }
                        
        echo '<br>';
        $sql2 = "SELECT * FROM smartwatch";
		$result=$conn->query($sql2);
		
		if($result-> num_rows > 0)
				{
					while($row=$result->fetch_assoc())
					{
						
						echo ' <table>
						<tr><td>
						<div class="small-container"><div class="row">
						<div class="col-4"><img src="'.$row["img_link"].'" style = "height:250px"></td>
						 <br> <td><div class ="temp"><h2>'.$row["head_name"].'</h2><br> 
						 <h3>'.$row["price"].'</h3> <p>'.$row["description"].' <br>
						  <a href="'.$row["amazon"].' "target="_blank" style="color : blue">Amazon link</a> 
						  <br> <a href="'.$row["flipkart"].' "target="_blank" style="color : blue">flipkart link</a></p>
						  <br></div></div></div></div></td></tr></table><br>';
                        
					}
				}
				
				echo '<br>';
		$sql = "SELECT * FROM earphone";
		$result=$conn->query($sql);
		
		if($result-> num_rows > 0)
				{
					while($row=$result->fetch_assoc())
					{
						
						echo ' <table>
						<tr><td>
						<div class="small-container"><div class="row">
						<div class="col-4"><img src="'.$row["img_link"].'" style = "height:250px"></td>
						 <br> <td><div class ="temp"><h2>'.$row["head_name"].'</h2><br> 
						 <h3>'.$row["price"].'</h3> <p>'.$row["description"].' <br>
						  <a href="'.$row["amazon"].' "target="_blank" style="color : blue">Amazon link</a> 
						  <br> <a href="'.$row["flipkart"].' "target="_blank" style="color : blue">flipkart link</a></p>
						  <br></div></div></div></div></td></tr></table><br>';
                        
					}
				}
				
				echo '<br>';
		// Close connection
		$result->free();
		$conn->close();
		?>
        <?php include 'project\footer.html';?>
	</center>
</body>

</html>
