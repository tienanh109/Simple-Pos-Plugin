<?php

namespace tienanh109\PlayerPosition;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;

class Main extends PluginBase {

    public function onEnable() {
        $this->getLogger()->info("SimplePos by tienanh109 has been enabled");
    }

    public function onCommand(CommandSender $sender, Command $command, $label, array $args) {
        if ($sender instanceof Player) {
            $x = round($sender->getX(), 1);
            $y = round($sender->getY(), 1);
            $z = round($sender->getZ(), 1);
            
            $sender->sendMessage(TextFormat::YELLOW . "Toạ độ của bạn là:");
            $sender->sendMessage(TextFormat::GOLD . "X: $x, Y: $y, Z: $z");
            $sender->sendMessage(TextFormat::GREEN . "Ghi chú: Toạ độ này chỉ hiển thị với bạn!");
            $sender->sendMessage(TextFormat::GRAY . "- Plugin by tienanh109 -");
            
            return true;
        }
        
        $sender->sendMessage(TextFormat::RED . "Lệnh này chỉ có thể được sử dụng trong trò chơi.");
        return true;
    }
}
