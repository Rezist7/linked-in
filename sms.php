<?php 
include('Dbcon.php');

$query = "SELECT phone FROM users";
 $result = mysqli_query($db, $query);

while($row = $result->fetch_assoc()) 
    {


$reff='joseh';
$i=$row['phone'];
 $user='joseh';
$key='r6QRVXGh058H7iBUglNgM8sKngTqHfU6UrIWGAGIjJvrSyu61T';
$senderId='SMARTLINK';
$to='254'.$i;
$finalmessage='LINKIN%3A%0A%20Hello%20there.%20Thankyou%20for%20registaring%20with%20LINKIN%2C%20All%20links%20have%20been%20renewed%20.%20Follow%3A%20https%3A%2F%2Fmmustempire.com%2FLINKIN%20%20to%20share%20and%20earn%20more.';
$dargs=array("ssl"=>array("verify_peer"=>false,"verify_peer_name"=>false),"http"=>array('timeout' => 60, 'user_agent' => 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.9) Gecko/20071025 Firefox/3.0.0.1'));

$response = file_get_contents('https://sms.movesms.co.ke/api/compose?username=joseh&api_key=r6QRVXGh058H7iBUglNgM8sKngTqHfU6UrIWGAGIjJvrSyu61T&sender=SMARTLINK&to=+254721980625&message=LINKIN%3A%0A%20Hello%20'.$user.'.%20%0Afollow%3A%20https%3A%2F%2Fmmustempire.com%2FLINKIN%2Factivatation%0Ato%20activate%20your%20account%20and%20start%20earning%20while%20asleep.%0AReff%20no%3A%20'.$reff.'%0ATHANK%20YOU.&msgtype=5&dlr=0', false, stream_context_create($dargs));


return $response;
}

echo $response; // or code to handle returned url contents
?>
