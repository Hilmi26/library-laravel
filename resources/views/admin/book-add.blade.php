@include('layout.header')

@include('layout.navbar')
				<!-- / Navbar -->

				<!-- Content wrapper -->
                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="fw-bold py-3 mb-4">
                            <span class="text-muted fw-light">Books /</span> Add Data Book
                        </h4>
                        <!-- Bordered Table -->
                        <div class="card">
                            <div class="card-body">
                                <form action="" method="post">
                                    <div class="mb-3 row">
                                        <label for="html5-text-input" class="col-md-2 col-form-label">Penulis</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="text" name="penulis">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="html5-text-input" class="col-md-2 col-form-label">Tahun</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="number" name="tahun">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="html5-text-input" class="col-md-2 col-form-label">Judul</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="text" name="judul">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="html5-text-input" class="col-md-2 col-form-label">Kota</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="text" name="kota">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="html5-text-input" class="col-md-2 col-form-label">Penerbit</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="text" name="penerbit">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="html5-text-input" class="col-md-2 col-form-label">Cover</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="image" name="cover">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="html5-text-input" class="col-md-2 col-form-label">Sinopsis</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="text" name="sinopsis">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="html5-text-input" class="col-md-2 col-form-label">Stok</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="number" name="stok">
                                        </div>
                                    </div>
                                    <div class="mt-4 me-auto">
                                        <button type="submit" name="submit" class="btn btn-outline-primary">Tambah</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--/ Striped Rows -->

                    <hr class="my-5" />

                </div>
                
				<!--/ Striped Rows -->

				<!-- / Content -->

				<!-- Footer -->
@include('layout.footer')
