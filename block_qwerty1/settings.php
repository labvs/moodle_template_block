<?php
// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Настройки нашего блока (доступны администратору)
 *
 * @package    block_qwerty1
 * @copyright  2019 MASU
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

// Это пример параметра плагина, который хранить целое число
// text1 и text2 беруться из файла с переводом 
if ($ADMIN->fulltree) {    
    $settings->add(new admin_setting_configtext('block_qwerty1_var1',
                get_string('text1', 'block_qwerty1'),
                get_string('text2', 'block_qwerty1'), 5, PARAM_INT));
                
    $settings->add(new admin_setting_configtext('block_qwerty1_var2',
                get_string('text3', 'block_qwerty1'),
                get_string('text4', 'block_qwerty1'), "text", PARAM_RAW_TRIMMED));
}

