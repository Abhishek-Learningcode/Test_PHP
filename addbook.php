<?php
include "db.php";
if($_SERVER['REQUEST_METHOD']==="POST"){
    $bt=$_POST['bt'];
    $an=$_POST['an'];
    $gen=$_POST['gen'];
    $tc=$_POST['tc'];
    $ac=$_POST['ac'];
    $sql=$conn->prepare("insert into valid1(booktitle,authorname,genre,totalcopies,availablecopies) values(?,?,?,?,?)");
    $sql->bind_param('sssss',$bt,$an,$gen,$tc,$ac);
    if($sql->execute()){
        header("Location:dash.php");
    }

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
              <nav
            class="navbar navbar-expand-sm navbar-dark bg-black"
          >
            <div class="container">
                <a class="navbar-brand" href="#">Hello <?= $_SESSION['uname']?></a>
                <button
                    class="navbar-toggler d-lg-none"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavId"
                    aria-controls="collapsibleNavId"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link " href="home.php" aria-current="page"
                                >Home
                                <span class="visually-hidden">(current)</span></a
                            >
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="dash.php">BOOK DASHBOARD</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="addbook.php">Add Book</a>
                        </li>
                       
                    </ul>
                    <form class="d-flex my-2 my-lg-0">
                        
                        <a
                            name=""
                            id=""
                            class="btn btn-primary"
                            href="logout.php"
                            role="button"
                            >Logout</a
                        >
                        
                    </form>
                </div>
            </div>
          </nav>
       
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
