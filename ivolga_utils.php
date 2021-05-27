<?php 

function print_results($p_arr, $p_consecutive_pair_count_total)
{
   // Input array
   print 'Input array: [';
   $len = count($p_arr);

   if ($len)
      print "$p_arr[0]";

   for($i = 1; $i < $len; ++$i) {
      print ", $p_arr[$i]";

   }
   print "]\n";

   // Result
   print "Number of consecutive pairs with equal elements: $p_consecutive_pair_count_total\n";
}
