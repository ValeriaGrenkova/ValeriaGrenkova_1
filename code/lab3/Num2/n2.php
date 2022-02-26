<?php

$text = $_POST["text"];
echo "Слов: " .str_word_count($text) . "<br>";
echo "Cимволов: " .strlen($text) . "<br>"; 