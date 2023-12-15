<?php
    include './vendor/autoload.php';
    use test\Classes\Test;
    use test\Controller\TestController;
    $test = new Test();
    $exemple = new TestController();
    $test->verif();
    $exemple->exemple();
?>
