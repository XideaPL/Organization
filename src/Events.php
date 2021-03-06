<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Organization;

/**
 * @author Artur Pszczółka <a.pszczolka@xidea.pl>
 */
abstract class Events
{
    /**
     * The PRE_SAVE event occurs when the organization is saved.
     */
    const PRE_SAVE = 'xidea_organization.organization.pre_save';
    
    /**
     * The POST_SAVE event occurs when the organization is saved.
     */
    const POST_SAVE = 'xidea_organization.organization.post_save';
    
    /**
     * The CREATE_INITIALIZE event occurs when the create process is initialized.
     */
    const CREATE_INITIALIZE = 'xidea_organization.organization.create_initialize';
    
    /**
     * The PRE_CREATE event occurs when the create process is initialized.
     */
    const PRE_CREATE = 'xidea_organization.organization.pre_create';
    
    /**
     * The CREATE_SUCCESS event occurs when the create process is initialized.
     */
    const CREATE_SUCCESS = 'xidea_organization.organization.create_success';
    
    /**
     * The FORM_VALID event occurs when the create process is initialized.
     */
    const FORM_VALID = 'xidea_organization.organization.form_valid';
    
    /**
     * The CREATE_COMPLETED event occurs when the create process is initialized.
     */
    const CREATE_COMPLETED = 'xidea_organization.organization.create_completed';
    
}
