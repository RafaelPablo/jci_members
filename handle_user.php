<?php
  switch(@$_REQUEST["action"]){
    case 'register':
      $name = $_POST["name"];
      $phone = $_POST["phone"];
      $email = $_POST["email"];
      $dateOfBirth = $_POST["dateOfBirth"];

      $sql = "INSERT INTO USERS (name, phone, email, dateOfBirth) VALUES ('{$name}','{$phone}','{$email}','{$dateOfBirth}')";

      $result = $connection->query($sql);

      if($result==true){
        print "<script>alert('Successfully registered!');</script>";
        print "<script>location.href='?page=List'</script>";
      }else{
        print "<script>alert('Not registered!');</script>";
        print "<script>location.href='?page=List'</script>";
      }
    break;

    case 'edit':
      $name = $_POST["name"];
      $phone = $_POST["phone"];
      $email = $_POST["email"];
      $dateOfBirth = $_POST["dateOfBirth"];

      $sql = "UPDATE USERS SET NAME='{$name}', PHONE='{$phone}', EMAIL='{$email}', DATEOFBIRTH='{$dateOfBirth}' WHERE ID=".$_REQUEST["id"];

      $result = $connection->query($sql);

      if($result==true){
        print "<script>alert('Successfully updated!');</script>";
        print "<script>location.href='?page=List'</script>";
      }else{
        print "<script>alert('Not updated!');</script>";
        print "<script>location.href='?page=List'</script>";
      }
    break;

    case 'delete':
      $sql = "DELETE FROM USERS WHERE ID=".$_REQUEST["id"];

      $result = $connection->query($sql);

      if($result==true){
        print "<script>alert('Successfully deleted!');</script>";
        print "<script>location.href='?page=List'</script>";
      }else{
        print "<script>alert('Not deleted!');</script>";
        print "<script>location.href='?page=List'</script>";
      }
    break;
  }
?>