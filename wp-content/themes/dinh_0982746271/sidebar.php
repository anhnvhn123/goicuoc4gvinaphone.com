<aside id="secondary" class="sidebar widget-area" role="complementary">
    <section id="glob_social-2" class="widget sidebar-widget social_widget"><h4 class="widget-title">Kết nối mạng xã hội</h4>        
    <div class="sidebar-social">
            <div id="menu-social" class="social-links"><ul id="menu-social-items" class="menu-items">
            <li id="menu-item-191" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-191"><a href="<?php echo youtube; ?>"><span class="screen-reader-text">youtube</span></a></li>
<li id="menu-item-174" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-174"><a href="<?php echo facebook; ?>"><span class="screen-reader-text">Facebook</span></a></li>
</ul></div>        </div>
        </section>
<section id="glob-posts-3" class="widget sidebar-widget glob-posts-widget"><h4 class="widget-title">Bài viết nổi bật</h4>            
            <ul class="widget-posts">
            <?php  
                global $post;
                $myposts = get_last_post(5);
                foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                <li class="has-thumb">
                    <a href="<?php echo get_permalink(); ?>" title="<?php echo get_the_title(); ?>"><img width="150" height="150" src="<?= the_post_thumbnail_url('home-small-thumb');?>" class="attachment-thumbnail size-thumbnail wp-post-image inview" alt=""></a>                    <div class="p-info">
                    <h2 class="entry-title"><a title="<?php echo get_the_title(); ?>" href="<?php echo get_permalink(); ?>" rel="bookmark"><?php echo get_the_title(); ?></a></h2>
                    <span class="entry-date">Nov 21, 2015</span>                    </div>
                </li>
                <?php endforeach; 
                wp_reset_postdata();
            ?>                 
                </ul></section>

<section id="calendar-3" class="widget sidebar-widget widget_calendar"><h4 class="widget-title">Calendar Archive</h4><div id="calendar_wrap" class="calendar_wrap"><table id="wp-calendar">
    <caption>September 2017</caption>
    <thead>
    <tr>
        <th scope="col" title="Monday">M</th>
        <th scope="col" title="Tuesday">T</th>
        <th scope="col" title="Wednesday">W</th>
        <th scope="col" title="Thursday">T</th>
        <th scope="col" title="Friday">F</th>
        <th scope="col" title="Saturday">S</th>
        <th scope="col" title="Sunday">S</th>
    </tr>
    </thead>

    <tfoot>
    <tr>
        <td colspan="3" id="prev"><a href="https://demos.famethemes.com/glob/2015/11/">« Nov</a></td>
        <td class="pad">&nbsp;</td>
        <td colspan="3" id="next" class="pad">&nbsp;</td>
    </tr>
    </tfoot>

    <tbody>
    <tr>
        <td colspan="4" class="pad">&nbsp;</td><td>1</td><td>2</td><td>3</td>
    </tr>
    <tr>
        <td>4</td><td>5</td><td>6</td><td>7</td><td>8</td><td>9</td><td>10</td>
    </tr>
    <tr>
        <td id="today">11</td><td>12</td><td>13</td><td>14</td><td>15</td><td>16</td><td>17</td>
    </tr>
    <tr>
        <td>18</td><td>19</td><td>20</td><td>21</td><td>22</td><td>23</td><td>24</td>
    </tr>
    <tr>
        <td>25</td><td>26</td><td>27</td><td>28</td><td>29</td><td>30</td>
        <td class="pad" colspan="1">&nbsp;</td>
    </tr>
    </tbody>
    </table></div></section></aside><!-- #secondary -->