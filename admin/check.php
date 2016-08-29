<?php
	if (isset($_POST['submitContact'])) {
		 $email=$_POST['email'];
		 $pass=$_POST['password'];
		session_start();
			if (!empty($email) && !empty($pass)) {
				if ($email=="admin" && $pass="admin") {
					header('Location:admin.php');
				}
				include "config.php";
					$sql="SELECT * FROM siyahi WHERE email='$email' ";
					$query=mysqli_query($elaqe,$sql);
						if ($query->num_rows>=1) {
							$row = $query->fetch_assoc();
								if($pass==$row['parol']){
									// echo "TRUE";
									$_SESSION['daxil olmag']=true;
									header('Location:user.php');
									}else{
										echo "yoxdu";
										// echo 'WRONG PASS';
										$_SESSION['loginerror']="Parol və şifrə düzgün deyil";
										header('Location:login.php');
									}
							}
				
			}else{
				$_SESSION['boshluqerror']="Email və ya parolu daxil edin";
				header('Location:login.php');
			}
	}
	else{
		header('Location:login.php');
	}

 ?>
		