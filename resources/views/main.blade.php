
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta name="author" content="AtypicalThemes">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- WEBSITE TITLE & DESCRIPTION -->
    <title>Strider - A Game Studio Template</title>
    <meta name="description" content="The best template for game developers and small studios">
    <meta name="keywords" content="game, gaming, videogame, developer, steam, studio, team">

    <!-- OG meta tags that improve the look of your post on social media -->
    <meta property="og:site_name" content="" /><!--website name-->
    <meta property="og:site" content="" /> <!--website link-->
    <meta property="og:title" content=""/> <!--Post title-->
    <meta property="og:description" content="" /> <!--Post description-->
    <meta property="og:image" content="" /><!-- Image link (jpg only)-->
    <meta property="og:url" content="" /> <!--where do you want your post to link to-->
    <meta property="og:type" content="article" />

    <!-- Favicon and Apple Icons -->
    <link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">

    <!-- STYLES -->
    <!-- Bootstrap -->
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- FontAwesome -->
    <link href="{{asset('frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- Animations -->
    <link href="{{asset('frontend/css/animations.css')}}" rel="stylesheet">
    <!-- Lightbox -->
    <link href="{{asset('frontend/css/lightbox.min.css')}}" rel="stylesheet">
    <!-- Video Lightbox -->
    <link href="{{asset('frontend/css/modal-video.min.css')}}" rel="stylesheet">
    <!-- Main Stylesheet -->
    <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">

</head>
<body>
<!-- Loading Screen -->
<div id="loader-wrapper">
    <h1 class="loader-logo"><span class="colored">Sabecltd</span></h1>
    <div id="progress"></div>
    <h3 class="loader-text">LOADING</h3>
</div>

<header id="main-header">
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark">
        <div class="container">
            <!-- Site Logo -->
            <a id="logo" class="navbar-brand" href="#"><img style="max-width: 200px" class="img-fluid" src="{{asset('frontend/images/logo.png')}}" alt="site logo"></a>
            <!-- Dropdown Button -->
            <button id="hamburger" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- Navigation Links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#games">Games</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<div id="hero-section" class="medium-margin">
    <div class="row hero-unit">
        <div class="hero-overlay"></div>
        <video autoplay loop muted poster="{{asset('frontend/images/poster.jpg')}}" id="bgvid" class="img-fluid">
            <source src="{{asset('frontend/images/bg-vid.mp4')}}" type="video/mp4"><!-- your video goes here -->
        </video>
        <div class="hero-caption">
            <h1>WE MAKE <span class="colored">AWESOME</span> GAMES</h1>
        </div>
    </div>
</div>

<div class="container">
    <div id="about" class="large-margin">
        <a href="about"></a><!-- Nav Anchor -->
        <div class="row heading tiny-margin">
            <div class="col-md-auto">
                <h1 class="animation-element slide-down">ABOUT <span class="colored">US</span></h1>
            </div>
            <div class="col">
                <hr class="animation-element extend">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <p class="small-margin">We are a dedicated team of developers, designers, artists, programmers, and most importantly gaming enthusiasts. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae ante pharetra, molestie nunc non, interdum ipsum.</p>
                <img id="awards" src="{{asset('frontend/images/awards.png')}}" class="img-fluid" alt="awads">
            </div>
            <div class="col-md-6">
                <img style="width: 385px;height: 305px" id="support-image" src="{{asset('frontend/images/placeholder.jpg')}}" data-src="{{asset('frontend/images/about.png')}}" class="img-fluid b-lazy" alt="digital collage">
            </div>
        </div>
    </div>
    <div id="games" class="large-margin">
        <a href="games"></a><!-- Nav Anchor -->
        <div class="row heading tiny-margin">
            <div class="col-md-auto">
                <h1 class="animation-element slide-down">OUR <span class="colored">GAMES</span></h1>
            </div>
            <div class="col">
                <hr class="animation-element extend">
            </div>
        </div>
        <div class="row ">
            <div class="col-md-11 small-margin">
                <p>Here at Strider games we pride ourselves in delivering rich and polished experiences that our fanbase can enjoy and immerse themselve into. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis rhoncus nibh.</p>
            </div>

        </div>
        <div class="games-portfolio ">
            <!-- Game Card Video -->
            <div class="row game-card">
                <div class="col-lg-12 col-xl-5 game-card-left">
                    <a href="#" class="js-video-button" data-video-id='DPBW_MFqeRs' data-channel="youtube"> <!-- Video link goes here -->
                        <div class="overlay">
                            <i class="fa fa-play fa-3x"></i>
                        </div>
                        <img src="{{asset('frontend/images/placeholder.jpg')}}" data-src="{{asset('frontend/images/game.jpg')}}" class="img-fluid b-lazy" alt="video thumbnail"> <!-- Video Thumbnail Img -->
                    </a>
                </div>
                <div class="col-lg-12 col-xl-7 game-card-right">
                    <h2 class="short-hr-left">South Park</h2>
                    <p class="game-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis rhoncus nibh. Phasellus dignissim luctus consectetur. Fusce viverra est non purus ultrices, vel molestie massa tincidunt. <span class="expand colored strong" data-toggle="modal" data-target="#game1">Read More</span></p>
                </div>
                <!-- Modal -->
                <div class="modal fade game-modal" id="game1" tabindex="-1" role="dialog" aria-labelledby="scales" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title" id="scales">SWORDS &amp; SCALES</h1>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h2 class="short-hr-left">TEAM UP AND FIGHT DRAGONS</h2>
                                <p>Integer eget diam felis. Quisque et aliquet lectus, et lacinia turpis. Praesent eget pretium orci. Sed vestibulum rutrum volutpat. Curabitur feugiat arcu odio, quis convallis eros laoreet ac.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">MAKE FRIENDS</h2>
                                <p>Suspendisse ultricies, dui vitae convallis blandit, ipsum sem mattis diam, in egestas arcu lacus sed lectus. Donec at interdum tellus. Quisque pellentesque a felis et rutrum. Donec condimentum magna sit amet viverra convallis. Fusce accumsan efficitur orci a commodo.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">TRAIN YOUR DRAGON</h2>
                                <p>Mauris at sapien nibh. Integer id tellus vitae ante cursus pharetra. Vestibulum ultrices eleifend enim, quis maximus nibh dapibus in. Phasellus lacinia nec leo at semper. Duis nisl odio, lacinia quis dui at, pretium tincidunt metus. Maecenas condimentum purus sit amet neque maximus tempor. Proin eros massa, ullamcorper eget rutrum eu, feugiat id purus.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="button secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row game-card">
                <div class="col-lg-12 col-xl-5 game-card-left">
                    <a href="#" class="js-video-button" data-video-id='DPBW_MFqeRs' data-channel="youtube"> <!-- Video link goes here -->
                        <div class="overlay">
                            <i class="fa fa-play fa-3x"></i>
                        </div>
                        <img src="{{asset('frontend/images/placeholder.jpg')}}" data-src="{{asset('frontend/images/game.jpg')}}" class="img-fluid b-lazy" alt="video thumbnail"> <!-- Video Thumbnail Img -->
                    </a>
                </div>
                <div class="col-lg-12 col-xl-7 game-card-right">
                    <h2 class="short-hr-left">Trivial Pursuit</h2>
                    <p class="game-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis rhoncus nibh. Phasellus dignissim luctus consectetur. Fusce viverra est non purus ultrices, vel molestie massa tincidunt. <span class="expand colored strong" data-toggle="modal" data-target="#game1">Read More</span></p>
                </div>
                <!-- Modal -->
                <div class="modal fade game-modal" id="game1" tabindex="-1" role="dialog" aria-labelledby="scales" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title" id="scales">SWORDS &amp; SCALES</h1>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h2 class="short-hr-left">TEAM UP AND FIGHT DRAGONS</h2>
                                <p>Integer eget diam felis. Quisque et aliquet lectus, et lacinia turpis. Praesent eget pretium orci. Sed vestibulum rutrum volutpat. Curabitur feugiat arcu odio, quis convallis eros laoreet ac.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">MAKE FRIENDS</h2>
                                <p>Suspendisse ultricies, dui vitae convallis blandit, ipsum sem mattis diam, in egestas arcu lacus sed lectus. Donec at interdum tellus. Quisque pellentesque a felis et rutrum. Donec condimentum magna sit amet viverra convallis. Fusce accumsan efficitur orci a commodo.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">TRAIN YOUR DRAGON</h2>
                                <p>Mauris at sapien nibh. Integer id tellus vitae ante cursus pharetra. Vestibulum ultrices eleifend enim, quis maximus nibh dapibus in. Phasellus lacinia nec leo at semper. Duis nisl odio, lacinia quis dui at, pretium tincidunt metus. Maecenas condimentum purus sit amet neque maximus tempor. Proin eros massa, ullamcorper eget rutrum eu, feugiat id purus.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="button secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row game-card">
                <div class="col-lg-12 col-xl-5 game-card-left">
                    <a href="#" class="js-video-button" data-video-id='DPBW_MFqeRs' data-channel="youtube"> <!-- Video link goes here -->
                        <div class="overlay">
                            <i class="fa fa-play fa-3x"></i>
                        </div>
                        <img src="{{asset('frontend/images/placeholder.jpg')}}" data-src="{{asset('frontend/images/game.jpg')}}" class="img-fluid b-lazy" alt="video thumbnail"> <!-- Video Thumbnail Img -->
                    </a>
                </div>
                <div class="col-lg-12 col-xl-7 game-card-right">
                    <h2 class="short-hr-left">Trivia for Dummies</h2>
                    <p class="game-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis rhoncus nibh. Phasellus dignissim luctus consectetur. Fusce viverra est non purus ultrices, vel molestie massa tincidunt. <span class="expand colored strong" data-toggle="modal" data-target="#game1">Read More</span></p>
                </div>
                <!-- Modal -->
                <div class="modal fade game-modal" id="game1" tabindex="-1" role="dialog" aria-labelledby="scales" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title" id="scales">SWORDS &amp; SCALES</h1>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h2 class="short-hr-left">TEAM UP AND FIGHT DRAGONS</h2>
                                <p>Integer eget diam felis. Quisque et aliquet lectus, et lacinia turpis. Praesent eget pretium orci. Sed vestibulum rutrum volutpat. Curabitur feugiat arcu odio, quis convallis eros laoreet ac.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">MAKE FRIENDS</h2>
                                <p>Suspendisse ultricies, dui vitae convallis blandit, ipsum sem mattis diam, in egestas arcu lacus sed lectus. Donec at interdum tellus. Quisque pellentesque a felis et rutrum. Donec condimentum magna sit amet viverra convallis. Fusce accumsan efficitur orci a commodo.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">TRAIN YOUR DRAGON</h2>
                                <p>Mauris at sapien nibh. Integer id tellus vitae ante cursus pharetra. Vestibulum ultrices eleifend enim, quis maximus nibh dapibus in. Phasellus lacinia nec leo at semper. Duis nisl odio, lacinia quis dui at, pretium tincidunt metus. Maecenas condimentum purus sit amet neque maximus tempor. Proin eros massa, ullamcorper eget rutrum eu, feugiat id purus.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="button secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row game-card">
                <div class="col-lg-12 col-xl-5 game-card-left">
                    <a href="#" class="js-video-button" data-video-id='DPBW_MFqeRs' data-channel="youtube"> <!-- Video link goes here -->
                        <div class="overlay">
                            <i class="fa fa-play fa-3x"></i>
                        </div>
                        <img src="{{asset('frontend/images/placeholder.jpg')}}" data-src="{{asset('frontend/images/game.jpg')}}" class="img-fluid b-lazy" alt="video thumbnail"> <!-- Video Thumbnail Img -->
                    </a>
                </div>
                <div class="col-lg-12 col-xl-7 game-card-right">
                    <h2 class="short-hr-left">Pimp My Ride</h2>
                    <p class="game-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis rhoncus nibh. Phasellus dignissim luctus consectetur. Fusce viverra est non purus ultrices, vel molestie massa tincidunt. <span class="expand colored strong" data-toggle="modal" data-target="#game1">Read More</span></p>
                </div>
                <!-- Modal -->
                <div class="modal fade game-modal" id="game1" tabindex="-1" role="dialog" aria-labelledby="scales" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title" id="scales">SWORDS &amp; SCALES</h1>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h2 class="short-hr-left">TEAM UP AND FIGHT DRAGONS</h2>
                                <p>Integer eget diam felis. Quisque et aliquet lectus, et lacinia turpis. Praesent eget pretium orci. Sed vestibulum rutrum volutpat. Curabitur feugiat arcu odio, quis convallis eros laoreet ac.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">MAKE FRIENDS</h2>
                                <p>Suspendisse ultricies, dui vitae convallis blandit, ipsum sem mattis diam, in egestas arcu lacus sed lectus. Donec at interdum tellus. Quisque pellentesque a felis et rutrum. Donec condimentum magna sit amet viverra convallis. Fusce accumsan efficitur orci a commodo.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">TRAIN YOUR DRAGON</h2>
                                <p>Mauris at sapien nibh. Integer id tellus vitae ante cursus pharetra. Vestibulum ultrices eleifend enim, quis maximus nibh dapibus in. Phasellus lacinia nec leo at semper. Duis nisl odio, lacinia quis dui at, pretium tincidunt metus. Maecenas condimentum purus sit amet neque maximus tempor. Proin eros massa, ullamcorper eget rutrum eu, feugiat id purus.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="button secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row game-card">
                <div class="col-lg-12 col-xl-5 game-card-left">
                    <a href="#" class="js-video-button" data-video-id='DPBW_MFqeRs' data-channel="youtube"> <!-- Video link goes here -->
                        <div class="overlay">
                            <i class="fa fa-play fa-3x"></i>
                        </div>
                        <img src="{{asset('frontend/images/placeholder.jpg')}}" data-src="{{asset('frontend/images/game.jpg')}}" class="img-fluid b-lazy" alt="video thumbnail"> <!-- Video Thumbnail Img -->
                    </a>
                </div>
                <div class="col-lg-12 col-xl-7 game-card-right">
                    <h2 class="short-hr-left">Spot The Difference</h2>
                    <p class="game-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis rhoncus nibh. Phasellus dignissim luctus consectetur. Fusce viverra est non purus ultrices, vel molestie massa tincidunt. <span class="expand colored strong" data-toggle="modal" data-target="#game1">Read More</span></p>
                </div>
                <!-- Modal -->
                <div class="modal fade game-modal" id="game1" tabindex="-1" role="dialog" aria-labelledby="scales" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title" id="scales">SWORDS &amp; SCALES</h1>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h2 class="short-hr-left">TEAM UP AND FIGHT DRAGONS</h2>
                                <p>Integer eget diam felis. Quisque et aliquet lectus, et lacinia turpis. Praesent eget pretium orci. Sed vestibulum rutrum volutpat. Curabitur feugiat arcu odio, quis convallis eros laoreet ac.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">MAKE FRIENDS</h2>
                                <p>Suspendisse ultricies, dui vitae convallis blandit, ipsum sem mattis diam, in egestas arcu lacus sed lectus. Donec at interdum tellus. Quisque pellentesque a felis et rutrum. Donec condimentum magna sit amet viverra convallis. Fusce accumsan efficitur orci a commodo.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">TRAIN YOUR DRAGON</h2>
                                <p>Mauris at sapien nibh. Integer id tellus vitae ante cursus pharetra. Vestibulum ultrices eleifend enim, quis maximus nibh dapibus in. Phasellus lacinia nec leo at semper. Duis nisl odio, lacinia quis dui at, pretium tincidunt metus. Maecenas condimentum purus sit amet neque maximus tempor. Proin eros massa, ullamcorper eget rutrum eu, feugiat id purus.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="button secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row game-card">
                <div class="col-lg-12 col-xl-5 game-card-left">
                    <a href="#" class="js-video-button" data-video-id='DPBW_MFqeRs' data-channel="youtube"> <!-- Video link goes here -->
                        <div class="overlay">
                            <i class="fa fa-play fa-3x"></i>
                        </div>
                        <img src="{{asset('frontend/images/placeholder.jpg')}}" data-src="{{asset('frontend/images/game.jpg')}}" class="img-fluid b-lazy" alt="video thumbnail"> <!-- Video Thumbnail Img -->
                    </a>
                </div>
                <div class="col-lg-12 col-xl-7 game-card-right">
                    <h2 class="short-hr-left">Pet Rock</h2>
                    <p class="game-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis rhoncus nibh. Phasellus dignissim luctus consectetur. Fusce viverra est non purus ultrices, vel molestie massa tincidunt. <span class="expand colored strong" data-toggle="modal" data-target="#game1">Read More</span></p>
                </div>
                <!-- Modal -->
                <div class="modal fade game-modal" id="game1" tabindex="-1" role="dialog" aria-labelledby="scales" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title" id="scales">SWORDS &amp; SCALES</h1>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h2 class="short-hr-left">TEAM UP AND FIGHT DRAGONS</h2>
                                <p>Integer eget diam felis. Quisque et aliquet lectus, et lacinia turpis. Praesent eget pretium orci. Sed vestibulum rutrum volutpat. Curabitur feugiat arcu odio, quis convallis eros laoreet ac.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">MAKE FRIENDS</h2>
                                <p>Suspendisse ultricies, dui vitae convallis blandit, ipsum sem mattis diam, in egestas arcu lacus sed lectus. Donec at interdum tellus. Quisque pellentesque a felis et rutrum. Donec condimentum magna sit amet viverra convallis. Fusce accumsan efficitur orci a commodo.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">TRAIN YOUR DRAGON</h2>
                                <p>Mauris at sapien nibh. Integer id tellus vitae ante cursus pharetra. Vestibulum ultrices eleifend enim, quis maximus nibh dapibus in. Phasellus lacinia nec leo at semper. Duis nisl odio, lacinia quis dui at, pretium tincidunt metus. Maecenas condimentum purus sit amet neque maximus tempor. Proin eros massa, ullamcorper eget rutrum eu, feugiat id purus.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="button secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row game-card">
                <div class="col-lg-12 col-xl-5 game-card-left">
                    <a href="#" class="js-video-button" data-video-id='DPBW_MFqeRs' data-channel="youtube"> <!-- Video link goes here -->
                        <div class="overlay">
                            <i class="fa fa-play fa-3x"></i>
                        </div>
                        <img src="{{asset('frontend/images/placeholder.jpg')}}" data-src="{{asset('frontend/images/game.jpg')}}" class="img-fluid b-lazy" alt="video thumbnail"> <!-- Video Thumbnail Img -->
                    </a>
                </div>
                <div class="col-lg-12 col-xl-7 game-card-right">
                    <h2 class="short-hr-left">Popeye</h2>
                    <p class="game-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis rhoncus nibh. Phasellus dignissim luctus consectetur. Fusce viverra est non purus ultrices, vel molestie massa tincidunt. <span class="expand colored strong" data-toggle="modal" data-target="#game1">Read More</span></p>
                </div>
                <!-- Modal -->
                <div class="modal fade game-modal" id="game1" tabindex="-1" role="dialog" aria-labelledby="scales" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title" id="scales">SWORDS &amp; SCALES</h1>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h2 class="short-hr-left">TEAM UP AND FIGHT DRAGONS</h2>
                                <p>Integer eget diam felis. Quisque et aliquet lectus, et lacinia turpis. Praesent eget pretium orci. Sed vestibulum rutrum volutpat. Curabitur feugiat arcu odio, quis convallis eros laoreet ac.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">MAKE FRIENDS</h2>
                                <p>Suspendisse ultricies, dui vitae convallis blandit, ipsum sem mattis diam, in egestas arcu lacus sed lectus. Donec at interdum tellus. Quisque pellentesque a felis et rutrum. Donec condimentum magna sit amet viverra convallis. Fusce accumsan efficitur orci a commodo.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">TRAIN YOUR DRAGON</h2>
                                <p>Mauris at sapien nibh. Integer id tellus vitae ante cursus pharetra. Vestibulum ultrices eleifend enim, quis maximus nibh dapibus in. Phasellus lacinia nec leo at semper. Duis nisl odio, lacinia quis dui at, pretium tincidunt metus. Maecenas condimentum purus sit amet neque maximus tempor. Proin eros massa, ullamcorper eget rutrum eu, feugiat id purus.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="button secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row game-card">
                <div class="col-lg-12 col-xl-5 game-card-left">
                    <a href="#" class="js-video-button" data-video-id='DPBW_MFqeRs' data-channel="youtube"> <!-- Video link goes here -->
                        <div class="overlay">
                            <i class="fa fa-play fa-3x"></i>
                        </div>
                        <img src="{{asset('frontend/images/placeholder.jpg')}}" data-src="{{asset('frontend/images/game.jpg')}}" class="img-fluid b-lazy" alt="video thumbnail"> <!-- Video Thumbnail Img -->
                    </a>
                </div>
                <div class="col-lg-12 col-xl-7 game-card-right">
                    <h2 class="short-hr-left">Bullseye</h2>
                    <p class="game-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis rhoncus nibh. Phasellus dignissim luctus consectetur. Fusce viverra est non purus ultrices, vel molestie massa tincidunt. <span class="expand colored strong" data-toggle="modal" data-target="#game1">Read More</span></p>
                </div>
                <!-- Modal -->
                <div class="modal fade game-modal" id="game1" tabindex="-1" role="dialog" aria-labelledby="scales" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title" id="scales">SWORDS &amp; SCALES</h1>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h2 class="short-hr-left">TEAM UP AND FIGHT DRAGONS</h2>
                                <p>Integer eget diam felis. Quisque et aliquet lectus, et lacinia turpis. Praesent eget pretium orci. Sed vestibulum rutrum volutpat. Curabitur feugiat arcu odio, quis convallis eros laoreet ac.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">MAKE FRIENDS</h2>
                                <p>Suspendisse ultricies, dui vitae convallis blandit, ipsum sem mattis diam, in egestas arcu lacus sed lectus. Donec at interdum tellus. Quisque pellentesque a felis et rutrum. Donec condimentum magna sit amet viverra convallis. Fusce accumsan efficitur orci a commodo.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">TRAIN YOUR DRAGON</h2>
                                <p>Mauris at sapien nibh. Integer id tellus vitae ante cursus pharetra. Vestibulum ultrices eleifend enim, quis maximus nibh dapibus in. Phasellus lacinia nec leo at semper. Duis nisl odio, lacinia quis dui at, pretium tincidunt metus. Maecenas condimentum purus sit amet neque maximus tempor. Proin eros massa, ullamcorper eget rutrum eu, feugiat id purus.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="button secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row game-card">
                <div class="col-lg-12 col-xl-5 game-card-left">
                    <a href="#" class="js-video-button" data-video-id='DPBW_MFqeRs' data-channel="youtube"> <!-- Video link goes here -->
                        <div class="overlay">
                            <i class="fa fa-play fa-3x"></i>
                        </div>
                        <img src="{{asset('frontend/images/placeholder.jpg')}}" data-src="{{asset('frontend/images/game.jpg')}}" class="img-fluid b-lazy" alt="video thumbnail"> <!-- Video Thumbnail Img -->
                    </a>
                </div>
                <div class="col-lg-12 col-xl-7 game-card-right">
                    <h2 class="short-hr-left">Rainbocorns</h2>
                    <p class="game-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis rhoncus nibh. Phasellus dignissim luctus consectetur. Fusce viverra est non purus ultrices, vel molestie massa tincidunt. <span class="expand colored strong" data-toggle="modal" data-target="#game1">Read More</span></p>
                </div>
                <!-- Modal -->
                <div class="modal fade game-modal" id="game1" tabindex="-1" role="dialog" aria-labelledby="scales" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title" id="scales">SWORDS &amp; SCALES</h1>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h2 class="short-hr-left">TEAM UP AND FIGHT DRAGONS</h2>
                                <p>Integer eget diam felis. Quisque et aliquet lectus, et lacinia turpis. Praesent eget pretium orci. Sed vestibulum rutrum volutpat. Curabitur feugiat arcu odio, quis convallis eros laoreet ac.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">MAKE FRIENDS</h2>
                                <p>Suspendisse ultricies, dui vitae convallis blandit, ipsum sem mattis diam, in egestas arcu lacus sed lectus. Donec at interdum tellus. Quisque pellentesque a felis et rutrum. Donec condimentum magna sit amet viverra convallis. Fusce accumsan efficitur orci a commodo.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">TRAIN YOUR DRAGON</h2>
                                <p>Mauris at sapien nibh. Integer id tellus vitae ante cursus pharetra. Vestibulum ultrices eleifend enim, quis maximus nibh dapibus in. Phasellus lacinia nec leo at semper. Duis nisl odio, lacinia quis dui at, pretium tincidunt metus. Maecenas condimentum purus sit amet neque maximus tempor. Proin eros massa, ullamcorper eget rutrum eu, feugiat id purus.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="button secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row game-card">
                <div class="col-lg-12 col-xl-5 game-card-left">
                    <a href="#" class="js-video-button" data-video-id='DPBW_MFqeRs' data-channel="youtube"> <!-- Video link goes here -->
                        <div class="overlay">
                            <i class="fa fa-play fa-3x"></i>
                        </div>
                        <img src="{{asset('frontend/images/placeholder.jpg')}}" data-src="{{asset('frontend/images/game.jpg')}}" class="img-fluid b-lazy" alt="video thumbnail"> <!-- Video Thumbnail Img -->
                    </a>
                </div>
                <div class="col-lg-12 col-xl-7 game-card-right">
                    <h2 class="short-hr-left">Snakes & Ladders</h2>
                    <p class="game-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis rhoncus nibh. Phasellus dignissim luctus consectetur. Fusce viverra est non purus ultrices, vel molestie massa tincidunt. <span class="expand colored strong" data-toggle="modal" data-target="#game1">Read More</span></p>
                </div>
                <!-- Modal -->
                <div class="modal fade game-modal" id="game1" tabindex="-1" role="dialog" aria-labelledby="scales" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title" id="scales">SWORDS &amp; SCALES</h1>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h2 class="short-hr-left">TEAM UP AND FIGHT DRAGONS</h2>
                                <p>Integer eget diam felis. Quisque et aliquet lectus, et lacinia turpis. Praesent eget pretium orci. Sed vestibulum rutrum volutpat. Curabitur feugiat arcu odio, quis convallis eros laoreet ac.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">MAKE FRIENDS</h2>
                                <p>Suspendisse ultricies, dui vitae convallis blandit, ipsum sem mattis diam, in egestas arcu lacus sed lectus. Donec at interdum tellus. Quisque pellentesque a felis et rutrum. Donec condimentum magna sit amet viverra convallis. Fusce accumsan efficitur orci a commodo.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">TRAIN YOUR DRAGON</h2>
                                <p>Mauris at sapien nibh. Integer id tellus vitae ante cursus pharetra. Vestibulum ultrices eleifend enim, quis maximus nibh dapibus in. Phasellus lacinia nec leo at semper. Duis nisl odio, lacinia quis dui at, pretium tincidunt metus. Maecenas condimentum purus sit amet neque maximus tempor. Proin eros massa, ullamcorper eget rutrum eu, feugiat id purus.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="button secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row game-card">
                <div class="col-lg-12 col-xl-5 game-card-left">
                    <a href="#" class="js-video-button" data-video-id='DPBW_MFqeRs' data-channel="youtube"> <!-- Video link goes here -->
                        <div class="overlay">
                            <i class="fa fa-play fa-3x"></i>
                        </div>
                        <img src="{{asset('frontend/images/placeholder.jpg')}}" data-src="{{asset('frontend/images/game.jpg')}}" class="img-fluid b-lazy" alt="video thumbnail"> <!-- Video Thumbnail Img -->
                    </a>
                </div>
                <div class="col-lg-12 col-xl-7 game-card-right">
                    <h2 class="short-hr-left">Darts</h2>
                    <p class="game-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis rhoncus nibh. Phasellus dignissim luctus consectetur. Fusce viverra est non purus ultrices, vel molestie massa tincidunt. <span class="expand colored strong" data-toggle="modal" data-target="#game1">Read More</span></p>
                </div>
                <!-- Modal -->
                <div class="modal fade game-modal" id="game1" tabindex="-1" role="dialog" aria-labelledby="scales" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title" id="scales">SWORDS &amp; SCALES</h1>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h2 class="short-hr-left">TEAM UP AND FIGHT DRAGONS</h2>
                                <p>Integer eget diam felis. Quisque et aliquet lectus, et lacinia turpis. Praesent eget pretium orci. Sed vestibulum rutrum volutpat. Curabitur feugiat arcu odio, quis convallis eros laoreet ac.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">MAKE FRIENDS</h2>
                                <p>Suspendisse ultricies, dui vitae convallis blandit, ipsum sem mattis diam, in egestas arcu lacus sed lectus. Donec at interdum tellus. Quisque pellentesque a felis et rutrum. Donec condimentum magna sit amet viverra convallis. Fusce accumsan efficitur orci a commodo.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">TRAIN YOUR DRAGON</h2>
                                <p>Mauris at sapien nibh. Integer id tellus vitae ante cursus pharetra. Vestibulum ultrices eleifend enim, quis maximus nibh dapibus in. Phasellus lacinia nec leo at semper. Duis nisl odio, lacinia quis dui at, pretium tincidunt metus. Maecenas condimentum purus sit amet neque maximus tempor. Proin eros massa, ullamcorper eget rutrum eu, feugiat id purus.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="button secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row game-card">
                <div class="col-lg-12 col-xl-5 game-card-left">
                    <a href="#" class="js-video-button" data-video-id='DPBW_MFqeRs' data-channel="youtube"> <!-- Video link goes here -->
                        <div class="overlay">
                            <i class="fa fa-play fa-3x"></i>
                        </div>
                        <img src="{{asset('frontend/images/placeholder.jpg')}}" data-src="{{asset('frontend/images/game.jpg')}}" class="img-fluid b-lazy" alt="video thumbnail"> <!-- Video Thumbnail Img -->
                    </a>
                </div>
                <div class="col-lg-12 col-xl-7 game-card-right">
                    <h2 class="short-hr-left">Battleground</h2>
                    <p class="game-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis rhoncus nibh. Phasellus dignissim luctus consectetur. Fusce viverra est non purus ultrices, vel molestie massa tincidunt. <span class="expand colored strong" data-toggle="modal" data-target="#game1">Read More</span></p>
                </div>
                <!-- Modal -->
                <div class="modal fade game-modal" id="game1" tabindex="-1" role="dialog" aria-labelledby="scales" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title" id="scales">SWORDS &amp; SCALES</h1>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h2 class="short-hr-left">TEAM UP AND FIGHT DRAGONS</h2>
                                <p>Integer eget diam felis. Quisque et aliquet lectus, et lacinia turpis. Praesent eget pretium orci. Sed vestibulum rutrum volutpat. Curabitur feugiat arcu odio, quis convallis eros laoreet ac.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">MAKE FRIENDS</h2>
                                <p>Suspendisse ultricies, dui vitae convallis blandit, ipsum sem mattis diam, in egestas arcu lacus sed lectus. Donec at interdum tellus. Quisque pellentesque a felis et rutrum. Donec condimentum magna sit amet viverra convallis. Fusce accumsan efficitur orci a commodo.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">TRAIN YOUR DRAGON</h2>
                                <p>Mauris at sapien nibh. Integer id tellus vitae ante cursus pharetra. Vestibulum ultrices eleifend enim, quis maximus nibh dapibus in. Phasellus lacinia nec leo at semper. Duis nisl odio, lacinia quis dui at, pretium tincidunt metus. Maecenas condimentum purus sit amet neque maximus tempor. Proin eros massa, ullamcorper eget rutrum eu, feugiat id purus.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="button secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="row game-card">
                <div class="col-lg-12 col-xl-5 game-card-left">
                    <a href="#" class="js-video-button" data-video-id='DPBW_MFqeRs' data-channel="youtube"> <!-- Video link goes here -->
                        <div class="overlay">
                            <i class="fa fa-play fa-3x"></i>
                        </div>
                        <img src="{{asset('frontend/images/placeholder.jpg')}}" data-src="{{asset('frontend/images/game.jpg')}}" class="img-fluid b-lazy" alt="video thumbnail"> <!-- Video Thumbnail Img -->
                    </a>
                </div>
                <div class="col-lg-12 col-xl-7 game-card-right">
                    <h2 class="short-hr-left">Bowling</h2>
                    <p class="game-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis rhoncus nibh. Phasellus dignissim luctus consectetur. Fusce viverra est non purus ultrices, vel molestie massa tincidunt. <span class="expand colored strong" data-toggle="modal" data-target="#game1">Read More</span></p>
                </div>
                <!-- Modal -->
                <div class="modal fade game-modal" id="game1" tabindex="-1" role="dialog" aria-labelledby="scales" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title" id="scales">SWORDS &amp; SCALES</h1>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h2 class="short-hr-left">TEAM UP AND FIGHT DRAGONS</h2>
                                <p>Integer eget diam felis. Quisque et aliquet lectus, et lacinia turpis. Praesent eget pretium orci. Sed vestibulum rutrum volutpat. Curabitur feugiat arcu odio, quis convallis eros laoreet ac.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">MAKE FRIENDS</h2>
                                <p>Suspendisse ultricies, dui vitae convallis blandit, ipsum sem mattis diam, in egestas arcu lacus sed lectus. Donec at interdum tellus. Quisque pellentesque a felis et rutrum. Donec condimentum magna sit amet viverra convallis. Fusce accumsan efficitur orci a commodo.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">TRAIN YOUR DRAGON</h2>
                                <p>Mauris at sapien nibh. Integer id tellus vitae ante cursus pharetra. Vestibulum ultrices eleifend enim, quis maximus nibh dapibus in. Phasellus lacinia nec leo at semper. Duis nisl odio, lacinia quis dui at, pretium tincidunt metus. Maecenas condimentum purus sit amet neque maximus tempor. Proin eros massa, ullamcorper eget rutrum eu, feugiat id purus.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="button secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row game-card">
                <div class="col-lg-12 col-xl-5 game-card-left">
                    <a href="#" class="js-video-button" data-video-id='DPBW_MFqeRs' data-channel="youtube"> <!-- Video link goes here -->
                        <div class="overlay">
                            <i class="fa fa-play fa-3x"></i>
                        </div>
                        <img src="{{asset('frontend/images/placeholder.jpg')}}" data-src="{{asset('frontend/images/game.jpg')}}" class="img-fluid b-lazy" alt="video thumbnail"> <!-- Video Thumbnail Img -->
                    </a>
                </div>
                <div class="col-lg-12 col-xl-7 game-card-right">
                    <h2 class="short-hr-left">Tennis Go</h2>
                    <p class="game-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis rhoncus nibh. Phasellus dignissim luctus consectetur. Fusce viverra est non purus ultrices, vel molestie massa tincidunt. <span class="expand colored strong" data-toggle="modal" data-target="#game1">Read More</span></p>
                </div>
                <!-- Modal -->
                <div class="modal fade game-modal" id="game1" tabindex="-1" role="dialog" aria-labelledby="scales" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title" id="scales">SWORDS &amp; SCALES</h1>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h2 class="short-hr-left">TEAM UP AND FIGHT DRAGONS</h2>
                                <p>Integer eget diam felis. Quisque et aliquet lectus, et lacinia turpis. Praesent eget pretium orci. Sed vestibulum rutrum volutpat. Curabitur feugiat arcu odio, quis convallis eros laoreet ac.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">MAKE FRIENDS</h2>
                                <p>Suspendisse ultricies, dui vitae convallis blandit, ipsum sem mattis diam, in egestas arcu lacus sed lectus. Donec at interdum tellus. Quisque pellentesque a felis et rutrum. Donec condimentum magna sit amet viverra convallis. Fusce accumsan efficitur orci a commodo.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">TRAIN YOUR DRAGON</h2>
                                <p>Mauris at sapien nibh. Integer id tellus vitae ante cursus pharetra. Vestibulum ultrices eleifend enim, quis maximus nibh dapibus in. Phasellus lacinia nec leo at semper. Duis nisl odio, lacinia quis dui at, pretium tincidunt metus. Maecenas condimentum purus sit amet neque maximus tempor. Proin eros massa, ullamcorper eget rutrum eu, feugiat id purus.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="button secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row game-card">
                <div class="col-lg-12 col-xl-5 game-card-left">
                    <a href="#" class="js-video-button" data-video-id='DPBW_MFqeRs' data-channel="youtube"> <!-- Video link goes here -->
                        <div class="overlay">
                            <i class="fa fa-play fa-3x"></i>
                        </div>
                        <img src="{{asset('frontend/images/placeholder.jpg')}}" data-src="{{asset('frontend/images/game.jpg')}}" class="img-fluid b-lazy" alt="video thumbnail"> <!-- Video Thumbnail Img -->
                    </a>
                </div>
                <div class="col-lg-12 col-xl-7 game-card-right">
                    <h2 class="short-hr-left">Hidden</h2>
                    <p class="game-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis rhoncus nibh. Phasellus dignissim luctus consectetur. Fusce viverra est non purus ultrices, vel molestie massa tincidunt. <span class="expand colored strong" data-toggle="modal" data-target="#game1">Read More</span></p>
                </div>
                <!-- Modal -->
                <div class="modal fade game-modal" id="game1" tabindex="-1" role="dialog" aria-labelledby="scales" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title" id="scales">SWORDS &amp; SCALES</h1>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h2 class="short-hr-left">TEAM UP AND FIGHT DRAGONS</h2>
                                <p>Integer eget diam felis. Quisque et aliquet lectus, et lacinia turpis. Praesent eget pretium orci. Sed vestibulum rutrum volutpat. Curabitur feugiat arcu odio, quis convallis eros laoreet ac.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">MAKE FRIENDS</h2>
                                <p>Suspendisse ultricies, dui vitae convallis blandit, ipsum sem mattis diam, in egestas arcu lacus sed lectus. Donec at interdum tellus. Quisque pellentesque a felis et rutrum. Donec condimentum magna sit amet viverra convallis. Fusce accumsan efficitur orci a commodo.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">TRAIN YOUR DRAGON</h2>
                                <p>Mauris at sapien nibh. Integer id tellus vitae ante cursus pharetra. Vestibulum ultrices eleifend enim, quis maximus nibh dapibus in. Phasellus lacinia nec leo at semper. Duis nisl odio, lacinia quis dui at, pretium tincidunt metus. Maecenas condimentum purus sit amet neque maximus tempor. Proin eros massa, ullamcorper eget rutrum eu, feugiat id purus.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="button secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row game-card">
                <div class="col-lg-12 col-xl-5 game-card-left">
                    <a href="#" class="js-video-button" data-video-id='DPBW_MFqeRs' data-channel="youtube"> <!-- Video link goes here -->
                        <div class="overlay">
                            <i class="fa fa-play fa-3x"></i>
                        </div>
                        <img src="{{asset('frontend/images/placeholder.jpg')}}" data-src="{{asset('frontend/images/game.jpg')}}" class="img-fluid b-lazy" alt="video thumbnail"> <!-- Video Thumbnail Img -->
                    </a>
                </div>
                <div class="col-lg-12 col-xl-7 game-card-right">
                    <h2 class="short-hr-left">Neverlast</h2>
                    <p class="game-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis rhoncus nibh. Phasellus dignissim luctus consectetur. Fusce viverra est non purus ultrices, vel molestie massa tincidunt. <span class="expand colored strong" data-toggle="modal" data-target="#game1">Read More</span></p>
                </div>
                <!-- Modal -->
                <div class="modal fade game-modal" id="game1" tabindex="-1" role="dialog" aria-labelledby="scales" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title" id="scales">SWORDS &amp; SCALES</h1>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h2 class="short-hr-left">TEAM UP AND FIGHT DRAGONS</h2>
                                <p>Integer eget diam felis. Quisque et aliquet lectus, et lacinia turpis. Praesent eget pretium orci. Sed vestibulum rutrum volutpat. Curabitur feugiat arcu odio, quis convallis eros laoreet ac.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">MAKE FRIENDS</h2>
                                <p>Suspendisse ultricies, dui vitae convallis blandit, ipsum sem mattis diam, in egestas arcu lacus sed lectus. Donec at interdum tellus. Quisque pellentesque a felis et rutrum. Donec condimentum magna sit amet viverra convallis. Fusce accumsan efficitur orci a commodo.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">TRAIN YOUR DRAGON</h2>
                                <p>Mauris at sapien nibh. Integer id tellus vitae ante cursus pharetra. Vestibulum ultrices eleifend enim, quis maximus nibh dapibus in. Phasellus lacinia nec leo at semper. Duis nisl odio, lacinia quis dui at, pretium tincidunt metus. Maecenas condimentum purus sit amet neque maximus tempor. Proin eros massa, ullamcorper eget rutrum eu, feugiat id purus.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="button secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row game-card">
                <div class="col-lg-12 col-xl-5 game-card-left">
                    <a href="#" class="js-video-button" data-video-id='DPBW_MFqeRs' data-channel="youtube"> <!-- Video link goes here -->
                        <div class="overlay">
                            <i class="fa fa-play fa-3x"></i>
                        </div>
                        <img src="{{asset('frontend/images/placeholder.jpg')}}" data-src="{{asset('frontend/images/game.jpg')}}" class="img-fluid b-lazy" alt="video thumbnail"> <!-- Video Thumbnail Img -->
                    </a>
                </div>
                <div class="col-lg-12 col-xl-7 game-card-right">
                    <h2 class="short-hr-left">Party Trivia</h2>
                    <p class="game-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis rhoncus nibh. Phasellus dignissim luctus consectetur. Fusce viverra est non purus ultrices, vel molestie massa tincidunt. <span class="expand colored strong" data-toggle="modal" data-target="#game1">Read More</span></p>
                </div>
                <!-- Modal -->
                <div class="modal fade game-modal" id="game1" tabindex="-1" role="dialog" aria-labelledby="scales" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title" id="scales">SWORDS &amp; SCALES</h1>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h2 class="short-hr-left">TEAM UP AND FIGHT DRAGONS</h2>
                                <p>Integer eget diam felis. Quisque et aliquet lectus, et lacinia turpis. Praesent eget pretium orci. Sed vestibulum rutrum volutpat. Curabitur feugiat arcu odio, quis convallis eros laoreet ac.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">MAKE FRIENDS</h2>
                                <p>Suspendisse ultricies, dui vitae convallis blandit, ipsum sem mattis diam, in egestas arcu lacus sed lectus. Donec at interdum tellus. Quisque pellentesque a felis et rutrum. Donec condimentum magna sit amet viverra convallis. Fusce accumsan efficitur orci a commodo.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">TRAIN YOUR DRAGON</h2>
                                <p>Mauris at sapien nibh. Integer id tellus vitae ante cursus pharetra. Vestibulum ultrices eleifend enim, quis maximus nibh dapibus in. Phasellus lacinia nec leo at semper. Duis nisl odio, lacinia quis dui at, pretium tincidunt metus. Maecenas condimentum purus sit amet neque maximus tempor. Proin eros massa, ullamcorper eget rutrum eu, feugiat id purus.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="button secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row game-card">
                <div class="col-lg-12 col-xl-5 game-card-left">
                    <a href="#" class="js-video-button" data-video-id='DPBW_MFqeRs' data-channel="youtube"> <!-- Video link goes here -->
                        <div class="overlay">
                            <i class="fa fa-play fa-3x"></i>
                        </div>
                        <img src="{{asset('frontend/images/placeholder.jpg')}}" data-src="{{asset('frontend/images/game.jpg')}}" class="img-fluid b-lazy" alt="video thumbnail"> <!-- Video Thumbnail Img -->
                    </a>
                </div>
                <div class="col-lg-12 col-xl-7 game-card-right">
                    <h2 class="short-hr-left">Robox</h2>
                    <p class="game-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis rhoncus nibh. Phasellus dignissim luctus consectetur. Fusce viverra est non purus ultrices, vel molestie massa tincidunt. <span class="expand colored strong" data-toggle="modal" data-target="#game1">Read More</span></p>
                </div>
                <!-- Modal -->
                <div class="modal fade game-modal" id="game1" tabindex="-1" role="dialog" aria-labelledby="scales" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title" id="scales">SWORDS &amp; SCALES</h1>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h2 class="short-hr-left">TEAM UP AND FIGHT DRAGONS</h2>
                                <p>Integer eget diam felis. Quisque et aliquet lectus, et lacinia turpis. Praesent eget pretium orci. Sed vestibulum rutrum volutpat. Curabitur feugiat arcu odio, quis convallis eros laoreet ac.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">MAKE FRIENDS</h2>
                                <p>Suspendisse ultricies, dui vitae convallis blandit, ipsum sem mattis diam, in egestas arcu lacus sed lectus. Donec at interdum tellus. Quisque pellentesque a felis et rutrum. Donec condimentum magna sit amet viverra convallis. Fusce accumsan efficitur orci a commodo.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">TRAIN YOUR DRAGON</h2>
                                <p>Mauris at sapien nibh. Integer id tellus vitae ante cursus pharetra. Vestibulum ultrices eleifend enim, quis maximus nibh dapibus in. Phasellus lacinia nec leo at semper. Duis nisl odio, lacinia quis dui at, pretium tincidunt metus. Maecenas condimentum purus sit amet neque maximus tempor. Proin eros massa, ullamcorper eget rutrum eu, feugiat id purus.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="button secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="row game-card">
                <div class="col-lg-12 col-xl-5 game-card-left">
                    <a href="#" class="js-video-button" data-video-id='DPBW_MFqeRs' data-channel="youtube"> <!-- Video link goes here -->
                        <div class="overlay">
                            <i class="fa fa-play fa-3x"></i>
                        </div>
                        <img src="{{asset('frontend/images/placeholder.jpg')}}" data-src="{{asset('frontend/images/game.jpg')}}" class="img-fluid b-lazy" alt="video thumbnail"> <!-- Video Thumbnail Img -->
                    </a>
                </div>
                <div class="col-lg-12 col-xl-7 game-card-right">
                    <h2 class="short-hr-left">Slots</h2>
                    <p class="game-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis rhoncus nibh. Phasellus dignissim luctus consectetur. Fusce viverra est non purus ultrices, vel molestie massa tincidunt. <span class="expand colored strong" data-toggle="modal" data-target="#game1">Read More</span></p>
                </div>
                <!-- Modal -->
                <div class="modal fade game-modal" id="game1" tabindex="-1" role="dialog" aria-labelledby="scales" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title" id="scales">SWORDS &amp; SCALES</h1>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h2 class="short-hr-left">TEAM UP AND FIGHT DRAGONS</h2>
                                <p>Integer eget diam felis. Quisque et aliquet lectus, et lacinia turpis. Praesent eget pretium orci. Sed vestibulum rutrum volutpat. Curabitur feugiat arcu odio, quis convallis eros laoreet ac.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">MAKE FRIENDS</h2>
                                <p>Suspendisse ultricies, dui vitae convallis blandit, ipsum sem mattis diam, in egestas arcu lacus sed lectus. Donec at interdum tellus. Quisque pellentesque a felis et rutrum. Donec condimentum magna sit amet viverra convallis. Fusce accumsan efficitur orci a commodo.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">TRAIN YOUR DRAGON</h2>
                                <p>Mauris at sapien nibh. Integer id tellus vitae ante cursus pharetra. Vestibulum ultrices eleifend enim, quis maximus nibh dapibus in. Phasellus lacinia nec leo at semper. Duis nisl odio, lacinia quis dui at, pretium tincidunt metus. Maecenas condimentum purus sit amet neque maximus tempor. Proin eros massa, ullamcorper eget rutrum eu, feugiat id purus.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="button secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row game-card">
                <div class="col-lg-12 col-xl-5 game-card-left">
                    <a href="#" class="js-video-button" data-video-id='DPBW_MFqeRs' data-channel="youtube"> <!-- Video link goes here -->
                        <div class="overlay">
                            <i class="fa fa-play fa-3x"></i>
                        </div>
                        <img src="{{asset('frontend/images/placeholder.jpg')}}" data-src="{{asset('frontend/images/game.jpg')}}" class="img-fluid b-lazy" alt="video thumbnail"> <!-- Video Thumbnail Img -->
                    </a>
                </div>
                <div class="col-lg-12 col-xl-7 game-card-right">
                    <h2 class="short-hr-left">Monkey Business</h2>
                    <p class="game-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis rhoncus nibh. Phasellus dignissim luctus consectetur. Fusce viverra est non purus ultrices, vel molestie massa tincidunt. <span class="expand colored strong" data-toggle="modal" data-target="#game1">Read More</span></p>
                </div>
                <!-- Modal -->
                <div class="modal fade game-modal" id="game1" tabindex="-1" role="dialog" aria-labelledby="scales" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title" id="scales">SWORDS &amp; SCALES</h1>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h2 class="short-hr-left">TEAM UP AND FIGHT DRAGONS</h2>
                                <p>Integer eget diam felis. Quisque et aliquet lectus, et lacinia turpis. Praesent eget pretium orci. Sed vestibulum rutrum volutpat. Curabitur feugiat arcu odio, quis convallis eros laoreet ac.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">MAKE FRIENDS</h2>
                                <p>Suspendisse ultricies, dui vitae convallis blandit, ipsum sem mattis diam, in egestas arcu lacus sed lectus. Donec at interdum tellus. Quisque pellentesque a felis et rutrum. Donec condimentum magna sit amet viverra convallis. Fusce accumsan efficitur orci a commodo.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">TRAIN YOUR DRAGON</h2>
                                <p>Mauris at sapien nibh. Integer id tellus vitae ante cursus pharetra. Vestibulum ultrices eleifend enim, quis maximus nibh dapibus in. Phasellus lacinia nec leo at semper. Duis nisl odio, lacinia quis dui at, pretium tincidunt metus. Maecenas condimentum purus sit amet neque maximus tempor. Proin eros massa, ullamcorper eget rutrum eu, feugiat id purus.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="button secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row game-card">
                <div class="col-lg-12 col-xl-5 game-card-left">
                    <a href="#" class="js-video-button" data-video-id='DPBW_MFqeRs' data-channel="youtube"> <!-- Video link goes here -->
                        <div class="overlay">
                            <i class="fa fa-play fa-3x"></i>
                        </div>
                        <img src="{{asset('frontend/images/placeholder.jpg')}}" data-src="{{asset('frontend/images/game.jpg')}}" class="img-fluid b-lazy" alt="video thumbnail"> <!-- Video Thumbnail Img -->
                    </a>
                </div>
                <div class="col-lg-12 col-xl-7 game-card-right">
                    <h2 class="short-hr-left">Boxer</h2>
                    <p class="game-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis rhoncus nibh. Phasellus dignissim luctus consectetur. Fusce viverra est non purus ultrices, vel molestie massa tincidunt. <span class="expand colored strong" data-toggle="modal" data-target="#game1">Read More</span></p>
                </div>
                <!-- Modal -->
                <div class="modal fade game-modal" id="game1" tabindex="-1" role="dialog" aria-labelledby="scales" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title" id="scales">SWORDS &amp; SCALES</h1>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h2 class="short-hr-left">TEAM UP AND FIGHT DRAGONS</h2>
                                <p>Integer eget diam felis. Quisque et aliquet lectus, et lacinia turpis. Praesent eget pretium orci. Sed vestibulum rutrum volutpat. Curabitur feugiat arcu odio, quis convallis eros laoreet ac.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">MAKE FRIENDS</h2>
                                <p>Suspendisse ultricies, dui vitae convallis blandit, ipsum sem mattis diam, in egestas arcu lacus sed lectus. Donec at interdum tellus. Quisque pellentesque a felis et rutrum. Donec condimentum magna sit amet viverra convallis. Fusce accumsan efficitur orci a commodo.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">TRAIN YOUR DRAGON</h2>
                                <p>Mauris at sapien nibh. Integer id tellus vitae ante cursus pharetra. Vestibulum ultrices eleifend enim, quis maximus nibh dapibus in. Phasellus lacinia nec leo at semper. Duis nisl odio, lacinia quis dui at, pretium tincidunt metus. Maecenas condimentum purus sit amet neque maximus tempor. Proin eros massa, ullamcorper eget rutrum eu, feugiat id purus.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="button secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row game-card">
                <div class="col-lg-12 col-xl-5 game-card-left">
                    <a href="#" class="js-video-button" data-video-id='DPBW_MFqeRs' data-channel="youtube"> <!-- Video link goes here -->
                        <div class="overlay">
                            <i class="fa fa-play fa-3x"></i>
                        </div>
                        <img src="{{asset('frontend/images/placeholder.jpg')}}" data-src="{{asset('frontend/images/game.jpg')}}" class="img-fluid b-lazy" alt="video thumbnail"> <!-- Video Thumbnail Img -->
                    </a>
                </div>
                <div class="col-lg-12 col-xl-7 game-card-right">
                    <h2 class="short-hr-left">Pool</h2>
                    <p class="game-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis rhoncus nibh. Phasellus dignissim luctus consectetur. Fusce viverra est non purus ultrices, vel molestie massa tincidunt. <span class="expand colored strong" data-toggle="modal" data-target="#game1">Read More</span></p>
                </div>
                <!-- Modal -->
                <div class="modal fade game-modal" id="game1" tabindex="-1" role="dialog" aria-labelledby="scales" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title" id="scales">SWORDS &amp; SCALES</h1>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h2 class="short-hr-left">TEAM UP AND FIGHT DRAGONS</h2>
                                <p>Integer eget diam felis. Quisque et aliquet lectus, et lacinia turpis. Praesent eget pretium orci. Sed vestibulum rutrum volutpat. Curabitur feugiat arcu odio, quis convallis eros laoreet ac.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">MAKE FRIENDS</h2>
                                <p>Suspendisse ultricies, dui vitae convallis blandit, ipsum sem mattis diam, in egestas arcu lacus sed lectus. Donec at interdum tellus. Quisque pellentesque a felis et rutrum. Donec condimentum magna sit amet viverra convallis. Fusce accumsan efficitur orci a commodo.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">TRAIN YOUR DRAGON</h2>
                                <p>Mauris at sapien nibh. Integer id tellus vitae ante cursus pharetra. Vestibulum ultrices eleifend enim, quis maximus nibh dapibus in. Phasellus lacinia nec leo at semper. Duis nisl odio, lacinia quis dui at, pretium tincidunt metus. Maecenas condimentum purus sit amet neque maximus tempor. Proin eros massa, ullamcorper eget rutrum eu, feugiat id purus.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="button secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row game-card">
                <div class="col-lg-12 col-xl-5 game-card-left">
                    <a href="#" class="js-video-button" data-video-id='DPBW_MFqeRs' data-channel="youtube"> <!-- Video link goes here -->
                        <div class="overlay">
                            <i class="fa fa-play fa-3x"></i>
                        </div>
                        <img src="{{asset('frontend/images/placeholder.jpg')}}" data-src="{{asset('frontend/images/game.jpg')}}" class="img-fluid b-lazy" alt="video thumbnail"> <!-- Video Thumbnail Img -->
                    </a>
                </div>
                <div class="col-lg-12 col-xl-7 game-card-right">
                    <h2 class="short-hr-left">Basket Ball</h2>
                    <p class="game-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis rhoncus nibh. Phasellus dignissim luctus consectetur. Fusce viverra est non purus ultrices, vel molestie massa tincidunt. <span class="expand colored strong" data-toggle="modal" data-target="#game1">Read More</span></p>
                </div>
                <!-- Modal -->
                <div class="modal fade game-modal" id="game1" tabindex="-1" role="dialog" aria-labelledby="scales" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title" id="scales">SWORDS &amp; SCALES</h1>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h2 class="short-hr-left">TEAM UP AND FIGHT DRAGONS</h2>
                                <p>Integer eget diam felis. Quisque et aliquet lectus, et lacinia turpis. Praesent eget pretium orci. Sed vestibulum rutrum volutpat. Curabitur feugiat arcu odio, quis convallis eros laoreet ac.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">MAKE FRIENDS</h2>
                                <p>Suspendisse ultricies, dui vitae convallis blandit, ipsum sem mattis diam, in egestas arcu lacus sed lectus. Donec at interdum tellus. Quisque pellentesque a felis et rutrum. Donec condimentum magna sit amet viverra convallis. Fusce accumsan efficitur orci a commodo.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">TRAIN YOUR DRAGON</h2>
                                <p>Mauris at sapien nibh. Integer id tellus vitae ante cursus pharetra. Vestibulum ultrices eleifend enim, quis maximus nibh dapibus in. Phasellus lacinia nec leo at semper. Duis nisl odio, lacinia quis dui at, pretium tincidunt metus. Maecenas condimentum purus sit amet neque maximus tempor. Proin eros massa, ullamcorper eget rutrum eu, feugiat id purus.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="button secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row game-card">
                <div class="col-lg-12 col-xl-5 game-card-left">
                    <a href="#" class="js-video-button" data-video-id='DPBW_MFqeRs' data-channel="youtube"> <!-- Video link goes here -->
                        <div class="overlay">
                            <i class="fa fa-play fa-3x"></i>
                        </div>
                        <img src="{{asset('frontend/images/placeholder.jpg')}}" data-src="{{asset('frontend/images/game.jpg')}}" class="img-fluid b-lazy" alt="video thumbnail"> <!-- Video Thumbnail Img -->
                    </a>
                </div>
                <div class="col-lg-12 col-xl-7 game-card-right">
                    <h2 class="short-hr-left">Air Hockey</h2>
                    <p class="game-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis rhoncus nibh. Phasellus dignissim luctus consectetur. Fusce viverra est non purus ultrices, vel molestie massa tincidunt. <span class="expand colored strong" data-toggle="modal" data-target="#game1">Read More</span></p>
                </div>
                <!-- Modal -->
                <div class="modal fade game-modal" id="game1" tabindex="-1" role="dialog" aria-labelledby="scales" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title" id="scales">SWORDS &amp; SCALES</h1>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h2 class="short-hr-left">TEAM UP AND FIGHT DRAGONS</h2>
                                <p>Integer eget diam felis. Quisque et aliquet lectus, et lacinia turpis. Praesent eget pretium orci. Sed vestibulum rutrum volutpat. Curabitur feugiat arcu odio, quis convallis eros laoreet ac.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">MAKE FRIENDS</h2>
                                <p>Suspendisse ultricies, dui vitae convallis blandit, ipsum sem mattis diam, in egestas arcu lacus sed lectus. Donec at interdum tellus. Quisque pellentesque a felis et rutrum. Donec condimentum magna sit amet viverra convallis. Fusce accumsan efficitur orci a commodo.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">TRAIN YOUR DRAGON</h2>
                                <p>Mauris at sapien nibh. Integer id tellus vitae ante cursus pharetra. Vestibulum ultrices eleifend enim, quis maximus nibh dapibus in. Phasellus lacinia nec leo at semper. Duis nisl odio, lacinia quis dui at, pretium tincidunt metus. Maecenas condimentum purus sit amet neque maximus tempor. Proin eros massa, ullamcorper eget rutrum eu, feugiat id purus.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="button secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row game-card">
                <div class="col-lg-12 col-xl-5 game-card-left">
                    <a href="#" class="js-video-button" data-video-id='DPBW_MFqeRs' data-channel="youtube"> <!-- Video link goes here -->
                        <div class="overlay">
                            <i class="fa fa-play fa-3x"></i>
                        </div>
                        <img src="{{asset('frontend/images/placeholder.jpg')}}" data-src="{{asset('frontend/images/game.jpg')}}" class="img-fluid b-lazy" alt="video thumbnail"> <!-- Video Thumbnail Img -->
                    </a>
                </div>
                <div class="col-lg-12 col-xl-7 game-card-right">
                    <h2 class="short-hr-left">Teddy Gangs</h2>
                    <p class="game-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis rhoncus nibh. Phasellus dignissim luctus consectetur. Fusce viverra est non purus ultrices, vel molestie massa tincidunt. <span class="expand colored strong" data-toggle="modal" data-target="#game1">Read More</span></p>
                </div>
                <!-- Modal -->
                <div class="modal fade game-modal" id="game1" tabindex="-1" role="dialog" aria-labelledby="scales" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title" id="scales">SWORDS &amp; SCALES</h1>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h2 class="short-hr-left">TEAM UP AND FIGHT DRAGONS</h2>
                                <p>Integer eget diam felis. Quisque et aliquet lectus, et lacinia turpis. Praesent eget pretium orci. Sed vestibulum rutrum volutpat. Curabitur feugiat arcu odio, quis convallis eros laoreet ac.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">MAKE FRIENDS</h2>
                                <p>Suspendisse ultricies, dui vitae convallis blandit, ipsum sem mattis diam, in egestas arcu lacus sed lectus. Donec at interdum tellus. Quisque pellentesque a felis et rutrum. Donec condimentum magna sit amet viverra convallis. Fusce accumsan efficitur orci a commodo.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">TRAIN YOUR DRAGON</h2>
                                <p>Mauris at sapien nibh. Integer id tellus vitae ante cursus pharetra. Vestibulum ultrices eleifend enim, quis maximus nibh dapibus in. Phasellus lacinia nec leo at semper. Duis nisl odio, lacinia quis dui at, pretium tincidunt metus. Maecenas condimentum purus sit amet neque maximus tempor. Proin eros massa, ullamcorper eget rutrum eu, feugiat id purus.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="button secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row game-card">
                <div class="col-lg-12 col-xl-5 game-card-left">
                    <a href="#" class="js-video-button" data-video-id='DPBW_MFqeRs' data-channel="youtube"> <!-- Video link goes here -->
                        <div class="overlay">
                            <i class="fa fa-play fa-3x"></i>
                        </div>
                        <img src="{{asset('frontend/images/placeholder.jpg')}}" data-src="{{asset('frontend/images/game.jpg')}}" class="img-fluid b-lazy" alt="video thumbnail"> <!-- Video Thumbnail Img -->
                    </a>
                </div>
                <div class="col-lg-12 col-xl-7 game-card-right">
                    <h2 class="short-hr-left">Car Mayhem</h2>
                    <p class="game-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis rhoncus nibh. Phasellus dignissim luctus consectetur. Fusce viverra est non purus ultrices, vel molestie massa tincidunt. <span class="expand colored strong" data-toggle="modal" data-target="#game1">Read More</span></p>
                </div>
                <!-- Modal -->
                <div class="modal fade game-modal" id="game1" tabindex="-1" role="dialog" aria-labelledby="scales" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title" id="scales">SWORDS &amp; SCALES</h1>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h2 class="short-hr-left">TEAM UP AND FIGHT DRAGONS</h2>
                                <p>Integer eget diam felis. Quisque et aliquet lectus, et lacinia turpis. Praesent eget pretium orci. Sed vestibulum rutrum volutpat. Curabitur feugiat arcu odio, quis convallis eros laoreet ac.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">MAKE FRIENDS</h2>
                                <p>Suspendisse ultricies, dui vitae convallis blandit, ipsum sem mattis diam, in egestas arcu lacus sed lectus. Donec at interdum tellus. Quisque pellentesque a felis et rutrum. Donec condimentum magna sit amet viverra convallis. Fusce accumsan efficitur orci a commodo.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">TRAIN YOUR DRAGON</h2>
                                <p>Mauris at sapien nibh. Integer id tellus vitae ante cursus pharetra. Vestibulum ultrices eleifend enim, quis maximus nibh dapibus in. Phasellus lacinia nec leo at semper. Duis nisl odio, lacinia quis dui at, pretium tincidunt metus. Maecenas condimentum purus sit amet neque maximus tempor. Proin eros massa, ullamcorper eget rutrum eu, feugiat id purus.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="button secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row game-card">
                <div class="col-lg-12 col-xl-5 game-card-left">
                    <a href="#" class="js-video-button" data-video-id='DPBW_MFqeRs' data-channel="youtube"> <!-- Video link goes here -->
                        <div class="overlay">
                            <i class="fa fa-play fa-3x"></i>
                        </div>
                        <img src="{{asset('frontend/images/placeholder.jpg')}}" data-src="{{asset('frontend/images/game.jpg')}}" class="img-fluid b-lazy" alt="video thumbnail"> <!-- Video Thumbnail Img -->
                    </a>
                </div>
                <div class="col-lg-12 col-xl-7 game-card-right">
                    <h2 class="short-hr-left">World soccer</h2>
                    <p class="game-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis rhoncus nibh. Phasellus dignissim luctus consectetur. Fusce viverra est non purus ultrices, vel molestie massa tincidunt. <span class="expand colored strong" data-toggle="modal" data-target="#game1">Read More</span></p>
                </div>
                <!-- Modal -->
                <div class="modal fade game-modal" id="game1" tabindex="-1" role="dialog" aria-labelledby="scales" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title" id="scales">SWORDS &amp; SCALES</h1>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h2 class="short-hr-left">TEAM UP AND FIGHT DRAGONS</h2>
                                <p>Integer eget diam felis. Quisque et aliquet lectus, et lacinia turpis. Praesent eget pretium orci. Sed vestibulum rutrum volutpat. Curabitur feugiat arcu odio, quis convallis eros laoreet ac.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">MAKE FRIENDS</h2>
                                <p>Suspendisse ultricies, dui vitae convallis blandit, ipsum sem mattis diam, in egestas arcu lacus sed lectus. Donec at interdum tellus. Quisque pellentesque a felis et rutrum. Donec condimentum magna sit amet viverra convallis. Fusce accumsan efficitur orci a commodo.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">TRAIN YOUR DRAGON</h2>
                                <p>Mauris at sapien nibh. Integer id tellus vitae ante cursus pharetra. Vestibulum ultrices eleifend enim, quis maximus nibh dapibus in. Phasellus lacinia nec leo at semper. Duis nisl odio, lacinia quis dui at, pretium tincidunt metus. Maecenas condimentum purus sit amet neque maximus tempor. Proin eros massa, ullamcorper eget rutrum eu, feugiat id purus.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="button secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row game-card">
                <div class="col-lg-12 col-xl-5 game-card-left">
                    <a href="#" class="js-video-button" data-video-id='DPBW_MFqeRs' data-channel="youtube"> <!-- Video link goes here -->
                        <div class="overlay">
                            <i class="fa fa-play fa-3x"></i>
                        </div>
                        <img src="{{asset('frontend/images/placeholder.jpg')}}" data-src="{{asset('frontend/images/game.jpg')}}" class="img-fluid b-lazy" alt="video thumbnail"> <!-- Video Thumbnail Img -->
                    </a>
                </div>
                <div class="col-lg-12 col-xl-7 game-card-right">
                    <h2 class="short-hr-left">Sniper</h2>
                    <p class="game-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis rhoncus nibh. Phasellus dignissim luctus consectetur. Fusce viverra est non purus ultrices, vel molestie massa tincidunt. <span class="expand colored strong" data-toggle="modal" data-target="#game1">Read More</span></p>
                </div>
                <!-- Modal -->
                <div class="modal fade game-modal" id="game1" tabindex="-1" role="dialog" aria-labelledby="scales" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title" id="scales">SWORDS &amp; SCALES</h1>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h2 class="short-hr-left">TEAM UP AND FIGHT DRAGONS</h2>
                                <p>Integer eget diam felis. Quisque et aliquet lectus, et lacinia turpis. Praesent eget pretium orci. Sed vestibulum rutrum volutpat. Curabitur feugiat arcu odio, quis convallis eros laoreet ac.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">MAKE FRIENDS</h2>
                                <p>Suspendisse ultricies, dui vitae convallis blandit, ipsum sem mattis diam, in egestas arcu lacus sed lectus. Donec at interdum tellus. Quisque pellentesque a felis et rutrum. Donec condimentum magna sit amet viverra convallis. Fusce accumsan efficitur orci a commodo.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">TRAIN YOUR DRAGON</h2>
                                <p>Mauris at sapien nibh. Integer id tellus vitae ante cursus pharetra. Vestibulum ultrices eleifend enim, quis maximus nibh dapibus in. Phasellus lacinia nec leo at semper. Duis nisl odio, lacinia quis dui at, pretium tincidunt metus. Maecenas condimentum purus sit amet neque maximus tempor. Proin eros massa, ullamcorper eget rutrum eu, feugiat id purus.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="button secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row game-card">
                <div class="col-lg-12 col-xl-5 game-card-left">
                    <a href="#" class="js-video-button" data-video-id='DPBW_MFqeRs' data-channel="youtube"> <!-- Video link goes here -->
                        <div class="overlay">
                            <i class="fa fa-play fa-3x"></i>
                        </div>
                        <img src="{{asset('frontend/images/placeholder.jpg')}}" data-src="{{asset('frontend/images/game.jpg')}}" class="img-fluid b-lazy" alt="video thumbnail"> <!-- Video Thumbnail Img -->
                    </a>
                </div>
                <div class="col-lg-12 col-xl-7 game-card-right">
                    <h2 class="short-hr-left">Bubble</h2>
                    <p class="game-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis rhoncus nibh. Phasellus dignissim luctus consectetur. Fusce viverra est non purus ultrices, vel molestie massa tincidunt. <span class="expand colored strong" data-toggle="modal" data-target="#game1">Read More</span></p>
                </div>
                <!-- Modal -->
                <div class="modal fade game-modal" id="game1" tabindex="-1" role="dialog" aria-labelledby="scales" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title" id="scales">SWORDS &amp; SCALES</h1>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h2 class="short-hr-left">TEAM UP AND FIGHT DRAGONS</h2>
                                <p>Integer eget diam felis. Quisque et aliquet lectus, et lacinia turpis. Praesent eget pretium orci. Sed vestibulum rutrum volutpat. Curabitur feugiat arcu odio, quis convallis eros laoreet ac.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">MAKE FRIENDS</h2>
                                <p>Suspendisse ultricies, dui vitae convallis blandit, ipsum sem mattis diam, in egestas arcu lacus sed lectus. Donec at interdum tellus. Quisque pellentesque a felis et rutrum. Donec condimentum magna sit amet viverra convallis. Fusce accumsan efficitur orci a commodo.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">TRAIN YOUR DRAGON</h2>
                                <p>Mauris at sapien nibh. Integer id tellus vitae ante cursus pharetra. Vestibulum ultrices eleifend enim, quis maximus nibh dapibus in. Phasellus lacinia nec leo at semper. Duis nisl odio, lacinia quis dui at, pretium tincidunt metus. Maecenas condimentum purus sit amet neque maximus tempor. Proin eros massa, ullamcorper eget rutrum eu, feugiat id purus.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="button secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row game-card">
                <div class="col-lg-12 col-xl-5 game-card-left">
                    <a href="#" class="js-video-button" data-video-id='DPBW_MFqeRs' data-channel="youtube"> <!-- Video link goes here -->
                        <div class="overlay">
                            <i class="fa fa-play fa-3x"></i>
                        </div>
                        <img src="{{asset('frontend/images/placeholder.jpg')}}" data-src="{{asset('frontend/images/game.jpg')}}" class="img-fluid b-lazy" alt="video thumbnail"> <!-- Video Thumbnail Img -->
                    </a>
                </div>
                <div class="col-lg-12 col-xl-7 game-card-right">
                    <h2 class="short-hr-left">Bomb</h2>
                    <p class="game-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis rhoncus nibh. Phasellus dignissim luctus consectetur. Fusce viverra est non purus ultrices, vel molestie massa tincidunt. <span class="expand colored strong" data-toggle="modal" data-target="#game1">Read More</span></p>
                </div>
                <!-- Modal -->
                <div class="modal fade game-modal" id="game1" tabindex="-1" role="dialog" aria-labelledby="scales" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title" id="scales">SWORDS &amp; SCALES</h1>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h2 class="short-hr-left">TEAM UP AND FIGHT DRAGONS</h2>
                                <p>Integer eget diam felis. Quisque et aliquet lectus, et lacinia turpis. Praesent eget pretium orci. Sed vestibulum rutrum volutpat. Curabitur feugiat arcu odio, quis convallis eros laoreet ac.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">MAKE FRIENDS</h2>
                                <p>Suspendisse ultricies, dui vitae convallis blandit, ipsum sem mattis diam, in egestas arcu lacus sed lectus. Donec at interdum tellus. Quisque pellentesque a felis et rutrum. Donec condimentum magna sit amet viverra convallis. Fusce accumsan efficitur orci a commodo.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">TRAIN YOUR DRAGON</h2>
                                <p>Mauris at sapien nibh. Integer id tellus vitae ante cursus pharetra. Vestibulum ultrices eleifend enim, quis maximus nibh dapibus in. Phasellus lacinia nec leo at semper. Duis nisl odio, lacinia quis dui at, pretium tincidunt metus. Maecenas condimentum purus sit amet neque maximus tempor. Proin eros massa, ullamcorper eget rutrum eu, feugiat id purus.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="button secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row game-card">
                <div class="col-lg-12 col-xl-5 game-card-left">
                    <a href="#" class="js-video-button" data-video-id='DPBW_MFqeRs' data-channel="youtube"> <!-- Video link goes here -->
                        <div class="overlay">
                            <i class="fa fa-play fa-3x"></i>
                        </div>
                        <img src="{{asset('frontend/images/placeholder.jpg')}}" data-src="{{asset('frontend/images/game.jpg')}}" class="img-fluid b-lazy" alt="video thumbnail"> <!-- Video Thumbnail Img -->
                    </a>
                </div>
                <div class="col-lg-12 col-xl-7 game-card-right">
                    <h2 class="short-hr-left">Black Jack</h2>
                    <p class="game-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis rhoncus nibh. Phasellus dignissim luctus consectetur. Fusce viverra est non purus ultrices, vel molestie massa tincidunt. <span class="expand colored strong" data-toggle="modal" data-target="#game1">Read More</span></p>
                </div>
                <!-- Modal -->
                <div class="modal fade game-modal" id="game1" tabindex="-1" role="dialog" aria-labelledby="scales" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title" id="scales">SWORDS &amp; SCALES</h1>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h2 class="short-hr-left">TEAM UP AND FIGHT DRAGONS</h2>
                                <p>Integer eget diam felis. Quisque et aliquet lectus, et lacinia turpis. Praesent eget pretium orci. Sed vestibulum rutrum volutpat. Curabitur feugiat arcu odio, quis convallis eros laoreet ac.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">MAKE FRIENDS</h2>
                                <p>Suspendisse ultricies, dui vitae convallis blandit, ipsum sem mattis diam, in egestas arcu lacus sed lectus. Donec at interdum tellus. Quisque pellentesque a felis et rutrum. Donec condimentum magna sit amet viverra convallis. Fusce accumsan efficitur orci a commodo.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">TRAIN YOUR DRAGON</h2>
                                <p>Mauris at sapien nibh. Integer id tellus vitae ante cursus pharetra. Vestibulum ultrices eleifend enim, quis maximus nibh dapibus in. Phasellus lacinia nec leo at semper. Duis nisl odio, lacinia quis dui at, pretium tincidunt metus. Maecenas condimentum purus sit amet neque maximus tempor. Proin eros massa, ullamcorper eget rutrum eu, feugiat id purus.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="button secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row game-card">
                <div class="col-lg-12 col-xl-5 game-card-left">
                    <a href="#" class="js-video-button" data-video-id='DPBW_MFqeRs' data-channel="youtube"> <!-- Video link goes here -->
                        <div class="overlay">
                            <i class="fa fa-play fa-3x"></i>
                        </div>
                        <img src="{{asset('frontend/images/placeholder.jpg')}}" data-src="{{asset('frontend/images/game.jpg')}}" class="img-fluid b-lazy" alt="video thumbnail"> <!-- Video Thumbnail Img -->
                    </a>
                </div>
                <div class="col-lg-12 col-xl-7 game-card-right">
                    <h2 class="short-hr-left">Roulette</h2>
                    <p class="game-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis rhoncus nibh. Phasellus dignissim luctus consectetur. Fusce viverra est non purus ultrices, vel molestie massa tincidunt. <span class="expand colored strong" data-toggle="modal" data-target="#game1">Read More</span></p>
                </div>
                <!-- Modal -->
                <div class="modal fade game-modal" id="game1" tabindex="-1" role="dialog" aria-labelledby="scales" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title" id="scales">SWORDS &amp; SCALES</h1>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h2 class="short-hr-left">TEAM UP AND FIGHT DRAGONS</h2>
                                <p>Integer eget diam felis. Quisque et aliquet lectus, et lacinia turpis. Praesent eget pretium orci. Sed vestibulum rutrum volutpat. Curabitur feugiat arcu odio, quis convallis eros laoreet ac.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">MAKE FRIENDS</h2>
                                <p>Suspendisse ultricies, dui vitae convallis blandit, ipsum sem mattis diam, in egestas arcu lacus sed lectus. Donec at interdum tellus. Quisque pellentesque a felis et rutrum. Donec condimentum magna sit amet viverra convallis. Fusce accumsan efficitur orci a commodo.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">TRAIN YOUR DRAGON</h2>
                                <p>Mauris at sapien nibh. Integer id tellus vitae ante cursus pharetra. Vestibulum ultrices eleifend enim, quis maximus nibh dapibus in. Phasellus lacinia nec leo at semper. Duis nisl odio, lacinia quis dui at, pretium tincidunt metus. Maecenas condimentum purus sit amet neque maximus tempor. Proin eros massa, ullamcorper eget rutrum eu, feugiat id purus.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="button secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row game-card">
                <div class="col-lg-12 col-xl-5 game-card-left">
                    <a href="#" class="js-video-button" data-video-id='DPBW_MFqeRs' data-channel="youtube"> <!-- Video link goes here -->
                        <div class="overlay">
                            <i class="fa fa-play fa-3x"></i>
                        </div>
                        <img src="{{asset('frontend/images/placeholder.jpg')}}" data-src="{{asset('frontend/images/game.jpg')}}" class="img-fluid b-lazy" alt="video thumbnail"> <!-- Video Thumbnail Img -->
                    </a>
                </div>
                <div class="col-lg-12 col-xl-7 game-card-right">
                    <h2 class="short-hr-left">Piano</h2>
                    <p class="game-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis rhoncus nibh. Phasellus dignissim luctus consectetur. Fusce viverra est non purus ultrices, vel molestie massa tincidunt. <span class="expand colored strong" data-toggle="modal" data-target="#game1">Read More</span></p>
                </div>
                <!-- Modal -->
                <div class="modal fade game-modal" id="game1" tabindex="-1" role="dialog" aria-labelledby="scales" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title" id="scales">SWORDS &amp; SCALES</h1>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h2 class="short-hr-left">TEAM UP AND FIGHT DRAGONS</h2>
                                <p>Integer eget diam felis. Quisque et aliquet lectus, et lacinia turpis. Praesent eget pretium orci. Sed vestibulum rutrum volutpat. Curabitur feugiat arcu odio, quis convallis eros laoreet ac.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">MAKE FRIENDS</h2>
                                <p>Suspendisse ultricies, dui vitae convallis blandit, ipsum sem mattis diam, in egestas arcu lacus sed lectus. Donec at interdum tellus. Quisque pellentesque a felis et rutrum. Donec condimentum magna sit amet viverra convallis. Fusce accumsan efficitur orci a commodo.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">TRAIN YOUR DRAGON</h2>
                                <p>Mauris at sapien nibh. Integer id tellus vitae ante cursus pharetra. Vestibulum ultrices eleifend enim, quis maximus nibh dapibus in. Phasellus lacinia nec leo at semper. Duis nisl odio, lacinia quis dui at, pretium tincidunt metus. Maecenas condimentum purus sit amet neque maximus tempor. Proin eros massa, ullamcorper eget rutrum eu, feugiat id purus.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="button secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row game-card">
                <div class="col-lg-12 col-xl-5 game-card-left">
                    <a href="#" class="js-video-button" data-video-id='DPBW_MFqeRs' data-channel="youtube"> <!-- Video link goes here -->
                        <div class="overlay">
                            <i class="fa fa-play fa-3x"></i>
                        </div>
                        <img src="{{asset('frontend/images/placeholder.jpg')}}" data-src="{{asset('frontend/images/game.jpg')}}" class="img-fluid b-lazy" alt="video thumbnail"> <!-- Video Thumbnail Img -->
                    </a>
                </div>
                <div class="col-lg-12 col-xl-7 game-card-right">
                    <h2 class="short-hr-left">Chess</h2>
                    <p class="game-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis rhoncus nibh. Phasellus dignissim luctus consectetur. Fusce viverra est non purus ultrices, vel molestie massa tincidunt. <span class="expand colored strong" data-toggle="modal" data-target="#game1">Read More</span></p>
                </div>
                <!-- Modal -->
                <div class="modal fade game-modal" id="game1" tabindex="-1" role="dialog" aria-labelledby="scales" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title" id="scales">SWORDS &amp; SCALES</h1>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h2 class="short-hr-left">TEAM UP AND FIGHT DRAGONS</h2>
                                <p>Integer eget diam felis. Quisque et aliquet lectus, et lacinia turpis. Praesent eget pretium orci. Sed vestibulum rutrum volutpat. Curabitur feugiat arcu odio, quis convallis eros laoreet ac.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">MAKE FRIENDS</h2>
                                <p>Suspendisse ultricies, dui vitae convallis blandit, ipsum sem mattis diam, in egestas arcu lacus sed lectus. Donec at interdum tellus. Quisque pellentesque a felis et rutrum. Donec condimentum magna sit amet viverra convallis. Fusce accumsan efficitur orci a commodo.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">TRAIN YOUR DRAGON</h2>
                                <p>Mauris at sapien nibh. Integer id tellus vitae ante cursus pharetra. Vestibulum ultrices eleifend enim, quis maximus nibh dapibus in. Phasellus lacinia nec leo at semper. Duis nisl odio, lacinia quis dui at, pretium tincidunt metus. Maecenas condimentum purus sit amet neque maximus tempor. Proin eros massa, ullamcorper eget rutrum eu, feugiat id purus.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="button secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="row game-card">
                <div class="col-lg-12 col-xl-5 game-card-left">
                    <a href="#" class="js-video-button" data-video-id='DPBW_MFqeRs' data-channel="youtube"> <!-- Video link goes here -->
                        <div class="overlay">
                            <i class="fa fa-play fa-3x"></i>
                        </div>
                        <img src="{{asset('frontend/images/placeholder.jpg')}}" data-src="{{asset('frontend/images/game.jpg')}}" class="img-fluid b-lazy" alt="video thumbnail"> <!-- Video Thumbnail Img -->
                    </a>
                </div>
                <div class="col-lg-12 col-xl-7 game-card-right">
                    <h2 class="short-hr-left">Match</h2>
                    <p class="game-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis rhoncus nibh. Phasellus dignissim luctus consectetur. Fusce viverra est non purus ultrices, vel molestie massa tincidunt. <span class="expand colored strong" data-toggle="modal" data-target="#game1">Read More</span></p>
                </div>
                <!-- Modal -->
                <div class="modal fade game-modal" id="game1" tabindex="-1" role="dialog" aria-labelledby="scales" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title" id="scales">SWORDS &amp; SCALES</h1>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h2 class="short-hr-left">TEAM UP AND FIGHT DRAGONS</h2>
                                <p>Integer eget diam felis. Quisque et aliquet lectus, et lacinia turpis. Praesent eget pretium orci. Sed vestibulum rutrum volutpat. Curabitur feugiat arcu odio, quis convallis eros laoreet ac.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">MAKE FRIENDS</h2>
                                <p>Suspendisse ultricies, dui vitae convallis blandit, ipsum sem mattis diam, in egestas arcu lacus sed lectus. Donec at interdum tellus. Quisque pellentesque a felis et rutrum. Donec condimentum magna sit amet viverra convallis. Fusce accumsan efficitur orci a commodo.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">TRAIN YOUR DRAGON</h2>
                                <p>Mauris at sapien nibh. Integer id tellus vitae ante cursus pharetra. Vestibulum ultrices eleifend enim, quis maximus nibh dapibus in. Phasellus lacinia nec leo at semper. Duis nisl odio, lacinia quis dui at, pretium tincidunt metus. Maecenas condimentum purus sit amet neque maximus tempor. Proin eros massa, ullamcorper eget rutrum eu, feugiat id purus.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="button secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row game-card">
                <div class="col-lg-12 col-xl-5 game-card-left">
                    <a href="#" class="js-video-button" data-video-id='DPBW_MFqeRs' data-channel="youtube"> <!-- Video link goes here -->
                        <div class="overlay">
                            <i class="fa fa-play fa-3x"></i>
                        </div>
                        <img src="{{asset('frontend/images/placeholder.jpg')}}" data-src="{{asset('frontend/images/game.jpg')}}" class="img-fluid b-lazy" alt="video thumbnail"> <!-- Video Thumbnail Img -->
                    </a>
                </div>
                <div class="col-lg-12 col-xl-7 game-card-right">
                    <h2 class="short-hr-left">Paint</h2>
                    <p class="game-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis rhoncus nibh. Phasellus dignissim luctus consectetur. Fusce viverra est non purus ultrices, vel molestie massa tincidunt. <span class="expand colored strong" data-toggle="modal" data-target="#game1">Read More</span></p>
                </div>
                <!-- Modal -->
                <div class="modal fade game-modal" id="game1" tabindex="-1" role="dialog" aria-labelledby="scales" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title" id="scales">SWORDS &amp; SCALES</h1>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h2 class="short-hr-left">TEAM UP AND FIGHT DRAGONS</h2>
                                <p>Integer eget diam felis. Quisque et aliquet lectus, et lacinia turpis. Praesent eget pretium orci. Sed vestibulum rutrum volutpat. Curabitur feugiat arcu odio, quis convallis eros laoreet ac.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">MAKE FRIENDS</h2>
                                <p>Suspendisse ultricies, dui vitae convallis blandit, ipsum sem mattis diam, in egestas arcu lacus sed lectus. Donec at interdum tellus. Quisque pellentesque a felis et rutrum. Donec condimentum magna sit amet viverra convallis. Fusce accumsan efficitur orci a commodo.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">TRAIN YOUR DRAGON</h2>
                                <p>Mauris at sapien nibh. Integer id tellus vitae ante cursus pharetra. Vestibulum ultrices eleifend enim, quis maximus nibh dapibus in. Phasellus lacinia nec leo at semper. Duis nisl odio, lacinia quis dui at, pretium tincidunt metus. Maecenas condimentum purus sit amet neque maximus tempor. Proin eros massa, ullamcorper eget rutrum eu, feugiat id purus.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="button secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row game-card">
                <div class="col-lg-12 col-xl-5 game-card-left">
                    <a href="#" class="js-video-button" data-video-id='DPBW_MFqeRs' data-channel="youtube"> <!-- Video link goes here -->
                        <div class="overlay">
                            <i class="fa fa-play fa-3x"></i>
                        </div>
                        <img src="{{asset('frontend/images/placeholder.jpg')}}" data-src="{{asset('frontend/images/game.jpg')}}" class="img-fluid b-lazy" alt="video thumbnail"> <!-- Video Thumbnail Img -->
                    </a>
                </div>
                <div class="col-lg-12 col-xl-7 game-card-right">
                    <h2 class="short-hr-left">Golf</h2>
                    <p class="game-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis rhoncus nibh. Phasellus dignissim luctus consectetur. Fusce viverra est non purus ultrices, vel molestie massa tincidunt. <span class="expand colored strong" data-toggle="modal" data-target="#game1">Read More</span></p>
                </div>
                <!-- Modal -->
                <div class="modal fade game-modal" id="game1" tabindex="-1" role="dialog" aria-labelledby="scales" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title" id="scales">SWORDS &amp; SCALES</h1>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h2 class="short-hr-left">TEAM UP AND FIGHT DRAGONS</h2>
                                <p>Integer eget diam felis. Quisque et aliquet lectus, et lacinia turpis. Praesent eget pretium orci. Sed vestibulum rutrum volutpat. Curabitur feugiat arcu odio, quis convallis eros laoreet ac.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">MAKE FRIENDS</h2>
                                <p>Suspendisse ultricies, dui vitae convallis blandit, ipsum sem mattis diam, in egestas arcu lacus sed lectus. Donec at interdum tellus. Quisque pellentesque a felis et rutrum. Donec condimentum magna sit amet viverra convallis. Fusce accumsan efficitur orci a commodo.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">TRAIN YOUR DRAGON</h2>
                                <p>Mauris at sapien nibh. Integer id tellus vitae ante cursus pharetra. Vestibulum ultrices eleifend enim, quis maximus nibh dapibus in. Phasellus lacinia nec leo at semper. Duis nisl odio, lacinia quis dui at, pretium tincidunt metus. Maecenas condimentum purus sit amet neque maximus tempor. Proin eros massa, ullamcorper eget rutrum eu, feugiat id purus.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="button secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row game-card">
                <div class="col-lg-12 col-xl-5 game-card-left">
                    <a href="#" class="js-video-button" data-video-id='DPBW_MFqeRs' data-channel="youtube"> <!-- Video link goes here -->
                        <div class="overlay">
                            <i class="fa fa-play fa-3x"></i>
                        </div>
                        <img src="{{asset('frontend/images/placeholder.jpg')}}" data-src="{{asset('frontend/images/game.jpg')}}" class="img-fluid b-lazy" alt="video thumbnail"> <!-- Video Thumbnail Img -->
                    </a>
                </div>
                <div class="col-lg-12 col-xl-7 game-card-right">
                    <h2 class="short-hr-left">Hunt</h2>
                    <p class="game-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis rhoncus nibh. Phasellus dignissim luctus consectetur. Fusce viverra est non purus ultrices, vel molestie massa tincidunt. <span class="expand colored strong" data-toggle="modal" data-target="#game1">Read More</span></p>
                </div>
                <!-- Modal -->
                <div class="modal fade game-modal" id="game1" tabindex="-1" role="dialog" aria-labelledby="scales" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title" id="scales">SWORDS &amp; SCALES</h1>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h2 class="short-hr-left">TEAM UP AND FIGHT DRAGONS</h2>
                                <p>Integer eget diam felis. Quisque et aliquet lectus, et lacinia turpis. Praesent eget pretium orci. Sed vestibulum rutrum volutpat. Curabitur feugiat arcu odio, quis convallis eros laoreet ac.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">MAKE FRIENDS</h2>
                                <p>Suspendisse ultricies, dui vitae convallis blandit, ipsum sem mattis diam, in egestas arcu lacus sed lectus. Donec at interdum tellus. Quisque pellentesque a felis et rutrum. Donec condimentum magna sit amet viverra convallis. Fusce accumsan efficitur orci a commodo.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">TRAIN YOUR DRAGON</h2>
                                <p>Mauris at sapien nibh. Integer id tellus vitae ante cursus pharetra. Vestibulum ultrices eleifend enim, quis maximus nibh dapibus in. Phasellus lacinia nec leo at semper. Duis nisl odio, lacinia quis dui at, pretium tincidunt metus. Maecenas condimentum purus sit amet neque maximus tempor. Proin eros massa, ullamcorper eget rutrum eu, feugiat id purus.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="button secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row game-card">
                <div class="col-lg-12 col-xl-5 game-card-left">
                    <a href="#" class="js-video-button" data-video-id='DPBW_MFqeRs' data-channel="youtube"> <!-- Video link goes here -->
                        <div class="overlay">
                            <i class="fa fa-play fa-3x"></i>
                        </div>
                        <img src="{{asset('frontend/images/placeholder.jpg')}}" data-src="{{asset('frontend/images/game.jpg')}}" class="img-fluid b-lazy" alt="video thumbnail"> <!-- Video Thumbnail Img -->
                    </a>
                </div>
                <div class="col-lg-12 col-xl-7 game-card-right">
                    <h2 class="short-hr-left">Checkers</h2>
                    <p class="game-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis rhoncus nibh. Phasellus dignissim luctus consectetur. Fusce viverra est non purus ultrices, vel molestie massa tincidunt. <span class="expand colored strong" data-toggle="modal" data-target="#game1">Read More</span></p>
                </div>
                <!-- Modal -->
                <div class="modal fade game-modal" id="game1" tabindex="-1" role="dialog" aria-labelledby="scales" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title" id="scales">SWORDS &amp; SCALES</h1>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h2 class="short-hr-left">TEAM UP AND FIGHT DRAGONS</h2>
                                <p>Integer eget diam felis. Quisque et aliquet lectus, et lacinia turpis. Praesent eget pretium orci. Sed vestibulum rutrum volutpat. Curabitur feugiat arcu odio, quis convallis eros laoreet ac.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">MAKE FRIENDS</h2>
                                <p>Suspendisse ultricies, dui vitae convallis blandit, ipsum sem mattis diam, in egestas arcu lacus sed lectus. Donec at interdum tellus. Quisque pellentesque a felis et rutrum. Donec condimentum magna sit amet viverra convallis. Fusce accumsan efficitur orci a commodo.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">TRAIN YOUR DRAGON</h2>
                                <p>Mauris at sapien nibh. Integer id tellus vitae ante cursus pharetra. Vestibulum ultrices eleifend enim, quis maximus nibh dapibus in. Phasellus lacinia nec leo at semper. Duis nisl odio, lacinia quis dui at, pretium tincidunt metus. Maecenas condimentum purus sit amet neque maximus tempor. Proin eros massa, ullamcorper eget rutrum eu, feugiat id purus.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="button secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row game-card">
                <div class="col-lg-12 col-xl-5 game-card-left">
                    <a href="#" class="js-video-button" data-video-id='DPBW_MFqeRs' data-channel="youtube"> <!-- Video link goes here -->
                        <div class="overlay">
                            <i class="fa fa-play fa-3x"></i>
                        </div>
                        <img src="{{asset('frontend/images/placeholder.jpg')}}" data-src="{{asset('frontend/images/game.jpg')}}" class="img-fluid b-lazy" alt="video thumbnail"> <!-- Video Thumbnail Img -->
                    </a>
                </div>
                <div class="col-lg-12 col-xl-7 game-card-right">
                    <h2 class="short-hr-left">Table tennis</h2>
                    <p class="game-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis rhoncus nibh. Phasellus dignissim luctus consectetur. Fusce viverra est non purus ultrices, vel molestie massa tincidunt. <span class="expand colored strong" data-toggle="modal" data-target="#game1">Read More</span></p>
                </div>
                <!-- Modal -->
                <div class="modal fade game-modal" id="game1" tabindex="-1" role="dialog" aria-labelledby="scales" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title" id="scales">SWORDS &amp; SCALES</h1>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h2 class="short-hr-left">TEAM UP AND FIGHT DRAGONS</h2>
                                <p>Integer eget diam felis. Quisque et aliquet lectus, et lacinia turpis. Praesent eget pretium orci. Sed vestibulum rutrum volutpat. Curabitur feugiat arcu odio, quis convallis eros laoreet ac.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">MAKE FRIENDS</h2>
                                <p>Suspendisse ultricies, dui vitae convallis blandit, ipsum sem mattis diam, in egestas arcu lacus sed lectus. Donec at interdum tellus. Quisque pellentesque a felis et rutrum. Donec condimentum magna sit amet viverra convallis. Fusce accumsan efficitur orci a commodo.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">TRAIN YOUR DRAGON</h2>
                                <p>Mauris at sapien nibh. Integer id tellus vitae ante cursus pharetra. Vestibulum ultrices eleifend enim, quis maximus nibh dapibus in. Phasellus lacinia nec leo at semper. Duis nisl odio, lacinia quis dui at, pretium tincidunt metus. Maecenas condimentum purus sit amet neque maximus tempor. Proin eros massa, ullamcorper eget rutrum eu, feugiat id purus.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="button secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row game-card">
                <div class="col-lg-12 col-xl-5 game-card-left">
                    <a href="#" class="js-video-button" data-video-id='DPBW_MFqeRs' data-channel="youtube"> <!-- Video link goes here -->
                        <div class="overlay">
                            <i class="fa fa-play fa-3x"></i>
                        </div>
                        <img src="{{asset('frontend/images/placeholder.jpg')}}" data-src="{{asset('frontend/images/game.jpg')}}" class="img-fluid b-lazy" alt="video thumbnail"> <!-- Video Thumbnail Img -->
                    </a>
                </div>
                <div class="col-lg-12 col-xl-7 game-card-right">
                    <h2 class="short-hr-left">Drums</h2>
                    <p class="game-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis rhoncus nibh. Phasellus dignissim luctus consectetur. Fusce viverra est non purus ultrices, vel molestie massa tincidunt. <span class="expand colored strong" data-toggle="modal" data-target="#game1">Read More</span></p>
                </div>
                <!-- Modal -->
                <div class="modal fade game-modal" id="game1" tabindex="-1" role="dialog" aria-labelledby="scales" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title" id="scales">SWORDS &amp; SCALES</h1>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h2 class="short-hr-left">TEAM UP AND FIGHT DRAGONS</h2>
                                <p>Integer eget diam felis. Quisque et aliquet lectus, et lacinia turpis. Praesent eget pretium orci. Sed vestibulum rutrum volutpat. Curabitur feugiat arcu odio, quis convallis eros laoreet ac.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">MAKE FRIENDS</h2>
                                <p>Suspendisse ultricies, dui vitae convallis blandit, ipsum sem mattis diam, in egestas arcu lacus sed lectus. Donec at interdum tellus. Quisque pellentesque a felis et rutrum. Donec condimentum magna sit amet viverra convallis. Fusce accumsan efficitur orci a commodo.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">TRAIN YOUR DRAGON</h2>
                                <p>Mauris at sapien nibh. Integer id tellus vitae ante cursus pharetra. Vestibulum ultrices eleifend enim, quis maximus nibh dapibus in. Phasellus lacinia nec leo at semper. Duis nisl odio, lacinia quis dui at, pretium tincidunt metus. Maecenas condimentum purus sit amet neque maximus tempor. Proin eros massa, ullamcorper eget rutrum eu, feugiat id purus.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="button secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row game-card">
                <div class="col-lg-12 col-xl-5 game-card-left">
                    <a href="#" class="js-video-button" data-video-id='DPBW_MFqeRs' data-channel="youtube"> <!-- Video link goes here -->
                        <div class="overlay">
                            <i class="fa fa-play fa-3x"></i>
                        </div>
                        <img src="{{asset('frontend/images/placeholder.jpg')}}" data-src="{{asset('frontend/images/game.jpg')}}" class="img-fluid b-lazy" alt="video thumbnail"> <!-- Video Thumbnail Img -->
                    </a>
                </div>
                <div class="col-lg-12 col-xl-7 game-card-right">
                    <h2 class="short-hr-left">Fight</h2>
                    <p class="game-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis rhoncus nibh. Phasellus dignissim luctus consectetur. Fusce viverra est non purus ultrices, vel molestie massa tincidunt. <span class="expand colored strong" data-toggle="modal" data-target="#game1">Read More</span></p>
                </div>
                <!-- Modal -->
                <div class="modal fade game-modal" id="game1" tabindex="-1" role="dialog" aria-labelledby="scales" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title" id="scales">SWORDS &amp; SCALES</h1>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h2 class="short-hr-left">TEAM UP AND FIGHT DRAGONS</h2>
                                <p>Integer eget diam felis. Quisque et aliquet lectus, et lacinia turpis. Praesent eget pretium orci. Sed vestibulum rutrum volutpat. Curabitur feugiat arcu odio, quis convallis eros laoreet ac.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">MAKE FRIENDS</h2>
                                <p>Suspendisse ultricies, dui vitae convallis blandit, ipsum sem mattis diam, in egestas arcu lacus sed lectus. Donec at interdum tellus. Quisque pellentesque a felis et rutrum. Donec condimentum magna sit amet viverra convallis. Fusce accumsan efficitur orci a commodo.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">TRAIN YOUR DRAGON</h2>
                                <p>Mauris at sapien nibh. Integer id tellus vitae ante cursus pharetra. Vestibulum ultrices eleifend enim, quis maximus nibh dapibus in. Phasellus lacinia nec leo at semper. Duis nisl odio, lacinia quis dui at, pretium tincidunt metus. Maecenas condimentum purus sit amet neque maximus tempor. Proin eros massa, ullamcorper eget rutrum eu, feugiat id purus.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="button secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row game-card">
                <div class="col-lg-12 col-xl-5 game-card-left">
                    <a href="#" class="js-video-button" data-video-id='DPBW_MFqeRs' data-channel="youtube"> <!-- Video link goes here -->
                        <div class="overlay">
                            <i class="fa fa-play fa-3x"></i>
                        </div>
                        <img src="{{asset('frontend/images/placeholder.jpg')}}" data-src="{{asset('frontend/images/game.jpg')}}" class="img-fluid b-lazy" alt="video thumbnail"> <!-- Video Thumbnail Img -->
                    </a>
                </div>
                <div class="col-lg-12 col-xl-7 game-card-right">
                    <h2 class="short-hr-left">Survival</h2>
                    <p class="game-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis rhoncus nibh. Phasellus dignissim luctus consectetur. Fusce viverra est non purus ultrices, vel molestie massa tincidunt. <span class="expand colored strong" data-toggle="modal" data-target="#game1">Read More</span></p>
                </div>
                <!-- Modal -->
                <div class="modal fade game-modal" id="game1" tabindex="-1" role="dialog" aria-labelledby="scales" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title" id="scales">SWORDS &amp; SCALES</h1>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h2 class="short-hr-left">TEAM UP AND FIGHT DRAGONS</h2>
                                <p>Integer eget diam felis. Quisque et aliquet lectus, et lacinia turpis. Praesent eget pretium orci. Sed vestibulum rutrum volutpat. Curabitur feugiat arcu odio, quis convallis eros laoreet ac.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">MAKE FRIENDS</h2>
                                <p>Suspendisse ultricies, dui vitae convallis blandit, ipsum sem mattis diam, in egestas arcu lacus sed lectus. Donec at interdum tellus. Quisque pellentesque a felis et rutrum. Donec condimentum magna sit amet viverra convallis. Fusce accumsan efficitur orci a commodo.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">TRAIN YOUR DRAGON</h2>
                                <p>Mauris at sapien nibh. Integer id tellus vitae ante cursus pharetra. Vestibulum ultrices eleifend enim, quis maximus nibh dapibus in. Phasellus lacinia nec leo at semper. Duis nisl odio, lacinia quis dui at, pretium tincidunt metus. Maecenas condimentum purus sit amet neque maximus tempor. Proin eros massa, ullamcorper eget rutrum eu, feugiat id purus.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="button secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row game-card">
                <div class="col-lg-12 col-xl-5 game-card-left">
                    <a href="#" class="js-video-button" data-video-id='DPBW_MFqeRs' data-channel="youtube"> <!-- Video link goes here -->
                        <div class="overlay">
                            <i class="fa fa-play fa-3x"></i>
                        </div>
                        <img src="{{asset('frontend/images/placeholder.jpg')}}" data-src="{{asset('frontend/images/game.jpg')}}" class="img-fluid b-lazy" alt="video thumbnail"> <!-- Video Thumbnail Img -->
                    </a>
                </div>
                <div class="col-lg-12 col-xl-7 game-card-right">
                    <h2 class="short-hr-left">Guitar</h2>
                    <p class="game-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis rhoncus nibh. Phasellus dignissim luctus consectetur. Fusce viverra est non purus ultrices, vel molestie massa tincidunt. <span class="expand colored strong" data-toggle="modal" data-target="#game1">Read More</span></p>
                </div>
                <!-- Modal -->
                <div class="modal fade game-modal" id="game1" tabindex="-1" role="dialog" aria-labelledby="scales" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title" id="scales">SWORDS &amp; SCALES</h1>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h2 class="short-hr-left">TEAM UP AND FIGHT DRAGONS</h2>
                                <p>Integer eget diam felis. Quisque et aliquet lectus, et lacinia turpis. Praesent eget pretium orci. Sed vestibulum rutrum volutpat. Curabitur feugiat arcu odio, quis convallis eros laoreet ac.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">MAKE FRIENDS</h2>
                                <p>Suspendisse ultricies, dui vitae convallis blandit, ipsum sem mattis diam, in egestas arcu lacus sed lectus. Donec at interdum tellus. Quisque pellentesque a felis et rutrum. Donec condimentum magna sit amet viverra convallis. Fusce accumsan efficitur orci a commodo.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">TRAIN YOUR DRAGON</h2>
                                <p>Mauris at sapien nibh. Integer id tellus vitae ante cursus pharetra. Vestibulum ultrices eleifend enim, quis maximus nibh dapibus in. Phasellus lacinia nec leo at semper. Duis nisl odio, lacinia quis dui at, pretium tincidunt metus. Maecenas condimentum purus sit amet neque maximus tempor. Proin eros massa, ullamcorper eget rutrum eu, feugiat id purus.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="button secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row game-card">
                <div class="col-lg-12 col-xl-5 game-card-left">
                    <a href="#" class="js-video-button" data-video-id='DPBW_MFqeRs' data-channel="youtube"> <!-- Video link goes here -->
                        <div class="overlay">
                            <i class="fa fa-play fa-3x"></i>
                        </div>
                        <img src="{{asset('frontend/images/placeholder.jpg')}}" data-src="{{asset('frontend/images/game.jpg')}}" class="img-fluid b-lazy" alt="video thumbnail"> <!-- Video Thumbnail Img -->
                    </a>
                </div>
                <div class="col-lg-12 col-xl-7 game-card-right">
                    <h2 class="short-hr-left">Dog Fight</h2>
                    <p class="game-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis rhoncus nibh. Phasellus dignissim luctus consectetur. Fusce viverra est non purus ultrices, vel molestie massa tincidunt. <span class="expand colored strong" data-toggle="modal" data-target="#game1">Read More</span></p>
                </div>
                <!-- Modal -->
                <div class="modal fade game-modal" id="game1" tabindex="-1" role="dialog" aria-labelledby="scales" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title" id="scales">SWORDS &amp; SCALES</h1>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h2 class="short-hr-left">TEAM UP AND FIGHT DRAGONS</h2>
                                <p>Integer eget diam felis. Quisque et aliquet lectus, et lacinia turpis. Praesent eget pretium orci. Sed vestibulum rutrum volutpat. Curabitur feugiat arcu odio, quis convallis eros laoreet ac.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">MAKE FRIENDS</h2>
                                <p>Suspendisse ultricies, dui vitae convallis blandit, ipsum sem mattis diam, in egestas arcu lacus sed lectus. Donec at interdum tellus. Quisque pellentesque a felis et rutrum. Donec condimentum magna sit amet viverra convallis. Fusce accumsan efficitur orci a commodo.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">TRAIN YOUR DRAGON</h2>
                                <p>Mauris at sapien nibh. Integer id tellus vitae ante cursus pharetra. Vestibulum ultrices eleifend enim, quis maximus nibh dapibus in. Phasellus lacinia nec leo at semper. Duis nisl odio, lacinia quis dui at, pretium tincidunt metus. Maecenas condimentum purus sit amet neque maximus tempor. Proin eros massa, ullamcorper eget rutrum eu, feugiat id purus.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="button secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="row game-card">
                <div class="col-lg-12 col-xl-5 game-card-left">
                    <a href="#" class="js-video-button" data-video-id='DPBW_MFqeRs' data-channel="youtube"> <!-- Video link goes here -->
                        <div class="overlay">
                            <i class="fa fa-play fa-3x"></i>
                        </div>
                        <img src="{{asset('frontend/images/placeholder.jpg')}}" data-src="{{asset('frontend/images/game.jpg')}}" class="img-fluid b-lazy" alt="video thumbnail"> <!-- Video Thumbnail Img -->
                    </a>
                </div>
                <div class="col-lg-12 col-xl-7 game-card-right">
                    <h2 class="short-hr-left">Trivia Live</h2>
                    <p class="game-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis rhoncus nibh. Phasellus dignissim luctus consectetur. Fusce viverra est non purus ultrices, vel molestie massa tincidunt. <span class="expand colored strong" data-toggle="modal" data-target="#game1">Read More</span></p>
                </div>
                <!-- Modal -->
                <div class="modal fade game-modal" id="game1" tabindex="-1" role="dialog" aria-labelledby="scales" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title" id="scales">SWORDS &amp; SCALES</h1>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h2 class="short-hr-left">TEAM UP AND FIGHT DRAGONS</h2>
                                <p>Integer eget diam felis. Quisque et aliquet lectus, et lacinia turpis. Praesent eget pretium orci. Sed vestibulum rutrum volutpat. Curabitur feugiat arcu odio, quis convallis eros laoreet ac.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">MAKE FRIENDS</h2>
                                <p>Suspendisse ultricies, dui vitae convallis blandit, ipsum sem mattis diam, in egestas arcu lacus sed lectus. Donec at interdum tellus. Quisque pellentesque a felis et rutrum. Donec condimentum magna sit amet viverra convallis. Fusce accumsan efficitur orci a commodo.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">TRAIN YOUR DRAGON</h2>
                                <p>Mauris at sapien nibh. Integer id tellus vitae ante cursus pharetra. Vestibulum ultrices eleifend enim, quis maximus nibh dapibus in. Phasellus lacinia nec leo at semper. Duis nisl odio, lacinia quis dui at, pretium tincidunt metus. Maecenas condimentum purus sit amet neque maximus tempor. Proin eros massa, ullamcorper eget rutrum eu, feugiat id purus.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="button secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row game-card">
                <div class="col-lg-12 col-xl-5 game-card-left">
                    <a href="#" class="js-video-button" data-video-id='DPBW_MFqeRs' data-channel="youtube"> <!-- Video link goes here -->
                        <div class="overlay">
                            <i class="fa fa-play fa-3x"></i>
                        </div>
                        <img src="{{asset('frontend/images/placeholder.jpg')}}" data-src="{{asset('frontend/images/game.jpg')}}" class="img-fluid b-lazy" alt="video thumbnail"> <!-- Video Thumbnail Img -->
                    </a>
                </div>
                <div class="col-lg-12 col-xl-7 game-card-right">
                    <h2 class="short-hr-left">Night Vision</h2>
                    <p class="game-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis rhoncus nibh. Phasellus dignissim luctus consectetur. Fusce viverra est non purus ultrices, vel molestie massa tincidunt. <span class="expand colored strong" data-toggle="modal" data-target="#game1">Read More</span></p>
                </div>
                <!-- Modal -->
                <div class="modal fade game-modal" id="game1" tabindex="-1" role="dialog" aria-labelledby="scales" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title" id="scales">SWORDS &amp; SCALES</h1>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h2 class="short-hr-left">TEAM UP AND FIGHT DRAGONS</h2>
                                <p>Integer eget diam felis. Quisque et aliquet lectus, et lacinia turpis. Praesent eget pretium orci. Sed vestibulum rutrum volutpat. Curabitur feugiat arcu odio, quis convallis eros laoreet ac.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">MAKE FRIENDS</h2>
                                <p>Suspendisse ultricies, dui vitae convallis blandit, ipsum sem mattis diam, in egestas arcu lacus sed lectus. Donec at interdum tellus. Quisque pellentesque a felis et rutrum. Donec condimentum magna sit amet viverra convallis. Fusce accumsan efficitur orci a commodo.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">TRAIN YOUR DRAGON</h2>
                                <p>Mauris at sapien nibh. Integer id tellus vitae ante cursus pharetra. Vestibulum ultrices eleifend enim, quis maximus nibh dapibus in. Phasellus lacinia nec leo at semper. Duis nisl odio, lacinia quis dui at, pretium tincidunt metus. Maecenas condimentum purus sit amet neque maximus tempor. Proin eros massa, ullamcorper eget rutrum eu, feugiat id purus.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="button secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row game-card">
                <div class="col-lg-12 col-xl-5 game-card-left">
                    <a href="#" class="js-video-button" data-video-id='DPBW_MFqeRs' data-channel="youtube"> <!-- Video link goes here -->
                        <div class="overlay">
                            <i class="fa fa-play fa-3x"></i>
                        </div>
                        <img src="{{asset('frontend/images/placeholder.jpg')}}" data-src="{{asset('frontend/images/game.jpg')}}" class="img-fluid b-lazy" alt="video thumbnail"> <!-- Video Thumbnail Img -->
                    </a>
                </div>
                <div class="col-lg-12 col-xl-7 game-card-right">
                    <h2 class="short-hr-left">Zomb</h2>
                    <p class="game-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis rhoncus nibh. Phasellus dignissim luctus consectetur. Fusce viverra est non purus ultrices, vel molestie massa tincidunt. <span class="expand colored strong" data-toggle="modal" data-target="#game1">Read More</span></p>
                </div>
                <!-- Modal -->
                <div class="modal fade game-modal" id="game1" tabindex="-1" role="dialog" aria-labelledby="scales" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title" id="scales">SWORDS &amp; SCALES</h1>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h2 class="short-hr-left">TEAM UP AND FIGHT DRAGONS</h2>
                                <p>Integer eget diam felis. Quisque et aliquet lectus, et lacinia turpis. Praesent eget pretium orci. Sed vestibulum rutrum volutpat. Curabitur feugiat arcu odio, quis convallis eros laoreet ac.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">MAKE FRIENDS</h2>
                                <p>Suspendisse ultricies, dui vitae convallis blandit, ipsum sem mattis diam, in egestas arcu lacus sed lectus. Donec at interdum tellus. Quisque pellentesque a felis et rutrum. Donec condimentum magna sit amet viverra convallis. Fusce accumsan efficitur orci a commodo.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">TRAIN YOUR DRAGON</h2>
                                <p>Mauris at sapien nibh. Integer id tellus vitae ante cursus pharetra. Vestibulum ultrices eleifend enim, quis maximus nibh dapibus in. Phasellus lacinia nec leo at semper. Duis nisl odio, lacinia quis dui at, pretium tincidunt metus. Maecenas condimentum purus sit amet neque maximus tempor. Proin eros massa, ullamcorper eget rutrum eu, feugiat id purus.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="button secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row game-card">
                <div class="col-lg-12 col-xl-5 game-card-left">
                    <a href="#" class="js-video-button" data-video-id='DPBW_MFqeRs' data-channel="youtube"> <!-- Video link goes here -->
                        <div class="overlay">
                            <i class="fa fa-play fa-3x"></i>
                        </div>
                        <img src="{{asset('frontend/images/placeholder.jpg')}}" data-src="{{asset('frontend/images/game.jpg')}}" class="img-fluid b-lazy" alt="video thumbnail"> <!-- Video Thumbnail Img -->
                    </a>
                </div>
                <div class="col-lg-12 col-xl-7 game-card-right">
                    <h2 class="short-hr-left">Aliens</h2>
                    <p class="game-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis rhoncus nibh. Phasellus dignissim luctus consectetur. Fusce viverra est non purus ultrices, vel molestie massa tincidunt. <span class="expand colored strong" data-toggle="modal" data-target="#game1">Read More</span></p>
                </div>
                <!-- Modal -->
                <div class="modal fade game-modal" id="game1" tabindex="-1" role="dialog" aria-labelledby="scales" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title" id="scales">SWORDS &amp; SCALES</h1>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h2 class="short-hr-left">TEAM UP AND FIGHT DRAGONS</h2>
                                <p>Integer eget diam felis. Quisque et aliquet lectus, et lacinia turpis. Praesent eget pretium orci. Sed vestibulum rutrum volutpat. Curabitur feugiat arcu odio, quis convallis eros laoreet ac.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">MAKE FRIENDS</h2>
                                <p>Suspendisse ultricies, dui vitae convallis blandit, ipsum sem mattis diam, in egestas arcu lacus sed lectus. Donec at interdum tellus. Quisque pellentesque a felis et rutrum. Donec condimentum magna sit amet viverra convallis. Fusce accumsan efficitur orci a commodo.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">TRAIN YOUR DRAGON</h2>
                                <p>Mauris at sapien nibh. Integer id tellus vitae ante cursus pharetra. Vestibulum ultrices eleifend enim, quis maximus nibh dapibus in. Phasellus lacinia nec leo at semper. Duis nisl odio, lacinia quis dui at, pretium tincidunt metus. Maecenas condimentum purus sit amet neque maximus tempor. Proin eros massa, ullamcorper eget rutrum eu, feugiat id purus.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="button secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row game-card">
                <div class="col-lg-12 col-xl-5 game-card-left">
                    <a href="#" class="js-video-button" data-video-id='DPBW_MFqeRs' data-channel="youtube"> <!-- Video link goes here -->
                        <div class="overlay">
                            <i class="fa fa-play fa-3x"></i>
                        </div>
                        <img src="{{asset('frontend/images/placeholder.jpg')}}" data-src="{{asset('frontend/images/game.jpg')}}" class="img-fluid b-lazy" alt="video thumbnail"> <!-- Video Thumbnail Img -->
                    </a>
                </div>
                <div class="col-lg-12 col-xl-7 game-card-right">
                    <h2 class="short-hr-left">Calculator</h2>
                    <p class="game-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis rhoncus nibh. Phasellus dignissim luctus consectetur. Fusce viverra est non purus ultrices, vel molestie massa tincidunt. <span class="expand colored strong" data-toggle="modal" data-target="#game1">Read More</span></p>
                </div>
                <!-- Modal -->
                <div class="modal fade game-modal" id="game1" tabindex="-1" role="dialog" aria-labelledby="scales" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title" id="scales">SWORDS &amp; SCALES</h1>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h2 class="short-hr-left">TEAM UP AND FIGHT DRAGONS</h2>
                                <p>Integer eget diam felis. Quisque et aliquet lectus, et lacinia turpis. Praesent eget pretium orci. Sed vestibulum rutrum volutpat. Curabitur feugiat arcu odio, quis convallis eros laoreet ac.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">MAKE FRIENDS</h2>
                                <p>Suspendisse ultricies, dui vitae convallis blandit, ipsum sem mattis diam, in egestas arcu lacus sed lectus. Donec at interdum tellus. Quisque pellentesque a felis et rutrum. Donec condimentum magna sit amet viverra convallis. Fusce accumsan efficitur orci a commodo.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">TRAIN YOUR DRAGON</h2>
                                <p>Mauris at sapien nibh. Integer id tellus vitae ante cursus pharetra. Vestibulum ultrices eleifend enim, quis maximus nibh dapibus in. Phasellus lacinia nec leo at semper. Duis nisl odio, lacinia quis dui at, pretium tincidunt metus. Maecenas condimentum purus sit amet neque maximus tempor. Proin eros massa, ullamcorper eget rutrum eu, feugiat id purus.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="button secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row game-card">
                <div class="col-lg-12 col-xl-5 game-card-left">
                    <a href="#" class="js-video-button" data-video-id='DPBW_MFqeRs' data-channel="youtube"> <!-- Video link goes here -->
                        <div class="overlay">
                            <i class="fa fa-play fa-3x"></i>
                        </div>
                        <img src="{{asset('frontend/images/placeholder.jpg')}}" data-src="{{asset('frontend/images/game.jpg')}}" class="img-fluid b-lazy" alt="video thumbnail"> <!-- Video Thumbnail Img -->
                    </a>
                </div>
                <div class="col-lg-12 col-xl-7 game-card-right">
                    <h2 class="short-hr-left">Dog Fight</h2>
                    <p class="game-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis rhoncus nibh. Phasellus dignissim luctus consectetur. Fusce viverra est non purus ultrices, vel molestie massa tincidunt. <span class="expand colored strong" data-toggle="modal" data-target="#game1">Read More</span></p>
                </div>
                <!-- Modal -->
                <div class="modal fade game-modal" id="game1" tabindex="-1" role="dialog" aria-labelledby="scales" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title" id="scales">SWORDS &amp; SCALES</h1>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h2 class="short-hr-left">TEAM UP AND FIGHT DRAGONS</h2>
                                <p>Integer eget diam felis. Quisque et aliquet lectus, et lacinia turpis. Praesent eget pretium orci. Sed vestibulum rutrum volutpat. Curabitur feugiat arcu odio, quis convallis eros laoreet ac.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">MAKE FRIENDS</h2>
                                <p>Suspendisse ultricies, dui vitae convallis blandit, ipsum sem mattis diam, in egestas arcu lacus sed lectus. Donec at interdum tellus. Quisque pellentesque a felis et rutrum. Donec condimentum magna sit amet viverra convallis. Fusce accumsan efficitur orci a commodo.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">TRAIN YOUR DRAGON</h2>
                                <p>Mauris at sapien nibh. Integer id tellus vitae ante cursus pharetra. Vestibulum ultrices eleifend enim, quis maximus nibh dapibus in. Phasellus lacinia nec leo at semper. Duis nisl odio, lacinia quis dui at, pretium tincidunt metus. Maecenas condimentum purus sit amet neque maximus tempor. Proin eros massa, ullamcorper eget rutrum eu, feugiat id purus.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="button secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row game-card">
                <div class="col-lg-12 col-xl-5 game-card-left">
                    <a href="#" class="js-video-button" data-video-id='DPBW_MFqeRs' data-channel="youtube"> <!-- Video link goes here -->
                        <div class="overlay">
                            <i class="fa fa-play fa-3x"></i>
                        </div>
                        <img src="{{asset('frontend/images/placeholder.jpg')}}" data-src="{{asset('frontend/images/game.jpg')}}" class="img-fluid b-lazy" alt="video thumbnail"> <!-- Video Thumbnail Img -->
                    </a>
                </div>
                <div class="col-lg-12 col-xl-7 game-card-right">
                    <h2 class="short-hr-left">Xylophone</h2>
                    <p class="game-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis rhoncus nibh. Phasellus dignissim luctus consectetur. Fusce viverra est non purus ultrices, vel molestie massa tincidunt. <span class="expand colored strong" data-toggle="modal" data-target="#game1">Read More</span></p>
                </div>
                <!-- Modal -->
                <div class="modal fade game-modal" id="game1" tabindex="-1" role="dialog" aria-labelledby="scales" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title" id="scales">SWORDS &amp; SCALES</h1>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h2 class="short-hr-left">TEAM UP AND FIGHT DRAGONS</h2>
                                <p>Integer eget diam felis. Quisque et aliquet lectus, et lacinia turpis. Praesent eget pretium orci. Sed vestibulum rutrum volutpat. Curabitur feugiat arcu odio, quis convallis eros laoreet ac.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">MAKE FRIENDS</h2>
                                <p>Suspendisse ultricies, dui vitae convallis blandit, ipsum sem mattis diam, in egestas arcu lacus sed lectus. Donec at interdum tellus. Quisque pellentesque a felis et rutrum. Donec condimentum magna sit amet viverra convallis. Fusce accumsan efficitur orci a commodo.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">TRAIN YOUR DRAGON</h2>
                                <p>Mauris at sapien nibh. Integer id tellus vitae ante cursus pharetra. Vestibulum ultrices eleifend enim, quis maximus nibh dapibus in. Phasellus lacinia nec leo at semper. Duis nisl odio, lacinia quis dui at, pretium tincidunt metus. Maecenas condimentum purus sit amet neque maximus tempor. Proin eros massa, ullamcorper eget rutrum eu, feugiat id purus.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="button secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row game-card">
                <div class="col-lg-12 col-xl-5 game-card-left">
                    <a href="#" class="js-video-button" data-video-id='DPBW_MFqeRs' data-channel="youtube"> <!-- Video link goes here -->
                        <div class="overlay">
                            <i class="fa fa-play fa-3x"></i>
                        </div>
                        <img src="{{asset('frontend/images/placeholder.jpg')}}" data-src="{{asset('frontend/images/game.jpg')}}" class="img-fluid b-lazy" alt="video thumbnail"> <!-- Video Thumbnail Img -->
                    </a>
                </div>
                <div class="col-lg-12 col-xl-7 game-card-right">
                    <h2 class="short-hr-left">Spy Alarm</h2>
                    <p class="game-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis rhoncus nibh. Phasellus dignissim luctus consectetur. Fusce viverra est non purus ultrices, vel molestie massa tincidunt. <span class="expand colored strong" data-toggle="modal" data-target="#game1">Read More</span></p>
                </div>
                <!-- Modal -->
                <div class="modal fade game-modal" id="game1" tabindex="-1" role="dialog" aria-labelledby="scales" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title" id="scales">SWORDS &amp; SCALES</h1>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h2 class="short-hr-left">TEAM UP AND FIGHT DRAGONS</h2>
                                <p>Integer eget diam felis. Quisque et aliquet lectus, et lacinia turpis. Praesent eget pretium orci. Sed vestibulum rutrum volutpat. Curabitur feugiat arcu odio, quis convallis eros laoreet ac.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">MAKE FRIENDS</h2>
                                <p>Suspendisse ultricies, dui vitae convallis blandit, ipsum sem mattis diam, in egestas arcu lacus sed lectus. Donec at interdum tellus. Quisque pellentesque a felis et rutrum. Donec condimentum magna sit amet viverra convallis. Fusce accumsan efficitur orci a commodo.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">TRAIN YOUR DRAGON</h2>
                                <p>Mauris at sapien nibh. Integer id tellus vitae ante cursus pharetra. Vestibulum ultrices eleifend enim, quis maximus nibh dapibus in. Phasellus lacinia nec leo at semper. Duis nisl odio, lacinia quis dui at, pretium tincidunt metus. Maecenas condimentum purus sit amet neque maximus tempor. Proin eros massa, ullamcorper eget rutrum eu, feugiat id purus.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="button secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row game-card">
                <div class="col-lg-12 col-xl-5 game-card-left">
                    <a href="#" class="js-video-button" data-video-id='DPBW_MFqeRs' data-channel="youtube"> <!-- Video link goes here -->
                        <div class="overlay">
                            <i class="fa fa-play fa-3x"></i>
                        </div>
                        <img src="{{asset('frontend/images/placeholder.jpg')}}" data-src="{{asset('frontend/images/game.jpg')}}" class="img-fluid b-lazy" alt="video thumbnail"> <!-- Video Thumbnail Img -->
                    </a>
                </div>
                <div class="col-lg-12 col-xl-7 game-card-right">
                    <h2 class="short-hr-left">Hand Pan</h2>
                    <p class="game-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis rhoncus nibh. Phasellus dignissim luctus consectetur. Fusce viverra est non purus ultrices, vel molestie massa tincidunt. <span class="expand colored strong" data-toggle="modal" data-target="#game1">Read More</span></p>
                </div>
                <!-- Modal -->
                <div class="modal fade game-modal" id="game1" tabindex="-1" role="dialog" aria-labelledby="scales" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title" id="scales">SWORDS &amp; SCALES</h1>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h2 class="short-hr-left">TEAM UP AND FIGHT DRAGONS</h2>
                                <p>Integer eget diam felis. Quisque et aliquet lectus, et lacinia turpis. Praesent eget pretium orci. Sed vestibulum rutrum volutpat. Curabitur feugiat arcu odio, quis convallis eros laoreet ac.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">MAKE FRIENDS</h2>
                                <p>Suspendisse ultricies, dui vitae convallis blandit, ipsum sem mattis diam, in egestas arcu lacus sed lectus. Donec at interdum tellus. Quisque pellentesque a felis et rutrum. Donec condimentum magna sit amet viverra convallis. Fusce accumsan efficitur orci a commodo.</p>
                                <img class="img-fluid" src="{{asset('frontend/images/game_large.jpg')}}" alt="screenshot">
                                <br>
                                <h2 class="short-hr-left">TRAIN YOUR DRAGON</h2>
                                <p>Mauris at sapien nibh. Integer id tellus vitae ante cursus pharetra. Vestibulum ultrices eleifend enim, quis maximus nibh dapibus in. Phasellus lacinia nec leo at semper. Duis nisl odio, lacinia quis dui at, pretium tincidunt metus. Maecenas condimentum purus sit amet neque maximus tempor. Proin eros massa, ullamcorper eget rutrum eu, feugiat id purus.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="button secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div id="careers" class='large-margin'>
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="short-hr-center">OUR NEWSLETTER</h2>
                <p>Stay up to date with the team and our products by subscribing to our newsletter.</p>
                <form id="newsletter" data-toggle="validator">
                    <input type="email" id="emailsign" placeholder="Your email adress"> <!-- Email Field -->
                    <button type="submit" id="form-signup" class="button">SUBSCRIBE</button>
                    <div id="msgSignup" class="h3 text-center hidden"></div>
                </form>
            </div>
        </div>
    </div>
    <!-- /// CONTACT SECTION /// -->
    <div id="contact" class="large-margin">
        <a href="contact"></a><!-- Nav Anchor -->
        <div class="row heading tiny-margin">
            <div class="col-md-auto">
                <h1 class="animation-element slide-down">GET IN <span class="colored">TOUCH</span></h1>
            </div>
            <div class="col">
                <hr class="animation-element extend">
            </div>
        </div>
        <div class="">
            <div class="row small-margin">
                <div class="col-md-11">
                    <p>We would love to hear from you. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer viverra laoreet dolor sit amet blandit. Ut suscipit nisl ut risus volutpat malesuada.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h2 class="short-hr-left">LEAVE US A MESSAGE</h2>
                    <form id="contactForm" data-toggle="validator">
                        <div class="form-group">
                            <!-- Name Field -->
                            <input type="text" id="name" placeholder="Name*" required size="35" data-error="Name is required">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <!-- Email Field -->
                            <input type="email" id="email" placeholder="Email*" required size="35" data-error="Email is required">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <!-- Message Field -->
                            <textarea id="message" name="message" placeholder="Message*" required data-error="Message cannot be empty"></textarea>
                            <p class="subtle">* required field</p>
                            <div class="help-block with-errors"></div>
                            <!-- Submit Button -->
                            <button type="submit" class="button">SEND MESSAGE</button>
                            <!-- Success Message -->
                            <div id="msgSubmit" class="text-center hidden"></div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <h2 class="short-hr-left">OUR DETAILS</h2>
                    <div id="contact-info">
                        <ul>
                            <li><i class="fa fa-phone"></i><p>Phone: <span class="colored"><a href="tel:+1(803)635585">+1 (803) 635 585</a></span></p></li>
                            <li><i class="fa fa-envelope"></i><p>Email: <span class="colored"><a href="mailto:office@example.com">office@example.com</a></span></p></li>
                            <li><i class="fa fa-globe"></i><p>Website: <span class="colored"><a href="www.atypicalthemes.com" target="_blank">www.atypicalthemes.com</a></span></p></li>
                            <li><i class="fa fa-map-marker"></i><p>Address: <span class="colored">1168 12th Street East Oconomowoc, WI 53066</span></p></li>
                        </ul>
                    </div>
                    <!-- Google Map -->
                    <div id="map-canvas"></div>
                </div>
            </div>
        </div>
    </div>
</div><!-- Main Container End -->
<!-- /// FOOTER /// -->
<footer id="main-footer">
    <div id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p id="copyright">&copy; Atypical Themes <span id="year"> </span></p><!-- Copyright Text -->
                    <ul class="social-links"> <!-- Social Media Icons -->
                        <li><a href="#"><i class="fa fa-facebook fa-lg icon-social"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter  fa-lg icon-social"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus fa-lg icon-social"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin fa-lg icon-social"></i></a>
                        <li><a href="#"><i class="fa fa-pinterest fa-lg icon-social"></i></a>
                        <li><a href="#"><i class="fa fa-instagram fa-lg icon-social"></i></a>
                    </ul>
                </div>
            </div>
        </div><!-- Container End -->
    </div>
</footer><!-- Footer End -->

<!-- //// SCRIPTS //// -->
<script src="{{asset('frontend/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('frontend/js/popper.min.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/js/blazy.min.js')}}"></script>
<script src="{{asset('frontend/js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('frontend/js/lightbox.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery-modal-video.min.js')}}"></script>
<script src="{{asset('frontend/js/validator.min.js')}}"></script>
<script src="{{asset('frontend/js/strider.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB64kJJiSynOc9ZqkNMOyl94cvsw5Z2uno"></script>
</body>
</html>
