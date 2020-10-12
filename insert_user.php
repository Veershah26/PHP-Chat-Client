<?php
include ("connection.php");

    if(isset($_POST['sign_up'])){
        $first_name=htmlentities(mysqli_real_escape_string($con,$_POST['first_name']));
        $last_name=htmlentities(mysqli_real_escape_string($con,$_POST['last_name']));
        $pass=htmlentities(mysqli_real_escape_string($con,$_POST['u_pass']));
        $email=htmlentities(mysqli_real_escape_string($con,$_POST['u_email']));
        $country=htmlentities(mysqli_real_escape_string($con,$_POST['u_country']));
        $gender=htmlentities(mysqli_real_escape_string($con,$_POST['u_gender']));
        $birthday=htmlentities(mysqli_real_escape_string($con,$_POST['u_birthday']));
        $status="varifide";
        $posts="no";
        $newgid=sprintf('%05d', rand(0,9999));
        $username=strtolower($first_name. "_". $last_name. "_". $newgid);
        $check_user_query="select user_name from users where user_email='$email'";
        $run_username=mysql_query($con,$check_user_query);

        if (strlen($pass)<9){
            echo "password should be of 9 cher or bigger";
        }
        $check_email="select * from users where user_email='$email'";
        $run_email=mssql_query($check_email);
        $check=mysqli_num_rows($run_email);

        if($check==1){
            echo "This email is already in use please use another email";
        }
        $rand=rand(1,3);
        if ($rand==1){
            $profile_pic="hu.jpg";
        else if ($rand==2){
            $profile_pic="hum.jpg";
            }
        elseif ($rand==3){
            $profile_pic="pic_jpg";
        }

        }
        $insert="insert into users (f_name,l_name,user_name,describe_user,Relationship,user_pass,user_email,user_country,user_gender,user_birthday,user_image,user_cover,user_reg_date,status,postes,recovery_account)
        values('$first_name','$last_name','$username','Reach to millions by your voice ','...','$pass','$email','$country','$gender','$birthday','$profile_pic','cover.jpg','NOW()','status','posts','a halo')";
        $query=mssql_query($con,$insert);
        if ($query){
            echo "well done ";
        }
        else{
            echo" something went wrong ";
        }







    }
?>