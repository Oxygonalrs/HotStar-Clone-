<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bingo Loot</title>
    <link rel="icon" type="image/jpeg" href="skymy.jpeg"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="index.css">
</head>
<body class="">

    <div class="navbar navbar-light positionxm w-100">
        <nav style="margin-left: 30px; width:100%; margin-bottom: 0px; margin-top: 10px; margin-right: 50px;">
            <div class="" >
                <ul>
                    <a href="home.php" style="text-shadow:none;"><li><svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" fill="currentColor" class="bi bi-tv" viewBox="0 0 16 16">
                        <path d="M2.5 13.5A.5.5 0 0 1 3 13h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zM13.991 3l.024.001a1.46 1.46 0 0 1 .538.143.757.757 0 0 1 .302.254c.067.1.145.277.145.602v5.991l-.001.024a1.464 1.464 0 0 1-.143.538.758.758 0 0 1-.254.302c-.1.067-.277.145-.602.145H2.009l-.024-.001a1.464 1.464 0 0 1-.538-.143.758.758 0 0 1-.302-.254C1.078 10.502 1 10.325 1 10V4.009l.001-.024a1.46 1.46 0 0 1 .143-.538.758.758 0 0 1 .254-.302C1.498 3.078 1.675 3 2 3h11.991zM14 2H2C0 2 0 4 0 4v6c0 2 2 2 2 2h12c2 0 2-2 2-2V4c0-2-2-2-2-2z"/>
                    </svg>  BingoLoot</li></a>
                    <!-- <img src="google2.0.0.jpg" width="200px" height="50px">-->
                                     
                    <div class="dropdown">
                        <a href="tv.php" class="link">TV</a>
                        <div class="dropdown-content">
                            <a href="tv.php?tv=specials">Specials</a>
                            <a href="tv.php?tv=startplus">Star Plus</a>
                            <a href="tv.php?tv=starjalsa">Star Jalsa</a>
                            <a href="tv.php?tv=starsports">Star Sports</a>
                            <a href="tv.php?tv=starvijay">Star Vijay</a>
                            <a href="tv.php?tv=starbharat">Star Bharat</a>
                            <a href="channels.php">More...</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a href="movies.php" class="link">Movies</a>
                        <div class="dropdown-content">
                            <a href="movies.php?movie=hindi">Hindi</a>
                            <a href="movies.php?movie=bengali">Bengali</a>
                            <a href="movies.php?movie=telugu">Telugu</a>
                            <a href="movies.php?movie=malyalam">Malyalam</a>
                            <a href="movies.php?movie=tamil">Tamil</a>
                            <a href="movies.php?movie=marathi">Marathi</a>
                            <a href="movies.php?movie=english">English</a>
                            <a href="movies.php?movie=kannada">Kannada</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a href="sports.php" class="link">Sports</a>
                        <div class="dropdown-content">
                            <a href="sports.php?sport=cricket">Cricket</a>
                            <a href="sports.php?sport=tennis">Tennis</a>
                            <a href="sports.php?sport=hockey">Hockey</a>
                            <a href="sports.php?sport=badminton">Badminton</a>
                            <a href="sports.php?sport=formula1">Formula 1</a>
                            <a href="sports.php?sport=kabbaddi">Kabbaddi</a>
                            <a href="sports.php?sport=esport">eSports</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a href="news.php" class="link">News</a>
                        <div class="dropdown-content">
                        <a href="#">Hindi</a>
                            <a href="news.php?news=bengali">Bengali</a>
                            <a href="news.php?news=telugu">Telugu</a>
                            <a href="news.php?news=malyalam">Malyalam</a>
                            <a href="news.php?news=tamil">Tamil</a>
                            <a href="news.php?news=marathi">Marathi</a>
                            <a href="news.php?news=english">English</a>
                            <a href="news.php?news=kannada">Kannada</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a href="kids.php" class="link">Kids</a>
                        <div class="dropdown-content">
                            <a href="kids.php?kid=humgama">Humgama</a>
                            <a href="kids.php?kid=ben10">Ben 10</a>
                            <a href="kids.php?kid=doremon">Doremon</a>
                            <a href="kids.php?kid=chinchan">Chinchan</a>
                            <a href="kids.php?kid=nick">Nick</a>
                            <a href="kids.php?kid=pogo">Pogo</a>
                        </div>
                    </div>
                    </ul>
            </div>
            <div class="search" style="text-align:right">
                <form class="w-100" method="GET">
                    <input class="" type="text" style="" placeholder="Search" aria-label="Search">
                    <button class="btn " style="border: none; padding-right: 20px; box-shadow: none;" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search text-white" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg>
                    </button>
                    <a href="#"><button data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary">Login</button></a>
                    <a href="#"><button data-bs-toggle="modal" data-bs-target="#exampleModal1" class="btn btn-danger">Subscribe</button></a>
                
                </form>
            </div>
        </nav>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Login to continue</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form action="" method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="useremail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="userpassword" class="form-control" id="exampleInputPassword1">
                </div>
              
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </form>
            </div>
        </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModal1Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Login to continue</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form action="" method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="useremail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="userpassword" class="form-control" id="exampleInputPassword1">
                </div>
              
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </form>
            </div>
        </div>
        </div>
    </div>