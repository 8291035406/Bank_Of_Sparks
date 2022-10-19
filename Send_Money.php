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
            <li><a href="Check_Balance.php">Balance</a></li>
            <li class="active"><a href="Send_Money.php">Send money</a></li>
            <li><a href="View_All_Customer.php">Customers</a></li>
            <li><a href="Transaction.php">Transaction</a></li>
            <li><a href="AboutUs.php">About Us</a></li>
            <li><a href="Contact_Us.php">Contact Us</a></li>
        </ul>
    </header>
    <!--Header end-->
    <!-- send money -->

    <section class="sendMoney">
        <div class="title">
            <h2 class="titletext">Send <span>M</span>oney</h2>
        </div>
        <div class="transfer">
            <form class="sendfrom" action="Send_Money.php" method="post">
            <div class="inputbox">
                <input type="text" name="Senderaccno" id=""  placeholder="Sender's Account Number" value="<?php if(isset($_GET['reads'])){echo $_GET['reads'];} ?>">
            </div>
            <div class="inputbox">
                <input type="number" name="Amount" id=""
                placeholder="Amount to Transfer">
            </div>
            <div class="inputbox">
                <input type="text" id="" name="Recevieraccno" placeholder="Reciver's account Number">
            </div>
            <div class="inputbox">
                <input type="submit" value="Transfer">
            </div>
            <div class="inputbox">
                <p>Want To Check Your Account Balance?<a href="Check_Balance.php">  Click_Here</a></p>
            </div>
            <div class="inputbox">
                <?php
        if($_SERVER['REQUEST_METHOD']=='POST')
        {
            $Sender = $_POST['Senderaccno'];
            $Amount = $_POST['Amount'];
            $Reciver = $_POST['Recevieraccno'];

            if(empty($Sender) || empty($Amount) || empty($Reciver))
            {
                echo'
                <div class="alert alert-danger he" role="alert">
                        <div>
                            <h2>
                                <i class="fas fa-times-circle"></i>Please fill deatils
                            </h2>
                        </div>
                    </div>';
                    
            }
            else
            {
            
            $sql ="SELECT Balance FROM customer where AccountNo = '$Sender'";
            $checkbal =mysqli_query($conn,$sql);
            $ava_bal = mysqli_fetch_assoc($checkbal)['Balance'];

            if($ava_bal >= $Amount)
            {
                $sql1 = "UPDATE customer SET Balance= Balance-$Amount WHERE AccountNo='$Sender'";
                $sql2 = "UPDATE customer SET Balance= Balance+$Amount WHERE AccountNo='$Reciver'";

                $result1 = mysqli_query($conn, $sql1);
                $result2 = mysqli_query($conn, $sql2);

                if($result1 && $result2)
                {
                    echo'
                    <div class="alert alert-success he " role="alert">
                        <div>
                            <h2>
                                <i class="fas fa-check-circle"></i>Amount Transfer Successfully !
                            </h2>
                        </div>
                    </div>';

                    $sqltran = " insert into transaction (Sender,Receiver,Amount,Status) values('$Sender','$Reciver','$Amount','success')";
                    $sqltransact = mysqli_query($conn,$sqltran);
                }
                else
                {
                    echo'
                    <div class="alert alert-danger" role="alert">
                        <div>
                            <h2>
                                <i class="fas fa-times-circle"></i>Oops ! Somthing went to Wrong!
                            </h2>
                        </div>
                    </div>';
                    $sqltran = " insert into transaction (Sender,Receiver,Amount,Status) values('$Sender','$Reciver','$Amount','Failed')";
                    $sqltransact = mysqli_query($conn,$sqltran);
                }
            }
            else
            {
                    echo'
                    <div class="alert alert-danger" role="alert">
                        <div>
                            <h2>
                                <i class="fas fa-times-circle"></i> Not Sufficient Balance In Account!
                            </h2>
                        </div>
                    </div>';
                    $sqltran = " insert into transaction (Sender,Receiver,Amount,Status) values('$Sender','$Reciver','$Amount','Failed')";
                    $sqltransact = mysqli_query($conn,$sqltran);    
            }
                
            }
        }
        ?>
        </form>
            </div>
        </div>
    </section>
    
    <!-- send money end Amount Receiver Sender Status -->
</body>
</html>