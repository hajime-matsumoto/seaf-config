<?php
/**
 * Seaf Auto Load
 */
Seaf\Core\Loader\AutoLoader::init()->addNamespace(
    'Seaf\\Component\\Config',
    null,
    dirname(__FILE__).'/Config'
);
