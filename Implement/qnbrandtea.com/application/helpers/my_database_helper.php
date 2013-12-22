<?php

/*
 * This file is create for storing name of table, and field.
 * 
 */

if (!function_exists('table')) {

    function table($key) {
        // Tables' name
        $table['user'] = 'users';
        $table['product'] = 'products';
        $table['usergroup'] = 'usergroup';
        $table['content'] = 'contents';
        $table['menu'] = 'menus';
        $table['group'] = 'groups';
        $table['cagetory'] = 'categories';
        $table['language'] = 'languages';

        if (array_key_exists($key, $table)) {
            return $table[$key];
        } else {
            return NULL;
        }
    }
}

if (!function_exists('field')) {

    function field($key) {
        // Fields' name
        $field['useId'] = 'use_id';
        $field['useName'] = 'use_name';
        $field['usePassword'] = 'use_password';
        $field['useDateCreate'] = 'use_date_create';

        $field['usgId'] = 'usg_id';
        $field['usgName'] = 'usg_name';
        $field['usgDes'] = 'usg_description';

        $field['proId'] = 'pro_id';
        $field['proName'] = 'pro_name';
        $field['proPrice'] = 'pro_price';
        $field['proQty'] = 'pro_qty';
        $field['proField'] = 'pro_fields';

        $field['menId'] = 'men_id';
        $field['menName'] = 'men_name';
        $field['menOrder'] = 'men_order';

        $field['langId'] = 'lang_id';
        $field['langName'] = 'lang_name';
        $field['lanDes'] = 'lang_description';

        $field['groId'] = 'gro_id';
        $field['groName'] = 'gro_name';
        $field['groDes'] = 'gro_description';

        $field['conId'] = 'cont_id';
        $field['conName'] = 'cont_name';
        $field['conDes'] = 'cont_description';

        $field['catId'] = 'cate_id';
        $field['catName'] = 'cate_name';
        $field['catDes'] = 'cate_description';
        $field['catField'] = 'cate_fields';

        if (array_key_exists($key, $field)) {
            return $field[$key];
        } else {
            return NULL;
        }
    }

}