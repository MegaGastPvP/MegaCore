<?php
/**
 * Created by PhpStorm.
 * User: Abimalek
 * Date: 12/14/2017
 * Time: 7:44 PM
 */
namespace Core\Commands;

use Core\Core;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\PluginIdentifiableCommand;
use pocketmine\plugin\Plugin;


class BaseCommand extends Command implements PluginIdentifiableCommand
{

    private $plugin;

    public function __construct(BrandPE $plugin, $name, $description, $usageMessage, $aliases)
    {
        parent::__construct($name, $description, $usageMessage, $aliases);
        $this->plugin = $plugin;
    }

    public function getPlugin(): Plugin
    {
        return $this->plugin;
    }

    public function execute(CommandSender $sender, $commandLabel, array $args): bool
    {
        if ($sender->hasPermission($this->getPermission())) {
            $result = $this->onExecute($sender, $args);
            if (is_string($result)) {
                $sender->sendMessage($result);
            }
            return true;
        } else {
            $sender->sendMessage("§l§9Error>§r Such Command, No Permission");
        }
        return false;
    }

    /*
    public function onExecute(CommandSender $sender, array $args) {
       }
    */
}
