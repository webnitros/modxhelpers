<?php
/**
 * Created by Andrey Stepanenko.
 * User: webnitros
 * Date: 26.10.2022
 * Time: 10:03
 */

namespace ModxHelpers\Models;

use xPDOSimpleObject;

class Object extends xPDOSimpleObject
{
    public function save($cacheFlag = null)
    {
        if ($this->isNew()) {
            if (empty($this->get('createdon'))) {
                $this->set('createdon', time());
            }
        } else {
            $this->set('editedon', strtotime(date('Y-m-d H:i:s')));
        }
        return parent::save();
    }
}
