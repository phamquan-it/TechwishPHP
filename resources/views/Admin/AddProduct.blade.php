@extends('Admin.layoutadmin')
@section('content')
    <section class="section dashboard">
        <div class="col-12">
            <div class="card recent-sales overflow-auto p-3">
                <form action="" class="email-signup" enctype="multipart/form-data">
                    <input class="form-control my-3" type="text" placeholder="Product name"
                        aria-label="default input example" id="name" name="name" placeholder="input name"
                        value="{{ old('name') }}">

                    <input class="form-control my-3" type="text" placeholder="Species" aria-label="default input example"
                        name="Species" value="{{ old('Species') }}">

                    <input class="form-control my-3" type="text" placeholder="Price" aria-label="default input example"
                        name="price" id="" placeholder="input price" value="{{ old('price') }}">

                    <input class="form-control my-3" type="text" placeholder="Quatity" aria-label="default input example"
                        name="price" id="" placeholder="input price" value="{{ old('Quantity') }}">

                    <input class="form-control my-3" type="text" placeholder="Discount"
                        aria-label="default input example" name="Discount" placeholder="discount"
                        value="{{ old('Discount') }}">

                    <input class="form-control my-3" type="text" placeholder="Description"
                        aria-label="default input example" name="description" class="form-control " id=""
                        placeholder="Description" value="{{ old('description') }}">
                    <div class="u-form-group">


                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label"></label>
                            <input class="form-control" type="file" id="formFileMultiple" name="images[]" multiple>
                        </div>
                        <button>{{ __('ADD') }}</button>
                    </div>
                </form>
            </div>


            <!-- Top Selling -->
            <div class="col-12">
                <div class="card top-selling overflow-auto">

                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                                <h6>Filter</h6>
                            </li>

                            <li><a class="dropdown-item" href="#">Today</a></li>
                            <li><a class="dropdown-item" href="#">This Month</a></li>
                            <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                    </div>

                    <div class="card-body pb-0">
                        <h5 class="card-title">Products List</h5>

                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">Product name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Discount</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Cay Ot Chuong</td>
                                    <td>$64</td>
                                    <td class="fw-bold">124</td>
                                    <td>20%</td>
                                    <td>rat la dep</td>
                                    <td>IMAGE NAO DO</td>
                                    <td><button class="btn btn-outline-danger">Fix</button></td>
                                </tr>

                        </table>

                    </div>

                </div>
            </div><!-- End Top Selling -->
        </div>
    </section>
@endsection
