<?php

namespace TDD\Test;

require dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';
use PHPUnit\Framework\TestCase;
use TDD\Receipt;

class ReceiptTest extends TestCase
{
    public function setUp(): void
    {
        $this->receipt = new Receipt();
    }

    public function tearDown(): void
    {
        unset($this->receipt);
    }

    public function testTotal()
    {
        $inputs = [0,5,8];
        $output = $this->receipt->total($inputs);
        $this->assertEquals(13,$output,'messages equals');
    }
}