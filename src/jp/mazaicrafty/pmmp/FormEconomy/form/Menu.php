<?php

namespace jp\mazaicrafty\pmmp\FormEconomy\form;

use pocketmine\Server;
use pocketmine\Player;
use jp\mazaicrafty\pmmp\FormEconomy\Main;

class Menu{

    const CLOSE_BUTTON = 0;
    const PAY_MONEY = 1;

    /** @var Main */
    private $main;

    private static $menu;

    private function createMenu(Player $player){
        $main = Main::getInstance();
        $form = $this->main->getForm->createSimpleForm(
            function (Player $player, $result){
                if ($result === null){
                    return;
                }

                switch ($result){
                    case self::CLOSE_BUTTON:
                    return;

                    case self::PAY_MONEY:
                    return;
                }
            }
        );

        $form->setTitle("title");
        $form->setContent("text");
        $form->addButton("button");

        $form->sendToPlayer($player);
    }

    /** @return Menu */
    public static function getInstance(){
        if (!$this->menu){
            $this->menu = new Menu;
        }
        return $this->menu;
    }

    /** @return Main */
    private function getMain(){
        return $this->main;
    }
}
