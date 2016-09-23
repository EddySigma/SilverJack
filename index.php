<!DOCTYPE HTML>
<html>
    <head>
        <title>Silverjack - Michael Fernandez</title>
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
    
    $numCards1 = rand(4, 6);
    $numCards2 = rand(4, 6);
    $numCards3 = rand(4, 6);
    $numCards4 = rand(4, 6);
    
    
    // All player scores start at 0;
    $score1 = 0;
    $score2 = 0;
    $score3 = 0;
    $score4 = 0;
    
    $indexOfDeck = 0; // Index for pulling cards from the deck. 
    for($x = 0; $x < $numCards1; $x++){ //numCards# is the number of cards that the player will have. This number is random between 4 to 6 cards as determined in the lines before this line of code.
        $player1Hand[$x] = $cardsArrayIndex[$indexOfDeck]; // Scroll through the index of the playser array/hand, with the variable x. cardsArrayIndex has a different variable that maintains its position after each loops for each of the students.
        $indexOfDeck++; // Equivalent to pulling the top card off the deck.
    }
    
    for($x = 0; $x < $numCards2; $x++){
        $player2Hand[$x] = $cardsArrayIndex[$indexOfDeck]; // Scroll through the index of the playser array/hand, with the variable x. cardsArrayIndex has a different variable that maintains its position after each loops for each of the students.
        $indexOfDeck++; // Equivalent to pulling the top card off the deck.
    }
    
    for($x = 0; $x < $numCards3; $x++){
        $player3Hand[$x] = $cardsArrayIndex[$indexOfDeck]; // Scroll through the index of the playser array/hand, with the variable x. cardsArrayIndex has a different variable that maintains its position after each loops for each of the students.
        $indexOfDeck++; // Equivalent to pulling the top card off the deck.
    }
    
    for($x = 0; $x < $numCards4; $x++){
        $player4Hand[$x] = $cardsArrayIndex[$indexOfDeck]; // Scroll through the index of the playser array/hand, with the variable x. cardsArrayIndex has a different variable that maintains its position after each loops for each of the students.
        $indexOfDeck++; // Equivalent to pulling the top card off the deck.
    }
    
    for($x = 0; $x < 6; $x++){ // 6 is the maximum number of cards
        switch($player1Hand[$x]){
            case "Ace of Hearts":
                $player1Hand[$x] = "<img src='img/hearts/1.png' alt='image' />";
                $score1 += 1;
                break;
            case "Two of Hearts":
                $player1Hand[$x] = "<img src='img/hearts/2.png' alt='image' />";
                $score1 += 2;
                break;
            case "Three of Hearts":
                $player1Hand[$x] = "<img src='img/hearts/3.png' alt='image' />";
                $score1 += 3;
                break;
            case "Four of Hearts":
                $player1Hand[$x] = "<img src='img/hearts/4.png' alt='image' />";
                $score1 += 4;
                break;
            case "Five of Hearts":
                $player1Hand[$x] = "<img src='img/hearts/5.png' alt='image' />";
                $score1 += 5;
                break;
            case "Six of Hearts":
                $player1Hand[$x] = "<img src='img/hearts/6.png' alt='image' />";
                $score1 += 6;
                break;
            case "Seven of Hearts":
                $player1Hand[$x] = "<img src='img/hearts/7.png' alt='image' />";
                $score1 += 7;
                break;
            case "Eight of Hearts":
                $player1Hand[$x] = "<img src='img/hearts/8.png' alt='image' />";
                $score1 += 8;
                break;
            case "Nine of Hearts":
                $player1Hand[$x] = "<img src='img/hearts/9.png' alt='image' />";
                $score1 += 9;
                break;
            case "Ten of Hearts":
                $player1Hand[$x] = "<img src='img/hearts/10.png' alt='image' />";
                $score1 += 10;
                break;
            case "Jack of Hearts":
                $player1Hand[$x] = "<img src='img/hearts/11.png' alt='image' />";
                $score1 += 11;
                break;
            case "Queen of Hearts":
                $player1Hand[$x] = "<img src='img/hearts/12.png' alt='image' />";
                $score1 += 12;
                break;
            case "King of Hearts":
                $player1Hand[$x] = "<img src='img/hearts/13.png' alt='image' />";
                $score1 += 13;
                break;
            case "Ace of Diamonds":
                $player1Hand[$x] = "<img src='img/diamonds/1.png' alt='image' />";
                $score1 += 1;
                break;
            case "Two of Diamonds":
                $player1Hand[$x] = "<img src='img/diamonds/2.png' alt='image' />";
                $score1 += 2;
                break;
            case "Three of Diamonds":
                $player1Hand[$x] = "<img src='img/diamonds/3.png' alt='image' />";
                $score1 += 3;
                break;
            case "Four of Diamonds":
                $player1Hand[$x] = "<img src='img/diamonds/4.png' alt='image' />";
                $score1 += 4;
                break;
            case "Five of Diamonds":
                $player1Hand[$x] = "<img src='img/diamonds/5.png' alt='image' />";
                $score1 += 5;
                break;
            case "Six of Diamonds":
                $player1Hand[$x] = "<img src='img/diamonds/6.png' alt='image' />";
                $score1 += 6;
                break;
            case "Seven of Diamonds":
                $player1Hand[$x] = "<img src='img/diamonds/7.png' alt='image' />";
                $score1 += 7;
                break;
            case "Eight of Diamonds":
                $player1Hand[$x] = "<img src='img/diamonds/8.png' alt='image' />";
                $score1 += 8;
                break;
            case "Nine of Diamonds":
                $player1Hand[$x] = "<img src='img/diamonds/9.png' alt='image' />";
                $score1 += 9;
                break;
            case "Ten of Diamonds":
                $player1Hand[$x] = "<img src='img/diamonds/10.png' alt='image' />";
                $score1 += 10;
                break;
            case "Jack of Diamonds":
                $player1Hand[$x] = "<img src='img/diamonds/11.png' alt='image' />";
                $score1 += 11;
                break;
            case "Queen of Diamonds":
                $player1Hand[$x] = "<img src='img/diamonds/12.png' alt='image' />";
                $score1 += 12;
                break;
            case "King of Diamonds":
                $player1Hand[$x] = "<img src='img/diamonds/13.png' alt='image' />";
                $score1 += 13;
                break;
            case "Ace of Clubs":
                $player1Hand[$x] = "<img src='img/clubs/1.png' alt='image' />";
                $score1 += 1;
                break;
            case "Two of Clubs":
                $player1Hand[$x] = "<img src='img/clubs/2.png' alt='image' />";
                $score1 += 2;
                break;
            case "Three of Clubs":
                $player1Hand[$x] = "<img src='img/clubs/3.png' alt='image' />";
                $score1 += 3;
                break;
            case "Four of Clubs":
                $player1Hand[$x] = "<img src='img/clubs/4.png' alt='image' />";
                $score1 += 4;
                break;
            case "Five of Clubs":
                $player1Hand[$x] = "<img src='img/clubs/5.png' alt='image' />";
                $score1 += 5;
                break;
            case "Six of Clubs":
                $player1Hand[$x] = "<img src='img/clubs/6.png' alt='image' />";
                $score1 += 6;
                break;
            case "Seven of Clubs":
                $player1Hand[$x] = "<img src='img/clubs/7.png' alt='image' />";
                $score1 += 7;
                break;
            case "Eight of Clubs":
                $player1Hand[$x] = "<img src='img/clubs/8.png' alt='image' />";
                $score1 += 8;
                break;
            case "Nine of Clubs":
                $player1Hand[$x] = "<img src='img/clubs/9.png' alt='image' />";
                $score1 += 9;
                break;
            case "Ten of Clubs":
                $player1Hand[$x] = "<img src='img/clubs/10.png' alt='image' />";
                $score1 += 10;
                break;
            case "Jack of Clubs":
                $player1Hand[$x] = "<img src='img/clubs/11.png' alt='image' />";
                $score1 += 11;
                break;
            case "Queen of Clubs":
                $player1Hand[$x] = "<img src='img/clubs/12.png' alt='image' />";
                $score1 += 12;
                break;
            case "King of Clubs":
                $player1Hand[$x] = "<img src='img/clubs/13.png' alt='image' />";
                $score1 += 13;
                break;
            case "Ace of Spades":
                $player1Hand[$x] = "<img src='img/spades/1.png' alt='image' />";
                $score1 += 1;
                break;
            case "Two of Spades":
                $player1Hand[$x] = "<img src='img/spades/2.png' alt='image' />";
                $score1 += 2;
                break;
            case "Three of Spades":
                $player1Hand[$x] = "<img src='img/spades/3.png' alt='image' />";
                $score1 += 3;
                break;
            case "Four of Spades":
                $player1Hand[$x] = "<img src='img/spades/4.png' alt='image' />";
                $score1 += 4;
                break;
            case "Five of Spades":
                $player1Hand[$x] = "<img src='img/spades/5.png' alt='image' />";
                $score1 += 5;
                break;
            case "Six of Spades":
                $player1Hand[$x] = "<img src='img/spades/6.png' alt='image' />";
                $score1 += 6;
                break;
            case "Seven of Spades":
                $player1Hand[$x] = "<img src='img/spades/7.png' alt='image' />";
                $score1 += 7;
                break;
            case "Eight of Spades":
                $player1Hand[$x] = "<img src='img/spades/8.png' alt='image' />";
                $score1 += 8;
                break;
            case "Nine of Spades":
                $player1Hand[$x] = "<img src='img/spades/9.png' alt='image' />";
                $score1 += 9;
                break;
            case "Ten of Spades":
                $player1Hand[$x] = "<img src='img/spades/10.png' alt='image' />";
                $score1 += 10;
                break;
            case "Jack of Spades":
                $player1Hand[$x] = "<img src='img/spades/11.png' alt='image' />";
                $score1 += 11;
                break;
            case "Queen of Spades":
                $player1Hand[$x] = "<img src='img/spades/12.png' alt='image' />";
                $score1 += 12;
                break;
            case "King of Spades":
                $player1Hand[$x] = "<img src='img/spades/13.png' alt='image' />";
                $score1 += 13;
                break;
            default:
                break;
        }
                
        switch($player2Hand[$x]){
            case "Ace of Hearts":
                $player2Hand[$x] = "<img src='img/hearts/1.png' alt='image' />";
                $score2 += 1;
                break;
            case "Two of Hearts":
                $player2Hand[$x] = "<img src='img/hearts/2.png' alt='image' />";
                $score2 += 2;
                break;
            case "Three of Hearts":
                $player2Hand[$x] = "<img src='img/hearts/3.png' alt='image' />";
                $score2 += 3;
                break;
            case "Four of Hearts":
                $player2Hand[$x] = "<img src='img/hearts/4.png' alt='image' />";
                $score2 += 4;
                break;
            case "Five of Hearts":
                $player2Hand[$x] = "<img src='img/hearts/5.png' alt='image' />";
                $score2 += 5;
                break;
            case "Six of Hearts":
                $player2Hand[$x] = "<img src='img/hearts/6.png' alt='image' />";
                $score2 += 6;
                break;
            case "Seven of Hearts":
                $player2Hand[$x] = "<img src='img/hearts/7.png' alt='image' />";
                $score2 += 7;
                break;
            case "Eight of Hearts":
                $player2Hand[$x] = "<img src='img/hearts/8.png' alt='image' />";
                $score2 += 8;
                break;
            case "Nine of Hearts":
                $player2Hand[$x] = "<img src='img/hearts/9.png' alt='image' />";
                $score2 += 9;
                break;
            case "Ten of Hearts":
                $player2Hand[$x] = "<img src='img/hearts/10.png' alt='image' />";
                $score2 += 10;
                break;
            case "Jack of Hearts":
                $player2Hand[$x] = "<img src='img/hearts/11.png' alt='image' />";
                $score2 += 11;
                break;
            case "Queen of Hearts":
                $player2Hand[$x] = "<img src='img/hearts/12.png' alt='image' />";
                $score2 += 12;
                break;
            case "King of Hearts":
                $player2Hand[$x] = "<img src='img/hearts/13.png' alt='image' />";
                $score2 += 13;
                break;
            case "Ace of Diamonds":
                $player2Hand[$x] = "<img src='img/diamonds/1.png' alt='image' />";
                $score2 += 1;
                break;
            case "Two of Diamonds":
                $player2Hand[$x] = "<img src='img/diamonds/2.png' alt='image' />";
                $score2 += 2;
                break;
            case "Three of Diamonds":
                $player2Hand[$x] = "<img src='img/diamonds/3.png' alt='image' />";
                $score2 += 3;
                break;
            case "Four of Diamonds":
                $player2Hand[$x] = "<img src='img/diamonds/4.png' alt='image' />";
                $score2 += 4;
                break;
            case "Five of Diamonds":
                $player2Hand[$x] = "<img src='img/diamonds/5.png' alt='image' />";
                $score2 += 5;
                break;
            case "Six of Diamonds":
                $player2Hand[$x] = "<img src='img/diamonds/6.png' alt='image' />";
                $score2 += 6;
                break;
            case "Seven of Diamonds":
                $player2Hand[$x] = "<img src='img/diamonds/7.png' alt='image' />";
                $score2 += 7;
                break;
            case "Eight of Diamonds":
                $player2Hand[$x] = "<img src='img/diamonds/8.png' alt='image' />";
                $score2 += 8;
                break;
            case "Nine of Diamonds":
                $player2Hand[$x] = "<img src='img/diamonds/9.png' alt='image' />";
                $score2 += 9;
                break;
            case "Ten of Diamonds":
                $player2Hand[$x] = "<img src='img/diamonds/10.png' alt='image' />";
                $score2 += 10;
                break;
            case "Jack of Diamonds":
                $player2Hand[$x] = "<img src='img/diamonds/11.png' alt='image' />";
                $score2 += 11;
                break;
            case "Queen of Diamonds":
                $player2Hand[$x] = "<img src='img/diamonds/12.png' alt='image' />";
                $score2 += 12;
                break;
            case "King of Diamonds":
                $player2Hand[$x] = "<img src='img/diamonds/13.png' alt='image' />";
                $score2 += 13;
                break;
            case "Ace of Clubs":
                $player2Hand[$x] = "<img src='img/clubs/1.png' alt='image' />";
                $score2 += 1;
                break;
            case "Two of Clubs":
                $player2Hand[$x] = "<img src='img/clubs/2.png' alt='image' />";
                $score2 += 2;
                break;
            case "Three of Clubs":
                $player2Hand[$x] = "<img src='img/clubs/3.png' alt='image' />";
                $score2 += 3;
                break;
            case "Four of Clubs":
                $player2Hand[$x] = "<img src='img/clubs/4.png' alt='image' />";
                $score2 += 4;
                break;
            case "Five of Clubs":
                $player2Hand[$x] = "<img src='img/clubs/5.png' alt='image' />";
                $score2 += 5;
                break;
            case "Six of Clubs":
                $player2Hand[$x] = "<img src='img/clubs/6.png' alt='image' />";
                $score2 += 6;
                break;
            case "Seven of Clubs":
                $player2Hand[$x] = "<img src='img/clubs/7.png' alt='image' />";
                $score2 += 7;
                break;
            case "Eight of Clubs":
                $player2Hand[$x] = "<img src='img/clubs/8.png' alt='image' />";
                $score2 += 8;
                break;
            case "Nine of Clubs":
                $player2Hand[$x] = "<img src='img/clubs/9.png' alt='image' />";
                $score2 += 9;
                break;
            case "Ten of Clubs":
                $player2Hand[$x] = "<img src='img/clubs/10.png' alt='image' />";
                $score2 += 10;
                break;
            case "Jack of Clubs":
                $player2Hand[$x] = "<img src='img/clubs/11.png' alt='image' />";
                $score2 += 11;
                break;
            case "Queen of Clubs":
                $player2Hand[$x] = "<img src='img/clubs/12.png' alt='image' />";
                $score2 += 12;
                break;
            case "King of Clubs":
                $player2Hand[$x] = "<img src='img/clubs/13.png' alt='image' />";
                $score2 += 13;
                break;
            case "Ace of Spades":
                $player2Hand[$x] = "<img src='img/spades/1.png' alt='image' />";
                $score2 += 1;
                break;
            case "Two of Spades":
                $player2Hand[$x] = "<img src='img/spades/2.png' alt='image' />";
                $score2 += 2;
                break;
            case "Three of Spades":
                $player2Hand[$x] = "<img src='img/spades/3.png' alt='image' />";
                $score2 += 3;
                break;
            case "Four of Spades":
                $player2Hand[$x] = "<img src='img/spades/4.png' alt='image' />";
                $score2 += 4;
                break;
            case "Five of Spades":
                $player2Hand[$x] = "<img src='img/spades/5.png' alt='image' />";
                $score2 += 5;
                break;
            case "Six of Spades":
                $player2Hand[$x] = "<img src='img/spades/6.png' alt='image' />";
                $score2 += 6;
                break;
            case "Seven of Spades":
                $player2Hand[$x] = "<img src='img/spades/7.png' alt='image' />";
                $score2 += 7;
                break;
            case "Eight of Spades":
                $player2Hand[$x] = "<img src='img/spades/8.png' alt='image' />";
                $score2 += 8;
                break;
            case "Nine of Spades":
                $player2Hand[$x] = "<img src='img/spades/9.png' alt='image' />";
                $score2 += 9;
                break;
            case "Ten of Spades":
                $player2Hand[$x] = "<img src='img/spades/10.png' alt='image' />";
                $score2 += 10;
                break;
            case "Jack of Spades":
                $player2Hand[$x] = "<img src='img/spades/11.png' alt='image' />";
                $score2 += 11;
                break;
            case "Queen of Spades":
                $player2Hand[$x] = "<img src='img/spades/12.png' alt='image' />";
                $score2 += 12;
                break;
            case "King of Spades":
                $player2Hand[$x] = "<img src='img/spades/13.png' alt='image' />";
                $score2 += 13;
                break;
            default:
                break;
        }
        
        switch($player3Hand[$x]){
            case "Ace of Hearts":
                $player3Hand[$x] = "<img src='img/hearts/1.png' alt='image' />";
                $score3 += 1;
                break;
            case "Two of Hearts":
                $player3Hand[$x] = "<img src='img/hearts/2.png' alt='image' />";
                $score3 += 2;
                break;
            case "Three of Hearts":
                $player3Hand[$x] = "<img src='img/hearts/3.png' alt='image' />";
                $score3 += 3;
                break;
            case "Four of Hearts":
                $player3Hand[$x] = "<img src='img/hearts/4.png' alt='image' />";
                $score3 += 4;
                break;
            case "Five of Hearts":
                $player3Hand[$x] = "<img src='img/hearts/5.png' alt='image' />";
                $score3 += 5;
                break;
            case "Six of Hearts":
                $player3Hand[$x] = "<img src='img/hearts/6.png' alt='image' />";
                $score3 += 6;
                break;
            case "Seven of Hearts":
                $player3Hand[$x] = "<img src='img/hearts/7.png' alt='image' />";
                $score3 += 7;
                break;
            case "Eight of Hearts":
                $player3Hand[$x] = "<img src='img/hearts/8.png' alt='image' />";
                $score3 += 8;
                break;
            case "Nine of Hearts":
                $player3Hand[$x] = "<img src='img/hearts/9.png' alt='image' />";
                $score3 += 9;
                break;
            case "Ten of Hearts":
                $player3Hand[$x] = "<img src='img/hearts/10.png' alt='image' />";
                $score3 += 10;
                break;
            case "Jack of Hearts":
                $player3Hand[$x] = "<img src='img/hearts/11.png' alt='image' />";
                $score3 += 11;
                break;
            case "Queen of Hearts":
                $player3Hand[$x] = "<img src='img/hearts/12.png' alt='image' />";
                $score3 += 12;
                break;
            case "King of Hearts":
                $player3Hand[$x] = "<img src='img/hearts/13.png' alt='image' />";
                $score3 += 13;
                break;
            case "Ace of Diamonds":
                $player3Hand[$x] = "<img src='img/diamonds/1.png' alt='image' />";
                $score3 += 1;
                break;
            case "Two of Diamonds":
                $player3Hand[$x] = "<img src='img/diamonds/2.png' alt='image' />";
                $score3 += 2;
                break;
            case "Three of Diamonds":
                $player3Hand[$x] = "<img src='img/diamonds/3.png' alt='image' />";
                $score3 += 3;
                break;
            case "Four of Diamonds":
                $player3Hand[$x] = "<img src='img/diamonds/4.png' alt='image' />";
                $score3 += 4;
                break;
            case "Five of Diamonds":
                $player3Hand[$x] = "<img src='img/diamonds/5.png' alt='image' />";
                $score3 += 5;
                break;
            case "Six of Diamonds":
                $player3Hand[$x] = "<img src='img/diamonds/6.png' alt='image' />";
                $score3 += 6;
                break;
            case "Seven of Diamonds":
                $player3Hand[$x] = "<img src='img/diamonds/7.png' alt='image' />";
                $score3 += 7;
                break;
            case "Eight of Diamonds":
                $player3Hand[$x] = "<img src='img/diamonds/8.png' alt='image' />";
                $score3 += 8;
                break;
            case "Nine of Diamonds":
                $player3Hand[$x] = "<img src='img/diamonds/9.png' alt='image' />";
                $score3 += 9;
                break;
            case "Ten of Diamonds":
                $player3Hand[$x] = "<img src='img/diamonds/10.png' alt='image' />";
                $score3 += 10;
                break;
            case "Jack of Diamonds":
                $player3Hand[$x] = "<img src='img/diamonds/11.png' alt='image' />";
                $score3 += 11;
                break;
            case "Queen of Diamonds":
                $player3Hand[$x] = "<img src='img/diamonds/12.png' alt='image' />";
                $score3 += 12;
                break;
            case "King of Diamonds":
                $player3Hand[$x] = "<img src='img/diamonds/13.png' alt='image' />";
                $score3 += 13;
                break;
            case "Ace of Clubs":
                $player3Hand[$x] = "<img src='img/clubs/1.png' alt='image' />";
                $score3 += 1;
                break;
            case "Two of Clubs":
                $player3Hand[$x] = "<img src='img/clubs/2.png' alt='image' />";
                $score3 += 2;
                break;
            case "Three of Clubs":
                $player3Hand[$x] = "<img src='img/clubs/3.png' alt='image' />";
                $score3 += 3;
                break;
            case "Four of Clubs":
                $player3Hand[$x] = "<img src='img/clubs/4.png' alt='image' />";
                $score3 += 4;
                break;
            case "Five of Clubs":
                $player3Hand[$x] = "<img src='img/clubs/5.png' alt='image' />";
                $score3 += 5;
                break;
            case "Six of Clubs":
                $player3Hand[$x] = "<img src='img/clubs/6.png' alt='image' />";
                $score3 += 6;
                break;
            case "Seven of Clubs":
                $player3Hand[$x] = "<img src='img/clubs/7.png' alt='image' />";
                $score3 += 7;
                break;
            case "Eight of Clubs":
                $player3Hand[$x] = "<img src='img/clubs/8.png' alt='image' />";
                $score3 += 8;
                break;
            case "Nine of Clubs":
                $player3Hand[$x] = "<img src='img/clubs/9.png' alt='image' />";
                $score3 += 9;
                break;
            case "Ten of Clubs":
                $player3Hand[$x] = "<img src='img/clubs/10.png' alt='image' />";
                $score3 += 10;
                break;
            case "Jack of Clubs":
                $player3Hand[$x] = "<img src='img/clubs/11.png' alt='image' />";
                $score3 += 11;
                break;
            case "Queen of Clubs":
                $player3Hand[$x] = "<img src='img/clubs/12.png' alt='image' />";
                $score3 += 12;
                break;
            case "King of Clubs":
                $player3Hand[$x] = "<img src='img/clubs/13.png' alt='image' />";
                $score3 += 13;
                break;
            case "Ace of Spades":
                $player3Hand[$x] = "<img src='img/spades/1.png' alt='image' />";
                $score3 += 1;
                break;
            case "Two of Spades":
                $player3Hand[$x] = "<img src='img/spades/2.png' alt='image' />";
                $score3 += 2;
                break;
            case "Three of Spades":
                $player3Hand[$x] = "<img src='img/spades/3.png' alt='image' />";
                $score3 += 3;
                break;
            case "Four of Spades":
                $player3Hand[$x] = "<img src='img/spades/4.png' alt='image' />";
                $$score3 += 4;
                break;
            case "Five of Spades":
                $player3Hand[$x] = "<img src='img/spades/5.png' alt='image' />";
                $score3 += 5;
                break;
            case "Six of Spades":
                $player3Hand[$x] = "<img src='img/spades/6.png' alt='image' />";
                $score3 += 6;
                break;
            case "Seven of Spades":
                $player3Hand[$x] = "<img src='img/spades/7.png' alt='image' />";
                $score3 += 7;
                break;
            case "Eight of Spades":
                $player3Hand[$x] = "<img src='img/spades/8.png' alt='image' />";
                $score3 += 8;
                break;
            case "Nine of Spades":
                $player3Hand[$x] = "<img src='img/spades/9.png' alt='image' />";
                $score3 += 9;
                break;
            case "Ten of Spades":
                $player3Hand[$x] = "<img src='img/spades/10.png' alt='image' />";
                $score3 += 10;
                break;
            case "Jack of Spades":
                $player3Hand[$x] = "<img src='img/spades/11.png' alt='image' />";
                $score3 += 11;
                break;
            case "Queen of Spades":
                $player3Hand[$x] = "<img src='img/spades/12.png' alt='image' />";
                $score3 += 12;
                break;
            case "King of Spades":
                $player3Hand[$x] = "<img src='img/spades/13.png' alt='image' />";
                $score3 += 13;
                break;
            default:
                break;
        }
                
        switch($player4Hand[$x]){
            case "Ace of Hearts":
                $player4Hand[$x] = "<img src='img/hearts/1.png' alt='image' />";
                $score4 += 1;
                break;
            case "Two of Hearts":
                $player4Hand[$x] = "<img src='img/hearts/2.png' alt='image' />";
                $score4 += 2;
                break;
            case "Three of Hearts":
                $player4Hand[$x] = "<img src='img/hearts/3.png' alt='image' />";
                $score4 += 3;
                break;
            case "Four of Hearts":
                $player4Hand[$x] = "<img src='img/hearts/4.png' alt='image' />";
                $score4 += 4;
                break;
            case "Five of Hearts":
                $player4Hand[$x] = "<img src='img/hearts/5.png' alt='image' />";
                $score4 += 5;
                break;
            case "Six of Hearts":
                $player4Hand[$x] = "<img src='img/hearts/6.png' alt='image' />";
                $score4 += 6;
                break;
            case "Seven of Hearts":
                $player4Hand[$x] = "<img src='img/hearts/7.png' alt='image' />";
                $score4 += 7;
                break;
            case "Eight of Hearts":
                $player4Hand[$x] = "<img src='img/hearts/8.png' alt='image' />";
                $score4 += 8;
                break;
            case "Nine of Hearts":
                $player4Hand[$x] = "<img src='img/hearts/9.png' alt='image' />";
                $score4 += 9;
                break;
            case "Ten of Hearts":
                $player4Hand[$x] = "<img src='img/hearts/10.png' alt='image' />";
                $score4 += 10;
                break;
            case "Jack of Hearts":
                $player4Hand[$x] = "<img src='img/hearts/11.png' alt='image' />";
                $score4 += 11;
                break;
            case "Queen of Hearts":
                $player4Hand[$x] = "<img src='img/hearts/12.png' alt='image' />";
                $score4 += 12;
                break;
            case "King of Hearts":
                $player4Hand[$x] = "<img src='img/hearts/13.png' alt='image' />";
                $score4 += 13;
                break;
            case "Ace of Diamonds":
                $player4Hand[$x] = "<img src='img/diamonds/1.png' alt='image' />";
                $score4 += 1;
                break;
            case "Two of Diamonds":
                $player4Hand[$x] = "<img src='img/diamonds/2.png' alt='image' />";
                $score4 += 2;
                break;
            case "Three of Diamonds":
                $player4Hand[$x] = "<img src='img/diamonds/3.png' alt='image' />";
                $score4 += 3;
                break;
            case "Four of Diamonds":
                $player4Hand[$x] = "<img src='img/diamonds/4.png' alt='image' />";
                $score4 += 4;
                break;
            case "Five of Diamonds":
                $player4Hand[$x] = "<img src='img/diamonds/5.png' alt='image' />";
                $score4 += 5;
                break;
            case "Six of Diamonds":
                $player4Hand[$x] = "<img src='img/diamonds/6.png' alt='image' />";
                $score4 += 6;
                break;
            case "Seven of Diamonds":
                $player4Hand[$x] = "<img src='img/diamonds/7.png' alt='image' />";
                $score4 += 7;
                break;
            case "Eight of Diamonds":
                $player4Hand[$x] = "<img src='img/diamonds/8.png' alt='image' />";
                $score4 += 8;
                break;
            case "Nine of Diamonds":
                $player4Hand[$x] = "<img src='img/diamonds/9.png' alt='image' />";
                $score4 += 9;
                break;
            case "Ten of Diamonds":
                $player4Hand[$x] = "<img src='img/diamonds/10.png' alt='image' />";
                $score4 += 10;
                break;
            case "Jack of Diamonds":
                $player4Hand[$x] = "<img src='img/diamonds/11.png' alt='image' />";
                $score4 += 11;
                break;
            case "Queen of Diamonds":
                $player4Hand[$x] = "<img src='img/diamonds/12.png' alt='image' />";
                $score4 += 12;
                break;
            case "King of Diamonds":
                $player4Hand[$x] = "<img src='img/diamonds/13.png' alt='image' />";
                $score4 += 13;
                break;
            case "Ace of Clubs":
                $player4Hand[$x] = "<img src='img/clubs/1.png' alt='image' />";
                $score4 += 1;
                break;
            case "Two of Clubs":
                $player4Hand[$x] = "<img src='img/clubs/2.png' alt='image' />";
                $score4 += 2;
                break;
            case "Three of Clubs":
                $player4Hand[$x] = "<img src='img/clubs/3.png' alt='image' />";
                $score4 += 3;
                break;
            case "Four of Clubs":
                $player4Hand[$x] = "<img src='img/clubs/4.png' alt='image' />";
                $score4 += 4;
                break;
            case "Five of Clubs":
                $player4Hand[$x] = "<img src='img/clubs/5.png' alt='image' />";
                $score4 += 5;
                break;
            case "Six of Clubs":
                $player4Hand[$x] = "<img src='img/clubs/6.png' alt='image' />";
                $score4 += 6;
                break;
            case "Seven of Clubs":
                $player4Hand[$x] = "<img src='img/clubs/7.png' alt='image' />";
                $score4 += 7;
                break;
            case "Eight of Clubs":
                $player4Hand[$x] = "<img src='img/clubs/8.png' alt='image' />";
                $score4 += 8;
                break;
            case "Nine of Clubs":
                $player4Hand[$x] = "<img src='img/clubs/9.png' alt='image' />";
                $score4 += 9;
                break;
            case "Ten of Clubs":
                $player4Hand[$x] = "<img src='img/clubs/10.png' alt='image' />";
                $score4 += 10;
                break;
            case "Jack of Clubs":
                $player4Hand[$x] = "<img src='img/clubs/11.png' alt='image' />";
                $score4 += 11;
                break;
            case "Queen of Clubs":
                $player4Hand[$x] = "<img src='img/clubs/12.png' alt='image' />";
                $score4 += 12;
                break;
            case "King of Clubs":
                $player4Hand[$x] = "<img src='img/clubs/13.png' alt='image' />";
                $score4 += 13;
                break;
            case "Ace of Spades":
                $player4Hand[$x] = "<img src='img/spades/1.png' alt='image' />";
                $score4 += 1;
                break;
            case "Two of Spades":
                $player4Hand[$x] = "<img src='img/spades/2.png' alt='image' />";
                $score4 += 2;
                break;
            case "Three of Spades":
                $player4Hand[$x] = "<img src='img/spades/3.png' alt='image' />";
                $score4 += 3;
                break;
            case "Four of Spades":
                $player4Hand[$x] = "<img src='img/spades/4.png' alt='image' />";
                $$score4 += 4;
                break;
            case "Five of Spades":
                $player4Hand[$x] = "<img src='img/spades/5.png' alt='image' />";
                $score4 += 5;
                break;
            case "Six of Spades":
                $player4Hand[$x] = "<img src='img/spades/6.png' alt='image' />";
                $score4 += 6;
                break;
            case "Seven of Spades":
                $player4Hand[$x] = "<img src='img/spades/7.png' alt='image' />";
                $score4 += 7;
                break;
            case "Eight of Spades":
                $player4Hand[$x] = "<img src='img/spades/8.png' alt='image' />";
                $score4 += 8;
                break;
            case "Nine of Spades":
                $player4Hand[$x] = "<img src='img/spades/9.png' alt='image' />";
                $score4 += 9;
                break;
            case "Ten of Spades":
                $player4Hand[$x] = "<img src='img/spades/10.png' alt='image' />";
                $score4 += 10;
                break;
            case "Jack of Spades":
                $player4Hand[$x] = "<img src='img/spades/11.png' alt='image' />";
                $score4 += 11;
                break;
            case "Queen of Spades":
                $player4Hand[$x] = "<img src='img/spades/12.png' alt='image' />";
                $score4 += 12;
                break;
            case "King of Spades":
                $player4Hand[$x] = "<img src='img/spades/13.png' alt='image' />";
                $score4 += 13;
                break;
            default:
                break;
        }
    }


    echo "<div class='rowOfCards'><b>This is player 1's hand:</b><br />";
    foreach($player1Hand as $card){
        echo $card;
    }
    echo "<br />Score: ".$score1."<br /><br /></div>";
    
    echo "<div class='rowOfCards'><b>This is player 2's hand:</b><br />";
    foreach($player2Hand as $card){
        echo $card;
    }
    echo "<br />Score: ".$score2."<br /><br /></div>";
    
    echo "<div class='rowOfCards'><b>This is player 3's hand:</b><br />";
    foreach($player3Hand as $card){
        echo $card;
    }
    echo "<br />Score: ".$score3."<br /><br /></div>";
    
    echo "<div class='rowOfCards'><b>This is player 4's hand:</b><br />";
    foreach($player4Hand as $card){
        echo $card;
    }
    echo "<br />Score: ".$score4."<br /><br /></div>";
    
    $winner = "None";
    if($score1 > $score2 && $score1 > $score3 && $score1 > $score4){
        if($score1 <= 42){
            if($winner != "None"){
                $winner += " and Player 1";
            }
            else
            $winner = "Player 1";
        }
    }
    
    if($score2 > $score1 && $score2 > $score3 && $score2 > $score4){
        if($score2 <= 42){
            if($winner != "None"){
                $winner += " and Player 2";
            }
            else
            $winner = "Player 2";
        }
    }
    
    if($score3 <= 42 && $score3 > $score1 && $score3 > $score2 && $score3 > $score4){
        if($score3 <= 42){
            if($winner != "None"){
                $winner += " and Player 3";
            }
            else
            $winner = "Player 3";
        }
    }
    
    if($score4 <= 42 && $score4 > $score1 && $score4 > $score2 && $score4 > $score3){
        if($score4 <= 42){
            if($winner != "None"){
                $winner += " and Player 4";
            }
            else
            $winner = "Player 4";
        }
    }
    
    echo "The winner is ".$winner.".<br />";
?>



    </body>
</html>