<?php include "php/variables.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <title><?php echo $application_name; ?></title>
</head>
<body>
    <header class="header">
        <h1 class="heading-primary"><span class="heading-primary--main"><?php echo $application_name; ?></span><span class="heading-primary--sub">A Way to Organize Your Tasks</span></h1>
        <nav class="nav">
            <ul class="nav__ul">
                <li class="nav__li"><a href="login/" class="nav__link">Login</a></li>
                <li class="nav__li"><a href="signup/" class="nav__link">Sign Up</a></li>
                <li class="nav__li"><a href="contact/" class="nav__link">Contact Us</a></li>
                <li class="nav__li"><a href="help/" class="nav__link">Help</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="section-description">
            <div class="description">
                <h2 class="heading-secondary"><?php echo $application_name; ?> is an Application for Managing Your Tasks.</h2>
                <p class="description__p"><?php echo $application_name; ?> is a way to keep track of your tasks and to collaborate with others. <?php echo $application_name; ?> allows you to keep everything that you need to do in a safe place, and lets others see what they need to do. </p>

                <div class="description__row">
                    <h3 class="heading-tertiary">Simple Interface</h3>
                    <div class="row">
                        <div class="col-2-of-3">
                            <img class="description__img description__img--left" src="images/interface.JPG" id="js--w-1">
                        </div>
                        <div class="col-1-of-3">
                            <p>The simple user interface makes this application easy to use.</p>
                        </div>
                    </div>
                </div>

                <div class="description__row">
                    <h3 class="heading-tertiary">Share Your Work With Others</h3>
                    <div class="row">
                        <div class="col-1-of-3">
                            <p>You can add users to a sheet, and they can view and edit the tasks.</p>
                        </div>
                        <div class="col-2-of-3">
                            <img class="description__img description__img--right" src="images/interface.JPG" id="js--w-2">
                        </div>
                    </div>
                </div>

                <div class="description__row">
                    <h3 class="heading-tertiary">Works Across All Systems</h3>
                    <div class="row">
                        <div class="col-2-of-3">
                            <img class="description__img description__img--left" src="images/app.png"  id="js--w-3">
                        </div>
                        <div class="col-1-of-3">
                            <p><?php echo $application_name; ?> is usable across all standard devices.</p>
                        </div>
                    </div>
                </div>

                <div class="description__row">
                    <h3 class="heading-tertiary">Simple Interface</h3>
                    <div class="row">
                        <div class="col-1-of-3">
                            <p>The simple user interface makes this application easy to use.</p>
                        </div>
                        <div class="col-2-of-3">
                            <img class="description__img description__img--right" src="images/interface.JPG" id="js--w-4">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-plans" id="section-plans">
            <h2 class="heading-secondary">View Our Plans</h2>
            <div class="row">
                <div class="col-1-of-3">
                    <div class="card card-1">
                        <div class="card__side card__side--front card__side--front-1">
                            <div class="card__header card__header--front card__header--front-1">
                                <h3 class="card__heading card__heading--front">Basic</h3>
                            </div>
                            <div class="card__footer card__footer--front card__footer-1"></div>
                        </div>
                        <div class="card__side card__side--back card__side--back-1">
                            <div class="card__header card__header--back">
                                <h3 class="card__heading card__heading--back">Basic</h3>
                            </div>
                            <div class="card__main">
                                <div class="card__pricebox">
                                    <p class="card__pricing">Free</p>
                                </div>
                                <ul class="card__ul">
                                    <li class="card__li">Maximum of 10 sheets</li>
                                    <li class="card__li">Maximum of 10 users per sheet</li>
                                    <li class="card__li">Unlimited tasks per sheet</li>
                                </ul>
                            </div>
                            <div class="card__footer card__footer--back card__footer--back-1">
                                <span class="card__cta"><a href="?p=0#section-popup" class="card__cta--text">Sign Up</a></span>
                            </div>

                            
                        </div>
                    </div>
                </div>


                <div class="col-1-of-3">
                    <div class="card card-1">
                        <div class="card__side card__side--front card__side--front-2">
                            <div class="card__header card__header--front card__header--front-2">
                                <h3 class="card__heading card__heading--front">Pro</h3>
                            </div>
                            <div class="card__footer card__footer--front card__footer-2"></div>
                        </div>
                        <div class="card__side card__side--back card__side--back-2">
                            <div class="card__header card__header--back">
                                <h3 class="card__heading card__heading--back">Pro</h3>
                            </div>
                            <div class="card__main">
                                <div class="card__pricebox">
                                    <p class="card__pricing">$2.50 monthly subscription</p>
                                </div>
                                <ul class="card__ul">
                                    <li class="card__li">Maximum of 20 sheets</li>
                                    <li class="card__li">Unlimited users per sheet</li>
                                    <li class="card__li">Unlimited tasks per sheet</li>
                                </ul>
                            </div>
                            <div class="card__footer card__footer--back card__footer--back-2">
                                <span class="card__cta"><a href="?p=1#section-popup" class="card__cta--text">Subscribe</a></span>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-1-of-3">
                    <div class="card card-3">
                        <div class="card__side card__side--front card__side--front-3">
                            <div class="card__header card__header--front card__header--front-3">
                                <h3 class="card__heading card__heading--front">Premium</h3>
                            </div>
                            <div class="card__footer card__footer--front card__footer-3"></div>
                        </div>
                        <div class="card__side card__side--back card__side--back-3">
                            <div class="card__header card__header--back">
                                <h3 class="card__heading card__heading--back">Premium</h3>
                            </div>
                            <div class="card__main">
                                <div class="card__pricebox card__pricebox--2">
                                    <p class="card__pricing">$7 monthy subscription</p>
                                    <p class="card__pricing--small">or $75 permanent licence</p>
                                </div>
                                <ul class="card__ul">
                                    <li class="card__li">Unlimited sheets</li>
                                    <li class="card__li">Unlimited users per sheet</li>
                                    <li class="card__li">Unlimited tasks per sheet</li>
                                </ul>
                            </div>
                            <div class="card__footer card__footer--back card__footer--back-3">
                                    <span class="card__cta"><a href="?p=2#section-popup" class="card__cta--text">Subscribe</a></span>
                                    <!-- <a href="" class="card__cta--text">Subscribe</a> -->
                                
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section class="section-popup" id="section-popup">
            <div class="popup">
                <h3 class="heading-tertiary">
                <?php


                if(isset($_GET['p'])) {
                    $plan = $_GET['p'];
                    if($plan == 0) {
                        ?>Basic Subscription<?php
                    } else if($plan == 1) {
                        ?>Pro Subscription<?php
                    } else {
                        ?> Premium Subscription<?php
                    }
                }


                ?></h3>
                <div class="popup__body">
                    <a href="#section-plans" class="popup__close">&times;</a>
                    

                    <?php
                    if($plan == 0) {

                    ?>
                    <form action="php/signup.php" method="post" class="popup__form form">
                        <span class="form__required signup__required">*</span><input type="text" name="username" id="username" class="form__input signup__input" placeholder="Username" autocomplete="off" required><br>
                        <span class="form__required signup__required">*</span><input type="email" name="email" id="email" class="form__input signup__input" placeholder="Email" autocomplete="off" required><br>
                        <span class="form__required signup__required">*</span><input type="password" name="password" id="password" class="form__input signup__input" placeholder="Password" required><br>
                        <span class="form__required signup__required">*</span><input type="password" name="password_repeat" id="password-repeat" class="form__input signup__input" placeholder="Repeat Password" required><br>
                        <input type="submit" name="submit" id="submit" class="form__button signup__button" value="Sign Up">
                    </form>
                    <?php } else { ?>

                    <img src="images/credit cards.png" alt="Supported Credit Card Companies" class="popup__img form__img">
                    <form action="php/subscribe.php" class="popup__form form" method="post">
                        <label for="name">Name on card</label>
                        <input type="text" id="name" name="name" placeholder="Name on card" class="popup__input form__input"><br>
                        <label for="name">Card number</label>
                        <input type="text" id="number" name="number" placeholder="Card number" class="popup__input form__input"><br>
                        <label for="name">Expiry date</label>
                        <input type="date" id="expiry" name="expiry" placeholder="Expiry date" class="popup__input form__input"><br>
                        <label for="name">Security code</label>
                        <input type="text" id="code" name="code" placeholder="Security code" class="popup__input form__input"><br>
                        <label for="name">Zip/Postal code</label>
                        <input type="text" id="zip_code" name="zip_code" placeholder="Zip/Postal code" class="popup__input form__input"><br>
                        <button class="form__button"><i class="ion-ios-locked"></i>Pay $75</button>
                        <!-- <input type="text" name="" placeholder="" class="popup__input form__input"> -->
                    </form>
                    <?php } ?>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer">
        <h3 class="footer__header heading-tertiary"><?php echo $application_name; ?></h3>
        <nav class="footer__nav">
            <ul class="footer__ul">
                <li class="footer__li"><a href="login/">Login</a></li>
                <li class="footer__li"><a href="login/">Sign Up</a></li>
                <li class="footer__li"><a href="login/">Help</a></li>
            </ul>
        </nav>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>

<!-- 

    
                                <h3>Basic</h3>
                            
    / Home page
    /signup Page where people can create accounts. 
    /login page where people can access their accounts
    /users where user information is stored
    /users/name where logged in people can view their account
    /table where users can access tables that they are permited to view
    /table/name where tables are displayed
 -->