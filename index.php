<?php
$con = mysqli_connect("localhost", "root", "", "w_list");

if (isset($_GET["search"]) and $_GET["searchtitle"] !== "") {
    $title = $_GET["searchtitle"];
    $getList = "SELECT * FROM list WHERE `date` = '$title'";
    $list = mysqli_query($con, $getList);
} else {
    $getList = "SELECT * FROM list";
    $list = mysqli_query($con, $getList);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./style.css">
    <title>TODO list</title>
</head>

<body>
    <form action="./index.php" method="get">
        <div class="hstack gap-5 m-5">
            <h3 class="header-title">TODO List</h3>

            <div class="hstack gap-2 ms-auto">
                <input class="form-control form-control-sm" type="date" placeholder="Search title" name="searchtitle">
                <button class="btn btn-default btn-search" type="submit" name="search"><i class="bi bi-funnel"></i></button>
            </div>
        </div>
    </form>

    <div class="container-fluid px-5">
        <table class="table table-hover align-middle">
            <thead class="table-warning">
                <tr>
                    <th class="p-3" scope="col col-3">Time and Date</th>
                    <th class="p-3" scope="col">Title</th>
                    <th class="p-3" scope="col col-1"></th>
                </tr>
            </thead>

            <tbody>

                <?php

                if ($list) {
                    if (mysqli_num_rows($list) > 0) {
                        while ($row = mysqli_fetch_assoc($list)) {
                            $id = $row["id"];
                ?>

                            <tr onclick="window.location='./detail.php/?id=<?= $id ?>';">
                                <th class="p-3 col col-2 time-table" scope="row"><?= $row["time"] ?><div class="vr mx-2"></div><?= $row["date"] ?></th>
                                <td class="p-3"><?= $row["title"] ?></td>
                                <td class="p-3 col-1 text-center"><a href="./proccess.php/?id_del=<?= $id ?>"><i class="bi bi-trash"></i></a></td>
                            </tr>

                <?php
                        }
                    }
                }
                ?>
            </tbody>
        </table>
    </div>

    <div class="container btn-sticky">
        <div class="row justify-content-center">
            <div class="col-1">
                <a href="#add" data-bs-toggle="modal" data-bs-target="#add">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48px" fill="currentColor" class="bi bi-plus float-btn h-auto icon-flipped" viewBox="0 0 16 16">
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <div class="modal fade" id="add" tabindex="-1" aria-labelledby="AddList" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mx-2" id="AddList">Add TODO</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="./proccess.php" method="post">
                    <div class="modal-body">
                        <div class="mb-3 mx-2">
                            <label for="date" class="col-form-label">Date</label>
                            <input type="date" class="form-control" id="date" name="date" required>
                        </div>
                        <div class="mb-3 mx-2">
                            <label for="time" class="col-form-label">Time</label>
                            <input type="time" class="form-control" id="time" name="time" required>
                        </div>
                        <div class="mb-3 mx-2">
                            <label for="title" class="col-form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" required>
                        </div>
                        <div class="mb-3 mx-2">
                            <label for="note" class="col-form-label">Note</label>
                            <textarea class="form-control" id="note" name="note"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-warning" value="Save" name="submit"></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>
