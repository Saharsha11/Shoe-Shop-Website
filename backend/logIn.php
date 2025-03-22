<?php
   require_once('dbconn\userDbconn.php');
   require_once('function.php');
   $email = $password = "";
   echo "nnn";

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      $email = $_POST["email"];
      $password = $_POST["pass"];
   }

   $sql = "SELECT Password FROM usersinfo WHERE Email = '$email'";
   // dd($sql);
   // $statement = $conn->prepare($sql);
   $result = $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
   // dd($result);

   // dd($result);
   if(isset($result[0]["Password"])) {
      // $statement->execute();
      // $result = $statement->get_result();
      // $row = $result->fetch_all();
      // dd($row);
      // $checkedPass = $result[0]["userPassword"];

      if($password === $result[0]["Password"]){
         redirect("../shoe/homepage.html?user_email=$email");
      }else{
         redirect("../index.php?err=1");
      }
   }else {
      redirect("../index.php?err=1");
   }




   // $sql = "SELECT userPassword FROM users WHERE userEmail = '$email'";
   // // dd($sql);
   // $statement = $conn->prepare($sql);
   
   
   // if($statement){
   //    $statement->execute();
   //    $result = $statement->get_result();
   //    $row = $result->fetch_all();
   //    // dd($row);
   //    $checkedPass = $row[0][0];

   //    if($password === $checkedPass){
   //       redirect("../index.php");
   //    }else{
   //       echo "Invalid email or password. Please try again.";
   //    }
   // }else{
   //    echo "Invalid email or password. Please try again.";
   // }

   
   

?>