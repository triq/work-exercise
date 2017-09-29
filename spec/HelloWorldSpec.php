<?php

namespace spec;

use HelloWorld;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class HelloWorldSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(HelloWorld::class);
    }

    function it_greets_with_hello_world() {
    	$this->greet()->shouldReturn('HelloWorld');
    }
}
