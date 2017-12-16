<?php
/**
 * Created by PhpStorm.
 * User: Abimalek
 * Date: 12/14/2017
 * Time: 4:41 PM
 */

namespace Core;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use Core\Commands\SimpleCratesCommand;
use pocketmine\utils\TextFormat as c;
use Core\SimpleCrates\SimpleCrates;
class Main extends PluginBase implements Listener{
    public function onEnable(){
        $this->registerCommands();
        $this->registerEventss();
    }
    /**
     * registers Commands
     */
    public function registerCommands(){
        $this->getServer()->getCommandMap()->register("givecratekey", new Commands\SimpleCratesCommand());
    }
    public function registerEventss(){
        $this->getServer()->getPluginManager()->registerEvents((new SimpleCrates($this)), $this);
    }
}
