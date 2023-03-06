<?php

declare(strict_types=1);

namespace Yiisoft\Translator\Message\Db\Tests\Pgsql;

use Yiisoft\Translator\Message\Db\Tests\AbstractMessageSourceTest;
use Yiisoft\Translator\Message\Db\Tests\Support\PgsqlHelper;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 *
 * @group pgsql
 */
final class PgsqlMessageSourceTest extends AbstractMessageSourceTest
{
    use PgsqlHelper;
}