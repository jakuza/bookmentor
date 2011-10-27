<?php

$mock = $this->getMock('Namespace\To\ClassOrInterface');
$mock->expects($this->once())
    ->method('method')
    ->will($this->returnValue($expectation));


?>
