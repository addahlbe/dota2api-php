<html>
    <head>
    	<A Name = "TOP".</A>
    	<a href="/index.php">Home</a>	
        <title>Dota2 API - Heroes</title>
    </head>
    <body>
        <h1>Heroes</h1>
        <?php foreach($Heroes as $key => $value) { ?>
            <h3><?php echo $key; ?></h3>
            <span>Name:</span><?php echo $value['name']; ?>
            <span><br />Spell 1:</span><?php echo $value['Spell 1']; ?>
            <span><br />Spell 2:</span><?php echo $value['Spell 2']; ?>
            <span><br />Spell 3:</span><?php echo $value['Spell 3']; ?>
            <span><br />Ultimate:</span><?php echo $value['Ultimate']; ?>
            <span><br />Type:</span><?php echo $value['Type']; ?>
        <?php } ?>
        <br />
        <A HREF="#TOP">Go To Top of Page <A>
    </body>
</html>