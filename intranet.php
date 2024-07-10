<?php
//get user parameters from session
include('includes/session.php');

//set type and dept for right pane naviation
$type = 'fav';
$dept='0';
?>

<!DOCTYPE html>
<html lang="en-US" class="scheme_original">
   <head>
      <title>Welcome | Amni International Petroleum Development Company</title>
       <?php include('includes/header.html');?>
            <!-- </.top_panel_wrap> -->
            <div class="page_content_wrap">
               <div class="menu_main_wrap">
                  <?php include('includes/main_menu.php');?>
               </div>
               <div class="content_wrap">
                  <article class="post_item post_item_single post_format_standard page hentry">
                     <section class="post_content">
                        <div class="vc_row wpb_row vc_row-fluid">
                           <div class="wpb_column vc_column_container vc_col-sm-12">
                              <div class="vc_column-inner">
                                 <div class="wpb_wrapper">
                                    <figure class="sc_image  sc_image_shape_square full_width">
                                       <img src="images/amni-vessel.jpg" alt="" />
                                    </figure>
                                    <div class="vc_empty_space hem_3-2">
                                       <span class="vc_empty_space_inner"></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="vc_row wpb_row vc_row-fluid">
                           <div class="wpb_column vc_column_container vc_col-sm-12">
                              <div class="vc_column-inner">
                                 <div class="wpb_wrapper">
                                    <h2 class="sc_title sc_title_underline">Welcome back, <?php echo $firstname ;?>!</h2>
                                    <div class="vc_empty_space hpx_17">
                                       <span class="vc_empty_space_inner"></span>
                                    </div>
                                    <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_2">
                                       <div class="column-1_2 sc_column_item sc_column_item_1 odd first">
                                          <div class="wpb_text_column wpb_content_element">
                                             <div class="wpb_wrapper">
                                                <div id='evcal_calendar_836' class='ajde_evcal_calendar  evoFC'>
                                                   <div class='evo-data' data-cyear="2018" data-cmonth="10" data-runajax="1" data-evc_open="0" data-cal_ver="2.4.10" data-mapscroll="true" data-mapformat="roadmap" data-mapzoom="12" data-mapiconurl="" data-ev_cnt="0" data-show_limit="no" data-tiles="no" data-sort_by="sort_date" data-filters_on="false" data-range_start="0" data-range_end="0" data-send_unix="0" data-ux_val="0" data-accord="0" data-rtl="no" data-grid_ux="0"></div>
                                                   <div id='evcal_head' class='calendar_header '>
                                                      <div class='evo_cal_above_content'></div>
                                                      <p id='evcal_cur' class='evo_month_title'>february, 2017</p>
                                                      <p class='evo_arrows'>
                                                         <span id='evcal_prev' class='evcal_arrows evcal_btn_prev'>
                                                         <i class='fa fa-angle-left'></i>
                                                         </span>
                                                         <span id='evcal_next' class='evcal_arrows evcal_btn_next'>
                                                         <i class='fa fa-angle-right'></i>
                                                         </span>
                                                      </p>
                                                      <input type='hidden' class='eventon_other_vals evoFC_val' name='fc_focus_day' value='11' />
                                                      <div class='clear'></div>
                                                   </div>
                                                   <div id='eventon_loadbar_section'>
                                                      <div id='eventon_loadbar'></div>
                                                   </div>
                                                   <div class='eventon_fullcal' data-hover='number'>
                                                      <div class='evofc_months_strip' data-multiplier='0' data-color='206177' data-heat='no'>
                                                         <div class='evofc_month focus'>
                                                            <div class='eventon_fc_daynames'>
                                                               <p class='evo_fc_day' data-dow='1'>mon</p>
                                                               <p class='evo_fc_day' data-dow='2'>tue</p>
                                                               <p class='evo_fc_day' data-dow='3'>wed</p>
                                                               <p class='evo_fc_day' data-dow='4'>thu</p>
                                                               <p class='evo_fc_day' data-dow='5'>fri</p>
                                                               <p class='evo_fc_day' data-dow='6'>sat</p>
                                                               <p class='evo_fc_day' data-dow='7'>sun</p>
                                                               <div class='clear'></div>
                                                            </div>
                                                            <div class='eventon_fc_days'>
                                                               <p class='evo_fc_day evo_fc_empty' data-cnt='1'>-</p>
                                                               <p class='evo_fc_day evo_fc_empty' data-cnt='2'>-</p>
                                                               <p class='evo_fc_day' data-dow='3'  data-day='1' data-cnt='3' data-ed='' data-color=''>1</p>
                                                               <p class='evo_fc_day' data-dow='4'  data-day='2' data-cnt='4' data-ed='' data-color=''>2</p>
                                                               <p class='evo_fc_day' data-dow='5'  data-day='3' data-cnt='5' data-ed='' data-color=''>3</p>
                                                               <p class='evo_fc_day' data-dow='6'  data-day='4' data-cnt='6' data-ed='' data-color=''>4</p>
                                                               <p class='evo_fc_day' data-dow='7'  data-day='5' data-cnt='7' data-ed='' data-color=''>5</p>
                                                               <p class='evo_fc_day' data-dow='1'  data-day='6' data-cnt='8' data-ed='' data-color=''>6</p>
                                                               <p class='evo_fc_day' data-dow='2'  data-day='7' data-cnt='9' data-ed='' data-color=''>7</p>
                                                               <p class='evo_fc_day' data-dow='3'  data-day='8' data-cnt='10' data-ed='' data-color=''>8</p>
                                                               <p class='evo_fc_day' data-dow='4'  data-day='9' data-cnt='11' data-ed='' data-color=''>9</p>
                                                               <p class='evo_fc_day' data-dow='5'  data-day='10' data-cnt='12' data-ed='' data-color=''>10</p>
                                                               <p class='evo_fc_day' data-dow='6'  data-day='11' data-cnt='13' data-ed='' data-color=''>11</p>
                                                               <p class='evo_fc_day' data-dow='7'  data-day='12' data-cnt='14' data-ed='' data-color=''>12</p>
                                                               <p class='evo_fc_day on_focus' data-dow='1'  data-day='13' data-cnt='15' data-ed='' data-color=''>13</p>
                                                               <p class='evo_fc_day' data-dow='2'  data-day='14' data-cnt='16' data-ed='' data-color=''>14</p>
                                                               <p class='evo_fc_day' data-dow='3'  data-day='15' data-cnt='17' data-ed='' data-color=''>15</p>
                                                               <p class='evo_fc_day' data-dow='4'  data-day='16' data-cnt='18' data-ed='' data-color=''>16</p>
                                                               <p class='evo_fc_day' data-dow='5'  data-day='17' data-cnt='19' data-ed='' data-color=''>17</p>
                                                               <p class='evo_fc_day' data-dow='6'  data-day='18' data-cnt='20' data-ed='' data-color=''>18</p>
                                                               <p class='evo_fc_day' data-dow='7'  data-day='19' data-cnt='21' data-ed='' data-color=''>19</p>
                                                               <p class='evo_fc_day' data-dow='1'  data-day='20' data-cnt='22' data-ed='' data-color=''>20</p>
                                                               <p class='evo_fc_day' data-dow='2'  data-day='21' data-cnt='23' data-ed='' data-color=''>21</p>
                                                               <p class='evo_fc_day bb' data-dow='3'  data-day='22' data-cnt='24' data-ed='' data-color=''>22</p>
                                                               <p class='evo_fc_day bb' data-dow='4'  data-day='23' data-cnt='25' data-ed='' data-color=''>23</p>
                                                               <p class='evo_fc_day bb' data-dow='5'  data-day='24' data-cnt='26' data-ed='' data-color=''>24</p>
                                                               <p class='evo_fc_day bb' data-dow='6'  data-day='25' data-cnt='27' data-ed='' data-color=''>25</p>
                                                               <p class='evo_fc_day bb' data-dow='7'  data-day='26' data-cnt='28' data-ed='' data-color=''>26</p>
                                                               <a href="single-event.html" class='evo_fc_day has_events bb' data-dow='1' data-events="1" data-day='27' data-cnt='29' data-ed='{"et":["Testing Rock Group"],"ec":[["206177"]]}' data-color=''>27</a>
                                                               <a href="single-event.html" class='evo_fc_day has_events br bb' data-dow='2' data-events="1" data-day='28' data-cnt='30' data-ed='{"et":["Deploy Rock Group Project"],"ec":[["206177"]]}' data-color=''>28</a>
                                                               <div class='clear'></div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class='clear'></div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="vc_empty_space hpx_30">
                                             <span class="vc_empty_space_inner"></span>
                                          </div>
                                          <div class="ajde_evcal_calendar ">
                                             <div id="evcal_list" class="eventon_events_list ">
                                                <div class="eventon_list_event event">
                                                   <p class="desc_trig_outter">
                                                      <a class="desc_trig sin_val evcal_list_a">
                                                      <span class="evcal_cblock">
                                                      <em class="evo_date"><span class="start">27<em>feb</em></span></em>
                                                      <span class="evo_time"><span class="start">10:00 am</span><span class="end">- 4:00 pm</span></span>
                                                      <em class="clear"></em>
                                                      </span>
                                                      <span class="evcal_desc evo_info hide_eventtopdata">
                                                      <span class="evo_above_title"></span>
                                                      <span class="evcal_desc2 evcal_event_title">Testing Rock Group</span>
                                                      <span class="evo_below_title"></span><span class="evcal_desc_info"></span><span class="evcal_desc3"></span>
                                                      </span>
                                                      <em class="clear"></em>
                                                      </a>
                                                   </p>
                                                   <div class="event_description evcal_eventcard">
                                                      <div class="evo_metarow_fimg evorow evcal_evdata_img event_img_1"></div>
                                                      <div class="evo_metarow_details evorow evcal_evdata_row bordb evcal_event_details">
                                                         <span class="evcal_evdata_icons"><i class="fa fa-align-justify"></i></span>
                                                         <div class="evcal_evdata_cell ">
                                                            <div class="eventon_full_description">
                                                               <h3 class="padb5 evo_h3">Event Details</h3>
                                                               <div class="eventon_desc_in">
                                                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                                               </div>
                                                               <div class="clear"></div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="evo_metarow_time evorow evcal_evdata_row bordb evcal_evrow_sm ">
                                                         <span class="evcal_evdata_icons"><i class="fa fa-clock-o"></i></span>
                                                         <div class="evcal_evdata_cell">
                                                            <h3 class="evo_h3">Time</h3>
                                                            <p>(Monday) 10:00 am - 4:00 pm</p>
                                                         </div>
                                                      </div>
                                                      <div class="evo_metarow_ICS evorow bordb evcal_evdata_row">
                                                         <span class="evcal_evdata_icons"><i class="fa fa-calendar"></i></span>
                                                         <div class="evcal_evdata_cell">
                                                            <p>
                                                               <a href="#" class="evo_ics_nCal" title="Add to your calendar">Calendar</a>
                                                               <a href="#" target="_blank" class="evo_ics_gCal" title="Add to google calendar">GoogleCal</a>
                                                            </p>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="clear end"></div>
                                                </div>
                                                <div class="eventon_list_event event">
                                                   <p class="desc_trig_outter">
                                                      <a class="desc_trig sin_val evcal_list_a">
                                                      <span class="evcal_cblock">
                                                      <em class="evo_date"><span class="start">28<em>feb</em></span></em>
                                                      <span class="evo_time"><span class="start">10:00 am</span><span class="end">- 4:00 pm</span></span>
                                                      <em class="clear"></em>
                                                      </span>
                                                      <span class="evcal_desc evo_info hide_eventtopdata">
                                                      <span class="evo_above_title"></span>
                                                      <span class="evcal_desc2 evcal_event_title">SeoRocket Project</span>
                                                      <span class="evo_below_title"></span><span class="evcal_desc_info"></span><span class="evcal_desc3"></span>
                                                      </span>
                                                      <em class="clear"></em>
                                                      </a>
                                                   </p>
                                                   <div class="event_description evcal_eventcard">
                                                      <div class="evo_metarow_fimg evorow evcal_evdata_img event_img_2"></div>
                                                      <div class="evo_metarow_details evorow evcal_evdata_row bordb evcal_event_details">
                                                         <span class="evcal_evdata_icons"><i class="fa fa-align-justify"></i></span>
                                                         <div class="evcal_evdata_cell ">
                                                            <div class="eventon_full_description">
                                                               <h3 class="padb5 evo_h3">Event Details</h3>
                                                               <div class="eventon_desc_in">
                                                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                                               </div>
                                                               <div class="clear"></div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="evo_metarow_time evorow evcal_evdata_row bordb evcal_evrow_sm ">
                                                         <span class="evcal_evdata_icons"><i class="fa fa-clock-o"></i></span>
                                                         <div class="evcal_evdata_cell">
                                                            <h3 class="evo_h3">Time</h3>
                                                            <p>(Monday) 10:00 am - 4:00 pm</p>
                                                         </div>
                                                      </div>
                                                      <div class="evo_metarow_ICS evorow bordb evcal_evdata_row">
                                                         <span class="evcal_evdata_icons"><i class="fa fa-calendar"></i></span>
                                                         <div class="evcal_evdata_cell">
                                                            <p>
                                                               <a href="#" class="evo_ics_nCal" title="Add to your calendar">Calendar</a>
                                                               <a href="#" target="_blank" class="evo_ics_gCal" title="Add to google calendar">GoogleCal</a>
                                                            </p>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="clear end"></div>
                                                </div>
                                                <div class="clear"></div>
                                             </div>
                                             <!-- #evcal_list-->
                                             <div class="clear"></div>
                                          </div>
                                          <div class="vc_empty_space hpx_30">
                                             <span class="vc_empty_space_inner"></span>
                                          </div>
                                          <div class="wpb_text_column wpb_content_element">
                                             <div class="wpb_wrapper">
                                                <div id='wca7bea6b5041e89cea9f609c0e36734c6' class='wcContainer wcControlsButtonsIncluded'>
                                                   <div class='wcMessages'>
                                                      <div class="wcMessage" data-id="481" data-chat-user-id="25305">
                                                         <span class="wcMessageTime" data-utc="2017-02-08T04:52:20+00:00"></span>
                                                         <span class="wcMessageUser">Anonymous25305:</span>
                                                         <span class="wcMessageContent">test</span>
                                                      </div>
                                                      <div class="wcMessage" data-id="482" data-chat-user-id="25310">
                                                         <span class="wcMessageTime" data-utc="2017-02-08T05:52:40+00:00"></span>
                                                         <span class="wcMessageUser">Anonymous25310:</span>
                                                         <span class="wcMessageContent">hello</span>
                                                      </div>
                                                      <div class="wcMessage" data-id="483" data-chat-user-id="26957">
                                                         <span class="wcMessageTime" data-utc="2017-02-08T10:42:01+00:00"></span>
                                                         <span class="wcMessageUser">Anonymous26957:</span>
                                                         <span class="wcMessageContent">what's up?</span>
                                                      </div>
                                                      <div class="wcMessage" data-id="484" data-chat-user-id="27935">
                                                         <span class="wcMessageTime" data-utc="2017-02-08T12:09:36+00:00"></span>
                                                         <span class="wcMessageUser">Anonymous27935:</span>
                                                         <span class="wcMessageContent"><img src='images/icons/silly.png' alt='silly' class='wcEmoticon' /></span>
                                                      </div>
                                                   </div>
                                                   <div class="wcControls">
                                                      <a href="#" class="wcToolButton wcInsertEmoticonButton" title="Insert an emoticon"></a>
                                                      <div class='wcInputContainer'>
                                                         <input class='wcInput' type='text' maxlength='400' placeholder='Enter message here' title="Use Shift+ENTER in order to move to the next line " />
                                                      </div>
                                                      <div class="wcPoweredBy">Created by
                                                         <a href="http://kaine.pl/" title="WordPress development">Kainex</a>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="column-1_2 sc_column_item sc_column_item_2">
                                          <div class="sc_section sc_section_block">
                                             <div class="sc_section_inner">
                                                <div class="sc_section_content_wrap">
                                                   <h2 class="sc_title sc_title_regular">Poll</h2>
                                                   <div class="weblator-poll-container" data-poll-id="1">
                                                      <div class="panel panel-default">
                                                         <div class="panel-heading">
                                                            <h3 class="panel-title">Donec augue massa, pharetra sit amet feugiat at?</h3>
                                                         </div>
                                                         <div class="panel-body weblator-poll-vote">
                                                            <div class="alert alert-success">Thank you for voting</div>
                                                            <div class="alert alert-warning">You have already voted on this poll!</div>
                                                            <div class="alert alert-danger">Please select an option!</div>
                                                            <ul>
                                                               <li>
                                                                  <input type="radio" data-index="0" name="weblator-chart-options" id="option-7" data-poll-id="1" value="7" />
                                                                  <label for="option-7">Option 1: Semper magna mauris ac dolor</label>
                                                               </li>
                                                               <li>
                                                                  <input type="radio" data-index="1" name="weblator-chart-options" id="option-8" data-poll-id="1" value="8" />
                                                                  <label for="option-8">Option 2: Curabitur ex massa</label>
                                                               </li>
                                                               <li>
                                                                  <input type="radio" data-index="2" name="weblator-chart-options" id="option-9" data-poll-id="1" value="9" />
                                                                  <label for="option-9">Option 3: Quisque aliquam consecte</label>
                                                               </li>
                                                            </ul>
                                                         </div>
                                                         <div class="panel-footer">
                                                            <div class="button-vote">
                                                               <button class="btn btn-default vote-button weblator-poll-submit">
                                                               <i class="fa fa-spinner fa-spin vote-spin"></i> Vote
                                                               </button>
                                                            </div>
                                                            <div class="weblator-view-results">
                                                               <a href="#" class="weblator-view-poll btn btn-default">View Results</a>
                                                               <a href="#" class="weblator-hide-poll btn btn-default">Hide Results</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="width-control">
                                                         <div class="bs-chart-container">
                                                            <strong>Option 1: Semper magna mauris ac dolor</strong>
                                                            <div class="progress">
                                                               <div class="progress-bar bar_1" role="progressbar" aria-valuenow="40.4040404040404" aria-valuemin="0">
                                                                  <span class="">40%</span>
                                                               </div>
                                                            </div>
                                                            <strong>Option 2: Curabitur ex massa</strong>
                                                            <div class="progress">
                                                               <div class="progress-bar bar_2" role="progressbar" aria-valuenow="36.36363636363637" aria-valuemin="0">
                                                                  <span class="">36%</span>
                                                               </div>
                                                            </div>
                                                            <strong>Option 3: Quisque aliquam consecte</strong>
                                                            <div class="progress">
                                                               <div class="progress-bar bar_3" role="progressbar" aria-valuenow="23.232323232323232" aria-valuemin="0">
                                                                  <span class="">23%</span>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="vc_empty_space hpx_30">
                                             <span class="vc_empty_space_inner"></span>
                                          </div>
                                          <div class="sc_section sc_section_block">
                                             <div class="sc_section_inner">
                                                <div class="sc_section_content_wrap">
                                                   <h2 class="sc_title sc_title_regular">Projects</h2>
                                                   <div id="sc_projects_297_wrap" class="sc_projects_wrap">
                                                      <div id="sc_projects_297" class="sc_projects">
                                                         <div id="sc_projects_297_1" class="sc_projects_item sc_projects_item_1">
                                                            <div class="sc_projects_item_featured post_featured">
                                                               <div class="post_thumb" data-image="images/project1.jpg" data-title="Rock Group Project">
                                                                  <a class="hover_icon hover_icon_link" href="single-post.html">
                                                                  <img alt="" src="images/project1-231x171.jpg">
                                                                  </a>
                                                               </div>
                                                            </div>
                                                            <div class="sc_projects_item_content">
                                                               <h4 class="sc_projects_item_title">
                                                                  <a href="single-post.html">Rock Group Project</a>
                                                               </h4>
                                                               <div class="sc_projects_item_description">
                                                                  <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                                                  <div id="sc_skills_diagram_629" class="sc_skills sc_skills_bar sc_skills_horizontal" data-type="bar" data-caption="Skills" data-dir="horizontal">
                                                                     <div class="sc_skills_info">
                                                                        <div class="sc_skills_label"></div>
                                                                     </div>
                                                                     <div class="sc_skills_item sc_skills_style_1">
                                                                        <div class="sc_skills_count">
                                                                           <div class="sc_skills_total" data-start="0" data-stop="76" data-step="1" data-max="100" data-speed="14" data-duration="1064" data-ed="%">0%</div>
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                                  <div class="total">76%</div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div id="sc_projects_297_2" class="sc_projects_item sc_projects_item_2">
                                                            <div class="sc_projects_item_featured post_featured">
                                                               <div class="post_thumb" data-image="images/project2.jpg" data-title="SeoRocket Project">
                                                                  <a class="hover_icon hover_icon_link" href="single-post.html">
                                                                  <img alt="" src="images/570x447.png">
                                                                  </a>
                                                               </div>
                                                            </div>
                                                            <div class="sc_projects_item_content">
                                                               <h4 class="sc_projects_item_title">
                                                                  <a href="single-post.html">SeoRocket Project</a>
                                                               </h4>
                                                               <div class="sc_projects_item_description">
                                                                  <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                                                  <div id="sc_skills_diagram_577" class="sc_skills sc_skills_bar sc_skills_horizontal" data-type="bar" data-caption="Skills" data-dir="horizontal">
                                                                     <div class="sc_skills_info">
                                                                        <div class="sc_skills_label"></div>
                                                                     </div>
                                                                     <div class="sc_skills_item sc_skills_style_1">
                                                                        <div class="sc_skills_count">
                                                                           <div class="sc_skills_total" data-start="0" data-stop="100" data-step="1" data-max="100" data-speed="37" data-duration="3700" data-ed="%">0%</div>
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                                  <div class="total">100%</div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </section>
                     <section class="related_wrap related_wrap_empty"></section>
                  </article>
                  <a href="#" class="scroll_to_top icon-up" title="Scroll to top"></a>
               </div>
                <?php include('includes/right-pane.php');?>
                </div>
<?php include('includes/footer.html'); ?>
