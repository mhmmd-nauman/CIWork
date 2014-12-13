    
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
                    <li class="active"><a href="<?php echo base_url();?>mysite/admin/dashboard_content"><i class="fa fa-laptop fa-fw"></i><span class="menu-title"><?php echo $page;?>Dashboard</span></a></li>
                    <li><a href="<?php echo base_url();?>mysite/admin/index_content"><i class="fa fa-home fa-fw"></i><span class="menu-title">Index Page</span></a> </li>
                    <li><a href="news_events_list. html"><i class="glyphicon glyphicon-camera fa-fw"></i><span class="menu-title">News &amp; Events</span></a> </li>
                    <li><a href="#"><i class="fa fa-briefcase fa-fw"></i><span class="menu-title">Careers</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="careers_job_vacancy_list.html">Vacancies Listing</a></li>
                            <li><a href="careers_online_applicants_list.html">Online Applicants Listing</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-heading"><h4>Investor Relations</h4></li>
                    <li><a href="ir_home_edit.html"><i class="fa fa-signal fa-fw"></i><span class="menu-title">IR Home</span></a></li>
                    <li><a href="#"><i class="fa fa-info-circle fa-fw"></i><span class="menu-title">Corporate Information</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="corporate_info_general_edit.html">General</a></li>
                            <li><a href="corporate_info_directors_profile_list.html">Directors' Profile</a></li>
                            <li><a href="corporate_info_key_mgmt_team_list.html">Key Management Team</a></li>
                            <li><a href="corporate_info_our_properties_list.html">Our Properties</a></li>
                            <li><a href="corporate_info_our_subsidiaries_list.html">Our Subsidiaries</a></li>
                        </ul>
                    </li>
                    <li><a href="corporate_governance_edit.html"><i class="fa fa-tags fa-fw"></i><span class="menu-title">Corporate Governance</span></a></li>
                    <li><a href="#"><i class="fa fa-puzzle-piece fa-fw"></i><span class="menu-title">IPO Centre</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="ipo_centre_ipo_statistics_edit.html">IPO Statistics</a></li>
                            <li><a href="ipo_centre_competitive_advantages_edit.html">Competitive Advantages</a></li>
                            <li><a href="ipo_centre_risk_factors_edit.html">Risk Factors</a></li>
                            <li><a href="ipo_centre_utilisation_proceeds_edit.html">Utilisation of Proceeds</a></li>
                            <li><a href="ipo_centre_industry_overview_edit.html">Industry Overview</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-dollar fa-fw"></i><span class="menu-title">Share Information</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="share_info_price_ticker_edit.html">Price Ticker</a></li>
                            <li><a href="share_info_stock_charts_list.html">Stock Charts</a></li>
                            <li><a href="share_info_price_volume_edit.html">Price &amp; Volume</a></li>
                            <li><a href="share_info_analysis_shareholdings_edit.html">Analysis of Shareholdings</a></li>
                            <li><a href="share_info_top_30_shareholders_edit.html">Top 30 Shareholders</a></li>
                        </ul>
                    </li>
                    <li><a href="entitlements_edit.html"><i class="fa fa-dot-circle-o fa-fw"></i><span class="menu-title">Entitlements</span></a></li>
                    <li><a href="#"><i class="fa fa-bar-chart-o fa-fw"></i><span class="menu-title">Financial Information</span><span class="fa arrow"></span></a>                        
                    	<ul class="nav nav-second-level">
					
                            <li><a href="financial_info_financial_highlights_edit.html">Financial Highlights</a></li>
                            <li><a href="financial_info_comprehensive_income_edit.html">Comprehensive Income</a></li>
                            <li><a href="financial_info_financial_position_edit.html">Financial Position</a></li>
                            <li><a href="financial_info_cash_flow_statement_edit.html">Cash Flow Statement</a></li>
                            <li><a href="financial_info_changes_in_equity_edit.html">Statement of Changes in Equity</a></li>
                            <li><a href="financial_info_latest_quarterly_report_edit.html">Latest Quarterly Report</a></li>
                            <li><a href="financial_info_segmental_analysis_edit.html">Segmental Analysis</a></li>
                            <li><a href="financial_info_ratio_analysis_edit.html">Ratio Analysis</a></li>
                    	</ul>
                    </li>
                    <li><a href="#"><i class="fa fa-user fa-fw"></i><span class="menu-title">Management Analysis</span><span class="fa arrow"></span></a>                        
                    	<ul class="nav nav-second-level">
                            <li><a href="mgmt_analysis_chairman_statement_edit.html">Chairman's Statement</a></li>
                            <li><a href="mgmt_analysis_review_operations_edit.html">Review of Operations</a></li>
                            <li><a href="mgmt_analysis_past_performance_review_edit.html">Past Performance Review</a></li>
                    	</ul>
                    </li>
                    <li><a href="#"><i class="fa fa-bullhorn fa-fw"></i><span class="menu-title">News Centre</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="news_centre_bursa_announcements_list.html">Bursa Announcements</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-file-text fa-fw"></i><span class="menu-title">Reports</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="reports_annual_reports_list.html">Annual Reports</a></li>
                            <li><a href="reports_annual_audited_accounts_list.html">Annual Audited Accounts</a></li>
                            <li><a href="reports_quarterly_reports_list.html">Quarterly Reports</a></li>
                            <li><a href="reports_circulars_list.html">Circulars</a></li>
                            <li><a href="reports_prospectus_list.html">Prospectus</a></li>
                            <li><a href="reports_analyst_reports_list.html">Analyst Reports</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-cog fa-fw"></i><span class="menu-title">Investor Tools</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="investor_tools_news_alert_list.html">News Alert</a></li>
                        </ul>
                    </li>
                    <li><a href="event_calendar_list.html"><i class="fa fa-calendar fa-fw"></i><span class="menu-title">Event Calendar</span></a></li>
                </ul>
          </div>
    </nav>