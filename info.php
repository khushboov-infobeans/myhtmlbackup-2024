<?php

$plaintext = '8050816';
                // $methods = openssl_get_cipher_methods();
                // //$clefSecrete = 'flight';
                echo '<pre>';       
                // foreach ($methods as $method) {
                    $method = 'AES-256-CBC';
                    $ivlen = openssl_cipher_iv_length($method);
                    $clefSecrete = 'Ga2tRf4/3G:e@sqV'; //openssl_random_pseudo_bytes($ivlen);
                    $iv = openssl_random_pseudo_bytes($ivlen);

                    $encrypted = openssl_encrypt($plaintext, 'AES-256-CBC', 'Ga2tRf4/3G:e@sqV', false, '0111111011010010');
                    $decrypted = openssl_decrypt($encrypted, 'AES-256-CBC', 'Ga2tRf4/3G:e@sqV', false, '0111111011010010');
                    echo 'plaintext='.$plaintext. "\n";
                    echo 'cipher='.$method. "\n";
                    echo 'encrypted to: '.$encrypted. "\n";
                    echo 'decrypted to: '.$decrypted. "\n\n";
                //}
                echo '</pre>';
echo "<<<<<<<<<<<<<<<<<<<<<<<";

die;

echo phpinfo();
?>
