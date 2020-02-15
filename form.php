<html>
    <body>
        <h1>Volume Calculator Output</h1>
        <p>Summary of Calculations:</p>
        <br>
        <strong>Volume of Rectangle</strong>
        <p>Length: <?php echo $_POST["length"]?></p>
        <p>Width: <?php echo $_POST["width"]?></p>
        <p>Height: <?php echo $_POST["height"]?></p>
        <br>
        <p>Volume of the Rectangle is: <strong><?php echo $_POST["width"]*$_POST["length"]*$_POST["height"] ?></strong></p>
            
        <strong>Volume of a Cone</strong>
        <p>Radius: <?php echo $_POST["radius"] ?></p>
        <p>Height: <?php echo $_POST["height2"] ?></p>
        <p>Volume of the Rectangle is: <strong><?php echo (1/3)*(3.14)*($_POST["radius"]*$_POST["radius"])*$_POST["height2"]?></strong></p>
    </body>
</html>