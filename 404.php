<?php
/**
 * 404 template. Header/footer own the grid, so this file is content only.
 *
 * @package hhp
 */

get_header();
?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <section class="error-404 not-found">
                <header class="page-header">
                    <h1 class="page-title"><?php esc_html_e( 'That page can’t be found.', 'hhp' ); ?></h1>
                </header>

                <div class="page-content">
                    <p><?php esc_html_e( 'Nothing was found at this address. Try a search.', 'hhp' ); ?></p>
                    <?php get_search_form(); ?>
                </div>
            </section>

        </main>
    </div>

<?php
get_footer();
