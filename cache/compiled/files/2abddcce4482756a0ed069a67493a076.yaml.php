<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/morganButton.dev/user/themes/typhoon/blueprints/post.yaml',
    'modified' => 1625095586,
    'data' => [
        'title' => 'Blog',
        'extends@' => 'default',
        'form' => [
            'fields' => [
                'tabs' => [
                    'fields' => [
                        'post' => [
                            'type' => 'tab',
                            'title' => 'THEME_TYPHOON.BLUEPRINTS.POST',
                            'ordering@' => 2,
                            'fields' => [
                                'blog_layout_section' => [
                                    'type' => 'section',
                                    'title' => 'THEME_TYPHOON.BLUEPRINTS.LAYOUT_CONFIGURATION',
                                    'underline' => true,
                                    'ordering@' => 1,
                                    'import@' => [
                                        'type' => 'partials/blog'
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
