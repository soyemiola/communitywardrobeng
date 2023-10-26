<?php 
  if (!$_SESSION['auth'] || $_SESSION['auth'] != True) {
    header("Location: auth-login.php");
    exit();
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Community WardrobeNG </title>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="#">
    <meta name="keywords" content="">
    <meta name="author" content="#">
    <link rel="apple-touch-icon" sizes="180x180" href="../images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon-16x16.png">
    <link rel="manifest" href="../images/site.webmanifest">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="files/bower_components/bootstrap/dist/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="files/assets/icon/themify-icons/themify-icons.css">

    <link rel="stylesheet" type="text/css" href="files/assets/icon/icofont/css/icofont.css">

    <link rel="stylesheet" type="text/css" href="files/assets/icon/feather/css/feather.css">

    <link rel="stylesheet" type="text/css" href="files/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="../files/assets/pages/data-table/css/buttons.dataTables.min.css"> -->
    <link rel="stylesheet" type="text/css" href="files/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">


    <link rel="stylesheet" type="text/css" href="files/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="files/assets/css/jquery.mCustomScrollbar.css"> 
  </head>
