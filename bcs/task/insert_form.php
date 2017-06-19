<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Insertion Page</title>
  </head>
  <body>
    <form class="" action="insert2db.php" method="post">
      <table align="center" style="margin-top:100px">
        <tr>
          <td>ID:</td>
          <td><input type="text" name="ID" placeholder="eg.0123aB" required pattern="[a-zA-Z0-9]+"></td>
        </tr>
           <tr>
            <td>First Name:</td>
            <td><input type="text" name="FN" placeholder="First Name" required></td>
           </tr>
          <tr>
            <td>Last Name:</td>
            <td><input type="text" name="LN" placeholder="Last Name"required></td>
          </tr>
          <tr>
            <td><input type="submit" name="submit" value="Submit"></td>
          </tr>

      </table>

    </form>

  </body>
</html>
