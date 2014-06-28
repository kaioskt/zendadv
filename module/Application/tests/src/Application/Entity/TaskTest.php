<?php
namespace Application\Entity;

use SONBase\Test\TestCase;

class TaskTest extends TestCase
{
    public function test_verifica_se_metodo_existe()
    {
        $class = class_exists("\\Application\\Entity\\Task");
        $this->assertTrue($class);
    }
}
