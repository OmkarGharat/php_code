<?php
// * we are creating a CRUD App
// * CRUD stands for Create , Read , Update , Delete 
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"> -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">

    <title>CRUD App</title>
</head>

<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "MyNotes";

// create a connection

$connection = mysqli_connect($servername, $username, $password, $database);

if(isset($_GET['delete'])){
    $sno = $_GET['delete'];
    $delete = true;
    $sql = "DELETE FROM `notestable` WHERE `sno` = $sno";
    $result = mysqli_query($connection, $sql);
  }

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

if (isset($_POST['insertdata'])) {

    $title = $_POST['title'];
    $description = $_POST['description'];

    $sql = "INSERT INTO `notestable` (`title`, `description`) VALUES ('$title', '$description')";

    $result = mysqli_query($connection, $sql);

    if ($result) {
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
            The value has been Inserted Successfully.
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
          </div>";
    } else {
        echo "The Value has not been inserted because <br>";
        echo mysqli_error($connection);
    }
} 

if (isset($_POST['updatedata'])) {

    $sno = $_POST["snoEdit"]; 
    $title = $_POST["titleEdit"];
    $description = $_POST["descriptionEdit"];

    echo "the value of sno = >". $sno ."<  <br>";
    echo $title;
    echo $description;

    $sql = "UPDATE `notestable` SET `title` = '$title', `description` = '$description' WHERE `notestable`.`sno` = '$sno' ";

    $result = mysqli_query($connection, $sql);   

    if ($result) {
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                    <strong>Success!</strong> The MOdal value has been Updated using UPDATE statement.
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                  </div>";
    } else {
        echo "The Modal Value has not been Updated";
        echo mysqli_error($connection);
    }
}
}

?>

<body>

    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/PHP_codes/SQL Query/PHP_CRUD_APP/index.php" method="POST">
                        <input type="hidden" name="snoEdit" id="snoEdit">
                        <div class="mb-4">
                            <label for="title" class="form-label">Note</label>
                            <input type="text" class="form-control" id="titleEdit" name="titleEdit" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="desc" class="mb-3">Description</label>
                            <textarea class="form-control" id="descriptionEdit" name="descriptionEdit" style="height: 100px"></textarea>
                        </div>

                        <div class="modal-footer" style="display : flex; justify-content:center">                            
                            <button type="submit" id="updatedata" name="updatedata" class="btn btn-primary">Save Note</button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>               
            </div>
        </div>
    </div>

    <div class="container heading">
        <h1 class="my-4 p-3" style="display : flex; justify-content: center">CRUD App<h1>
    </div>

    <div class="container" style="width: 900px">
        <h2 class="my-4">Add a Note here</h2>

        <form action="/PHP_codes/SQL Query/PHP_CRUD_APP/index.php" method="POST">
            <div class="mb-4">
                <label for="title" class="form-label">Note</label>
                <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="desc" class="mb-3">Description</label>
                <textarea class="form-control" id="description" name="description" style="height: 100px"></textarea>
            </div>

            <button type="submit" id="insertdata" name="insertdata" class="btn btn-primary">Add Note</button>
        </form>
    </div>

    <div class="container" style="width: 900px; margin-top: 5rem; margin-bottom: 5rem;">
        <table class="table" id="myTable">
            <thead>
                <tr>
                    <th scope="col">S.No</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM `notestable`";
                $result = mysqli_query($connection, $sql);
                $sno = 0;
                while ($row = mysqli_fetch_assoc($result)) {
                    $sno = $sno + 1;
                    echo "<tr>
            <th scope='row'>" . $sno . "</th>
            <td class='titleText'>" . $row['title'] . "</td>
            <td class='descriptionText'>" . $row['description'] . "</td>
            <td> <button class='edit btn btn-sm btn-primary'                  
            id=" . $row['sno'] . ">Edit</button> 
            <button class='delete btn btn-sm btn-danger' id=d" . $row['sno'] . ">Delete</button>  </td>
          </tr>";
                }
                ?>


            </tbody>
        </table>
    </div>


    <script>
        let editModal = document.getElementsByClassName('edit');
        Array.from(editModal).forEach((element) => {
            element.addEventListener('click', (e) => {

                tr = e.target.parentNode.parentNode;
                title = tr.getElementsByTagName("td")[0].innerText;
                description = tr.getElementsByTagName("td")[1].innerText;

                titleEdit.value = title;
                descriptionEdit.value = description;

                snoEdit.value = e.target.id;

                var myModal = new bootstrap.Modal(document.getElementById('editModal'), {
                    keyboard: false
                })
                myModal.toggle(); // opens the module , when click on "edit" button

            })
        })

        deletes = document.getElementsByClassName('delete');
        Array.from(deletes).forEach((element) => {
            element.addEventListener("click", (e) => {
                console.log("edit ");
                sno = e.target.id.substr(1);

                if (confirm("Are you sure you want to delete this note!")) {
                    console.log("yes");
                    window.location = `/PHP_codes/SQL Query/PHP_CRUD_APP/index.php?delete=${sno}`;
                    // TODO: Create a form and use post request to submit a form
                } else {
                    console.log("no");
                }
            })
        })
    </script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>

</body>

</html>