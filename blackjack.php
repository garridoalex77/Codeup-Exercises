<?php
// complete all "todo"s to build a blackjack game
// create an array for suits
$suits = ['C', 'H', 'S', 'D'];
// create an array for cards
$cards = ['A', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K'];
// build a deck (array) of cards
// card values should be "VALUE SUIT". ex: "7 H"
// make sure to shuffle the deck before returning it
function buildDeck($suits, $cards) {
    $deck = [];
    foreach ($cards as $card) {
        foreach ($suits as $suit) {
            $thisCard = $card . " " . $suit;
          array_push($deck, $thisCard);
        }
    }
    shuffle($deck);
    return $deck;
}
$deck = buildDeck($suits, $cards);
// buildDeck($suits, $cards);
// determine if a card is an ace
// return true for ace, false for anything else
function cardIsAce($card) {
    if (substr($card, 0, 1) == "A") {
        return true;
    } else {
        return false;
    }
}
// determine the value of an individual card (string)
// aces are worth 11
// face cards are worth 10
// numeric cards are worth their value
function getCardValue($card) {
    $card = substr($card, 0, 1);
    if (cardIsAce()) {
        $card = 11;
    } elseif (!is_numeric($card)) {
        $card = 10;
    } else {
        $card = (integer) substr($card, 0, 1);
    }
    return $card;
}
$cardValue = getCardValue($card);

// get total value for a hand of cards
// don't forget to factor in aces
// aces can be 1 or 11 (make them 1 if total value is over 21)
function getHandTotal($hand) {
    foreach ($hand as $card) {
        $cardValue = getCardValue($card);
        array_shift($hand);
        array_push($hand, $cardValue);
    }
    return $hand;
}
getHandTotal($hand);


// draw a card from the deck into a hand
// pass by reference (both hand and deck passed in are modified)
function drawCard($hand, $deck) {
    $hand[] = array_pop($deck);
}
drawCard($hand, $deck);
// print out a hand of cards
// name is the name of the player
// hidden is to initially show only first card of hand (for dealer)
// output should look like this:
// Dealer: [4 C] [???] Total: ???
// or:
// Player: [J D] [2 D] Total: 12
function echoHand($hand, $name, $hidden = false) {
  // todo
}
// build the deck of cards
// $deck = buildDeck($suits, $cards);

// initialize a dealer and player hand
$dealer = [];
$player = [];
// dealer and player each draw two cards
// todo
// echo the dealer hand, only showing the first card
// todo
// echo the player hand
// todo
// allow player to "(H)it or (S)tay?" till they bust (exceed 21) or stay
// while ( todo ) {
//   // todo
// }
// show the dealer's hand (all cards)
// todo
// todo (all comments below)
// at this point, if the player has more than 21, tell them they busted
// otherwise, if they have 21, tell them they won (regardless of dealer hand)
// if neither of the above are true, then the dealer needs to draw more cards
// dealer draws until their hand has a value of at least 17
// show the dealer hand each time they draw a card
// finally, we can check and see who won
// by this point, if dealer has busted, then player automatically wins
// if player and dealer tie, it is a "push"
// if dealer has more than player, dealer wins, otherwise, player wins