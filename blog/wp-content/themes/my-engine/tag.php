<?php get_header(); ?>

        <div class="content">
            <div class="line title">
                <h1><?php _e( 'Results for tag' , 'myThemes' ); ?> "<?php echo urldecode( get_query_var( 'tag' ) ); ?>"</h1>
            </div>    
            <div class="line">

                <?php $myThemes_layout = new layout( ); ?>

                <section  class="<?php echo $myThemes_layout -> contentClass(); ?> list-view large-icons">
                    <?php
                        if( have_posts() ){
                            while( have_posts() ){
                                the_post();
                                get_template_part( 'cfg/templates/view/list-view' );
                            }
                        }
                        else{
                            echo '<h2>' . __( 'Not found results' , 'myThemes' ) . '</h2>';
                            echo '<p>' . __( 'We apologize but this page, post or resource does not exist or can not be found. Perhaps it is necessary to change the call method to this page, post or resource.' , 'myThemes' ) . '</p>';
                        }

                        get_template_part( 'cfg/templates/pagination' );
                    ?>
                </section><?php    
                    /* SIDEBAR */
                    $myThemes_layout -> echoSidebar( );
                ?>
                <div class="clear"></div>
            </div>
        </div>

<?php get_footer(); ?>