<?php
include "db.php";
$result=$conn->query("select * from valid1");


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
                            <a class="nav-link active" href="dash.php">BOOK DASHBOARD</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="addbook.php">Add Book</a>
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
                class="container"
            >
               <form action="" method="POST">
                <div
                    class="table-responsive"
                >
                    <table
                        class="table table-primary"
                    >
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Book Title</th>
                                <th scope="col">Author Name</th>
                                 <th scope="col">Genre</th>
                                  <th scope="col">Total Copies</th>
                                   <th scope="col">Available Copies</th>
                                    <th scope="col">ACTION</th>
                                     <th scope="col">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                           <?php
                           while ($row=$result->fetch_assoc()) {
                           ?>
                           <tr>
                            <td><?= $row['id']?></td>
                            <td><?= $row['booktitle']?></td>
                            <td><?= $row['authorname']?></td>
                            <td><?= $row['genre']?></td>
                            <td><?= $row['totalcopies']?></td>
                            <td><?= $row['availablecopies']?></td>
                            <td><a href="edit.php?id=<?= $row['id']?>">edit</a></td>
                            <td><a href="delete.php?id=<?= $row['id']?>">delete</a></td>
                           </tr>
                           <?php }?>
                        </tbody>
                    </table>
                </div>
                
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
