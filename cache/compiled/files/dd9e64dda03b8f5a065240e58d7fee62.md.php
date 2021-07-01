<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/wamp64/www/morganButton.dev/user/pages/03.momo/blog.md',
    'modified' => 1625110435,
    'data' => [
        'header' => [
            'title' => 'momo',
            'root_of_blog' => true,
            'content' => [
                'items' => [
                    0 => '@self.children'
                ],
                'limit' => 10,
                'order' => [
                    'by' => 'date',
                    'dir' => 'desc'
                ]
            ]
        ],
        'frontmatter' => 'title: momo
root_of_blog: true
content:
    items:
        - \'@self.children\'
    limit: 10
    order:
        by: date
        dir: desc',
        'markdown' => ''
    ]
];
