<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    $dbc = mysqli_connect('localhost', 'root', 'root', 'dota2api')
    or die('Error connecting to MYSQL server.');


    $data = array(
        "heroes" => array(
            array(
                "name"=> " EARTHSHAKER",
                "Spell1"=> " Fissure: Slams the ground with a mighty toem, fissuring while stunning and damaging enemy
                units in a line. Creates an impassable ridge of stone.",
                "Spell2"=> " Enchant Totem: Empowers Earthshaker\'s totem, causing it to deal extra damage
                on the next attack",
                "Spell3"=> " Aftershokc: Causes the earth to shake underfoot, adding additional damage, and stuns to nearby
                enemy units when Earthshaker casts his abilities.",
                "Ultimate"=> " Echo Slam: Shockwaves travel through the ground, damaging enemy units. Each enemy
                hit causes an echo to damage nearby units. Upgradable by Aghanim\'s Scepter.",
                "Type"=> " Strength"
            ),
            array(
                "name"=> " Sven",
                "Spell1"=> " Storm hammer: Sven unleashes his magical gauntlet that deals damage and stuns enemy units.",
                "Spell2"=> " Great Cleave: Sven strikes with great force, cleaving all nearby enemy units with his attack.
                Cleave damage on non-primary targets is not reduced by armor values.",
                "Spell3"=> " Warcry: Sven\'s warcry heartens his allies for battle, increasing their movement speed and armor.
                Lasts 8 seconds.",
                "Ultimate"=> " Sven channels his rogue strength, granting bonus damage for 25 seconds.",
                "Type"=> " Strength"
            ),
            array(
                "name"=> " Tiny",
                "Spell1"=> " Avalanche: Bombards an area with rocks, stunning and damaging enemy land units.",
                "Spell2"=> " Toss: Grabs a random unit in 275 radius around Tiny, friend or enemy, and launches it at the target
                to deal damage when they land. If the tossed unit is an enemy, it will take an extra 20% damage.",
                "Spell3"=> " Craggt Exterior: Causes damage to bounce back on Tiny\'s attackers. Enemies that attack Tiny
                from within 300 units have a chance of being stunned for 1.2 seconds.",
                "Ultimate"=> " Grow: Tiny gains craggy mass that increases his power at the cost of his attack speed. 
                Increases Tossed unit damage and improves movement speed. Upgradable by Aghanim\'s Scepter.",
                "Type"=> " Strength"
            ),
            array(
                "name"=> " Anti Mage",
                "Spell1"=> " Mana Break:",
                "Spell2" => " Blink: ",
                "Spell3"=> " SpellShield: ",
                "Ultimate"=> " Mana Void: ",
                "Type"=> " Agility"
            ),
            array(
                "name"=> " Drow Ranger",
                "Spell1"=> " Frost Arrows:",
                "Spell2"=> " Silence:",
                "Spell3"=> " Precision Aura",
                "Ultimate"=> " Marksmanship",
                "Type"=> " Agility"
            ),
            array(
                "name"=> " Juggernaut",
                "Spell1"=> " Blade Fury:",
                "Spell2"=> " Healing Ward",
                "Spell3"=> " Blade Dance:",
                "Ultimate"=> " Omnislash:",
                "Type"=> " Agility"
            ),
            array(
                "name"=> " Mirana",
                "Spell1"=> " Starstorm:",
                "Spell2"=> " Sacred Arrow:",
                "Spell3"=> " Leap:",
                "Ultimate"=> " Moonlight Shadow:",
                "Type"=> " Agility"
            ),
            array(
                "name"=> " Crystal Maiden",
                "Spell1"=> " Crystal Nova:",
                "Spell2"=> " Frostbite:",
                "Spell3"=> " Arcane Aura:",
                "Ultimate"=> " Freezing Field:",
                "Type"=> " Intelligence"
            ),
            array(
                "name"=> " Puck",
                "Spell1"=> " Illusory Orb: Ethereal Jaunt",
                "Spell2"=> " Waning Rift:", 
                "Spell3"=> " Phase Shift",
                "Ultimate"=> " Dream Coil",
                "Type"=> " Intelligence"

            ),
            array(
                "name"=> " Windrunner",
                "Spell1"=> " Shackleshot",
                "Spell2"=> " Powershot",
                "Spell3"=> " Windrun",
                "Ultimate"=> " focus Fire",
                "Type"=> " Intelligence"
            )
        ),
        "items" => array(
            array(
                "name"=> " Clarity",
                "cost"=> " 50",
                "details"=> " Use: Restores mana over time. If the user is attacked, the effect is lost.",
                "effects"=> " Restores 100 Mana over 30 seconds. (3.3 mp5)",
                "required"=> " No required build items."
            ),
            array(
                "name"=> " Iron Branch",
                "cost"=> " 53",
                "details"=> " A seemingly ordinary branch, its ironlike qualities are bestowed upon the bearer.",
                "effects"=> " +1 All Attributes",
                "required"=> " No required build items."
            ),
            array(
                "name"=> " Ring of Protection",
                "cost"=> " 175",
                "details"=> " A glimmering ring that defends its bearer",
                "effects"=> " +2 Armor",
                "required"=> " No required build items."
            ),
            array(
                "name"=> " Magic Stick",
                "cost"=> " 200",
                "details" => " Active: Energy Charge- Gains charges (max 10) based on enemies using abilities in a nearby area.
                 When activated, it restores health and mana based on the number of charges stored.",
                "effects"=> " Restore Per Charge: 15",
                "required"=> " No required build items."
            ),
            array(
                "name"=> " Wraith Band",
                "cost"=> " 485",
                "details"=> " A circlet with faint whispers echoing about it.",
                "effects"=> " +3 Strength +6 Agility +3 Intelligence +3 Damage",
                "required"=> " Ciclet (Item (to be done)) & Slippers of Agility"
            ),
            array(
                "name"=> " Ring of Basilius",
                "cost"=> " 500",
                "details"=> " Passive: Basilius Aura- Grants mana regeneration and armor in a 900 AoE. Active: Toggle whether the Aura
                effects other non-hero units.",
                "effects"=> " +6 Damage Aura Mana Regen: 0.65 Aura Bonus Armor: 2  +1 Armor",
                "required"=> "Sage\'s Mask & Ring of Protection (Item 3)."
            ),
            array(
                "name"=> " Force Staff",
                "cost"=> " 2200",
                "details"=> " Active: Force- Pushes any target unit 600 units in the direction it is facing. Double click to self-cast.",
                "effects"=> " +10 Intelligence +10 Damage + 10 Attack Speed",
                "required"=> " Staff of Wizardry & Quarterstaff."
            ),
            array(  
                "name"=> " Crystalys",
                "cost"=> " 2150",
                "details"=> " Passive: Critical Strike- Grants a chance to deal critical damage on attack.",
                "effects"=> " +35 Damage  Critical Chance: 20%  Critical Damage: 175%",
                "required"=> " Broadsword & Blades of Attack"
            ),
            array(
                "name"=> " Helm of the Dominator",
                "cost"=> " 850",
                "details"=> " Active: Dominate- Take control of a non-hero, non-ancient target unit. Passive: Lifesteal-
                Gives lifesteal on attacks.",
                "effects"=> "+20 Damage +5 Armor Lifesteal: 15%",
                "required"=> " Morbid Mask & Helm of Iron Will"

            ),
            array(
                "name"=> " Demon Edge",
                "cost"=> " 2400",
                "details"=> " one of the oldest weapons forged by the Deom-Smith Abzidan, it killed
                its maker when he tested its edge.",
                "effects"=> " +46 Damage",
                "required"=> "No required build items"
            )
        )
    );

    foreach($data as $table => $rows) {
        $i = 0;
        $table_create_query = "CREATE TABLE $table (";
        foreach($rows[1] as $name => $value) {
            $table_create_query .= "$name VARCHAR(10000)";

            if ($i < count($rows[1]) - 1) {
                $table_create_query .= ", ";
            }
            $i++;
        }
        $table_create_query .= ");";

        $rows_query = "";
        foreach($rows as $row) {
            $rows_query .= "INSERT INTO $table (" . implode(", ", array_keys($row)) . ") VALUES ('" . implode("', '", array_values($row)) . "');";
        }

        echo $table_create_query . "\n";
        echo $rows_query . "\n";
        mysqli_multi_query($dbc, $table_create_query . $rows_query); 
    }

    mysqli_close($dbc);
?>