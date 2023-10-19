<?php

/**
 * This file is part of the Elephant.io package
 *
 * For the full copyright and license information, please view the LICENSE file
 * that was distributed with this source code.
 *
 * @copyright Wisembly
 * @license   http://www.opensource.org/licenses/MIT-License MIT License
 */

namespace ElephantIO\Engine\SocketIO;

/**
 * Implements the dialog with Socket.IO version 4.x
 *
 * @author Toha <tohenk@yahoo.com>
 */
class Version4X extends Version1X
{
    /** {@inheritDoc} */
    public function getName()
    {
        return 'SocketIO Version 4.X';
    }

    /** {@inheritDoc} */
    protected function getDefaultOptions()
    {
        return array_merge(parent::getDefaultOptions(), [
            'version' => 4,
            'max_payload' => 1e6,
        ]);
    }
}
