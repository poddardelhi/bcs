<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Insertion Page</title>
    <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
    <link rel="stylesheet" href="insert_form.css">
  </head>
  <body>
    <h1>Please input details</h1>
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
            <td id="submit"><input type="submit" name="submit" value="Submit"></td><br><br>
          </tr>
          <td>
            <td><input type=button onclick="location.href='showData.php'" value="Show Data"></td>
          </td>

      </table>

    </form>

  </body>
</html>
