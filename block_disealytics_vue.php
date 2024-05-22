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
 * block_disealytics_vue is defined here.
 *
 * @package    block_disealytics_vue
 * @copyright 2021 onwards https://disea-projekt.de/
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();
global $CFG, $PAGE;

/**
 * Block class for the disealytics_vue plugin.
 */
class block_disealytics_vue extends block_base {
    /**
     * Initialize the block.
     *
     * @return void
     * @throws coding_exception
     */
    public function init(): void {
        $this->title = get_string('pluginname', 'block_disealytics_vue');
    }

    /**
     * Get the content of the block.
     *
     * @return stdClass
     */
    public function get_content(): stdClass {
        if ($this->content !== null) {
            return $this->content;
        }

        // Embed Vue.js globally into the page.
        $this->page->requires->js(new moodle_url('https://cdn.jsdelivr.net/npm/vue@3.2.0/dist/vue.global.min.js'), true);

        // Embed the language strings into the page.
        $this->page->requires->js_call_amd('block_disealytics_vue/init_app', 'init', [
                'langStrings' => $this->get_all_language_strings(),
        ]);

        $this->content = new stdClass();
        $this->content->text = '<div id="vue-app"></div>';
        $this->content->footer = '';

        return $this->content;
    }

    /**
     * Get all language strings for the block.
     *
     * @return array
     * @throws coding_exception
     */
    private function get_all_language_strings() {
        global $CFG;
        $component = 'block_disealytics_vue';
        $langfile = $CFG->dirroot . '/blocks/disealytics_vue/lang/en/block_disealytics_vue.php';
        $strings = [];

        if (file_exists($langfile)) {
            include($langfile);
            foreach ($string as $key => $value) {
                $strings[$key] = get_string($key, $component);
            }
        }
        return $strings;
    }

    /**
     * Define the capabilities required by this block.
     *
     * @return array
     */
    public function applicable_formats(): array {
        return ['all' => true];
    }
}
