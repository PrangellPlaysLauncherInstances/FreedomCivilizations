<?php
$instance['freedomcivilizations'] = array_merge($instance['freedomcivilizations'], array(
    "loadder" => array(
        "minecraft_version" => "1.20.1",
        "loadder_type" => "fabric",
        "loadder_version" => "0.15.11"
    ),
    "verify" => true,
    "ignored" => array(
        'config',
        'essential',
        'logs',
        'resourcepacks',
        'saves',
        'screenshots',
        'shaderpacks',
        'W-OVERFLOW',
        'options.txt',
        'optionsof.txt'
    ),
    "whitelist" => array(),
    "whitelistActive" => false,
    "status" => array(
        "nameServer" => "Freedom Civilizations",
        "ip" => "freedom.factions.ws",
        "port" => 25565
    )
));
?>
