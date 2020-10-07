<?php

namespace Hackathon\PlayerIA;

use Hackathon\Game\Result;

/**
 * Class QuellPlayers
 * @package Hackathon\PlayerIA
 * @author KHATTABI FILALI Youssef
 */
class QuellPlayer extends Player
{
    protected $mySide;
    protected $opponentSide;
    protected $result;

    public function getChoice()
    {

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

        /*$my_array = $this->result->getStatsFor($this->mySide);
        $his_array = $this->result->getStatsFor($this->opponentSide);
        $my_score = $my_array['score'];
        $his_score = $his_array['score'];

        if($this->result->getNbRound() == 0){
            echo $my_score;
            return parent::rockChoice();
        }*/

        /*means he would like to defeat me because i have more than him then do same as his last */
        /*if ($my_score > $his_score && $this->result->getLastChoiceFor($this->opponentSide)  == "scissors"){
            return parent::scissorsChoice();
        }

        if ($my_score > $his_score && $this->result->getLastChoiceFor($this->opponentSide)  == "rock"){
            return parent::rockChoice();
        }

        if ($my_score > $his_score && $this->result->getLastChoiceFor($this->opponentSide)  == "paper"){
            return parent::paperChoice();
        }*/

        if ($this->result->getLastChoiceFor($this->opponentSide)  == "scissors"){
            return parent::paperChoice();
        }

        if ($this->result->getLastChoiceFor($this->opponentSide)  == "paper"){
            return parent::scissorsChoice();
        }

        if ($this->result->getLastChoiceFor($this->opponentSide)  == "rock"){
            return parent::paperChoice();
        }

        return parent::paperChoice();

    }
};
