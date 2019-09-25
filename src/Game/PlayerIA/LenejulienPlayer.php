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
        $allMyLastScore = $this->result->getLastScoreFor($this->mySide);
        $allOppenentScore = $this->result->getLastScoreFor($this->opponentSide);
        $roundtest = $this->result->getNbRound();

        #if ($roundtest > 1){
         # if ($allMySideLastScore > $allOpponentSideLastScore){
          #  return 
          #}
        #}

        if ($mySideLastChoice != 0){
        if ($mySideLastScore > $opponentSideLastScore){
          return $mySideLastChoice;
        } elseif ($mySideLastScore == $opponentSideLastScore) {
          return parent::paperChoice();
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
        
        return parent::paperChoice();            
  }
};
