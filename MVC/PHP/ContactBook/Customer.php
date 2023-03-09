<?php
class customer
{
    function new_customer()
    {
        echo "New Customer: " . $_POST['name'];
    }

    function edit_customer()
    {
    }

    function delete_customer()
    {
        echo "Delete Customer: " . $_POST['name'];
    }
}

// -------------------------------------------------------

$type = $_POST['type'];
$customer = new customer();
if ($type == "new")
    $customer->new_customer();
else if($type == "delete")
    $customer->delete_customer();
