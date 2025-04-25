<?php
include_once "../env.php";
require_once("../connect.php");

$table = "xitkj2";

if (isset($_GET['id'])) {
  $id = $_GET['id'];

  $sql = "DELETE FROM $table WHERE id = $id";

  if ($conn->query($sql)) {
    header("Location: " . $env["BASE_URL"]);
  }
}
