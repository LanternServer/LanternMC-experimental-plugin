<?php

namespace LanternServer\lanternMC;

use pocketmine\Server;
use pocketmine\Player;

use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;

class Main extends PluginBase {

    public function onEnable() {
      $this->getServer()->getLogger()->info("[LanternMC custom plugin enabled!]")
    }

    public function onDisable() {
      $this->getServer()->getLogger()->info("[LanternMC custom plugin disabled..]")
    }

    public function onCommand(commandSender $sender, Command $cmd, string $label, array $args) : bool {
      switch ($cmd->getName()) {
        case "lanternMC":
              if(!isset($args)){
              $sender->sendMessage("[§6Lantern§4MC]§rWelcome to §6Lantern§4MC§r!");
                  return true;
              }
        
      }
      return true;
    }

  }
