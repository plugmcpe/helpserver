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
pubilc function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
switch($cmd->getName()){
 case 'power':
  $sender->setHealth(100);
  break;
 case 'broadcast':
    $this->getServer()->broadcast($args[0]);
  break;
 case 'gm1':
  $player = $sender->getPlayer();
  $player->setGamemode(1);
  break;
 case 'gm0':
  $player = $sender->getPlayer();
  $player->setGamemode(0);
  break;
  }  
 }
}



