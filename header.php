<?php 
//  error_reporting(0);
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/jquery-1.8.3.min.js" type="text/javascript"></script>
    
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/jquery.validate.js" type="text/javascript"></script>

    <title>Student Form</title>
  </head>
  <style>
  /*
.card-registration .select-input.form-control[readonly]:not([disabled]) {
font-size: 1rem;
line-height: 2.15;
padding-left: .75em;
padding-right: .75em;
}
.card-registration .select-arrow {
top: 13px;
}
*/
.main_section{
  background-color:#233140;
}
body{
    /* background-color:#233140 !important; */
    
}
.center {
  margin: auto;
  width: 60%;
  border: 3px solid #73AD21;
  padding: 10px;
  
}
.center_form{
    width: 37%;
    padding: 10px;
    border: 10px gold;
    border-style: outset;
    background-color: #354c2a;
    padding-top: 11px;
    padding-right: 15px;
    padding-bottom: 10px;
    padding-left: 20px;
    margin-left: 30%;
    border-radius: 23px;
    font-style: oblique;
    font-weight: 800;
    color: #f4d6d6;
    }
    h3{
        margin-bottom: 20px;
    text-align: center;
    }
    .eon{
        font-style: oblique;
    font-weight: 800;
    color: black;
    }
    .form-label {
     margin-bottom: 0.0rem !important;
}
input:hover{
    color:black;
    font-weight: 700;
    
}
.sing-in-btn{
        width: 200px;
        color: aliceblue;
    font-weight: 800;
}
.sing-up-btn{
        width: 190px;
        color: aliceblue;
    font-weight: 800;
}

body {
  /* background-color: #fbfbfb; */
  /* background-color: #fbfbfb; */
  main {
    padding-left: 240px;
  }
}

/* Sidebar */
.sidebar {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  padding: 58px 0 0; /* Height of navbar */
  box-shadow: 0 2px 5px 0 rgb(0 0 0 / 5%), 0 2px 10px 0 rgb(0 0 0 / 5%);
  width: 240px;
  z-index: 600;
}

@media (max-width: 991.98px) {
  .sidebar {
    width: 100%;
  }
}
.sidebar .active {
  border-radius: 5px;
  box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
}

.sidebar-sticky {
  position: relative;
  top: 0;
  height: calc(100vh - 48px);
  padding-top: 0.5rem;
  overflow-x: hidden;
  overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
}
  </style>
  <body>