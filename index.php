<!-- Heroku link
    https://contatorevisite.herokuapp.com/
-->
<?php
     
    session_start();
    if ($_SESSION['count']==null) 
     $_SESSION['count'] = 1;
    else
    $_SESSION['count']++;
?>


<html>
<head>
<title>Contatore pagina</title>
</head>

<body>
<h2><?php if ($_SESSION['count']==1){ echo("Benvenuto!<br> E' la prima volta che ti vedo");}
    else{echo( "Ciao hai già visitato il sito " .$_SESSION['count']." volte");}?>
    </h2>

</body>
</html>