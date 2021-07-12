<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8" />
    <title>ShowClassStudent</title>
    </head>
    <body>
    <p>this is a test</p>
    <?php
    //header("Content-type:application/json");
    $connect = include($_SERVER['DOCUMENT_ROOT']."/School-Project/config/connect.php");
    include($_SERVER['DOCUMENT_ROOT']."/School-Project/config/mysql.php");
    $con = mysqli_connect($connect['server'],$connect['db_username'],$connect['db_password'],$connect['db_database']);

    $grade = 2;
    $class = '丙';
    if ($con)
    {
        //echo ("connect success");
        $sql = sqlcmd_showClassStudent( $grade , $class );
        $query = mysqli_query($con , $sql );
        if ($query)
        {
            echo "<table border = 1><tr>";
            while( $meta = mysqli_fetch_field($query) )
                echo "<td>".$meta->name."</td>";
            echo "</tr>";
            $total = mysqli_num_fields( $query);
            while ( $row = mysqli_fetch_row($query) )
            {
                echo "<tr>";
                for( $i = 0 ; $i <= $total -1 ; $i++)
                    echo "<td>".$row[$i]."</td>";
                echo "</tr>";
            }
            echo "</table>";
        }
        else
        {
            echo ("fail to query");
        }
    }
    else
    {
        echo ("connect fail");
    }
    mysqli_close($con);
?>
    </body>
</html>




