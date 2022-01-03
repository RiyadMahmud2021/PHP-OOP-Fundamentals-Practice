<!-- PHP Namespaces -->

<!-- 
    - They allow for better organization by grouping classes that work together to perform a task
They allow the same name to be used for more than one class
    - They allow the same name to be used for more than one class
 -->

 <?php
    
    include "Html.php";
    
?>
<?php
    use Html as H;
    $table = new H\Table();
    $table->title = "My table";
    $table->numRows = 5;
?>
<html>
    <body>

        <?php $table->message(); ?>

    </body>
</html>