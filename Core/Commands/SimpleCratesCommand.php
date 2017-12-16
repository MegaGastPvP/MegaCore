<?php
/**
 * Created by PhpStorm.
 * User: Abimalek
 * Date: 12/14/2017
 * Time: 7:44 PM
 */

namespace Core\Commands;

use Core\Core;

use pocketmine\command\CommandSender;
use pocketmine\item\Item;
use pocketmine\Player;

class SimpleCratesCommand extends BaseCommand {

    private $plugin;

    public function __construct(Core $plugin){
        $this->plugin = $plugin;
        parent::__construct($plugin, "givecratekey", "Give a player a cratekey", "/givecratekey", ["givecratekey"]);
    }

    public function execute(CommandSender $sender, $commandLabel, array $args) : bool {
        if($sender instanceof Player){
            if($sender->isOp()){
                if(!isset($args[0])){
                    $sender->sendMessage(c::RED . "Who do you what to give the key to?");
                }
                if(!isset($args[1])){
                    $sender->sendMessage(c::RED . "What key do you what to give them?");
                }
                $name = $this->getServer()->getPlayerExact($args[1]);
                switch($args[1]){
                    case "godly":
                        $key = Item::get(399, 0, 1);
                        $key1 = $key->setCustomName("§cGodly Crate");
                        $name->getInventory()->addItem($key1);
                        break;
                    case "legendary":
                        $key2 = Item::get(399, 0, 1);
                        $key3 = $key2->setCustomName("§6Legendary Crate");
                        $name->getInventory()->addItem($key3);
                        break;
                    case "mythical":
                        $key4 = Item::get(399, 0, 1);
                        $key5 = $key4->setCustomName("§5Mythic Crate");
                        $name->getInventory()->addItem($key5);
                        break;
                    case "rare":
                        $key6 = Item::get(399, 0, 1);
                        $key7 = $key6->setCustomName("§eRare Crate");
                        $name->getInventory()->addItem($key7);
                        break;
                    case "common":
                        $key8 = Item::get(399, 0, 1);
                        $key9 = $key8->setCustomName("§aCommon Crate");
                        $name->getInventory()->addItem($key9);
                        break;
                }
            }
        }
    }
    public function getPlugin(): Plugin {
        return $this->plugin;
    }
    public function getServer() {
        return $this->getPlugin()->getServer();
    }
}
