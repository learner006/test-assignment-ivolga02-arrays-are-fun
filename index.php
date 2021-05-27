<?php
   // with namespaces in mind! ;-)
   require_once('ivolga_utils.php');

   $arr = array(1, 1, 2, 3, 4, -51, 12, 12, 12, -51);
   $arr = array(1, 2, 2, 3, 4, 4, 5, 5, 5, 5);
   $arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
   $arr = array(-2);
   $arr = array();

   
   $consecutive_pair_count_total = 0;
   if (!count($arr)) {
      print_results($arr,$consecutive_pair_count_total);
      die;
   }

   // Let's find out all the chains with equal elements! :-)
   $curr_chain_len = 1;
   $prev = $arr[0];

   for($i = 1; $i < count($arr); ++$i) {
      if ($arr[$i] == $prev)
         $curr_chain_len++;

      if ( $arr[$i] != $prev || $i + 1 == count($arr) ) {
         // a chain of equal elements is finished!
         $consecutive_pair_count = $curr_chain_len - 2;
         if ($consecutive_pair_count > 0)
            $consecutive_pair_count_total += $consecutive_pair_count;
            $curr_chain_len = 1;
      }

      $prev = $arr[$i];
   }

   // Let's output the results! :-)
   print_results($arr,$consecutive_pair_count_total);
