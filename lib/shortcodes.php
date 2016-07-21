<?php
function dt_responsive_videos($atts, $content) {
    return '<div class="dt-video-wrapper">'.$content.'</div>';
}
add_shortcode('rvideo', 'dt_responsive_videos');