<?php

/*
 * ___  ___               _ _____            __ _
 * |  \/  |              (_)  __ \          / _| |
 * | .  . | __ _ ______ _ _| /  \/_ __ __ _| |_| |_ _   _
 * | |\/| |/ _` |_  / _` | | |   | '__/ _` |  _| __| | | |
 * | |  | | (_| |/ / (_| | | \__/\ | | (_| | | | |_| |_| |
 * \_|  |_/\__,_/___\__,_|_|\____/_|  \__,_|_|  \__|\__, |
 *                                                   __/ |
 *                                                  |___/
 * Copyright (C) 2017-2018 @MazaiCrafty (https://twitter.com/MazaiCrafty)
 *
 * This program is free plugin.
 */

namespace jp\mazaicrafty\pmmp\FormEconomy;

use pocketmine\plugin\PluginBase;
use jp\mazaicrafty\pmmp\FormEconomy\EventListener;
use jp\mazaicrafty\pmmp\FormEconomy\form\Menu;
use jojoe77777\FormAPI\FormAPI;
use onebone\economyapi\EconomyAPI;
class Main extends PluginBase{

    /** @var Main $main */
    private static $main;

    /** @var EconomyAPI $economyAPI */
    private static $economyAPI;

    /** @var FormAPI $formAPI */
    private static $formAPI;

    public function onEnable(): void{
        $this->loadAPI();
    }

    private function loadAPI(): void{
        $economyAPI = $this->getServer()->getPluginManager()->getPlugin("EconomyAPI");
        $formAPI = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
    }

    private function getEconomy(): EconomyAPI{
        return $economyAPI();
    }

    private function getForm(): FormAPI{
        return $formAPI;
    }

    public function getInstance(){
        if (!$this->main){
            $this->main = new Main;
        }
        return $this->main;
    }
}
