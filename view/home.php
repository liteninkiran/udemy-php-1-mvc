<?php include "inc/header.php"; ?>

    <table class="tblone">
    
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>
<?php

        $i = 0;

        foreach ($user as $key => $value)
        {

            $i++;
?>
            <tr>
                <td><?php echo $value['id']; ?></td>
                <td><?php echo $value['full_name']; ?></td>
                <td><?php echo $value['email']; ?></td>
                <td><?php echo $value['phone']; ?></td>
            </tr>
<?php
        }
?>

    </table>

<?php include "inc/footer.php"; ?>

