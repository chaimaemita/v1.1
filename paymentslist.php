<?php
    $data=file_get_contents('payemantsarray.json');
    $payments=json_decode($data,true);

foreach ($payments as  $payment) {
    echo ' <div class="row row-cols-7 py-3 bg-white my-2 me-2">
            <div class="col" >'.$payment["name"].'</div>
            <div class="col">'.$payment["Payment Schedule"].'</div>
            <div class="col">'.$payment["Bill Number"].'</div>
            <div class="col">'.$payment["Amount Paid"].'</div>
            <div class="col">'.$payment["Balance amount"].'</div>
            <div class="col">'.$payment["Date"].'</div>
            <div class="col text-end">
                <a href="#"><img class="pe-2" src="view.png" alt=""></a>
            </div>
            </div>'; 
}        
?>