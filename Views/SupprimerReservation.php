<?PHP
	include "../Controller/ReservationC.php";

	$ReservationC=new ReservationC();

	if (isset($_POST["ID"]))
		{
			$ReservationC->deleteReservation($_POST["ID"]);
			header('Location:Rechercher_Table.php');
		}
?>