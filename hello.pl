#!C:\xampp\perl\bin\perl.exe
print "Content-type: text/html\n\n";
print  "ajay<br>";
$age=19;
$name="ajay<br>";
$id=02;
print "ID = $id\n<br>";
print "NAME = $name\n<br>";
print "AGE = $age\n<br><br><br>";
$st="Say"."perl<br>";
$n=5+10;
$m=4*5;
$join = $st.$n;
print "String = $st\n<br>";
print "N = $n\n<br>";
print "M = $m\n<br>";
print "join = $join\n<br>";
$string='This ia a perl program';
print "$string\n<br><br>";
print "PAckage<br><br>";
$i = 1; 
print "Package name : " , __PACKAGE__ , " $i\n<br>"; 
package ajay;
$i = 10; 
print "Package name : " , __PACKAGE__ , " $i\n<br>"; 

package main;
$i = 100; 
print "Package name : " , __PACKAGE__ , " $i\n<br>"; 
print "Package name : " , __PACKAGE__ ,  " $ajay::i\n<br><br>"; 
1;

print "Arrays<br>";
@id = (1, 2, 3);             
@names = ("Ajay", "Arun", "bharath");
print "\$id[0] = $id[0]\n<br>";
print "\$id[1] = $id[1]\n<br>";
print "\$id[2] = $id[2]\n<br>";
print "\$names[0] = $names[0]\n<br>";
print "\$names[1] = $names[1]\n<br>";
print "\$names[2] = $names[2]\n<br>";
print"Conditions<br>";
print "What is your age?<br> ";
my $age = 19;
print "$age<br>";
if ($age >= 18) {
    print "You are eligible for vote\n";
} else {
    print "You are not eligible for vote\n";
}


