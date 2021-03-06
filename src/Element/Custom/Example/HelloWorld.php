<?php
/**
 * This file is part of the Hoopless package.
 *
 * (c) Ouxsoft <contact@Ouxsoft.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace LHTML\Element\Custom\Example;

use Ouxsoft\PHPMarkup\Element\AbstractElement;

/**
 * Class HelloWorld
 * @package LHTML\Element\Custom\Example
 */
class HelloWorld extends AbstractElement
{
    /**
     * Prints Hello, World
     *
     * @return mixed|string
     */
    public function onRender() : string
    {
        return 'Hello, World';
    }
}
