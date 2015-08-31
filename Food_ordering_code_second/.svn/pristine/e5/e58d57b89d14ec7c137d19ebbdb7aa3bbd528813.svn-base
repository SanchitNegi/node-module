<?php if(empty($time_range)){
  echo $this->Form->input('Booking.start_time',array('type'=>'select','class'=>'txtbx','empty'=>'Store is closed on this day','options'=>$time_range,'label'=>false,'div'=>false)); 
} else {
    
if(!empty($store_booking)){
    foreach($store_booking as $book){
       $myBookTime  = explode(" ", $book['Booking']['reservation_date']);
       $data[] = $myBookTime[1];
    } ?>
    <select id="BookingStartTime" class="txtbx" name="data[Booking][start_time]">
        <?php foreach($time_range as $key=>$value) {
           // if(in_array($key,$data)){
           //    echo "<option value='$key' disabled='disabled'>$value - Already Booked </option>";
          //  } else {
               echo "<option value='$key'>$value</option>";
          //  }
        }   ?>
    </select>
<?php }  else {
    echo $this->Form->input('Booking.start_time',array('type'=>'select','class'=>'txtbx','options'=>$time_range,'label'=>false,'div'=>false)); 
}   
} ?>