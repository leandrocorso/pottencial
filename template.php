<?php

function pottencial_preprocess_page(&$variables) {
    $main_menu_tree = menu_tree_all_data('main-menu');
    $variables['main_menu'] = menu_tree_output($main_menu_tree);
}