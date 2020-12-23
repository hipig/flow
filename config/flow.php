<?php

return [

    /**
     * 列表默认页个数
     */
    'page_size' => 15,

    /**
     * 系统设置分组
     */
    'setting_groups' => [
        [
            'key' => 'site',
            'label' => '网站设置',
            'description' => '网站的基础信息，包括名称、LOGO 及 SEO'
        ],
        [
            'key' => 'profile',
            'label' => '个人简介',
            'description' => '个人联系方式、相关介绍'
        ]
    ]

];
