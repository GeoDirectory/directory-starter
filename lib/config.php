<?php
// Text domain
if (!defined('DIRECTORY_THEME')) define('DIRECTORY_THEME', 'directory-theme');
// Number of footer sidebars you need
if (!defined('FOOTER_SIDEBAR_COUNT')) define('FOOTER_SIDEBAR_COUNT', 4);
// Copyright text
if (!defined('DT_COPYRIGHT_TEXT')) define('DT_COPYRIGHT_TEXT', __('Copyright &copy; 2015 GeoDirectory Team. All rights reserved.', DIRECTORY_THEME));

//styles
//container
if (!defined('DT_CONTAINER_WIDTH')) define('DT_CONTAINER_WIDTH', '1170px');
if (!defined('DT_CONTAINER_PADDING_RIGHT')) define('DT_CONTAINER_PADDING_RIGHT', '15px');
if (!defined('DT_CONTAINER_PADDING_LEFT')) define('DT_CONTAINER_PADDING_LEFT', '15px');
if (!defined('DT_CONTAINER_MARGIN_RIGHT')) define('DT_CONTAINER_MARGIN_RIGHT', "auto");
if (!defined('DT_CONTAINER_MARGIN_LEFT')) define('DT_CONTAINER_MARGIN_LEFT', "auto");
//logo
if (!defined('DT_LOGO_MARGIN_RIGHT')) define('DT_LOGO_MARGIN_RIGHT', '0px');
if (!defined('DT_LOGO_MARGIN_LEFT')) define('DT_LOGO_MARGIN_LEFT', '0px');
if (!defined('DT_LOGO_MARGIN_TOP')) define('DT_LOGO_MARGIN_TOP', '15px');
//typography
if (!defined('DT_FONT_FAMILY')) define('DT_FONT_FAMILY', "'Lato','Helvetica Neue',Helvetica,Arial,sans-serif");
if (!defined('DT_FONT_SIZE')) define('DT_FONT_SIZE', '13px');
if (!defined('DT_LINE_HEIGHT')) define('DT_LINE_HEIGHT', '20px');

//colors
if (!defined('DT_BACKGROUND_COLOR')) define('DT_BACKGROUND_COLOR', "#F2F2F2");
if (!defined('DT_BODY_COLOR')) define('DT_BODY_COLOR', "#757575");
//content box colors
if (!defined('DT_CONTENT_BG')) define('DT_CONTENT_BG', "#FFFFFF");
if (!defined('DT_CONTENT_BORDER')) define('DT_CONTENT_BORDER', "#FFFFFF");
if (!defined('DT_CONTENT_SHADOW')) define('DT_CONTENT_SHADOW', "rgba(0,0,0,0.2)");
if (!defined('DT_COLOR_WHITE')) define('DT_COLOR_WHITE', "#FFFFFF");
//h1 to h6
if (!defined('DT_H1TOH6_COLOR')) define('DT_H1TOH6_COLOR', "#ED6D62");
//links
if (!defined('DT_LINK_COLOR')) define('DT_LINK_COLOR', DT_H1TOH6_COLOR);
if (!defined('DT_LINK_HOVER')) define('DT_LINK_HOVER', '#E84739');
if (!defined('DT_LINK_VISITED')) define('DT_LINK_VISITED', DT_LINK_COLOR);
//header
if (!defined('DT_HEADER_HEIGHT')) define('DT_HEADER_HEIGHT', '85px');
if (!defined('DT_HEADER_FIXED_TOP')) define('DT_HEADER_FIXED_TOP', '32px');
if (!defined('DT_HEADER_BG_COLOR')) define('DT_HEADER_BG_COLOR', "#2F2F2F");
if (!defined('DT_HEADER_LINK_COLOR')) define('DT_HEADER_LINK_COLOR', "#FFFFFF");
if (!defined('DT_HEADER_TEXT_COLOR')) define('DT_HEADER_TEXT_COLOR', "#FFFFFF");
if (!defined('DT_HEADER_LINK_HOVER')) define('DT_HEADER_LINK_HOVER', '#E8E8E8');
if (!defined('DT_HEADER_BORDER_COLOR')) define('DT_HEADER_BORDER_COLOR', "#FFFFFF");
if (!defined('DT_HEADER_SHADOW_COLOR')) define('DT_HEADER_SHADOW_COLOR', "rgba(0,0,0,0.2)");
//primary nav
if (!defined('DT_P_NAV_HEIGHT')) define('DT_P_NAV_HEIGHT', '84px');
if (!defined('DT_P_NAV_LINE_HEIGHT')) define('DT_P_NAV_LINE_HEIGHT', DT_P_NAV_HEIGHT);
if (!defined('DT_P_NAV_PADDING_LEFT_RIGHT')) define('DT_P_NAV_PADDING_LEFT_RIGHT', '20px');
//primary nav submenu
if (!defined('DT_P_NAV_SUBMENU_BG_COLOR')) define('DT_P_NAV_SUBMENU_BG_COLOR', DT_HEADER_BG_COLOR);
if (!defined('DT_P_NAV_SUBMENU_BG_HOVER')) define('DT_P_NAV_SUBMENU_BG_HOVER', '#464646');
//footer widget
if (!defined('DT_FW_BG')) define('DT_FW_BG', "#2F2F2F");
if (!defined('DT_FW_BORDER_TOP_COLOR')) define('DT_FW_BORDER_TOP_COLOR', "#FFFFFF");
if (!defined('DT_FW_BORDER_BOTTOM_COLOR')) define('DT_FW_BORDER_BOTTOM_COLOR', "#444");
if (!defined('DT_FW_BOX_SHADOW_COLOR')) define('DT_FW_BOX_SHADOW_COLOR', "rgba(0,0,0,0.2)");
//copyright
if (!defined('DT_COPYRIGHT_BG')) define('DT_COPYRIGHT_BG', "#202020");
if (!defined('DT_COPYRIGHT_PADDING_TOP')) define('DT_COPYRIGHT_PADDING_TOP', '20px');
if (!defined('DT_COPYRIGHT_PADDING_BOTTOM')) define('DT_COPYRIGHT_PADDING_BOTTOM', '20px');
if (!defined('DT_COPYRIGHT_BORDER_COLOR')) define('DT_COPYRIGHT_BORDER_COLOR', "#151515");
//alerts
if (!defined('DT_ALERT_YELLOW')) define('DT_ALERT_YELLOW', "#FCF8E3");
if (!defined('DT_ALERT_RED')) define('DT_ALERT_RED', "#F2DEDE");
if (!defined('DT_ALERT_GREEN')) define('DT_ALERT_GREEN', "#DFF0D8");
if (!defined('DT_ALERT_BLUE')) define('DT_ALERT_BLUE', "#D9EDF7");
if (!defined('DT_ALERT_YELLOW_TEXT')) define('DT_ALERT_YELLOW_TEXT', "#8A6D3B");
if (!defined('DT_ALERT_RED_TEXT')) define('DT_ALERT_RED_TEXT', "#A94442");
if (!defined('DT_ALERT_GREEN_TEXT')) define('DT_ALERT_GREEN_TEXT', "#3C763D");
if (!defined('DT_ALERT_BLUE_TEXT')) define('DT_ALERT_BLUE_TEXT', "#31708F");
if (!defined('DT_ALERT_YELLOW_BORDER')) define('DT_ALERT_YELLOW_BORDER', "#FAEBCC");
if (!defined('DT_ALERT_RED_BORDER')) define('DT_ALERT_RED_BORDER', "#EBCCD1");
if (!defined('DT_ALERT_GREEN_BORDER')) define('DT_ALERT_GREEN_BORDER', "#D6E9C6");
if (!defined('DT_ALERT_BLUE_BORDER')) define('DT_ALERT_BLUE_BORDER', "#BCE8F1");
//buttons
if (!defined('DT_BTN_TEXT_COLOR')) define('DT_BTN_TEXT_COLOR', "#FFFFFF");
if (!defined('DT_BTN_BG_COLOR')) define('DT_BTN_BG_COLOR', DT_LINK_COLOR);
if (!defined('DT_BTN_HOVER_COLOR')) define('DT_BTN_HOVER_COLOR', '#C25950');
if (!defined('DT_BTN_BORDER_COLOR')) define('DT_BTN_BORDER_COLOR', '#F2938B');