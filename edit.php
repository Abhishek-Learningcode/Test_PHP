<?php
include "db.php";
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql=$conn->prepare("select * from valid1 where id=?");
    $sql->bind_param('i',$id);
    $sql->execute();
    $user=$sql->get_result()->fetch_assoc();
    
}


?>

<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS v5.3.8 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>
            <div
                class="container mt-5 col-5 rounded shadow"
            >
                <form action="" method="POST">
                    <div class="form-floating mb-3">
                        <input
                            type="text"
                            class="form-control"
                            name="bt"
                            id="formId1"
                            placeholder=""
                            value="<?= $user['booktitle']?>"
                        />
                        <label for="formId1">Book Title</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input
                            type="text"
                            class="form-control"
                            name="an"
                            id="formId1"
                            placeholder=""
                             value="<?= $user['authorname']?>"
                        />
                        <label for="formId1">Author Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input
                            type="text"
                            class="form-control"
                            name="gen"
                            id="formId1"
                            placeholder=""
                             value="<?= $user['genre']?>"
                        />
                        <label for="formId1">Genre</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input
                            type="text"
                            class="form-control"
                            name="tc"
                            id="formId1"
                            placeholder=""
                             value="<?= $user['totalcopies']?>"
                        />
                        <label for="formId1">Total Copies</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input
                            type="text"
                            class="form-control"
                            name="ac"
                            id="formId1"
                            placeholder=""
                             value="<?= $user['availablecopies']?>"
                        />
                        <label for="formId1"> Available Copies
</label>
                    </div>
                    <button
                        type="submit"
                        class="btn btn-primary"
                    >
                        submit
                    </button>
                    
                    
                    
                    
                </form>
            </div>
           
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
