<?php include "../php/variables.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">

    <title>Contact Us &ndash; <?php echo $application_name; ?></title>
</head>
<body>
    <header class="header">
        <h1 class="heading-primary">Contact Us &ndash; <?php echo $application_name; ?></h1>
        <nav class="nav">
            <ul class="nav__ul">
                <li class="nav__li"><a href="../" class="nav__link">Home</a></li>
                <li class="nav__li"><a href="../login/" class="nav__link">Login</a></li>
                <!-- <li class="nav__li"><a href="../signup/" class="nav__link">Sign up</a></li> -->
            </ul>
        </nav>
    </header>
    <main>
        <section class="section-help">
            <h2 class="heading-secondary">Questions? Comments? Contact Us!</h2>
            <div class="help">
                <form action="../php/help.php" method="post" class="form">
                    <!-- <input type="text" class="form__input" id="name" name="name" placeholder="Name"><br> -->
                    <input type="text" class="form__input" id="username" name="username" placeholder="Username"><br>
                    <input type="text" class="form__input" id="email" name="email" placeholder="Email"><br>
                    <textarea maxlength="255" name="problem" id="problem" name="problem" class="form__textarea" placeholder="Comments (255 characters max)."></textarea><br>
                    <button class="form__button" id="submit" name="submit">Send</button>
                </form>
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
</body>
</html>