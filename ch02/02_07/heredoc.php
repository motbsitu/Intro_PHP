<?php

$title = "The Hitchhiker's Guide to the Galaxy";
$author = 'Douglas Adams';
$android = 'Marvin';
$brain_size = 'the size of a planet';

//name of var     EOT can be any name.  No spaces or text after
$heredoc = <<< EOT
In "$title" by $author, $android the "paranoid android" complains that he's asked to do menial tasks, even though he's got "a brain $brain_size."
EOT;
//no spaces before or after EOT or whatever name/identifier

echo $heredoc;
