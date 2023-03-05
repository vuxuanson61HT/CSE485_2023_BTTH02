<?php
    function pdo(PDO $pdo, string $sql, array $arguments = null)
    {
        if (!$arguments) {                   // If no arguments
            // Nếu như k có arguments
            return $pdo->query($sql);        // Run SQL and return PDOStatement object
            // Chạy SQL và trả về đối tượng PDOStatement
        }
        $statement = $pdo->prepare($sql);    // If arguments prepare stat   ement
        // Nếu có argument thì chuẩn bị statement
        $statement->execute($arguments);     // Execute statement
        // Thực thi statement=
        return $statement;                   // Return PDOStatement object
        // Trả về đối tượng PDOStatement
    }
?>