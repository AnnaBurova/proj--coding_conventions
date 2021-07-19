<?php

/**
 * Write at end of existing file
 * @param string $file (req)
 * @param string $text (req)
 * @return boolean */
function file_fwrite_a($file, $text) {

  $fopen = fopen($file, 'a');

  if ($fopen !== false) {

    $text = $text."\n";

    fwrite($fopen, $text);
    fclose($fopen);

    return true;
  }

  return false;
}
