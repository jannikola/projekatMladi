   <?php

    $default_page = (isset($_GET['mid']))?$_GET['mid']:1;
    $pages = array(
        "1"=>"pages/pocetna.php",
        "2"=>"pages/vijesti.php",
        "3"=>"pages/projekti.php",
        "4"=>"pages/aktivnosti.php",
        "5"=>"pages/omladinskaPolitika.php",
        "6"=>"pages/linkovi.php",
        "7"=>"pages/kontakti.php",
        "10"=>"pages/oNama.php",
        //"search"=>"pages/searchPage.php"
    );

    if(isset($pages[$default_page])){
        require $pages[$default_page];
    }else{
        include $pages['1'];
    }
                 
?>