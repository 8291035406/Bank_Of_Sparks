<?php 


    require_once('MySql.php');

        if(isset($_POST['btn-send']))
        {
            $Name = mysqli_real_escape_string($conn,$_POST['Name']);
            $Email = mysqli_real_escape_string($conn,$_POST['Email']);
            $Message = mysqli_real_escape_string($conn,$_POST['Message']);

            if(empty($Name) || empty($Email) || empty($Message))
            {
                header('location:Contact_Us.php?error');
            }
            else
            {
                $sql = "insert into contactus (Name,Email,Message) values('$Name','$Email','$Message')";
                $result = mysqli_query($conn,$sql);

                if($result)
                {
                    header('location:Contact_Us.php?success');
                }
                else
                {
                    header('location:Contact_Us.php?errors');
                }
            }

        }
        else
        {
            header('location:Contact_Us.php');
        }
?>