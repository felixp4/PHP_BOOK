<?php

class One {
    function foo() {
        echo "Hello form class One !";
    }

    function callMe() {
        $this->foo();
    }
}

class Two extends One {
    function foo() {
        echo "<br /> Hello from class Two !";
    }
}
$one = new One();
$one->callMe();

$two = new Two();
$two->callMe();