<?php get_header(); ?>

    <?php
    /* Template Name: 会社概要 */
    ?>
    <div id="cont_first" class="container">
        <div id="contents">
            <div class="pankuzu">
                <?php if(function_exists('bcn_display'))
                {
                bcn_display();
                }?>
            </div>
            <div id="cont_left">
                <h2>会社概要</h2>
                <table>
    	            <tr>
    					<th>会社名</th>
    		            <td><?php the_field('add_companyname'); ?></td>
    	            </tr>
                    <tr>
                        <th>本社</th>
                        <td>
                            <?php the_field('add_mainoffice'); ?>
                        </td>
                    </tr>
                    <tr>
                        <th>設立</th>
                        <td><?php the_field('add_dateestablishment'); ?></td>
                    </tr>
                    <tr>
                        <th>資本金</th>
                        <td><?php the_field('add_capital'); ?></td>
                    </tr>
                    <tr>
                        <th>従業員数</th>
                        <td><?php the_field('add_member'); ?></td>
                    </tr>
                    <tr>
                        <th>電話番号</th>
                        <td><?php the_field('add_tel'); ?></td>
                    </tr>
    					<th>代表者</th>
    		            <td><?php the_field('add_representative'); ?></td>
    	            </tr>
                </table>
            </div>
            <?php get_sidebar(); ?>     
        </div>
    </div>

    <?php get_footer(); ?> 