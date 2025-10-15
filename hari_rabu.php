<?php
$shops = [
    [
        "id" => 1,
        "orderCode" => "AB-2025-01-02",
        "orderDate" => "2025-01-02 08:17:11",
        "orderAmount" => 56000,
        "orderStatus" => "payment"
    ],
    [
        "id" => 2,
        "orderCode" => "AC-2025-01-02",
        "orderDate" => "2025-01-02 08:50:33",
        "orderAmount" => 70000,
        "orderStatus" => "payment"
    ],
    [
        "id" => 3,
        "orderCode" => "AD-2025-01-02",
        "orderDate" => "2025-01-02 10:50:33",
        "orderAmount" => 0,
        "orderStatus" => "order"
    ],
    [
        "id" => 4,
        "orderCode" => "AE-2025-01-02",
        "orderDate" => "2025-01-02 15:30:33",
        "orderAmount" => 40000,
        "orderStatus" => "payment"
    ],
    [
        "id" => 5,
        "orderCode" => "AF-2025-01-02",
        "orderDate" => "2025-01-04 15:30:33",
        "orderAmount" => 0,
        "orderStatus" => "order"
    ],
]

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    table td {
        padding: 5px;
    }

    table td button {
        background-color: #ff0000;
        padding: 2px;
        width: 60px;
        cursor: pointer;
        color: white;
    }

    .payment {
        background-color: #00a700ff;
    }

    .order {
        background-color: #ffff00;
    }
</style>

<body>
    <table border="1">
        <tr>
            <th>No.</th>
            <th>Order Code</th>
            <th>Order Date</th>
            <th>Order Amount</th>
            <th>Order Status</th>
            <th>Actions</th>
        </tr>
        <?php
        foreach ($shops as $key => $shop) {
        ?>
            <?php
            $status = "";
            if ($shop['orderStatus'] === "payment") {
                $status = "payment";
            } elseif ($shop["orderStatus"] === "order") {
                $status = "order";
            }
            ?>
            <tr>
                <td style="text-align: center;"><?= $shop['id'] ?></td>
                <td><?= $shop['orderCode'] ?></td>
                <td><?= $shop['orderDate'] ?></td>
                <td>Rp. <?= number_format($shop['orderAmount'], 2, ",", ".") ?></td>
                <td style="text-align: center;" class="<?= $status ?>"><?= $shop['orderStatus'] ?></td>
                <td style="padding: 10px;">
                    <a href="print.php?id=<?= $shop['id'] ?>" target="_blank" style="text-decoration:none; color:inherit;">
                        <button>PRINT STRUK</button>
                    </a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>