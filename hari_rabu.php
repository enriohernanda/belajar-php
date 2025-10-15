<?php
$datas = [
    [
        "Id" => 1,
        "Order_Code" => "AB-2025-01-02",
        "Order_Date" => "2025-01-02 08:17:11",
        "Order_Amount" => 56000,
        "Order_Status" => "payment",
        "Actions" => "Print Struk"
    ],
    [
        "Id" => 2,
        "Order_Code" => "AC-2025-01-02",
        "Order_Date" => "2025-01-02 08:50:33",
        "Order_Amount" => 70000,
        "Order_Status" => "payment",
        "Actions" => "Print Struk"
    ],
    [
        "Id" => 3,
        "Order_Code" => "AD-2025-01-02",
        "Order_Date" => "2025-01-02 10:50:33",
        "Order_Amount" => 0,
        "Order_Status" => "order",
        "Actions" => "Print Struk"
    ],
    [
        "Id" => 4,
        "Order_Code" => "AE-2025-01-02",
        "Order_Date" => "2025-01-02 15:30:33",
        "Order_Amount" => 40000,
        "Order_Status" => "payment",
        "Actions" => "Print Struk"
    ],
    [
        "Id" => 5,
        "Order_Code" => "AF-2025-01-02",
        "Order_Date" => "2025-01-04 15:30:33",
        "Order_Amount" => 0,
        "Order_Status" => "order",
        "Actions" => "Print Struk"
    ]
];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-center mt-3">
            <div class="col-9">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Order Code</th>
                            <th>Order Date</th>
                            <th>Order Amount</th>
                            <th>Order Status</th>
                            <th>Actions</th>
                        </tr>
                        <?php
                        foreach ($datas as $key => $data) {
                        ?>
                            <tr>
                                <td><?php echo $data['Id'] ?></td>
                                <td><?php echo $data['Order_Code'] ?></td>
                                <td><?php echo $data['Order_Date'] ?></td>
                                <td class="text-start"> Rp. <?php echo number_format($data['Order_Amount'], 2, ',', '.') ?>
                                </td>
                                <td
                                    class="bg-<?php echo $data['Order_Status'] == "order" ? 'warning' : 'success' ?> text-withite">
                                    <!-- Change class based on status -->
                                    <?php echo $data['Order_Status'] ?>
                                </td>
                                <td>
                                    <a href="print.php?idPrint=<?php echo $data['Id'] ?>" target="_blank"
                                        class="btn btn-danger">Print</a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </thead>
                </table>
            </div>
        </div>
    </div>
    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>