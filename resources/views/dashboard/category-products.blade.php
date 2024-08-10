    {{-- Header / CSS --}}
    @include('dashboard.components.header')

  <body>
    
    {{-- Sidebar Navigation --}}
    @include('dashboard.components.sidebar')

    {{-- Search Header --}}
    @include('dashboard.components.search-header')

      <!-- Content wrapper -->
      <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
          <h4 class="fw-bold py-3 mb-1"><span class="text-muted fw-light"></span> Add Category</h4>
          <!-- Basic Layout & Basic with Icons -->
          <div class="row">
            <!-- Basic with Icons -->
            <div class="col-xxl">
              <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                  <h5 class="mb-0">Category Product</h5>
                </div>
                <div class="card-body">

                  {{-- Menampilkan pesan sukses --}}
                  @if(session('success'))
                  <div id="success-message" class="alert alert-success">
                    {{ session('success') }}
                  </div>
                  @endif

                  {{-- Menampilkan pesan error --}}
                  @if(session('error'))
                  <div id="error-message" class="alert alert-danger">
                      {{ session('error') }}
                  </div>
                  @endif

                  {{-- Menampilkan daftar error jika ada --}}
                  @if($errors->any())
                      <div class="alert alert-danger">
                          {{ implode(', ', $errors->all()) }} {{-- Menggabungkan pesan error menjadi string --}}
                      </div>
                  @endif

                  <form action="{{ url('category-products') }}" method="post">
                    @csrf
                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Category Product</label>
                      <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                          <span id="basic-icon-default-fullname2" class="input-group-text">
                            <i class='bx bxs-package'></i></span>
                          <input
                            type="text"
                            class="form-control"
                            id="basic-icon-default-fullname"
                            name="category"
                            placeholder="Category Product"
                            aria-label="Category Product"
                            aria-describedby="basic-icon-default-fullname2"
                          />
                        </div>
                      </div>
                    </div>

                    <div class="row justify-content-end">
                      <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Send</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- / Content -->




    {{-- Footer JS --}}
    @include('dashboard.components.footer')

    <script>
      // Menyembunyikan pesan setelah 1 detik
      setTimeout(function() {
        var message = document.getElementById('success-message');
        if (message) {
          message.style.display = 'none';
        }
      }, 1600); // 1000 ms = 1 detik
    </script>
    
  </body>
  

</html>
