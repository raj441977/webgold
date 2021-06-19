<php //echo 'Hello';?>
<!DOCTYPE html>
<html lang="en" id="mybody">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- <meta name="viewport" content="width=1920, initial-scale=1" /> -->
        <link
            rel="stylesheet"
            href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
            integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="css/style.css" />

        <title>GOLDWIN</title>
    </head>

    <body>
        <header>
            <div class="header-container">
                <div class="brand">
                    <div class="brand-logo my-3">
                        <h4 id="brand_btn" onclick="openFullscreen()">
                            GOLDWIN
                        </h4>
                    </div>
                    <div class="brand-tagline my-3">
                        <p>For Amusement Only</p>
                    </div>
                </div>
                <div class="user-info">
                    <div class="welc-user my-3"><p>WELCOME: A0001</p></div>
                    <div class="game-id my-3"><p>GAME ID: 4407462</p></div>
                </div>
                <div class="action-bar">
                    <div class="user-balance my-3"><figure class="coin"></figure> <p>5000</p></div>
                    <button class="vol-button my-3" id="vol">
                        <!-- <i class="fas fa-volume-mute"></i> -->
                    </button>
                    <button class="info-button my-3">
                        <i class="fas fa-info-circle"></i>
                    </button>
                    <button class="logout-button my-3">
                        <i class="fas fa-sign-out-alt"></i>
                    </button>
                </div>
            </div>
        </header>
        <div class="main">
            <div class="gamebar-toggle">
                <div class="game-name-val"><p>0</p></div>
                <div class="game-name"><p>PLAY</p></div>
                <button id="toggler" class="toggle">
                    <i class="fas fa-caret-right"></i>
                </button>
            </div>
            <div id="slide" class="gamebar">
                <div class="gamebar-container">
                    <div class="game-hero">
                        <div class="game-hero-main">
                            <div id="gbox-main" class="gameboxes-container"></div>
                        </div>
                        <div class="y-axis-buttons">
                            <div class="y-ax">
                                <button class="y-ax-btn"></button>
                            </div>
                            <div class="y-ax">
                                <button class="y-ax-btn"></button>
                            </div>
                            <div class="y-ax">
                                <button class="y-ax-btn"></button>
                            </div>
                            <div class="y-ax">
                                <button class="y-ax-btn"></button>
                            </div>
                            <div class="y-ax">
                                <button class="y-ax-btn"></button>
                            </div>
                            <div class="y-ax">
                                <button class="y-ax-btn"></button>
                            </div>
                            <div class="y-ax">
                                <button class="y-ax-btn"></button>
                            </div>
                            <div class="y-ax">
                                <button class="y-ax-btn"></button>
                            </div>
                            <div class="y-ax">
                                <button class="y-ax-btn"></button>
                            </div>
                            <div class="y-ax">
                                <button class="y-ax-btn"></button>
                            </div>
                        </div>
                        <div class="x-axis-buttons">
                            <div class="x-ax">
                                <button class="x-ax-btn"></button>
                            </div>
                            <div class="x-ax">
                                <button class="x-ax-btn"></button>
                            </div>
                            <div class="x-ax">
                                <button class="x-ax-btn"></button>
                            </div>
                            <div class="x-ax">
                                <button class="x-ax-btn"></button>
                            </div>
                            <div class="x-ax">
                                <button class="x-ax-btn"></button>
                            </div>
                            <div class="x-ax">
                                <button class="x-ax-btn"></button>
                            </div>
                            <div class="x-ax">
                                <button class="x-ax-btn"></button>
                            </div>
                            <div class="x-ax">
                                <button class="x-ax-btn"></button>
                            </div>
                            <div class="x-ax">
                                <button class="x-ax-btn"></button>
                            </div>
                            <div class="x-ax">
                                <button class="x-ax-btn"></button>
                            </div>
                        </div>
                        <div class="right-side-buttons">
                            <button class="right-btn">5</button>
                            <button class="right-btn">10</button>
                            <button class="right-btn">20</button>
                            <button class="right-btn">50</button>
                            <button class="right-btn">E</button>
                            <button class="right-btn">O</button>
                            <button class="right-btn">L</button>
                            <button class="right-btn">H</button>
                        </div>
                        <div class="right-side-chips">
                            <button class="chip1 chip-btn active-chip"></button>
                            <button class="chip2 chip-btn active-chip"></button>
                            <button class="chip3 chip-btn active-chip"></button>
                            <button class="chip4 chip-btn active-chip"></button>
                            <button class="chip5 chip-btn active-chip"></button>
                            <button class="chip6 chip-btn active-chip"></button>
                            <button class="chip7 chip-btn active-chip"></button>
                            <button class="chip8 chip-btn active-chip"></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-section">
                <div class="top-result-container">
                    <div class="top-result play-text"><p>PLAY</p></div>
                    <div class="top-result play-value"><p>0</p></div>
                </div>
                <div class="top-multiResult-container">
                    <div class="all-res-wrap">
                        <div class="res-main">
                            <div class="res">55</div>
                            <div class="res-time">55:55</div>
                            <div class="res-badge">5</div>
                        </div>
                        <div class="res-main">
                            <div class="res">55</div>
                            <div class="res-time">55:55</div>
                            <div class="res-badge">5</div>
                        </div>
                        <div class="res-main">
                            <div class="res">55</div>
                            <div class="res-time">55:55</div>
                            <div class="res-badge">5</div>
                        </div>
                        <div class="res-main">
                            <div class="res">55</div>
                            <div class="res-time">55:55</div>
                            <div class="res-badge">5</div>
                        </div>
                        <div class="res-main">
                            <div class="res">55</div>
                            <div class="res-time">55:55</div>
                            <div class="res-badge">5</div>
                        </div>
                        <div class="res-main">
                            <div class="res">55</div>
                            <div class="res-time">55:55</div>
                            <div class="res-badge">5</div>
                        </div>
                        <div class="res-main">
                            <div class="res">55</div>
                            <div class="res-time">55:55</div>
                            <div class="res-badge">5</div>
                        </div>
                        <div class="res-main">
                            <div class="res">55</div>
                            <div class="res-time">55:55</div>
                            <div class="res-badge">5</div>
                        </div>
                        <div class="res-main">
                            <div class="res">55</div>
                            <div class="res-time">55:55</div>
                            <div class="res-badge">5</div>
                        </div>
                        <div class="res-main">
                            <div class="res">55</div>
                            <div class="res-time">55:55</div>
                            <div class="res-badge">5</div>
                        </div>
                        <div class="res-main">
                            <div class="res">55</div>
                            <div class="res-time">55:55</div>
                            <div class="res-badge">5</div>
                        </div>
                        <div class="res-main">
                            <div class="res">55</div>
                            <div class="res-time">55:55</div>
                            <div class="res-badge">5</div>
                        </div>
                    </div>
                </div>
                <div class="blank-container"></div>
                <div class="play-btn-container">
                    <div class="right-bottom-buttons-container">
                        <div
                            class="right-btn-row-container btn-break-container"
                        >
                            <button class="right-play-btn act-btn">CLEAR</button>
                            <button class="right-play-btn act-btn">REMOVE</button>
                        </div>
                        <div
                            class="right-btn-row-container btn-break-container"
                        >
                            <button class="right-play-btn act-btn">DOUBLE</button>
                            <button class="right-play-btn act-btn">REPEAT</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="js/script.js"></script>
        <script src="js/gamebar-toggle.js"></script>
        <script>
            var brand_btn = document.getElementById("brand_btn");
            var mybody = document.getElementById("mybody");
            function openFullscreen() {
                if (mybody.requestFullscreen) {
                    mybody.requestFullscreen();
                } else if (mybody.webkitRequestFullscreen) {
                    /* Safari */
                    mybody.webkitRequestFullscreen();
                } else if (mybody.msRequestFullscreen) {
                    /* IE11 */
                    mybody.msRequestFullscreen();
                }
            }
            document.addEventListener("DOMContentLoaded", function(event) { 
                //document.queryselector('body').style.zoom = 300%;
                document.body.style.zoom = '3';
                document.queryselector('body').style.height = window.screen.height;
                //document.queryselector('body').style.transform.scaleY = (.333333);
            });
        </script>
    </body>
</html>
<?php //echo 'hello';?>
