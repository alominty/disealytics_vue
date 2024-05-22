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
 * @copyright  2021 onwards https://disea-projekt.de/
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

class block_disealytics_vue extends block_base {
    /**
     * Initialize the block.
     */
    public function init(): void {
        $this->title = get_string('pluginname', 'block_disealytics_vue');
    }

    /**
     * Get the block content.
     *
     * @return stdClass|null The block content.
     */
    public function get_content(): ?stdClass {
        if ($this->content !== null) {
            return $this->content;
        }

        // Include Vue.js globally
        global $PAGE, $USER, $CFG;
        $lang = current_language();
        if (empty($lang)) {
            $lang = $CFG->lang;
        }

        $PAGE->requires->js(new moodle_url('https://cdn.jsdelivr.net/npm/vue@3.2.0/dist/vue.global.min.js'), true);
        $PAGE->requires->js_call_amd('block_disealytics_vue/init_app', 'init', [
                'lang' => $lang,
                'langStrings' => $this->get_all_language_strings($lang),
        ]);

        $this->content = new stdClass();
        $this->content->text = '<div id="vue-app"></div>';
        $this->content->footer = '';

        return $this->content;
    }

    /**
     * Get all language strings for the block.
     *
     * @param string $lang The language code.
     * @return array The array of language strings.
     */
    private function get_all_language_strings($lang) {
        global $CFG;
        $component = 'block_disealytics_vue';
        $langfile = $CFG->dirroot . '/blocks/disealytics_vue/lang/' . $lang . '/block_disealytics_vue.php';
        $strings = [];

        if (file_exists($langfile)) {
            include($langfile);
            foreach ($string as $key => $value) {
                $strings[$key] = get_string($key, $component, $lang);
            }
        }
        return $strings;
    }

    /**
     * Specify where the block can be added.
     *
     * @return array The applicable formats.
     */
    public function applicable_formats(): array {
        return ['all' => true];
    }
}
