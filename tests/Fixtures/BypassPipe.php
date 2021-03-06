<?php
/*
 * This file is part of the OpxCore.
 *
 * Copyright (c) Lozovoy Vyacheslav <opxcore@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace OpxCore\Tests\Pipeline\Fixtures;


class BypassPipe
{
    public function handle($passable, $next, $arg = null)
    {
        return $passable;
    }
}