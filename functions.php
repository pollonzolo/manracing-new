<?php





function poltheme_script_enqueue() {

  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', "https://code.jquery.com/jquery-3.6.0.min.js", array(), '1.0.0', true);

  wp_enqueue_style('googlefonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap', false);
  wp_enqueue_style('googlefont', 'https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet', false);
  wp_enqueue_style('googlefont-2', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500&display=swap', false);
  // wp_enqueue_style('stylesheet', '/dist/app.css', false);
  wp_enqueue_script('svg', 'https://cdn.linearicons.com/free/1.0.0/svgembedder.min.js', array(), '1.0.0', true);
  wp_enqueue_style('slick-slider', "//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css", array(), '1.0.0', 'all');
  wp_enqueue_script('slick-slider', "//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js", array(), '1.0.0', true);

  wp_enqueue_style('customstyle', get_template_directory_uri() . '/dist/css/app.css', array(), '1.0.0', 'all');
  wp_enqueue_script('GSAP', "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js", array(), '1.0.0', true);
  wp_enqueue_script('scrollTrigger', "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollTrigger.min.js", array(), '1.0.0', true);
  wp_enqueue_script('customjs', get_template_directory_uri() . '/dist/js/app.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'poltheme_script_enqueue');
///////////////////////////////////////////////////////////////////////////////////////////////////
function projects_custom_post() {
    // creo e registro il custom post type
    register_post_type( 'projects', /* nome del custom post type */
        // definisco le varie etichette da mostrare nei menù
        array('labels' => array(
            'name' => 'Projects', /* nome, al plurale, dell'etichetta del post type. */
            'singular_name' => 'Project', /* nome, al singolare, dell'etichetta del post type. */
            'all_items' => 'All Projects', /* testo nei menu che indica tutti i contenuti del post type */
            'add_new' => 'Add new', /*testo del pulsante Aggiungi. */
            'add_new_item' => 'Add new Project', /* testo per il pulsante Aggiungi nuovo post type */
            'edit_item' => 'Edit Project', /*  testo modifica */
            'new_item' => 'New Project', /* testo nuovo oggetto */
            'view_item' => 'View Project', /* testo per visualizzare */
            'search_items' => 'Search Project', /* testo per la ricerca*/
            'not_found' =>  'Project not found', /* testo se non trova nulla */
            'not_found_in_trash' => 'No Project found in the bin', /* testo se non trova nulla nel cestino */
            'parent_item_colon' => ''
            ), /* fine dell'array delle etichette del menu */
            'description' => 'Raccolta di CD del portale', /* descrizione del post type */
            'public' => true, /* definisce se il post type sia visibile sia da front-end che da back-end */
            'publicly_queryable' => true, /* definisce se possono essere fatte query da front-end */
            'exclude_from_search' => false, /* esclude (false) il post type dai risultati di ricerca */
            'show_ui' => true, /* definisce se deve essere visualizzata l'interfaccia di default nel pannello di amministrazione */
            'query_var' => true,
            'menu_position' => 8, /* definisce l'ordine in cui comparire nel menù di amministrazione a sinistra */
            'menu_icon' => get_stylesheet_directory_uri() . 'https://mk0alessioangel8kd7h.kinstacdn.com/img/mia-icona.png', /* imposta l'icona da usare nel menù per il posty type */
            'rewrite'   => array( 'slug' => 'project', 'with_front' => false ), /* specificare uno slug per leURL */
            'has_archive' => true, /* definisci se abilitare la generazione di un archivio (tipo archive-cd.php) */
            'capability_type' => 'post', /* definisci se si comporterà come un post o come una pagina */
            'hierarchical' => false, /* definisci se potranno essere definiti elementi padri di altri */

            /* la riga successiva definisce quali elementi verranno visualizzati nella schermata di creazione del post */
            'supports' => array( 'title', 'editor', 'thumbnail','excerpt')
        ) /* fine delle opzioni */
    ); /* fine della registrazione */
    register_taxonomy('category', array('projects'), array(
    'hierarchical' => true,
    // 'labels' => $labels,
    'singular_label' => 'category',
    'all_items' => 'category',
    'query_var' => true,
    'rewrite' => array('slug' => 'category'))
    );
}

// Inizializzo la funzione
 add_action( 'init', 'projects_custom_post');
//////////////////////////////////////////////////////////////////////////////////////////////////////

/* --
 Custom post type and taxonomy for music

-- */


// function projects_custom_post(){
//     $labels = array(
//         'name' => _x('Project', 'post type general name', 'your_text_domain'),
//         'singular_name' => _x('Project', 'post type Singular name', 'your_text_domain'),
//         'add_new' => _x('Add project', '', 'your_text_domain'),
//         'add_new_item' => __('Add New Music', 'your_text_domain'),
//         'edit_item' => __('Edit Music', 'your_text_domain'),
//         'new_item' => __('New Music', 'your_text_domain'),
//         'all_items' => __('All Project', 'your_text_domain'),
//         'view_item' => __('View Project', 'your_text_domain'),
//         'search_items' => __('Search Music', 'your_text_domain'),
//         'not_found' => __('No Music found', 'your_text_domain'),
//         'not_found_in_trash' => __('No project on trash', 'your_text_domain'),
//         'parent_item_colon' => '',
//         'menu_name' => __('Project', 'your_text_domain')
//     );
//     $args = array(
//         'labels' => $labels,
//         'public' => true,
//         'publicly_queryable' => true,
//         'show_ui' => true,
//         'show_in_menu' => true,
//         'query_var' => true,
//         'rewrite' => array('slug' => 'project'),
//         'capability_type' => 'page',
//         'has_archive' => true,
//         'hierarchical' => true,
//         'menu_position' => null,
//         'menu_icon' => 'dashicons-format-audio',
//         'supports' => array('title', 'thumbnail', 'editor','excerpt')
//     );
//     $labels = array(
//         'name' => __('Category'),
//         'singular_name' => __('Category'),
//         'search_items' => __('Search'),
//         'popular_items' => __('More Used'),
//         'all_items' => __('All Categories'),
//         'parent_item' => null,
//         'parent_item_colon' => null,
//         'edit_item' => __('Add new'),
//         'update_item' => __('Update'),
//         'add_new_item' => __('Add new Category'),
//         'new_item_name' => __('New')
//     );
//     register_taxonomy('project_category', array('projects'), array(
// 		'hierarchical' => true,
// 		'labels' => $labels,
// 		'singular_label' => 'project_category',
// 		'all_items' => 'Category',
// 		'query_var' => true,
// 		'rewrite' => array('slug' => 'cat'))
//     );
//     register_post_type('projects', $args);
//     flush_rewrite_rules();
// }
// add_action('init', 'projects_custom_post');


/* --
 End of Custom post type and taxonomy for project

-- */




function poltheme_setup() {


  // Register WordPress nav menu
  register_nav_menu('top', 'Top menu');

  add_theme_support('title-tag');
  add_theme_support('menus');
  add_theme_support('custom-background');
  add_theme_support('custom-header');
  add_theme_support('post-thumbnails');
  add_theme_support( 'custom-logo' );
  register_nav_menu('primary', 'Primary Header Navigation');
  register_nav_menu('secondary', 'Footer Navigation');

}

add_action('init', 'poltheme_setup');



function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

//add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );


add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

?>
