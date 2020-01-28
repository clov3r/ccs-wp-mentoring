<div class="carousel-wrapper">
    <div class="carousel">

<?php
$query_images_args = array(
    'post_type'      => 'attachment',
    'post_mime_type' => 'image',
    'post_status'    => 'inherit',
    'posts_per_page' => - 1,
);

$query_images = new WP_Query( $query_images_args );

foreach ( $query_images->posts as $image ) {
?>

<img class="carousel__photo initial" src="<?php echo wp_get_attachment_url( $image->ID ); ?>">

<?php } ?>
        <div class="carousel__button--next"></div>
        <div class="carousel__button--prev"></div>
    </div>
</div>
