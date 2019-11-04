<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */

namespace Hyperf\Tracer;

use Hyperf\Contract\ConfigInterface;

class SpanTagManagerFactory
{
    public function __invoke()
    {
        $config = $container->get(ConfigInterface::class);
        $spanTag = new SpanTagManager();
        $spanTag->apply($config->get('opentracing.tags', []));
        return $spanTag;
    }
}
