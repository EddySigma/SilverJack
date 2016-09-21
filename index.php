<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>
        
    <?php
        // Make card
        function displayCard($cardLocation){
        echo "<img class='card' src='" . $cardLocation . "'>";
        }
        
        function displayHand($cards){
            foreach ($cards as $card) {
                displayCard($card);
            }
        }
        
        
        displayCard("img/card_back.png");
        //displayCard("img/clubs/1.png");
        
        $cards = array("clubs","diamonds","hearts","spades");
        
        
        // make deck
        // make hands
        // show hands and users
    ?>
    </body>
</html>