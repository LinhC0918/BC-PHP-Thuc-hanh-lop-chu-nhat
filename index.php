<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
class Rectangle
{
    public $width;
    public $height;
    function __construct($width, $height)
    {
        $this->height = $height;
        $this->width = $width;
    }
    function getArea()
    {
        return $this->width * $this->height;
    }
    function getPerimeter()
    {
        return ($this->width + $this->height) * 2;
    }
    function display()
    {
        return "Your Rectangle{" . "width=" . $this->width . ", height=" . $this->height . "}";
    }
}
$rectangle = new Rectangle(10,20);
echo $rectangle->width.'<br>';
echo $rectangle->height.'<br>';
$rectangle->height = 30;
$rectangle->width = 20;

echo $rectangle->height.'<br>';
echo $rectangle->width.'<br>';
echo $rectangle->getPerimeter().'<br>';
echo $rectangle->getArea().'<br>';
echo ($rectangle->display());
?>
</body>
</html>