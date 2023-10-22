<?php
include_once('../includes/connect.php')
?>
        <p class="header">All Reservation</p>

<div class="datatable-container">
  <!-- ======= Table ======= -->
  <table class="datatable">
    <thead>
      <tr>
        <th>Sl No</th>
        <th>Name</th>
        <th>Phone Number</th>
        <th>Person</th>
        <th>Date</th>
        <th>Time</th>
        <th>Special Request</th>
        <th>Status</th>
        <th>Cancel </th>
      </tr>
    </thead>

    <tbody>
      <?php
      $select_query = "SELECT * FROM `reservation_table`";
      $result_reservation = mysqli_query($con, $select_query);
      $number=1;
      while ($reservation = mysqli_fetch_assoc($result_reservation)) {
        $id = $reservation['reservation_id'];
        $name = $reservation['username'];
        $phone = $reservation['phone'];
        $person = $reservation['person'];
        $status = $reservation['book_status'];
        $message = $reservation['message'];
        $date = $reservation['reservation_date'];
        $slot_id = $reservation['slot_id'];
        $select_slot = "SELECT * FROM `slots` where slot_id = $slot_id";
        $result = mysqli_query($con, $select_slot);
        $slot = mysqli_fetch_assoc($result);
        $slot_time = $slot['slot_time'];
      ?>
        <tr>
          <td>
          <?= $number ?>
          </td>
          <td><?= $name ?></td>
          <td><?= $phone ?></td>
          <td><?= $person ?></td>
          <td><?= $date ?></td>
          <td><?= $slot_time ?></td>
          <td><?php  if(!empty($message)){
            echo $message;
          } else {
            echo "None";
          } ?></td>
          <td class="<?php if($status == 'Booked'){echo 'available';}else{echo 'away';}?>"></td>
          <td>
          <?php if($status == 'Booked'){
            ?>
            <button class="btn btn-outline-danger btn-sm rounded-0 " data-bs-toggle="modal" data-bs-target="#exampleModal_<?php echo $id ?>">Cancel</button></td>
<?php
}

else{
  ?>
<button class="btn btn-outline-danger btn-sm rounded-0 disabled" data-bs-toggle="modal" data-bs-target="#exampleModal_<?php echo $id ?>" >Cancel</button></td>
  <?php
}?>  
        </tr>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal_<?php echo $id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5 text-danger" id="exampleModalLabel">Cancel Reservation</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body" style="color: black;">
                                    Do you want to cancel the resevation on <?= $date?> at <?= $slot_time?>?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                    <button type="button" class="btn btn-danger"><a href="./index.php?cancel_reservation=<?php echo $id ?>" class="text-decoration-none text-light">Cancel</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
      <?php
      $number++;
      }
      ?>

    </tbody>
  </table>
</div>