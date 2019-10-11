===========================emp.xml=================
<?xml version="1.0" encoding="UTF-8"?>

<CDAC>
    <EMP EMPID="1">
        <NAME>ASHISH</NAME>
        <MOBILE>75646</MOBILE>
    </EMP>
     <EMP EMPID="2">
        <NAME>Amit</NAME>
        <MOBILE>75622</MOBILE>
    </EMP>
    <EMP EMPID="3">
        <NAME>Nilesh</NAME>
        <MOBILE>75632</MOBILE>
    </EMP>
    
</CDAC>
==========================xml.php====================
<?php
$xml =simplexml_load_file("emp.xml");//this function is used to load xml file//this will load xml as an object
print_r($xml);

==================emp.dtd=====================
<?xml version="1.0" encoding="UTF-8"?>
<!ELEMENT NAME (#PCDATA)>
<!ELEMENT MOBILE (#PCDATA)>
<!ELEMENT EMP (NAME,MOBILE+)>
<!ELEMENT CDAC (EMP)+>
<!ENTITY designation "Engineer">
<!ATTLIST EMP EMPID CDATA #REQUIRED>
