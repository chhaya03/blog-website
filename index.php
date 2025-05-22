
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Website</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
      <link rel="stylesheet" href="css/style.css" >
</head>
<body>
    

<?php include 'navbar.php' ?>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/cruise-to-los-angeles-usa.webp" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/chicago.webp" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/newYork.avif" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">About Us</h2>
    </div>

   <div>
     <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
            <img src="images/nature.jpg" class="img-fluid about" />
        </div>

        <div class="col-lg-6 col-md-6 col-12">
            <h2 class="display-4 " >I am Chhaya Mishra</h2>
            <p class="py-5" >
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, repudiandae!
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum omnis, laborum amet doloremque dolorum quasi magni corrupti obcaecati natus tempora nihil perspiciatis reprehenderit nesciunt sunt similique officia blanditiis. Fugiat, distinctio?
            </P>
            <a href="about.php" class="btn btn-success">Check More..</a>
        </div>
        
   </div>
    </div>
</section>


<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Services</h2>
    </div>
        <div class="Container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                   <div class="card" style="width: 25rem;">
                     <img src="images/nature2.webp" class="card-img-top" alt="card image">
                        <div class="card-body">
                           <h5 class="card-title">Beautiful Nature</h5>
                            <p class="card-text">Some quick example text .</p>
                            <a href="#" class="btn btn-primary">See PRofile</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                   <div class="card" style="width: 25rem;">
                     <img src="images/nature3.jpg" class="card-img-top" alt="card image">
                        <div class="card-body">
                           <h5 class="card-title">Beautiful Nature</h5>
                            <p class="card-text">Some quick example text .</p>
                            <a href="#" class="btn btn-primary">See PRofile</a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-4 col-12">
                   <div class="card" style="width: 25rem;">
                     <img src="images/nature4.jpg" class="card-img-top" alt="card image">
                        <div class="card-body">
                           <h5 class="card-title">Beautiful Nature</h5>
                            <p class="card-text">Some quick example text .</p>
                            <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
   </div>
    </div>
</section>



<section class="my-5">
 <div class="py-5">
        <h2 class="text-center">Our Gallary</h2>
    </div>

    <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
           <img src="images/nature5.jpg" class="img-fluid pb-3" />
        </div>
        <div class="col-lg-4 col-md-4 col-12">
           <img src="images/chicago.webp" class="img-fluid pb-3" />
        </div>
        <div class="col-lg-4 col-md-4 col-12">
           <img src="images/newYork.avif" class="img-fluid pb-3" />
        </div>
        <div class="col-lg-4 col-md-4 col-12">
           <img src="images/nature4.jpg" class="img-fluid pb-3" />
        </div>
        <div class="col-lg-4 col-md-4 col-12">
           <img src="images/nature5.jpg" class="img-fluid pb-3" />
        </div>
        <div class="col-lg-4 col-md-4 col-12">
           <img src="images/nature3.jpg" class="img-fluid pb-3" />
        </div>
        <div class="col-lg-4 col-md-4 col-12">
           <img src="images/nature4.jpg" class="img-fluid pb-3" />
        </div>
        <div class="col-lg-4 col-md-4 col-12">
           <img src="images/cruise-to-los-angeles-usa.webp" class="img-fluid pb-3" />
        </div>
        <div class="col-lg-4 col-md-4 col-12">
           <img src="images/nature5.jpg" class="img-fluid pb-3" />
        </div>
    </div>


</section>


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