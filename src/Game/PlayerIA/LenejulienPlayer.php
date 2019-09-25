<?php

namespace Hackathon\PlayerIA;
use Hackathon\Game\Result;

/**
 * Class PaperPlayer
 * @package Hackathon\PlayerIA
 * @author Robin
 *
 */
class LenejulienPlayer extends Player
{
    protected $mySide;
    protected $opponentSide;
    protected $result;

    public function getChoice()
    {

        $mySideLastChoice = $this->result->getLastChoiceFor($this->mySide);
        $opponentSideLastChoice = $this->result->getLastChoiceFor($this->opponentSide);
        $mySideLastScore = $this->result->getLastScoreFor($this->mySide);
        $opponentSideLastScore = $this->result->getLastScoreFor($this->opponentSide);
        $allMyLastChoice =  $this->result->getChoicesFor($this->mySide);
        $allOppenentChoice = $this->result->getChoicesFor($this->opponentSide);
        $allMySideLastScore = $this->result->getLastScoreFor($this->mySide);
        $allOpponentSideLastScore = $this->result->getLastScoreFor($this->opponentSide);
        $roundtest = $this->result->getNbRound();
        $rock = 0;
        $scissors = 0;
        $player = 0;

        for ($i = $roundtest; $i > 0; --$i){
          if ($allMySideLastScore[-1] > $allOpponentSideLastScore[-1]){
            if ($allMyLastChoice == 'scissors'){
              ++$scissors;
            } elseif ($allMyLastChoice == 'paper'){
              ++$paper;
            }else {
              ++$rock;
            }
          }
        }
        if ($rock > $scissors && $rock > $paper){
          return parent::rockChoice();
        }
        if ($rock < $scissors && $scissors > $paper){
          return parent::scissorsChoice();
        }
        return parent::paperChoice();
        
        /*if ($roundtest > 1){
          if ($allMySideLastScore[-1] > $allOpponentSideLastScore[-1]){
             if ($allMySideLastScore[-2] > $allOpponentSideLastScore[-2]){
               return $allMySideLastScore[-1];
             } else {
              return $allMySideLastScore[-2];
            }
          } else if ($allMySideLastScore[-1] < $allOpponentSideLastScore[-1]){
            if ($allMySideLastScore[-2] > $allOpponentSideLastScore[-2]){
              return $allMySideLastScore[-1];
            } else {
              return $allMySideLastScore[-2];
            }
         }
        }

        if ($mySideLastChoice != 0){
        if ($mySideLastScore > $opponentSideLastScore){
          return $mySideLastChoice;
        } else {
          return $mySideLastChoice;
        }
      }

        // -------------------------------------    -----------------------------------------------------
        // How to get my Last Choice           ?    $this->result->getLastChoiceFor($this->mySide) -- if 0 (first round)
        // How to get the opponent Last Choice ?    $this->result->getLastChoiceFor($this->opponentSide) -- if 0 (first round)
        // -------------------------------------    -----------------------------------------------------
        // How to get my Last Score            ?    $this->result->getLastScoreFor($this->mySide) -- if 0 (first round)
        // How to get the opponent Last Score  ?    $this->result->getLastScoreFor($this->opponentSide) -- if 0 (first round)
        // -------------------------------------    -----------------------------------------------------
        // How to get all the Choices          ?    $this->result->getChoicesFor($this->mySide)
        // How to get the opponent Last Choice ?    $this->result->getChoicesFor($this->opponentSide)
        // -------------------------------------    -----------------------------------------------------
       // How to get my Last Score            ?    $this->result->getLastScoreFor($this->mySide)
        // How to get the opponent Last Score  ?    $this->result->getLastScoreFor($this->opponentSide)
        // -------------------------------------    -----------------------------------------------------
        // How to get the stats                ?    $this->result->getStats()
        // How to get the stats for me         ?    $this->result->getStatsFor($this->mySide)
        //          array('name' => value, 'score' => value, 'friend' => value, 'foe' => value
        // How to get the stats for the oppo   ?    $this->result->getStatsFor($this->opponentSide)
        //          array('name' => value, 'score' => value, 'friend' => value, 'foe' => value
        // -------------------------------------    -----------------------------------------------------
        // How to get the number of round      ?    $this->result->getNbRound()
        // -------------------------------------    -----------------------------------------------------
        // How can i display the result of each round ? $this->prettyDisplay()
        // -------------------------------------    -----------------------------------------------------
        
        return parent::scissorsChoice();      */      
  }
};
