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
    $response .= "1. Tarkwa to Takoradi - Gh¢5.91 \n";
    $response .= "2. Enchi to Takoradi - Gh¢12.3 \n";
    $response .= "3. New Edubiase to Tema - Gh¢14.13 \n";
    $response .= "4. Asawinso to Kaase - Gh¢11.75 \n";
    $response .= "5. Elluokrom to Kaase - Gh¢11.34 \n";
    $response .= "6. Debiso to Kaase - Gh¢13.06 \n";
    $response .= "7. Akim Oda to Tema - Gh¢11.17 \n";
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
    $response = "CON Choose the route and rate per ton \n";
    $response .= "1. Techiman to Tema - Gh¢140 \n";
    $response .= "2. Wenchi to Tema - Gh¢150 \n";
    $response .= "3. Sampa to Tema - Gh¢185 \n";
    $response .= "4. Nkrankwanta to Tema - Gh¢175 \n";
    $response .= "5. Banda to Tema - Gh¢185 \n";
    $response .= "6. Japekrom to Tema - Gh¢175 \n";
}
else if ($text == "1*2*1") {
    $response = "CON You want to transport Cashew from Techiman to Tema for Gh¢140 per ton.\n";
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
    $response = "CON You want to transport Cashew from Wenchi to Tema for Gh¢150 per ton.\n";
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
    $response = "CON You want to transport Cashew from Sampa to Tema for Gh¢185 per ton.\n";
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
    $response = "CON You want to transport Cashew from Nkrankwanta to Tema for Gh¢175 per ton.\n";
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
    $response = "CON You want to transport Cashew from Banda to Tema for Gh¢185 per ton.\n";
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
    $response = "CON You want to transport Cashew from Japekrom to Tema for Gh¢175 per ton.\n";
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



// When the user selects rice
else if ($text == "1*3") {
    $response = "CON Choose the route and rate per bag \n";
    $response .= "1. Harbour to Warehouse - Gh¢1.10 \n";
    $response .= "2. Tema to Kumasi - Gh¢4.10 \n";
    $response .= "3. Tema to Obuasi - Gh¢5 \n";
    $response .= "4. Tema to Takoradi - Gh¢4 \n";
    $response .= "5. Tema to Sunyani - Gh¢5 \n";
    $response .= "6. Tema to Nkawkaw - Gh¢3.5 \n";
}
else if ($text == "1*3*1") {
    $response = "CON You want to transport Rice from Harbour to Warehouse for Gh¢1.10 per bag.\n";
    $response .= "Confirm your order. \n";
    $response .= "1. Yes \n";
    $response .= "0. To Cancel \n";
}
else if ($text == "1*3*1*1") {
    $response = "END Truck order successful. You will receive a call from our representative in no time.";
}else if ($text == "1*3*1*0") {
    $response = "END Your Truck order has been canceled";
}
// Menu for a user who selects "2" from the second menu above
// Will be brought to this fourth menu screen

else if ($text == "1*3*2") {
    $response = "CON You want to transport Rice from Tema to Kumasi for Gh¢4.10 per bag.\n";
    $response .= "Confirm your order. \n";
    $response .= "1. Yes \n";
    $response .= "0. To Cancel \n";
}
// Menu for a user who selects "1" from the fourth menu screen

else if ($text == "1*3*2*1") {
    $response = "END Truck order successful. You will receive a call from our representative in no time.";
}else if ($text == "1*3*2*0") {
    $response = "END Your Truck order has been canceled";
}
// Menu for a user who enters "3" from the second menu above
// Will be brought to this fifth menu screen

else if ($text == "1*3*3") {
    $response = "CON You want to transport Rice from Tema to Obuasi for Gh¢5 per bag.\n";
    $response .= "Confirm your order. \n";
    $response .= "1. Yes \n";
    $response .= "0. To Cancel \n";
}
// Menu for a user who enters "1" from the fifth menu

else if ($text == "1*3*3*1") {
    $response = "END Truck order successful. You will receive a call from our representative in no time.";
}else if ($text == "1*3*3*0") {
    $response = "END Your Truck order has been canceled";
}
// Menu for a user who enters "4" from the second menu above
// Will be brought to this sixth menu screen

else if ($text == "1*3*4") {
    $response = "CON You want to transport Rice from Tema to Takoradi for Gh¢4 per bag.\n";
    $response .= "Confirm your order. \n";
    $response .= "1. Yes \n";
    $response .= "0. To Cancel \n";
}
    
// Menu for a user who enters "1" from the sixth menu

else if ($text == "1*3*4*1") {
    $response = "END Truck order successful. You will receive a call from our representative in no time.";
}else if ($text == "1*3*4*0") {
    $response = "END Your Truck order has been canceled";
}

// Menu for a user who enters "5" from the second menu above
// Will be brought to this sixth menu screen
else if ($text == "1*3*5") {
    $response = "CON You want to transport Rice from Tema to Sunyani for Gh¢5 per bag.\n";
    $response .= "Confirm your order. \n";
    $response .= "1. Yes \n";
    $response .= "0. To Cancel \n";
}

// Menu for a user who selects "1" from the seventh menu screen

else if ($text == "1*3*5*1") {
    $response = "END Truck order successful. You will receive a call from our representative in no time.";
}else if ($text == "1*3*5*0") {
    $response = "END Your Truck order has been canceled";
}

// Menu for a user who enters "6" from the second menu above
// Will be brought to this sixth menu screen
else if ($text == "1*3*6") {
    $response = "CON You want to transport Rice from Tema to Nkawkaw for Gh¢3.5 per bag.\n";
    $response .= "Confirm your order. \n";
    $response .= "1. Yes \n";
    $response .= "0. To Cancel \n";
}

// Menu for a user who selects "1" from the seventh menu screen

else if ($text == "1*3*6*1") {
    $response = "END Truck order successful. You will receive a call from our representative in no time.";
}else if ($text == "1*3*6*0") {
    $response = "END Your Truck order has been canceled";
}



// When the user chooses Tiles
else if ($text == "1*4") {
    $response = "CON Choose the route.42tons per truck \n";
    $response .= "1. Takoradi to Kumasi - Gh¢3,000 \n";
}
else if ($text == "1*4*1") {
    $response = "CON You want to transport Tiles from Takoradi to Kumasi for Gh¢3,000 per bag.\n";
    $response .= "Confirm your order. \n";
    $response .= "1. Yes \n";
    $response .= "0. To Cancel \n";
}
else if ($text == "1*4*1*1") {
    $response = "END Truck order successful. You will receive a call from our representative in no time.";
}else if ($text == "1*4*1*0") {
    $response = "END Your Truck order has been canceled";
}




// When the User chooses Fertilizer
else if ($text == "1*5") {
    $response = "CON Choose the route and rate per bag \n";
    $response .= "1. Kumasi to Estern - Gh¢2.8 \n";
    $response .= "2. Tema to Kumasi - Gh¢4 \n";
    $response .= "3. Tema to Tema area - Gh¢1.8 \n";
    $response .= "4. Kumasi to Ayinam - Gh¢2.5 \n";
    $response .= "5. Tema to Dormaa - Gh¢6.5 \n";
    $response .= "6. Kumasi to Twifo Praso - Gh¢3.6 \n";
    $response .= "7. Kumasi to Wasa Akropong - Gh¢4.4 \n";
}
else if ($text == "1*5*1") {
    $response = "CON You want to transport Fertilizer from Kumasi to Estern for Gh¢2.8 per bag.\n";
    $response .= "Confirm your order. \n";
    $response .= "1. Yes \n";
    $response .= "0. To Cancel \n";
}
else if ($text == "1*5*1*1") {
    $response = "END Truck order successful. You will receive a call from our representative in no time.";
}else if ($text == "1*5*1*0") {
    $response = "END Your Truck order has been canceled";
}
// Menu for a user who selects "2" from the second menu above
// Will be brought to this fourth menu screen

else if ($text == "1*5*2") {
    $response = "CON You want to transport Fertilizer from Tema to Kumasi for Gh¢4 per bag.\n";
    $response .= "Confirm your order. \n";
    $response .= "1. Yes \n";
    $response .= "0. To Cancel \n";
}
// Menu for a user who selects "1" from the fourth menu screen

else if ($text == "1*5*2*1") {
    $response = "END Truck order successful. You will receive a call from our representative in no time.";
}else if ($text == "1*5*2*0") {
    $response = "END Your Truck order has been canceled";
}
// Menu for a user who enters "3" from the second menu above
// Will be brought to this fifth menu screen

else if ($text == "1*5*3") {
    $response = "CON You want to transport Fertilizer from Tema to Tema area for Gh¢1.8 per bag.\n";
    $response .= "Confirm your order. \n";
    $response .= "1. Yes \n";
    $response .= "0. To Cancel \n";
}
// Menu for a user who enters "1" from the fifth menu

else if ($text == "1*5*3*1") {
    $response = "END Truck order successful. You will receive a call from our representative in no time.";
}else if ($text == "1*5*3*0") {
    $response = "END Your Truck order has been canceled";
}
// Menu for a user who enters "4" from the second menu above
// Will be brought to this sixth menu screen

else if ($text == "1*5*4") {
    $response = "CON You want to transport Fertilizer from Kumasi to Ayinam for Gh¢2.5 per bag.\n";
    $response .= "Confirm your order. \n";
    $response .= "1. Yes \n";
    $response .= "0. To Cancel \n";
}
    
// Menu for a user who enters "1" from the sixth menu

else if ($text == "1*5*4*1") {
    $response = "END Truck order successful. You will receive a call from our representative in no time.";
}else if ($text == "1*5*4*0") {
    $response = "END Your Truck order has been canceled";
}

// Menu for a user who enters "5" from the second menu above
// Will be brought to this sixth menu screen
else if ($text == "1*5*5") {
    $response = "CON You want to transport Fertilizer from Tema to Dormaa for Gh¢6.5 per bag.\n";
    $response .= "Confirm your order. \n";
    $response .= "1. Yes \n";
    $response .= "0. To Cancel \n";
}

// Menu for a user who selects "1" from the seventh menu screen

else if ($text == "1*5*5*1") {
    $response = "END Truck order successful. You will receive a call from our representative in no time.";
}else if ($text == "1*5*5*0") {
    $response = "END Your Truck order has been canceled";
}

// Menu for a user who enters "6" from the second menu above
// Will be brought to this sixth menu screen
else if ($text == "1*5*6") {
    $response = "CON You want to transport Fertilizer from Kumasi to Twifo Praso for Gh¢3.6 per bag.\n";
    $response .= "Confirm your order. \n";
    $response .= "1. Yes \n";
    $response .= "0. To Cancel \n";
}

// Menu for a user who selects "1" from the seventh menu screen

else if ($text == "1*5*6*1") {
    $response = "END Truck order successful. You will receive a call from our representative in no time.";
}else if ($text == "1*5*6*0") {
    $response = "END Your Truck order has been canceled";
}

else if ($text == "1*5*7") {
    $response = "CON You want to transport Fertilizer from Kumasi to Wasa Akropong for Gh¢4.4 per bag.\n";
    $response .= "Confirm your order. \n";
    $response .= "1. Yes \n";
    $response .= "0. To Cancel \n";
}

// Menu for a user who selects "1" from the seventh menu screen

else if ($text == "1*5*7*1") {
    $response = "END Truck order successful. You will receive a call from our representative in no time.";
}else if ($text == "1*5*7*0") {
    $response = "END Your Truck order has been canceled";
}



// When the user chooses Cement
else if ($text == "1*6") {
    $response = "CON Choose the route and rate per bag \n";
    $response .= "1. Tema to Kumasi - Gh¢3 \n";
    $response .= "2. Takoradi to Offinso - Gh¢3.3 \n";
    $response .= "3. Takoradi to Accra - Gh¢2.3 \n";
    $response .= "4. Takoradi to Kumasi - Gh¢3 \n";
}
else if ($text == "1*6*1") {
    $response = "CON You want to transport Cement from Tema to Kumasi for Gh¢3 per bag.\n";
    $response .= "Confirm your order. \n";
    $response .= "1. Yes \n";
    $response .= "0. To Cancel \n";
}
else if ($text == "1*6*1*1") {
    $response = "END Truck order successful. You will receive a call from our representative in no time.";
}else if ($text == "1*6*1*0") {
    $response = "END Your Truck order has been canceled";
}
// Menu for a user who selects "2" from the second menu above
// Will be brought to this fourth menu screen

else if ($text == "1*6*2") {
    $response = "CON You want to transport Cement from Takoradi to Offinso for Gh¢3.3 per bag.\n";
    $response .= "Confirm your order. \n";
    $response .= "1. Yes \n";
    $response .= "0. To Cancel \n";
}
// Menu for a user who selects "1" from the fourth menu screen

else if ($text == "1*6*2*1") {
    $response = "END Truck order successful. You will receive a call from our representative in no time.";
}else if ($text == "1*6*2*0") {
    $response = "END Your Truck order has been canceled";
}
// Menu for a user who enters "3" from the second menu above
// Will be brought to this fifth menu screen

else if ($text == "1*6*3") {
    $response = "CON You want to transport Cement from Takoradi to Accra for Gh¢2.3 per bag.\n";
    $response .= "Confirm your order. \n";
    $response .= "1. Yes \n";
    $response .= "0. To Cancel \n";
}
// Menu for a user who enters "1" from the fifth menu

else if ($text == "1*6*3*1") {
    $response = "END Truck order successful. You will receive a call from our representative in no time.";
}else if ($text == "1*6*3*0") {
    $response = "END Your Truck order has been canceled";
}
// Menu for a user who enters "4" from the second menu above
// Will be brought to this sixth menu screen

else if ($text == "1*6*4") {
    $response = "CON You want to transport Cement from Takoradi to Kumasi - Gh¢3 per bag.\n";
    $response .= "Confirm your order. \n";
    $response .= "1. Yes \n";
    $response .= "0. To Cancel \n";
}
    
// Menu for a user who enters "1" from the sixth menu

else if ($text == "1*6*4*1") {
    $response = "END Truck order successful. You will receive a call from our representative in no time.";
}else if ($text == "1*6*4*0") {
    $response = "END Your Truck order has been canceled";
}





// When the User chooses Petroleum
else if ($text == "1*7") {
    $response = "CON Choose the route and rate per 50,000 liters \n";
    $response .= "1. Spintex to Aska - 2,300 \n";
    $response .= "2. Tema to Spintex for Gh¢1,800 \n";
}
else if ($text == "1*7*1") {
    $response = "CON You want to transport Cement from Spintex to Aska for 2,300 per 50,000 liters.\n";
    $response .= "Confirm your order. \n";
    $response .= "1. Yes \n";
    $response .= "0. To Cancel \n";
}
else if ($text == "1*7*1*1") {
    $response = "END Truck order successful. You will receive a call from our representative in no time.";
}else if ($text == "1*7*1*0") {
    $response = "END Your Truck order has been canceled";
}
// Menu for a user who selects "2" from the second menu above
// Will be brought to this fourth menu screen

else if ($text == "1*7*2") {
    $response = "CON You want to transport Cement from Tema to Spintex for Gh¢1,800 per 50,000 liters.\n";
    $response .= "Confirm your order. \n";
    $response .= "1. Yes \n";
    $response .= "0. To Cancel \n";
}
// Menu for a user who selects "1" from the fourth menu screen

else if ($text == "1*7*2*1") {
    $response = "END Truck order successful. You will receive a call from our representative in no time.";
}else if ($text == "1*7*2*0") {
    $response = "END Your Truck order has been canceled";
}


//echo response
header('Content-type: text/plain');
echo $response
?>