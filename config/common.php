<?php
return [
    'user' => [
        'avatar_path' => 'upload/',
        'default_avatar' => 'images/default.png',
        'user_limit' => 30,
        'role' => [
            'user' => 1,
            'admin' => 2,
        ],
        'confirmed' => [
            'is_confirm' => 1,
            'not_confirm' => 0,
        ],
        'confirmation_code' => [
            'length' => 10,
        ],
        'risk_level' => 30,
        'provider' => [
            'facebook' => 0,
            'google' => 1,
            'github' => 2,
        ]
    ],
    'limit' => [
        'page_limit' => 10,
        'name_max' => 60,
        'description_max' => 60000,
        'image_size' => 5000,
        'number_min' => 0,
        'number_max' => 200,
        'place_max' => 200,
        'title_max' => 250,
        'content_max' => 60000,
    ],
    'place_holders' => [
        'title' => 'Your Event title',
        'content' => 'Your Event content',
        'event_time' => 'Your Event time',
        'choose_one' => '-- Choose one --',
    ],
    'post' => [
        'is_published' => 1,
        'un_published' => 0,
        'limit' => 1,
    ],
    'message' => [
        'type' => [
            'match_start' => 0,
            'match_end' => 1,
            'user_bet' => 2,
            'comment_reply' => 3,
            'user_event' => 4,
        ],
        'check_time' => 10,
        'user_message_limit' => 5,
    ],
    'notification' => [
        'no' => 0,
        'yes' => 1,
    ],
    'comment' => [
        'commentable_type' => [
            'post_id' => 0,
        ],
    ],
    'encrypter_token_string' => 'james_nguyen',
];
