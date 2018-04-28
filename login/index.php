<?php include "../php/variables.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="../css/style.css">

    <title>Login &ndash; <?php echo $application_name; ?>r</title>
</head>
<body>
    <header class="header">
        <h1 class="heading-primary">Login &mdash; <?php echo $application_name; ?></h1>
        <nav class="nav">
            <ul class="nav__ul">
                <li class="nav__li"><a href="../" class="nav__link">Home</a></li>
                <!-- <li class="nav__li"><a href="/" class="nav__link">Sign up</a></li> -->
                <!-- <li class="nav__li"><a href="/" class="nav__link">My Account</a></li> -->
            </ul>
        </nav>
    </header>
    <main>
        <section class="section-login">
            <div class="form login">
                <form action="../php/login.php" class="form__form login__form" autocomplete="off" method="post">
                    <input type="text" name="username" id="username" class="form__input login__input" placeholder="Username" autocomplete="off"><br>
                    <input type="password" name="password" id="password" class="form__input login__input" placeholder="Password"><br>
                    <input type="submit" name="submit" id="submit" class="form__button login__button" value="Login">
                </form>
                <p class="form__p login__p">Don't have an account? <a href="../signup/">Sign up</a>.</p>
            </div>
            
        </section>
    </main>
</body>
</html>