@extends('Admin.Layout')
@section('content')
    <section class="section dashboard">
        <div class="col-12">
           


            
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
                                @foreach ($products as $product)
                                    <tr>
                                        <th scope="row">{{ $product->Product_ID }}</th>
                                        <td>{{ $product->Name }}</td>
                                        <td>${{ $product->Price }}</td>
                                        <td class="fw-bold">{{ $product->quantity }}</td>
                                        <td>{{ $product->Description }}%</td>
                                        <td>img</td>
                                        <td>{{ $product->Species }}</td>
                                        <td><button class="btn btn-outline-danger">Fix</button></td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>

                    </div>

                </div>
            </div><!-- End Top Selling -->
        </div>
    </section>
@endsection