<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THE BANK OF SPARK'S</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
            <li><a href="Transaction.php">Transaction</a></li>
            <li><a href="AboutUs.php">About Us</a></li>
            <li class="active"><a href="Contact_Us.php">Contact Us</a></li>
        </ul>
    </header>
    <!--Header end-->
    
    <!-- contact form-->
    
    <section class="contact" id="contact">
        <div class="title">
            <h2 class="titletext"><span>C</span>ontact Us</h2>
        </div>
        <div class="contactform">
            <?php
                $Msg ="";
                if(isset($_GET['error']))
                {
                    $Msg = "Please fill in the blanks.";
                    echo '<div class="alert alert-danger ">'.$Msg.'</div>';

                }

                if(isset($_GET['success']))
                {
                    $Msg = "Thank you for contacting us.";
                    echo '<div class="alert alert-success ">'.$Msg.'</div>';

                }

                if(isset($_GET['errors']))
                {
                    $Msg = "oops somthing went to wrong!.";
                    echo '<div class="alert alert-danger ">'.$Msg.'</div>';

                }


                
            ?>
        
            <h3>Send Message</h3>
            <form action="process.php" method="post">
            <div class="inputbox">
                <input type="text" name="Name" id="" placeholder="Name">
            </div>
            <div class="inputbox">
                   <input type="email" name="Email" id="" placeholder="Email">
            </div>
            <div class="inputbox">
                <textarea name="Message" id="" cols="30" rows="10" placeholder="Enter Your Message"></textarea>
            </div>
            <div class="inputbox">
                <input type="submit" value="Send" name="btn-send">
            </div>
            </form>
        </div>
    </section>

<!-- contact form end-->

</body>
</html>