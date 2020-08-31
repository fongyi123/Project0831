<?php
require_once("connDB.php");

session_start();
if (isset($_SESSION["maccount"])) {
  $maccount = $_SESSION["maccount"];
}
// if (!isset($_COOKIE["uid"])){
if (!isset($_SESSION["maccount"])) {

  // setcookie("lastPage", "secret.php");
  $_SESSION["lastPage"] = "withdrawal.php";
  echo $_SESSION["lastPage"];
  unset($_SESSION["lastPage"]);

  header("Location: login.php");
  exit();
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
  <style>
    body {
      background-color: lightblue;
    }
  </style>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Lag - Member Page</title>
</head>

<body>
  <h1 align="center">線上網銀系統</h1>
  <form id="form1" name="form1" method="post" action="login.php" border="0" align="center" cellpadding="5" cellspacing="0" bgcolor="#F2F2F2" style="background-color:Violet;">
    <div align="center" bgcolor="#CCCCCC" style="background-color:SlateBlue;">
      <font color="#FFFFFF">歡迎使用網路銀行提款功能</font>
    </div>
    <divalign="center" bgcolor="#CCCCCC"><a href="index.php">
        <font color="#FFFFFF">回首頁
      </a></div>
      <div style="width:auto;height:600px; background-color:lightblue;">
        <div style="width:50%;height:600px;text-align:center;margin:0 auto;">
          <br>
          <br>
          <br>
          <br>
          <div>
            <label>
              <font color="#000000">請輸入提款金額 :
            </label>
            <input type="text" name="money" id="money" />
            <input type="submit" name="btnOK" id="btnOK" value="確定取出" />
          </div>
        </div>
      </div>
      <div style="background-color:SlateBlue;">
        <font color="#FFFFFF"><?= "Welcome! " . $maccount ?></font>
      </div>
  </form>

</body>

</html>