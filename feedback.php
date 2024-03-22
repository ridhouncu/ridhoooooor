<?php

include 'config.php';

if (isset($_POST['submit'])) {

	$name = $_POST['name'];
  $email = $_POST['email'];
	$message = $_POST['message'];
	date_default_timezone_set('Asia/Jakarta');
	//
	$current_timestamp = date('d M Y H:i:s');

	$sql = "INSERT INTO komentar (name, email,  message, waktu) 
  VALUES ('$name', '$email', '$message', '$current_timestamp')";

	if ($conn->query($sql) === TRUE) {
		echo "";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <!--css-->
    <link rel="stylesheet" href="feedback.css" />
    
    <title>Feedback</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" >ChocoR Grupt</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#carouselExampleControls" >Feedback</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <br>
    <br>
<br>
<h2 class="text-center">Please fill out this from</h2>
<div class="container col-sm-6">
    <form method="post" action="feedback.php">
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Name</label>
  <input class="form-control" id="exampleFormControlInput1" placeholder="Name" name="name" >
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name='email' required>
</div>

<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Comment</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Comment" name="message" ></textarea>
</div>
        <button type="submit" class="btn btn-warning" name="submit">Submit</button>
    </form>
</div>

<br>

<div class="border rounded container col-sm-6">
		<?php

			$sql = "SELECT * FROM komentar ORDER BY waktu";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			  // output data of each row
			  while($row = $result->fetch_assoc()) {
				
		?>
    <div>
		<h3 id="name"><?php echo $row['name']; ?></h3></div>
		<p id="message"><?php echo $row['message']; ?></p>
		<p id="waktu"><?php echo $row['waktu']; ?></p>

		<?php } } ?>
  </div>

  <br>

<script>
		//PESAN
		var sensor = ["bot", "cuki", "anjing", "jelek", "kemem", "bangsat", "kontol", "peler", "pler", "meki", "memek", "ngentot", "babi", "ayam", "jenglot", "kimak"]
		function replaceTextInElements(elements) {
			elements.forEach(function (element) {

				var originalText = element.textContent;


				var newText = originalText.replace(new RegExp(sensor.join('|'), 'gi'), function (match) {

					return '*'.repeat(match.length);
				});


				element.textContent = newText;
			});
		}


		var messageElements = document.querySelectorAll('p#message');


		replaceTextInElements(messageElements);

		//NAMA
		var sensor = ["anjing", "jelek", "kemem", "bangsat", "kontol", "peler", "pler", "memek", "ngentot", "babi", "ayam", "jenglot"]
		function replaceTextInElements(elements) {
			elements.forEach(function (element) {

				var originalText = element.textContent;


				var newText = originalText.replace(new RegExp(sensor.join('|'), 'gi'), function (match) {

					return '*'.repeat(match.length);
				});


				element.textContent = newText;
			});
		}


		var messageElements = document.querySelectorAll('h3#name');


		replaceTextInElements(messageElements);
	</script>

</body>
</html>