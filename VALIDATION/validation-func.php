<?php



function Validate_Name($name){
    $nameErr = true;
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
        $nameErr = FALSE;
      }
    
      return $nameErr;
}


// Check email 
function ValidateEmail($email)
{
    $emailIsValid = FALSE;

                $domain = ltrim(stristr($email, '@'), '@') . '.';
                $user   = stristr($email, '@', TRUE);
                if
                (
                    !empty($user) &&
                    !empty($domain) &&
                    checkdnsrr($domain)
                )
                {$emailIsValid = TRUE;}
        return $emailIsValid;
}



// Check url with Https or http
function validate_url($url) {
    $path = parse_url($url, PHP_URL_PATH);
    $encoded_path = array_map('urlencode', explode('/', $path));
    $url = str_replace($path, implode('/', $encoded_path), $url);

    return filter_var($url, FILTER_VALIDATE_URL) ? true : false;
}

// Validate Phone Number (US number) e.g. (1-202-555-0721)
function validateUS_PhoneNo($phone) {
    if(preg_match("/^([1]-)?[0-9]{3}-[0-9]{3}-[0-9]{4}$/i", $phone))
       return true;
    else
       return false;
}

// Validate Phone Number (All of phone number)
function validate_PhoneNo($phone) {
    if(preg_match("/^\\+?\\d{1,4}?[-.\\s]?\\(?\\d{1,3}?\\)?[-.\\s]?\\d{1,4}[-.\\s]?\\d{1,4}[-.\\s]?\\d{1,9}$/", $phone))
       return true;
    else
       return false;
}


// Validate Phone Number (Iran phone number) like 09138889999
function is_iran_phone($phone){
    if(preg_match("/^09[0-9]{9}$/", $phone))
    return true;
    else
    return false;
} 


