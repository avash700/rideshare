<?php require APPROOT . '/views/inc/header.php'; ?>



<div class="rides">
    <h1>Available Rides:</h1>

    <?php foreach ($data['rides'] as $ride) : ?>
    
        <label for=""> Source: <?php echo $ride->source; ?> </label> <br>
        <label for=""> Destination: <?php echo $ride->destination; ?> </label> <br>
        <label for=""> Departure Time: <?php echo $ride->departure; ?> </label> <br>
        <label for=""> Vehicle Type: <?php echo $ride->vehicle; ?> </label> <br>
        <label for=""> Seats Available: <?php echo $ride->seats; ?> </label> <br>
        <label for=""> Trip Price: <?php echo $ride->price; ?> </label> <br>

        <?php if(isLoggedIn()):?>
        <label for=""> Contact Number: <?php echo $ride->contact; ?> </label> <br>
        <label for=""> Vehicle ID: <?php echo $ride->vehicle_id; ?> </label> <br>
        <label for=""> Posted By: <?php echo $ride->full_name; ?> </label> <br>
        <p class="select"><a href="rides/select/<?=$ride->id?>">Book Ride</a></p><br>
        <?php endif?>
        <br>
        
   
    <hr>
    <?php endforeach; ?>
</div>




<?php require APPROOT . '/views/inc/footer.php'; ?>