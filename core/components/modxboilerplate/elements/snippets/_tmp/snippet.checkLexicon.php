<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
    Updated for MODx Revo by: Hansek http://www.modxcms.cz/ hansek@coex.cz
    Created for MODx Evo by : Coroico (http://modx.wangba.fr)

    Short Description: Language files checking tool for MODx Revolution

    Version: 1.2

    Created by: Coroico (http://modx.wangba.fr)

  Description

    First parse the language file to detect any PHP parsing errors
    Checks the labels of one or several language files regarding the english file reference.
    Installer ou manager could be selected.
    For each language provides the list of labels in double, not translated and the list of useless labels.
     Works on local environment without MODx. To use simply place this file to the root of your local MODx environment
    and call it by: http://localhost/checkLexicon.php

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>MODx language files checking tool</title>
<meta name="keywords" content="MODx, CMS, language, check" />
<style type="text/css">
body {
    margin:0;
    padding:0;
  font:normal 12px 'Lucida Grande', Verdana, Geneva, Lucida, Arial, Helvetica, sans-serif;
    color:#5F5F5F;
}
h2 {
    margin:0;
    padding:0;
    color:#2582A4;
}
h1 { font-size: 32px; }
h2 { font-size: 26px; }
h3 { font-size: 20px; }
h4 { font-size: 16px; margin-bottom: 2px; }

p, span, ul, ol, blockquote {
    margin:5px 0 8px;
    padding:2px 0;
    text-align:justify;
    line-height:16px;
}
strong {
    font-weight: bold;
}
a {
    color: #800000;
    text-decoration: none;
}
a:hover {
    text-decoration: underline;
    color: #2582A4;
}
#header {
    width:700px;
    margin:30px auto;
}
#header h2{
    text-align:center;
}
#content {
    width:700px;
    margin:0 auto;
}

#area {
  width:700px;
    margin:20px auto;
}
#area label.title{
  display:block;
  margin:20px 0 5px 0;
  font-weight:bold;
}
#area .ctry-input{
  width:180px;
  margin:5px auto;
}
.next{
  display:block;
  width:80px;
    margin:20px auto;
}
.title{
  color:blue;
}
.subtitle{
  margin:20px 0 0 0;
}
.passed{
  color:green;
  margin-top:0;
}
.failed{
  color:red;
  margin-top:0;
}
.selectall, .unselectall{
  margin:0 20px 0 0;
  font-weight:bold;
}
#nav{
  width:220px;
  margin:30px auto;
}
.top, .start{
  margin:0 20px;
  font-weight:bold;
}
</style>
<script type="text/javascript">
function selectall(sel){
    var inpList = document.getElementsByTagName('input');
    for (var i=0; i<inpList.length; i++){
        if ( inpList[i].getAttribute('type') == 'checkbox'){
            if (sel) inpList[i].checked = true;
            else inpList[i].checked = false;
        }
    }
}

function showhide(id){
    if (document.getElementById){
        obj = document.getElementById(id);

        if (obj.style.display == "none"){
            obj.style.display = "";
        }
        else {
            obj.style.display = "none";
        }
    }
}

</script>
</head>
<body>
<a name="top"></a>
<div id="header">
<h2>Language files checking tool for MODx Revolution</h2>
</div>
<div id="content">
<?php

if (isset($_POST['languageList'])){

//====================================== Page 3 ================================

// display the results for the selected language

    $languageList = array();      // List of available languages
    $selectedLanguage = array();  // List of selected languages

    $languageList = explode(',',$_POST['languageList']);
    for($i=0;$i<count($languageList);$i++){
      $lng = "lang" . $i;
      if (isset($_POST[$lng])) $selectedLanguage[] = $_POST[$lng];
    }

    $path = stripslashes($_POST['path']);     // path to root of Modx
    $part = $_POST['part'];                   // manager or installer

    if (count($selectedLanguage) > 0) {

        if ($part == "setup") {
            $englishDirName = $path . "setup/lang/en";  // english dir reference
            $lexiconDir = "setup/lang/";
        }
        else {
            $englishDirName = $path . "core/lexicon/en";  // english dir reference
            $lexiconDir = $path . "core/lexicon/";
        }

        foreach($selectedLanguage as $lang){
            $global_error = false;

            if ($handle = opendir($englishDirName)) {

                echo "<div class='country' id='".$lang."'>\n";
                print '<a href="#nav">Go to bottom</a>';
                echo '<h3 class="title">Checking '.$lang.'</h3>'."\n";

                while (false !== ($file = readdir($handle))) {

                    if(in_array($file, array('.', '..', '.svn'))) continue;

                    echo "<h4 class='title' id='$file'>File ".$file."</h4>\n";
                    echo '<a href="#'.$file.'" onclick="return showhide(\'file_'.$file.'\')">Show/hide detail</a>';
                    print '<div id="file_'.$file.'" style="display: none; background: #F0F0F0; padding: 10px;">';

                    $englishFileName = $englishDirName . "/" . $file;  // name of file to check               }

                    // first include the language file to check that the file could be correctly parsed by Php
                    $_lang = array();
                    include($englishFileName);

                    // include the english labels - set up the $_lang array
                    unset($_lang);
                    include($englishFileName);

                    $langageFileName = $lexiconDir . $lang . "/" . $file;

                    // check if topic exists in target language
                    if(!file_exists($langageFileName)) {
                        print 'ERROR:: File topic "'.$langageFileName.'" not exist in selected language.</div>';
                        continue;
                    }

                   // read the new langage file
                    $fd = fopen($langageFileName, "r");

                    $_newlang = array();

                    echo "<p><strong>Language file analysed: </strong>&nbsp;&nbsp;&nbsp;" . $langageFileName . "</p>\n";
                    echo "<p><strong>English reference file analysed: </strong>&nbsp;&nbsp;&nbsp;" . $englishFileName . "</p>\n";

                    $error = false;

                    $double = false;
                    //labels in double ?
                    echo "<p class='subtitle'><strong>Labels in double ? ... </strong></p>\n";
                    // analyse the line - but don't search the ; at the end of line
                    $pattern = '#^\$_lang\[["\']([\w\.-]+)["\']\]\s*=\s*["\'](.*)#';
                    while(!feof ($fd)) {
                        $line_source = fgets($fd); // read the line
                        preg_match($pattern,$line_source,$matches);
                        if (isset($matches[2])) {
                            // check that this key has not be already used !
                            if (array_key_exists($matches[1],$_newlang)) {
                                echo "<p class='failed'>Label <strong>".$matches[1]."</strong> defined twice!</p>\n";
                                $double = true;
                                $error = true;
                            }
                            else $_newlang[$matches[1]] = $matches[2];
                        }
                    }
                    fclose($fd);

                     if ($double) echo("<p class='failed'>You shoud remove labels in double from your file {$langageFileName} before to continue.</p>\n");
                    else echo "<p class='passed'><strong>No. Great!</strong></p>\n";

                    $enKeys = array_keys($_lang);
                    $nbEnKeys = count($enKeys);
                    $newKeys = array_keys($_newlang);
                    $nbNewKeys = count($newKeys);

                   // same number of labels ?
                    echo "<p class='subtitle'><strong>Same number of labels ? ... </strong></p>\n";
                    if ($nbEnKeys != $nbNewKeys) {
                        $error = true;
                      echo "<p class='failed'><strong>Total number of labels are different!</strong><br /> - english labels:{$nbEnKeys} <br /> - new language file:{$nbNewKeys}</p>\n";
                    }
                    else echo "<p class='passed'><strong>Yes. Great!</strong></p>\n";

                    // are english labels all translated ?
                    $notTranslated = array_diff($enKeys,$newKeys);
                    echo "<p class='subtitle'><strong>Are english labels all translated ? ... </strong></p>\n";
                    if (count($notTranslated)) {
                        echo "<p class='failed'><strong>These labels have not been translated: </strong><br />\n";
                        foreach($notTranslated as $key => $value)
                            echo " - ".$value."<br />\n";
                        echo "</p>\n";

                        $error = true;
                    }
                    else echo "<p class='passed'><strong>Yes. Great! </strong></p>\n";

                    // existing labels not referenced in the english file ?
                    $useless = array_diff($newKeys,$enKeys);
                    echo "<p class='subtitle'><strong>Useless labels ? ...</strong></p>\n";
                    if (count($useless)) {
                        echo "<p class='failed'><strong>These labels are useless: </strong><br />\n";
                        foreach($useless as $key => $value) echo " - ".$value."<br />\n";
                        echo "</p>\n";

                        $error = true;
                    }
                    else echo "<p class='passed'><strong>Ok</strong></p>\n";

                    print '</div>';

                    if($error) {
                        print ' <a href="#'.$file.'" onclick="return showhide(\'file_'.$file.'\')"><span style="color: RED; font-weight: bold;"> << ERROR (click for more information)</span></a>';
                        $global_error = true;
                    }
                    else {
                        print ' <span style="color: green; font-weight: bold;">Lexicon is OK</span>';
                    }
                }


                if($global_error) {
                    print '<p style="font-size: 2em; color: red; font-weight: bold; margin-top: 25px; text-align: center; background: #FFCC99; padding: 20px 0;">There are problems in language</p>';
                }
                else {
                    print '<p style="font-size: 2em; color: green; font-weight: bold; margin-top: 25px; text-align: center; background: #CCFF99; padding: 20px 0;">LANGUAGE IS CORRECT</p>';
                }

                echo "</div>\n";

            }
            else {
                echo 'No languages selected !';
            }
            echo "<div id='nav'>\n<a class='top' href='#top'>Go to Top</a>\n";
            echo "<a class='start' href=''>Start page</a>\n</div>\n";
        }
    }
}

//====================================== Page 2 ================================

else if (isset($_POST['part'])){
// page #2 : display of available languages - choice of language

    $langs = array();
    $part = $_POST['part'];
    $path = stripslashes($_POST['path']);
    if (substr($path,strlen($path),1) != '/') $path = $path.'/';

    if ($_POST['part'] == "setup"){
        $dirlang = $path . "setup/lang/";
        if ($handle = opendir($dirlang)) {
            while (false !== ($file = readdir($handle))) {
                if (!in_array($file, array('.', '..', '.svn', 'en'))) {
                     //if (is_dir($dirlang.$file) && ($file != "english"))
                    if (is_dir($dirlang.$file))
                        $langs[] = $file;
                }
            }
        }
    }
    else {
        $dirlang = $path . "core/lexicon/";
        if ($handle = opendir($dirlang)) {
             while (false !== ($file = readdir($handle))) {
                  if (!in_array($file, array('.', '..', '.svn', 'en', 'country', 'index.html')))
                  // $langs[] = ereg_replace("\.inc\.php$","",$file);
                  $langs[] = $file;
             }
        }
    }
    closedir($handle);
    if (count($langs) >0) $languageList = implode(",",$langs);
    sort($langs);
?>
<form name="area" action="checkLexicon.php" method="post">
  <input type="hidden" value="<?php echo $part?>" name="part" />
  <input type="hidden" value="<?php echo $path?>" name="path" />
  <input type="hidden" value="<?php echo $languageList?>" name="languageList" />
  <div id="area">
    <label class="title">Select which MODx language file from <span class="title"><?php echo $part; ?></span> you would like check:</label>
    <?php
    $i=0;
    foreach ($langs as $language) {
        echo '<div class="ctry-input"><input type="checkbox" name="lang'.$i.'" value="'.$language.'" id="'.$i.'"><label for="'.$i.'"><span class="ctry-name">'.$language."</span></label></div>\n\r";
        $i++;
    }
    ?>
  </div>
  <?php if (count($langs) >1) echo '<div id="nav"><a class="selectall" href="#" onClick="selectall(1);">Select all</a><a class="unselectall" href="#" onClick="selectall(0);">Unselect all</a></div>'; ?>
    <input class="next" type="submit" value="Next"/>
</form>
<?php
    echo "<div>\n<a class='start' href=''>Start page</a>\n</div>\n";
}

//====================================== Page 1 ================================

else {
    // page #1 : installer or manager - get the root path

    // default directory
    $default_path = strtr(dirname(__File__),"\\","/");

?>
<form name="area" action="checkLexicon.php" method="post">
  <div id="area">
    <label for="area" class="title">Select which MODx language files area you would like check:</label>
    <input type="radio" name="part" value="core" id="core"> <label for="core">Core</label><br />
    <input type="radio" name="part" value="setup" id="setup" checked="checked"> <label for="setup">Setup</label><br />
    <label for="path">Set the path to the root of MODx directory:</label>
    <input type="text" name="path" size="78" value="<?php echo $default_path; ?>"/>
  </div>
    <input class="next" type="submit" value="Next"/>
</form>
<?php
}
?>
</div>
</body>
</html>
