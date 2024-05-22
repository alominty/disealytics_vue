<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Web services for block_disealytics_vue.
 *
 * @package    block_disealytics_vue
 * @category   external
 * @copyright  2021 onwards https://disea-projekt.de/
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$functions = array(
        'block_disealytics_vue_get_data' => array(
                'classname'   => 'block_disealytics_vue_external',
                'methodname'  => 'get_data',
                'classpath'   => 'blocks/disealytics_vue/externallib.php',
                'description' => 'Get data from block_disealytics_vue',
                'type'        => 'read',
                'capabilities'=> 'block/disealytics_vue:view',
                'ajax'        => true,
        ),
);

$services = array(
        'block_disealytics_vue_service' => array(
                'functions' => array('block_disealytics_vue_get_data'),
                'restrictedusers' => 0,
                'enabled' => 1,
        ),
);
