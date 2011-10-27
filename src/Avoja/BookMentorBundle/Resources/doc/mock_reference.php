<?php

$mock = $this->getMockBuilder('Namespace\To\ClassOrInterface')->
            disableOriginalConstructor()->
            getMock();
        
$twitter->expects($this->once())->
        method('method')->
        with('parameter')->
        will($this->returnValue($expectation));

?>
