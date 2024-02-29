<?php 
get_header();


$args = array(
    'post_type' => 'books',
    'posts_per_page' => -1
);

$query = new WP_Query( $args );

if ( $query->have_posts() ) : ?>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mt-10">
    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
        <div class="bg-white p-4 shadow-md rounded-md text-center">
            <h2 class="text-xl font-bold mb-2"><?php the_title(); ?></h2>
            <div class="text-gray-600 overflow-hidden"><?php the_content(); ?></div>
        </div>
    <?php endwhile; ?>
    </div>
    <?php wp_reset_postdata(); 
else: ?>
    <p class="text-red-500"><?php _e( 'Przykro nam, nie ma żadnej książki na liście.', 'textdomain' ); ?></p>
<?php endif; ?>
