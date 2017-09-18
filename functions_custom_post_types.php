<?php

add_action('init', 'create_custom_post_types'); // Add our HTML5 Blank Custom Post Type


function create_custom_post_types() {




            register_post_type('boutique', // Register Custom Post Type
                array(
                'labels' => array(
                    'name' => __('Boutiques', 'html5blank'), // Rename these to suit
                    'singular_name' => __('Boutique', 'html5blank'),
                    'add_new' => __('Ajouter', 'html5blank'),
                    'add_new_item' => __('Add New Boutique', 'html5blank'),
                    'edit' => __('Edit', 'html5blank'),
                    'edit_item' => __('Edit Boutique', 'html5blank'),
                    'new_item' => __('New Boutique', 'html5blank'),
                    'view' => __('View Boutique', 'html5blank'),
                    'view_item' => __('View Boutique', 'html5blank'),
                    'search_items' => __('Search Boutique', 'html5blank'),
                    'not_found' => __('No Boutiques found', 'html5blank'),
                    'not_found_in_trash' => __('No Boutique found in Trash', 'html5blank')
                ),
                'public' => true,
                'exclude_from_search' => false,
                'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
                'has_archive' => true,
                'supports' => array(
                    'title',
                    'thumbnail'
                ), // Go to Dashboard Custom HTML5 Blank post for supports
                'can_export' => true, // Allows export in Tools > Export
                'taxonomies' => array(
                ) // Add Category and Post Tags support
            ));

            register_post_type('event', // Register Custom Post Type
                array(
                'labels' => array(
                    'name' => __('Events', 'html5blank'), // Rename these to suit
                    'singular_name' => __('Event', 'html5blank'),
                    'add_new' => __('Ajouter', 'html5blank'),
                    'add_new_item' => __('Add New Event', 'html5blank'),
                    'edit' => __('Edit', 'html5blank'),
                    'edit_item' => __('Edit Event', 'html5blank'),
                    'new_item' => __('New Event', 'html5blank'),
                    'view' => __('View Event', 'html5blank'),
                    'view_item' => __('View Event', 'html5blank'),
                    'search_items' => __('Search Event', 'html5blank'),
                    'not_found' => __('No Events found', 'html5blank'),
                    'not_found_in_trash' => __('No Event found in Trash', 'html5blank')
                ),
                'public' => true,
                'exclude_from_search' => false,
                'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
                'has_archive' => true,
                'supports' => array(
                    'title',
                    'thumbnail'
                ), // Go to Dashboard Custom HTML5 Blank post for supports
                'can_export' => true, // Allows export in Tools > Export
                'taxonomies' => array(
                ) // Add Category and Post Tags support
            ));



}



?>
