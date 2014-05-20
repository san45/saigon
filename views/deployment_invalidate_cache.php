<?php
//
// Copyright (c) 2013, Zynga Inc.
// https://github.com/zynga/saigon
// Author: Matt West (https://github.com/mhwest13)
// License: BSD 2-Clause
//

require HTML_HEADER;
?>
<body>
<div id="encapsulate" style="position:absolute;top:5;left:5;width:98%;">
    <div class="divCacGroup admin_box admin_box_blue admin_border_black">
        <div class="divCacSubResponse">
            Deployment Varnish Cache was successfully flushed for <?php echo $viewData->deployment?>...
        </div>
    </div>
</div>

<?php

require HTML_FOOTER;

