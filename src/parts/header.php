<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js"
    integrity="sha512-WW8/jxkELe2CAiE4LvQfwm1rajOS8PHasCCx+knHG0gBHt8EXxS6T6tJRTGuDQVnluuAvMxWF4j8SNFDKceLFg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
  <nav class="text-center p-3">
    <?php if(!isset($_SESSION['username'])) : ?>
      <a href="index.php">Signin</a>
      <a href="signup.php">Signup</a>
    <?php endif; ?>
    <?php if(isset($_SESSION["username"])) : ?>
      <a href="post-list.php">Post list</a> 
      <p>connecté en tant que: <?= $_SESSION["username"]; ?></p>
      <a href="scripts/disconnect.php">se déconnecter</a>
    <?php endif; ?>
  </nav>