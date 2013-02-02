<<<<<<< HEAD
<?php 
=======
<?
>>>>>>> af2fff1... version1

$message = str_replace("&quot;", "", $message);

require_once 'bbcode/stringparser_bbcode.class.php';






function do_bbcode_url ($action, $attributes, $content, $params, $node_object) {
    if ($action == 'validate') {
        return true;
    }
    if (!isset ($attributes['default'])) {
        return '<A target=_blank href="'.htmlspecialchars ($content).'">'.htmlspecialchars ($content).'</A>';
    }
    return '<A target=_blank href="'.htmlspecialchars ($attributes['default']).'">'.$content.'</A>';
}




function do_bbcode_color ($action, $attributes, $content, $params, $node_object) {
    if ($action == 'validate') {
        return true;
    }
    if (!isset ($attributes['default'])) {
        return '<FONT COLOR="'.htmlspecialchars ($content).'">'.htmlspecialchars ($content).'</FONT>';
    }
    return '<FONT COLOR="'.htmlspecialchars ($attributes['default']).'">'.$content.'</FONT>';
}

// Funktion zum Einbinden von Bildern
function do_bbcode_img ($action, $attributes, $content, $params, $node_object) {
    if ($action == 'validate') {
        return true;
    }


$size2 = getimagesize($content);

$widthimg=$size2[0];

if($widthimg > 500) {  return 'Bilddatei zu groﬂ!! (max. 500px Breite erlaubt)';   } 

else {

    return '<IMG src="'.htmlspecialchars($content).'" alt="">';

}
}

$bbcode = new StringParser_BBCode();
$bbcode->addFilter (STRINGPARSER_FILTER_PRE, 'convertlinebreaks');

$bbcode->addParser (array ('block', 'inline', 'link', 'listitem'), 'htmlspecialchars');
$bbcode->addParser (array ('block', 'inline', 'link', 'listitem'), 'nl2br');
$bbcode->addParser ('list', 'bbcode_stripcontents');

$bbcode->addCode ('B', 'simple_replace', null, array ('start_tag' => '<B>', 'end_tag' => '</B>'),
                  'inline', array ('listitem', 'block', 'inline', 'link'), array ());
$bbcode->addCode ('I', 'simple_replace', null, array ('start_tag' => '<I>', 'end_tag' => '</I>'),
                  'inline', array ('listitem', 'block', 'inline', 'link'), array ());
$bbcode->addCode ('U', 'simple_replace', null, array ('start_tag' => '<U>', 'end_tag' => '</U>'),
                  'inline', array ('listitem', 'block', 'inline', 'link'), array ());
$bbcode->addCode ('CENTER', 'simple_replace', null, array ('start_tag' => '<CENTER>', 'end_tag' => '</CENTER>'),
                  'inline', array ('listitem', 'block', 'inline', 'link'), array ());


$bbcode->addCode ('http://', 'usecontent?', 'do_bbcode_url', array ('usecontent_param' => 'default'),
                  'link', array ('listitem', 'block', 'inline'), array ('link'));
$bbcode->addCode ('link', 'callback_replace_single', 'do_bbcode_url', array (),
                  'link', array ('listitem', 'block', 'inline'), array ('link'));


$bbcode->addCode ('SIZE', 'usecontent?', 'do_bbcode_size', array ('usecontent_param' => 'default'),
                  'link', array ('listitem', 'block', 'inline'), array ('link'));
$bbcode->addCode ('link', 'callback_replace_single', 'do_bbcode_size', array (),
                  'link', array ('listitem', 'block', 'inline'), array ('link'));



$bbcode->addCode ('COLOR', 'usecontent?', 'do_bbcode_color', array ('usecontent_param' => 'default'),
                  'link', array ('listitem', 'block', 'inline'), array ('link'));
$bbcode->addCode ('link', 'callback_replace_single', 'do_bbcode_color', array (),
                  'link', array ('listitem', 'block', 'inline'), array ('link'));


$bbcode->addCode ('IMG', 'usecontent', 'do_bbcode_img', array (),
                  'image', array ('listitem', 'block', 'inline', 'link'), array ());
$bbcode->addCode ('bild', 'usecontent', 'do_bbcode_img', array (),
                  'image', array ('listitem', 'block', 'inline', 'link'), array ());
$bbcode->setOccurrenceType ('img', 'image');
$bbcode->setOccurrenceType ('bild', 'image');
$bbcode->setMaxOccurrences ('image', 2);
$bbcode->setCodeFlag ('*', 'closetag', BBCODE_CLOSETAG_OPTIONAL);
$bbcode->setCodeFlag ('*', 'paragraphs', true);

$bbcode->setRootParagraphHandling (true);

$text_sbn = $bbcode->parse ($message);

