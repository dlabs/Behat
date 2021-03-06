<?php

/*
 * This file is part of the Behat.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Behat\Behat\Definition\Printer;

use Behat\Testwork\Suite\Suite;

/**
 * Prints simple definitions list.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
final class ConsoleDefinitionListPrinter extends ConsoleDefinitionPrinter
{
    /**
     * {@inheritdoc}
     */
    public function printDefinitions(Suite $suite, $definitions)
    {
        $output = array();

        foreach ($definitions as $definition) {
            $output[] = strtr(
                '{suite} <def_dimmed>|</def_dimmed> <info>{type}</info> <def_regex>{regex}</def_regex>', array(
                    '{suite}' => $suite->getName(),
                    '{type}'  => str_pad($definition->getType(), 5, ' ', STR_PAD_LEFT),
                    '{regex}' => $this->getDefinitionPattern($suite, $definition),
                )
            );
        }

        $this->write(rtrim(implode(PHP_EOL, $output)));
    }
}
