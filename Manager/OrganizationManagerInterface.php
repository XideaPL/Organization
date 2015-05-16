<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Component\Organization\Manager;

use Xidea\Component\Organization\Model\OrganizationInterface;

/**
 * @author Artur Pszczółka <a.pszczolka@xidea.pl>
 */
interface OrganizationManagerInterface
{
    /**
     * Saves a organization.
     * 
     * @param OrganizationInterface $organization
     */
    function save(OrganizationInterface $organization);

    /**
     * Updates a organization.
     * 
     * @param OrganizationInterface $organization
     */
    function update(OrganizationInterface $organization);

    /**
     * Deletes a organization.
     * 
     * @param OrganizationInterface $organization
     */
    function delete(OrganizationInterface $organization);
}
