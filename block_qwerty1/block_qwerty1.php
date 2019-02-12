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
 * QWERTY1 Block
 *
 * @package    block_qwerty1
 * @copyright  2019 MASU
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// Если переделывать этот плагин под себя, то надо везде заменить block_qwerty1 на что-то свое

class block_qwerty1 extends block_base {
    function init() {
        $this->title = get_string('pluginname','block_qwerty1');
    }

    function has_config() {
        return true;
    }

    function get_content() {
        // Глобальные переменные-массивы, в которых куча всего нужного
        global $USER, $CFG, $DB, $OUTPUT;
        // Если в контенте пусто, то сразу его возвращаем
        if ($this->content !== NULL) {
            return $this->content;
        }
        // В противном случае делаем новый объект
        // и в него потом запихиваем текст, который наш плагин покажет
        $this->content = new stdClass;
        $this->content->text = ''; //собственно сам текст
        $this->content->footer = ''; //это нижняя часть блока (т.е. подвал)

        $this->content->text .= 'Основной текст плагина <BR>';
        $this->content->footer .= 'Текст, который находится в подвале плагина<BR>';
        
        // Непонятная штука, но походу дела она проверят на предмет того, пустой ли у нас контент или нет
        if (empty($this->instance)) {
            return $this->content;
        }

        //-----------------------------
        // Вот тут можно писать все что угодно и добавлять к основному тексту плагина
        $this->content->text .='смотрим что находится внутри переменной $USER';
        // А тут в цикле перебираем массив $USER и выводим в плагин
        // ключ (т.е. имя ячейки массива) и его значение 
        foreach ($USER as $key=>$value){
            $this->content->text .=$key;
            $this->content->text .=" - ";
            $this->content->text .=$value;
            $this->content->text .="<BR>";            
        }    
        
        //-----------------------------        
        // Эта штука возвращает обратно в мудлу то что мы тут натворили
        return $this->content;
    }
}


