<html>
    <head>
        <title>Dota2 API - Items</title>
    </head>
    <body>
        <h1>Items</h1>
        <?php foreach($items as $key => $value) { ?>
            <h3><?php echo $key; ?></h3>
            <span>Cost:</span><?php echo $value['cost']; ?>
        <?php } ?>
    </body>
</html>
