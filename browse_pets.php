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
    <link rel="stylesheet" href="style.css"> <!-- Link to your CSS file -->
</head>
<body>
            
<div class="fmtitle">
    <h1>Browse Available Pets</h1>
        <h2>Crucial Information: Payment Handling and Seller Communication :</h2>
        <h5> Please be aware that our platform does not handle payment transactions, as the pricing of the pet is negotiable.<br>
        Instead, we provide you with essential information about the seller to facilitate future communications between you and the seller regarding the purchase.</h5>
</div>
    <section>
        <?php if (empty($availablePets)): ?>
            <p>No pets are currently available for purchase.</p>
        <?php else: ?>
            <ul class="pet-list">
                <?php foreach ($availablePets as $pet): ?>
                    <li class="pet-item">
                        <img src="<?php echo $pet['image_path']; ?>" alt="<?php echo $pet['breed']; ?>" class="pet-image"><br>
                        breed :<h3><?php echo $pet['breed']; ?></h3>
                        <p>Description: <?php echo $pet['description']; ?></p>
                        <p>Price: <?php echo $pet['price']; ?></p>
                        <p>Pet Type: <?php echo $pet['pet_type']; ?></p>
                        <p><a href="express_interest.php?pet_id=<?php echo $pet['id']; ?>">Seller info</a></p>
                    </li>
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
