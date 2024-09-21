<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Connexion</title>
    <link rel="stylesheet" href="login.css"/>
  </head>
  <body>

    <div id="bg"></div>

    <form action="function.php" method="post">
      <div class="form-field">
        <input type="text" id="username" name="username" placeholder="Nom d'utilisateur" required />
      </div>

      <div class="form-field">
        <input type="password" id="password" name="password" placeholder="Mot de passe" required />
      </div>

      <div class="form-field">
        <input type="submit" value="Se connecter">
      </div>
    </form>
  </body>
</html>
