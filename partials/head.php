<?php
session_start();
?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
<!-- Bootswatch -->
<link href="https://bootswatch.com/4/flatly/bootstrap.min.css" rel="stylesheet">
<!-- link lightbox -->
<?php
if (isset($_SESSION['user_id']) && $_SESSION['user_level'] == '2' && $_SESSION['user_level'] == '3') {
	?>
<link rel="stylesheet" type="text/css" href="../assets/css/lightbox.min.css">
<?php
}
?>
<!-- Custom CSS -->
<?php
	if (isset($_SESSION['user_id'])) {
		?>
		<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
	<?php
	}else{
		?>
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
		<?php
	}
?>
<!-- fonts -->
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=IM+Fell+English+SC" rel="stylesheet">