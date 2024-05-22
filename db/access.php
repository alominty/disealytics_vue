<?php

$capabilities = array(
        'block/disealytics_vue:view' => array(
                'captype' => 'read',
                'contextlevel' => CONTEXT_BLOCK,
                'archetypes' => array(
                        'guest' => CAP_PREVENT,
                        'student' => CAP_ALLOW,
                        'teacher' => CAP_ALLOW,
                        'editingteacher' => CAP_ALLOW,
                        'manager' => CAP_ALLOW
                )
        )
);
