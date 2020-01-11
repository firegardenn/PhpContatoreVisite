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
<?php if ($_SESSION['count']==1){ echo("<h2>Benvenuto!</h2>E' la prima volta che ti vedo");}
    else{echo( "<h2>Ciao!</h2>hai già visitato il sito " .$_SESSION['count']." volte");}?>
    

</body>
</html>