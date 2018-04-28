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

    <title>Task Manager</title>
</head>
<body>
    <header class="header">
        <h1 class="heading-primary"><?php echo $application_name; ?></h1>
        <nav class="nav">
            <ul class="nav__ul">
                <li class="nav__li"><a href="../" class="nav__link">Home</a></li>
                <li class="nav__li"><a href="../login/" class="nav__link">Login</a></li>
                <li class="nav__li"><a href="../signup/" class="nav__link">Sign up</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="section-help">
            <h2 class="heading-secondary">Help</h2>
            <div class="help">

                <div class="help__tutorial help__tutorial--account">
                    <h3 class="heading-tertiary">Creating an account</h3>
                    <img src="../images/interface.JPG" alt="image1" class="help__img">
                </div>

                <form action="../php/help.php" method="post" class="form">
                    <h3 class="heading-tertiary">Can't find an answer? Ask us!</h3>
                    <!-- <input type="text" class="form__input" id="name" name="name" placeholder="Name"><br> -->
                    <input type="text" class="form__input" id="username" name="username" placeholder="Username"><br>
                    <input type="text" class="form__input" id="email" name="email" placeholder="Email"><br>
                    <textarea maxlength="255" name="problem" id="problem" name="problem" class="form__textarea" placeholder="Please relate the issue that you are experiencing (255 characters max)."></textarea><br>
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
                <li class="footer__li"><a href="../login/">Sign Up</a></li>
            </ul>
        </nav>
    </footer>
</body>
</html>