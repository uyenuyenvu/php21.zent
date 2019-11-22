<!doctype html>
<html lang="en">
  <head>
    <title>Colorlib Wordify &mdash; Minimal Blog Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700|Inconsolata:400,700" rel="stylesheet">

    <link rel="stylesheet" href="public/home/css/bootstrap.css">
    <link rel="stylesheet" href="public/home/css/animate.css">
    <link rel="stylesheet" href="public/home/css/owl.carousel.min.css">

    <link rel="stylesheet" href="public/home/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="public/home/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="public/home/fonts/flaticon/font/flaticon.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="public/home/css/style.css">
  </head>
  <body>
    

    <div class="wrap">

      <header role="banner">
        <div class="top-bar">
          <div class="container">
            <div class="row">
              <div class="col-9 social">
                <a href="#"><span class="fa fa-twitter"></span></a>
                <a href="#"><span class="fa fa-facebook"></span></a>
                <a href="#"><span class="fa fa-instagram"></span></a>
                <a href="#"><span class="fa fa-youtube-play"></span></a>
              </div>
              <div class="col-3 search-top">
                <!-- <a href="#"><span class="fa fa-search"></span></a> -->
                <form action="#" class="search-top-form">
                  <span class="icon fa fa-search"></span>
                  <input type="text" id="s" placeholder="Type keyword to search...">
                </form>
              </div>
            </div>
          </div>
        </div>

        <div class="container logo-wrap">
          <div class="row pt-5">
            <div class="col-12 text-center">
              <a class="absolute-toggle d-block d-md-none" data-toggle="collapse" href="#navbarMenu" role="button" aria-expanded="false" aria-controls="navbarMenu"><span class="burger-lines"></span></a>
              <h1 class="site-logo"><a href="index.html">Wordify</a></h1>
            </div>
          </div>
        </div>
        
        <nav class="navbar navbar-expand-md  navbar-light bg-light">
          <div class="container">
            
           
            <div class="collapse navbar-collapse" id="navbarMenu">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                  <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Business</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="category.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Travel</a>
                  <div class="dropdown-menu" aria-labelledby="dropdown04">
                    <a class="dropdown-item" href="category.html">Asia</a>
                    <a class="dropdown-item" href="category.html">Europe</a>
                    <a class="dropdown-item" href="category.html">Dubai</a>
                    <a class="dropdown-item" href="category.html">Africa</a>
                    <a class="dropdown-item" href="category.html">South America</a>
                  </div>

                </li>

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="category.html" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories</a>
                  <div class="dropdown-menu" aria-labelledby="dropdown05">

                    <?php 
                        foreach ($categories as $key => $value) {
                          ?>
                          <a class="dropdown-item" href="category.html"><?php echo $value['name']; ?></a>
                      <?php  } 
                     ?>
                  </div>

                </li>
                <li class="nav-item">
                  <a class="nav-link" href="views/home/about.php">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="views/home/contact.php">Contact</a>
                </li>
              </ul>
              
            </div>
          </div>
        </nav>
      </header>
      <!-- END header -->

    <section class="site-section py-lg">
      <div class="container">
        
        <div class="row blog-entries element-animate">

          <div class="col-md-12 col-lg-8 main-content">
            <img src="public/home/images/<?= $post['thumbnail']?>" alt="Image" class="img-fluid mb-5">
             <div class="post-meta">
                        <span class="author mr-2"><img src="public/home/images/<?= $user['avatar']?>" alt="Colorlib" class="mr-2"> <?= $user['name']?></span>&bullet;
                        <span class="mr-2">
                            <?php 
                                $created_at=  date ("jS M Y", strtotime($post['created_at']));
                                echo $created_at;
                             ?>

                         </span> &bullet;
                        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                      </div>
            <h1 class="mb-4"><?php echo $post['title']; ?></h1>
            <a class="category mb-5" href="#"><?= $category['name']?></a> 
           
            <div class="post-content-body">
          <h3 class="mb-4"><?php echo $post['description']; ?></h3>
            <p>
              
              <?php echo $post['content']; ?>
            </p>
            </div>

            
            <div class="pt-5">
              <p>Categories:  <a href="#"><?= $category['name']?></a>,  Tags: <a href="#">#<?= $category['name']?></a>
            </div>


            <div class="pt-5">
              <h3 class="mb-5"> Comments</h3>
              <form action="">
                <textarea style="width: 100%" rows="5">Please enter the comments you would like to contribute...
 </textarea>
              </form>
           
                

                
           
          
            </div>

          </div>

          <!-- END main-content -->

          <div class="col-md-12 col-lg-4 sidebar">
            <div class="sidebar-box search-form-wrap">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon fa fa-search"></span>
                  <input type="text" class="form-control" id="s" placeholder="Type a keyword and hit enter">
                </div>
              </form>
            </div>
            <!-- END sidebar-box -->
            <div class="sidebar-box">
              <div class="bio text-center">
                <img src="public/home/images/person_2.jpg" alt="Image Placeholder" class="img-fluid">
                <div class="bio-body">
                  <h2>Craig David</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem facilis sunt repellendus excepturi beatae porro debitis voluptate nulla quo veniam fuga sit molestias minus.</p>
                  <p><a href="#" class="btn btn-primary btn-sm rounded">Read my bio</a></p>
                  <p class="social">
                    <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-instagram"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-youtube-play"></span></a>
                  </p>
                </div>
              </div>
            </div>
            <!-- END sidebar-box -->  
            <div class="sidebar-box">
              <h3 class="heading">Popular Posts</h3> 
                <div class="post-entry-sidebar">
                  <ul>
                    <?php 
                          foreach ($posts_popular as $key => $value) {
                            $created_at=  date ("jS M Y", strtotime($value['created_at']))
                            ?>


                    <li>
                      <a href="">
                        <img src="public/home/images/<?= $value['thumbnail'] ?>" alt="Image placeholder" class="mr-4">
                        <div class="text">
                          <h4><?php echo $value['title']; ?></h4>
                          <div class="post-meta">
                            <span class="mr-2"><?= $created_at ?></span>
                          </div>
                        </div>
                      </a>
                    </li>
                        <?php  } ?>
                  
                  </ul>
                </div>
            </div>
            <!-- END sidebar-box -->

            <div class="sidebar-box">
              <h3 class="heading">Categories</h3>
              <ul class="categories">
                  <?php 
                    $dem=0;
                    foreach ($categories as $key => $value) {
                      $dem++;
                      if ($dem<6) {
                        echo '<li><a href="#">'.$value['name'].' <span>(12)</span></a></li>';
                      }
                    }

                   ?>
                 
                </ul>
            </div>
            <!-- END sidebar-box -->

            <div class="sidebar-box">
              <h3 class="heading">Tags</h3>
              <ul class="tags">
                  <?php 
                
                    foreach ($categories as $key => $value) {
                    
                
                        echo ' <li><a href="#">'.$value["name"].'</a></li>';
                  
                    }

                   ?>

                  
                </ul>
            </div>
          </div>
          <!-- END sidebar -->

        </div>
      </div>
    </section>

    <section class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="mb-3 ">Related Post</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <a href="#" class="a-block sm d-flex align-items-center height-md" style="background-image: url('public/home/images/img_2.jpg'); ">
              <div class="text">
                <div class="post-meta">
                  <span class="category">Lifestyle</span>
                  <span class="mr-2">March 15, 2018 </span> &bullet;
                  <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                </div>
                <h3>There’s a Cool New Way for Men to Wear Socks and Sandals</h3>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a href="#" class="a-block sm d-flex align-items-center height-md" style="background-image: url('public/home/images/img_3.jpg'); ">
              <div class="text">
                <div class="post-meta">
                  <span class="category">Travel</span>
                  <span class="mr-2">March 15, 2018 </span> &bullet;
                  <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                </div>
                <h3>There’s a Cool New Way for Men to Wear Socks and Sandals</h3>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a href="#" class="a-block sm d-flex align-items-center height-md" style="background-image: url('public/home/images/img_4.jpg'); ">
              <div class="text">
                <div class="post-meta">
                  <span class="category">Food</span>
                  <span class="mr-2">March 15, 2018 </span> &bullet;
                  <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                </div>
                <h3>There’s a Cool New Way for Men to Wear Socks and Sandals</h3>
              </div>
            </a>
          </div>
        </div>
      </div>


    </section>
    <!-- END section -->
  
    <footer class="site-footer">
        <div class="container">
          <div class="row mb-5">
            <div class="col-md-4">
              <h3>About Us</h3>
              <p class="mb-4">
                <img src="public/home/images/img_1.jpg" alt="Image placeholder" class="img-fluid">
              </p>

              <p>Lorem ipsum dolor sit amet sa ksal sk sa, consectetur adipisicing elit. Ipsa harum inventore reiciendis. <a href="#">Read More</a></p>
            </div>
            <div class="col-md-6 ml-auto">
              <div class="row">
                <div class="col-md-7">
                  <h3>Latest Post</h3>
                  <div class="post-entry-sidebar">
                    <ul>
                      <?php 
                          $dem1=0;
                          foreach ($posts as $key => $value) {
                              $dem1++;

                            if($dem1<4){
                               $created_at=  date ("jS M Y", strtotime($value['created_at']));
                              ?>
                              <li>
                                  <a href="">
                                    <img src="public/home/images/<?php echo $value['thumbnail']; ?>" alt="Image placeholder" class="mr-4">
                                    <div class="text">
                                      <h4><?php echo $value['title']; ?></h4>
                                      <div class="post-meta">
                                        <span class="mr-2"><?= $created_at ?></span> &bullet;
                                        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                                      </div>
                                    </div>
                                  </a>
                                </li>
                          <?php
                            }
                          }

                       ?>
                      
                     
                    </ul>
                  </div>
                </div>
                <div class="col-md-1"></div>
                
                <div class="col-md-4">

                  <div class="mb-5">
                    <h3>Quick Links</h3>
                    <ul class="list-unstyled">
                      <li><a href="#">About Us</a></li>
                      <li><a href="#">Travel</a></li>
                      <li><a href="#">Adventure</a></li>
                      <li><a href="#">Courses</a></li>
                      <li><a href="#">Categories</a></li>
                    </ul>
                  </div>
                  
                  <div class="mb-5">
                    <h3>Social</h3>
                    <ul class="list-unstyled footer-social">
                      <li><a href="#"><span class="fa fa-twitter"></span> Twitter</a></li>
                      <li><a href="#"><span class="fa fa-facebook"></span> Facebook</a></li>
                      <li><a href="#"><span class="fa fa-instagram"></span> Instagram</a></li>
                      <li><a href="#"><span class="fa fa-vimeo"></span> Vimeo</a></li>
                      <li><a href="#"><span class="fa fa-youtube-play"></span> Youtube</a></li>
                      <li><a href="#"><span class="fa fa-snapchat"></span> Snapshot</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 text-center">
              <p class="small">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy; <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All Rights Reserved | This template is made with <i class="fa fa-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
          </div>
        </div>
      </footer>
      <!-- END footer -->

    </div>
    
    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="public/home/js/jquery-3.2.1.min.js"></script>
    <script src="public/home/js/jquery-migrate-3.0.0.js"></script>
    <script src="public/home/js/popper.min.js"></script>
    <script src="public/home/js/bootstrap.min.js"></script>
    <script src="public/home/js/owl.carousel.min.js"></script>
    <script src="public/home/js/jquery.waypoints.min.js"></script>
    <script src="public/home/js/jquery.stellar.min.js"></script>

    
    <script src="public/home/js/main.js"></script>
  </body>
</html>