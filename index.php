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
    "Ace" => "Hearts",
    "Two" => "Hearts", 
    "Three" => "Hearts", 
    "Four" => "Hearts", 
    "Five" => "Hearts", 
    "Six" => "Hearts", 
    "Seven" => "Hearts",
    "Eight" => "Hearts",
    "Nine" => "Hearts",
    "Jack" => "Hearts",
    "Queen" => "Hearts",
    "King" => "Hearts",
    
    "Ace" => "Diamonds",
    "Two" => "Diamonds", 
    "Three" => "Diamonds", 
    "Four" => "Diamonds", 
    "Five" => "Diamonds", 
    "Six" => "Diamonds", 
    "Seven" => "Diamonds",
    "Eight" => "Diamonds",
    "Nine" => "Diamonds",
    "Jack" => "Diamonds",
    "Queen" => "Diamonds",
    "King" => "Diamonds",
    
    "Ace" => "Clubs",
    "Two" => "Clubs", 
    "Three" => "Clubs", 
    "Four" => "Clubs", 
    "Five" => "Clubs", 
    "Six" => "Clubs", 
    "Seven" => "Clubs",
    "Eight" => "Clubs",
    "Nine" => "Clubs",
    "Jack" => "Clubs",
    "Queen" => "Clubs",
    "King" => "Clubs",
    
    "Ace" => "Spades",
    "Two" => "Spades", 
    "Three" => "Spades", 
    "Four" => "Spades", 
    "Five" => "Spades", 
    "Six" => "Spades", 
    "Seven" => "Spades",
    "Eight" => "Spades",
    "Nine" => "Spades",
    "Jack" => "Spades",
    "Queen" => "Spades",
    "King" => "Spades"
    ];

?>
    </body>
</html>