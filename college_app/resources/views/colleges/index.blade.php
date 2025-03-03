@extends('layouts.main')

@section('content')
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
@endsection