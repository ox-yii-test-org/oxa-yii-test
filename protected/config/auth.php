<?php
// create roles for users

return array(
    'guest' => array(
        'type' => CAuthItem::TYPE_ROLE,
        'description' => 'Guest',
        'bizRule' => null,
        'data' => null,
    ),
    'user' => array(
        'type' => CAuthItem::TYPE_ROLE,
        'description' => 'User',
        'children' => array(
            'guest',
        ),
        'bizRule' => null,
        'data' => null,
    ),
    'admin' => array(
        'type' => CAuthItem::TYPE_ROLE,
        'description' => 'Admin',
        'bizRule' => null,
        'data' => null,
    ),
);
