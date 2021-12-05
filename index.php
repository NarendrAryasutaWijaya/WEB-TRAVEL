<?php 

session_start();
if($_SESSION['status_login']!=true){
  header('location:index.php');
  
} else{
  echo "<script>alert('Login Berhasil')</script>";

}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Travel</title>
<link 
   href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style1.css">
  <style>
  
  .tombol1 {
  background-color: #271a15;
  color: #fff;
  height: 40px;
  line-height: 42px;
  text-decoration: none;
  display: inline-block;
  padding: 0px 20px 0px 20px;
  font-size: 15px;
  border-radius: 4px;
  margin-left:90%;
  margin-top:-5%;
  }
  .intro {
    input[type=text] {
    width: 130px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
    width: 100%;
}
  }
    

  </style>
   
   
  </head>
  

  <body>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <nav>
      <div class="layar-dalam">
        
        <div class="logo">
         
          
        </div>
        <div class="menu">
          <a href="#" class="tombol-menu">
            <span class="garis"></span>
            <span class="garis"></span>
            <span class="garis"></span>
          </a>
          <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="about_us.php">AboutUs</a></li>
            <li><a href="#support">Discount</a></li>
            <li><a href="#Destination">Destination</a></li>
            <li><a href="#free visit">Free</a></li>
            <li><a href="#blog">Blog</a></li>
            <li><a href="upprofile/upload_profile.php">Profile</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="layar-penuh">
      <header id="home">
        <div class=""></div>
        <video autoplay muted loop>
          <source src="asset/bg.web.mp4" type="video/mp4" />
        </video>
        <div>
      <h3 style="margin-left:39%; margin-right:38%; margin-top:23%; -moz-border-radius: 11px; -webkit-border-radius: 11px; background-color:; border-radius: 11px; border: 5px solid transparant; padding: 11px; t-align: center; background-image: url(asset/bg\ home11.jfif);color:white;">FIND YOUR DESTINATION<h3>
      </div>   
          <h3></h3>
          <br>

            
            
          </p>
        </div>
        
        
        
        
        
      </header>
      <main>
        <section id="aboutus">
          <div class="layar-dalam">
 
        <h3>Discount</h3>
        <section class="abuabu" id="support">
          <div class="layar-dalam support">
            <div>
              <img src="asset/foto1BOROBUDUR.jfif" />
              <br>
              <br>
              <a style="color:white;hover:grey;"href="create.php" class=" tombol">Rp 500k</a>
              <h6>DISCOUNT 30%</h6>
              <br>
              
                  
              
              <p>
              for tours to BOROBUDUR we hold a discounted price, starting in October-December
              </p>
            </div>
            <div>
              <img src="asset/fotoNUSAPENIDA.jfif" />
              <br>
              <br>
              <a href="create.php" class="tombol">Rp 600k</a>
              <h6>DISCOUNT 30%</h6>
              <br>
              <p>
              for tours to NUSA PENIDA we hold a discounted price, starting in October-December
              </p>
            </div>
            <div>
              <img src="asset/fotoDANAUTOBA1.jfif" />
              <br>
              <br>
             <a href="create.php" class=" tombol">Rp 400k</a>
              <h6>DISCOUNT 40%</h6>
              <br>
              <p>
              for tours to TOBA LAKE we hold a discounted price, starting in October-December
              </p>
            </div>
          </div>
        </section>
        <section id="Destination">
        <div class="layar-dalam">
        <h3 style=" text-align:center ;">Destination</h3>
         
          <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="asset/fotobajo.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Labuan Bajo</h5>
                  <a href="create.php" class=" tombol">Rp 500k</a>
                </div>
              </div>
              <div class="carousel-item">
                </style>
                <img src="asset/foto 11.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Bromo</h5>
                  <a href="create.php" class=" tombol">Rp 350k</a>
                </div>
              </div>
              <div class="carousel-item">
                <img src="asset/fotoampat.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Raja ampat</h5>
                  <a href="create.php" class=" tombol">Rp 650k</a>
                </div>
              </div>
              <div class="carousel-item">
                <img src="asset/fotoprambanan2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Candi Perambanan</h5>
                  <a href="create.php" class=" tombol">Rp 200k</a>
                </div>
              </div>
              <div class="carousel-item">
                <img src="asset/fotokawahijen2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Kawah Ijen</h5>
                  <a href="create.php" class=" tombol">Rp 300k</a>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </section>
        <section class="quote">
          <div class="layar-dalam">
            <p style="text-align:center;">.</p>
          </div>
        </section>
        <section id="team">
          <div class="layar-dalam">
            <h3>Free visit</h3>
            <p class="ringkasan">
              if you have subscribed 10 times with us, you will get free visits abroad by choosing one of the destinations below
            </p>
            <br>
            <div class="tim">
              <div>
                <img src="asset/foto 23.jpg" />
                <h6>Hawai</h6>
                <span>Amerika serikat</span>
              </div>
              <div>
                <img src="asset/foto 21.jpg" />
                <h6>Gunung fuji</h6>
                <span>Jepang</span>
              </div>
              <div>
                <img src="asset/foto 22.jpg" />
                <h6>Menara Eiffel</h6>
                <span>France</span>
              </div>
            </div>
          </div>
        </section>
        <section class="abuabu" id="blog">
          <div class="layar-dalam">
            <h3>Blog</h3>
            <p class="ringkasan">
              read the blog below if you want to know some information about destinations in Indonesia
            </p>
            <div class="blog">
              <div class="area">
                <div
                  class="gambar"
                  style="background-image: url('asset/foto\ 26.jpg')"
                ></div>
                <div class="text">
                  <article>
                    <h4><a href="#">What About Kepulauan seribu?</a></h4>
                    <br>
                    <p>
                      Kepulauan seribu is one of the administrative areas in the north of the city of Jakarta. this region has a series of beautiful islands with their own charm.</p>
                  </article>
                </div>
              </div>
              <div class="area">
                <div
                  class="gambar"
                  style="background-image: url('asset/foto\ 27.jpg')"
                ></div>
                <div class="text">
                  <article>
                    <h4><a href="#">What About Bali?</a></h4>
                    <br>
                    <p>
                      Bali province is a leading tourism area in Indonesia. The combination of beautiful nature with a distinctive culture is an attraction for foreign and domestic tourists.
                    </p>
                  </article>
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>
      <footer id="contact">
        <div class="layar-dalam">
          <div>
            <h5>Info</h5>
            read information about us on the right
  
          </div>
          <div>
            <h5>Contact</h5>
            call the following number(075478198373) for more information.
          </div>
          <div>
            <h5>Help</h5>
            call our number or come to our office if there is an error
          </div>
          <div>
            <h5>Map</h5>
            if you want to come to our office read the following address: Jl orchid no 57 Malang city.
          </div>
        </div>
        <div class="layar-dalam">
        </div>
      </footer>
    </div>
    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>
    <script src="javascript.js"></script>
  </body>
</html>
<script>
 var tombolMenu = $(".tombol-menu");
var menu = $("nav .menu ul");

function klikMenu() {
    tombolMenu.click(function () {
        menu.toggle();
    });
    menu.click(function () {
        menu.toggle();
    });
}

$(document).ready(function () {
    var width = $(window).width();
    if (width < 990) {
        klikMenu();
    }
})


$(window).resize(function () {
    var width = $(window).width();
    if (width > 989) {
        menu.css("display", "block");
        
    } else {
        menu.css("display", "none");
    }
    klikMenu();
});

l 
$(document).ready(function () {
    var scroll_pos = 0;
    $(document).scroll(function () {
        scroll_pos = $(this).scrollTop();
        if (scroll_pos > 0) {
            $("nav").addClass("putih");
            $("nav img.hitam").show();
            $("nav img.putih").show();
        } else {
            $("nav").removeClass("putih");
            $("nav img.hitam").show();
            $("nav img.putih").show();
        }
    })
}); 
</script>
