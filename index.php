<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THE BANK OF SPARK'S</title>
    <link rel="stylesheet" href="style.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!--Header-->
    <header class="sticky">
        <a href="index.php" class="logo">THE BANK OF <span>SPARK'S</span></a>
        <div class="menuToggle" open-on-click="toggleMenu"></div>
        <ul class="navigation">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="Check_Balance.php">Balance</a></li>
            <li><a href="Send_Money.php">Send money</a></li>
            <li><a href="View_All_Customer.php">Customers</a></li>
            <li><a href="Transaction.php">Transaction</a></li>
            <li><a href="AboutUs.php">About Us</a></li>
            <li><a href="Contact_Us.php">Contact Us</a></li>
        </ul>
    </header>
    <!--Header end-->

    <!-- Section -->
    <section class="banner" id="banner">
        <div class="content">
            <h2>Welcome to "<span>The Bank Of Spark's</span>".</h2>
        </div>

    </section>
    <!-- Section end -->

    <section class="services">
        <div class="title">
            <h2 class="titletext">Our <span>S</span>ervices</h2>
        </div>
        <div class="container">
            <div class="box">
                <div class="imgbx">
                    <i class="fas fa-users fa-7x"></i>
                </div>
                <div class="tex">
                    <p>
                        Here, you can check the list of customers and customers details.

                    </p>
                </div>
                
                <div class="btn">
                    <a href="View_All_Customer.php"><button type="button" class="button"> All Customer</button></a>
                </div>
            </div>

            <div class="box">
                <div class="imgbx">
                    <i class="fas fa-comments-dollar fa-7x"></i>
                </div>
                <div class="tex">
                    <p>
                        Here, you can Transfer money to anathor Account.

                    </p>
                </div>
                
                <div class="btn">
                    <a href="Send_Money.php"><button type="button" class="button">Send Money </button></a>
                </div>
            </div>

            <div class="box">
                <div class="imgbx">
                     <i class="fas fa-coins fa-7x"></i>
                </div>
                <div class="tex">
                    <p>
                        Here, you can check the remaining balance in your account.

                    </p>
                </div>
                <div class="btn">
                    <a href="Check_Balance.php"><button type="button" class="button">Balance</button></a>
                </div>
            </div>


        </div>
    </section>

    <script type="text/javascript">
        window.addEventListener('scroll',function(){
            const header = document.querySelector('header');
            header.classList.toggle("sticky", window.scrollY > 0)
        });

        

        function toggleMenu() {
            const menuToggle = document.querySelector('.menuToggle');
            menuToggle.classList.toggle('active');
        }
        
    </script>
    
</body>
</html>