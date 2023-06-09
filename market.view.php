<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Market</title>
    <link rel="stylesheet" href="styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <header>
        <logo>
            <h2 class="text-center"><img src="images/logo/logo.png" width="60px" height="60px" alt=""></h2>
        </logo>
        <!-- navbar start -->
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="Home.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Community</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Market.html">Market</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Artist</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="galleries.html">Galleries</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Auction.html">Auction</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Info
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                            class="fas fa-search"></i>
                        <button class="btn-create" type="submit">+Create</button>
                    </form>
                </div>
            </div>
        </nav>
        <!-- navbar end -->
    </header>
    <br>
    <main>
        

        <!-- Features Artwork Section start -->
        <section class="Features-Artworks-container">
           
            <!-- yellow-card-quote-start -->
            <div class="container text-start-end" style="color: var(--primary);">
                <!-- breadcrumb-section-start -->
                
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#"> <i class="fa-solid fa-house"></i> Home</a></li>
                      <li class="breadcrumb-item"><a href="#">Market</a></li>
                    </ol>
                  </nav>
                  <h6 class="text-center"><a href="" style="text-decoration: none; color: var(--primary);">Create auction post</a></h6>
                  <!-- breadcrumb-section-end -->
                <h3 style="color:black">Market &reg;</h3>
                
                <div class="get-the-app grid" style="--bs-gap: 0;">
                    <div class="g-col-6">
                        <img src="images/YellowCard.jpg" alt="">
                    </div>
                    <div class="g-col-6" style="background-color: #F8EFFF;">
                        <div class="get-app">
                           <p style="line-height:200% ;font-size: 15px;">
                            "Art is not just what an artist creates, it is an extension of their soul,
                            glimpse into their deepest thoughts and emotions.
                            It is a reflection of their unique perspective on the world, 
                            an expression of their innermost being that transcends time and speaks 
                            to the hearts of all who behold it."
                           </p>
                        </div>
                        
                    </div>                  
                </div>
                <br><br><br>
                <h3>Features Artworks</h3>
                <div class="row g-4">
                    <div class="col">
                        <div class="card" style="width: 295px; height: 257px;">
                            <img src="images/picture.png" alt="picture">
                        </div>
                        <div class="card-body">
                            <b>Flower & A Frog &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                <i class="fa-solid fa-heart"></i>
                            </b>
                            <p>Painting</p>
                            <p>By Hnin Cherry</p>
                            <h4>15000 MMK</h4>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 295px; height: 257px;">
                            <img src="images/picture.png" alt="picture">
                        </div>
                        <div class="card-body">
                            <b>Flower & A Frog &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                <i class="fa-solid fa-heart"></i>
                            </b>
                            <p>Painting</p>
                            <p>By Hnin Cherry</p>
                            <h4>15000 MMK</h4>
                        </div>

                    </div>
                    <div class="col">
                        <div class="card" style="width: 295px; height: 257px;">
                            <img src="images/picture.png" alt="picture">
                        </div>
                        <div class="card-body">

                            <b>Flower & A Frog &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                <i class="fa-solid fa-heart"></i>
                            </b>
                            <p>Painting</p>
                            <p>By Hnin Cherry</p>
                            <h4>15000 MMK</h4>
                        </div>

                    </div>
                    <div class="col">
                        <div class="card" style="width: 295px; height: 257px;">
                            <img src="images/picture.png" alt="picture">
                        </div>
                        <div class="card-body">
                            <b>Flower & A Frog &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                <i class="fa-solid fa-heart"></i>
                            </b>
                            <p>Painting</p>
                            <p>By Hnin Cherry</p>
                            <h4>15000 MMK</h4>
                        </div>
                    </div>
                </div>

                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-end border-0">
                        <li class="page-item disabled" style="color: balck">
                            <button class="arrow-btn"><i class="fa-solid fa-arrow-left-long"></i> </button>
                        </li>
                        <li class="page-item"><a href="#"> Page 1-32</a></li>
                        <li class="page-item">
                            <button class="arrow-btn"><i class="fa-solid fa-arrow-right-long"></i> </button>
                        </li>
                    </ul>
                </nav>

                 <!-- post-activity -->
                 <div class="post-activity grid" style="--bs-gap: 0;">
                    <div class="g-col-6 picture">
                        <img src="images/Placeholder Square.png"alt="">
                    </div>

                    <div class="g-col-6" style="background-color:var(--primary);">
                        <div class="post-activity">
                            Buy Exquisite Rare Artworks in Auctions
                            <p class="post-community">Bid on artworks that you have been
                                <br> longing for a long time with auction 
                                <br>feature on Kanote.</p><br>
                            <button class="arrow-btn"><i class="fa-solid fa-arrow-right-long"></i> </button>
                        </div>
              
                    </div>
                </div>
                <!-- post-activity-end -->
            </div>
        </section>
        <!-- Features Artwork Section End -->
        <br><br>

        <!-- Current Auction start -->
        <section class="current-auction">
            <div class="container text-start-end" style="color: var(--primary)">
                <h3>Current Auction</h3>
                <div class="row g-4">
                    <div class="col ">
                        <div class="card" style="width: 25rem;">
                            <img src="images/picture2.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5>LAMA: Prints & Multiple</h5>
                                <p class="card-text">Bidding closes on Jan 31 at 8:00 AM + 6:30</p>
                                <b>Bid starts from 10000mmk</b>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 25rem;">
                            <img src="images/picture2.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5>LAMA: Prints & Multiple</h5>
                                <p class="card-text">Bidding closes on Jan 31 at 8:00 AM + 6:30</p>
                                <b>Bid starts from 10000mmk</b>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 25rem; ">
                            <img src="images/picture2.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5>LAMA: Prints & Multiple</h5>
                                <p class="card-text">Bidding closes on Jan 31 at 8:00 AM + 6:30</p>
                                <b>Bid starts from 10000mmk</b>
                            </div>
                        </div>
                    </div>
                </div>
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-end border-0">
                        <li class="page-item disabled" style="color: balck">
                            <button class="arrow-btn"><i class="fa-solid fa-arrow-left-long"></i> </button>
                        </li>
                        <li class="page-item"><a href="#"> Page 1-32</a></li>
                        <li class="page-item">
                            <button class="arrow-btn"><i class="fa-solid fa-arrow-right-long"></i> </button>
                        </li>
                    </ul>
                </nav>
            </div>
        </section>
        <br><br>
        <!-- Current Auction end -->

        <!-- Popular Section start -->
        <section class="popular">
            <div class="container" style="color: var(--primary)">
                
                <h3>Artworks By Professionals</h3>
                <div class="row g-4">
                    <div class="col">
                        <div class="card" style="width: 295px; height: 257px;">
                            <img src="images/picture.png" alt="picture">
                        </div>
                        <div class="card-body">
                            <b>Flower & A Frog &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                <i class="fa-solid fa-heart"></i>
                            </b>
                            <p>Painting</p>
                            <p>By Hnin Cherry</p>
                            <h4>15000 MMK</h4>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 295px; height: 257px;">
                            <img src="images/picture.png" alt="picture">
                        </div>
                        <div class="card-body">
                            <b>Flower & A Frog &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                <i class="fa-solid fa-heart"></i>
                            </b>
                            <p>Painting</p>
                            <p>By Hnin Cherry</p>
                            <h4>15000 MMK</h4>
                        </div>

                    </div>
                    <div class="col">
                        <div class="card" style="width: 295px; height: 257px;">
                            <img src="images/picture.png" alt="picture">
                        </div>
                        <div class="card-body">

                            <b>Flower & A Frog &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                <i class="fa-solid fa-heart"></i>
                            </b>
                            <p>Painting</p>
                            <p>By Hnin Cherry</p>
                            <h4>15000 MMK</h4>
                        </div>

                    </div>
                    <div class="col">
                        <div class="card" style="width: 295px; height: 257px;">
                            <img src="images/picture.png" alt="picture">
                        </div>
                        <div class="card-body">
                            <b>Flower & A Frog &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                <i class="fa-solid fa-heart"></i>
                            </b>
                            <p>Painting</p>
                            <p>By Hnin Cherry</p>
                            <h4>15000 MMK</h4>
                        </div>
                    </div>
                </div>
                <br><br>
                <!-- Get-the-app-grid -->
                <div class="get-the-app grid" style="--bs-gap: 0; width: 1300px; height: 408px;">
                    <div class="g-col-6" style="background-color: #F8EFFF;">
                        <div class="get-app">
                            Get the Kanote App Now!
                           <br>
                            <p>Now available on both Android and IOS Devices!</p>
                            <img src="images/googleplay.png" alt="">
                            <img src="images/ios.png" alt="">
                        </div>
                        
                    </div>
                    <div class="g-col-6">
                        <img src="images/PhoneDesign.png" alt="">
                    </div>
                </div>
        </section>
        <!-- Popular section End -->
    </main>
    <?php 
        include 'component/footer.html';
    ?>
</body>

</html>