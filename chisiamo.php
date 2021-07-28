<?php
$title = "chi siamo";
include "header.php";
?>


<body>
    <div class="container">
        <?php
        echo printTitle("Hello Word", "Hello $nome $cognome");
        echo printMessage("In php si possono usare le variabili ($) all'interno delle virgolette (\" \") senza interrompere la stringa: eta: $eta", "secondary");
        echo printMessage("In php si possono usare le variabili ($) all'interno degli apici (' ') interrompendo la stringa e concatenando con il punto (.): eta: " . $eta, "secondary");
        echo printMessage("In php si possono usare le virgolette ($) all'interno deglle virgolette (\" \") anteponendo il backslash (\) alle virgolette che vogliamo ignorare", "secondary");
        echo printMessage("In php si possono usare le variabilio numeriche per fare operazioni: $eta * 2 = " . $eta * 2, "secondary");

        $message = $errore ? $errore : $messaggio;
        $type = $errore ? "danger" : "success";
        echo printMessage($message, $type); 
        
        $link = printLink("index.php", "home");
        $card_1 = array("type" => "danger", "body"=>"Hello world! $link");
        $card_2 = array("type" => "primary", "body"=>"Hello world! $link");
        
        if($invertiCard){
            echo printCard($card_1);
            echo printCard($card_2);
        }else{
            echo printCard($card_2);
            echo printCard($card_1);

        }

        ?>
    </div>
</body>

</html>