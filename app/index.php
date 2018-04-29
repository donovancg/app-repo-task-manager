<?php include "../php/variables.php"; ?>
<?php include "../php/db.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">

    <title>Jobs &ndash; <?php echo $application_name; ?></title>
</head>
<body>
    <header class="header">
        <h1 class="heading-primary">Jobs &ndash; <?php echo $application_name; ?></h1>
        <nav class="nav">
            <ul class="nav__ul">
                <li class="nav__li"><a href="../" class="nav__link">Home</a></li>
                <li class="nav__li"><a href="../login/" class="nav__link">Login</a></li>
                <!-- <li class="nav__li"><a href="../signup/" class="nav__link">Sign up</a></li> -->
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <h2 class="heading-secondary">Jobs</h2>
            <div class="app">
                <div class="app__container">

                    <div class="row">
                        <div class="col-1-of-4">
                            <div class="app__item">
                                <h3 class="heading-tertiary">Backyard Spray</h3>
                            </div>
                        </div>
                        <div class="col-1-of-4">
                            <div class="app__item">
                                <h3 class="heading-tertiary">Clean Gutters</h3>
                            </div>
                        </div>
                        <div class="col-1-of-4">
                            <div class="app__item">
                                <h3 class="heading-tertiary">Pressure-wash house</h3>
                            </div>
                        </div>
                        <div class="col-1-of-4">
                            <div class="app__item">
                                <h3 class="heading-tertiary">Dump run</h3>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="app__list">
                        <div class="app__item">Backyard spray</div>
                        <div class="app__item">Est. Time: 2 hours</div>
                        <div class="app__item">Priority: Medium</div>
                        <div class="app__item">Cost: </div>
                        <div class="app__item">Materials: Weed Killer</div>
                        <div class="app__item">Assigned to: </div>
                        <div class="app__item">Comments</div>
                        <div class="app__item"><a href="">Edit</a></div>
                        <div class="app__item"><a href="">Delete</a></div>
                    </div>
                    <div class="app__list">
                        <div class="app__item">Backyard spray</div>
                        <div class="app__item">Est. Time: 2 hours</div>
                        <div class="app__item">Priority: Medium</div>
                        <div class="app__item">Cost: </div>
                        <div class="app__item">Materials: Weed Killer</div>
                        <div class="app__item">Assigned to: </div>
                        <div class="app__item">Comments</div>
                        <div class="app__item"><a href="">Edit</a></div>
                        <div class="app__item"><a href="">Delete</a></div>
                    </div> -->
                </div>
            </div>
        </section>
    </main>
    <footer class="footer">
        <h3 class="footer__header heading-tertiary"><?php echo $application_name; ?></h3>
        <nav class="footer__nav">
            <ul class="footer__ul">
                <li class="footer__li"><a href="../login/">Home</a></li>
                <li class="footer__li"><a href="../login/">Login</a></li>
                <!-- <a class="footer__li"><a href="../login/">Sign Up</a></a> -->
            </ul>
        </nav>
    </footer>
    <section class="section__popup">
        <div class="popup--app">
            <div class="popup--app__content">
                <div class="popup--app__head">
                    <h3 class="heading__tertiary">Backyard Spray</h3>
                </div>

                <div class="popup--app__body">
                    <div class="row">
                        <div class="col-2-of-3">
                            <table class="popup--app__table">
                                <tr class="popup--app__tr">
                                    <td class="popup--app__td">Est Time: </td>
                                    <td class="popup--app__td">2 Hours</td>
                                </tr>
                                <tr class="popup--app__tr">
                                    <td class="popup--app__td">Priority: </td>
                                    <td class="popup--app__td">Medium</td>
                                </tr>
                                <tr class="popup--app__tr">
                                    <td class="popup--app__td">Cost: </td>
                                    <td class="popup--app__td">$0</td>
                                </tr>
                                <tr class="popup--app__tr">
                                    <td class="popup--app__td">Materials: </td>
                                    <td class="popup--app__td">Weed Killer</td>
                                </tr>
                                <tr class="popup--app__tr">
                                    <td class="popup--app__td">Assigned to: </td>
                                    <td class="popup--app__td">No one</td>
                                </tr>
                            </table>
                        </div>
                        

                        <div class="col-1-of-3">
                            <div class="popup--app__comments">
                                <p class="popup--app__heading">Comments</p>
                                <p class="popup--app__comments">None</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
                    
                <div class="popup--app__footer">

                </div>
            </div>
        </div>
    </section>
</body>
</html>