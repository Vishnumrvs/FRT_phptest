<?php
include 'navbar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Pet Details</title>
    <link rel="stylesheet" href="style.css">    
</head>
<body>
<div class="fmtitle">
    <h2>Upload Pet Details</h2></div>  
    <form class="fmtitle1" action="upload_pet.php" method="post" enctype="multipart/form-data">
        <label for="pet_type">Pet Type:</label>
        <select type="text" id="pet_type" name="pet_type" required >
        <option value="bird">Bird</option>
        <option value="cat">Cat</option>
        <option value="dog">Dog</option>
        </select>

        <label for="breed">Pet Breed:</label>
        <input type="text" id="breed" name="breed" placeholder="Optional" >

        <label for="description">Description:</label>
        <textarea id="description" name="description" rows="4" required placeholder="type the details"></textarea>

        <label for="image">Image:</label>
        <input type="file" id="image" name="image" accept="image/*" required>

        <label for="price">Price expected:</label>
        <input type="text" id="price" name="price" required placeholder="INRs..">

        <input type="submit" value="Upload Pet">
    </form>
</div>
</body>
</html>
