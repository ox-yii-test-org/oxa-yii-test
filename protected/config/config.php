<?php

return CMap::mergeArray(
    require(dirname(__FILE__) . '/main.php'),
    include(dirname(__FILE__) . '/local_config.php')
);
