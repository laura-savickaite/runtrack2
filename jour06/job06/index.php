
<!-- quand on veut comparer tjs mettre double =  -->

 <?php //var_dump ($_POST);?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php if ($_POST['style']=="style1"){
        echo '<link href="style1.css" rel="stylesheet">';
    } ?>
    <?php if ($_POST['style']=="style2"){
        echo '<link href="style2.css" rel="stylesheet">';
    } ?>
    <?php if ($_POST['style']=="style3"){
        echo '<link href="style3.css" rel="stylesheet">';
    } ?>
    <title>style</title>
</head>
<body>
<form action="index.php" method="post">
    <select name="style" id="style-select">
        <option value="">--Please choose an option--</option>
        <option value="style1">style 1</option>
        <option value="style2">style 2</option>
        <option value="style3">style 3</option>
    </select>
    <button id="button" type="submit">Submit</button>
</form>
</body>


