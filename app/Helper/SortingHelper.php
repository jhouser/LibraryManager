<?php

namespace App\Helper;

class SortingHelper {
    
    /**
     * Generates a sorting url to use for sorting data on an index page
     * @param string $field Name of the field to sort on
     * @return string URL to be inserted into an href attribute
     */
    public static function getSortingLink($field) {
        $params = app('request')->input();
        $params['sortKey'] = $field;
        $params['direction'] = (!empty($params['direction']) && $params['direction'] == 'asc') ? 'desc' : 'asc';
        
        return route(\Route::currentRouteName(), $params);
    }
}
