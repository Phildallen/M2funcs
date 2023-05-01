<?php

$cardFace = ['Ace','Jack','Queen','King', 2,3,4,5,6,7,8,9,10];
$cardSuit = ['Spades', 'Clubs', 'Hearts', 'Diamonds'];

$player1Card1Key = array_rand($cardFace, 1);
$player1Card2Key = array_rand($cardFace, 1);
$player2Card1Key = array_rand($cardFace, 1);
$player2Card2Key = array_rand($cardFace, 1);
$player1Card3Key = array_rand($cardFace, 1);
$player2Card3Key = array_rand($cardFace, 1);

$player1Card1 = $cardFace [$player1Card1Key];
$player1Card2 = $cardFace [$player1Card2Key];
$player2Card1 = $cardFace [$player2Card1Key];
$player2Card2 = $cardFace [$player2Card2Key];
$player1Card3 = $cardFace [$player1Card3Key];
$player2Card3 = $cardFace [$player2Card3Key];

$player1Score1 = 0;
$player1Score2 = 0;
$player2Score1 = 0;
$player2Score2 = 0;
$player1Score3 = 0;
$player2Score3 = 0;
$player1ScoreT = 0;
$player2ScoreT = 0;
$player1Result = 0;
$player2Result = 0;

if ($player1Card1=='Ace'){
    $player1Score1 = 11;
} elseif ($player1Card1 == 'Jack' || $player1Card1 == 'Queen' || $player1Card1 == 'King'){
    $player1Score1 = 10;
} else {
    $player1Score1 = $player1Card1;
}

if ($player1Card2=='Ace'){
    $player1Score2 = 11;
} elseif ($player1Card2 == 'Jack' || $player1Card2 == 'Queen' || $player1Card2 == 'King'){
    $player1Score2 = 10;
} else {
    $player1Score2 = $player1Card2;
}

if ($player2Card1=='Ace'){
    $player2Score1 = 11;
} elseif ($player2Card1 == 'Jack' || $player2Card1 == 'Queen' || $player2Card1 == 'King'){
    $player2Score1 = 10;
} else {
    $player2Score1 = $player2Card1;
}

if ($player2Card2=='Ace'){
    $player2Score2 = 11;
} elseif ($player2Card2 == 'Jack' || $player2Card2 == 'Queen' || $player2Card2 == 'King'){
    $player2Score2 = 10;
} else {
    $player2Score2 = $player2Card2;
}


if ($player1Card3=='Ace'){
    $player1ScoreT = 11;
} elseif ($player1Card3 == 'Jack' || $player1Card3 == 'Queen' || $player1Card3 == 'King'){
    $player1ScoreT = 10;
} else {
    $player1ScoreT = $player1Card3;
}

if ($player2Card3=='Ace'){
    $player2ScoreT = 11;
} elseif ($player2Card3 == 'Jack' || $player2Card3 == 'Queen' || $player2Card3 == 'King'){
    $player2ScoreT = 10;
} else {
    $player2ScoreT = $player2Card3;
}

$twist1 = null;
$twist2 = null;

if ($player1Score1 + $player1Score2 >= 14){
    $player1Score3 = 0;
} elseif ($player1Score1 + $player1Score2 < 14){
    $twist1 = 'Twist  ' . $player1Card3;
    $player1Score3 = $player1ScoreT;
}

if ($player2Score1 + $player2Score2 >= 14){
    $player2Score3 = 0;
} elseif ($player2Score1 + $player2Score2 < 14){
    $twist2 = 'Twist  ' . $player2Card3;
    $player2Score3 = $player2ScoreT;
}
$player1Score = $player1Score1 + $player1Score2 + $player1Score3;
$player2Score = $player2Score1 + $player2Score2 + $player2Score3;

if ($player1Score >= 22 && ($player1Card1=='Ace' || $player1Card2=='Ace' || $player1Card3=='Ace')){
    $player1Score = $player1Score - 10;
}
if ($player2Score >= 22 && ($player2Card1=='Ace' || $player2Card2=='Ace' || $player2Card3=='Ace')){
    $player2Score = $player2Score - 10;
}

if ($player1Score >= 22 && $player2Score >= 22){
    $player1Result = 'Bust!';
    $player2Result = 'Bust!';
} elseif ($player1Score >= 22 && $player2Score <= 21){
    $player1Result = 'Bust!';
    $player2Result = 'Winner!';
} elseif ($player1Score <= 21 && $player2Score >=22){
    $player1Result = 'Winner!';
    $player2Result = 'Bust!';
} elseif ($player1Score > $player2Score){
    $player1Result = 'Winner!';
    $player2Result = 'Loser!';
}  elseif ($player1Score < $player2Score) {
    $player1Result = 'Loser!';
    $player2Result = 'Winner!';
}  elseif ($player1Score = $player2Score) {
    $player1Result = 'Draw!';
    $player2Result = 'Draw!';
}

echo '<h1>Player 1 cards' . '    ' . $player1Card1
. ' & ' . $player1Card2 . '   ' . $twist1 . '</h1><h1>    Score ' . $player1Score
    . '     ' .  $player1Result . '</h1>';

echo '<h1>Player 2 cards' . '    ' . $player2Card1
    . ' & ' . $player2Card2 . '    ' . $twist2 . '</h1><h1>    Score ' . $player2Score
    . '     ' .  $player2Result . '</h1>';

