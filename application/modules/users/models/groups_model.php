<?php (defined('BASEPATH')) OR exit('No direct script access allowed');
/**
 * CMS Canvas
 *
 * @author      Mark Price
 * @copyright   Copyright (c) 2012
 * @license     MIT License
 * @link        http://cmscanvas.com
 */

class Groups_model extends DataMapper
{	
    public $table = "groups";
    public $has_many = array(
        'users' => array(
            'class' => 'users_model',
            'other_field' => 'groups',
            'join_self_as' => 'group',
            'model_path' => 'application/modules/users',
        ),
    );

    /*
     * Init
     *
     * Pre-popoulates the group object with data
     */
    public function init($data)
    {
        if (is_object($data)) {
            $data = object_to_array($data);
        }

        foreach ($data as $key => $value) 
        {
            $this->$key = $value;
        }
    }
}
