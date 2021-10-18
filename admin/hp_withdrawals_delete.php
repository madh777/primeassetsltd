<?php
	include 'includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		
		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("DELETE FROM hp_transactions WHERE id=:id");
			$stmt->execute(['id'=>$id]);

			$_SESSION['success'] = 'withdrawal Info deleted successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Select withdrawal Info to delete first';
	}

	header('location: hp_withdrawals.php');
	
?>