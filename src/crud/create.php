<?php
include_once "../env.php";
require_once("../connect.php");

$table = "xitkj2";

if (isset($_POST)) {
  $day = $_POST["day"];
  $name = $_POST["name"];

  $sql = "INSERT INTO $table (nama,hari) VALUES ('$name','$day')";

  if ($conn->query($sql)) {
    header("Location: " . $env["BASE_URL"]);
  }
}
