<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="stysle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <?php include 'project\header.html';?>
		<div class="account-page">
            <div class="container">
                <div class="row">
                    <div class="col2">
                        <img src="project\image1.3.png" width="100%">
                    </div>
                    <div class="col2">
                        <div class="form-container">
                            <div class="form-btn">
                                <!-- <h1>Create Account</h1> -->
                               <span>Create Account</span>
                               <hr id="Indicator">
                            </div>
                            <form action="insert.php" method="post">
			
			
            <p>
                            <label for="firstName">First Name:</label>
                            <input type="text" name="first_name" id="firstName">
                        </p>
            
            
            
                        
                        
            <p>
                            <label for="lastName">Last Name:</label>
                            <input type="text" name="last_name" id="lastName">
                        </p>
            
            
            
                        
                        
            <p>
                            <label for="Gender">Gender:</label>
                            <input type="text" name="gender" id="Gender">
                        </p>
            
            
                        
                        
                        
            <p>
                            <label for="Address">Address:</label>
                            <input type="text" name="address" id="Address">
                        </p>
            
            
                        
                        
                        
            <p>
                            <label for="emailAddress">Email Address:</label>
                            <input type="text" name="email" id="emailAddress">
                        </p>
            
            
                        <button type="submit" value="submit" class="btn">Submit</button>
                    
                    </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

		
        <?php include 'project\footer.html';?>
</body>

</html>
