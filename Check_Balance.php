<?php
include_once('MySql.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THE BANK OF SPARK'S</title>
    <link rel="stylesheet" href="style.css">
    <script src="my.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
<body>
    <!--Header-->
    <header class="sticky">
        <a href="index.php" class="logo">THE BANK OF <span>SPARK'S</span></a>
        <div class="menuToggle"></div>
        <ul class="navigation">
            <li><a href="index.php">Home</a></li>
            <li class="active"><a href="Check_Balance.php">Balance</a></li>
            <li><a href="Send_Money.php">Send money</a></li>
            <li><a href="View_All_Customer.php">Customers</a></li>
            <li><a href="Transaction.php">Transaction</a></li>
            <li><a href="AboutUs.php">About Us</a></li>
            <li><a href="Contact_Us.php">Contact Us</a></li>
        </ul>
    </header>
    <!--Header end-->
    <!-- check balance -->
    <section class="balance">
        <div class="title">
            <h2 class="titletext">Check <span>B</span>alance</h2>
        </div>
        <div class="bal">
            <form action="Check_Balance.php" method="post">
            <div class="inputbox">
                <input type="text" name="Accpuntno" id=""  placeholder=" Account Number">
            </div>
            <div class="inputbox">
                <input type="submit" value="balance" name="btn-check">
            </div>
            <div class="inputbox">
                <p>Don't Remember Your Account Number?<a href="View_All_Customer.php">  Click_Here</a></p>
            </div>

            <?php
                if($_SERVER['REQUEST_METHOD']== 'POST')
                {
                    
                    $accno = $_POST['Accpuntno'];
                    if(empty($accno))
                    {
                        echo'
                        <div class="alert alert-danger he" role="alert">
                            <div>
                                <h2>
                                <i class="fas fa-times-circle"></i>please fill details
                                </h2>
                            </div>
                        </div>';
                    }
                    else
                    {
                        $sql = "SELECT Balance FROM customer    where AccountNo='$accno'";
                        $result = mysqli_query($conn, $sql);
                        if($result)
                        {
                            echo '
                            <div class="alert alert-success he" role="alert">
                                <h2> 
                                    <i class="fas fa-rupee-sign" aria-hidden="true"></i>'.mysqli_fetch_assoc($result)['Balance'].'
                                </h2>
                            </div>';
                        }
                        else
                        {
                            echo '
                            <div class="alert alert-danger he" role="alert">
                                <h2>
                                    <i class="fas fa-times-circle"></i>
                                    Something went wrong!
                                </h2>
                            
                            </div>';
                        }
                    }
                }
            ?>
    

            </form>
            
        </div>
        

    </section>
    <!-- check balance end -->
</body>
</html>