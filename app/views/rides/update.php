<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="error">
    <?=$data['display_error']?>
</div>

<div class="bg-add">
    <div class="add-contain">
        <form action="<?php echo URLROOT; ?>rides/update/<?php echo $data['rides']['rideid'];?>" method="POST">

            <label for="rideid"> Ride ID : </label>
            <input type="text" name="rideid" value="<?php echo $data['rides']['rideid']; ?>" readonly>
            <br>

            <label for="source"> Source : </label>
            <input type="text" name="source" value="<?php echo $data['rides']['source']; ?>">
            <br>

            <label for="destination"> Destination : </label>
            <input type="text" name="destination" value="<?php echo $data['rides']['destination']; ?>">
            <br>

            <label for="departure"> Departure Time : </label>
            <input type="datetime-local" name="departure" value="<?php echo $data['rides']['departure']; ?>">
            <br>

            <label for="vehicle"> Vehicle Type : </label>
            <input type="text" name="vehicle" value="<?php echo $data['rides']['vehicle']; ?>">
            <br>

            <label for="seats"> Seats Available : </label>
            <input type="number" name="seats" value="<?php echo $data['rides']['seats']; ?>">
            <br>

            <label for="vehicle"> Contact Number: </label>
            <input type="number" name="contact" value="<?php echo $data['rides']['contact']; ?>">
            <br>

            <label for="vehicle_id"> Vehicle ID: </label>
            <input type="text" name="vehicle_id" value="<?php echo $data['rides']['vehicle_id']; ?>">
            <br>

            <label for="price"> Trip Price: </label>
            <input type="number" name="price" value="<?php echo $data['rides']['price']; ?>">
            <br>

            


            <input type="submit" value="Update Ride">
        </form>
    </div>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>