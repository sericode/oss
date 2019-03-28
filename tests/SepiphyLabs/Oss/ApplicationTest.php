<?php declare(strict_types=1);

/*
 * This file is part of the SepiphyLabs package.
 *
 * (c) Quynh Xuan Nguyen <seriquynh@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tests\SepiphyLabs\Oss;

use PHPUnit\Framework\TestCase;
use SepiphyLabs\Oss\Application;

class ApplicationTest extends TestCase
{
    public function testConstructor()
    {
        $application = new Application;

        $this->assertSame('Oss', $application->getName());
    }
}
