<?php

namespace jp\mazaicrafty\pmmp\FormEconomy\command;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\CommandExecutor;
use pocketmine\command\ConsoleCommandSender;
use jp\mazaicrafty\pmmp\FormEconomy\form\Menu;

class MenuCommand extends Command{

    public function __construct(){
        $cmd = "test";
        $desc = "FormEconomy";
        $usage = "/test";
        parent::__construct($cmd, $desc, $usage);
    }

    public function execute(CommandSender $sender, string $label, array $args): bool{
        if (!$sender instanceof Player){
            $sender->sendMessage("You are not player.");
            return true;
        }

        if ($sender instanceof ConsoleCommandSender){
            $sender->sendMessage("Please execute this command in game.");
            return true;
        }
        
        $menu = Menu::getInstance();
        $menu->createMenu();
        return true;
    }
}
