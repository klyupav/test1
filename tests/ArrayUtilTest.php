<?php

namespace Tests;

use App\ArrayUtil;
use PHPUnit\Framework\TestCase;

class ArrayUtilTest extends TestCase
{
    protected array $data1;
    protected array $data2;

    protected function setUp(): void
    {
        $this->data1 = [
            'parent.child.field' => 1,
            'parent.child.field2' => 2,
            'parent2.child.name' => 'test',
            'parent2.child2.name' => 'test',
            'parent2.child2.position' => 10,
            'parent3.child3.position' => 10,
        ];

        $this->data2 = [
            'parent' => [
                'child' => [
                    'field' => 1,
                    'field2' => 2,
                ],
            ],
            'parent2' => [
                'child' => [
                    'name' => 'test',
                ],
                'child2' => [
                    'name' => 'test',
                    'position' => 10,
                ],
            ],
            'parent3' => [
                'child3' => [
                    'position' => 10,
                ],
            ],
        ];
    }

    public function testDecodeData()
    {
        $util = new ArrayUtil();
        $result1 = $util->decodeData($this->data1);
        $this->assertEquals($this->data2, $result1);
    }

    public function testEncodeData()
    {
        $util = new ArrayUtil();
        $result2 = $util->encodeData($this->data2);
        $this->assertEquals($this->data1, $result2);
    }
}
