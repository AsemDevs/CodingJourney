# WordPress Notes

- [Posts loop Based on Category](#posts-loop-based-on-category)
- [add short_code to theme](#add-short_code-to-theme)
- [Custom Shortcode in WordPress](#custom-shortcode-in-wordpress)
- [List Of Template Tags](#list-of-template-tags)

## Posts loop Based on Category

```php
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'category'        => '23',
        'posts_per_page' => 5,
    );
    $arr_posts = new WP_Query( $args );
        
    if ( $arr_posts->have_posts() ) :
        
        while ( $arr_posts->have_posts() ) :
            $arr_posts->the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <?php
                if ( has_post_thumbnail() ) :
                    the_post_thumbnail();
                endif;
                ?>
                <header class="entry-header">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                </header>
                <div class="entry-content">
                    <?php the_excerpt(); ?>
                    <a href="<?php the_permalink(); ?>">Read More</a>
                </div>
            </article>
            <?php
        endwhile;
    endif;
```

## add short_code to theme

```php
    <?php echo do_shortcode("[your_shortcode]"); ?>
```

## Custom Shortcode in WordPress

```php
    // function that runs when shortcode is called
    function wpb_demo_shortcode() { 
    
    // Things that you want to do.
    $message = 'Hello world!'; 
    
    // Output needs to be return
    return $message;
    }
    // register shortcode
    add_shortcode('greeting', 'wpb_demo_shortcode');
```

## List Of Template Tags

### Post tags

- body_class()

```php
// Displays the class names for the body element.
body_class( string|string[] $class = '' );

// Add specific CSS class by filter.
add_filter( 'body_class', function( $classes ) {
    return array_merge( $classes, array( 'class-name' ) );
} );

```

- get_the_category_list()

```php
// Displays the category list for the current post.
get_the_category_list( string $separator = ', ' );

// By leaving the $separator value empty, it will generate an unordered list instead, complete with classes.
<?php echo get_the_category_list(); ?>
```
