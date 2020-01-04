<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="rides">
   
<div>

<?php if(sizeof($data['current_selected_rides'])): ?>


<h3>You Have Booked The Following Rides :</h3>

<br>

<?php foreach($data['current_selected_rides'] as $ride):?>

<div>
<label for="source"> Source : <?php echo $ride->source; ?> </label> <br>
<label for="destination"> Destination: <?php echo $ride->destination; ?> </label> <br>
<label for="departure"> Departure Time: <?php echo $ride->departure; ?> </label> <br>
<p><a href="<?php echo URLROOT; ?>rides/removeSelected/<?=$ride->id?>">Cancel Booking</a></p>
</div><br>

<?php endforeach?>

<?else:?>
    <!-- emptyness -->
<?php endif;?>

</div>

    <?php if(sizeof($data['rides']) == 0): ?>
    <p><h3>You've Not Posted Anything !!</h3></p><br>
    <?php else: ?>
    <p><h3>You've Posted The Following :</h3></p><br>
    <?php endif; ?>
    <hr>
    <?php foreach ($data['rides'] as $ride) : ?>
    <div>
        <label for="source"> Source: <?php echo $ride->source; ?> </label> <br>
        <label for="destination"> Destination: <?php echo $ride->destination; ?> </label> <br>
        <label for="departure"> Departure Time: <?php echo $ride->departure; ?> </label> <br>
        <label for="vehicle"> Vehicle Type : <?php echo $ride->vehicle; ?> </label> <br>
        <label for="seats"> Seats Available: <?php echo $ride->seats; ?> </label> <br>
        <label for="seats"> Trip Price: <?php echo $ride->price; ?> </label> <br>

        <br>
        <div>
            Booked By:
            <br>
            <ul>
                <?php foreach($data['selected_users'][$ride->id] as $user):?>
                <li>
                    <?=$user->full_name?>
                </li>
                <?php endforeach;?>
            </ul>

            <br>
        </div>
    </div>
    <br>
    <div class="edit_delete">
        <ul>
            <li><a href="<?php echo URLROOT; ?>rides/delete/<?php echo $ride->id; ?>">Delete Ride</a>
            <li>
            <li><a href="<?php echo URLROOT; ?>rides/update/<?php echo $ride->id; ?>">Edit Ride</a>
            <li>
        </ul><br>
    </div>
    <hr>
    <?php endforeach; ?>
</div>



<?php require APPROOT . '/views/inc/footer.php'; ?>