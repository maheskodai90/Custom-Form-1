<?PHP
 ob_start();
session_start();
if($_REQUEST['txt_st'] == "")
{

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$emailid = $_POST['emailid'];
$phoneno = $_POST['phoneno'];
$mobileno = $_POST['mobileno'];
$companyname = $_POST['companyname'];
$experiencein =$_POST['experiencein'];
$businessyear =$_POST['businessyear'];
$tractorbrands =$_POST['tractorbrands'];
$howyears =$_POST['howyears'];
$address =$_POST['address'];
$city =$_POST['city'];
$state =$_POST['state'];
$country =$_POST['country'];
$pincode =$_POST['pincode'];
$terrlocation =$_POST['terrlocation'];
$othercomment =$_POST['othercomment'];


								
							$adminEmail =	$to	  = "umesh.bg@kubota.com";
								//$cc	  = "john@niyati.com";
								
								$from = 'noreply@kubota.co.in';
								$sub  = "Kubota Agricultural Machinery India ";
								$headers = "From: $from \r\n";
								//$headers .= "CC: $cc \r\n";
								$headers .= "MIME-Version: 1.0" . "\r\n";
								$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";	
								 ?>	
									
						<?PHP  
                                  include("admin-mailers.php");
										$message = ob_get_contents();
									ob_end_flush();	?>
						<?PHP 
								$ok = mail($to,$sub,$message,$headers);	
                                if($ok)
                                {
                                $_SESSION['msg'] ='success';
                                }
                                else
                                {
                                  $_SESSION['msg'] ='error';    
                                }
                                ?>


                                

<?PHP




								
								$to	  = $emailid;
								//$cc	  = "ramesh@niyati.com";
								
								$from = 'noreply@kubota.co.in';
								$sub  = "Kubota Agricultural Machinery India ";
								$headers = "From: $from \r\n";
								//$headers .= "CC: $cc \r\n";
								$headers .= "MIME-Version: 1.0" . "\r\n";
								$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";	
								 ?>	
									
						<?PHP  
                                  include("thankyou-mailers.php");
										$message = ob_get_contents();
									ob_end_flush();	?>
						<?PHP 
								$ok = mail($to,$sub,$message,$headers);	
                                if($ok)
                                {
                                $_SESSION['msg'] ='success';
                                }
                                else
                                {
                                  $_SESSION['msg'] ='error';    
                                }
                                ?>


                                
<?php } ?>
