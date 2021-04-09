<!DOCTYPE html>
<html>
<body>

<?php

class Auto
{
    private $color;
    private $engine;
    private $horsepower;


    private function checkColor($color)
    {
        $allowedColors = array('red', 'white', 'blue');
        if (in_array($color, $allowedColors)) {
            return 'Your car color ' . $color . ' is OK';
        } else {
            return 'Your car color does not accepted';
        }
    }

    private function checkEngine($engine)
    {
        $allowedEngine = array('2', '2.5', '3');
        if (in_array($engine, $allowedEngine)) {
            return 'Your car engine size ' . $engine . ' is OK';
        } else {
            return 'Your car engine does not accepted';
        }
    }

    private function checkPower($horsepower)
    {
        if ($horsepower > 100 && $horsepower < 280) {
            return 'Your car horsepower size ' . $horsepower . ' is OK';
        } else {
            return 'Your car horsepowr does not accepted';
        }
    }

    public function setParams($color, $engine, $horsepower)
    {
        $displayColor = $this->checkColor($color);
        $displayEngine = $this->checkEngine($engine);
        $displayPower = $this->checkPower($horsepower);

        echo $displayColor;
        echo $displayEngine;
        echo $displayPower;
    }

}

abstract class NotifySystem
{
    protected $to;
    abstract public function __construct($to);
    abstract public function notify($message);
}

class SMS extends NotifySystem
{
    public function __construct($to)
    {
       $this->to = $to;
    }

    public function notify($message)
    {
        echo 'SMS sent successfully'. $this->to . '<br>';
    }
}

class Email extends NotifySystem
{
    public function __construct($to)
    {
       $this->to = $to;
    }
    public function notify($message)
    {
        echo 'Email sent successfully'. $this->to . '<br>';
    }

}

class Push extends NotifySystem
{
    public function __construct($to)
    {
       $this->to = $to;
    }
    public function notify()
    {
        echo 'Push notification sent successfully' . '<br>';
    }
}


$notifiers[] = new SMS('+37477047004');
$notifiers[] = new Email('davidanielyan@gmail.com');
$notifiers[] = new Push('bla');

foreach ($notifiers as $notify) {

    if ($notify instanceof NotifySystem) {
        $notify->notify('');
    } else {
        echo 'Something goes wrong';
    }
}
?>

</body>
</html>
