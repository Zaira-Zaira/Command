<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Technos Prod</title>
  <link rel="stylesheet" href="./css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet" />
</head>
<body>
  <header>
    <h1>Technos Prod</h1>
    <h2>Formulaire de commande</h2>
  </header>
<main>
  <form action="#" method="post">
  <?php
    include('./src/formControll.php');
    if(isset($_POST['send'])){
      $newProducts= new FormController($_POST['tablettes'], $_POST['pc'], $_POST['portable'], $_POST['adresse']);
       print $newProducts->warningMsg();
       if($newProducts->warningMessages())
       {
         $_SESSION['tablettes'] = $_POST['tablettes'];
         $_SESSION['pc'] = $_POST['pc'];
         $_SESSION['portable'] = $_POST['portable'];
         $_SESSION['adresse'] = $_POST['adresse'];
         header('Location: validation_command.php');
         exit();
       }
       
      }
    ?>
    <table>
      <thead>
        <tr>
          <th>Produits</th>
          <th>Quantité</th>
        </tr>
      </thead>
      <tr>
        <td><label for="tablettes">Tablettes</label></td>
        <td><input type="number" name="tablettes" id="tablettes" placeholder="0" autofocus ></td>
      </tr>
      <tr>
        <td><label for="pc">Pc</label></td>
        <td><input type="number"  name="pc"  id="pc" placeholder="0" ></td>
      </tr>
      <tr>
        <td><label for="portable">Portable</label></td>
        <td><input type="number" name="portable" id="portable" placeholder="0" ></td>
      </tr>
      <tr>
        <td><label for="adresse">Adresse</label></td>
        <td><input type="text" name="adresse" id="adresse" placeholder="Adresse" ></td>
      </tr>
      <tfoot>
        <tr>
          <td colspan=2><input type=submit name="send" value="Envoyer la commande" aria-label="submit"></td>
        </tr>
    </tfoot>
    </table>
  </form>  

</main>

</body>
</html>
