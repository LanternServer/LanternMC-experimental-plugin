<?php

namespace LanternServer\lanternMC;

use pocketmine\plugin\PluginBase;
use pocketmine\plugin\CommandSender;
use pocketmine\command\Command;

class Main extends PluginBase {

    public function onEnable() {
      $this->getServer()->getLogger()->info("[LanternMC custom plugin enabled!]")
    }

    public function onDisable() {
      $this->getServer()->getLogger()->info("[LanternMC custom plugin disabled..]")
    }

    public function onCommand(commandSender $sender, Command $command, string $label, array $args) : bool {
      switch ($command->getName()) {
        case "lanternMC":
        $sender->sendMessage("[§6Lantern§4MC]§rWelcome to §6Lantern§4MC§r!");
      }
      return true;
    }

  }
