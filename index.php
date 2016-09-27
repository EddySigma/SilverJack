<!DOCTYPE html>
<html>
    <head>
        <title> </title>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>
        
    <?php
        // -----------------------------------------------------------------------------
        function generateDeck(){
            $cardVals = array("1","2","3","4","5","6","7","8","9","10","11","12","13");
            $cardSuits = array("hearts", "diamonds", "clubs", "spades");
        
                
            $deck = array();
            
            // build deck
            foreach($cardVals as $cVal){
                foreach($cardSuits as $cSuit){
                    $card = array(
                        "val" => $cVal,
                        "suit" => $cSuit,
                    );
                    // add the card to the deck
                    array_push($deck, $card);
                }
            }
            return $deck;
        }
        // -----------------------------------------------------------------------------
        
        // -----------------------------------------------------------------------------
        function generateHands($deck){
            
            $hands = array();
            
            $indexOfDeck = 0; // Index for pulling cards from the deck.
            
            for($i =0; $i < 4; $i++) {
                
                $numCards = rand(4, 6); // random number of cards
                $cards = array(); // cards that make up the hand
                $score = 0;
                
                for($x = 0; $x < $numCards; $x++){ //numCards is the number of cards that the player will have. This number is random between 4 to 6 cards as determined in the lines before this line of code.
                    $card = $deck[$indexOfDeck]; // Scroll through the index of the playser array/hand, with the variable x. cardsArrayIndex has a different variable that maintains its position after each loops for each of the students.
                    array_push($cards, $card); // add a card to the hand
                    $indexOfDeck++; // Equivalent to pulling the top card off the deck.
                    $score += (int)$card["val"]; // add to the score the value of the card.
                }
                
                // build the hand
                $hand = array(
                    "cards" => $cards,
                    "score" => $score,
                );
                
                // add the hand to the array
                array_push($hands, $hand);
            }
            
            return $hands;
        }
        // -----------------------------------------------------------------------------
        
        // -----------------------------------------------------------------------------
        function makePlayers($hands) {
            $names = array("red", "blue", "yellow", "white");
            $players = array();
            
            $i = 0;
            
            foreach($hands as $aHand) {
                $player = array(
                    "hand" => $aHand,
                    "pic" => "GenericUser.png",
                    "name" => $names[$i],
                );
                array_push($players, $player);
                $i+=1;
            }
            return $players;
        }
        // -----------------------------------------------------------------------------
        
    
        function displayCard($cardLocation){
            echo "<img class='card' src='img/" . $cardLocation["suit"] . "/" . $cardLocation["val"] . ".png'>";
        }
        
        function displayPlayerPic($name) {
            echo "<div class='picture'>";
            echo "<img class='player_pic' src='img/" . $name . ".gif'>";
            echo "</div>";
        }
        
        function displayScore($hand){
            echo "<div class ='score'>";
            echo "<h1> " . $hand["score"] . "</h1>";
            echo "</div>";
        }
        
        
        function displayHand($hand){
            echo "<div class='hand'>";
            foreach($hand["cards"] as $cards){
                displayCard($cards);
            }
            echo "</div>";
        }
        
        function determineVictor($players)
        {
            $scores = array();
            foreach ($players as $player) {
                if($player["hand"]["score"] > 42){
                    $player["hand"]["score"] = 0;
                }
                
                $playerScore = array(
                    "name" => $player["name"],
                    "score" => $player["hand"]["score"],
                    );
                array_push($scores, $playerScore);
            }
            
            $scoreList = array();
            foreach ($scores as $key => $value) {
                $scoreList[$key] = $value["score"];
            }
            array_multisort($scoreList, SORT_DESC, $scores);
            //print_r ($scoreList);
            
            if($scores[0]["score"] == $scores[1]["score"]) {
                return "tie";
            } else {
                return $scores[0]["name"];
            }
        }
        
        function displayPlayer($player){
            // space for the player
            echo "<div class='player'>";
            
            // picture
            displayPlayerPic($player["name"]);
            // hand
            displayHand($player["hand"]);
            // score
            displayScore($player["hand"]);
            //print_r ($player);
            
            
            echo "</div>";
        }
        
        $deck = generateDeck();
        shuffle($deck);
        $playerHands = generateHands($deck);
        $allPlayers = makePlayers($playerHands);
        
        echo "<div class='players'>";
        foreach($allPlayers as $aPlayer) {
            displayPlayer($aPlayer);
        }
        echo "</div>";
        $winner = determineVictor($allPlayers);
        if($winner == "tie") {
            echo "<h1 class='winner'>Tie</h1>";
        } else {
            echo "<h1 class='winner'>" . $winner . " wins </h1>";
        }
    ?>
    </body>
</html>