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
<?php if ($_SESSION['count']==1){ echo("<h2>Benvenuto!</h2><br> E' la prima volta che ti vedo");}
    else{echo( "Ciao hai già visitato il sito " .$_SESSION['count']." volte");}?>
    

</body>
</html>