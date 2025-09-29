<?php
trait Logger {
    public function log($msg){ echo "Log: $msg<br>"; }
}

class App {
    use Logger;
}

$app = new App();
$app->log("Application started");
