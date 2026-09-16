<?php
/**
 * Theme header: document start and opening of the Bootstrap grid.
 *
 * Closes in footer.php.
 *
 * @package hhp
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<?php
get_template_part( 'inc/hhpmetatags' );
wp_head();
?>
</head>

<body <?php body_class(); ?>>
<?php
if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
}

get_template_part( 'inc/hhpheader' );
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-7 col-md-push-3">
            <ol class="breadcrumb">
                <li>
                    <a href="https://www.historiography-project.com">
                        <i class="glyphicon glyphicon-home"></i>
                        <span class="screen-reader-text"><?php esc_html_e( 'HHP home', 'hhp' ); ?></span>
                    </a>
                </li>
                <li<?php echo is_front_page() ? ' class="active"' : ''; ?>>
                    <?php if ( is_front_page() ) : ?>
                        <?php esc_html_e( 'Clippings and Commentary', 'hhp' ); ?>
                    <?php else : ?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <?php esc_html_e( 'Clippings and Commentary', 'hhp' ); ?>
                        </a>
                    <?php endif; ?>
                </li>
                <?php if ( ! is_front_page() ) : ?>
                    <li class="active">
                        <?php
                        if ( is_404() ) {
                            esc_html_e( 'Page not found', 'hhp' );
                        } elseif ( is_search() ) {
                            printf(
                                /* translators: %s: search query */
                                esc_html__( 'Search: %s', 'hhp' ),
                                get_search_query()
                            );
                        } elseif ( is_singular() ) {
                            echo esc_html( get_the_title() );
                        } elseif ( is_archive() ) {
                            echo wp_kses_post( get_the_archive_title() );
                        }
                        ?>
                    </li>
                <?php endif; ?>
            </ol>
            <div id="content" class="site-content">
