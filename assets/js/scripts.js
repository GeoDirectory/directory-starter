jQuery(document).ready(function() {
    jQuery('.dt-nav-toggle').click(function(){
        var selector = jQuery(this).data('target');
        var button = jQuery(this);
        jQuery(selector).toggle(function(){
            if(jQuery(this).css('display')=='none'){
                button.removeClass('active');
            }else{
                button.addClass('active');
            }
        });
    });
});