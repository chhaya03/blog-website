<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
      <link rel="stylesheet" href="css/style.css" >
</head>
<body>


<?php include 'navbar.php' ?>



<section class="my-5">
 <div class="py-5">
        <h2 class="text-center">Contact</h2>
    </div>

 <div class="w-50 m-auto">
 <form action="userinfo.php" method="post">
   
    <div class="form-group">
      <label>Username:</label>
       <input type="text" name="user" class="form-control" placeholder="Enter username.." autocomplete="off">
    </div>

   <div class="form-group">
    <label>Email Id:</label>
    <input type="email" name="email" class="form-control" placeholder="Enter email" autocomplete="off">
  </div>

   <div class="form-group">
    <label>Contact:</label>
    <input type="contact" class="form-control" placeholder="Enter contact no" name="mobile" autocomplete="off">
  </div>

   <div class="form-group">
    <label>Comments</label>
    <textarea class="form-control" name="comments"></textarea>
  </div>

   <button type="submit" class="btn btn-primary">Submit</button>
 </form>
 </div>
</section>


<footer>
    <p class="p-3 bg-dark text-white text-center">@TechProjectBlog</p>
 </footer>



 <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>