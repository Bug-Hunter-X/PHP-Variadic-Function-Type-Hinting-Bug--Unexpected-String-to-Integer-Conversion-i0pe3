# PHP Variadic Function Type Hinting Bug

This repository demonstrates a subtle bug in PHP's type hinting when using the variadic operator (`...`).  The function `foo` is declared to accept only integers. However, if you pass a string, PHP silently converts it to an integer, potentially leading to unexpected behavior and difficult-to-debug errors. This is inconsistent with how type hinting usually behaves.

The `bug.php` file contains the buggy code, while `bugSolution.php` offers a potential solution involving stricter input validation.