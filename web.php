<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KUCING</title>
    <link
      href="https://cdn.jsdelivr.net/npm/daisyui@3.1.1/dist/full.css"
      rel="stylesheet"
      type="text/css"
    />
    <link rel="stylesheet" type="text/css" href="./css/web.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- <link rel="stylesheet" href="./css/style3.css" type="text/css"> -->
    <link rel="icon" type="image/png" href="./multimedia/images/logo.png" />

  </head>

  <body bgcolor="#a6e4e7">
    <!-- header section starts-->
    <section>
      <div class="navbar bg-base-100" id="maincontent">
        <div class="flex-1">
          <a href="index.html" class="btn btn-ghost normal-case text-xl">Ineffable</a>
        </div>
        <!-- search -->

        <div class="flex-none">
          <div class="form-control justify-between">
            <input
              type="text"
              placeholder="Search"
              class="input input-bordered w-24 md:w-auto size-30"
            />
          </div>
          <div class="dropdown dropdown-end">
            <a href="cart.php"> <label tabindex="0" class="btn btn-ghost btn-circle">
              <div class="indicator">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-5 w-5"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"
                  />
                </svg>
              </div>
            </label></a>
          <div class="dropdown dropdown-end">
            <label tabindex="0" class="btn btn-ghost btn-circle avatar">
              <div class="w-10 rounded-full">
                <img src="./multimedia/images/th.jpg" />
              </div>
            </label>
            <ul
              tabindex="0"
              class="menu menu-sm dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52"
            >
              <li>
                <a class="justify-between">
                  Profile
                  <span class="badge">New</span>
                </a>
              </li>
              <li><a>Settings</a></li>
              <li><a>Logout</a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- header section ends-->

    <!-- bawah nav -->
    <div class="carousel w-full">
      <div id="slide1" class="carousel-item relative w-full">
        <img
          src="./multimedia/images/INEFFABLE.png"
          
        />
        <div
          class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2"
        >
          <a href="#slide5" class="btn btn-circle">❮</a>
          <a href="#slide2" class="btn btn-circle">❯</a>
        </div>
      </div>
      <div id="slide2" class="carousel-item relative w-full">
        <img
          src="./multimedia/images/meng.png"
          
        />
        <div
          class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2"
        >
          <a href="#slide1" class="btn btn-circle">❮</a>
          <a href="#slide3" class="btn btn-circle">❯</a>
        </div>
      </div>
      <div id="slide3" class="carousel-item relative w-full">
        <img
          src="./multimedia/images/ANABUL.png"
          
        />
        <div
          class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2"
        >
          <a href="#slide2" class="btn btn-circle">❮</a>
          <a href="#slide4" class="btn btn-circle">❯</a>
        </div>
      </div>
      <div id="slide4" class="carousel-item relative w-full">
        <img 
          src="./multimedia/images/diskon.png"
        />
        <div
          class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2"
        >
          <a href="#slide3" class="btn btn-circle">❮</a>
          <a href="#slide5" class="btn btn-circle">❯</a>
        </div>
      </div>
      <div id="slide5" class="carousel-item relative w-full">
        <img
          src="./multimedia/images/TERIMA (1).png"
          
        />
        <div
          class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2"
        >
          <a href="#slide4" class="btn btn-circle">❮</a>
          <a href="#slide1" class="btn btn-circle">❯</a>
        </div>
      </div>
    </div>

    <!-- bubble chat -->
    <div class="bungkus">
      <div class="chat chat-start px-3">
        <div class="chat-image avatar">
          <div class="w-10 rounded-full">
            <img src="./multimedia/images/op.jpg" />
          </div>
        </div>
        <div class="chat-header" style="color: rgb(243, 243, 243)">
          Admin
          <time class="text-xs opacity-50" style="color: rgb(221, 216, 216)"
            >12:45</time
          >
        </div>
        <div class="chat-bubble">ada yang bisa saya bantu?</div>
        <div class="chat-footer opacity-70" style="color: rgb(245, 238, 238)">
          Delivered
        </div>
      </div>
      <div class="chat chat-end px-3">
        <div class="chat-image avatar">
          <div class="w-10 rounded-full">
            <img src="./multimedia/images/th.jpg" />
          </div>
        </div>
        <div class="chat-header" style="color: rgb(248, 239, 239)">
          user
          <time class="text-xs opacity-50" style="color: rgb(254, 250, 250)"
            >12:46</time
          >
        </div>
        <div class="chat-bubble">
          saya mencari kebutuhan untuk makanan kucing
        </div>
        <div class="chat-footer opacity-70" style="color: rgb(231, 226, 226)">
          Seen at 12:46
        </div>
      </div>
      <div class="chat chat-start px-3">
        <div class="chat-image avatar">
          <div class="w-10 rounded-full">
            <img src="./multimedia/images/op.jpg" />
          </div>
        </div>
        <div class="chat-header" style="color: rgb(243, 237, 237)">
          Admin
          <time class="text-xs opacity-50" style="color: rgb(225, 215, 215)"
            >12:46</time
          >
        </div>
        <div class="chat-bubble">
          kami menyediakan berbagai produk makanan kucing terbaik
        </div>
        <div class="chat-footer opacity-70" style="color: rgb(238, 234, 234)">
          Delivered
        </div>
      </div>
    </div>

    <?php
    require_once("dbcontroller.php");
    $db_handle = new DBController();
    $product_array = $db_handle->runQuery("SELECT * FROM produk ORDER BY id ASC");
    if (!empty($product_array)) { 
      foreach($product_array as $key=>$value){
	  ?>

    <form method="post" action="cart.php?action=add&kodebrg=<?php echo $product_array[$key]["kodebrg"]; ?>">
      <section class="w-full">
          <div class="card">
            <div class="card-img">
              <img src="<?php echo $product_array[$key]["foto"]; ?>">
              <div class="img"></div>
            </div>
            <div class="card-title">
              <?php echo $product_array[$key]["namaproduk"]; ?>
            </div>
            <div class="card-subtitle">
              <!-- Makanan kucing untuk membantu mengurangi efek Hairball -->
            </div>
            <hr class="card-divider" />
            <div class="card-footer">
              <div class="card-price"> 
                <?php echo "Rp. ".$product_array[$key]["harga"]; ?>
              </div>
              <input type="text" class="product-quantity" name="quantity" value="1" size="2" />
              <input type="submit" value="" class="btnAddAction" />
              <button class="card-btn">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                  <path
                    d="m397.78 316h-205.13a15 15 0 0 1 -14.65-11.67l-34.54-150.48a15 15 0 0 1 14.62-18.36h274.27a15 15 0 0 1 14.65 18.36l-34.6 150.48a15 15 0 0 1 -14.62 11.67zm-193.19-30h181.25l27.67-120.48h-236.6z"
                  ></path>
                  <path
                    d="m222 450a57.48 57.48 0 1 1 57.48-57.48 57.54 57.54 0 0 1 -57.48 57.48zm0-84.95a27.48 27.48 0 1 0 27.48 27.47 27.5 27.5 0 0 0 -27.48-27.47z"
                  ></path>
                  <path
                    d="m368.42 450a57.48 57.48 0 1 1 57.48-57.48 57.54 57.54 0 0 1 -57.48 57.48zm0-84.95a27.48 27.48 0 1 0 27.48 27.47 27.5 27.5 0 0 0 -27.48-27.47z"
                  ></path>
                  <path
                    d="m158.08 165.49a15 15 0 0 1 -14.23-10.26l-25.71-77.23h-47.44a15 15 0 1 1 0-30h58.3a15 15 0 0 1 14.23 10.26l29.13 87.49a15 15 0 0 1 -14.23 19.74z"
                  ></path>
                </svg>
              </button>
            </div>
          </div>
      </section>
    </form>
    <?php
      }
    }
	  ?>

    <!-- penutup -->
    <footer class="footer footer-center p-4 bg-base-300 text-base-content">
      <div>
        <p>Copyright © 2023 - All right reserved by ineffable Industries Ltd</p>
      </div>
    </footer>
  </body>
  <script type="text/javascript">
    console.log("10122305_Dicky Bariyadi S.");
    console.log("10122287_Naufal Fahrezi M.");
  </script>
</html>