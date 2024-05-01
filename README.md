### dhscanner.front.php

```bash
$ PS C:\Users\tuna_\GitHub\dhscanner> Set-Variable -Name X -Value (curl.exe -c cookiejar -X GET http://127.0.0.1:8008/token)
  % Total    % Received % Xferd  Average Speed   Time    Time     Time  Current
                                 Dload  Upload   Total   Spent    Left  Speed
100    40    0    40    0     0    473      0 --:--:-- --:--:-- --:--:--   476
$ curl.exe -b cookiejar --header "X-CSRF-TOKEN:$X" -F "source=@example.php" -X POST http://127.0.0.1:8008/
array(
    0: Stmt_Use[3:1 - 3:18](
        type: TYPE_NORMAL (1)
        uses: array(
            0: UseItem[3:5 - 3:17](
                type: TYPE_UNKNOWN (0)
                name: Name[3:5 - 3:17](
                    name: Dompdf\Dompdf
                )
                alias: null
            )
        )
    )
    1: Stmt_Use[4:1 - 4:28]( # ... omitted ...
```