<?php

require_once("src/connect.php");

$table = "xitkj2";
$sql = "SELECT * FROM $table";

$result = $conn->query($sql);

$piket = [];
if ($result->num_rows > 0) {
  $data = $result->fetch_all(MYSQLI_ASSOC);

  $piket = ["senin" => array_filter($data, function ($var) {
    return ($var['hari'] == "0");
  }), "selasa" => array_filter($data, function ($var) {
    return ($var['hari'] == "1");
  }), "rabu" => array_filter($data, function ($var) {
    return ($var['hari'] == "2");
  }), "kamis" => array_filter($data, function ($var) {
    return ($var['hari'] == "3");
  }), "jumat" => array_filter($data, function ($var) {
    return ($var['hari'] == "4");
  })];
} else {
  $piket = "No Data Entries";
}
