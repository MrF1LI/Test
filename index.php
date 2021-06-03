<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="icon" href="img/logos/WebLogo.png" type="image/gif">
    <title>Genuine Role Play | Official</title>
</head>
<body>
    <button id="TopUp" class="topupanim"style="display: none;"><i class="fa fa-chevron-circle-up"></i></button>
    <section class="first-content">
        <header>
            <div class="mobHeader" id="mobHeader">
                <div class="mobHeader-top">
                    <a href="index.php"><img src="img/logos/FullLogo.png" alt="genuine-rp-logo"></a>
                    <button class="mobHeader-hide" id="mobHeaderHide"><i class="fas fa-times"></i></button>
                    
                </div>
                <div class="mobNav">
                    <ul>
                        <li><a href="#"><i class="lined" class="fas fa-home"></i> მთავარი</a></li>
                        <li><a href="#"><i class="far fa-newspaper"></i> სიახლე</a></li>
                        <li><a href="#"><i class="fas fa-hand-holding-usd"></i> დონაცია</a></li>
                        <li><a href="#"><i class="far fa-user-circle"></i> პირადი კაბინეტი</a></li>
                    </ul>
                </div>
            </div>
            <div class="container">
                <div class="topline">
                    <a href="index.php"><img src="img/logos/Logo.png" alt="genuine-rp-logo"></a>
                    <nav>
                        <ul>
                            <li><a class="lined" href="index.php"><i class="fas fa-home"></i> მთავარი</a></li>
                            <li><a href="pages/news.php"><i class="far fa-newspaper"></i> სიახლე</a></li>
                            <li><a href="pages/donation.php"><i class="fas fa-hand-holding-usd"></i> დონაცია</a></li>
                        </ul>
                    </nav>
                    <button class="burger-icon" id="mobHeaderShow"><i class="fas fa-stream"></i></button>
                    <a class="cabinetBtn" href="pages/cabinet.php"><i class="far fa-user-circle"></i> პირადი კაბინეტი</a>
                </div>
            </div>
        </header>

        <div class="first-msg-content">
            <div class="container">
                <div class="main-content">
                    <img class="person" src="img/persons/MainBoss.png" alt="gta-person">
                    <div class="for-msg">
                        <figure>
                            <div class="msg">
                                <span>შემოგვიერთდით</span>
                                <span>საქართველოს N1</span>
                                <span>სერვერზე!</span>
                            </div>
                        </figure>
                        <figure>
                            <div class="msg">
                                <span>დაიწყე თამაში</span>
                                <span>საქართველოს წამყვან</span>
                                <span>სერვერზე!</span>
                            </div>
                        </figure>
                        <figure>
                            <div class="msg">
                                <span>შექმენი შენი</span>
                                <span>ვირტუალური სამყარო</span>
                                <span>ჩვენთან!</span>
                            </div>
                        </figure>
                    </div>
                    <div class="dots">
                        <button role="button" class="dot" onclick="currentSlide(1)"></button>
                        <button role="button" class="dot" onclick="currentSlide(2)"></button>
                        <button role="button" class="dot" onclick="currentSlide(3)"></button>
                    </div>
                    <a class="gameBtn" href="pages/startPlay.php">
                        <div class="for-img">
                            <img class="play-game" src="img/logos/Play.png" alt="play-icon">
                        </div>
                        <div class="for-game-msg">
                            <span>თამაშის დაწყება</span>
                            <small>G:RP</small>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <?php include 'assets/whyUs.php'; ?>

    <?php include 'assets/promo.php'; ?>

    <footer>
        <div class="container">
            <div class="footer-top hidden">
                <img src="img/logos/FullLogo.png" alt="genuine-rp-logo">
                <div class="social">
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fab fa-discord"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-middle hidden">
                <div class="middle-child">
                    <span>ბიზნეს შემოთავაზება</span>
                    <p><i class="far fa-envelope"></i> info@example.com</p>
                </div>
                <div class="middle-child">
                    <span>Genuine Project</span>
                    <p>All rights reserved.</p>
                </div>
            </div>
            <div class="footer-bottom hidden">
                <small>G:RP © 2021</small>
            </div>
        </div>
    </footer>

    <script src="js/mobHeader.js"></script>
    <script src="js/autoSlide.js"></script>
    <script src="js/topUp.js"></script>
    <script src="js/animateWhenScroll.js"></script>
</body>
</html>