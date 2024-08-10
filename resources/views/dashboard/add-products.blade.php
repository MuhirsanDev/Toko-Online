    {{-- Header / CSS --}}
    @include('dashboard.components.header')

  <body>
    
    {{-- Sidebar Navigation --}}
    @include('dashboard.components.sidebar')
    @include('dashboard.components.search-header')

      <!-- Content wrapper -->
      <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
          <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> Add Products</h4>
          <!-- Basic Layout & Basic with Icons -->
          <div class="row">
            <!-- Basic with Icons -->
            <div class="col-xxl">
              <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                  <h5 class="mb-0">Detail Product</h5>
                </div>
                <div class="card-body">

                  {{-- Menampilkan pesan sukses --}}
                  @if(session('success'))
                  <div id="success-message" class="alert alert-success">
                    {{ session('success') }}
                  </div>
                  @endif

                  <form action="{{ url('add-products') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Name Product</label>
                      <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                          <span id="basic-icon-default-fullname2" class="input-group-text">
                            <i class='bx bxs-package'></i></span>
                          <input
                            type="text"
                            class="form-control"
                            id="basic-icon-default-fullname"
                            name="name"
                            placeholder="Name Product"
                            aria-label="Name Product"
                            aria-describedby="basic-icon-default-fullname2"
                          />
                        </div>
                        @error('name')
                          <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Description</label>
                      <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                          <span id="basic-icon-default-company2" class="input-group-text">
                          </span>
                          <textarea
                            id="basic-icon-default-company"
                            class="form-control"
                            name="description"
                            placeholder="Description"
                            aria-label="Description"
                            aria-describedby="basic-icon-default-company2"
                            rows="8">{{ old('description', '') }}</textarea>
                        </div>
                        @error('description')
                          <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                    

                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Price</label>
                      <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                          <span id="basic-icon-default-company2" class="input-group-text">
                            <i class='bx bx-money'></i></span>
                          <input
                            type="text"
                            id="basic-icon-default-company"
                            class="form-control"
                            name="price"
                            placeholder="Price"
                            aria-label="Price"
                            aria-describedby="basic-icon-default-company2"
                          />
                        </div>
                        @error('price')
                          <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Stock Product</label>
                      <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                          <span id="basic-icon-default-company2" class="input-group-text">
                            <i class='bx bx-cart-alt'></i>
                          </span>
                          <input
                            type="text"
                            id="basic-icon-default-company"
                            class="form-control"
                            name="stock"
                            placeholder="Stock Product"
                            aria-label="Stock Product"
                            aria-describedby="basic-icon-default-company2"
                          />
                        </div>
                        @error('stock')
                          <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Category Product</label>
                      <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                          <span id="basic-icon-default-company2" class="input-group-text">
                            <i class='bx bx-category'></i></i>
                          </span>
                          <input
                            type="text"
                            id="basic-icon-default-company"
                            class="form-control"
                            name="category"
                            placeholder="Category Product"
                            aria-label="Category Product"
                            aria-describedby="basic-icon-default-company2"
                          />
                        </div>
                        @error('category')
                          <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Tag Product</label>
                      <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                          <span id="basic-icon-default-company2" class="input-group-text">
                            <i class='bx bxs-purchase-tag'></i></span>
                          <input
                            type="text"
                            id="basic-icon-default-company"
                            class="form-control"
                            name="tag"
                            placeholder="Tag Product"
                            aria-label="Tag Product"
                            aria-describedby="basic-icon-default-company2"
                          />
                        </div>
                        @error('tag')
                          <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Image Product</label>
                      <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                          <span id="basic-icon-default-company2" class="input-group-text">
                            <i class='bx bx-image'></i></span>
                          <input
                            type="file"
                            id="image-input"
                            class="form-control"
                            name="image"
                            placeholder="Image Product"
                            aria-label="Image Product"
                            aria-describedby="basic-icon-default-company2"
                            onchange="previewImage(event)"
                          />
                        </div>
                        @error('image')
                          <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                    
                    {{-- Tambahkan elemen untuk menampilkan gambar preview --}}
                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label" for="image-preview"></label>
                      <div class="col-sm-10">
                        <img id="image-preview" style="display:none; max-width: 100%; height: auto;" />
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

      
      // Menampilkan Gambar sebelum submit ke database
      function previewImage(event) {
      const imagePreview = document.getElementById('image-preview');
      const file = event.target.files[0];
      const reader = new FileReader();

      reader.onload = function(e) {
        imagePreview.src = e.target.result;
        imagePreview.style.display = 'block'; // Menampilkan gambar
      }

      if (file) {
        reader.readAsDataURL(file);
      } else {
        imagePreview.src = "";
        imagePreview.style.display = 'none'; // Menyembunyikan gambar jika tidak ada file
      }
    }

    </script>
    
  </body>

</html>