@extends('layouts.main')

@section('content')
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
@endsection