<?php

declare(strict_types=1);

namespace NhanAZ\UncraftingTable;

use customiesdevs\customies\block\CustomiesBlockFactory;
use customiesdevs\customies\item\CreativeInventoryInfo;
use NhanAZ\libRegRsp\libRegRsp;
use NhanAZ\UncraftingTable\block\UncraftingTableBlock;
use pocketmine\block\BlockBreakInfo;
use pocketmine\block\BlockIdentifier;
use pocketmine\block\BlockTypeInfo;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener {

	protected function onEnable(): void {
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		libRegRsp::regRsp($this);
	}

	protected function onDisable(): void {
		libRegRsp::unRegRsp($this);
	}
}
