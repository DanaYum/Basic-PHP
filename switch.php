<?php
    echo("Choose from\n 1) Breakfast\n 2)Lunch\n 3)Dinner\n 4)Snack\n2");
    $meal_type=readline("enter the meal type: ");
    switch($meal_type){
        case(1):
            echo("Breakfast");
            echo("Sub-Menu:\n 1)Coffee\n 2)Samosa\n");
            $sub_menu=readline("Enter the items you wanna order: ");
            switch($sub_menu){
                case(1):
                    echo("You have ordered Coffee");
                    break;
                case(2):
                    echo("You have ordered Samosa");
                    break;
                default:
                echo("Invalid choice");
            }
            break;
        
        case(2):
            echo("Lunch");
            break;
        
        case(3):
            echo("Dinner");
            break;
        
        case(4):
            echo("Snack");
            break;
        default:
            echo("No options available");
            break;

        
    }
?>