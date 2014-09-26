<html>
    <head>
        <title>Neur</title>
    </head>
    <body>
    <h1>This Simple Testing</h1>
    </body>
</html>
<?php
    require_once('init.php');
    try
    {
        $result = $restRestProxy->queryEntities('tasks');
    }
    catch(serviceException $c)
    {
        echo $c->getCode().' : '.$c->getMessage();
    }
    $entities = $result->getEntities();
    for($i=0; $i < count($entities); $i++)
    {
        if($i==0)
        {
            echo '<table border="1">';
                echo '<tr>';
                    echo '<th>Name</th>';
                    echo '<th>Cat</th>';
                    echo '<th>Date</th>';
                    echo '<th>Mark Complete</th>';
                    echo '<th>Delete</th>';
                echo '</tr>';
        }  
                echo '<tr>';
                        echo '<td>'.$entities[$i]->getPropertyValue('name').'</td>';
                        echo '<td>'.$entities[$i]->getPropertyValue('category').'</td>';
                        echo '<td>'.$entities[$i]->getPropertyValue('date').'</td>';
                        if($entities[$i]->getPropertyValue('complete')==false)
                        {
                            echo '<td><a href="#">Not Completed</a></td>';
                        }
                        else
                        {
                            echo '<td>Completed</td>';
                        }
                        echo '<td><a href="#">'.$entities[$i]->getPropertyValue('delete').'</a></td>';
    }
    for($i>0)
    {
        echo '</table>';
    }
    else
    {
        echo '<h2>No Item Found</h2>';
    }
?>
<hr>
<form name="abc" action="additem.php" method="post">
    <table>
        <tr>
            <td>Name : </td>
            <td> <input type="text" name="name"> </td>
        </tr>
        <tr>
            <td>Category : </td>
            <td> <input type="text" name="category"> </td>
        </tr>
        <tr>
            <td>Date : </td>
            <td> <input type="text" name="date"> </td>
        </tr>
        <tr>
            <td colspan="2"> <input type="submit" name="submit" value="Add Value"> </td>
        </tr>
    </table>
</form>