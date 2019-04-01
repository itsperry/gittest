<?php
  include 'content/includes/connectdb.inc.php';
  $user = empty($_POST["username"]) ? null : htmlspecialchars($_POST["username"]);
  $pass = empty($_POST["password"]) ? null : htmlspecialchars($_POST["password"]);
  $fname = empty($_POST["fname"]) ? null : htmlspecialchars($_POST["fname"]);
  $lname = empty($_POST["lname"]) ? null : htmlspecialchars($_POST["lname"]);
  $security = "4";

  if ($user && $pass && $fname && $lname && $security) {
   $sql = "INSERT INTO users (user, pass, name, lastname, rank) VALUES (:user, :pass , :name, :lastname, :rank)";

   $params = array(
       ":user" => $user,
       ":pass" => $pass,
       ":name" => $fname,
       ":lastname" => $lname,
       ":rank" => $security
   );

   try {
     $sth = $db->prepare($sql);
     $sth->execute($params);
     header("Location: index.php?page=home");
   } catch (PDOException $ex) {
     header("Location: index.php?page=home");
   }
 } else {
   header("location: index.php?page=home");
 }
?>
