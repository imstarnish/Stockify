<?php 
include("config.php");
$xml=new DOMDocument("1.0");
$xml->formatOutput=True;



$sql = "SELECT * FROM newsletterSubscribers";
$result = mysqli_query($db,$sql);
$Subscribers=$xml->createElement("Subscribers");
$xml->appendChild($Subscribers);
$n=mysqli_num_rows($result);
while($row= mysqli_fetch_assoc($result))
{
        
		$s=$xml->createElement("s");
		$Subscribers->appendChild($s);
		$id=$xml->createElement("id",$row['id']);
		$s->appendChild($id);
		$email=$xml->createElement("email_id",$row['email_id']);
		$s->appendChild($email);
}
//echo "<xmp>".$xml->saveXML()."</xmp>";
$xml->save('subs.xml');
$xml->load('subs.xml');
$xsl = new DOMDocument;
$xsl->load('subs.xsl');
echo "xml file created";
//$attach = new XSLTProcessor();
//$attach->importStyleSheet($xsl); 
//echo $attach->transformToDoc($xml)->saveXML();
?>
