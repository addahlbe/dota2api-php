<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    $items = array(
        "Item #1"=> array(
            "name"=> " Clarity",
            "cost"=> " 50",
            "details"=> " Use: Restores mana over time. If the user is attacked, the effect is lost.",
            "effects"=> " Restores 100 Mana over 30 seconds. (3.3 mp5)",
            "required"=> " No required build items."
        ),
        "Item #2"=> array(
            "name"=> " Iron Branch",
            "cost"=> " 53",
            "details"=> " A seemingly ordinary branch, its ironlike qualities are bestowed upon the bearer.",
            "effects"=> " +1 All Attributes",
            "required"=> " No required build items."
        ),
        "Item #3"=> array(
            "name"=> " Ring of Protection",
            "cost"=> " 175",
            "details"=> " A glimmering ring that defends its bearer",
            "effects"=> " +2 Armor",
            "required"=> " No required build items."
        ),
        "Item #4"=> array(
            "name"=> " Magic Stick",
            "cost"=> " 200",
            "details" => " Active: Energy Charge- Gains charges (max 10) based on enemies using abilities in a nearby area.
             When activated, it restores health and mana based on the number of charges stored.",
            "effects"=> " Restore Per Charge: 15",
            "required"=> " No required build items."
        ),
        "Item #5"=> array(
            "name"=> " Wraith Band",
            "cost"=> " 485",
            "details"=> " A circlet with faint whispers echoing about it.",
            "effects"=> " +3 Strength +6 Agility +3 Intelligence +3 Damage",
            "required"=> " Ciclet (Item (to be done)) & Slippers of Agility"
        ),
        "Item #6"=> array(
            "name"=> " Ring of Basilius",
            "cost"=> " 500",
            "details"=> " Passive: Basilius Aura- Grants mana regeneration and armor in a 900 AoE. Active: Toggle whether the Aura
            effects other non-hero units.",
            "effects"=> " +6 Damage Aura Mana Regen: 0.65 Aura Bonus Armor: 2  +1 Armor",
            "required"=> " Sage's Mask & Ring of Protection (Item 3)."
        ),
        "Item #7"=> array(
            "name"=> " Force Staff",
            "cost"=> " 2200",
            "details"=> " Active: Force- Pushes any target unit 600 units in the direction it is facing. Double click to self-cast.",
            "effects"=> " +10 Intelligence +10 Damage + 10 Attack Speed",
            "required"=> " Staff of Wizardry & Quarterstaff."
        ),
        "Item #8"=> array(
            "name"=> " Crystalys",
            "cost"=> " 2150",
            "details"=> " Passive: Critical Strike- Grants a chance to deal critical damage on attack.",
            "effects"=> " +35 Damage  Critical Chance: 20%  Critical Damage: 175%",
            "required"=> " Broadsword & Blades of Attack"
        ),
        "Item #9"=> array(
            "name"=> " Helm of the Dominator",
            "cost"=> " 850",
            "details"=> " Active: Dominate- Take control of a non-hero, non-ancient target unit. Passive: Lifesteal-
            Gives lifesteal on attacks.",
            "effects"=> "+20 Damage +5 Armor Lifesteal: 15%",
            "required"=> " Morbid Mask & Helm of Iron Will"

        ),
        "Item #10"=> array(
            "name"=> " Demon Edge",
            "cost"=> " 2400",
            "details"=> " one of the oldest weapons forged by the Deom-Smith Abzidan, it killed
            its maker when he tested its edge.",
            "effects"=> " +46 Damage",
            "required"=> "No required build items"
        ),
    );

    include 'templates/items.php';
?>