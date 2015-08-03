<?php
// Text domain
if (!defined('DIRECTORY_THEME')) define('DIRECTORY_THEME', 'directory-theme');
// Number of footer sidebars you need
if (!defined('FOOTER_SIDEBAR_COUNT')) define('FOOTER_SIDEBAR_COUNT', 4);
// Copyright text
if (!defined('DT_COPYRIGHT_TEXT')) define('DT_COPYRIGHT_TEXT', __('Copyright &copy; 2015 GeoDirectory Team. All rights reserved.', DIRECTORY_THEME));

//styles
//container
if (!defined('CSS_CONTAINER_WIDTH')) define('CSS_CONTAINER_WIDTH', 1170);
if (!defined('CSS_CONTAINER_PADDING_RIGHT')) define('CSS_CONTAINER_PADDING_RIGHT', 15);
if (!defined('CSS_CONTAINER_PADDING_LEFT')) define('CSS_CONTAINER_PADDING_LEFT', 15);
if (!defined('CSS_CONTAINER_MARGIN_RIGHT')) define('CSS_CONTAINER_MARGIN_RIGHT', "auto");
if (!defined('CSS_CONTAINER_MARGIN_LEFT')) define('CSS_CONTAINER_MARGIN_LEFT', "auto");
//logo
if (!defined('CSS_LOGO_MARGIN_RIGHT')) define('CSS_LOGO_MARGIN_RIGHT', 0);
if (!defined('CSS_LOGO_MARGIN_LEFT')) define('CSS_LOGO_MARGIN_LEFT', 0);
if (!defined('CSS_LOGO_MARGIN_TOP')) define('CSS_LOGO_MARGIN_TOP', 15);
if (!defined('CSS_LOGO_MARGIN_BOTTOM')) define('CSS_LOGO_MARGIN_BOTTOM', 15);
//typography
if (!defined('CSS_FONT_FAMILY')) define('CSS_FONT_FAMILY', "'Lato','Helvetica Neue',Helvetica,Arial,sans-serif");
if (!defined('CSS_FONT_SIZE')) define('CSS_FONT_SIZE', 13);
if (!defined('CSS_LINE_HEIGHT')) define('CSS_LINE_HEIGHT', 20);

//colors
if (!defined('CSS_BACKGROUND_COLOR')) define('CSS_BACKGROUND_COLOR', "#F2F2F2");
if (!defined('CSS_BODY_COLOR')) define('CSS_BODY_COLOR', "#757575");

if (!defined('CSS_CONTENT_BG')) define('CSS_CONTENT_BG', "#FFFFFF");
if (!defined('CSS_CONTENT_BORDER')) define('CSS_CONTENT_BORDER', "#FFFFFF");
if (!defined('CSS_CONTENT_SHADOW')) define('CSS_CONTENT_SHADOW', '#000000');

if (!defined('CSS_COLOR_WHITE')) define('CSS_COLOR_WHITE', "#FFFFFF");
if (!defined('CSS_H1TOH6_COLOR')) define('CSS_H1TOH6_COLOR', "#ED6D62");

if (!defined('CSS_ALERT_YELLOW')) define('CSS_ALERT_YELLOW', "#EBE16F");
if (!defined('CSS_ALERT_RED')) define('CSS_ALERT_RED', "#FBE3E4");
if (!defined('CSS_ALERT_GREEN')) define('CSS_ALERT_GREEN', "#E6EFC2");
if (!defined('CSS_ALERT_BLUE')) define('CSS_ALERT_BLUE', "#D5EDF8");

if (!defined('CSS_LINK_COLOR')) define('CSS_LINK_COLOR', CSS_H1TOH6_COLOR);
if (!defined('CSS_LINK_HOVER')) define('CSS_LINK_HOVER', darken_color(CSS_LINK_COLOR, 9));
if (!defined('CSS_LINK_VISITED')) define('CSS_LINK_VISITED', CSS_LINK_COLOR);

if (!defined('CSS_FOOTER_WIDGET_BG')) define('CSS_FOOTER_WIDGET_BG', "#2F2F2F");
if (!defined('CSS_COPYRIGHT_BG')) define('CSS_COPYRIGHT_BG', "#202020");

//header
if (!defined('CSS_HEADER_HEIGHT')) define('CSS_HEADER_HEIGHT', 85);
if (!defined('CSS_HEADER_FIXED_TOP')) define('CSS_HEADER_FIXED_TOP', 32);
if (!defined('CSS_HEADER_BG_COLOR')) define('CSS_HEADER_BG_COLOR', CSS_COLOR_WHITE);

//primary nav
if (!defined('CSS_P_NAV_HEIGHT')) define('CSS_P_NAV_HEIGHT', 80);
if (!defined('CSS_P_NAV_LINE_HEIGHT')) define('CSS_P_NAV_LINE_HEIGHT', CSS_P_NAV_HEIGHT);

if (!defined('CSS_P_NAV_PADDING_RIGHT')) define('CSS_P_NAV_PADDING_RIGHT', 45);

//copyright
if (!defined('CSS_COPYRIGHT_PADDING_TOP')) define('CSS_COPYRIGHT_PADDING_TOP', 20);
if (!defined('CSS_COPYRIGHT_PADDING_BOTTOM')) define('CSS_COPYRIGHT_PADDING_BOTTOM', 20);

//buttons
if (!defined('CSS_BTN_TEXT_COLOR')) define('CSS_BTN_TEXT_COLOR', "#FFFFFF");
if (!defined('CSS_BTN_BG_COLOR')) define('CSS_BTN_BG_COLOR', CSS_LINK_COLOR);
if (!defined('CSS_BTN_HOVER_COLOR')) define('CSS_BTN_HOVER_COLOR', darken_color(CSS_BTN_BG_COLOR, 9));
if (!defined('CSS_BTN_BORDER_COLOR')) define('CSS_BTN_BORDER_COLOR', lighten_color(CSS_BTN_BG_COLOR, 9));