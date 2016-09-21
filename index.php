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
        
        function displayPlayerPic($playerLocation) {
            echo "<img class='player' src='" . $playerLocation . "'>";
        }
        
        function makeHand(){
            $cardCount = rand(4,7);
            $hand = array();
            for($i = 0; $i < $cardCount; $i++) {
                // get card
            }
        }
        
        function calculateScore($hand) {
            // add the values of the cards
        }
        
        function displayHand($cards){
            echo "<div class='hand'>"
            foreach ($cards as $card) {
                displayCard($card);
            }
            echo "</div>"
        }
        
        function displayPlayer($player){
            echo "<div class='hand'>";
            
            echo "</div>";
        }
        $player = array(
                // name
                "name" => "Ryo",
                // picture
                // hand
                "hand" => $hand,
                // score
                "score" => //calculate Score
            )
        
        displayCard("img/card_back.png");
        $cards = array("clubs","diamonds","hearts","spades");
        
        
        // make deck
        // make hands
        // show hands and users
    ?>
    </body>
</html>