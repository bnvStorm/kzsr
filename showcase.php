<!DOCTYPE html>
<html lang="ru" prefix="og: http://ogp.me/ns#">
<head>
	<title>Прием вторсырья Караганда | КазВторРесурс</title>
	<meta name="description" content="Осуществляем прием пары десятков видов вторсырья. По лучшим ценам в Караганде. Собственная сеть логистики. Моментальные выплаты.">
	<meta name="keywords" content="вторсырье, переработка, вторичное сырье, прием вторсырья">
	<meta name="robots" content="index,follow">
	<link rel="canonical" href="https://kzsr.kz/showcase"/>
	<?php include 'head.php';?>
	<main>
		<div class="grid-block">
			<?php
			require 'config.php';

			$sql2 = "SELECT url,h1,urlimg FROM kzsr_bd";
			$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}
			$result = $conn->query($sql2);
// если результат есть
			if ($result->num_rows > 0) {
  // присваиваем значения переменных и закрываем соединение
				while($row = $result->fetch_assoc()) {
					$urlimg = $row['urlimg'];

					echo "
					<div class='grid-block__image grid-block__image grid-block__image_active' style='background-image:url($urlimg)'></div>
					";
				}
			}  
			$conn->close();



			?>
			<div class="grid-block__content container-fluid container__showcase">
				<div class="row">
					<?php
					require 'config.php';

					$sql2 = "SELECT url,h1,urlimg FROM kzsr_bd";
					$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
					if ($conn->connect_error) {
						die("Connection failed: " . $conn->connect_error);
					}
					$result = $conn->query($sql2);
// если результат есть
					if ($result->num_rows > 0) {
  // присваиваем значения переменных и закрываем соединение
						while($row = $result->fetch_assoc()) {
							$h1 = $row['h1'];	
							$url = $row['url'];
							$urlimg = $row['urlimg'];

							echo "
							<div class='grid-block__column col-12 col-sm-6 col-lg-4 col-xl-3'>
							<a class='grid-block__item grid-block__item_active' href='$url'>
							<span class='grid-block__title'>$h1</span></span>
							</a>
							</div>
							";
						}
					}  
					$conn->close();



					?>


				</div>
			</div>
		</div>
	</main>
</div>
<?php include 'foot.php';?>
</body>

</html>
