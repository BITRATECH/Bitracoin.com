<?php
ini_set('display_errors', 1);

require 'Includes/header.php';
require 'Includes/navbar.php';
?>
<!--Video Arkaplan-->
<section class="main">
    <video src="Assets/Videos/Backgrounds/video.mp4" autoplay loop muted type="mp4"></video>
    <img src="Assets/Images/mask.jpg" class="mask" alt="">
    <h4><?php echo $lang['token'] ?></h4>
</section>

<section>
    <div class="livePrice">
        <div class="hotPrice">
            <p class="bitra" style="--clr:#0A66C2; "><?php echo $lang['price'] ?>: </p>
            <p class="priceText"><?php echo $formatted_price ?> <span class="fiat" style="--clr:#33ad03;">USD</span></p>
        </div>
        <div class="contract">
            <p><?php echo $lang['contract-address'] ?>: <a href="https://bscscan.com/token/0xb98ba5ea6fd49bbbfab5121d2d9a75cd20e69040" target="_blank"> 0xb98ba5ea6fd49bbbfab5121d2d9a75cd20e69040</a></p>
        </div>
    </div>
    <hr>
    <div id="project" class="container cardBoxes">
        <div class="box" style="--clr:#89ec5b;">
            <div class="content">
                <div class="icon">
                    <ion-icon name="trophy-outline"></ion-icon>
                </div>
                <div class="text">
                    <h3><?php echo $lang['company'] ?></h3>
                    <p><?php echo $lang['company-card-article'] ?></p>
                    <br>
                    <p><a style="text-decoration: none; color: var(--white)" href="https://bitranium.com"><?php echo $lang['go-now'] ?></a></p>
                </div>
            </div>
        </div>
        <div class="box" style="--clr:#11d3b6;">
            <div class="content">
                <div class="icon">
                    <ion-icon name="wallet-outline"></ion-icon>
                </div>
                <div class="text">
                    <h3><?php echo $lang['token'] ?></h3>
                    <p><?php echo $lang['token-card-article'] ?></p>
                </div>
            </div>
        </div>
        <div class="box" style="--clr:#b51cd4;">
            <div class="content">
                <div class="icon">
                    <ion-icon name="document-lock-outline"></ion-icon>
                </div>
                <div class="text">
                    <h3><?php echo $lang['bugspace'] ?></h3>
                    <p><?php echo $lang['bugspace-card-article'] ?></p>
                    <br>
                    <p><a style="text-decoration: none; color: var(--white)" href="https://bugspace.io"><?php echo $lang['go-now'] ?></a></p>
                </div>
            </div>
        </div>
    </div>
</section>
<hr>
<section class="timeline">
    <div class="css-script-clear"></div>
    <div class="containers">

        <a style="text-decoration: none; color: var(--blue); text-transform: uppercase; font-weight: 100; font-size: 1.8em;" href="roadmap.php">
            <h1>
                <p style="text-decoration: none; text-transform: lowercase; color: var(--black); font-size: 0.8em;"><?php echo $lang['go-to'] ?></p> "<?php echo $lang['road-map'] ?>"
            </h1>
        </a>
        <div id='timeline'>
            <div id='timelineChart'></div>
        </div>
    </div>
</section>
<hr>
<section>
    <div class="containerFire">
        <div class="text">
            <video autoplay muted loop>
                <source src="Assets/Videos/Backgrounds/textFiremp4.mp4" type="video/mp4">
            </video>
            <h2><?php echo $lang['loading'] ?></h2>
        </div>
    </div>
</section>
<hr>
<!-- <br>
    <br>
    <div class="container_teaser">
        <div class="video">
            <h2>Gameplay Teaser</h2>
            <div class="teaser">
                <video width="100%" src="teaser.mp4" muted controls type="mp4"></video>
            </div>
            <div class="description">
                <h3>Gameplay - Play To Earn</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex rem dignissimos ab, sed</p>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <hr> -->
<!-- <section>
        <div id="team" class="container">
            <div class="header">
                <h2>Takım</h2>
            </div>
            <div class="cardContainer">
                <div class="cards">
                    <div class="imgBox">
                        <img src="Assets/Images/profile.jpg" alt="">
                    </div>
                    <div class="content">
                        <div class="details">
                            <h2>Jhon Doe</h2>
                            <span>Senior Developer</span>
                            <ul class="social_icons">
                                <li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="cards">
                    <div class="imgBox">
                        <img src="Assets/Images/profile.jpg" alt="">
                    </div>
                    <div class="content">
                        <div class="details">
                            <h2>Jhon Doe</h2>
                            <span>Senior Developer</span>
                            <ul class="social_icons">
                                <li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="cards">
                    <div class="imgBox">
                        <img src="Assets/Images/profile.jpg" alt="">
                    </div>
                    <div class="content">
                        <div class="details">
                            <h2>Jhon Doe</h2>
                            <span>Senior Developer</span>
                            <ul class="social_icons">
                                <li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="cards">
                    <div class="imgBox">
                        <img src="Assets/Images/profile.jpg" alt="">
                    </div>
                    <div class="content">
                        <div class="details">
                            <h2>Jhon Doe</h2>
                            <span>Senior Developer</span>
                            <ul class="social_icons">
                                <li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="cards">
                    <div class="imgBox">
                        <img src="Assets/Images/profile.jpg" alt="">
                    </div>
                    <div class="content">
                        <div class="details">
                            <h2>Jhon Doe</h2>
                            <span>Senior Developer</span>
                            <ul class="social_icons">
                                <li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
<section>
    <div id="exchanges" class="container">
        <div class="header">
            <h2><?php echo $lang['exchanges'] ?></h2>
        </div>
        <div class="exchanges">
            <div class="drop"><a href="https://coinmarketcap.com/currencies/bitratoken/" target="_blank"><img src="Assets/Images/Logos/cmclogo.svg" alt=""></a></div>
            <!-- <div class="drop"><a href="https://azbit.com/exchange/BITRA_USDT" target="_blank"><img -->
            <!-- src="Assets/Images/Logos/azbitlogo.jpg" alt=""></a></div> -->
            <div class="drop"><a href="https://latoken.com/exchange/BITRA_USDT" target="_blank"><img src="Assets/Images/Logos/latokenlogo.svg" alt=""></a></div>
            <div class="drop"><a href="https://coinsbit.io/trade/BITRA_USDT" target="_blank"><img src="Assets/Images/Logos/coinsbit.png" alt=""></a></div>
            <div class="drop"><a href="https://bscscan.com/token/0xb98ba5ea6fd49bbbfab5121d2d9a75cd20e69040" target="_blank"><img src="Assets/Images/Logos/bsclogo.png" alt=""></a></div>
        </div>
    </div>
</section>
<hr>
<section>
    <div id="whitepaper" class="heading">
        <h2><?php echo $lang['white-paper-index'] ?></h2>
    </div>
    <div class="whitepaper_book">
        <div class="whitepaper">
            <div class="book">
                <a href="<?php echo $lang['white-paper-docs'] ?>" title="Whitepaper" target="_blank"><img src="Assets/Images/book.jpg" alt=""></a>
            </div>
        </div>
    </div>
</section>
<hr>
<section id="web_app" class="app-bid">
    <div>
        <h2><?php echo $lang['bitraBid-title'] ?></h2>
        <p><?php echo $lang['bitraBid-article'] ?></p>
        <a href="#" class="button"><?php echo $lang['coming-soon'] ?></a>
    </div>
    <div class="app-image">
        <img src="Assets/Images/build-app-bg.jpg" alt="Resim Açıklaması">
    </div>
</section>
<hr>
<section id="contact_us" class="contact">
    <div class="content">
        <h2><?php echo $lang['contact-us'] ?></h2>
    </div>
    <div class="container">
        <div class="social-media">
            <div class="socialContact">
                <p><?php echo $lang['contact-article'] ?></p>
            </div>
            <ul>
                <li style="--i:5;--clr:#1DA1F2;"><a href="https://twitter.com/bitranium"><span><i class="fa-brands fa-twitter"></i></span>TWITTER</a>
                </li>
                <li style="--i:4;--clr:#E4405F;"><a href="https://www.instagram.com/bitranium/?hl=en"><span><i class="fa-brands fa-instagram"></i></span>INSTAGRAM</a></li>
                <li style="--i:3;--clr:#0A66C2;"><a href="https://tr.linkedin.com/in/bitranium-teknoloji-7b1823218"><span><i class="fa-brands fa-linkedin-in"></i></span>LINKEDIN</a></li>
                <li style="--i:2;--clr:#2AABEE;"><a href="https://t.me/bitraniumcoin"><span><i class="fa-brands fa-telegram"></i></span>TELEGRAM</a>
                </li>
                <li style="--i:1;--clr:#7289da;"><a href="https://discord.com/invite/zGbSj5mnra"><span><i class="fa-brands fa-discord"></i></span>DISCORD</a>
                </li>
            </ul>
        </div>
        <div class="form">
            <div class="contactForm">
                <form action="Includes/mail.php" role="form" method="POST">
                    <h2><?php echo $lang['send-message'] ?></h2>
                    <div class="inputBox">
                        <input type="text" name="name" required="required">
                        <span><?php echo $lang['full-name'] ?></span>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="email" required="required">
                        <span><?php echo $lang['email'] ?></span>
                    </div>
                    <div class="inputBox">
                        <textarea required="required" name="message"></textarea>
                        <span><?php echo $lang['your-message'] ?></span>
                    </div>
                    <div class="inputBox">
                        <input type="submit" value="<?php echo $lang['send'] ?>">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php
require 'Includes/footer.php';
?>