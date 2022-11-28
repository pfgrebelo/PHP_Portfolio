<?php
    if(isset($_GET['p'])){
        $p=$_GET['p'];
        if($p == 'home')
            include('content/pages/home.php');
        else if($p == 'about-me')
            include('content/pages/about-me.php');
        else if($p == 'projects')
            include('content/pages/projects.php');
        else if($p == 'contact')
            include('content/pages/contact.php');
        else
            include('content/pages/404.php');
    } else
        include('content/pages/home.php');
?>