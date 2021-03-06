<?php

namespace Phpactor\Tests\Unit\UserInterface\Console\Dumper;

use PHPUnit\Framework\TestCase;
use Phpactor\UserInterface\Console\Dumper\JsonDumper;

class JsonDumperTest extends DumperTestCase
{
    protected function dumper()
    {
        return new JsonDumper();
    }

    /**
     * @testdox It dumps data to JSON
     */
    public function testDumpsJson()
    {
        $output = $this->dump(['hello' => 'test']);
        $this->assertEquals('{"hello":"test"}'.PHP_EOL, $output);
    }
}
