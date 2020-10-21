<?php 



require_once TEMPLATEPATH .'/inc/customizer/prizrak-customizer.php';
new Prizrak_Customizer();

require_once TEMPLATEPATH .'/inc/prizrak-sidebar.php';
new Prizrak_Sidebar();


// templates settings and functions themes
require_once TEMPLATEPATH .'/inc/prizrak-template.php';



require_once TEMPLATEPATH .'/inc/prizrak-header.php';
new Prizrak_Header();

require_once TEMPLATEPATH .'/inc/prizrak-footer.php';
new Prizrak_Footer();



?>