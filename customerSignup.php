<?php include('LSCController.php') ?>
<!DOCTYPE html>
<head>
    <title>Customer Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap');
        body {
            background-image: url("https://images.unsplash.com/photo-1599245722625-6fa0714619bb?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1100&q=80");
            background-repeat: no-repeat;
            background-position:center;
            background-size: cover;
            font-family: 'Montserrat', sans-serif;
        }
    </style>
</head>
<body>
    <div class="container shadow-lg p-5 mb-5 bg-white rounded" style="margin-top: 1.5em; width: 35%;">
        <h1 style="text-align: center">Customer Signup</h1>
            <form method="post" action="LSCController.php">
                <div class="form-group">
                  <label>Email:</label>
                  <input type="email" class="form-control" placeholder="Enter Email" name="email" required>
                </div>
                <div class="form-group">
                  <label>Name:</label>
                  <input type="text" class="form-control" placeholder="Enter Name" name="name" required>
                </div>
                <div class="form-group">
                  <label>Country:</label>
                  <input type="text" class="form-control" placeholder="Enter Country" name="country" required>
                </div>
                <div class="form-group">
                  <label>Postal Code:</label>
                  <input type="text" class="form-control" placeholder="Enter Postal Code" name="postal" required>
                </div>
                <div class="form-group">
                  <label>Password:</label>
                  <input type="password" class="form-control" placeholder="Enter Password" name="password" required>
                </div>
                <button type="submit" name="signup" class="form-control btn btn-primary">Signup</button><br><br>
                <p style="color:black; text-align: left">Already have An Account? <a href="customerLogin.php">Click Here</a></p>
            </form>
            <?php if(isset($_SESSION['msg'])): ?>
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <?php
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);
                    ?>
                </div>
            <?php endif ?>
    </div>
</body>