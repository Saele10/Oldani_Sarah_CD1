<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Pokemon Cards</title>
</head>

<body>
    <div class="sideBar">
        <h2>View Pokemon by :</h2>
        <ul>
            <li>
                <a href="#">Generation</a>
            </li>
            <li>
                <a href="type.php">Type</a>
            </li>
        </ul>
    </div>

    <header>

        <img src="img/menu.png" alt="Menu" id="menu" class="icone">
        <a href="index.php"><img src="img/logo.png" alt="Logo Pokemon" id="logo"></a>
        <div>
            <img src="img/darkMode.png" alt="Dark Mode" id="dark" class="icone">
            <img src="img/profile.png" alt="profile" id="profile" class="icone">
            <img src="img/loupe.png" alt="Search" id="loupe" class="icone">
        </div>
    </header>

    <main class="forms">
        <section class="signIn">
            <div class="success">
                <ul>
                    <li>Form sent. Thank you !</li>
                </ul>
            </div>
            <div class="errorPassword">
                <ul>
                    <li>Your password must have at least 8 characters</li>
                    <li>Your password must contain a special character</li>
                    <li>Your password must contain a number</li>
                </ul>
            </div>
            <div class="errorPseudo">
                <ul>
                    <li>Your pseudo must contain more then 5 character</li>
                </ul>
            </div>
            <h3>Sign In :</h3>
            <form action="">
                <div>
                    <label for="name">Name :</label>
                    <input type="text" name="name" id="name">
                </div>
                <div>
                    <label for="firstName">First name :</label>
                    <input type="text" name="firstName" id="firstName">
                </div>
                <div class="radioSexe">
                    <p>Sexe :</p>
                    <input type="radio" name="sexe" id="male" checked>
                    <label for="male">Male</label>
                    <input type="radio" name="sexe" id="female">
                    <label for="female">Female</label>
                    <input type="radio" name="sexe" id="other">
                    <label for="other">Other</label>
                </div>
                <div>
                    <label for="pseudo">Pseudo :</label>
                    <input type="text" name="pseudo" id="pseudo">
                </div>
                <div>
                    <label for="email">Email :</label>
                    <input type="email" name="email" id="email">
                </div>
                <div>
                    <label for="password">Create a password :</label>
                    <input type="password" name="password" id="password">
                </div>
                <div>
                    <label for="password2">Confirm your password :</label>
                    <input type="password" name="password2" id="password2">
                </div>
                <button type="submit">Send</button>
            </form>
        </section>
        <!-- <section class="logIn">
            <form action="">
                <div>
                    <label for="pseudo">Pseudo</label>
                    <input type="text" name="pseudo" id="pseudo">
                </div>
                <div>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email">
                </div>
                <div>
                    <label for="password">password</label>
                    <input type="password" name="password" id="password">
                </div>
                <button type="submit">Send</button>
            </form>
        </section>-->
    </main>








    <script src="form.js"></script>

    <script src="main.js"></script>
</body>

</html>