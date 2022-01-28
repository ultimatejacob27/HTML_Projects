<!DOCTYPE html>
<html lang = "en">
  <meta charset = "utf-8" />
  <title>Confirmation</title>
  <link rel="stylesheet" href="Week08CSS1.css">
  <body>
  <?php
    $keys = array_keys($_GET);
    $confirm = "";
    foreach ($keys as $key)
    {
      if($key == 'confirm') {
          $confirm = 'Confirmed';
      } else if ($key == 'cancel') {
        $confirm = 'Cancelled';
      }
    }
    
    echo "<html>
    <body>
    <a id='indexlink' href='../index.html'>Index.html</a><br><br>
    <a id='indexlink' href='assign11.html'>assign11.html</a><br><br>
    <h1> $confirm </h1>
    </body>
    </html>" ;
  ?>
</body>
</html>