<?php 
 
$result= $_POST['search'];
$result= strtolower($result);


if ($result=="airport" || $result=="Airport" || $result=="airports" || $result=="Airports")
header ('Location: i.php');

if ($result=="flights" || $result=="flight" || $result=="Flights" || $result=="Flight")
header ('Location: v.php');

if ($result=="ticket prices" || $result=="prices" || $result=="ticketprices" || $result=="TicketPrices" || $result=="Ticketprices")
header ('Location: Ticket1.php');

echo "No results found for this search";
?>