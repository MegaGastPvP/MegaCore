<?php
/**
 * Created by PhpStorm.
 * User: Abimalek
 * Date: 12/15/2017
 * Time: 8:15 PM
 */

namespace Core\SimpleCrates;

use Core\Core;
use pocketmine\Player;
use pocketmine\scheduler\PluginTask;

class SetTitleTask extends PluginTask{

    private $plugin;
    private $player;
    private $message;


    public function __construct(Core $plugin, Player $player, $message){

        parent::__construct($plugin);

        $this->message = $message;
        $this->player = $player;
        $this->plugin = $plugin;

    }
    public function onRun(int $currentTick){

        $player = $this->player;
        $player->setTitle($this->message);

    }
}
