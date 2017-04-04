<?php
return array(
	//'配置项'=>'配置值'
    'SHOW_PAGE_TRACE' => true,      //  DEBUG MODE turned on, REMEMBER TO TURN OFF BEFORE DEPLOYING.
    
    // Group settings
    //'APP_GROUP_LIST' => 'Home,Admin',
    //'DEFAULT_GROUP'  => 'Admin',
    'PAGESIZE'       =>  15,     //配置每页显示数据个数

    'URL_CASE_INSENSITIVE' => true,
    'URL_HTML_SUFFIX' => 'html|shtml',

    // Router settings
    //'URL_ROUTER_ON' => true,
    //'URL_ROUTE_RULES' => array(
    //    '/^([a-zA-Z0-9/_]*)$/' => 'Home/Index/direct?target=:1',
    //    ),

    // Template settings
    'TMPL_L_DELIM' => '<{',
    'TMPL_R_DELIM' => '}>',

    // Database settings
    'DB_TYPE' => 'mysql',
    'DB_HOST' => 'localhost',
    'DB_NAME' => 'cyyjy',
    'DB_USER' => 'cyyjy',
    'DB_PWD' => 'vye1492.',
    'DB_PORT' => 3306,
    'DB_PREFIX' => '',     // prefix of the schemas in the database
);
?>
