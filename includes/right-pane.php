<?php
include('includes/conn.php');

//select those celebrating birthdays for the month
$d = mysql_query("select * from employees where month(dob) = '".date('n')."'");

//select modules based on portal option selected from main menu :: Module Query
$mq = mysql_query("select * from modules where type='$type' and dept='$dept'");//type and dept set from main pages where this pane is included

//fetch posts into side bar
$pq = mysql_query("select p_id, image, (select concat(firstname,' ',lastname) from employees where empno=created_by) as author, post_title, date_created from posts order by date_created desc");

?>
<div class="sidebar_wrap sidebar widget_area scheme_original" role="complementary">
                  <div class="sidebar_inner widget_area_inner">
                     <aside class="widget_number_1 widget widget_birthdays">
                        <h5 class="widget_title">Upcoming Birthday</h5>
                        <div class="widget_birthdays_inner">
                           <ul>
                              <?php while ($rd = mysql_fetch_array($d)){
                                    extract($rd);                                
                              ;?>
                              <li>
                                 <div class="post_thumb">
                                    <img src="images/staff-pics/<?php echo $image ;?>" class="avatar photo" width="96" height="96" alt="" />
                                 </div>
                                 <div class="post_title">
                                    <strong><?php echo $firstname.' '.$lastname ;?></strong>
                                    <span>(<?php echo date('Y') - date('Y',strtotime($dob));?>)</span> on
                                    <span class="date"><?php echo date('M d',strtotime($dob)) ;?></span>
                                 </div>
                              </li>
                              <?php } ?>
                           </ul>
                        </div>
                     </aside>
                     <aside class="widget widget_nav_menu">
                        <h5 class="widget_title">Favorite Links</h5>
                        <div class="menu-sidebar-menu-container">
                           <ul id="menu-sidebar-menu" class="menu">
                              <?php while($mr = mysql_fetch_array($mq)){?>
                               <li><a href="<?php echo $mr['mod_link'];?>"><?php echo $mr['mod_name'];?></a></li>
                              <?php } ?>
                           </ul>
                        </div>
                     </aside>
                     <!--aside class="widget widget_bp_core_whos_online_widget buddypress widget">
                        <h5 class="widget_title">Who&#8217;s Online</h5>
                        <div class="widget-error">There are no users currently online </div>
                     </aside-->
					<aside class="widget_number_4 widget widget_text">
						<div class="textwidget">
						   <div class="sc_infobox sc_infobox_style_regular">
							  <span class="sc_icon icon-rocket aligncenter"></span>
							  <h5 class="sc_title sc_title_regular sc_align_center">Projects Launched</h5>
							  <h2 class="sc_title sc_title_regular sc_align_center">167</h2>
						   </div>
						</div>
					</aside>
                     <aside class="widget widget_recent_posts">
                        <h5 class="widget_title">Recent Posts</h5>
                        <?php while($pr = mysql_fetch_array($pq)){ ?>
                        <article class="post_item with_thumb first">
                           <div class="post_thumb">
                              <img alt="" src="images/posts/<?php echo $pr['image'];?>">
                           </div>
                           <div class="post_content">
                              <h6 class="post_title">
                                 <a href="single-post.html?p=<?php echo $pr['p_id'];?>"><?php echo $pr['post_title']; ?></a>
                              </h6>
                              <div class="post_info">
                                 <span class="post_info_item post_info_posted">
                                    <a href="single-post.html?p=<?php echo $pr['p_id'];?>" class="post_info_date"><?php echo date('F d, Y',strtotime($pr['date_created'])); ?></a>
                                 </span>
                                 <span class="post_info_item post_info_posted_by">by
                                    <a href="single-team.html" class="post_info_author"><?php echo $pr['author']; ?></a>
                                 </span>
                                 <span class="post_info_item post_info_counters">
                                    <a href="single-post.html?p=<?php echo $pr['p_id'];?>" class="post_counters_item">
                                       <span class="post_counters_number"></span>
                                    </a>
                                 </span>
                              </div>
                           </div>
                        </article>
                         <?php } ?>
                     </aside>
                     <aside class="widget_number_6 widget widget_text">
                        <div class="textwidget">
                           <div class="sc_infobox sc_infobox_style_regular style_2">
                              <span class="sc_icon icon-communication1 aligncenter color_blue"></span>
                              <h5 class="sc_title sc_title_regular sc_align_center">Tickets Answered</h5>
                              <h2 class="sc_title sc_title_regular sc_align_center">1 358</h2>
                           </div>
                           <div class="sc_infobox sc_infobox_style_error sc_infobox_closeable">
                              <span class="sc_icon icon-sound aligncenter"></span>
                              <h5 class="sc_title sc_title_regular sc_align_center">Notification</h5>
                              <p>The office will be closed
                                 <br> 01.05.2016
                              </p>
                           </div>
                        </div>
                     </aside>
                  </div>
               </div>
<?php ?>