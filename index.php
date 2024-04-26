<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");

?>


<!-- Cover -->
 <main>
  <div class="hero" style="display:flex; justify-content:center;align-items:center;">
     <a href="shop.php" class="btn1">View all products </a>
  </div>
  <!-- Main -->
   <div class="wrapper">
    <h1>Featured Collection<h1>

  </div>
  <header class="h-24 sm:h-32 flex items-center z-30 w-full">
        <div class="container mx-auto px-6 flex items-center justify-between">
            <div class="uppercase text-gray-800 dark:text-white font-black text-3xl">
                Watch.ME
            </div>
            <div class="flex items-center">
                <nav class="font-sen text-gray-800 dark:text-white uppercase text-lg lg:flex items-center hidden">
                    <a href="#" class="py-2 px-6 flex">
                        Home
                    </a>
                    <a href="#" class="py-2 px-6 flex">
                        Watch
                    </a>
                    <a href="#" class="py-2 px-6 flex">
                        Product
                    </a>
                    <a href="#" class="py-2 px-6 flex">
                        Contact
                    </a>
                    <a href="#" class="py-2 px-6 flex">
                        Carrer
                    </a>
                </nav>
                <button class="lg:hidden flex flex-col ml-4">
                    <span class="w-6 h-1 bg-gray-800 dark:bg-white mb-1">
                    </span>
                    <span class="w-6 h-1 bg-gray-800 dark:bg-white mb-1">
                    </span>
                    <span class="w-6 h-1 bg-gray-800 dark:bg-white mb-1">
                    </span>
                </button>
            </div>
        </div>
    </header>



  <div id="content" class="container">

    <div class="row">

      <?php

    getPro();

    ?>

    </div>

  </div>
  <!-- FOOTER -->
  <footer class="page-footer">

    <div class="footer-nav">
      <div class="container clearfix">

        <div class="footer-nav__col footer-nav__col--info">
          <div class="footer-nav__heading">Information</div>
          <ul class="footer-nav__list">
            <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">The brand</a>
            </li>
            <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">Local stores</a>
            </li>
            <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">Customer service</a>
            </li>
            <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">Privacy &amp; cookies</a>
            </li>
            <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">Site map</a>
            </li>
          </ul>
        </div>

        <div class="footer-nav__col footer-nav__col--whybuy">
          <div class="footer-nav__heading">Why buy from us</div>
          <ul class="footer-nav__list">
            <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">Shipping &amp; returns</a>
            </li>
            <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">Secure shipping</a>
            </li>
            <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">Testimonials</a>
            </li>
            <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">Award winning</a>
            </li>
            <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">Ethical trading</a>
            </li>
          </ul>
        </div>

        <div class="footer-nav__col footer-nav__col--account">
          <div class="footer-nav__heading">Your account</div>
          <ul class="footer-nav__list">
            <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">Sign in</a>
            </li>
            <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">Register</a>
            </li>
            <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">View cart</a>
            </li>
            <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">View your lookbook</a>
            </li>
            <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">Track an order</a>
            </li>
            <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">Update information</a>
            </li>
          </ul>
        </div>


        <div class="footer-nav__col footer-nav__col--contacts">
          <div class="footer-nav__heading">Contact details</div>
          <address class="address">
            Head Office: Simplykart<br>
            DLF Cybercity,Bhubaneswar.
          </address>
          <div class="phone">
            Telephone:
            <a class="phone__number" href="tel:7377415677">7377415677</a>
          </div>
          <div class="email">
            Email:
            <a href="mailto:msibaprasad32@gmail.com" class="email__addr">msibaprasad32@gmail.com</a>
          </div>
        </div>

      </div>
    </div>

    <!-- <div class="banners">
        <div class="container clearfix">

          <div class="banner-award">
            <span>Award winner</span><br> Fashion awards 2016
          </div>

          <div class="banner-social">
            <a href="#" class="banner-social__link">
            <i class="icon-facebook"></i>
          </a>
            <a href="#" class="banner-social__link">
            <i class="icon-twitter"></i>
          </a>
            <a href="#" class="banner-social__link">
            <i class="icon-instagram"></i>
          </a>
            <a href="#" class="banner-social__link">
            <i class="icon-pinterest-circled"></i>
          </a>
          </div>

        </div>
      </div> -->

    <div class="page-footer__subline">
      <div class="container clearfix">

        <div class="copyright">
          &copy;
          <?php echo date("Y");?> Simplykart&trade;
        </div>

        <div class="developer">
          Developed by team@Simplykart
        </div>

        <div class="designby">
          Design by team@Simplykart
        </div>

      </div>
    </div>
  </footer>
  </body>

  </html>