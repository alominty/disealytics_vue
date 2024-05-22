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
 * Initialize the Vue application.
 *
 * @module      block_disealytics_vue/init_app
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
define(['block_disealytics_vue/bundle'], function(MyLibrary) {
    return {
        /**
         * Initialize the Vue app with the provided parameters.
         *
         * @param {Object} params The initialization parameters.
         */
        init: function(params) {
            if (typeof Vue === 'undefined') {
                console.error('Vue is not loaded');
                return;
            }

            if (MyLibrary && MyLibrary.init) {
                MyLibrary.init(params.langStrings);
            } else {
                console.error('Failed to initialize the library');
            }
        }
    };
});






