<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>My Contact</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <!-- Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="container-fluid position-relative d-flex p-0">
      <!-- Spinner Start -->
      <div
        id="spinner"
        class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
      >
        <div
          class="spinner-border text-primary"
          style="width: 3rem; height: 3rem"
          role="status"
        >
          <span class="sr-only">Loading...</span>
        </div>
      </div>
      <!-- Spinner End -->

      <!-- Sidebar Start -->
      <div class="sidebar pe-4 pb-3">
        <nav class="navbar bg-secondary navbar-dark">
          <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary">
              <i class="fa fa-user-edit me-2"></i>CollegeApp
            </h3>
          </a>

          <div class="navbar-nav w-100">
            <a href="index.html" class="nav-item nav-link active"
              ><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a
            >
            <a href="" class="nav-item nav-link"
              ><i class="fa fa-keyboard me-2"></i>Colleges</a
            >
            <a href="table.html" class="nav-item nav-link"
              ><i class="fa fa-table me-2"></i>Students</a
            >
          </div>
        </nav>
      </div>
      <!-- Sidebar End -->

      <!-- Content Start -->
      <div class="content">
        <!-- Navbar Start -->
        <nav
          class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0"
        >
          <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
            <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
          </a>
          <a href="#" class="sidebar-toggler flex-shrink-0 mt-3 mb-3">
            <i class="fa fa-bars"></i>
          </a>
        </nav>
        <!-- Navbar End -->

        <div class="container-fluid pt-4 px-4" style="width: 90%">
          <div class="bg-secondary rounded h-100 p-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
              <h6 class="mb-0">Students Hoverable Table</h6>
              <button type="button" class="btn btn-primary">Add Student</button>
            </div>
            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Phone</th>
                  <th scope="col">Date Of Birth</th>
                  <th scope="col">College</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>mark@gmail.com</td>
                  <td>1234567890</td>
                  <td>01/01/2000</td>
                  <td>College 1</td>
                  <td class="text-end">
                    <a class="btn btn-sm btn-circle btn-primary mx-2" href=""
                      ><i class="bi bi-eye-fill"></i
                    ></a>
                    <a class="btn btn-sm btn-circle btn-danger mx-2" href=""
                      ><i class="bi bi-trash-fill"></i
                    ></a>
                    <a class="btn btn-sm btn-circle btn-success mx-2" href=""
                      ><i class="bi bi-pencil-fill"></i
                    ></a>
                  </td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>John</td>
                  <td>john@gmail.com</td>
                  <td>2345678901</td>
                  <td>02/02/2001</td>
                  <td>College 2</td>
                  <td class="text-end">
                    <a class="btn btn-sm btn-circle btn-primary mx-2" href=""
                      ><i class="bi bi-eye-fill"></i
                    ></a>
                    <a class="btn btn-sm btn-circle btn-danger mx-2" href=""
                      ><i class="bi bi-trash-fill"></i
                    ></a>
                    <a class="btn btn-sm btn-circle btn-success mx-2" href=""
                      ><i class="bi bi-pencil-fill"></i
                    ></a>
                  </td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Sarah</td>
                  <td>sarah@gmail.com</td>
                  <td>3456789012</td>
                  <td>03/03/2002</td>
                  <td>College 3</td>
                  <td class="text-end">
                    <a class="btn btn-sm btn-circle btn-primary mx-2" href=""
                      ><i class="bi bi-eye-fill"></i
                    ></a>
                    <a class="btn btn-sm btn-circle btn-danger mx-2" href=""
                      ><i class="bi bi-trash-fill"></i
                    ></a>
                    <a class="btn btn-sm btn-circle btn-success mx-2" href=""
                      ><i class="bi bi-pencil-fill"></i
                    ></a>
                  </td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td>Emily</td>
                  <td>emily@gmail.com</td>
                  <td>4567890123</td>
                  <td>04/04/2003</td>
                  <td>College 4</td>
                  <td class="text-end">
                    <a class="btn btn-sm btn-circle btn-primary mx-2" href=""
                      ><i class="bi bi-eye-fill"></i
                    ></a>
                    <a class="btn btn-sm btn-circle btn-danger mx-2" href=""
                      ><i class="bi bi-trash-fill"></i
                    ></a>
                    <a class="btn btn-sm btn-circle btn-success mx-2" href=""
                      ><i class="bi bi-pencil-fill"></i
                    ></a>
                  </td>
                </tr>
                <tr>
                  <th scope="row">5</th>
                  <td>Michael</td>
                  <td>michael@gmail.com</td>
                  <td>5678901234</td>
                  <td>05/05/2004</td>
                  <td>College 5</td>
                  <td class="text-end">
                    <a class="btn btn-sm btn-circle btn-primary mx-2" href=""
                      ><i class="bi bi-eye-fill"></i
                    ></a>
                    <a class="btn btn-sm btn-circle btn-danger mx-2" href=""
                      ><i class="bi bi-trash-fill"></i
                    ></a>
                    <a class="btn btn-sm btn-circle btn-success mx-2" href=""
                      ><i class="bi bi-pencil-fill"></i
                    ></a>
                  </td>
                </tr>
                <tr>
                  <th scope="row">6</th>
                  <td>Jessica</td>
                  <td>jessica@gmail.com</td>
                  <td>6789012345</td>
                  <td>06/06/2005</td>
                  <td>College 6</td>
                  <td class="text-end">
                    <a class="btn btn-sm btn-circle btn-primary mx-2" href=""
                      ><i class="bi bi-eye-fill"></i
                    ></a>
                    <a class="btn btn-sm btn-circle btn-danger mx-2" href=""
                      ><i class="bi bi-trash-fill"></i
                    ></a>
                    <a class="btn btn-sm btn-circle btn-success mx-2" href=""
                      ><i class="bi bi-pencil-fill"></i
                    ></a>
                  </td>
                </tr>
                <tr>
                  <th scope="row">7</th>
                  <td>David</td>
                  <td>david@gmail.com</td>
                  <td>7890123456</td>
                  <td>07/07/2006</td>
                  <td>College 7</td>
                  <td class="text-end">
                    <a class="btn btn-sm btn-circle btn-primary mx-2" href=""
                      ><i class="bi bi-eye-fill"></i
                    ></a>
                    <a class="btn btn-sm btn-circle btn-danger mx-2" href=""
                      ><i class="bi bi-trash-fill"></i
                    ></a>
                    <a class="btn btn-sm btn-circle btn-success mx-2" href=""
                      ><i class="bi bi-pencil-fill"></i
                    ></a>
                  </td>
                </tr>
                <tr>
                  <th scope="row">8</th>
                  <td>Laura</td>
                  <td>laura@gmail.com</td>
                  <td>8901234567</td>
                  <td>08/08/2007</td>
                  <td>College 8</td>
                  <td class="text-end">
                    <a class="btn btn-sm btn-circle btn-primary mx-2" href=""
                      ><i class="bi bi-eye-fill"></i
                    ></a>
                    <a class="btn btn-sm btn-circle btn-danger mx-2" href=""
                      ><i class="bi bi-trash-fill"></i
                    ></a>
                    <a class="btn btn-sm btn-circle btn-success mx-2" href=""
                      ><i class="bi bi-pencil-fill"></i
                    ></a>
                  </td>
                </tr>
                <tr>
                  <th scope="row">9</th>
                  <td>Daniel</td>
                  <td>daniel@gmail.com</td>
                  <td>9012345678</td>
                  <td>09/09/2008</td>
                  <td>College 9</td>
                  <td class="text-end">
                    <a class="btn btn-sm btn-circle btn-primary mx-2" href=""
                      ><i class="bi bi-eye-fill"></i
                    ></a>
                    <a class="btn btn-sm btn-circle btn-danger mx-2" href=""
                      ><i class="bi bi-trash-fill"></i
                    ></a>
                    <a class="btn btn-sm btn-circle btn-success mx-2" href=""
                      ><i class="bi bi-pencil-fill"></i
                    ></a>
                  </td>
                </tr>
                <tr>
                  <th scope="row">10</th>
                  <td>Sophia</td>
                  <td>sophia@gmail.com</td>
                  <td>0123456789</td>
                  <td>10/10/2009</td>
                  <td>College 10</td>
                  <td class="text-end">
                    <a class="btn btn-sm btn-circle btn-primary mx-2" href=""
                      ><i class="bi bi-eye-fill"></i
                    ></a>
                    <a class="btn btn-sm btn-circle btn-danger mx-2" href=""
                      ><i class="bi bi-trash-fill"></i
                    ></a>
                    <a class="btn btn-sm btn-circle btn-success mx-2" href=""
                      ><i class="bi bi-pencil-fill"></i
                    ></a>
                  </td>
                </tr>
                <tr>
                  <th scope="row">11</th>
                  <td>James</td>
                  <td>james@gmail.com</td>
                  <td>1234509876</td>
                  <td>11/11/2010</td>
                  <td>College 11</td>
                  <td class="text-end">
                    <a class="btn btn-sm btn-circle btn-primary mx-2" href=""
                      ><i class="bi bi-eye-fill"></i
                    ></a>
                    <a class="btn btn-sm btn-circle btn-danger mx-2" href=""
                      ><i class="bi bi-trash-fill"></i
                    ></a>
                    <a class="btn btn-sm btn-circle btn-success mx-2" href=""
                      ><i class="bi bi-pencil-fill"></i
                    ></a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="container-fluid pt-4 pb-4 px-4" style="width: 50%">
          <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-4">Add a New Student</h6>
            <form>
              <!-- First Row: Name and Email -->
              <div class="row mb-3">
                <div class="col-md-6">
                  <div class="form-floating">
                    <input
                      type="text"
                      class="form-control"
                      id="floatingName"
                      placeholder="Name"
                    />
                    <label for="floatingName">Name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input
                      type="email"
                      class="form-control"
                      id="floatingEmail"
                      placeholder="Email"
                    />
                    <label for="floatingEmail">Email</label>
                  </div>
                </div>
              </div>

              <!-- Second Row: Phone and Date of Birth -->
              <div class="row mb-3">
                <div class="col-md-6">
                  <div class="form-floating">
                    <input
                      type="tel"
                      class="form-control"
                      id="floatingPhone"
                      placeholder="Phone"
                    />
                    <label for="floatingPhone">Phone</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating position-relative">
                    <input
                      type="text"
                      class="form-control flatpickr-input"
                      style="background-color: #000 !important"
                      id="floatingDOB"
                      placeholder="Date of Birth"
                    />
                    <label for="floatingDOB">Date of Birth</label>
                    <!-- Custom Calendar Icon -->
                    <span
                      class="position-absolute top-50 end-0 translate-middle-y me-3"
                    >
                      <i
                        class="bi bi-calendar"
                        id="datePickerIcon"
                        style="cursor: pointer"
                      ></i>
                    </span>
                  </div>
                </div>
              </div>

              <!-- Third Row: College Selector -->
              <div class="row mb-3">
                <div class="col-md-12">
                  <div class="form-floating">
                    <select
                      class="form-select"
                      id="floatingCollege"
                      aria-label="Floating label select example"
                    >
                      <option selected>Open this select menu</option>
                      <option value="1">College 1</option>
                      <option value="2">College 2</option>
                      <option value="3">College 3</option>
                      <option value="4">College 4</option>
                      <option value="5">College 5</option>
                    </select>
                    <label for="floatingCollege">College</label>
                  </div>
                </div>
              </div>

              <!-- Submit Button -->
              <div class="row">
                <div class="col-md-12">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </div>
            </form>
          </div>
        </div>

        <div class="container-fluid pt-4 pb-4 px-4" style="width: 90%">
          <div class="row g-4">
            <div class="col-sm-12 col-xl-6">
              <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Colleges Hoverable Table</h6>
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Name</th>
                      <th scope="col">Address</th>
                      <th scope="col"></th>
                      <!-- Align header to the right -->
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mcast</td>
                      <td>Paola</td>
                      <td class="text-end">
                        <!-- Align content to the right -->

                        <a class="btn btn-sm btn-circle btn-danger mx-2" href=""
                          ><i class="bi bi-trash-fill"></i
                        ></a>
                        <a
                          class="btn btn-sm btn-circle btn-success mx-2"
                          href=""
                          ><i class="bi bi-pencil-fill"></i
                        ></a>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Junior College</td>
                      <td>Msida</td>
                      <td class="text-end">
                        <!-- Align content to the right -->

                        <a class="btn btn-sm btn-circle btn-danger mx-2" href=""
                          ><i class="bi bi-trash-fill"></i
                        ></a>
                        <a
                          class="btn btn-sm btn-circle btn-success mx-2"
                          href=""
                          ><i class="bi bi-pencil-fill"></i
                        ></a>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Higher</td>
                      <td>Naxxar</td>
                      <td class="text-end">
                        <!-- Align content to the right -->

                        <a class="btn btn-sm btn-circle btn-danger mx-2" href=""
                          ><i class="bi bi-trash-fill"></i
                        ></a>
                        <a
                          class="btn btn-sm btn-circle btn-success mx-2"
                          href=""
                          ><i class="bi bi-pencil-fill"></i
                        ></a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="col-sm-12 col-xl-6">
              <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Add a New College</h6>
                <form>
                  <div class="form-floating mb-3">
                    <input
                      type="name"
                      class="form-control"
                      id="floatingInput"
                      placeholder="College Name"
                    />
                    <label for="floatingInput">Name</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input
                      type="address"
                      class="form-control"
                      id="floatingAddress"
                      placeholder="Address"
                    />
                    <label for="floatingAddress">Address</label>
                  </div>

                  <!-- <div class="form-floating mb-3">
                  <select
                    class="form-select"
                    id="floatingSelect"
                    aria-label="Floating label select example"
                  >
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                  <label for="floatingSelect">Works with selects</label>
                </div> -->

                  <button type="submit" class="btn btn-primary">Create</button>
                </form>
              </div>
            </div>
          </div>
        </div>
    @yield('content')

      </div>
      <!-- Content End -->
    </div>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

  </body>
</html>