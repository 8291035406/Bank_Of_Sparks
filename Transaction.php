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
            <li><a href="Send_Money.php">Send money</a></li>
            <li><a href="View_All_Customer.php">Customers</a></li>
            <li class="active"><a href="Transaction.php">Transaction</a></li>
            <li><a href="AboutUs.php">About Us</a></li>
            <li><a href="Contact_Us.php">Contact Us</a></li>
        </ul>
    </header>
    <!--Header end-->
    <!-- Transaction -->
    <section class="transaction">
        <div class="title">
            <h2 class="titletext"><span>T</span>ransaction's</h2>
        </div>
        <div class="historytranser">
            <table class="table2">
                <thead>
                    <tr>
                        <th>Sender</th>
                        <th>Reciver</th>
                        <th>Amount</th>
                        <th>Staus</th>
                    </tr>
                </thead>
                <?php
                echo "<tbody>";
                    $sql = "SELECT * FROM transaction";
                    $result = mysqli_query($conn,$sql);

                    while($row =mysqli_fetch_assoc($result))
                    {
                        if(!(empty($row['Sender']) && empty($row['Receiver']) && empty($row[Amount]))){
                            echo'
                            <tr>
                                <td>'.$row['Sender'].'</td>
                                <td>'.$row['Receiver'].'</td>
                                <td>'.$row['Amount'].'</td>
                                <td>'?><?php if($row['Status'] == "success"){echo'<b><p style="color:green;">Success</p></b>';}else{echo '<b><p style="color:red;">Failed</p></b>';}?>
                                <?php echo'</td>
                            </tr>';}
                        }
                    echo "</tbody>";
                ?>
            </table>
        </div>
    </section>
    <!-- Transaction end -->
</body>
</html>