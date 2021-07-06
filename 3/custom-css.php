@-webkit-keyframes fadeIn { from { opacity:0; } to { opacity:0.99; } }
@-moz-keyframes fadeIn { from { opacity:0; } to { opacity:0.99; } }
@keyframes fadeIn { from { opacity:0; } to { opacity:0.99; } }
 
.fade-in {
    opacity:0; 
    -webkit-animation:fadeIn ease-in 1;  
    -moz-animation:fadeIn ease-in 1;
    animation:fadeIn ease-in 1;
 
    -webkit-animation-fill-mode:forwards; 
    -moz-animation-fill-mode:forwards;
    animation-fill-mode:forwards;
 
    -webkit-animation-duration:0.5s;
    -moz-animation-duration:0.5s;
    animation-duration:0.5s;
}
 
.fade-in.one {
	-webkit-animation-delay: 0.5s;
	-moz-animation-delay: 0.5s;
	animation-delay: 0.5s;
}

.fade-in.two {
	-webkit-animation-delay: 1.2s;
	-moz-animation-delay:1.2s;
	animation-delay: 1.2s;
}
 
.fade-in.three {
	-webkit-animation-delay: 1.6s;
	-moz-animation-delay: 1.6s;
	animation-delay: 1.6s;
}

.fade-in.four {
	-webkit-animation-delay: 2s;
	-moz-animation-delay: 2s;
	animation-delay: 2s;
}

.entry_img {
	opacity:0;
}

.in-view {
	-webkit-animation:fadeIn ease-in 1;  
    -moz-animation:fadeIn ease-in 1;
    animation:fadeIn ease-in 1;
 
    -webkit-animation-duration:0.5s;
    -moz-animation-duration:0.5s;
    animation-duration:0.5s;
    
	opacity: 1;
}

#content_wrapper .inner .inner_wrapper .sidebar_content ul.slides, .flexslider .slides
{
	margin: 0 !important;
}

.animated1{
	-webkit-animation-delay: 0.5s;
	-moz-animation-delay: 0.5s;
	animation-delay: 0.5s;
}
.animated2{
	-webkit-animation-delay: 1s;
	-moz-animation-delay: 1s;
	animation-delay: 1s;
}
.animated3{
	-webkit-animation-delay: 1.5s;
	-moz-animation-delay: 1.5s;
	animation-delay: 1.5s;
}
.animated4{
	-webkit-animation-delay: 2s;
	-moz-animation-delay: 2s;
	animation-delay: 2s;
}
.animated5{
	-webkit-animation-delay: 2.5s;
	-moz-animation-delay: 2.5s;
	animation-delay: 2.5s;
}
.animated6{
	-webkit-animation-delay: 3s;
	-moz-animation-delay: 3s;
	animation-delay: 3s;
}
.animated7{
	-webkit-animation-delay: 3.5s;
	-moz-animation-delay: 3.5s;
	animation-delay: 3.5s;
}
.animated8{
	-webkit-animation-delay: 4s;
	-moz-animation-delay: 4s;
	animation-delay: 4s;
}
.animated9{
	-webkit-animation-delay: 4.5s;
	-moz-animation-delay: 4.5s;
	animation-delay: 4.5s;
}
.animated10{
	-webkit-animation-delay: 5s;
	-moz-animation-delay: 5s;
	animation-delay: 5s;
}


#second_menu.fixed
{
	background: #fff;
	background: rgba(256,256,256,.95);
	opacity: 1;
	-webkit-animation:fadeIn ease-in 1;  
    -moz-animation:fadeIn ease-in 1;
    animation:fadeIn ease-in 1;
 
    -webkit-animation-duration:0.3s;
    -moz-animation-duration:0.3s;
    animation-duration:0.3s;
    
    position: fixed;
    top: 0;
    left: 0;
    z-index: 1001;
    border: 0;
    margin: 0;
    width: 100%;
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
}

.second_nav.fixed ul li a, .second_nav.fixed li a
{
	padding: 11px 15px 7px 15px;
	font-size: 13px !important;
}

.second_nav.fixed ul li > ul, .second_nav.fixed li > ul
{
	margin-top: 37px;
	border: 0;
	background: #fff;
	background: rgba(256,256,256,.95);
}

.second_nav.fixed ul li ul li > ul, .second_nav.fixed li ul li > ul
{
	margin-top: -5px;
}

.second_nav.fixed ul li ul li a, .second_nav.fixed li ul li a
{
	padding: 6px 19px 6px 16px;
	font-size: 11px !important;
}

.second_nav.fixed li .mega_menu_wrapper
{
	width: 100%;
}

.second_nav.fixed li .mega_menu_wrapper ul.sidebar_widget
{
	width: 960px;
	margin: auto;
	left: -10px;
}

.second_nav.fixed li .mega_menu_wrapper ul > li .slider_widget_wrapper
{
	max-width: 280px;
}


h1, h2, h3, h4, h5, h6, h7, #copyright_left, #header_wrapper #searchform input, span[rel=author], a[rel=author], #top_menu li, .main_nav ul li a,  .main_nav li a, .second_nav ul li a,  .second_nav li a, .post_comment_number, .post_comment_number:hover, .post_comment_number:active, .readmore, .comment-reply-link, #cancel-comment-reply-link, .comment_number_bg, .review_score_bg, .post_detail, .colorful, .pagination a, .pagination a:active, .pagination a.active, .pagination span.current, .post_attribute, #toTop, .mobile_menu_close a, .mobile_main_nav li a { font-family: 'Lato' !important; }		

.post_detail a, .post_detail a:hover, .post_detail a:active { color:#cb1411; }
.pagination span.current, .pagination a:hover { background:#cb1411; }

body { color:#555555; }

#page_caption h2 { color:#000000; }

#content_wrapper .sidebar .content .sidebar_widget li h2.widgettitle, h2.widgettitle, h2.widgettitle a, h5.header_line span { color:#000000; }

#content_wrapper .sidebar .content .sidebar_widget li h2.widgettitle, h2.widgettitle, h5.header_line { border-color:#000000; }

.second_nav ul, .second_nav { border-color:#000000; }

.footer_wrapper { background:#f5f5f5; }

#footer { color:#555555; }

#copyright { background:#000000; }

#footer { color:#555555; }

body { font-size:14px; }

.second_nav ul li a, .second_nav li a { font-size:14px; }
#menu_wrapper div .nav li ul, .second_nav li ul { margin-top: 35px; }

.second_nav ul li ul.sub-menu li a, .second_nav li ul.sub-menu li a { font-size:11px; }

#page_caption h1, #page_caption h2 { font-size:28px; }

h1 { font-size:30px; }

h2 { font-size:28px; }

h3 { font-size:26px; }

h4 { font-size:24px; }

h5 { font-size:22px; }

h6 { font-size:18px; }


.loop-social-googleplus{display:none !important;}
