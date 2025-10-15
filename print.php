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
        "orderCode" => "AF-2025-01-04",
        "orderDate" => "2025-01-04 15:30:33",
        "orderAmount" => 0,
        "orderStatus" => "order"
    ],
];

$id = $_GET['id'];

if (!$id) {
    die("Parameter ID tidak ditemukan.");
}

$resultOrder = array_filter($shops, function ($shop) use ($id) {
    return $shop['id'] == $id;
});

$resultOrder = array_values($resultOrder);

if (count($resultOrder) === 0) {
    die("Order tidak ditemukan.");
}

$order = $resultOrder[0];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Receipt</title>
    <style>
    @media print {
        body {
            font-family: 'Courier New', Courier, monospace;
            font-size: 12px;
        }

        .table-bordered,
        .table th,
        .table td {
            display: none;
        }

        #receipt-container {
            display: block;
            width: 58mm;
            margin: 0;
            padding: 5px;
        }

        #receipt-container * {
            visibility: visible;
        }

        #receipt-container table {
            width: 100%;
            border-collapse: collapse;
        }

        #receipt-container th,
        #receipt-container td {
            padding: 1px 0;
            border: none !important;
        }

        #receipt-container h5,
        #receipt-container p {
            text-align: center;
            margin: 0;
        }

        .text-center {
            text-align: center;
        }

        .text-right {
            text-align: right;
        }

        .text-bold {
            font-weight: bold;
        }
    }
    </style>
</head>

<body>
    <div id="receipt-container">
        <h5 class="text-center">Receipt</h5>
        <p class="text-center">Resto Chrispy</p>
        <p>-------------------------------------</p>
        <p>Order Code : <?= $order['orderCode'] ?></p>
        <p>Tanggal : <?= $order['orderDate'] ?></p>
        <p>-------------------------------------</p>
        <table>
            <thead>
                <tr>
                    <th>Item</th>
                    <th>Qty</th>
                    <th>Price</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td class="text-right"></td>
                    <td class="text-right"></td>
                    <td class="text-right"></td>
                </tr>
            </tbody>
        </table>
        <p>-------------------------------------</p>
        <div class="text-center">
            <pre>Total:     Rp. <?= number_format($order['orderAmount'], 2, ",", ".") ?></pre>
            <pre>Bayar:     Rp. </pre>
            <pre>Kembalian  Rp. </pre>
        </div>
        <p>-------------------------------------</p>
        <p class="text-center text-bold">Terimakasih Telah Berbelanja!</p>
    </div>

    <script>
    window.print();
    </script>
</body>

</html>