<!DOCTYPE html>
<html lang = "en">
  <meta charset = "utf-8" />
  <title>Mortgage Results</title>
  <body>
  <?php
    $keys = array_keys($_GET);
    $apr = 0;
    $term = 0;
    $amount = 0;
    foreach ($keys as $key)
    {
      if($key == 'apr') {
          $apr = $_GET[$key] / 1200;
      } else if ($key == 'term') {
        $term = $_GET[$key] * 12;
      } else if ($key == 'amount') {
        $amount = $_GET[$key];
      }
    }
    $m = $amount * ($apr * (pow(($apr + 1),$term))) / ((pow(($apr + 1),$term)) - 1);
    $apr *= 1200;
    $term /= 12;
    echo "<html>
    <body>
    <a id='indexlink' href='../index.html'>Index.html</a><br><br>
    <a id='indexlink' href='mortgage.html'>Mortgage.html</a><br><br>
    <h1> Apr = $apr </h1>
    <h1> Term = $term </h1>
    <h1> Amount = $$amount </h1>
    <h1> Mortgage = $$m </h1>
    </body>
    </html>" ;
  ?>
</body>
</html>

