<?php
    session_start();

    if(!isset($_GET['sayfa'])) { // eğer boşsa anasayfa varsayalım.
            $sayfa = 'anasayfa';
         } else {
            $sayfa = $_GET['sayfa'];
         }
         switch($sayfa) 
         {
            case 'anasayfa':
                include './view/anasayfa.php';
            break;
            case  'hakkimda':
                include './view/hakkimda.php';
            break;
            case 'iletisim':
                include './view/iletisim.php';
            break;
        
        default: // hiç birisi değilse 404 varsayalim
            include './public/sayfabulunamadi.php';
            break;
        }
    ?>