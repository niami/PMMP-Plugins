<?php

namespace ifteam\LoadBalancer\dummy;

use pocketmine\network\protocol\DataPacket;
use pocketmine\network\SourceInterface;
use pocketmine\Player;

class DummyPlayer extends Player {
	public $name = "";
	public function __construct(SourceInterface $interface, $clientID, $ip, $port) {
		parent::__construct ( $interface, $clientID, $ip, $port );
	}
	public function dataPacket(DataPacket $packet, $needACK = false) {
		return parent::dataPacket ( $packet, $needACK );
	}
	public function handleDataPacket(DataPacket $packet) {
		parent::handleDataPacket ( $packet );
	}
	public function isOnline() {
		return true;
	}
	public function setName($name) {
		$this->name = $name;
	}
	public function getDisplayName() {
		return $this->name;
	}
	public function getName() {
		return $this->name;
	}
}
?>