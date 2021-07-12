<?php
    
    header("Content-type:application/json");
    $connect = include($_SERVER['DOCUMENT_ROOT']."/School-Project/config/connect.php");
    include($_SERVER['DOCUMENT_ROOT']."/School-Project/config/mysql.php");
    $con = mysqli_connect($connect['server'],$connect['db_username'],$connect['db_password'],$connect['db_database']);

    $id = 811101;
    if ($con)
    {
        echo ("connect success");
        $sql = sqlcmd_selectStudent($id);
        $query = mysqli_query($con , $sql );
        if ($query)
        {
            // $row = mysqli_fetch_array($query);
            // foreach($row as $value){
            //     //Print the element out.
            //     echo $value ;
            // }



            // $i = 0;
            // while( $row = mysqli_fetch_array($query) )
            // {
            //     $Result[$i] = $row;
            //     $i++;
            // }
            // foreach ($query as $value) {
            //     echo "Array: $value
            // \n";
            // }
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