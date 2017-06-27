<?php
namespace helpserver;
use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
class Main extends PluginBase{
 public function onEnable(){
  $this->getServer()->getLogger()->info("Plugin helpserver enable !");
  $this->getLogger()->info("evrething has good");
 }
public function onDisable(){
$this->getServer()->getLogger()->info("plugin helpserver disable !");

 }
}



