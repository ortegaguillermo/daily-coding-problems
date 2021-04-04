<?php

use App\Http\Controllers\Problems\ProblemOne;
use Tests\TestCase;

class ProblemOneTest extends TestCase
{

    public function dataProviderFunction(): array
    {

        $input1 = [1, 2, 3, 4, 5];
        $expectedOutput1 = [120, 60, 40, 30, 24];

        $input2 = [3, 2, 1];
        $expectedOutput2 = [2, 3, 6];

        $input3 = [3, 2, 3];
        $expectedOutput3 = [6, 9, 6];

        return [
            'test-case-1' => [$input1, $expectedOutput1],
            'test-case-2' => [$input2, $expectedOutput2],
            'test-case-3' => [$input3, $expectedOutput3],
        ];

    }

    /**
     * @dataProvider dataProviderFunction
     * @param array $input
     * @param array $expectedOutput
     *
     * @return void
     */
    public function testGet(array $input, array $expectedOutput)
    {

        $output = ProblemOne::get($input);

        $this->assertSame(
            $expectedOutput,
            $output,
            'The output was not the expected, the behavior does not match the expected criteria'
        );

    }
}
