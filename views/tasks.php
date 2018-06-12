<?php

foreach ($tasks as $task) {
    echo '- '.$task["name"].'<br />';
}

?>

<html>

<head>
    <title>ToDo List</title>
<meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

<div>
    
    <form method="post" action="../index.php/tasks">
    <input name="input">
        <button type="submit">Va chercher !!</button>
    
    
    
     
    <input name="input2">
        <button type="submit">juste pour effacer!</button>
    
    </form>
    
    
    </div>



</body>
</html