<?php
include_once("models/ColaboradorModel.php");

if(isset($_POST["is_date_search"]) == "yes")
{
	$query = "SELECT * FROM colaboradores where created_date BETWEEN '". $_POST['start_date'] ."' AND '". $_POST['final_date']. "' ORDER BY created_date ASC";
}

else
{
	$query = "";

}

$colaborador = new ColaboradorModel();

$number_filter_row = $colaborador->dateNumberRows($query);
$result = $colaborador->dateFilter($query);



$data = array();

foreach($result as $row)
{
 $sub_array = array();
 $sub_array[] = $row["nombre"];
 $sub_array[] = $row["phone"];
 $sub_array[] = $row["email"];
 $sub_array[] = $row["ciudad"];
 $sub_array[] = $row["codigopostal"];
 $sub_array[] = $row["sexo"];
 $sub_array[] = $row["edad"];
 $sub_array[] = $row["numero_de_boletos"];
 $sub_array[] = $row["created_date"];
 $data[] = $sub_array;
}

$output = array(
 "draw"    => intval($number_filter_row),
 "recordsTotal"  => $number_filter_row,
 "recordsFiltered" => $number_filter_row,
 "data"    => $data
);

echo json_encode($output);

?>