<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (`user_id`, `first name`, `last name`, `Gender`, `Mobile number`, `Birthday`, `email`, `password`) VALUES (`$user_id`, `$first name`, `$last name`, `$Gender`, `$Mobile number`, `$Birthday`, `$email`, `$password`);

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>

<html>
    <head>
        <body>
            <title>Food shop</title>
         
            <h1>Welcome To Food Shop</h1>
            <section class="container">
                <form id="my-form">
                 <div>
                     
                 </div>
                 <div>
                    <label>First name</label>
                    <input type="text" name="first name"placeholder="enter first name"/>
                    </div>
                    <div>
                        <label>Last name </label>
                        <input type="text" name="Last name"/>
                    </div>
                    
                  <div><label>Gender</label><select name="gender">
                    <option value="male">male</option><option value="female">female</option><option value="others">others</option></select>
                </div>
                <div>
                    <label>Mobile Number</label>
                    <input type="number" name="Mobile Number"/>
                </div>
            
                <div><br>
                    <label>Birthday</label>
                    <input type="datetime-local" name="birthday"/>
                </br>
                </div>
                
                <div>
                 <label>Email:</label>
                 <input type="email" name="Email" placeholder="enter your email"></div>
               <div> 
                   <label>Password:</label>
                 <input type="password" name="Password" placeholder="enter your password">
             </div> 
             <input id="button" type="submit" value="Signup"><br><br>

			<a href="login.php">Click to Login</a><br><br>
             </form></section>

        </body>
    </head>

</html>
<style type="text/css">
body{
    background-image: url('../temp/image/food1.jpeg');
    background-color: brown;

}
h1{
    color: rgb(247, 3, 194);
    padding: 1rem;
    font-size: 300%;
}
#my-form{
    padding: 3rem;
    background: white ;
    display: ;
    top: 50%;
    left: 50%;
    transform: translate();
    color:black rgb(48, 38, 38);
    font-size: 150%;

}
#my-form label{
     display: block;
     padding:
}
#my-form input{
    width: 40%;
    padding: 8px;
    margin-bottom: 10px;
    border-radius: 5px;
    border: 1px solid rgb(129, 61, 61);
 *{
     margin:0;
     padding: 0;
     box-sizing: border-box;
  }
  .juni{
    display: block;
    width:100%;
    padding: 10px 15px;
    background: black;
    color: #fff;
    border-radius: 5px;
    color: white;
    background-size: 20px;
    size: 100px;
    
}
.btn:hover{
background: #444;
}
.container{
    margin-top: auto;
    width: 100px;
    overflow: auto;
    padding: 3rem 2rem;
    font-size: 200%;
    color: red;
}

</style>