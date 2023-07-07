<!DOCTYPE html>
<html lang="en">

@include('layout.header')

<body id="page-top">
    <div id="wrapper">

        @include('layout.sidebar')

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">

                @include('layout.navbar')

                <!-- Container Fluid-->
                <div class="container-fluid" id="container-wrapper">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Form Edit Data Customer</h1>
                        <a href="{{ route('customer.index') }}" class="btn btn-primary mb-3">Data Customer</a>
                        {{-- <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Tables</li>
              <li class="breadcrumb-item active" aria-current="page">Simple Tables</li>
            </ol> --}}
                    </div>

                    <div class="row">
                        <div class="col-lg-12 mb-4">
                            <!-- Simple Tables -->
                            <div class="card">
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    {{-- <h6 class="m-0 font-weight-bold text-primary">Simple Tables</h6> --}}
                                </div>
                                <form action="{{ route('customer.update', $customer->id) }}" method="POST" class="px-5 pb-5">
                                    @csrf

                                    @method("PUT")

                                    <div class="mb-3">
                                        <label for="customer_nama" class="form-label">Nama</label>
                                        <input type="text" class="form-control" name="customer_nama" value="{{ $customer->customer_nama }}" id="customer_nama">
                                    </div>
                                    <div class="mb-3">
                                        <label for="customer_tlpn" class="form-label">No Tlpn</label>
                                        <input type="text" class="form-control" name="customer_tlpn" value="{{ $customer->customer_tlpn }}" id="customer_tlpn">
                                    </div>
                                    <div class="mb-3">
                                        <label for="customer_email" class="form-label">Email</label>
                                        <input type="email" class="form-control" name="customer_email" value="{{ $customer->customer_email }}" id="customer_email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="customer_alamat" class="form-label">Alamat</label>
                                        <input type="text" class="form-control" name="customer_alamat" value="{{ $customer->customer_alamat }}" id="customer_alamat">
                                    </div>
                                    <div class="mb-3">
                                        <label for="customer_jk" class="form-label">Jenis Kelamin</label>
                                        <input type="text" class="form-control" name="customer_jk" value="{{ $customer->customer_jk }}" id="customer_jk">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Edit</button>
                                </form>


                                {{-- <div class="card-footer"></div> --}}
                            </div>
                        </div>
                    </div>
                    <!--Row-->

                    <!-- Modal Logout -->
                    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabelLogout" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Are you sure you want to logout?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-primary"
                                        data-dismiss="modal">Cancel</button>
                                    <a href="login.html" class="btn btn-primary">Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!---Container Fluid-->
            </div>
            @include('layout.footer')
        </div>
    </div>

</body>

</html>
