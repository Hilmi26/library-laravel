@include('layout.header')

@include('layout.navbar')
				<!-- / Navbar -->

				<!-- Content wrapper -->
				<div class="content-wrapper">
					<!-- Content -->

					<div class="container-xxl flex-grow-1 container-p-y">
						<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Books /</span> Data Books</h4>

						<!-- Striped Rows -->
						<div class="card">
							<div class="card-body">
								<div class="row mb-3">
									<div class="col">
										<a href="{{ url('/book-add') }}" class="btn btn-outline-primary ">Tambah Data</a>
									</div>
									<div class="col mb-4">
										<form class="d-flex" role="search" method="POST" action="">
											<input class="form-control me-2" type="text" name="search" placeholder="Masukkan Keyword Pencarian">
											<input class="btn btn-outline-info" type="submit" name="cari" value="Cari"></input>
											<a href="index.php" class="btn btn-outline-warning ms-2">Refresh</a>
										</form>
									</div>
								</div>
								<div class="table-responsive text-nowrap">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th>ID</th>
												<th class="text-center">Aksi</th>
												<th>Cover</th>
												<th>Penulis</th>
												<th>Tahun</th>
												<th>Judul</th>
												<th>Kota</th>
												<th>Penerbit</th>
												<th>Sinopsis</th>
												<th>Stok</th>
											</tr>
										</thead>
										<tbody class="table-border-bottom-0">
                                            @foreach ($buku as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>Edit Delete</td>
                                                <td>{{ $item->cover }}</td>
                                                <td>{{ $item->penulis }}</td>
                                                <td>{{ $item->tahun }}</td>
                                                <td>{{ $item->judul }}</td>
                                                <td>{{ $item->kota }}</td>
                                                <td>{{ $item->penerbit }}</td>
                                                <td>{{ $item->sinopsis }}</td>
                                                <td>{{ $item->stok }}</td>
                                            </tr>
                                            @endforeach
										</tbody>
									</table>
                                    {{-- <div class="d-flex mt-3 justify-content-center">
                                        {{ $buku->links() }}
                                    </div> --}}
								</div>
							</div>
						</div>
					</div>



				</div>
				<!--/ Striped Rows -->

				<!-- / Content -->

				<!-- Footer -->
@include('layout.footer')
