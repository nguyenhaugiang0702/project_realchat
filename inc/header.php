<?php
include_once 'config/config.php';
include_once 'lib/database.php';
$db = new Database;
?>
<?php
if (isset($_SESSION['user_id'])) {
  $user_id = $_SESSION['user_id'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-startup-image" href="https://www.wepora.com/asset/img/wepora-logo.png">
  <link rel="icon" type="image/x-icon" href="https://www.wepora.com/asset/img/wepora-logo.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsive.css">
  <link rel="stylesheet" href="assets/css/emoji.css">
  <script src="assets/js/jquery.js"></script>
  <title>Real Chat Application</title>
</head>

<body>
  <?php
  if (isset($_GET['action']) && $_GET['action'] == "logout") {
    session_destroy();
    $sql = "UPDATE user SET status='Offline' WHERE id='$user_id'";
    $db->update($sql);
    echo "<script>window.location='index.php';</script>";
  }
  ?>