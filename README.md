# test-assignment-ivolga02-arrays-are-fun
01 The problem
==============

4. Массивы
Дан массив из 100 элементов. Требуется вывести количество последовательных пар одинаковых элементов 
Например: 1, 1, 2, 3, 4 -51, 12, 12, 12, -51
Пришлите ссылку на репозиторий с решением

02 Files
========
index.php
ivolga_utils.php
sample_output.txt

Hope their names are pretty self-documented.

03 How to run
=============
>php index.php
Input array: [1, 1, 2, 3, 4, -51, 12, 12, 12, -51]
Number of consecutive pairs with equal elements: 1

04 The algorithm
================
Well it is a little bit mind-twisted problem. So here are what I thought out. 

Given: [1, 1, 2, 3, 4 -51, 12, 12, 12, -51]

1) We should look for _pairs_ of equal elements. They are 
(1,1) (12,12) (12,12)

2) We sholud consider only _consecutive_ pairs of elements. Consequently the last (12,12) is a pair we are looking for. The output should be 1.

3) To achieve this let's find out all the chains with equal numbers. The next step is to decrease the chain length by 2 and get the total amount of 'lengths'. That is it. The algorithm complexity is O(n) AFAIK. 

04.1 Corner cases
=================
>php index.php
Input array: [1, 2, 2, 3, 4, 4, 5, 5, 5, 5]
Number of consecutive pairs with equal elements: 2

You should consider the end of an array as the of a chain.



Enjoy!
