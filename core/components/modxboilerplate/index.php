<?php
$modx->getService('lexicon','modLexicon');
$modx->lexicon->load('modxboilerplate:default');
$o = '<h2>Welcome to '. $modx->lexicon('mbp.modxboilerplate') .'</h2>';
$o .= '<p>'. $modx->lexicon('mbp.modxboilerplate_desc') .'</p>';

return $o;