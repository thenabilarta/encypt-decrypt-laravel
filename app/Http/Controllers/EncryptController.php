<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EncryptController extends Controller
{
    public function encrypt(Request $request) {
        $cipher = "AES-128-CTR"; 
        // Get the cipher iv length
        $iv_length = openssl_cipher_iv_length($cipher); 
        $options = 0;  
        $iv = '8565825542115032'; 
        // Take the encryption key in a variable
        $enc_key = "CodeSpeedyKeybj54HH"; 
        // Encrypt the data using openssl_encrypt function 
        $encrypted_string = openssl_encrypt($request->input, $cipher, $enc_key, $options, $iv);

        return $encrypted_string;
    }

    public function decrypt(Request $request) {
        $encrypted_string = $request->input;

        $cipher = "AES-128-CTR";
        $options = 0; 

        $decryption_iv = '8565825542115032'; 
        // Store the decryption key 
        $dec_key = "CodeSpeedyKeybj54HH"; 
        // Use openssl_decrypt() function to decrypt the data 
        $decrypted_string = openssl_decrypt ($encrypted_string, $cipher, $dec_key, $options, $decryption_iv);

        return $decrypted_string;
    }
}