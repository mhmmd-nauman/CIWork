    
        <!--BEGIN SIDEBAR MENU-->
        <nav id="sidebar" role="navigation" class="navbar-default navbar-static-side">
            <div class="sidebar-collapse menu-scroll">
                <ul id="side-menu" class="nav">
                    <li class="clock"><strong id="get-date"></strong>

                        <div class="digital-clock">
                            <div id="getHours" class="get-time"></div>
                            <span>:</span>

                            <div id="getMinutes" class="get-time"></div>
                            <span>:</span>

                            <div id="getSeconds" class="get-time"></div>
                        </div>
                    </li>
                    <li class="sidebar-heading"><h4>Main Menu</h4></li>
                    <li <?php if($page =='dashboard_content'){?> class="active"<?php }?>><a href="<?php echo base_url();?>mysite/admin/dashboard_content"><i class="fa fa-laptop fa-fw"></i><span class="menu-title">Dashboard</span></a></li>
                    <li <?php if($page =='index_content'){?> class="active"<?php }?>><a href="<?php echo base_url();?>mysite/admin/index_content"><i class="fa fa-home fa-fw"></i><span class="menu-title">Index Page</span></a> </li>
                    <li <?php if($page =='news_content'){?> class="active"<?php }?>><a href="<?php echo base_url();?>mysite/admin/news_content"><i class="glyphicon glyphicon-camera fa-fw"></i><span class="menu-title">News &amp; Events</span></a> </li>
                    <li <?php if($page =='vacancy_content'){?> class="active"<?php }?>><a href="#"><i class="fa fa-briefcase fa-fw"></i><span class="menu-title">Careers</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li <?php if($page =='vacancy_content'){?> class="active"<?php }?>><a href="<?php echo base_url();?>mysite/admin/vacancy_content">Vacancies Listing</a></li>
                            <li <?php if($page =='online_applicant_content'){?> class="active"<?php }?>><a href="<?php echo base_url();?>mysite/admin/online_applicant_content">Online Applicants Listing</a></li>
                        </ul>
                    </li>
                    </ul>
                                     
                
          </div>
    </nav>