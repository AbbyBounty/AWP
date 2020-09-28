
<?php

$contacts = array(
    "4567"=>array("fname"=>"abby",
                        "lname"=>"steven",
                        "emailid"=>"abby@gmail.com"),
    "334566"=>array("fname"=>"will",
                        "lname"=>"smith",
                        "emailid"=>"will@gmail.com")
);
   $flag=false;
   if (!empty($_REQUEST['number'])) {
       foreach ($contacts as $ctno=>$contact) {
           if (strcmp($ctno, $_REQUEST['number'])==0) {
               $flag = true;
               echo "First Name : ".$contacts[$ctno]["fname"]."<br/>";
               echo "Last Name : ".$contacts[$ctno]["lname"]."<br/>";
               echo "Email : ".$contacts[$ctno]["emailid"]."<br/>";
           }
       }
       if ($flag == false) {
           echo("<br/>Contact not found");
       }
   }

?>
