<?php

return [

    // Mail Notification
    'mail_notification' => env('MAIL_NOTIFICATION') ?: false,

    // Default Avatar
    'default_avatar' => env('DEFAULT_AVATAR') ?: '/images/default.png',

    // Default Icon
    'default_icon' => env('DEFAULT_ICON') ?: '/images/favicon.ico',

    // Meta
    'meta' => [
        'keywords' => 'Jimmy的技术乐园,blog,jimmy9876,laravel,vuejs',
        'description' => 'laravel + vue.js can do everthing!'
    ],

    // Social Share
    'social_share' => [
        'article_share'    => env('ARTICLE_SHARE') ?: true,
        'discussion_share' => env('DISCUSSION_SHARE') ?: true,
        'sites'            => env('SOCIAL_SHARE_SITES') ?: 'google,twitter,weibo,qq,wechat',
        'mobile_sites'     => env('SOCIAL_SHARE_MOBILE_SITES') ?: 'google,twitter,weibo,qq,wechat',
    ],

    // Google Analytics
    'google' => [
        'id'   => env('GOOGLE_ANALYTICS_ID', 'Google-Analytics-ID'),
        'open' => env('GOOGLE_OPEN') ?: false
    ],

    // Article Page
    'article' => [
        'title'       => '穷则独善其身，达则兼济天下.',
        'description' => '原博客地址  http://jimmy9876.top',
        'number'      => 15,
        'sort'        => 'desc',
        'sortColumn'  => 'published_at',
    ],

    // Discussion Page
    'discussion' => [
        'number' => 20,
        'sort'   => 'desc',
        'sortColumn' => 'created_at',
    ],

    // Footer
    'footer' => [
        'github' => [
            'open' => true,
            'url'  => 'https://github.com/jimmy9876',
        ],
        'weibo' => [
            'open' => true,
            'url'  => 'http://weibo.com/u/3270306430'
        ],
        'meta' => '© Jimmy的技术乐园 2017. Designed by Jimmy Eric',
    ],

    'license' => '版权声明©<br/>自由转载-非商用-非衍生-保持署名<a rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/">（创意共享4.0许可证）</a>.',

];
