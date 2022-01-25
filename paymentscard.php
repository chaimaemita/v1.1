<?php
 
    $data=file_get_contents('payemantsarray.json');
    $payments=json_decode($data,true);

foreach ($payments as  $payment) {
    echo ' <div class="card" style="width: 100%;">
            <div class="card-body">
              <h5 class="card-title text-center">'.$payment["name"].'</h5>
              <p class="card-text text-center"> Payment schedule:'.$payment["Payment Schedule"].'</p>
              <p class="card-text text-center">Bill number:'.$payment["Bill Number"].'</p>
              <p class="card-text text-center">Amount Paid:'.$payment["Amount Paid"].'</p>
              <p class="card-text text-center">Balance amount:'.$payment["Balance amount"].'</p>
              <p class="card-text text-center">'.$payment["Date"].'</p>
              <a href="#" class="btn btn-info w-100"> <i style="color: white;" class="bi bi-eye  pe-3"></i></a>
            </div>
          </div>
'; 

}        
?>
              