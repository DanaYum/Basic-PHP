<?php
    $customer=readline("Enter customer type: ");
    $unit=readline("Enter units: ");
    $bill;
    switch($customer){
        case(1):
            echo("Customer type: Residential");
            if($unit<100){
                $bill=$unit*0.5;;
            }
            elseif($unit>100 && $unit<200){
                $bill=$unit*0.75;
            }
            elseif($unit>200){
                $bill=$unit;
            }
            echo "\nbill to be paid is $$bill";
            break;
        case(2):
            echo("Customer type: Commercial");

            if($unit<200){
                $bill=$unit*1.5;;
            }
            elseif($unit>200){
                $bill=$unit*2;
            }
            echo "\nbill to be paid is $$bill";

            break;
        case(3):
            echo("Customer type: Commercial");
            $bill=$unit * 2.5;
            echo "\nbill to be paid is $$bill";

            break;
        default:
        echo("Invalid customer type");

    }