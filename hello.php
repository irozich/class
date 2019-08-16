<?php

#Author - Vijay Nagarajan PhD
#print a string
print "Hello Isaiah\n";

#variable
$DNA = 'ACGGGAGGACGGGGGGGGGGGGGGGGGGGAAAATTACTACGGCATTAGC';
print $DNA."\n";

#string concatenation
$DNA2 = 'ATAGTGCCGTGAGAGTGATGTAGTA';
print "Here are the original two DNA fragments:\n\n";
print $DNA."\n";
print $DNA2."\n\n";
$DNA3 = "$DNA$DNA2";
print "Here is the concatenation of the first two fragments (version 1):\n\n";
print $DNA3."\n";

#Transcribe DNA to RNA
$RNA = $DNA3;
$RNA = str_replace("T","U",$RNA);
print "Here is the result of transcribing the DNA to RNA:\n\n";
print "$RNA\n";

?> #every PHP command has to end with ?> and every line has to end with ;


