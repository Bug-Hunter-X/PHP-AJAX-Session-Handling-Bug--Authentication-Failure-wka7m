The solution involves ensuring that the session ID is correctly passed with every AJAX request. This typically happens automatically, but there are scenarios (e.g., unusual server configurations or frameworks) where you need to explicitly manage it.

This solution focuses on setting appropriate headers to properly manage the session IDs.

```php
// check_login_solution.php
<?php
    session_start();
    header('Content-Type: application/json'); //Important for AJAX response
    if(isset($_SESSION['user_id'])){
        echo json_encode(['status' => 'success', 'message' => 'Logged in']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Not logged in']);
    }
?>
```

The client-side code (AJAX) remains largely the same, relying on the browser's default handling of cookies. Ensuring the proper headers and a well-formed JSON response are key to resolving the session handling issue.