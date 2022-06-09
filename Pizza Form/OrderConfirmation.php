<html>
<style>
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
    }span{
        border: 6px;
        background-color: lightblue;
        display: inline-block;
        padding: 15px;
        border-radius: 15px;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    }
</style>
<?php 
session_start();


function message(){
    //gets values need from form using post
    $name = $_SESSION["posted_data"]['name'];
    $email = $_SESSION["posted_data"]['email'];
    $phoneNum = $_SESSION["posted_data"]['phoneNumber'];
    $address = $_SESSION["posted_data"]['address'];
    $pizzaType = $_SESSION["posted_data"]['pizzaTypes'];
    $sizeSelection = $_SESSION["posted_data"]['sizeSelection'];

    //Displays thank you message to user, while confrirming the order details.
    echo "Thank you ".$name." for ordering from us, we will be preparing a ".$sizeSelection." "
    .$pizzaType." Pizza, that is going to be delivered to ".$address;
}

    //gets values from form using post
    $pizzaType = $_SESSION["posted_data"]['pizzaTypes'];
    $sizeSelection = $_SESSION["posted_data"]['sizeSelection'];
   
    //Checkes the pizza size and type and sets total variable to the proper amoutn
    //these if statements also set the varible to decide what picture to display
    if($pizzaType == 'pepperoni' AND $sizeSelection == 'small'){
        $total = 10;
        $pic = '<img src="/Assignment2/PizzaPics/pepperoni.jpg" style="width:400px;height400px">';
    }if($pizzaType == 'pepperoni' AND $sizeSelection == 'medium'){
        $total = 18;
        $pic = '<img src="/Assignment2/PizzaPics/pepperoni.jpg" style="width:400px;height400px">';
    }if($pizzaType == 'pepperoni' AND $sizeSelection == 'large'){
        $total = 25;
        $pic = '<img src="/Assignment2/PizzaPics/pepperoni.jpg" style="width:400px;height400px">';
    }if($pizzaType == 'hawaiian' AND $sizeSelection == 'small'){
        $total = 10;
        $pic = '<img src="/Assignment2/PizzaPics/hawaiian.jpg" style="width:400px;height400px">';
    }if($pizzaType == 'hawaiian' AND $sizeSelection == 'medium'){
        $total = 15;
        $pic = '<img src="/Assignment2/PizzaPics/hawaiian.jpg" style="width:400px;height400px">';
    }if($pizzaType == 'hawaiian' AND $sizeSelection == 'large'){
        $total = 22;
        $pic = '<img src="/Assignment2/PizzaPics/hawaiian.jpg" style="width:400px;height400px">';
    }if($pizzaType == 'cheese' AND $sizeSelection == 'small'){
        $total = 7;
        $pic = '<img src="/Assignment2/PizzaPics/cheese.jpg" style="width:400px;height400px">';
    }if($pizzaType == 'cheese' AND $sizeSelection == 'medium'){
        $total = 10;
        $pic = '<img src="/Assignment2/PizzaPics/cheese.jpg" style="width:400px;height400px">';
    }if($pizzaType == 'cheese' AND $sizeSelection == 'large'){
        $total = 15;
        $pic = '<img src="/Assignment2/PizzaPics/cheese.jpg" style="width:400px;height400px">';
    }if($pizzaType == 'meat lovers' AND $sizeSelection == 'small'){
        $total = 20;
        $pic = '<img src="/Assignment2/PizzaPics/Meat Lovers.png" style="width:400px;height400px">';
    }if($pizzaType == 'meat lovers' AND $sizeSelection == 'medium'){
        $total = 25;
        $pic = '<img src="/Assignment2/PizzaPics/Meat Lovers.png" style="width:400px;height400px">';
    }if($pizzaType == 'meat lovers' AND $sizeSelection == 'large'){
        $total = 30;
        $pic = '<img src="/Assignment2/PizzaPics/Meat Lovers.png" style="width:400px;height400px">';
    }if($pizzaType == 'vegetarian' AND $sizeSelection == 'small'){
        $total = 8;
        $pic = '<img src="/Assignment2/PizzaPics/vegetarian.jpg" style="width:400px;height400px">';
    }if($pizzaType == 'vegetarian' AND $sizeSelection == 'medium'){
        $total = 14;
        $pic = '<img src="/Assignment2/PizzaPics/vegetarian.jpg" style="width:400px;height400px">';
    }if($pizzaType == 'vegetarian' AND $sizeSelection == 'large'){
        $total = 18;
        $pic = '<img src="/Assignment2/PizzaPics/vegetarian.jpg" style="width:400px;height400px">';
    }

?>

<h1>Thanks For Ordering</h1>
<br><br><br>
<span> 
<p><?php message() ?></p>
<br>
<p>The total for your order has come out to $<?php echo $total ?> and $<?php echo $total * 1.13 ?> with Tax.</p>
</span>
<br><br>
<span> 
<p><?php echo $pic ?></p>
</span>
</html>