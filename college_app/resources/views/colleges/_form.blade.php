<div class="container-fluid pt-4 pb-4 px-4" style="width: 90%">

<div class="bg-secondary rounded h-100 p-4">
    <h6 class="mb-4">Add a New College</h6>
    <form>
      <div class="form-floating mb-3">
        <input
          type="name"
          class="form-control"
          name="name"
          id="name"
          placeholder="College Name"
          value="{{ old('name',$college->name) }}"
        />
        @error('name')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
        @enderror
        <label for="floatingInput">Name</label>
      </div>
      <div class="form-floating mb-3">
        <input
          type="address"
          class="form-control"
          name="address"
          id="address"
          placeholder="Address"
          value="{{ old('address',$college->address) }}"
        />
        @error('address')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
        @enderror
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