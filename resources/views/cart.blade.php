<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
    <link rel="stylesheet" href="{{url('css\cart.css')}}">
  </head>
  <body>
    <header>
     <nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">Online-Store Testing</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="http://127.0.0.1:8000/order">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="link.html">Cart</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a href="http://127.0.0.1:8000/detail" class="dropdown-item">Details</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </li>
                
              </ul>
              <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            </div>
          </div>
        </nav>
    </header>
    <main class="my-5">
     <div class="container">
          <div class="row">
               <div class="col-md-7">
                
                    <!-- <img  src="\images\1.jpg" style="border-radius: 10px; height:177px;" alt="" class="img-fluid">
                    <img src="https://p4.wallpaperbetter.com/wallpaper/698/474/361/dinner-food-pie-pizza-wallpaper-preview.jpg" style="border-radius: 10px; height:177px;" alt="" class="img-fluid">
                    <img src="https://assets.bonappetit.com/photos/57ad5452f1c801a1038bcb97/master/pass/perfect-porterhouse-steak.jpg" style="border-radius: 10px; height:177px; width:283px;" alt="" class="img-fluid"> -->
                    <img src="https://www.jaridatakhbarak.com/wp-content/uploads/2021/11/easy-baked-stuffed-lobster-recipe-1808994-hero-01-f8ec7396623d4d4eaf49d73a4bd9795c-scaled.jpg" style="border-radius: 10px; " alt="" class="img-fluid">
               </div>
               <div class="col-md-5 text-white">
                    <h1 class="mt-5">More Options</h1>
                    <p class="mt-4">
                         Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                          Expedita nostrum similique, eligendi quod eos, tenetur pariatur optio, 
                          ipsa fugit odit hic doloribus sit impedit sequi cupiditate accusamus nam at deleniti.
                    </p>
                    <button type="button" class="btn btn-primary mt-3"> Read More</button>
               </div>
          </div>
          <div class="row my-5">
               <div class="col">
                    <div class="bg-info text-white my-3 py-3 container text-center">
                         <div class="card-body">
                              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis eos officiis placeat rem magnam?
                          Voluptas eveniet laboriosam eius assumenda officiis corporis tempore recusandae aut explicabo.
                           Nostrum deleniti inventore officia ducimus.
                         </div>
                         
                    </div>
               </div>
          </div>
          <!-- card-group start -->
          <div class="row">
               <div class="col">
                    <div class="card-group">
                         <div class="card">
                           <img src="https://wallpapercave.com/wp/wp8202427.jpg" class="card-img-top" alt="...">
                           <div class="card-body">
                             <h5 class="card-title">Card title</h5>
                             <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                             <br>
                             <div class="text-center">
                              <button type="button" class="btn btn-primary mt-3"> Read More</button>
                             </div>
                           </div>
                         </div>
                         <div class="card">
                           <img src="https://images.unsplash.com/photo-1532980400857-e8d9d275d858?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8Zm9vZCUyMHBob3RvZ3JhcGh5fGVufDB8fDB8fA%3D%3D&w=1000&q=80" class="card-img-top" alt="...">
                           <div class="card-body">
                             <h5 class="card-title">Card title</h5>
                             <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                             <br>
                             <div class="text-center">
                              <button type="button" class="btn btn-primary mt-3"> Read More</button>
                             </div>
                           </div>
                         </div>
                         <div class="card">
                           <img src="https://c4.wallpaperflare.com/wallpaper/209/721/107/food-burger-wallpaper-preview.jpg" class="card-img-top" alt="...">
                           <div class="card-body">
                             <h5 class="card-title">Card title</h5>
                             <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                             <br>
                             <div class="text-center">
                              <button type="button" class="btn btn-primary mt-3"> Read More</button>
                             </div>
                           </div>
                         </div>
                         <div class="card">
                           <img src="https://c4.wallpaperflare.com/wallpaper/209/721/107/food-burger-wallpaper-preview.jpg" class="card-img-top" alt="...">
                           <div class="card-body">
                             <h5 class="card-title">Card title</h5>
                             <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                             <br>
                             <div class="text-center">
                              <button type="button" class="btn btn-primary mt-3"> Read More</button>
                             </div>
                           </div>
                         </div>
                         
                       </div>
               </div>
          </div>
          <br>
          <div class="row">
               <div class="col">
                    <div class="card-group">
                         <div class="card">
                           <img src="https://wallpapercave.com/wp/wp8202427.jpg" class="card-img-top" alt="...">
                           <div class="card-body">
                             <h5 class="card-title">Card title</h5>
                             <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                             <br>
                             <div class="text-center">
                              <button type="button" class="btn btn-primary mt-3"> Read More</button>
                             </div>
                           </div>
                         </div>
                         <div class="card">
                           <img src="https://images.unsplash.com/photo-1532980400857-e8d9d275d858?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8Zm9vZCUyMHBob3RvZ3JhcGh5fGVufDB8fDB8fA%3D%3D&w=1000&q=80" class="card-img-top" alt="...">
                           <div class="card-body">
                             <h5 class="card-title">Card title</h5>
                             <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                             <br>
                             <div class="text-center">
                              <button type="button" class="btn btn-primary mt-3"> Read More</button>
                             </div>
                           </div>
                         </div>
                         <div class="card">
                           <img src="https://c4.wallpaperflare.com/wallpaper/209/721/107/food-burger-wallpaper-preview.jpg" class="card-img-top" alt="...">
                           <div class="card-body">
                             <h5 class="card-title">Card title</h5>
                             <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                             <br>
                             <div class="text-center">
                              <button type="button" class="btn btn-primary mt-3"> Read More</button>
                             </div>
                           </div>
                         </div>
                         <div class="card">
                           <img src="https://c4.wallpaperflare.com/wallpaper/209/721/107/food-burger-wallpaper-preview.jpg" class="card-img-top" alt="...">
                           <div class="card-body">
                             <h5 class="card-title">Card title</h5>
                             <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                             <br>
                             <div class="text-center">
                              <button type="button" class="btn btn-primary mt-3"> Read More</button>
                             </div>
                           </div>
                         </div>
                         
                       </div>
               </div>
          </div>

          <!-- Register Form start -->
          <div class="row my-3 bg-info "  style="border-radius: 10px";>
               <h1 class="text-center ">Register Form</h1>
               <form class="row g-3">
                    <div class="col-md-6">
                      <label for="inputEmail4" class="form-label">Email</label>
                      <input type="email" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                      <label for="inputPassword4" class="form-label">Password</label>
                      <input type="password" class="form-control" id="inputPassword4">
                    </div>
                    <div class="col-12">
                      <label for="inputAddress" class="form-label">Address</label>
                      <input type="text" class="form-control" id="inputAddress" placeholder="Enter Your Address">
                    </div>
                    <!-- <div class="col-12">
                      <label for="inputAddress2" class="form-label">Address 2</label>
                      <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                    </div> -->
                    <div class="col-md-6">
                      <label for="inputCity" class="form-label">City</label>
                      <input type="text" class="form-control" id="inputCity">
                    </div>
                    <div class="col-md-4">
                      <label for="inputState" class="form-label">State</label>
                      <select id="inputState" class="form-select">
                        <option selected>Choose...</option>
                        <option>...</option>
                      </select>
                    </div>
                    <div class="col-md-2">
                      <label for="inputZip" class="form-label">Zip</label>
                      <input type="text" class="form-control" id="inputZip">
                    </div>
                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                          Check me out
                        </label>
                      </div>
                    </div>
                    <div class="col-12 text-center">
                      <button  type="submit" class="btn btn-primary mb-3" style="width:50% ;">Sign in</button>
                    </div>
                  </form>
          </div>
          
     </div>
    </main>
     <footer class="footer  py-3 text-center bg-light">
          <div class="container">
            <span class="text-muted">CopyRight:Kyaw Zin Lin</span>
          </div>
        </footer>
    


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>