<?php include "../php/variables.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="../css/style.css">

    <title>Sign Up &mdash; Task Manager</title>
</head>
<body>
    <header class="header">
        <h1 class="heading-primary">Sign Up &mdash; <?php echo $application_name; ?></h1>
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

        <?php 
        if(isset($_GET['e'])) {
            ?>
            
            <p class="error-primary">An error has occurred.</p>

            <?php
            if(isset($_GET['r'])) {

                ?>
                
                <p class="error-secondary">An account with that username has already been used. Please use a different username.</p>

                <?php
            }
        }
        ?>

            <div class="form signup">
                <form action="../php/signup.php" class="form__form signup__form" autocomplete="off" method="post">
                    <span class="form__required signup__required">*</span><input type="text" name="username" id="username" class="form__input signup__input" placeholder="Username" autocomplete="off" required><br>
                    <span class="form__required signup__required">*</span><input type="email" name="email" id="email" class="form__input signup__input" placeholder="Email" autocomplete="off" required><br>
                    <span class="form__required signup__required">*</span><input type="password" name="password" id="password" class="form__input signup__input" placeholder="Password" required><br>
                    <span class="form__required signup__required">*</span><input type="password" name="password_repeat" id="password-repeat" class="form__input signup__input" placeholder="Repeat Password" required><br>
                    <input type="submit" name="submit" id="submit" class="form__button signup__button" value="Sign Up">
                </form>
                <p class="form__p signup__p">Already have an account? <a href="../login/">Sign in</a>.</p>
            </div>
            
        </section>
    </main>
</body>
</html>