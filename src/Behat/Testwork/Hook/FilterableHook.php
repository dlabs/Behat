<?php

/*
 * This file is part of the Behat Testwork.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Behat\Testwork\Hook;

use Behat\Testwork\Hook\Scope\HookScope;

/**
 * Testwork filterable hook interface.
 *
 * Filterable hooks must implement this interface.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
interface FilterableHook extends Hook
{
    /**
     * Checks that current hook matches provided hook scope.
     *
     * @param HookScope $scope
     *
     * @return Boolean
     */
    public function filterMatches(HookScope $scope);
}