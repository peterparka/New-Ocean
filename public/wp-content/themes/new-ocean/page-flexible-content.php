<?php
/*
Template Name: Flexible Content
*/
get_header();

if( have_posts() ): while( have_posts() ): the_post(); ?>

    <section class="simple-page-content container">

    	<h1><?php the_title(); ?></h1>
    	<div>
    		<?php the_content(); ?>
    	</div>

    </section>

    <?php if( get_field('flexible_content') ):

        while( has_sub_field("flexible_content") ):

            $layout = get_row_layout();

            switch ($layout) {
                case 'text_content': ?>

                    <section class="simple-page-content container">

                        <?php the_sub_field('content'); ?>

                    </section>

                <?php break;

                case 'tabular_content': ?>

                    <?php $table = get_sub_field( 'table' );

                    $first_col_header = get_sub_field('table_first_column_is_header');

                    if ( $table ): ?>

                        <section class="tabular-content bg-blue">

                          <div class="table-responsive container">

                            <span class="scroll-prompt">Scroll
                              <svg fill="#fff" height="20" viewBox="0 0 24 24" width="20" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M8 5v14l11-7z"/>
                                  <path d="M0 0h24v24H0z" fill="none"/>
                              </svg>
                            </span>

                            <table class="table">

                                <?php if ( $table['header'] ):

                                    echo '<thead>';

                                        echo '<tr>';

                                            foreach ( $table['header'] as $th ) {

                                                echo '<th>';
                                                    echo $th['c'];
                                                echo '</th>';
                                            }

                                        echo '</tr>';

                                    echo '</thead>';
                                endif; ?>

                                <tbody>

                                    <?php foreach( $table['body'] as $tr ): ?>

                                        <tr>
                                            <?php $count=1;
                                            foreach ( $tr as $td ): ?>

                                                <td<?php echo ( $count === 1 && $first_col_header ) ? ' class="highlight"' : ''; ?>>
                                                    <?php echo $td['c']; ?>
                                                </td>

                                                <?php $count++;
                                            endforeach; ?>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            </div>
                        </section>
                    <?php endif;
                break;
            }
        endwhile;
    else :
        // no layouts found
    endif;

endwhile; endif;
get_footer(); ?>
