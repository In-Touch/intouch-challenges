## In-Touch Programming Challenge #3 - Cryptography

You need to write a PHP program to decode the given ciphertext,
provide the output cleartext and the hexadecimal representation of 
the key that was used to encrypt.

The details you'll need are as follows:

* Cipher is AES-256-CBC (32-byte key)
* Only the first 3 bytes of the key are used - the rest are 0's
	* i.e. [?,?,?,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]
* The first byte of the key is `0xBA`
* The decrypted text is a plain ASCII string in English

### Initialization Vector (base64 encoded)

`wfQWvRpD/bjkdLBQVCFyGg==`

### Ciphertext (base64 encoded)

`U45PXdltSdze1oC9OhxWtYybClZeNLd/MZ1LsC+CRTc=`
