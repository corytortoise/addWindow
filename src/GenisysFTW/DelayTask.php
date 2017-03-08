<?php

  namespace GenisysFTW;

  use pocketmine\scheduler\PluginTask;
  use GenisysFTW\Main;

  class DelayTask extends PluginTask {

    private $plugin;
    public $player;

    public function __construct(Main $plugin, Player $player) {
      parent::__construct($plugin);
      $this->plugin = $plugin;
      $this->player = $player;
    }

    public function onRun($currentTick) {
      $this->plugin->sendChestInventory($this->player);
    }

  }