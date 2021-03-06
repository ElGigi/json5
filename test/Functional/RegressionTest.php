<?php

/*
 * This file is part of the colinodell/json5 package.
 *
 * (c) Colin O'Dell <colinodell@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ColinODell\Json5\Test\Functional;

use PHPUnit\Framework\TestCase;

class RegressionTest extends TestCase
{
    public function testArrayWithFirstElement0()
    {
        $json = '[0]';

        $this->assertSame(array(0), json5_decode($json));
    }

    /**
     * @expectedException \ColinODell\Json5\SyntaxError
     */
    public function testOpenCurlyBraceOnly()
    {
        json5_decode('{');
        $this->fail('Should have thrown a syntax error');
    }

    /**
     * @expectedException \ColinODell\Json5\SyntaxError
     */
    public function testOpenSquareBraceOnly()
    {
        json5_decode('[');
        $this->fail('Should have thrown a syntax error');
    }
}
