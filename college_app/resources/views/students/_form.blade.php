<div class="container-fluid pt-4 pb-4 px-4" style="width: 90%">
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
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
              id="name"
              name="name"
              placeholder="Name"
              value="{{ old('name',$student->name) }}"
            />
            <label for="floatingName">Name</label>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-floating">
            <input
              type="email"
              class="form-control"
              id="email"
              name="email"
              placeholder="Email"
              value="{{ old('email',$student->email) }}"
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
              id="phone"
              placeholder="Phone"
              name="phone"
              value="{{ old('phone',$student->phone) }}"
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
              name="dob"
              value="{{ old('dob',$student->dob) }}"
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
              class="form-select @error('college_id') is-invalid @enderror"
              id="college_id"
              aria-label="Floating label select example"
              name="college_id"
            >
              @foreach ($colleges as $college)
                <option 
                  value="{{ $college->id }}" 
                  {{ $college->id == old('college_id', $student->college_id) ? 'selected' : '' }}
                >
                  {{ $college->name }}
                </option>
              @endforeach
            </select>
            <label for="floatingCollege">College</label>
            @error('college_id')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
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