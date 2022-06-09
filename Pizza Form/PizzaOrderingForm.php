<?php

session_start();

?>


<html>
<!--INSERT NAMES AND STUENT NUMBERS BELOW-->
    <style>
	.error {color:red;}
    html{
        text-align: center;
        background-color: #e2e2e2;
    }
    h1{
        border: 6px;
        background-color: lightblue;
        display: inline-block;
        padding: 15px;
        border-radius: 15px;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    }
    form{
        border: 6px;
        background-color: lightblue;
        display: inline-block;
        padding: 15px;
        border-radius: 15px;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    }
    #btn{
        background-color:lightgreen; /* Green */
        border: solid;
        border-color: white;
        border-radius: 5px;
        color: black;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        
    }
    #btn:hover{
        background-color: green;
    }ul{
        background-color:#e2e2e2; /* Green */
        border: solid;
        border-color: whitesmoke;
        border-radius: 5px;
        color: black;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
    }
    input{
        border-radius: 15px;
        border-color: white;
    }
    textarea{
        border-radius: 15px;
        border-color: white;
    }
    p{
        color: black;
    }
    h1{
        color: black;
    }select{
        background-color:#e2e2e2; /* Green */
        border: solid;
        border-color: whitesmoke;
        border-radius: 5px;
        color: black;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        margin-bottom: 20px;
    }

    </style>

    <header>
        <title>Pizza Order Form</title>
        <h1>Order Pizza!</h1>
    </header>
<body>

<?php
$name="";
$email="";
$phoneNumber="";
$address="";
$sizeSelection="";
$pizzaTypes="";

$nameErr="";
$emailErr="";
$phoneNumberErr="";
$addressErr="";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	if(empty($_POST["name"]))
	{
		$nameErr="Name is required";
	}
	else
	{
		$name=test_input($_POST["name"]);
		if(!preg_match("/^[a-zA-Z ]*$/", $name))
		{
			$nameErr="Only letters and white space allowed";
		}
	}
	
	if(empty($_POST["email"]))
	{
		$emailErr="Email is required";
	}
	else
	{
		$email=test_input($_POST["email"]);
		if(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $email))
		{
			$emailErr="Valid email required";
		}
	}
	
	if(empty($_POST["phoneNumber"]))
	{
		$phoneNumberErr="Phone is required";
	}
	else
	{
		$phoneNumber=test_input($_POST["phoneNumber"]);
		if(!preg_match("/^[\+0-9\-\(\)\s]*$/",$phoneNumber))
		{
			$phoneNumberErr="Enter a valid phone number";
		}
	}
	
	if(empty($_POST["address"]))
	{
		$addressErr="Address is required";
	}
	else
	{
		$address=test_input($_POST["address"]);
		if(!preg_match("/^[a-zA-Z0-9 ]*$/", $address))
		{
			$addressErr="Only letters, numbers and white space allowed";
		}
	}	
	if($nameErr=="" && $emailErr=="" && $phoneNumberErr=="" && $addressErr=="")
	{
		$_SESSION["posted_data"]=$_POST;
		header('Location: http://localhost/Assignment2/OrderConfirmation.php');
		exit();
	}
}
function test_input($data)
{
	$data=trim($data);
	$data=stripcslashes($data);
	$data=htmlspecialchars($data);
	return $data;
}	
?>
			
			
            <form name="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
			<p><span class="error">* required field. </span></p>
            <p>Name: <input type="text" name="name" value="<?php echo $name; ?>"/><span class="error">* <?php echo $nameErr; ?> </span></p>
            <p>Email: <input type="text" name="email" value="<?php echo $email; ?>"/><span class="error">* <?php echo $emailErr; ?> </span></p>
            <p>Phone Number: <input type="text" name="phoneNumber" value="<?php echo $phoneNumber; ?>"/><span class="error">* <?php echo $phoneNumberErr; ?> </span></p>
            <p>Delivery Address: <input type="text" name="address" value="<?php echo $address; ?>"/><span class="error">* <?php echo $addressErr; ?> </span></p>
            <ul>
                <label for="small">Small</label><br>
                <li><input type="radio" id="small" class="small" name="sizeSelection" value="small" checked></li>
                <label for="small">Medium</label><br>
                <li><input type="radio" id="medium" class="medium" name="sizeSelection" value="medium"></li>
                <label for="small">Large</label><br>
                <li><input type="radio" id="large" class="large" name="sizeSelection" value="large"></li>
            </ul><br>

            <select id="pizzaTypes" name="pizzaTypes">
                <option value="pepperoni">Pepperoni</option>
                <option value="hawaiian">Hawaiian</option>
                <option value="cheese" selected>Cheese</option>
                <option value="meat lovers">Meat Lovers</option>
                <option value="vegetarian">Vegetarian</option>
            </select>
			<br><br>

            <input type="submit" value="Submit" id="btn">
        </form>	
		</body>
      </html>