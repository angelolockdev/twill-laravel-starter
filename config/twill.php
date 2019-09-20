<?php

return [
    'block_editor' => [
        'block_single_layout' => 'layouts.block',
        'blocks' =>[
            'gallery' => [
                'title' => 'Gallery',
                'icon' => 'image',
                'component' => 'a17-block-gallery',
            ],
            'image_with_text' => [
                'title' => 'Image with text',
                'icon' => 'image-text',
                'component' => 'a17-block-image_with_text',
            ],
            'quote' => [
                'title' => 'Quote',
                'icon' => 'quote',
                'component' => 'a17-block-quote',
            ],
            'paragraph' => [
                'title' => 'Paragraph',
                'icon' => 'text',
                'component' => 'a17-block-paragraph',
            ],  
        ],
        'crops' => [
            'cover' => [
                'default' => [
                    [
                        'name' => 'default',
                        'ratio' => 1 / 1,
                        'minValues' => [
                            'width' => 100,
                            'height' => 100,
                        ],
                    ],
                ],
            ],
            'gallery' => [
                'default' => [
                    [
                        'name' => 'default',
                        'ratio' => 16 / 9,
                        'minValues' => [
                            'width' => 1024,
                            'height' => 768,
                        ],
                    ],
                ],
            ],
        ],
    ],
    'namespace' => 'App',
    'enabled' => [
        'users-management' => true,
        'media-library' => true,
        'file-library' => true,
        'dashboard' => true,
        'search' => true,
        'block-editor' => true,
        'buckets' => true,
        'users-image' => true,
        'users-description' => false,
        'site-link' => false,
        'settings' => false,
        'activitylog' => true,
    ], 
    'media_library' => [
        'disk' => 'libraries', 
        'file_service' => env('FILE_LIBRARY_FILE_SERVICE', 'A17\Twill\Services\FileLibrary\Local'),
        'endpoint_type' => env('MEDIA_LIBRARY_ENDPOINT_TYPE', 'local'),
        'cascade_delete' => env('MEDIA_LIBRARY_CASCADE_DELETE', false),
        'local_path' => env('MEDIA_LIBRARY_LOCAL_PATH'),
        'image_service' => env('MEDIA_LIBRARY_IMAGE_SERVICE'),
        'acl' => env('MEDIA_LIBRARY_ACL', 'private'),
        'filesize_limit' => env('MEDIA_LIBRARY_FILESIZE_LIMIT', 100),
        'allowed_extensions' => ['svg', 'jpg', 'gif', 'png', 'jpeg'],
        'init_alt_text_from_filename' => true,
        'translated_form_fields' => false,
    ],
];
