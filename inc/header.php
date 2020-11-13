<?php

include "Database/Config.php";
include "Database/Database.php";
include "Database/helpars.php";
$db = new Database();
$help = new formet();

?>



<!doctype html>
<html class="no-js" lang="">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>MPI Home</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />


 


</head>

<body>
  <div class="imgaestyle">
  <div class="container border p-1 bg-white">
    <div class="header-section mt-2">
      <div class="d-flex justify-content-between">
        <div class="mail">
          <a href="">
            <i class="fas fa-envelope"></i>
            mpi@mpi.edu.bd
          </a>
        </div>
        <div class="call">
          <a href="">
            <i class="fas fa-phone-square-alt"></i>
          </a>
          <span> 09167294</span>
        </div>
        <div class="admin">
          <div class="">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
              Admin Login
            </button>
      <button type="button" class="btn btn-dark" data-toggle="modal">
              Student Register
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal all  -->
    <!-- The Modal -->
    <div class="modal" id="myModal">
      <div class="modal-dialog">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Admin Login</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <!-- Modal body -->
          <div class="modal-body">
            <form action="">
              <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" required="1" placeholder="Enter email" id="email">
              </div>
              <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" required="1" placeholder="Enter password" id="pwd">
              </div>
              <div class="form-group form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox"> Remember me
                </label>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal all  -->
       <div class="p-2 mt-2 border border-warning">