<?php 
// Reads the variables sent via POST
$sessionId   = $_POST["sessionId"];  
$serviceCode = $_POST["serviceCode"];  
$phoneNumber = $_POST["phoneNumber"];
$text = $_POST["text"];

//This is the first menu screen
if ( $text == "" ) {
    $response  = "CON Hi welcome to Kiteko Ghana, choose an option to continue \n";
    $response .= "1. Request for a truck \n";
    $response .= "2. Register \n";
    $response .= "3. Contact Us \n";
    
}
    // Menu for a user who selects '1' from the first menu
    // Will be brought to this second menu screen
else if ($text == "1") {
    $response  = "CON  Choose a the commodity you'ld like to move \n";
    $response .= "1. Cocoa \n";
    $response .= "2. Cashew \n";
    $response .= "3. Rice \n";
    $response .= "4. Tiles \n";
    $response .= "5. Fertilizer \n";
    $response .= "6. Cement \n";
    $response .= "7. Petroleum \n";
}
    //Menu for a user who selects '1' from the second menu above
    // Will be brought to this third menu screen

else if ($text == "1*1") {
    $response = "CON Choose the route and rate per bag \n";
    $response .= "1. Tarkwa to Takoradi - 5.91 \n";
    $response .= "2. Enchi to Takoradi - 12.3 \n";
    $response .= "3. New Edubiase to Tema - 14.13 \n";
    $response .= "4. Asawinso to Kaase - 11.75 \n";
    $response .= "5. Elluokrom to Kaase - 11.34 \n";
    $response .= "6. Debiso to Kaase - 13.06 \n";
    $response .= "7. Akim Oda to Tema - 11.17 \n";
}
else if ($text == "1*1*1") {
    $response = "CON You want to transport Cocoa from Tarkwa to Takoradi for 5.91 per bag.\n";
    $response .= "Confirm your order. \n";
    $response .= "1. Yes \n";
    $response .= "0. To Cancel \n";
}
else if ($text == "1*1*1*1") {
    $response = "END Truck order successful. You will receive a call from our representative in no time.";
}else if ($text == "1*1*1*0") {
    $response = "END Your Truck order has been canceled";
}
// Menu for a user who selects "2" from the second menu above
// Will be brought to this fourth menu screen

else if ($text == "1*1*2") {
    $response = "CON You want to transport Cocoa from Enchi to Takoradi for 12.3 per bag.\n";
    $response .= "Confirm your order. \n";
    $response .= "1. Yes \n";
    $response .= "0. To Cancel \n";
}
// Menu for a user who selects "1" from the fourth menu screen

else if ($text == "1*1*2*1") {
    $response = "END Truck order successful. You will receive a call from our representative in no time.";
}else if ($text == "1*1*2*0") {
    $response = "END Your Truck order has been canceled";
}
// Menu for a user who enters "3" from the second menu above
// Will be brought to this fifth menu screen

else if ($text == "1*1*3") {
    $response = "CON You want to transport Cocoa from New Edubiase to Tema for 14.13 per bag.\n";
    $response .= "Confirm your order. \n";
    $response .= "1. Yes \n";
    $response .= "0. To Cancel \n";
}
// Menu for a user who enters "1" from the fifth menu

else if ($text == "1*1*3*1") {
    $response = "END Truck order successful. You will receive a call from our representative in no time.";
}else if ($text == "1*1*3*0") {
    $response = "END Your Truck order has been canceled";
}
// Menu for a user who enters "4" from the second menu above
// Will be brought to this sixth menu screen

else if ($text == "1*1*4") {
    $response = "CON You want to transport Cocoa from Asawinso to Kaase for 11.75 per bag.\n";
    $response .= "Confirm your order. \n";
    $response .= "1. Yes \n";
    $response .= "0. To Cancel \n";
}
    
// Menu for a user who enters "1" from the sixth menu

else if ($text == "1*1*4*1") {
    $response = "END Truck order successful. You will receive a call from our representative in no time.";
}else if ($text == "1*1*4*0") {
    $response = "END Your Truck order has been canceled";
}

// Menu for a user who enters "5" from the second menu above
// Will be brought to this sixth menu screen
else if ($text == "1*1*5") {
    $response = "CON You want to transport Cocoa from Elluokrom to Kaase for 11.34 per bag.\n";
    $response .= "Confirm your order. \n";
    $response .= "1. Yes \n";
    $response .= "0. To Cancel \n";
}

// Menu for a user who selects "1" from the seventh menu screen

else if ($text == "1*1*5*1") {
    $response = "END Truck order successful. You will receive a call from our representative in no time.";
}else if ($text == "1*1*5*0") {
    $response = "END Your Truck order has been canceled";
}

// Menu for a user who enters "6" from the second menu above
// Will be brought to this sixth menu screen
else if ($text == "1*1*6") {
    $response = "CON You want to transport Cocoa from Debiso to Kaase for 13.06 per bag.\n";
    $response .= "Confirm your order. \n";
    $response .= "1. Yes \n";
    $response .= "0. To Cancel \n";
}

// Menu for a user who selects "1" from the seventh menu screen

else if ($text == "1*1*6*1") {
    $response = "END Truck order successful. You will receive a call from our representative in no time.";
}else if ($text == "1*1*6*0") {
    $response = "END Your Truck order has been canceled";
}

// Menu for a user who enters "7" from the second menu above
// Will be brought to this sixth menu screen
else if ($text == "1*1*7") {
    $response = "CON You want to transport Cocoa from Debiso to Kaase for 13.06 per bag.\n";
    $response .= "Confirm your order. \n";
    $response .= "1. Yes \n";
    $response .= "0. To Cancel \n";
}

// Menu for a user who selects "1" from the seventh menu screen

else if ($text == "1*1*7*1") {
    $response = "END Truck order successful. You will receive a call from our representative in no time.";
}else if ($text == "1*1*7*0") {
    $response = "END Your Truck order has been canceled";
}



// When the user selects Cashew

else if ($text == "1*2") {
    $response = "CON Choose the route and rate per per ton \n";
    $response .= "1. Techiman to Tema - Gh¢140 \n";
    $response .= "2. Wenchi to Tema - Gh¢150 \n";
    $response .= "3. Sampa to Tema - Gh¢185 \n";
    $response .= "4. Nkrankwanta to Tema - Gh¢175 \n";
    $response .= "5. Banda to Tema - Gh¢185 \n";
    $response .= "6. Japekrom to Tema - Gh¢175 \n";
}
else if ($text == "1*2*1") {
    $response = "CON You want to transport Cocoa from Techiman to Tema for Gh¢140 per bag.\n";
    $response .= "Confirm your order. \n";
    $response .= "1. Yes \n";
    $response .= "0. To Cancel \n";
}
else if ($text == "1*2*1*1") {
    $response = "END Truck order successful. You will receive a call from our representative in no time.";
}else if ($text == "1*2*1*0") {
    $response = "END Your Truck order has been canceled";
}
// Menu for a user who selects "2" from the second menu above
// Will be brought to this fourth menu screen

else if ($text == "1*2*2") {
    $response = "CON You want to transport Cocoa from Wenchi to Tema for Gh¢150 per bag.\n";
    $response .= "Confirm your order. \n";
    $response .= "1. Yes \n";
    $response .= "0. To Cancel \n";
}
// Menu for a user who selects "1" from the fourth menu screen

else if ($text == "1*2*2*1") {
    $response = "END Truck order successful. You will receive a call from our representative in no time.";
}else if ($text == "1*2*2*0") {
    $response = "END Your Truck order has been canceled";
}
// Menu for a user who enters "3" from the second menu above
// Will be brought to this fifth menu screen

else if ($text == "1*2*3") {
    $response = "CON You want to transport Cocoa from Sampa to Tema for Gh¢185 per bag.\n";
    $response .= "Confirm your order. \n";
    $response .= "1. Yes \n";
    $response .= "0. To Cancel \n";
}
// Menu for a user who enters "1" from the fifth menu

else if ($text == "1*2*3*1") {
    $response = "END Truck order successful. You will receive a call from our representative in no time.";
}else if ($text == "1*2*3*0") {
    $response = "END Your Truck order has been canceled";
}
// Menu for a user who enters "4" from the second menu above
// Will be brought to this sixth menu screen

else if ($text == "1*2*4") {
    $response = "CON You want to transport Cocoa from Nkrankwanta to Tema for Gh¢175 per bag.\n";
    $response .= "Confirm your order. \n";
    $response .= "1. Yes \n";
    $response .= "0. To Cancel \n";
}
    
// Menu for a user who enters "1" from the sixth menu

else if ($text == "1*2*4*1") {
    $response = "END Truck order successful. You will receive a call from our representative in no time.";
}else if ($text == "1*2*4*0") {
    $response = "END Your Truck order has been canceled";
}

// Menu for a user who enters "5" from the second menu above
// Will be brought to this sixth menu screen
else if ($text == "1*2*5") {
    $response = "CON You want to transport Cocoa from Banda to Tema for Gh¢185 per bag.\n";
    $response .= "Confirm your order. \n";
    $response .= "1. Yes \n";
    $response .= "0. To Cancel \n";
}

// Menu for a user who selects "1" from the seventh menu screen

else if ($text == "1*2*5*1") {
    $response = "END Truck order successful. You will receive a call from our representative in no time.";
}else if ($text == "1*2*5*0") {
    $response = "END Your Truck order has been canceled";
}

// Menu for a user who enters "6" from the second menu above
// Will be brought to this sixth menu screen
else if ($text == "1*2*6") {
    $response = "CON You want to transport Cocoa from Japekrom to Tema for Gh¢175 per bag.\n";
    $response .= "Confirm your order. \n";
    $response .= "1. Yes \n";
    $response .= "0. To Cancel \n";
}

// Menu for a user who selects "1" from the seventh menu screen

else if ($text == "1*2*6*1") {
    $response = "END Truck order successful. You will receive a call from our representative in no time.";
}else if ($text == "1*2*6*0") {
    $response = "END Your Truck order has been canceled";
}


//echo response
header('Content-type: text/plain');
echo $response
?>