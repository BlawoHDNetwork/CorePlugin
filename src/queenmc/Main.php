<?php
//Danke an BlawoHD fuer deine Hilfe! :D
namespace queenmc;

use pocketmine\plugin\PluginBase;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\CommandExecutor;
use pocketmine\event\Listener;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\utils\TextFormat;
use pocketmine\utils\Config;
use pocketmine\permission\ServerOperator;

class Main extends PluginBase{
//Loading
public function onLoad(){
	$this->getLogger()->info("§l§eDreambuildCore -> Loading");
}
//ENABLE
public function onEnable(){
	$this->getLogger()->info("§l§aDreambuildCore -> Enabled");
}   
//DISABLE
public function onDisable(){
	$this->getLogger()->info("§l§cDreambuildCore -> Disabled");
}
//COMMANDS
public function onCommand(CommandSender $sender, Command $cmd, $label, array $args)
{
//INFO COMMAND
	switch ($cmd->getName);
	if($sender->hasPermission("db")) {
		$sender->sendMessage(TextFormat::RED . "=============================================================");
		$sender->sendMessage(TextFormat::GOLD . "§l§cKontaktiere uns!");
                $sender->sendMessage(TextFormat::GOLD . "-> §aWebsite §f[§7 web.dreambuild.de §f]");
                $sender->sendMessage(TextFormat::GOLD . "-> §aKiK §f[§7 _xXNKAXx_ §f]");
                $sender->sendMessage(TextFormat::GOLD . "-> §aInstagram §f[§7 dreambuild.de §f]");
                $sender->sendMessage(TextFormat::GOLD . "-> §aTwitter §f[§7 dreambuild_de §f]");
                $sender->sendMessage(TextFormat::GOLD . "-> §aEmail §f[§7 dreambuild@web.de §f]");
                $sender->sendMessage(TextFormat::GOLD . "-> §aSkype §f[§7 xXNKAXx §f]");
                $sender->sendMessage(TextFormat::GOLD . "-> §aTS und/oder Discord §f[§7 Benutze: /info vchat §f]");
		$sender->sendMessage(TextFormat::RED . "=============================================================");
                return true;
	}
//VoiceServerCOMMAND
			case "ts":
			    if($sender->hasPermission("db")) {
					$sender->sendMessage(TextFormat::RED . "=============================================================");
					$sender->sendMessage(TextFormat::GOLD . "Wir besitzen leider keinen Teamspeak !");
                                        $sender->sendMessage(TextFormat::GOLD . "-> §7Gratis Alternative: §a/info vchat");
					$sender->sendMessage(TextFormat::RED . "=============================================================");
                                        return true;
}
case "team";
    if($sender->hasPermission("db")) {
        $sender->sendMessage(TextFormat::RED . "=============================================================");
        $sender->sendMessage(TextFormat::RED . "§7Du kannst dich auf unserer Website bewerben!");
        $sender->sendMessage(TextFormat::RED . "=============================================================");
        return true;
    }
}
//INFO COMMAND
if($cmd->getName() == "info"){  
			
                                if(!isset($args[0])){
                                        $sender->sendMessage(TextFormat::RED . "=============================================================");
					$sender->sendMessage(TextFormat::GOLD . "§l§cDreambuild.de Informationen");
                                        $sender->sendMessage(TextFormat::GOLD . "-> §a/team §f[§7Bewerbe dich als TeamMitglied§f]");
                                        $sender->sendMessage(TextFormat::GOLD . "-> §a/kontakt §f[§7Du willst uns kontaktieren?§f]");
                                        $sender->sendMessage(TextFormat::GOLD . "-> §a/info vchat §f[§7Zeigt dir unseren VoiceServer§f]");
                                        $sender->sendMessage(TextFormat::GOLD . "-> §a/info partner §f[§7Zeigt unsere PartnerServer§f]");
                                        $sender->sendMessage(TextFormat::GOLD . "-> §a/info premium §f[§7Du willst einen Premium Rang?§f]");
                                        $sender->sendMessage(TextFormat::GOLD . "-> §a/info vote §f[§7Hilft dir beim Voten§f]");
                                        $sender->sendMessage(TextFormat::GOLD . "-> §a/info web §f[§7Zeigt unsere Website§f]");
					$sender->sendMessage(TextFormat::RED . "=============================================================");
                                        return true;
}
//INFO SUBCOMMANDS
else //Website
                            
{
				if($args[0] == "web"){  //Zeigt die Website des Servers !
					$sender->sendMessage(TextFormat::RED . "=============================================================");
					$sender->sendMessage(TextFormat::GOLD . "§7Support, Belohnungen und mehr !");
                                        $sender->sendMessage(TextFormat::GOLD . "-> §aweb.dreambuild.de");
					$sender->sendMessage(TextFormat::RED . "=============================================================");
                                        return true;
}                           
else //VoiceChat
{
                                if($args[0] == "vchat"){  //Zeigt den VoiceServer
					$sender->sendMessage(TextFormat::RED . "=============================================================");
					$sender->sendMessage(TextFormat::GOLD . "§7Chatte mit den anderen Spielern (Voicechat)");
                                        $sender->sendMessage(TextFormat::GOLD . "-> §adiscord.gg/eewwVNZ");
					$sender->sendMessage(TextFormat::RED . "=============================================================");
                                        return true;
}                  
else //VOTING-Anleitung
{
                                if($args[0] == "vote"){  //Zeigt wie man Votet
					$sender->sendMessage(TextFormat::RED . "=============================================================");
                                        $sender->sendMessage(TextFormat::GOLD . "§aAnleitung zum VOTING:");
					$sender->sendMessage(TextFormat::GOLD . "§7Gehe auf die Seite:");
                                        $sender->sendMessage(TextFormat::GOLD . "§7minecraftpocket-servers.com");
                                        $sender->sendMessage(TextFormat::GOLD . "§7und suche dort nach Dreambuild.");
                                        $sender->sendMessage(TextFormat::GOLD . "§7Du findest auf der Seite einen Knopf auf dem >Vote<");
                                        $sender->sendMessage(TextFormat::GOLD . "§7steht. Draufklicken -> Abstimmen -> /vote benutzen !");
					$sender->sendMessage(TextFormat::RED . "=============================================================");
                                        return true;
}
else //Premium Infos
{
                                if($args[0] == "premium"){  //Infos ueber den Premium Rang
					$sender->sendMessage(TextFormat::RED . "=============================================================");
					$sender->sendMessage(TextFormat::GOLD . "§aWie bekomme ich einen Premium Rang?");
                                        $sender->sendMessage(TextFormat::GOLD . "PayPal: store.dreambuild.de");
                                        $sender->sendMessage(TextFormat::GOLD . "PaySafeKarte: dreambuild@web.deinfo "
                                                . "");
                                        $sender->sendMessage(TextFormat::GOLD . "Vorteile VIP >> /info vip");
                                        $sender->sendMessage(TextFormat::GOLD . "Vorteile VIP+ >> /info vip+");
                                        $sender->sendMessage(TextFormat::GOLD . "Aktuelle Preise: /buy");
					$sender->sendMessage(TextFormat::RED . "=============================================================");
                                        return true;
}
else //Infos VIP
{
                                if($args[0] == "vip"){  //Infos ueber VIP
					$sender->sendMessage(TextFormat::RED . "=============================================================");
					$sender->sendMessage(TextFormat::GOLD . "§aVorteile von VIP");
                                        $sender->sendMessage(TextFormat::GOLD . "Dieser Bereich wird noch bearbeitet!");
                                        $sender->sendMessage(TextFormat::GOLD . "-> Sehe in unserem Store nach");
                                        $sender->sendMessage(TextFormat::GOLD . "store.dreambuild.de");
					$sender->sendMessage(TextFormat::RED . "=============================================================");
                                        return true;
}
else //Infos VIP+
{
                                if($args[0] == "vip+"){  //Infos ueber VIP+
					$sender->sendMessage(TextFormat::RED . "=============================================================");
				        $sender->sendMessage(TextFormat::GOLD . "§aVorteile von VIP+");
                                        $sender->sendMessage(TextFormat::GOLD . "Dieser Bereich wird noch bearbeitet!");
                                        $sender->sendMessage(TextFormat::GOLD . "-> Sehe in unserem Store nach");
                                        $sender->sendMessage(TextFormat::GOLD . "store.dreambuild.de");
					$sender->sendMessage(TextFormat::RED . "=============================================================");
                                        return true;
}
else //Infos PartnerServer
{
                                if($args[0] == "partner"){  //Infos ueber die PartnerServer
					$sender->sendMessage(TextFormat::RED . "=============================================================");
				        $sender->sendMessage(TextFormat::GOLD . "§aPartnerServer von Dreambuild.de");
                                        $sender->sendMessage(TextFormat::GOLD . "Wir haben momentan keine PartnerServer!");
                                        $sender->sendMessage(TextFormat::GOLD . "-> §7Du besitzt einen Server mit mind. 100 aktiven Spielern?");
                                        $sender->sendMessage(TextFormat::GOLD . "-> §7Dann schreibe an §cdreambuild@web.de §7!");
                                        $sender->sendMessage(TextFormat::GOLD . "-> §7oder: §c/kontakt §7!");
					$sender->sendMessage(TextFormat::RED . "=============================================================");
                                        return true;
}
}
}
}
}
}
}
}
}
}
}
//Ende des CorePlugins
//QueenMC and BlawoHD
