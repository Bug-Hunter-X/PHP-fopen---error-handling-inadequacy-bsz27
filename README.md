# PHP fopen() Robust Error Handling

This example demonstrates a common pitfall in PHP's `fopen()` function:  insufficient error handling.  `fopen()` can fail for reasons beyond the file not existing (e.g., permission issues).  This repository shows how to improve error handling by checking `error_get_last()`.

## Bug
The `bug.php` file shows how a simple `fopen()` check can miss crucial error information.

## Solution
The `bugSolution.php` file provides a more robust approach using `error_get_last()` to correctly diagnose and handle `fopen()` errors.