<!DOCTYPE html>

<html lan="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="resources/css/styles.css">
        <link rel="stylesheet" type="text/css" href="resources/css/all.min.css">
        <meta name="author" content="Jmakos">
        <title>Minecraft | Antique-survival</title>
    </head>

    <body>
        <header>
            <div id="#home"></div>
            
            <div class="light-brown-orange">
                <!--This is the website's logo.-->
                <div id="server-logo">
                    <a href="#home"><img alt="server-logo" src="resources/imgs/logo/Antique Survival_logo.png" width="70%"></a>
                </div>

                <!--Dropdown menu-->
                <div class="dropdown">
                    <div class="bar-icon"><i class="fas fa-bars fa-2x" onclick="dropDown()"></i></div>
        
                    <div class="dropdown-content" id="drop">
                        <div class="menu-item">
                            <a class="navigation-links" href="blog/index.php">Blog</a>
                        </div>

                        <div class="menu-item">
                            <a class="navigation-links" href="forum/index.php" target="_blank">Forum</a>
                        </div>

                        <div class="menu-item">
                            <a class="navigation-links" href="register/index.php">Sign-up</a>
                        </div>

                        <div class="menu-item">
                            <a class="navigation-links" href="login/indexp.php">Sign-in</a>
                        </div>
                    </div>
                </div>

                <!--<div class="bar-icon"><i class="fas fa-bars fa-2x"></i></div>

                <div class="menu-item">
                    <a class="navigation-links light-sandyellow-onHover" href="blog/index.php">Blog</a>
                </div>

                <div class="menu-item">
                    <a class="navigation-links" href="forum/index.php" target="_blank">Forum</a>
                </div>

                <div class="menu-item right-float-element">
                    <a class="navigation-links" href="register/index.php">Sign-up</a>
                </div>

                <div class="menu-item right-float-element">
                    <a class="navigation-links" href="login/indexp.php">Sign-in</a>
                </div>
                -->

                <div class="clearfix"></div>
            </div>
        </header>

        <!--Welcoming message-->
        <div class="light-brown-orange">
            <h1 id="title-properties">Welcome to Antique Surival!</h1>
        </div>

        <!--This is the slideshow of the home page.-->
        <div class="slideshow">
            <div class="slides fade">
                <img alt="screenshot1" src="resources/imgs/slideshow/1.png" style="width:100%;">
            </div>

            <div class="slides fade">
                <img alt="screenshot2" src="resources/imgs/slideshow/2.png"style="width:100%;">
            </div>

            <div class="slides fade">
                <img alt="screenshot3" src="resources/imgs/slideshow/3.png" style="width:100%;">
            </div>
            
            <div class="slides fade">
                <img alt="screenshot4" src="resources/imgs/slideshow/4.png" style="width:100%;">
            </div>

            <div class="slides fade">
                <img alt="screenshot5" src="resources/imgs/slideshow/5.png" style="width:100%;">
            </div>
        </div>

        <!--Home page text.-->
        <div class="light-brown-orange distance-from-upper-element">
            <p class="text-properties">This server is made by <strong>MisterFlipFlops</strong> and <strong>JanoerJJJ</strong>.</p>

            <p class="text-properties">
                <br>Antique Survival is a minecraft server that takes place in a desert city of Antiqua.<br>
                In the world of Antiqua, each player can <strong>build</strong> his/her base, <strong>fight</strong> hordes of aggressive monsters
                or <strong>participate in a tournament</strong> of the local city arena.
            </p>
                
                <p class="text-properties"><br><strong>The world of Antiqua is yours to explore!</strong></br></p>
            
        </div>

        <!--Footer of home page.-->
        <footer>
            <div class="light-brown-orange">
                <p class="text-properties">All rights reserved &copy; 2020</p>
            </div>
        </footer>

        <script src="resources/js/slideshow.js"></script>
        <script src="resources/js/dropdown.js"></script>
    </body>
</html>