<?php
namespace yourname\myplugin;
use pocketmine\plugin\PluginBase;
class MyPlugin extends PluginBase
  public function onCommand(CommandSender $sender, Command $command, $label, array $args){
    $commandName = $command->getName();
    if($commandName === "greet"){
      $sender->sendMessage("Hi!");
      return true;
    }
    return false;
  }{
}
