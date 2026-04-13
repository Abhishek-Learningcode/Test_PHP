<?php
include "db.php";



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
                            <a class="nav-link active" href="#" aria-current="page"
                                >Home
                                <span class="visually-hidden">(current)</span></a
                            >
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="dash.php">BOOK DASHBOARD</a>
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
                <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                        <li
                            data-bs-target="#carouselId"
                            data-bs-slide-to="0"
                            class="active"
                            aria-current="true"
                            aria-label="First slide"
                        ></li>
                        <li
                            data-bs-target="#carouselId"
                            data-bs-slide-to="1"
                            aria-label="Second slide"
                        ></li>
                        <li
                            data-bs-target="#carouselId"
                            data-bs-slide-to="2"
                            aria-label="Third slide"
                        ></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img
                                src="https://img.freepik.com/premium-photo/many-old-books-bookshelf-library_129479-5458.jpg?semt=ais_hybrid&w=740&q=80"
                                class="w-100 d-block"
                                alt="First slide"
                                style="heigth: 100px; object fit:cover"
                            />
                        </div>
                        <div class="carousel-item">
                            <img
                                src="https://images.unsplash.com/photo-1568667256549-094345857637?fm=jpg&q=60&w=3000&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8bGlicmFyaWVzfGVufDB8fDB8fHww"
                                class="w-100 d-block"
                                alt="Second slide"
                                style="heigth: 100px; object-fit:cover"
                            />
                        </div>
                        <div class="carousel-item">
                            <img
                                src="https://images.freeimages.com/images/large-previews/701/my-university-library-3-1442034.jpg"
                                class="w-100 d-block"
                                alt="Third slide"
                                style="heigth: 100px; object-fit:cover"
                            />
                        </div>
                    </div>
                    <button
                        class="carousel-control-prev"
                        type="button"
                        data-bs-target="#carouselId"
                        data-bs-slide="prev"
                    >
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button
                        class="carousel-control-next"
                        type="button"
                        data-bs-target="#carouselId"
                        data-bs-slide="next"
                    >
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                
            </div>

           <

           
            
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

