<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `people` WHERE CONCAT(`ID`, `FN`, 'LN') LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);

}
 else {
    $query = "SELECT * FROM `people`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "password", "myDB");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<!DOCTYPE html>

<html>

    <head>
        <title>DATA DISPLAY WITH SEARCH OPERATION</title>
        <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
    		<link rel="stylesheet" href="showData.css">

    </head>
    <body>
<h1 id="heading"> DATA DISPLAY WITH SEARCH OPERATION </h1>
        <form action="showData.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="Filter"><br><br>

            <table border="1"width="50%">
                <tr>
                    <th>Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['ID'];?></td>
                    <td><?php echo $row['FN'];?></td>
                    <td><?php echo $row['LN'];?></td>

                </tr>
                <?php endwhile;?>
            </table>
        </form>

    </body>
</html>
