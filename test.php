<?php
require_once 'vendor/autoload.php'; // Include Composer's autoload

\Sentry\init([
    'dsn' => 'http://1937d96adff3ad76db240aedc9ad9194@dev.getsentry.net:8000/8',
    // Specify a fixed sample rate
    'traces_sample_rate' => 1.0,
  ]);   
class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

$apple = new Fruit();
$banana = new Fruit();
$apple->set_name('Apple');
$banana->set_name('Banana');

echo $apple->get_name();
echo "<br>";
echo $banana->get_name();
echo $banana->get_name();
?>