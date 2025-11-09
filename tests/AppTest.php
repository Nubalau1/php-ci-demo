<?php
namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\App;

class AppTest extends TestCase {
    public function testGreet() {
        $app = new App();
        $this->assertEquals("Hello, Bob", $app->greet("Bob"));
    }
}
