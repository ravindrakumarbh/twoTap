<?php
$url = "http://www.smsbusiness.in/nxm/api/pushsms.php";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'username=prakashtrans&password=Prakash123&to=8867467440&message=testmessage');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);
echo $result;
echo "Meassage sent";

$url = "http://www.smsbusiness.in/nxm/api/pushsms.php?usr=prakashtrans&pwd=Prakash123&sndr=ALERTS&mobile=8867467440&text=message&rpt=1 ";
$send_sms = file_get_contents($url);
//echo $url;

$username = urlencode('prakashtrans');
	$hash = urlencode('Prakash123'); // Get this when logged in at https://control.txtlocal.co.uk/docs/
	
	// Message details
	$numbers = urlencode(8867467440);
	$sender = urlencode('Textlocal');
	$message = rawurlencode('This is your message');
 
	// Prepare data for POST request
	$data = 'username=' . $username . '&hash=' . $hash 
	  . '&numbers=' . $numbers . "&sender=" . $sender . "&message=" . $message;
 
	// Send the GET request with cURL
	$ch = curl_init('http://www.smsbusiness.in/nxm/api/pushsms.php?' . $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	curl_close($ch);
	
	// Process your response here
	echo $response;
?>


<?php
//$lastOrder = Mage::getModel('sales/order')->load(Mage::getSingleton('checkout/session')->getLastOrderId());
//$billingAddress = $lastOrder->getBillingAddress();
//$shippingAddress = $lastOrder->getShippingAddress();
//$order = Mage::getModel('sales/order')->loadByIncrementId($this->getOrderId());
$message = 'Welocme to fng';
$to = '8867467440';
$profile_id = 'prakashtrans';
$password = 'Prakash123'; 
sendSMS($profile_id,$password,$to,$message);
?>
<?php
function sendSMS($profile_id,$password,$to,$message){
$api_url = "http://www.smsbusiness.in/nxm/api/pushsms.php?usr=$profile_id&pwd=$password&sndr=ALERTS&mobile=$to&text=$message&rpt=1 ";
$ch = curl_init($api_url);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$output = curl_exec($ch);
curl_close($ch);
return $output;
}
?>