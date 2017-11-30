<?php
namespace Potatoe\Join;

use Potatoe\Core

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\Player;
use pocketmine\Server;

class JoinTitle implemListener 

  public function onJoin(PlayerJoinEvent $event) {
    $player = $event->getPlayer();
    $title = "Welcome";
    $subtitle = "To The Server";
    $player->addTitle($title, $subtitle);
  }
}
