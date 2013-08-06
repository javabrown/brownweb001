#!/usr/bin/perl -w

$num_args = $#ARGV + 1;
if ($num_args != 2) {
  print "\nUsage: action.pl handler_name handler_feed\n";
  exit;
}

$handler_name=$ARGV[0];
$handler_feed=$ARGV[1];

if($handler_name eq('read')){
  #print "reading file ".$handler_feed;
  readFile($handler_feed);
}

sub readFile
{
   $data_file= $_[0];
   open(DAT, $data_file) || die("Could not open file!");
   @raw_data=<DAT>;
   close(DAT); 
   
   foreach $line (@raw_data){
     chomp($line);
	 print $line;
   }
}