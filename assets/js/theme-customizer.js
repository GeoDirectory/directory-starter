/**
 * Customizer Js
 */
( function( $ ) {
    //  =============================
    //  = Site Title                =
    //  =============================
    wp.customize( 'blogname', function( value ) {
        value.bind( function( newval ) {
            $( 'h1.site-title a' ).html( newval );
        } );
    } );

    //  =============================
    //  = container                 =
    //  =============================

    wp.customize( 'dt_container_width', function( value ) {
        value.bind( function( newval ) {
            $( '.container, .geodir-common, .geodir-breadcrumb, .geodir_full_page .widget' ).css('width', newval );
        } );
    } );

    wp.customize( 'dt_container_padding_right', function( value ) {
        value.bind( function( newval ) {
            $( '.container, .geodir-common, .geodir-breadcrumb, .geodir_full_page .widget' ).css('padding-right', newval );
        } );
    } );

    wp.customize( 'dt_container_padding_left', function( value ) {
        value.bind( function( newval ) {
            $( '.container, .geodir-common, .geodir-breadcrumb, .geodir_full_page .widget' ).css('padding-left', newval );
        } );
    } );

    wp.customize( 'dt_container_margin_right', function( value ) {
        value.bind( function( newval ) {
            $( '.container, .geodir-common, .geodir-breadcrumb, .geodir_full_page .widget' ).css('margin-right', newval );
        } );
    } );

    wp.customize( 'dt_container_margin_left', function( value ) {
        value.bind( function( newval ) {
            $( '.container, .geodir-common, .geodir-breadcrumb, .geodir_full_page .widget' ).css('margin-left', newval );
        } );
    } );

    //  =============================
    //  = Logo                      =
    //  =============================

    wp.customize( 'dt_logo_margin_right', function( value ) {
        value.bind( function( newval ) {
            $( '.site-logo-wrap').find('.site-logo').css('margin-right', newval );
        } );
    } );

    wp.customize( 'dt_logo_margin_left', function( value ) {
        value.bind( function( newval ) {
            $( '.site-logo-wrap').find('.site-logo').css('margin-left', newval );
        } );
    } );

    wp.customize( 'dt_logo_margin_top', function( value ) {
        value.bind( function( newval ) {
            $( '.site-logo-wrap').find('.site-logo').css('margin-top', newval );
        } );
    } );

    wp.customize( 'dt_logo_margin_bottom', function( value ) {
        value.bind( function( newval ) {
            $( '.site-logo-wrap').find('.site-logo').css('margin-bottom', newval );
        } );
    } );

    //  =============================
    //  = Typography                =
    //  =============================

    wp.customize( 'dt_font_family', function( value ) {
        value.bind( function( newval ) {
            $( 'body' ).css('font-family', newval );
        } );
    } );

    wp.customize( 'dt_font_size', function( value ) {
        value.bind( function( newval ) {
            $( 'body' ).css('font-size', newval );
        } );
    } );

    wp.customize( 'dt_line_height', function( value ) {
        value.bind( function( newval ) {
            $( 'body' ).css('line-height', newval );
        } );
    } );

    //  =============================
    //  = Colors                    =
    //  =============================

    wp.customize( 'dt_background_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body' ).css('background-color', newval );
        } );
    } );

    wp.customize( 'dt_body_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body' ).css('color', newval );
        } );
    } );

    //  =============================
    //  = content box colors        =
    //  =============================

    wp.customize( 'dt_content_bg', function( value ) {
        value.bind( function( newval ) {
            $( '.content-box, .content .entry, #geodir_content, .sidebar .widget, .geodir-content-right .geodir-company_info, .geodir_full_page .geodir-category-list-in, .geodir_full_page .geodir-loc-bar' ).css('background-color', newval );
        } );
    } );

    wp.customize( 'dt_content_border', function( value ) {
        value.bind( function( newval ) {
            $( '.content-box, .content .entry, #geodir_content, .sidebar .widget, .geodir-content-right .geodir-company_info, .geodir_full_page .geodir-category-list-in, .geodir_full_page .geodir-loc-bar' ).css('border-color', newval );
        } );
    } );

    wp.customize( 'dt_content_shadow', function( value ) {
        value.bind( function( newval ) {
            $( '.content-box, .content .entry, #geodir_content, .sidebar .widget, .geodir-content-right .geodir-company_info, .geodir_full_page .geodir-category-list-in, .geodir_full_page .geodir-loc-bar' ).css('box-shadow', newval );
        } );
    } );

    //  =============================
    //  = h1 to h6                  =
    //  =============================

    wp.customize( 'dt_h1toh6_color', function( value ) {
        value.bind( function( newval ) {
            $( 'h1, .h1, h2, .h2, h3, .h3, h4, .h4, h5, .h5, h6, .h6' ).css('color', newval );
        } );
    } );

    //  =============================
    //  = Alerts                    =
    //  =============================

    wp.customize( 'dt_alert_yellow', function( value ) {
        value.bind( function( newval ) {
            $( '.alert-warning' ).css('background-color', newval );
        } );
    } );

    wp.customize( 'dt_alert_red', function( value ) {
        value.bind( function( newval ) {
            $( '.alert-error' ).css('background-color', newval );
        } );
    } );

    wp.customize( 'dt_alert_green', function( value ) {
        value.bind( function( newval ) {
            $( '.alert-success' ).css('background-color', newval );
        } );
    } );

    wp.customize( 'dt_alert_blue', function( value ) {
        value.bind( function( newval ) {
            $( '.alert-help' ).css('background-color', newval );
        } );
    } );


    //  =============================
    //  = Header                    =
    //  =============================

    wp.customize( 'dt_header_height', function( value ) {
        value.bind( function( newval ) {
            $( '.site-header' ).css('height', newval );
        } );
    } );

    wp.customize( 'dt_header_bg_color', function( value ) {
        value.bind( function( newval ) {
            $( '.site-header' ).css('background-color', newval );
        } );
    } );

    wp.customize( 'dt_header_link_color', function( value ) {
        value.bind( function( newval ) {
            $( '.site-header' ).css('color', newval );
        } );
    } );

    wp.customize( 'dt_header_text_color', function( value ) {
        value.bind( function( newval ) {
            $( '.site-header' ).css('color', newval );
        } );
    } );

    wp.customize( 'dt_header_link_hover', function( value ) {
        value.bind( function( newval ) {
            $( '.site-header' ).css('color', newval );
        } );
    } );

    wp.customize( 'dt_header_border_color', function( value ) {
        value.bind( function( newval ) {
            $( '.site-header' ).css('border-color', newval );
        } );
    } );

    wp.customize( 'dt_header_shadow_color', function( value ) {
        value.bind( function( newval ) {
            $( '.site-header' ).css('shadow-color', newval );
        } );
    } );

    //  =============================
    //  = Primary Nav               =
    //  =============================

    wp.customize( 'dt_p_nav_height', function( value ) {
        value.bind( function( newval ) {
            $( 'h1.site-title a' ).css('height', newval );
        } );
    } );

    wp.customize( 'dt_p_nav_line_height', function( value ) {
        value.bind( function( newval ) {
            $( 'h1.site-title a' ).css('line-height', newval );
        } );
    } );

    wp.customize( 'dt_p_nav_padding_left_right', function( value ) {
        value.bind( function( newval ) {
            $( 'h1.site-title a' ).css('padding-right', newval).css('padding-left', newval );
        } );
    } );

    //  =============================
    //  = Primary Nav Submenu       =
    //  =============================

    wp.customize( 'dt_p_nav_submenu_bg_color', function( value ) {
        value.bind( function( newval ) {
            $( 'h1.site-title a' ).css('background-color', newval );
        } );
    } );

    wp.customize( 'dt_p_nav_submenu_bg_hover', function( value ) {
        value.bind( function( newval ) {
            $( 'h1.site-title a' ).css('background-color', newval );
        } );
    } );

    //  =============================
    //  = Footer Widget             =
    //  =============================

    wp.customize( 'dt_fw_bg', function( value ) {
        value.bind( function( newval ) {
            $( 'h1.site-title a' ).css('background-color', newval );
        } );
    } );

    wp.customize( 'dt_fw_border_top_color', function( value ) {
        value.bind( function( newval ) {
            $( 'h1.site-title a' ).css('border-top-color', newval );
        } );
    } );

    wp.customize( 'dt_fw_border_bottom_color', function( value ) {
        value.bind( function( newval ) {
            $( 'h1.site-title a' ).css('border-bottom-color', newval );
        } );
    } );

    wp.customize( 'dt_fw_box_shadow_color', function( value ) {
        value.bind( function( newval ) {
            $( 'h1.site-title a' ).css('shadow-color', newval );
        } );
    } );

    //  =============================
    //  =     Copyright             =
    //  =============================

    wp.customize( 'dt_copyright_bg', function( value ) {
        value.bind( function( newval ) {
            $( '.copyright' ).css('background-color', newval );
        } );
    } );

    wp.customize( 'dt_copyright_padding_top', function( value ) {
        value.bind( function( newval ) {
            $( '.copyright .container' ).css('padding-top', newval );
        } );
    } );

    wp.customize( 'dt_copyright_padding_bottom', function( value ) {
        value.bind( function( newval ) {
            $( '.copyright .container' ).css('padding-bottom', newval );
        } );
    } );

    wp.customize( 'dt_copyright_border_color', function( value ) {
        value.bind( function( newval ) {
            $( '.copyright' ).css('border-top-color', newval );
        } );
    } );

    //  =============================
    //  =     Buttons               =
    //  =============================

    wp.customize( 'dt_btn_text_color', function( value ) {
        value.bind( function( newval ) {
            $( '.dt-btn, button, input[type=button], input[type=reset], input[type=submit], p.edit-link, .reply .gd_comment_replaylink #gd_comment_replaylink, #buddypress form#whats-new-form input[type=submit], #buddypress .standard-form div.submit input, #buddypress .comment-reply-link, #buddypress button, #buddypress div.generic-button a, #buddypress input[type=button], #buddypress input[type=reset], #buddypress input[type=submit], #buddypress ul.button-nav li a, #buddypress input[type=submit]#notification-bulk-manage' ).css('color', newval );
        } );
    } );

    wp.customize( 'dt_btn_bg_color', function( value ) {
        value.bind( function( newval ) {
            $( '.dt-btn, button, input[type=button], input[type=reset], input[type=submit], p.edit-link, .reply .gd_comment_replaylink #gd_comment_replaylink, #buddypress form#whats-new-form input[type=submit], #buddypress .standard-form div.submit input, #buddypress .comment-reply-link, #buddypress button, #buddypress div.generic-button a, #buddypress input[type=button], #buddypress input[type=reset], #buddypress input[type=submit], #buddypress ul.button-nav li a, #buddypress input[type=submit]#notification-bulk-manage' ).css('background-color', newval );
        } );
    } );

    wp.customize( 'dt_btn_hover_color', function( value ) {
        value.bind( function( newval ) {
            $( '.dt-btn, button, input[type=button], input[type=reset], input[type=submit], p.edit-link, .reply .gd_comment_replaylink #gd_comment_replaylink, #buddypress form#whats-new-form input[type=submit], #buddypress .standard-form div.submit input, #buddypress .comment-reply-link, #buddypress button, #buddypress div.generic-button a, #buddypress input[type=button], #buddypress input[type=reset], #buddypress input[type=submit], #buddypress ul.button-nav li a, #buddypress input[type=submit]#notification-bulk-manage' ).hover(function() {
                $(this).css('background-color', newval );
            });
        } );
    } );

    wp.customize( 'dt_btn_border_color', function( value ) {
        value.bind( function( newval ) {
            $( '.dt-btn, button, input[type=button], input[type=reset], input[type=submit], p.edit-link, .reply .gd_comment_replaylink #gd_comment_replaylink, #buddypress form#whats-new-form input[type=submit], #buddypress .standard-form div.submit input, #buddypress .comment-reply-link, #buddypress button, #buddypress div.generic-button a, #buddypress input[type=button], #buddypress input[type=reset], #buddypress input[type=submit], #buddypress ul.button-nav li a, #buddypress input[type=submit]#notification-bulk-manage' ).css('border-color', newval );
        } );
    } );

} )( jQuery );