<?php
$con = mysqli_connect("localhost", "root", "", "w_list");
if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $listRow = "SELECT * FROM `list` WHERE id = '$id'";
    $listArr = mysqli_query($con, $listRow);
    $listArr = mysqli_fetch_assoc($listArr);

    $detail = $listArr["detail"];

    if (is_null($detail)) {
        $detail = "";
    }
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
    <link rel="stylesheet" href="../style.css">
    <title>Detail</title>

    <style>
        .card{
            background-color: #fdfdfd;
        }
    </style>
</head>

<body>
    <div class="d-flex m-5">
        <div class="hstack gap-3 ms-auto">
            <a href="#add" data-bs-toggle="modal" data-bs-target="#add">
                <i class="bi bi-pencil-square cc sc" style="font-size:26px;"></i>
            </a>
            <a href="../proccess.php/?id_del=<?= $id ?>">
                <i class="bi bi-trash sc" style="font-size:26px;"></i>
            </a>
            <a href="../index.php" class="mx-5">
                <i class="bi bi-x-circle cc" style="font-size:34px;"></i>
            </a>
        </div>
    </div>
    
    <div class="card m-5"">
        <div class="card-body">
            <div class="d-flex m-5">
                <div class="vstack">
                    <h3 class="title mb-2">
                        <?= $listArr["title"] ?>
                    </h3>
                    <p class="time mb-4">
                        <?= $listArr["time"] . ', ' . $listArr["date"] ?>
                    </p>
                    <p class="content">
                        <?= $listArr["detail"] ?>
                    </p>
                </div>
            </div>

            <div class="modal fade" id="add" tabindex="-1" aria-labelledby="AddList" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title mx-2" id="AddList">Edit TODO list</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="../proccess.php/?id=<?= $id ?>" method="post">
                            <div class="modal-body">
                                <div class="mb-3 mx-2">
                                    <label for="date" class="col-form-label">Date</label>
                                    <input value="<?= $listArr["date"] ?>" type="date" class="form-control" id="date" name="date" required>
                                </div>
                                <div class="mb-3 mx-2">
                                    <label for="time" class="col-form-label">Time</label>
                                    <input value="<?= $listArr["time"] ?>" type="time" class="form-control" id="time" name="time" required>
                                </div>
                                <div class="mb-3 mx-2">
                                    <label for="title" class="col-form-label">Title</label>
                                    <input value="<?= $listArr["title"] ?>" type="text" class="form-control" id="title" name="title" required>
                                </div>
                                <div class="mb-3 mx-2">
                                    <label for="note" class="col-form-label">Note</label>
                                    <textarea class="form-control" id="note" name="note"><?= $detail ?></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <input type="submit" class="btn btn-warning" value="Save"></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>