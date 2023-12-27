<?php
include 'Config.php'; // Include the database connection file

// Retrieve the list of available pets from the database
$getAvailablePets = $conn->query("SELECT * FROM pets WHERE is_available = 1");
$availablePets = $getAvailablePets->fetch_all(MYSQLI_ASSOC);
$getAvailablePets->close();
?>
<?php
include 'navbar.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Browse Available Pets</title>
    <link rel="stylesheet" href="style.css"> 
<style>
body {
  margin: 0;
  padding: 0;
}

.fixed-size-container {
  width: 300px; /* Set your desired width */
  height: 200px; /* Set your desired height */
  border: 1px solid #000; /* Optional: Add a border for visualization */
  overflow: hidden; /* Optional: Hide content that overflows the container */
}

.image-container {
  width: 300px; /* Set your desired width */
  height: 200px; /* Set your desired height */
  border: 1px solid #000; /* Optional: Add a border for visualization */
  overflow: hidden; /* Optional: Hide content that overflows the container */
  display: flex;
}

.image-container img {
  width: 100%;
  height: auto;
  object-fit: cover;
}

.image-details {
  padding: 10px;
}

.image-details h2 {
  margin: 0;
}

.image-details p {
  margin: 0;
}

    </style>
</head>
<body>
            
<div class="fmtitle">
    <h1> testing page</h1>
    <h2>Crucial Information: Payment Handling and Seller Communication :</h2>
</div>
    
    <section>
        <?php if (empty($availablePets)): ?>
            <p>No pets are currently available for purchase.</p>
        <?php else: ?>
            <ul>
                <?php foreach ($availablePets as $pet): ?>
                    <div class="fixed-size-container">
                        <li>
                          <img src="<?php echo $pet['image_path']; ?>" alt="<?php echo $pet['breed']; ?>">
                          <div class="image-details">  
                          <p>breed :<?php echo $pet['breed']; ?></p>
                            <p>Description: <?php echo $pet['description']; ?></p>
                            <p>Price: <?php echo $pet['price']; ?></p>
                            <p>Pet Type: <?php echo $pet['pet_type']; ?></p>
                            <p><a href="express_interest.php?pet_id=<?php echo $pet['id']; ?>">Seller info</a></p>
                          </div>
                        </li>
                    </div>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </section>

 

  

</body>
</html>

<?php
// Close the database connection
$conn->close();
?>
