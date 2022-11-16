@extends('Layout.DashboardLayout')
@section('DashboardLayout')
    <form action="/home" method="post">
        @csrf
        <section id="multiple-column-form">
            <div class="row match-height">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title">Multiple Column</h4>
                  </div>
                  <div class="card-content">
                    <div class="card-body">
                      <form class="form" data-parsley-validate>
                        <div class="row">
                          <div class="col-md-6 col-12">
                            <div class="form-group mandatory">
                              <label for="first-name-column" class="form-label"
                                >First Name</label
                              >
                              <input
                                type="text"
                                id="first-name-column"
                                class="form-control"
                                placeholder="First Name"
                                name="fname-column"
                                data-parsley-required="true"
                              />
                            </div>
                          </div>
                          <div class="col-md-6 col-12">
                            <div class="form-group">
                              <label for="last-name-column" class="form-label"
                                >Last Name</label
                              >
                              <input
                                type="text"
                                id="last-name-column"
                                class="form-control"
                                placeholder="Last Name"
                                name="lname-column"
                                data-parsley-required="true"
                              />
                            </div>
                          </div>
                          <div class="col-md-6 col-12">
                            <div class="form-group">
                              <label for="city-column" class="form-label"
                                >City</label
                              >
                              <input
                                type="text"
                                id="city-column"
                                class="form-control"
                                placeholder="Custom validation. Value has to be Jakarta."
                                name="city-column"
                                data-parsley-restricted-city="Jakarta"
                                data-parsley-required="true"
                              />
                            </div>
                          </div>
                          <div class="col-md-6 col-12">
                            <div class="form-group">
                              <label for="country-floating" class="form-label"
                                >Country</label
                              >
                              <input
                                type="text"
                                id="country-floating"
                                class="form-control"
                                name="country-floating"
                                placeholder="Country"
                                data-parsley-required="true"
                              />
                            </div>
                          </div>
                          <div class="col-md-6 col-12">
                            <div class="form-group">
                              <label for="company-column" class="form-label"
                                >Company</label
                              >
                              <input
                                type="text"
                                id="company-column"
                                class="form-control"
                                name="company-column"
                                placeholder="Company"
                                data-parsley-required="true"
                              />
                            </div>
                          </div>
                          <div class="col-md-6 col-12">
                            <div class="form-group mandatory">
                              <label for="email-id-column" class="form-label"
                                >Email</label
                              >
                              <input
                                type="email"
                                id="email-id-column"
                                class="form-control"
                                name="email-id-column"
                                placeholder="Email"
                                data-parsley-required="true"
                              />
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="form-group">
                              <div class="form-check mandatory">
                                <input
                                  type="checkbox"
                                  id="checkbox5"
                                  class="form-check-input"
                                  checked
                                  data-parsley-required="true"
                                  data-parsley-error-message="You have to accept our terms and conditions to proceed."
                                />
                                <label
                                  for="checkbox5"
                                  class="form-check-label form-label"
                                  >I accept these terms and conditions.</label
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-12">
                            <div class="form-group mandatory">
                              <fieldset>
                                <label class="form-label">
                                  Favourite Colour
                                </label>
                                <div class="form-check">
                                  <input
                                    class="form-check-input"
                                    type="radio"
                                    name="flexRadioDefault"
                                    id="flexRadioDefault1"
                                    data-parsley-required="true"
                                  />
                                  <label
                                    class="form-check-label form-label"
                                    for="flexRadioDefault1"
                                  >
                                    Red
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input
                                    class="form-check-input"
                                    type="radio"
                                    name="flexRadioDefault"
                                    id="flexRadioDefault2"
                                  />
                                  <label
                                    class="form-check-label form-label"
                                    for="flexRadioDefault2"
                                  >
                                    Blue
                                  </label>
                                </div>
                              </fieldset>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-12 d-flex justify-content-end">
                            <button
                              type="submit"
                              class="btn btn-primary me-1 mb-1"
                            >
                              Submit
                            </button>
                            <button
                              type="reset"
                              class="btn btn-light-secondary me-1 mb-1"
                            >
                              Reset
                            </button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        <div class="card">
            <section class="section">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Classic Editor</h4>
                            </div>
                            <div class="card-body">
                                {{-- <div class="col-sm">
                                    <label for="validationCustom03" class="form-label">City</label>
                                    <input type="text" class="form-control" id="validationCustom03" required>
                                    <div class="invalid-feedback">
                                        Please provide a valid city.
                                    </div>
                                </div>
                                    <label for="validationCustom03" class="form-label">City</label>
                                    <input type="text" class="form-control" id="validationCustom03" required>
                                    <div class="invalid-feedback">
                                        Please provide a valid city.
                                    </div>
                                </div> --}}
                                <textarea name="editor" id="editor" cols="30" rows="1000" placeholder="Tulis Artikel Di sini"><div id="editor">
                                </div></textarea>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
            Tutup
        </button>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>


    
@endsection

