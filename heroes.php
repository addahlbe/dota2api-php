<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    $Heroes = array(
        "Hero #1"=> array(
            "name"=> " EARTHSHAKER",
            "Spell 1"=> " Fissure: Slams the ground with a mighty toem, fissuring while stunning and damaging enemy
            units in a line. Creates an impassable ridge of stone.",
            "Spell 2"=> " Enchant Totem: Empowers Earthshaker's totem, causing it to deal extra damage
            on the next attack",
            "Spell 3"=> " Aftershokc: Causes the earth to shake underfoot, adding additional damage, and stuns to nearby
            enemy units when Earthshaker casts his abilities.",
            "Ultimate"=> " Echo Slam: Shockwaves travel through the ground, damaging enemy units. Each enemy
            hit causes an echo to damage nearby units. Upgradable by Aghanim's Scepter.",
            "Type"=> " Strength"
        ),
        "Hero #2"=> array(
            "name"=> " Sven",
            "Spell 1"=> " Storm hammer: Sven unleashes his magical gauntlet that deals damage and stuns enemy units.",
            "Spell 2"=> " Great Cleave: Sven strikes with great force, cleaving all nearby enemy units with his attack.
            Cleave damage on non-primary targets is not reduced by armor values.",
            "Spell 3"=> " Warcry: Sven's warcry heartens his allies for battle, increasing their movement speed and armor.
            Lasts 8 seconds.",
            "Ultimate"=> " Sven channels his rogue strength, granting bonus damage for 25 seconds.",
            "Type"=> " Strength"
        ),
        "Hero #3"=> array(
            "name"=> " Tiny",
            "Spell 1"=> " Avalanche: Bombards an area with rocks, stunning and damaging enemy land units.",
            "Spell 2"=> " Toss: Grabs a random unit in 275 radius around Tiny, friend or enemy, and launches it at the target
            to deal damage when they land. If the tossed unit is an enemy, it will take an extra 20% damage.",
            "Spell 3"=> " Craggt Exterior: Causes damage to bounce back on Tiny's attackers. Enemies that attack Tiny
            from within 300 units have a chance of being stunned for 1.2 seconds.",
            "Ultimate"=> " Grow: Tiny gains craggy mass that increases his power at the cost of his attack speed. 
            Increases Tossed unit damage and improves movement speed. Upgradable by Aghanim's Scepter.",
            "Type"=> " Strength"
        ),
        "Hero #4"=> array(
            "name"=> " Anti Mage",
            "Spell 1"=> " Mana Break:",
            "Spell 2" => " Blink: ",
            "Spell 3"=> " Spell Shield: ",
            "Ultimate"=> " Mana Void: ",
            "Type"=> " Agility"
        ),
        "Hero #5"=> array(
            "name"=> " Drow Ranger",
            "Spell 1"=> " Frost Arrows:",
            "Spell 2"=> " Silence:",
            "Spell 3"=> " Precision Aura",
            "Ultimate"=> " Marksmanship",
            "Type"=> " Agility"
        ),
        "Hero #6"=> array(
            "name"=> " Juggernaut",
            "Spell 1"=> " Blade Fury:",
            "Spell 2"=> " Healing Ward",
            "Spell 3"=> " Blade Dance:",
            "Ultimate"=> " Omnislash:",
            "Type"=> " Agility"
        ),
        "Hero #7"=> array(
            "name"=> " Mirana",
            "Spell 1"=> " Starstorm:",
            "Spell 2"=> " Sacred Arrow:",
            "Spell 3"=> " Leap:",
            "Ultimate"=> " Moonlight Shadow:",
            "Type"=> " Agility"
        ),
        "Hero #8"=> array(
            "name"=> " Crystal Maiden",
            "Spell 1"=> " Crystal Nova:",
            "Spell 2"=> " Frostbite:",
            "Spell 3"=> " Arcane Aura:",
            "Ultimate"=> " Freezing Field:",
            "Type"=> " Intelligence"
        ),
        "Hero #9"=> array(
            "name"=> " Puck",
            "Spell 1"=> " Illusory Orb: Ethereal Jaunt",
            "Spell 2"=> " Waning Rift:",
            "Spell 3"=> " Phase Shift",
            "Ultimate"=> " Dream Coil",
            "Type"=> " Intelligence"

        ),
        "Hero #10"=> array(
            "name"=> " Windrunner",
            "Spell 1"=> " Shackleshot",
            "Spell 2"=> " Powershot",
            "Spell 3"=> " Windrun",
            "Ultimate"=> " focus Fire",
            "Type"=> " Intelligence"
        ),
    );
	include 'templates/heroes.php';
?>