<?php



      $text = $_POST['text'];

      $words = $text;

      print_r( array_count_values(str_word_count($text, 1)) );















?>
