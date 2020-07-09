<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package VW Hair Salon
 */

get_header(); ?>

<div class="container">
    <main id="maincontent" role="main" class="middle-align">
        <?php
            $vw_hair_salon_theme_lay = get_theme_mod( 'vw_hair_salon_theme_options','Right Sidebar');
            if($vw_hair_salon_theme_lay == 'Left Sidebar'){ ?>
                <div class="row">
                    <div class="sidebar col-lg-4 col-md-4"><?php dynamic_sidebar('sidebar-1');?></div>
                    <div id="our-services" class="services col-lg-8 col-md-8">
                        <h1 class="entry-title"><?php /* translators: %s: search term */ printf( esc_html__( 'Results For: %s','vw-hair-salon'), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
                        <?php if ( have_posts() ) :
                            /* Start the Loop */
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/content',get_post_format()); 
                            endwhile;

                            else :
                                get_template_part( 'no-results' ); 
                            endif; 
                        ?>
                        <div class="navigation">
                            <?php
                                // Previous/next page navigation.
                                the_posts_pagination( array(
                                    'prev_text' => __( 'Previous page', 'vw-hair-salon' ),
                                    'next_text' => __( 'Next page', 'vw-hair-salon' ),
                                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'vw-hair-salon' ) . ' </span>',
                                ) );
                            ?>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            <?php }else if($vw_hair_salon_theme_lay == 'Right Sidebar'){ ?>
                <div class="row">
                    <div id="our-services" class="services col-lg-8 col-md-8"> 
                        <h1 class="entry-title"><?php printf( esc_html( 'Results For: %s','vw-hair-salon'), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
                        <?php if ( have_posts() ) :
                        /* Start the Loop */
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/content',get_post_format()); 
                            endwhile;

                            else :
                                get_template_part( 'no-results' ); 
                            endif; 
                        ?>
                        <div class="navigation">
                            <?php
                                // Previous/next page navigation.
                                the_posts_pagination( array(
                                    'prev_text' => __( 'Previous page', 'vw-hair-salon' ),
                                    'next_text' => __( 'Next page', 'vw-hair-salon' ),
                                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'vw-hair-salon' ) . ' </span>',
                                ) );
                            ?>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="sidebar col-lg-4 col-md-4"><?php dynamic_sidebar('sidebar-1');?></div>
                </div>
            <?php }else if($vw_hair_salon_theme_lay == 'One Column'){ ?>
                <div id="our-services" class="services">
                    <h1 class="entry-title"><?php /* translators: %s: search term */ printf( esc_html__( 'Results For: %s','vw-hair-salon'), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
                    <?php if ( have_posts() ) :
                    /* Start the Loop */
                        while ( have_posts() ) : the_post();
                            get_template_part( 'template-parts/content',get_post_format());
                        endwhile;

                        else :
                            get_template_part( 'no-results' ); 
                        endif; 
                    ?>
                    <div class="navigation">
                        <?php
                            // Previous/next page navigation.
                            the_posts_pagination( array(
                                'prev_text' => __( 'Previous page', 'vw-hair-salon' ),
                                'next_text' => __( 'Next page', 'vw-hair-salon' ),
                                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'vw-hair-salon' ) . ' </span>',
                            ) );
                        ?>
                        <div class="clearfix"></div>
                    </div>
                </div>
            <?php }else if($vw_hair_salon_theme_lay == 'Three Columns'){ ?>
                <div class="row">
                    <div class="sidebar col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-1');?></div>
                    <div id="our-services" class="services col-lg-6 col-md-6">
                         <h1 class="entry-title"><?php /* translators: %s: search term */ printf( esc_html__( 'Results For: %s','vw-hair-salon'), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
                        <?php if ( have_posts() ) :
                        /* Start the Loop */
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/content',get_post_format());
                            endwhile;

                            else :
                                get_template_part( 'no-results' ); 
                            endif; 
                        ?>
                        <div class="navigation">
                            <?php
                                // Previous/next page navigation.
                                the_posts_pagination( array(
                                    'prev_text' => __( 'Previous page', 'vw-hair-salon' ),
                                    'next_text' => __( 'Next page', 'vw-hair-salon' ),
                                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'vw-hair-salon' ) . ' </span>',
                                ) );
                            ?>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="sidebar col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-2');?></div>
                </div>
            <?php }else if($vw_hair_salon_theme_lay == 'Four Columns'){ ?>
                <div class="row">
                    <div class="sidebar col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-1');?></div>
                    <div id="our-services" class="services col-lg-3 col-md-3">
                         <h1 class="entry-title"><?php /* translators: %s: search term */ printf( esc_html__( 'Results For: %s','vw-hair-salon'), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
                        <?php if ( have_posts() ) :
                        /* Start the Loop */
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/content',get_post_format()); 
                            endwhile;

                            else :
                                get_template_part( 'no-results' ); 
                            endif; 
                        ?>
                        <div class="navigation">
                            <?php
                                // Previous/next page navigation.
                                the_posts_pagination( array(
                                    'prev_text' => __( 'Previous page', 'vw-hair-salon' ),
                                    'next_text' => __( 'Next page', 'vw-hair-salon' ),
                                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'vw-hair-salon' ) . ' </span>',
                                ) );
                            ?>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="sidebar col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-2');?></div>
                    <div class="sidebar col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-3');?></div>
                </div>
            <?php }else if($vw_hair_salon_theme_lay == 'Grid Layout'){ ?>
                <div class="row">
                    <div id="our-services" class="services col-lg-9 col-md-9">
                        <h1 class="entry-title"><?php printf( esc_html( 'Results For: %s','vw-hair-salon'), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
                        <div class="row">
                            <?php if ( have_posts() ) :
                            /* Start the Loop */
                                while ( have_posts() ) : the_post();
                                    get_template_part( 'template-parts/grid-layout' ); 
                                endwhile;

                                else :
                                    get_template_part( 'no-results' ); 
                                endif; 
                            ?>
                        </div>
                        <div class="navigation">
                            <?php
                                // Previous/next page navigation.
                                the_posts_pagination( array(
                                    'prev_text' => __( 'Previous page', 'vw-hair-salon' ),
                                    'next_text' => __( 'Next page', 'vw-hair-salon' ),
                                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'vw-hair-salon' ) . ' </span>',
                                ) );
                            ?>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="sidebar col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-1');?></div>
                </div>
            <?php }else {?>
                <div class="row">
                    <div id="our-services" class="services col-lg-8 col-md-8"> 
                         <h1 class="entry-title"><?php /* translators: %s: search term */ printf( esc_html__( 'Results For: %s','vw-hair-salon'), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
                        <?php if ( have_posts() ) :
                        /* Start the Loop */
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/content',get_post_format());
                            endwhile;

                            else :
                                get_template_part( 'no-results' ); 
                            endif; 
                        ?>
                        <div class="navigation">
                            <?php
                                // Previous/next page navigation.
                                the_posts_pagination( array(
                                    'prev_text' => __( 'Previous page', 'vw-hair-salon' ),
                                    'next_text' => __( 'Next page', 'vw-hair-salon' ),
                                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'vw-hair-salon' ) . ' </span>',
                                ) );
                            ?>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="sidebar col-lg-4 col-md-4"><?php dynamic_sidebar('sidebar-1');?></div>
                </div>
            <?php } ?>
        <div class="clearfix"></div>
    </main>
</div>

<?php get_footer(); ?>