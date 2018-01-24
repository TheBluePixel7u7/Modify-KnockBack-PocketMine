<?php

namespace SlideNetworkPE;

use pocketmine\plugin\PluginBase as SlideNetwork;
use pocketmine\event\Listener as KB;
// utils
use pocketmine\utils\Config;
use pocketmine\utils\TextFormat as C;
// player
use pocketmine\Level;
use pocketmine\Entity;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\Player;
use pocketmine\math\Vector3; 


class KB extends SlideNetwork implements KB{

public function onEnable(){
	$this->getServer()->getPluginManager()->registerEvents($this, $this);
   @mkdir($this->getDataFolder());
	$this->slide = new Config($this->getDataFolder(). "config.yml",Config::YAML,array(
			"kb-modifier" => true,
			"kb-number" => 0.2
			));
			

} //on enable

public function onDisable(){
$this->getLogger()->info("

         OH BYE BYE!!!! 
§b TWITTER: §f@TheBluePixel7u7 & @SlideNetworkPE !!!!


");
}// ON DISABLE

      public function onJoin(PlayerJoinEvent $join){
      $pl = $join->getPlayer();
      $n = $pl->getName();

      $pl->sendPopup("§7[§3i§7]§b Welcome $n §7[§3i§7] ");

}

		public function onDamage(EntityDamageEvent $ev){
/**poooopppp  asjsjsjss $tru = $tbp->get("kb-modifier");
       $p = $ev->getEntity();*/
     if($ev instanceof EntityDamageByEntityEvent){
       $ev->setKnockBack($this->slide->get("kb-number"));
}
}
}
