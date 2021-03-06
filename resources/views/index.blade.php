@extends('layouts.inc')
@section('content')
    <!--home Section -->
    <section id="home" class="home">
        <div class="overlay">
            <div class="home_skew_border">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 ">
                            <div class="main_home_slider text-center">
                                <div class="single_home_slider">
                                    <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                        <h3>@lang("Our Clients Are Our First Priority")</h3>
                                        <h1>@lang("BUSINESS SUPPORT CENTER")</h1>
                                        <div class="separator"></div>
                                        <p>@lang("'Business support centre' offers its beneficial services to foreign entrepreneurial entities. 'Business support centre' guarantees and protects your entrepreneurial activities and rights correspondingly in Uzbekistan in accordance with the legislation in the field of business").</p>
                                        <div class="home_btn">
                                            <a href="https://form.jotform.com/202992948975477" class="btn btn-lg m_t_10">@lang("GET STARTED NOW")</a>
                                            <a href="https://form.jotform.com/202992948975477" class="btn btn-default">@lang("LEARN MORE")</a>
                                        </div>

                                    </div>
                                </div>
                                <div class="single_home_slider">
                                    <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                        <h3>@lang("Our Clients Are Our First Priority")</h3>
                                        <h1>@lang("BUSINESS SUPPORT CENTER")</h1>
                                        <div class="separator"></div>
                                        <p>@lang("'Business support centre' offers its beneficial services to foreign entrepreneurial entities. 'Business support centre' guarantees and protects your entrepreneurial activities and rights correspondingly in Uzbekistan in accordance with the legislation in the field of business").</p>
                                        <div class="home_btn">
                                            <a href="" class="btn btn-lg m_t_10">@lang("GET STARTED NOW")</a>
                                            <a href="" class="btn btn-default">@lang("LEARN MORE")</a>
                                        </div>

                                    </div>
                                </div>
                                <div class="single_home_slider">
                                    <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                        <h3>@lang("Our Clients Are Our First Priority")</h3>
                                        <h1>@lang("BUSINESS SUPPORT CENTER")</h1>
                                        <div class="separator"></div>
                                        <p>@lang("'Business support centre' offers its beneficial services to foreign entrepreneurial entities. 'Business support centre' guarantees and protects your entrepreneurial activities and rights correspondingly in Uzbekistan in accordance with the legislation in the field of business").</p>
                                        <div class="home_btn">
                                            <a href="" class="btn btn-lg m_t_10">@lang("GET STARTED NOW")</a>
                                            <a href="" class="btn btn-default">@lang("LEARN MORE")</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="scrooldown">
                    <a href="#feature"><i class="fa fa-arrow-down"></i></a>
                </div>
            </div>
        </div>
    </section><!--End of home section -->


    <!--feature section -->
    <section id="feature" class="feature sections">
        <div class="container">
            <div class="row">
                <div class="main_feature text-center">
                    <div class="col-sm-12">
                        <div class="head_title text-center">
                            <h2>@lang("STATE PRIVILEGES AND PREFERENCES")</h2>
                            <div class="subtitle">
                                @lang("Many preferences and privileges have been created by the government in order to support entrepreneurial activity")
                            </div>
                            <div class="separator"></div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="single_feature">
                            <div class="single_feature_icon main-icons">
                                <i class="fa fa-map-o"></i>
                            </div>

                            <h4>@lang("FREE LAND AREA")</h4>
                            <div class="separator3"></div>
                            <p>@lang("Ensuring free land areas by the government to operate business activities in Uzbekistan according to the amount of foreign investment.(M4434 Decree of the President of the Rep. of Uzb)")</p>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="single_feature">
                            <div class="single_feature_icon main-icons">
                                <i class="fa fa-money"></i>
                            </div>

                            <h4>@lang("EXEMPTION FROM TAXES").</h4>
                            <div class="separator3"></div>
                            <p>@lang("Legal entities are exempted from several taxes such as income tax, property tax and single tax for certain period of time, depending on the amount of investment invested in accordance with the legislation")</p>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="single_feature">
                            <div class="single_feature_icon main-icons">
                                <i class="fa fa-file-o"></i>
                            </div>
                            <h4>@lang("FREE CERTIFICATES")</h4>
                            <div class="separator3"></div>
                            <p>@lang("Obtaining foreign and local certificates on a basis of state subsidy")</p>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="single_feature">
                            <div class="single_feature_icon main-icons">
                                <i class="fa fa-usd"></i>
                            </div>

                            <h4>@lang("DISCOUNTS")</h4>
                            <div class="separator3"></div>
                            <p>@lang("Up to 50 % subsidy for logistical expenses of exported products. (№3257 Decree of the President of the Rep. of Uzb)")</p>
                        </div>
                    </div>

                </div>
            </div>
        </div><!--End of container -->
    </section><!--End of feature Section -->
    <hr />


    <!-- History section -->
    <section id="history" class="history sections">
        <div class="container">
            <div class="row">
                <div class="main_history">
                    <div class="col-sm-6">
                        <div class="single_history_img">
                            <img src="assets/images/stab1.png" alt="" />
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="single_history_content">
                            <div class="head_title">
                                <h2>@lang("OUR HISTORY")</h2>
                            </div>
                            <p class="history">@lang("The Association of Exporters of Uzbekistan was officially registered on September 23, 2019 with certificate N 1740 by Ministry of Justice of the Republic of Uzbekistan.  The Association of Exporters of Uzbekistan assists member companies to expand practical communications and relations with foreign partners, to penetrate foreign markets with export products, including to emerge new manufacturers as well as to attract foreign investments").<br>
                            @lang("'Business support centre' under the Association of Exporters of Uzbekistan comprehensively supports entrepreneurs, create favourable conditions, and legally protect them"). </p>

                            <a href="http://exportuz.com/" class="btn btn-lg">@lang("Official Site")</a>
                        </div>
                    </div>
                </div>
            </div><!--End of row -->
        </div><!--End of container -->
    </section><!--End of history -->

    <!-- Blog Section -->
    <section id="blog" class="blog">
        <div class="container-fluid">
            <div class="row">
                <div class="main_blog sections">
                    <div class="head_title text-center">
                        <h2>@lang("GENERAL SERVICES")</h2>
                        <div class="subtitle container">
                            @lang("'Business support centre' offers its beneficial services to foreign entrepreneurial entities. 'Business support centre' guarantees and protects your entrepreneurial activities and rights correspondingly in Uzbekistan in accordance with the legislation in the field of business").

                        </div>
                        <div class="separator"></div>
                    </div><!-- End off Head_title -->

                    <div class="main_blog_content">
                        <div class="col-sm-6">
                            <div class="single_blog_area textwhite">
                                <div class="row">
                                    <div class="col-sm-6 no-padding">
                                        <div class="single_blog_img">
                                            <img src="assets/images/blog1.jpg" alt="" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6 no-padding">
                                        <div class="single_blog_text s_b_left">
                                            <h3>@lang("Ticket & Visa invitation")</h3>
                                            <div class="separator2"></div>
                                            <p>@lang("Assistance in obtaining air tickets and visas to Uzbekistan").</p>

                                            <a href="https://form.jotform.com/202992948975477" class="read_more">@lang("Book Now")>></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="single_blog_area textwhite">
                                <div class="row">
                                    <div class="col-sm-6 no-padding">
                                        <div class="single_blog_img">
                                            <img src="assets/images/blog2.jpg" alt="" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6 no-padding">
                                        <div class="single_blog_text s_b_left">
                                            <h3>@lang("Transportation")</h3>
                                            <div class="separator2"></div>
                                            <p>@lang("Free transport for business meetings over Uzbekistan").</p>

                                            <a href="https://form.jotform.com/202992948975477" class="read_more">@lang("Book Now") >></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="single_blog_area textwhite">
                                <div class="row">

                                    <div class="col-sm-6 col-sm-push-6 no-padding">
                                        <div class="single_blog_img">
                                            <img src="assets/images/blog3.jpg" alt="" />
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-sm-pull-6 no-padding">
                                        <div class="single_blog_text s_b_right">
                                            <h3>@lang("Hotel services")</h3>
                                            <div class="separator2"></div>
                                            <p style="margin-bottom: 23px;">@lang("50 % discount for hotel").</p><br>

                                            <a href="https://form.jotform.com/202992948975477" class="read_more">@lang("Book Now") >></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="single_blog_area textwhite">
                                <div class="row">
                                    <div class="col-sm-6 col-sm-push-6 no-padding">
                                        <div class="single_blog_img">
                                            <img src="assets/images/blog4.jpg" alt="" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-sm-pull-6 no-padding">
                                        <div class="single_blog_text s_b_right">
                                            <h3>@lang("Interpreter")</h3>
                                            <div class="separator2"></div>
                                            <p>@lang("Free interpreter service in business meetings and project presentations").</p>

                                            <a href="https://form.jotform.com/202992948975477" class="read_more">@lang("Book Now") >></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="single_blog_area textwhite">
                                <div class="row">
                                    <div class="col-sm-6 no-padding">
                                        <div class="single_blog_img">
                                            <img src="assets/images/blog5.jpg" alt="" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6 no-padding">
                                        <div class="single_blog_text s_b_left">
                                            <h3>@lang("Tour")</h3>
                                            <div class="separator2"></div>
                                            <p>@lang("Free tour service in historical sites over the Republic").</p>

                                            <a href="https://form.jotform.com/202992948975477" class="read_more">@lang("Book Now") >></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="single_blog_area textwhite">
                                <div class="row">
                                    <div class="col-sm-6 no-padding">
                                        <div class="single_blog_img">
                                            <img src="assets/images/blog6.jpg" alt="" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6 no-padding">
                                        <div class="single_blog_text s_b_left">
                                            <h3>@lang("Security")</h3>
                                            <div class="separator2"></div>
                                            <p>@lang("Ensuring a safe journey on the territory of the Republic").</p>

                                            <a href="https://form.jotform.com/202992948975477" class="read_more">@lang("Book Now") >></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div><!-- End off container -->
    </section><!-- End off Blog Section -->

    


            



    <!-- Study Section --> 
    <section id="study" class="study text-center wow fadeIn"  data-wow-duration="2s" data-wow-dealy="1.5s">
        <div class="container">
            <div class="row">
                <div class="main_study_area sections">
                    <div class="head_title text-center">
                        <h2>@lang("JURIDICAL, ORAGANIZATIONAL ASSISTANCE, ADVERTISING AND PROMOTION")</h2>
                        <div class="subtitle">
                            @lang("State legislation guarantees the rights of investors. State organizations and their authorities have no rights to disturb investors who carry out their activity in accordance with legal norms and regulations.(Rep. Uz. RUL-N*598)")
                        </div>
                        <div class="separator"></div>
                    </div>
                    <div class="single_study_content">
                        <div class="col-sm-6">
                            <div class="single_study_slid_area">

                                <div class="single_study_text">
                                    <div class="study_slider"> 
                                        <div class="item">
                                            <div class="s_study_icon main-icons">
                                                <i class="fa fa-legal"></i>  
                                            </div>
                                            <h4>@lang("JURIDICAL ASSISTANCE")</h4>
                                            <div class="separator3"></div>
                                            <p>@lang("A party to the investment activity has the right to be a party of the competitive (tender) bidding, electronic stores and auctions State bodies and their officials cannot use the fact of a violation as a basis for interference or restriction of other, not related to investment, legal activities of investment entities.(Rep. Uz. RUL-M598)")</p> 
                                            <a href="https://form.jotform.com/202992948975477" class="btn btn-lg">@lang("read more")</a>
                                        </div>
                                        <div class="item">
                                            <div class="s_study_icon main-icons">
                                                <i class="fa fa-bank "></i>  
                                            </div>
                                            <h4>@lang("GUARANTEES OF THE FREE TRANSFER OF FUNDS")</h4>
                                            <div class="separator3"></div>
                                            <p>@lang("Investors are guaranteed the free transfer of funds in foreign currency to and from the Republic of Uzbekistan without any restrictions, on condition that they pay taxes and payments, including currency conversion for repatriation").</p>

                                            <a href="https://form.jotform.com/202992948975477" class="btn btn-lg">@lang("read more")</a>
                                        </div>
                                        <div class="item">
                                            <div class="s_study_icon main-icons">
                                                <i class="fa fa-bullhorn"></i>  
                                            </div>
                                            <h4>@lang("ADVERTISING & PROMOTION")</h4>
                                            <div class="separator3"></div>
                                            <p style="margin-bottom: 70px;">@lang("Free promotion over state Tv, radio progames and social networks for entrepreneurial activities of foreign business entities applying services of 'Business Support Centre'")<br><br></p>

                                            <a href="https://form.jotform.com/202992948975477" class="btn btn-lg">@lang("read more")</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="single_study_right_img">
                            <div class="col-sm-6">
                                <div class="single_study_img">
                                    <img src="assets/images/study.jpg" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End off row --> 
        </div><!-- End off Container --> 
    </section><!-- End off Study Section --> 


    <!-- Counter Section --> 
    <section id="counter" class="counter">
        <div class="video_overlay">
            <div class="container">
                <div class="row">  
                    <div class="col-sm-12">               
                        <div class="main_counter_area text-center">

                            <div class="row">
                                <div class="single_counter border_right">
                                    <div class="col-sm-3 col-xs-12">
                                        <div class="single_counter_item">
                                            <i class="icon icon-thumbs-up"></i>
                                            <h2 class="statistic-counter">291</h2>
                                            <h4 class="">@lang("User Satisfaction")</h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="single_counter">
                                    <div class="col-sm-3 col-xs-12">
                                        <div class="single_counter_item">
                                            <i class="icon icon-business-3"></i>
                                            <h2 class="statistic-counter">111</h2>
                                            <h4 class="">@lang("Achievements")</h4>  
                                        </div>
                                    </div>
                                </div> 

                                <div class="single_counter">
                                    <div class="col-sm-3 col-xs-12">
                                        <div class="single_counter_item">
                                            <i class="icon icon-people-32"></i>
                                            <h2 class="statistic-counter">118</h2>
                                            <h4 class="">@lang("Clients")</h4>  
                                        </div>

                                    </div>
                                </div>

                                <div class="single_counter">
                                    <div class="col-sm-3 col-xs-12">
                                        <div class="single_counter_item">
                                            <i class="icon icon-cup"></i>
                                            <h2 class="statistic-counter">78</h2>
                                            <h4 class="">@lang("Amazing Features")</h4>

                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End off container --> 
    </section>   <!-- End of counter section -->

    <!-- Pricing Section -->
    <section id="pricing" class="pricing">
        <div class="container">
            <div class="row">
                <div class="main_pricing_area sections">
                    <div class="head_title text-center">
                        <h2>@lang("OUR PRICING")</h2>
                        <div class="subtitle">
                            @lang("A 30 days free trial for all. A brief story about how this process works, keep an eye till the end").
                        </div>
                        <div class="separator"></div>
                    </div><!-- End off Head_title -->

                    <div class="col-md-4 col-sm-6">
                        <div class="single_pricing">
                            <div class="pricing_head">
                                <h3>@lang("STARTER")</h3>
                                <div class="pricing_price">
                                    <div class="p_r text-center">$1000</div>
                                    <div class="m_t text-center">@lang("per month")</div>
                                </div>
                            </div>

                            <div class="pricing_body">
                                <ul>
                                    <li>@lang("Ticket & Visa invitation")</li>
                                    <li>@lang("Transportation")</li>
                                    <li>@lang("Hotel services")</li>
                                    <li>@lang("Interpreter")</li>
                                    <li>@lang("Tour")</li>
                                    <li>@lang("Security")</li>
                                </ul>
                                <a href="https://form.jotform.com/202992948975477" class="btn btn-md">@lang("CHOOSE PLAN")</a>
                            </div>
                        </div>
                    </div> <!-- End off col-md-4 -->
                    <div class="col-md-4 col-sm-6">
                        <div class="single_pricing pricing_business">
                            <div class="pricing_head ">
                                <h3>@lang("PREMIUM")</h3>
                                <div class="pricing_price">
                                    <div class="p_r text-center">$1000</div>
                                    <div class="m_t text-center">@lang("per month")</div>
                                </div>
                            </div>

                            <div class="pricing_body">
                                <ul>
                                    <li>@lang("Ticket & Visa invitation")</li>
                                    <li>@lang("Transportation")</li>
                                    <li>@lang("Hotel services")</li>
                                    <li>@lang("Interpreter")</li>
                                    <li>@lang("Tour")</li>
                                    <li>@lang("Security")</li>
                                </ul>
                                <a href="https://form.jotform.com/202992948975477" class="btn btn-md">@lang("CHOOSE PLAN")</a>
                            </div>
                        </div>
                    </div> <!-- End off col-md-4 -->
                    <div class="col-md-4 col-sm-6">
                        <div class="single_pricing">
                            <div class="pricing_head">
                                <h3>@lang("BUSINESS")</h3>
                                <div class="pricing_price">
                                    <div class="p_r text-center">$1000</div>
                                    <div class="m_t text-center">@lang("per month")</div>
                                </div>
                            </div>

                            <div class="pricing_body">
                                <ul>
                                    <li>@lang("Ticket & Visa invitation")</li>
                                    <li>@lang("Transportation")</li>
                                    <li>@lang("Hotel services")</li>
                                    <li>@lang("Interpreter")</li>
                                    <li>@lang("Tour")</li>
                                    <li>@lang("Security")</li>
                                </ul>
                                <a href="https://form.jotform.com/202992948975477" class="btn btn-md">@lang("CHOOSE PLAN")</a>
                            </div>
                        </div>
                    </div> <!-- End off col-md-4 -->
                </div>
            </div><!-- End off row -->
        </div><!-- End off container -->
    </section><!-- End off Pricing Section -->

    <!-- Team Section -->
    <section id="team" class="team">
        <div class="main_team_area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="head_title textwhite text-center margin-top-80">
                            <h2>@lang("OUR TEAM")</h2>
                            <div class="subtitle">
                               @lang("Meet the main team. Share your thoughts with them").
                            </div>
                            <div class="separator"></div>
                        </div><!-- End off Head_title -->

                        <div class="main_team">
                            <ul>
                                <li>
                                    <div class="single_team_img">
                                        <img src="assets/images/team-1.jpg" alt="" />
                                    </div>
                                    <div class="single_team_text">
                                        <h4>@lang("Muhtor Umarov")</h4>
                                        <p>@lang("Chairman")</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="single_team_img">
                                        <img src="assets/images/team-2.jpg" alt="" />
                                    </div>
                                    <div class="single_team_text">
                                        <h4>@lang("Yorqin Malikov")</h4>
                                        <p>@lang("Deputy Chairman")</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="single_team_img">
                                        <img src="assets/images/team-3.jpg" alt="" />
                                    </div>
                                    <div class="single_team_text">
                                        <h4>@lang("Khusniddin Ismoilov")</h4>
                                        <p>@lang("Expert on Foreign Affairs")</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="single_team_img">
                                        <img src="assets/images/team-4.jpg" alt="" />
                                    </div>
                                    <div class="single_team_text">
                                        <h4>@lang("Sirojiddin Narziqulov")</h4>
                                        <p>@lang("Expert on Foreign Economic Affairs")</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="single_team_img">
                                        <img src="assets/images/team-5.jpg" alt="" />
                                    </div>
                                    <div class="single_team_text">
                                        <h4>@lang("Bahodir Abdurahmonov")</h4>
                                        <p>@lang("Deputy Head of International Economic Relations Department")</p>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div><!-- End of main team contant --> 
                </div>
            </div><!-- End of container -->
        </div>
    </section><!-- End off Team Section -->

    <!-- Client Logo Section -->
    <!-- <section id="clogo" class="clogo">
        <div class="container">
            <div class="row">
                <div class="main_clogo sections text-center">
                    <div class="head_title text-center">
                        <h2>Our Partners</h2>
                        <div class="subtitle">
                            Suspendisse sed eros mollis, tincidunt felis eget, interdum erat. 
                            Nullam sit amet odio eu est aliquet euismod a a urna. Proin eu urna suscipit, dictum quam nec. 
                        </div>
                        <div class="separator"></div>
                    </div>

                    <div class="col-sm-3 col-xs-6"> 
                        <a href=""><img src="assets/images/clogo1.png" alt="" /></a>
                    </div>
                    <div class="col-sm-3 col-xs-6"> 
                        <a href=""><img src="assets/images/clogo2.png" alt="" /></a>
                    </div>
                    <div class="col-sm-3 col-xs-6"> 
                        <a href=""><img src="assets/images/clogo3.png" alt="" /></a>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <a href=""><img src="assets/images/clogo4.png" alt="" /></a>
                    </div>
                    <div class="col-sm-3 col-xs-6"> 
                        <a href=""><img src="assets/images/clogo5.png" alt="" /></a>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <a href=""><img src="assets/images/clogo6.png" alt="" /></a>
                    </div>
                    <div class="col-sm-3 col-xs-6"> 
                        <a href=""><img src="assets/images/clogo9.png" alt="" /></a>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <a href=""><img src="assets/images/clogo8.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="divider"></div>
    </section> --><!-- End off clogo Section -->


    


    <section id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="contact_contant sections">
                        <div class="head_title text-center">
                            <h2>@lang("KEEP IN TOUCH")</h2>
                            <div class="subtitle">
                                @lang("'BUSINESS SUPPORT CENTRE' IS A GUARANTEE OF YOUR ENTREPRENEURIAL ACTIVITY IN UZBEKISTAN")  
                            </div>
                            <div class="separator"></div>
                        </div><!-- End off Head_title -->
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="main_contact_info">
                                    <div class="row">
                                        <div class="contact_info_content padding-top-90 padding-bottom-60 p_l_r">
                                            <div class="col-sm-12">
                                                <div class="single_contact_info">
                                                    <div class="single_info_text">
                                                        <h3>@lang("OUR ADDRESS")</h3>
                                                        <h4>@lang("8A, Karakamish street, Almazor district, Tashkent, Uzbekistan")</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="single_contact_info">
                                                    <div class="single_info_text">
                                                        <h3>@lang("CALL US")</h3>
                                                        <h4>+ 99895 1454502</h4>
                                                        <h4>+ 99871 2070098</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="single_contact_info">
                                                    <div class="single_info_text">
                                                        <h3>@lang("EMAIL US")</h3>
                                                        <h4>info@exportuz.com</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 

                            <div class="col-sm-6">
                                <div class="single_contant_left padding-top-90 padding-bottom-90">
                                    <form action="#" id="formid">
                                        <div class="col-lg-8 col-md-8 col-sm-10 col-lg-offset-2 col-md-offset-2 col-sm-offset-1">

                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="name" placeholder="First Name" required="">
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" name="email" placeholder="Email" required="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <textarea class="form-control" name="message" rows="7" placeholder="Message"></textarea>
                                            </div>

                                            <div class="">
                                                <input type="submit" value="SEND MESSAGE" class="btn btn-lg">
                                            </div>
                                        </div> 
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End of contact section -->

    <section id="trial" class="trial text-center wow fadeIn"  data-wow-duration="2s" data-wow-dealy="1.5s">
        <div class="main_trial_area">
            <div class="video_overlay sections">
                <div class="container">
                    <div class="row">
                        <div class="main_trial">
                            <div class="col-sm-12">
                                <h2>@lang("Let's Get Started Now"). <span>@lang("It's FREE")!</span></h2>
                                <h4>@lang("Legal entities are exempted from corporate income tax, property tax, single tax for a certain period of time, depending on the amount of investment made in accordance with the legislation").
</h4>
                                <a href="https://form.jotform.com/202992948975477" class="btn btn-lg">@lang("Start free trial")</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End of Trial section -->


    <!--Footer section-->
    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="main_footer">
                        <div class="row">
                            <div class="col-sm-6 col-xs-12">
                                <div class="flowus">
                                    <a href="https://www.facebook.com/uzex.uyushma"><i class="fa fa-facebook"></i></a>
                                    <a href="https://t.me/Eksportchilar_uyushmasi"><i class="fa fa-send"></i></a>
                                    <a href="https://www.google.com/search?bih=625&biw=1366&hl=ru&sxsrf=ALeKk00PCGipdsXCMIdvM_U_oMI6clYOjg%3A1603541521104&ei=ERqUX9veBe3HrgTPxrCoAQ&q=o%27zbekiston+eksportchilar+uyushmasi&oq=O%27zbekis&gs_lcp=CgZwc3ktYWIQAxgAMgQIIxAnMgQIIxAnMgQIIxAnMgIIADICCC4yAgguMgIIADICCAAyAggAMgIIADoFCAAQsQM6CAgAELEDEIMBOgQIABBDUN0NWKwlYM4taABwAHgAgAG5AogBtQ2SAQcxLjUuMi4xmAEAoAEBqgEHZ3dzLXdpesABAQ&sclient=psy-ab"><i class="fa fa-google"></i></a>
                                    <a href="https://www.instagram.com/uzbekmart/"><i class="fa fa-instagram"></i></a>
                                    <a href="https://www.youtube.com/channel/UCqknB-bdjhBK10uZVyjuUnQ"><i class="fa fa-youtube"></i></a>
                                </div>
                            </div>

                            <div class="col-sm-6 col-xs-12">
                                <div class="copyright_text">
                                    <p class=" wow fadeInRight" data-wow-duration="1s">© 2020 @lang("Association of Exporters of Uzbekistan")</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End off footer Section-->
@endsection