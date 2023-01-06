<body>
    <header>
        <a href="/" class="logoB">
            <img src="Assets/Images/Logos/logoB.png" alt="">
        </a>
        <div class="rightSide">
            <div class="btns dayNight">
                <ion-icon name="moon-outline"></ion-icon>
                <ion-icon name="sunny-outline"></ion-icon>
            </div>
            <div class="btns menuToggle">
                <ion-icon name="menu-outline"></ion-icon>
                <ion-icon name="close-outline"></ion-icon>
            </div>
        </div>
    </header>
    <!--Navbar-->
    <section>
        <div class="navbar">
            <ul>
                <li><a href="/"><?php echo $lang['home'] ?></a></li>
                <li><a href="#project"><?php echo $lang['projects'] ?></a></li>
                <li><a href="roadmap.php"><?php echo $lang['road-map'] ?></a></li>
               <!-- <li><a href="#team"><?php echo $lang['team'] ?></a></li>-->
                <li><a href="#exchanges"><?php echo $lang['exchanges'] ?></a></li>
                <li><a href="#whitepaper"><?php echo $lang['white-paper'] ?></a></li>
                <li><a href="https://bscscan.com/token/0xb98ba5ea6fd49bbbfab5121d2d9a75cd20e69040" target="_blank"><?php echo $lang['explorer'] ?></a></li>
                <li><a href="#contact_us"><?php echo $lang['contact-us'] ?></a></li>
                <li class="dropdown"><span><i class="bi bi-chevron-down dropdown-indicator"></i><?php echo $lang['choose-lang'] ?></span>
                    <ul>
                        <li><img style="position: relative; width: 20px; float: left; margin-top: 12px; margin-left: 8px;" src="./assets/img/flags/en.png" alt=""><a href="?lang=en"><?php echo $lang['english'] ?></a></li>
                        <li><img style="position: relative; width: 20px; float: left; margin-top: 12px; margin-left: 8px;" src="./assets/img/flags/tr.png" alt=""><a href="?lang=tr"><?php echo $lang['turkish'] ?></a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </section>
