<?php declare(strict_types=1);

/*
 * This file is part of the SepiphyLabs package.
 *
 * (c) Quynh Xuan Nguyen <seriquynh@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tests\SepiphyLabs\Oss\Providers;

use PHPUnit\Framework\TestCase;
use SepiphyLabs\Oss\Providers\ComposerProvider;

class ComposerProviderTest extends TestCase
{
    public function testGetName()
    {
        $provider = new ComposerProvider;

        $this->assertSame('composer', $provider->getName());
    }

    public function testGetAliases()
    {
        $provider = new ComposerProvider;

        $this->assertEquals(['php'], $provider->getAliases());
    }

    public function testGetFileName()
    {
        $provider = new ComposerProvider;

        $this->assertSame('composer', $provider->getFileName());
    }
}
