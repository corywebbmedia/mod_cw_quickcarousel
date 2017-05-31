<?php
/**
 * @copyright   Copyright (C) 2015-2016 Cory Webb Media, LLC. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Get the slides to render.
$slides_obj = json_decode($params->get('slides'));
$slides = array();
for($i=0; $i<count($slides_obj->image); $i++)
{
    $slides[] = array(
        'image'   => $slides_obj->image[$i],
        'title'   => $slides_obj->title[$i],
        'caption' => $slides_obj->caption[$i],
        'link'    => $slides_obj->link[$i]
    );
}

// Get the module class suffix
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

require JModuleHelper::getLayoutPath('mod_cw_quickcarousel', $params->get('layout', 'default'));
