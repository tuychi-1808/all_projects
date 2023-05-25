<?php
if (isset($_POST['saveage'])) {
    $age = $_POST['age'] ;
    if ($age <= 14) {
        echo "Sizga qat`iyan mumkin emas" ;
    }
    elseif ($age >= 15 and $age<=24) {
        echo "Vrach bilan maslahat qiling" ;
    }
    else {
        echo "Bemalol" ;
    }
}
?>