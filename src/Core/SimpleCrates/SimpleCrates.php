<?php
/**
 * Created by PhpStorm.
 * User: Abimalek
 * Date: 12/15/2017
 * Time: 4:22 PM
 */

namespace Core\SimpleCrates;

use Core\Core;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\utils\TextFormat as c;
use pocketmine\inventory\PlayerInventory;
use pocketmine\item\Item;
use pocketmine\Player;
class SimpleCrates implements Listener{

    public $plugin;

    public function __construct(Core $plugin){

        $this->plugin = $plugin;

    }

    public function onInteract(PlayerInteractEvent $e){
        $player = $e->getPlayer();
        $block = $e->getBlock();
        $item = Item::get(0, 0, 1);
        $i = $e->getItem();
        if($block->getId() === 54){
            if($i->getCustomName() === "§cGodly Crate" && $i->getId() === 399){
                $r = rand(1, 128);
                $b = rand(1, 32);
                $e->setCancelled();
                $rand = rand(1, 5);
                $player->getInventory()->setItemInHand($item);
                $this->getServer()->getScheduler()->scheduleDelayedTask(new SetTitleTask($this, $player, c::AQUA . "opening" . c::RESET . c::RED . " Godly Crate"), 5);
                $this->plugin->getServer()->getScheduler()->scheduleDelayedTask(new SetTitleTask($this->plugin, $player,  c::RED . "3"), 20);
                $this->plugin->getServer()->getScheduler()->scheduleDelayedTask(new SetTitleTask($this->plugin, $player,  c::YELLOW . "2"), 20);
                $this->plugin->getServer()->getScheduler()->scheduleDelayedTask(new SetTitleTask($this->plugin, $player,  c::GREEN . "1"), 20);
                $player->addTitle(c::AQUA . "Success");
                switch($rand){
                    case 1:
                        $item = Item::get(129, 0, $r);
                        $player->getInventory()->addItem($item);
                        $player->addTitle(c::RED . "You won x$r emeralds!");
                        break;
                    case 2:
                        $item = Item::get(7, 0, $b);
                        $player->getInventory()->addItem($item);
                        $player->addTitle(c::RED . "You won x$b bedrock!");
                        break;
                    case 3:
                        $item = Item::get(46, 0, $r);
                        $player->getInventory()->addItem($item);
                        $player->addTitle(c::RED . "You won x$r tnt!");
                        break;
                    case 4:
                        $item = Item::get(264, 0, $r);
                        $player->getInventory()->addItem($item);
                        $player->addTitle(c::RED . "You won x$r diamonds!");
                        break;
                    case 5:
                        $item = Item::get(466, 0, $r);
                        $player->getInventory()->addItem($item);
                        $player->addTitle(c::RED . "You won x$r enchanted golden apples!");
                        break;
                }
            }
            if($i->getCustomName() === "§6Legendary Crate" && $i->getId() === 399){
                $r = rand(1, 64);
                $e->setCancelled();
                $player->getInventory()->setItemInHand($item);
                $rand = rand(1, 5);
                $player->addTitle(c::AQUA . "opening" . c::RESET . c::GOLD . " Legendary Crate");
                $this->plugin->getServer()->getScheduler()->scheduleDelayedTask(new SetTitleTask($this->plugin, $player,  c::RED . "3"), 20);
                $this->plugin->getServer()->getScheduler()->scheduleDelayedTask(new SetTitleTask($this->plugin, $player,  c::YELLOW . "2"), 20);
                $this->plugin->getServer()->getScheduler()->scheduleDelayedTask(new SetTitleTask($this->plugin, $player,  c::GREEN . "1"), 20);
                $player->addTitle(c::AQUA . "Success!");
                switch($rand){
                    case 1:
                        $item = Item::get(129, 0, $r);
                        $player->getInventory()->addItem($item);
                        $player->addTitle(c::GOLD . "You won x$r emeralds!");
                        break;
                    case 2:
                        $item = Item::get(7, 0, $r);
                        $player->getInventory()->addItem($item);
                        $player->addTitle(c::GOLD . "You won x$r bedrock!");
                        break;
                    case 3:
                        $item = Item::get(46, 0, $r);
                        $player->getInventory()->addItem($item);
                        $player->addTitle(c::GOLD . "You won x$r tnt!");
                        break;
                    case 4:
                        $item = Item::get(264, 0, $r);
                        $player->getInventory()->addItem($item);
                        $player->addTitle(c::GOLD . "You won x$r diamonds!");
                        break;
                    case 5:
                        $item = Item::get(466, 0, $r);
                        $player->getInventory()->addItem($item);
                        $player->addTitle(c::GOLD . "You won x$r enchanted golden apples!");
                        break;
                }
            }
            if($i->getCustomName() === "§5Mythic Crate" && $i->getId() === 399){
                $r = rand(1, 32);
                $e->setCancelled();
                $player->getInventory()->setItemInHand($item);
                $rand = rand(1, 5);
                $player->addTitle(c::AQUA . "opening" . c::RESET . c::DARK_PURPLE . " Mythical Crate");
                $this->plugin->getServer()->getScheduler()->scheduleDelayedTask(new SetTitleTask($this->plugin, $player,  c::RED . "3"), 20);
                $this->plugin->getServer()->getScheduler()->scheduleDelayedTask(new SetTitleTask($this->plugin, $player,  c::YELLOW . "2"), 20);
                $this->plugin->getServer()->getScheduler()->scheduleDelayedTask(new SetTitleTask($this->plugin, $player,  c::GREEN . "1"), 20);
                $player->addTitle(c::AQUA . "Success!");
                switch($rand){
                    case 1:
                        $item = Item::get(129, 0, $r);
                        $player->getInventory()->addItem($item);
                        $player->addTitle(c::DARK_PURPLE . "You won x$r emeralds!");
                        break;
                    case 2:
                        $item = Item::get(7, 0, $r);
                        $player->getInventory()->addItem($item);
                        $player->addTitle(c::DARK_PURPLE . "You won x$r bedrock!");
                        break;
                    case 3:
                        $item = Item::get(46, 0, $r);
                        $player->getInventory()->addItem($item);
                        $player->addTitle(c::DARK_PURPLE . "You won x$r tnt!");
                        break;
                    case 4:
                        $item = Item::get(264, 0, $r);
                        $player->getInventory()->addItem($item);
                        $player->addTitle(c::DARK_PURPLE . "You won x$r diamonds!");
                        break;
                    case 5:
                        $item = Item::get(322, 0, $r);
                        $player->getInventory()->addItem($item);
                        $player->addTitle(c::DARK_PURPLE . "You won x$r enchanted golden apples!");
                        break;
                }
            }
            if($i->getCustomName() === "§eRare Crate" && $i->getId() === 399){
                $r = rand(1, 16);
                $e->setCancelled();
                $player->getInventory()->setItemInHand($item);
                $rand = rand(1, 5);
                $player->addTitle(c::AQUA . "opening" . c::RESET . c::YELLOW . " Rare Crate");
                $this->plugin->getServer()->getScheduler()->scheduleDelayedTask(new SetTitleTask($this->plugin, $player,  c::RED . "3"), 20);
                $this->plugin->getServer()->getScheduler()->scheduleDelayedTask(new SetTitleTask($this->plugin, $player,  c::YELLOW . "2"), 20);
                $this->plugin->getServer()->getScheduler()->scheduleDelayedTask(new SetTitleTask($this->plugin, $player,  c::GREEN . "1"), 20);
                $player->addTitle(c::AQUA . "Success!");
                switch($rand){
                    case 1:
                        $item = Item::get(129, 0, $r);
                        $player->getInventory()->addItem($item);
                        $player->addTitle(c::YELLOW . "You won x$r emeralds!");
                        break;
                    case 2:
                        $item = Item::get(7, 0, $r);
                        $player->getInventory()->addItem($item);
                        $player->addTitle(c::YELLOW . "You won x$r bedrock!");
                        break;
                    case 3:
                        $item = Item::get(46, 0, $r);
                        $player->getInventory()->addItem($item);
                        $player->addTitle(c::YELLOW . "You won x$r tnt!");
                        break;
                    case 4:
                        $item = Item::get(264, 0, $r);
                        $player->getInventory()->addItem($item);
                        $player->addTitle(c::YELLOW . "You won x$r diamonds!");
                        break;
                    case 5:
                        $item = Item::get(322, 0, $r);
                        $player->getInventory()->addItem($item);
                        $player->addTitle(c::YELLOW . "You won x$r enchanted golden apples!");
                        break;
                }
            }
            if($i->getCustomName() === "§aCommon Crate" && $i->getId() === 399){
                $r = rand(1, 8);
                $e->setCancelled();
                $player->getInventory()->setItemInHand($item);
                $rand = rand(1, 5);
                $player->addTitle(c::AQUA . "opening" . c::RESET . c::AQUA . " Common Crate");
                $this->plugin->getServer()->getScheduler()->scheduleDelayedTask(new SetTitleTask($this->plugin, $player,  c::RED . "3"), 20);
                $this->plugin->getServer()->getScheduler()->scheduleDelayedTask(new SetTitleTask($this->plugin, $player,  c::YELLOW . "2"), 20);
                $this->plugin->getServer()->getScheduler()->scheduleDelayedTask(new SetTitleTask($this->plugin, $player,  c::GREEN . "1"), 20);
                $player->addTitle(c::AQUA . "Success!");
                switch($rand){
                    case 1:
                        $item = Item::get(129, 0, $r);
                        $player->getInventory()->addItem($item);
                        $player->addTitle(c::GREEN . "You won x$r emeralds!");
                        break;
                    case 2:
                        $item = Item::get(7, 0, $r);
                        $player->getInventory()->addItem($item);
                        $player->addTitle(c::GREEN . "You won x$r bedrock!");
                        break;
                    case 3:
                        $item = Item::get(46, 0, $r);
                        $player->getInventory()->addItem($item);
                        $player->addTitle(c::GREEN . "You won x$r tnt!");
                        break;
                    case 4:
                        $item = Item::get(264, 0, $r);
                        $player->getInventory()->addItem($item);
                        $player->addTitle(c::GREEN . "You won x$r diamonds!");
                        break;
                    case 5:
                        $item = Item::get(322, 0, $r);
                        $player->getInventory()->addItem($item);
                        $player->addTitle(c::GREEN . "You won x$r enchanted golden apples!");
                        break;
                }
            }
        }
    }
}
