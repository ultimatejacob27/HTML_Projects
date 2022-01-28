<!DOCTYPE html>
<html lang = "en">
  <meta charset = "utf-8" />
  <title>Confirmation</title>
  <link rel="stylesheet" href="Week08CSS1.css">
  <body>
  <?php
    $keys = array_keys($_GET);
    $toppings = "";
    foreach ($keys as $key)
    {
      if($key == 'first_name') {
          $first_name = $_GET[$key];
      } else if ($key == 'last_name') {
        $last_name = $_GET[$key];
      } else if ($key == 'address') {
        $address = $_GET[$key];
      } else if ($key == 'phone') {
        $phone = $_GET[$key];
      } else if ($key == 'topping0') {
          if ($_GET[$key]) {
              $toppings .= "Pepperoni ";
          }
      } else if ($key == 'topping1') {
        if ($_GET[$key]) {
            $toppings .= "Pineapple ";
        }
      } else if ($key == 'topping2') {
        if ($_GET[$key]) {
            $toppings .= "Sausage ";
        }
      } else if ($key == 'topping3') {
        if ($_GET[$key]) {
            $toppings .= "Mushrooms ";
        }
      } else if ($key == 'total') {
        $total = $_GET[$key];
      } else if ($key == 'card') {
        $card = $_GET[$key];
      } else if ($key == 'credit_card') {
        $credit_card = $_GET[$key];
      } else if ($key == 'exp_date') {
          $exp_date = $_GET[$key];
        }
    }
    
    echo "<html>
    <body>
    <header>
        <h1>Confirmation</h1><br>
    </header>
    <a id='indexlink' href='../index.html'>Index.html</a><br><br>
    <a id='indexlink' href='assign11.html'>assign11.html</a><br><br>
    <h1> First name: $first_name </h1>
    <h1> Last name: $last_name </h1>
    <h1> Address: $address </h1>
    <h1> Phone: $phone </h1>
    <h1> Toppings: $toppings </h1>
    <h1> Total = $$total </h1>
    <h1> Card: $card </h1>
    <h1> Card number: $credit_card </h1>
    <h1> Expiration  date: $exp_date </h1>
    <form action='assign11_a.php' method='GET'>
    <input type='submit' value='Confirm' name='confirm'>
    <input type='submit' value='Cancel' name='cancel'>
    </form>
    </body>
    </html>" ;
  ?>
</body>
</html>