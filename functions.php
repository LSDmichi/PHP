<?php
require('connection.php');

function create($data) {
  insertDB($data['todo']);
}

function index() {
  return $todos = selectAll();
}
 ?>
