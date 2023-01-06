<?php
require 'Includes/session.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $lang['page-title-1'] ?></title>
    <link rel="stylesheet" href="Assets/Css/roadmap.css">
    <link rel="icon" type="image/x-icon" href="Assets/Images/Logos/favicon.png">
    <script src="Assets/Js/roadmap.js"></script>
</head>

<body>
    <header>
        <a href="/" class="logoB">
            <img src="/Assets/Images/Logos/logoB.png" alt="">
        </a>
        <div class="rightSide">
            <div class="btns dayNight">
                <ion-icon name="moon-outline"></ion-icon>
                <ion-icon name="sunny-outline"></ion-icon>
            </div>
        </div>
    </header>
    <div class="ag-timeline-block">
        <div class="ag-timeline_title-box">
            <div class="ag-timeline_tagline"><?php echo $lang['road-map'] ?></div>
            <div class="ag-timeline_title"><a style="text-decoration: none; color: rgb(11, 243, 196);"
                    href="/" title="Anasayfa"><?php echo $lang['token'] ?></a></div>
        </div>
        <section class="ag-section">
            <div class="ag-format-container">
                <div class="js-timeline ag-timeline">
                    <div class="js-timeline_line ag-timeline_line">
                        <div class="js-timeline_line-progress ag-timeline_line-progress"></div>
                    </div>
                    <div class="ag-timeline_list">
                        <div class="js-timeline_item ag-timeline_item">
                            <div class="ag-timeline-card_box">
                                <div class="js-timeline-card_point-box ag-timeline-card_point-box">
                                    <div class="ag-timeline-card_point">2021</div>
                                </div>
                                <div class="ag-timeline-card_meta-box">
                                    <div class="ag-timeline-card_meta"><?php echo $lang['1-card-title'] ?></div>
                                </div>
                            </div>
                            <div class="ag-timeline-card_item">
                                <div class="ag-timeline-card_inner">
                                    <div class="ag-timeline-card_img-box">
                                        <img src="Assets/Images/Roadmap/6.png"
                                            class="ag-timeline-card_img" width="640" height="360" />
                                    </div>
                                    <div class="ag-timeline-card_info">
                                        <div class="ag-timeline-card_title"><?php echo $lang['1-card-title'] ?></div>
                                        <div class="ag-timeline-card_desc">
                                            <?php echo $lang['1-card-article'] ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="ag-timeline-card_arrow"></div>
                            </div>
                        </div>

                        <div class="js-timeline_item ag-timeline_item">
                            <div class="ag-timeline-card_box">
                                <div class="ag-timeline-card_meta-box">
                                    <div class="ag-timeline-card_meta"><?php echo $lang['2-card-title'] ?></div>
                                </div>
                                <div class="js-timeline-card_point-box ag-timeline-card_point-box">
                                    <div class="ag-timeline-card_point">2021</div>
                                </div>
                            </div>
                            <div class="ag-timeline-card_item">
                                <div class="ag-timeline-card_inner">
                                    <div class="ag-timeline-card_img-box">
                                        <img src="Assets/Images/Roadmap/3.png"
                                            class="ag-timeline-card_img" width="640" height="360" alt="" />
                                    </div>
                                    <div class="ag-timeline-card_info">
                                        <div class="ag-timeline-card_title"><?php echo $lang['2-card-title'] ?></div>
                                        <div class="ag-timeline-card_desc">
                                            <?php echo $lang['2-card-article'] ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="ag-timeline-card_arrow"></div>
                            </div>
                        </div>

                        <div class="js-timeline_item ag-timeline_item">
                            <div class="ag-timeline-card_box">
                                <div class="js-timeline-card_point-box ag-timeline-card_point-box">
                                    <div class="ag-timeline-card_point">2021</div>
                                </div>
                                <div class="ag-timeline-card_meta-box">
                                    <div class="ag-timeline-card_meta"><?php echo $lang['3-card-title'] ?></div>
                                </div>
                            </div>
                            <div class="ag-timeline-card_item">
                                <div class="ag-timeline-card_inner">
                                    <div class="ag-timeline-card_img-box">
                                        <img src="Assets/Images/Roadmap/9.png"
                                            class="ag-timeline-card_img" width="640" height="360" alt="" />
                                    </div>
                                    <div class="ag-timeline-card_info">
                                        <div class="ag-timeline-card_title"><?php echo $lang['3-card-title'] ?></div>
                                        <div class="ag-timeline-card_desc">
                                            <?php echo $lang['3-card-article'] ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="ag-timeline-card_arrow"></div>
                            </div>
                        </div>

                        <div class="js-timeline_item ag-timeline_item">
                            <div class="ag-timeline-card_box">
                                <div class="ag-timeline-card_meta-box">
                                    <div class="ag-timeline-card_meta"><?php echo $lang['4-card-title'] ?></div>
                                </div>
                                <div class="js-timeline-card_point-box ag-timeline-card_point-box">
                                    <div class="ag-timeline-card_point">2021</div>
                                </div>
                            </div>
                            <div class="ag-timeline-card_item">
                                <div class="ag-timeline-card_inner">
                                    <div class="ag-timeline-card_img-box">
                                        <img src="Assets/Images/Roadmap/1.png"
                                            class="ag-timeline-card_img" width="640" height="360" alt="" />
                                    </div>
                                    <div class="ag-timeline-card_info">
                                        <div class="ag-timeline-card_title"><?php echo $lang['4-card-title'] ?></div>
                                        <div class="ag-timeline-card_desc">
                                            <?php echo $lang['4-card-article'] ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="ag-timeline-card_arrow"></div>
                            </div>
                        </div>

                        <div class="js-timeline_item ag-timeline_item">
                            <div class="ag-timeline-card_box">
                                <div class="js-timeline-card_point-box ag-timeline-card_point-box">
                                    <div class="ag-timeline-card_point">2022</div>
                                </div>
                                <div class="ag-timeline-card_meta-box">
                                    <div class="ag-timeline-card_meta"><?php echo $lang['5-card-title'] ?></div>
                                </div>
                            </div>
                            <div class="ag-timeline-card_item">
                                <div class="ag-timeline-card_inner">
                                    <div class="ag-timeline-card_img-box">
                                        <img src="Assets/Images/Roadmap/7.png"
                                            class="ag-timeline-card_img" width="640" height="360" alt="" />
                                    </div>
                                    <div class="ag-timeline-card_info">
                                        <div class="ag-timeline-card_title"><?php echo $lang['5-card-title'] ?></div>
                                        <div class="ag-timeline-card_desc">
                                            <?php echo $lang['5-card-article'] ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="ag-timeline-card_arrow"></div>
                            </div>
                        </div>

                        <div class="js-timeline_item ag-timeline_item">
                            <div class="ag-timeline-card_box">
                                <div class="ag-timeline-card_meta-box">
                                    <div class="ag-timeline-card_meta"><?php echo $lang['6-card-title'] ?></div>
                                </div>
                                <div class="js-timeline-card_point-box ag-timeline-card_point-box">
                                    <div class="ag-timeline-card_point">2022</div>
                                </div>
                            </div>
                            <div class="ag-timeline-card_item">
                                <div class="ag-timeline-card_inner">
                                    <div class="ag-timeline-card_img-box">
                                        <img src="Assets/Images/Roadmap/4.png"
                                            class="ag-timeline-card_img" width="640" height="360" alt="" />
                                    </div>
                                    <div class="ag-timeline-card_info">
                                        <div class="ag-timeline-card_title"><?php echo $lang['6-card-title'] ?></div>
                                        <div class="ag-timeline-card_desc">
                                            <?php echo $lang['6-card-article'] ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="ag-timeline-card_arrow"></div>
                            </div>
                        </div>

                        <div class="js-timeline_item ag-timeline_item">
                            <div class="ag-timeline-card_box">
                                <div class="js-timeline-card_point-box ag-timeline-card_point-box">
                                    <div class="ag-timeline-card_point">2022</div>
                                </div>
                                <div class="ag-timeline-card_meta-box">
                                    <div class="ag-timeline-card_meta"><?php echo $lang['7-card-title'] ?></div>
                                </div>
                            </div>
                            <div class="ag-timeline-card_item">
                                <div class="ag-timeline-card_inner">
                                    <div class="ag-timeline-card_img-box">
                                        <img src="Assets/Images/Roadmap/8.png"
                                            class="ag-timeline-card_img" width="640" height="360" alt="" />
                                    </div>
                                    <div class="ag-timeline-card_info">
                                        <div class="ag-timeline-card_title"><?php echo $lang['7-card-title'] ?></div>
                                        <div class="ag-timeline-card_desc">
                                            <?php echo $lang['7-card-article'] ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="ag-timeline-card_arrow"></div>
                            </div>
                        </div>

                        <div class="js-timeline_item ag-timeline_item">
                            <div class="ag-timeline-card_box">
                                <div class="ag-timeline-card_meta-box">
                                    <div class="ag-timeline-card_meta"><?php echo $lang['8-card-title'] ?></div>
                                </div>
                                <div class="js-timeline-card_point-box ag-timeline-card_point-box">
                                    <div class="ag-timeline-card_point">2022
                                
                           </div>
                                </div>
                            </div>
                            <div class="ag-timeline-card_item">
                                <div class="ag-timeline-card_inner">
                                    <div class="ag-timeline-card_img-box">
                                        <img src="Assets/Images/Roadmap/5.png"
                                            class="ag-timeline-card_img" width="640" height="360" alt="" />
                                    </div>
                                    <div class="ag-timeline-card_info">
                                        <div class="ag-timeline-card_title"><?php echo $lang['8-card-title'] ?></div>
                                        <div class="ag-timeline-card_desc">
                                            <?php echo $lang['8-card-article'] ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="ag-timeline-card_arrow"></div>
                            </div>
                        </div>

                        <div class="js-timeline_item ag-timeline_item">
                            <div class="ag-timeline-card_box">
                                <div class="js-timeline-card_point-box ag-timeline-card_point-box">
                                    <div class="ag-timeline-card_point">2023</div>
                                </div>
                                <div class="ag-timeline-card_meta-box">
                                    <div class="ag-timeline-card_meta"><?php echo $lang['9-card-title'] ?></div>
                                </div>
                            </div>
                            <div class="ag-timeline-card_item">
                                <div class="ag-timeline-card_inner">
                                    <div class="ag-timeline-card_img-box">
                                        <img src="Assets/Images/Roadmap/10.png"
                                            class="ag-timeline-card_img" width="640" height="360" alt="" />
                                    </div>
                                    <div class="ag-timeline-card_info">
                                        <div class="ag-timeline-card_title"><?php echo $lang['9-card-title'] ?></div>
                                        <div class="ag-timeline-card_desc">
                                        <?php echo $lang['9-card-article'] ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="ag-timeline-card_arrow"></div>
                            </div>
                        </div>

                        <div class="js-timeline_item ag-timeline_item">
                            <div class="ag-timeline-card_box">
                                <div class="ag-timeline-card_meta-box">
                                    <div class="ag-timeline-card_meta"><?php echo $lang['10-card-title'] ?></div>
                                </div>
                                <div class="js-timeline-card_point-box ag-timeline-card_point-box">
                                    <div class="ag-timeline-card_point">2023</div>
                                </div>
                            </div>
                            <div class="ag-timeline-card_item">
                                <div class="ag-timeline-card_inner">
                                    <div class="ag-timeline-card_img-box">
                                        <img src="Assets/Images/Roadmap/11.png"
                                            class="ag-timeline-card_img" width="640" height="360" alt="" />
                                    </div>
                                    <div class="ag-timeline-card_info">
                                        <div class="ag-timeline-card_title"><?php echo $lang['10-card-title'] ?></div>
                                        <div class="ag-timeline-card_desc">
                                        <?php echo $lang['10-card-article'] ?>
                                        
                                        </div>
                                    </div>
                                </div>
                                <div class="ag-timeline-card_arrow"></div>
                            </div>
                        </div>

                        <div class="js-timeline_item ag-timeline_item">
                            <div class="ag-timeline-card_box">
                                <div class="js-timeline-card_point-box ag-timeline-card_point-box">
                                    <div class="ag-timeline-card_point">2023</div>
                                </div>
                                <div class="ag-timeline-card_meta-box">
                                    <div class="ag-timeline-card_meta"><?php echo $lang['11-card-title'] ?></div>
                                </div>
                            </div>
                            <div class="ag-timeline-card_item">
                                <div class="ag-timeline-card_inner">
                                    <div class="ag-timeline-card_img-box">
                                        <img src="Assets/Images/Roadmap/12.png"
                                            class="ag-timeline-card_img" width="640" height="360" alt="" />
                                    </div>
                                    <div class="ag-timeline-card_info">
                                        <div class="ag-timeline-card_title"><?php echo $lang['11-card-title'] ?></div>
                                        <div class="ag-timeline-card_desc">
                                        <?php echo $lang['11-card-article'] ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="ag-timeline-card_arrow"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="Assets/Js/roadmap.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script>
    let dayNight = document.querySelector('.dayNight')
    let menuToggle = document.querySelector('.menuToggle')
    let body = document.querySelector('body')
    let navbar = document.querySelector('.navbar')

    dayNight.onclick = function () {
        body.classList.toggle('dark')
        dayNight.classList.toggle('active')
    }

    menuToggle.onclick = function () {
        menuToggle.classList.toggle('active')
        navbar.classList.toggle('active')
    }
</script>

</html>
