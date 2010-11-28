<?php
$modx->getService('lexicon','modLexicon');
$modx->lexicon->load('modxboilerplate:default');
$o = '<h2>Welcome to '. $modx->lexicon('mbp.name') .'</h2>';
$o .= '<p>'. $modx->lexicon('mbp.desc') .'</p>';

return $o;