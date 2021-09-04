# S3X-B3B4S-file-decryption
A way to scriptkiddie ransomware decryption.

## Checking my Honeypot
I found skids playing with some public exploits in my area.

While checking the web directory i found all files with a ".crypt" extension, wow is this a ransomware attack, are my files really got crypted ? noo bruh its just another very bad/ugly attack coming from a group of kids lol.

![crypt.php](https://raw.githubusercontent.com/9aylas/S3X-B3B4S-file-decryption/main/01.png)

![extension](https://raw.githubusercontent.com/9aylas/S3X-B3B4S-file-decryption/main/02.png)

### Inside the code : 
- The skids are only using a simple base64 to their code, why tf lol? well ok continue ...
![lol](https://raw.githubusercontent.com/9aylas/S3X-B3B4S-file-decryption/main/03.png)

- Ook now stop, its a compression, they even don't know what is a real encryption algorithm ...
![lol](https://raw.githubusercontent.com/9aylas/S3X-B3B4S-file-decryption/main/04.png)
- #### Mission accomplished : i won 0,001% of fun & waste of time.

## Decryption using php
```php
$decrypted = gzinflate(file_get_contents("file.ext.crypt"));
```

## Decryption using python
```python
import zlib
data = open("file.ext.crypt", "rb").read()
decoded = zlib.decompress(data, -zlib.MAX_WBITS)
print(decoded)
```
