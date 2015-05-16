<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Component\Organization\Loader;

use Xidea\Component\Base\Loader\ObjectLoaderInterface;

/**
 * @author Artur Pszczółka <a.pszczolka@xidea.pl>
 */
interface OrganizationLoaderInterface extends ObjectLoaderInterface
{
    /**
     * Returns a manufacturer by id.
     * 
     * @param int $id
     * 
     * @return \Xidea\Component\Organization\Model\OrganizationInterface
     */
    function load($id);
}
