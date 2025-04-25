<?php

include_once "../env.php";
require_once("../connect.php");

$table = "xitkj2";

if (isset($_POST)) {
  $id = $_POST["id"];
  $day = $_POST["day"];
  $name = $_POST["name"];

  $sql = "UPDATE $table SET nama='$name', hari='$day' WHERE id=$id";

  if ($conn->query($sql)) {
    header("Location: " . $env["BASE_URL"]);
  }
}
