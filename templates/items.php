<html>
    <head>
        <a name="TOP"></a>
        <a href="/index.php">Home</a>
        <title>Dota2 API - Items</title>
    </head>
    <body>
        <h1>Items</h1>
        <?php foreach($Items as $key => $value) { ?>
            <h3><?php echo $value['name']; ?></h3>
            <span><br />Cost:</span><?php echo $value['cost']; ?>
            <span><br />Details:</span><?php echo $value['details']; ?>
            <span><br />Effects:</span><?php echo $value['effects']; ?>
            <span><br />Required sub-items:</span><?php echo $value['required']; ?>
        <?php } ?>
        <br />
        <a href="#TOP">Go To Top of Page</a>
    </body>
</html>
