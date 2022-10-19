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
            <li class="active"><a href="View_All_Customer.php">Customers</a></li>
            <li><a href="Transaction.php">Transaction</a></li>
            <li><a href="AboutUs.php">About Us</a></li>
            <li><a href="Contact_Us.php">Contact Us</a></li>
        </ul>
    </header>
    <!--Header end-->
    <!-- customer -->
    <section class="customer_list">
        <div class="title">
            <h2 class="titletext">Our <span>C</span>ustomer</h2>
        </div>
        <div class="custtable">
            <table class="table" id="table">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Account No</th>
                        <th scope="col">balance</th>
                        <th scope="col">Send Money From</th>
                    </tr>
                </thead>
                <?php
                $sql ="SELECT * FROM customer";
                $result = mysqli_query($conn,$sql);

                    while($row =mysqli_fetch_assoc($result)){
                        echo '
                        
                        <tr>
                            <td>'.$row['Name'].'</td>
                            <td>'.$row['Email'].'</td>
                            <td>'.$row['AccountNo'].'</td>
                            <td>'.$row['Balance'].'</td>
                            <td style="padding:10px 10px 10px 10px">
                            <a href="Send_Money.php?reads='.$row['AccountNo'].'">
                            <button type="submit" class="btton">Send money</button>
                            </a>
                            </td>
                        </tr>';
                    }
                ?>

            </table>
        </div>
    </section>
    <!-- customer end -->

</body>
</html>