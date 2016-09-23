<!DOCTYPE HTML>
<html>
    <head>
        <title>Assignment 2 - Michael Fernandez</title>
    </head>
    <body>
<!--1) Each player gets the "right amount" of cards to get close to 42 (20pts)-->
<!--2) The cards are not duplicated (15pts)-->
<!--3) The total points per player is displayed properly (15pts)-->
<!--4) The winner(s) is(are) displayed properly with the earned points (15pts)-->
<!--5) Players pictures are displayed RANDOMLY (10pts)-->
<!--6) Your contribution in GitHub is similar to your teammates (15pts)-->
<!--7) There is an external CSS file with 10 rules (10pts)-->


<!--Each player gets from four to six random cards.-->
<!--Each card must be different (-->
<!--no duplicated -->
<!--values).-->
<!--Jack is 11 points, Queen 12, and King 13. Ace is always one.-->
<!--The player with the sum of card values -->
<!--lower-->
<!--and closer to 42 wins.-->
<!--Values greater than 42 lose the game automatically.-->

<?php
$cardsArrayIndex = [
    "Ace of Hearts",
    "Two of Hearts", 
    "Three of Hearts", 
    "Four of Hearts", 
    "Five of Hearts", 
    "Six of Hearts", 
    "Seven of Hearts",
    "Eight of Hearts",
    "Nine of Hearts",
    "Jack of Hearts",
    "Queen of Hearts",
    "King of Hearts",
    "Ace of Diamonds",
    "Two of Diamonds", 
    "Three of Diamonds", 
    "Four of Diamonds", 
    "Five of Diamonds", 
    "Six of Diamonds", 
    "Seven of Diamonds",
    "Eight of Diamonds",
    "Nine of Diamonds",
    "Jack of Diamonds",
    "Queen of Diamonds",
    "King of Diamonds",
    "Ace of Clubs",
    "Two of Clubs", 
    "Three of Clubs", 
    "Four of Clubs", 
    "Five of Clubs", 
    "Six of Clubs", 
    "Seven of Clubs",
    "Eight of Clubs",
    "Nine of Clubs",
    "Jack of Clubs",
    "Queen of Clubs",
    "King of Clubs",
    "Ace of Spades",
    "Two of Spades", 
    "Three of Spades", 
    "Four of Spades", 
    "Five of Spades", 
    "Six of Spades", 
    "Seven of Spades",
    "Eight of Spades",
    "Nine of Spades",
    "Jack of Spades",
    "Queen of Spades",
    "King of Spades"
    ];
    
    
    shuffle ($cardsArrayIndex);
    echo "Your cards have been shuffled<br />";
    
    $numCards1 = rand(4, 6);
    $numCards2 = rand(4, 6);
    $numCards3 = rand(4, 6);
    $numCards4 = rand(4, 6);
    
    $player1Hand[numCards1];
    
    foreach($cardsArrayIndex as $card){
        echo $card."<br />";
    }
?>
    </body>
</html>