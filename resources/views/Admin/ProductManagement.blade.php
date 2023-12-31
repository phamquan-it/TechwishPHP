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

                        <table class="table table-striped">
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
                                @php
                                    $totalQuantity = 0;
                                @endphp
                                @foreach ($products as $product)
                                    <tr>
                                        <td scope="row">{{ $product->Product_ID }}</td>
                                        <td>{{ $product->Name }}</td>
                                        <td>${{ $product->Price }}</td>
                                        <td class="fw-bold">{{ $product->quantity }}</td>

                                        @php
                                            $totalQuantity += $product->quantity;
                                        @endphp
                                        <td>{{ $product->Discount }}</td>
                                        <td>{{ $product->Description }}</td>
                                        <td><img src="{{ asset('storage/' . $product->image->ImageLink) }}" alt="">
                                        </td>
                                        <td>{{ $product->Species }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-sm btn-secondary dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    Action
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end" style="">
                                                    <li><a class="dropdown-item text-success"
                                                            href="/admin/update/product/{{ $product->Product_ID }}">Edit</a>
                                                    </li>
                                                    <li>
                                                        <form action="/admin/delete/product" method="post" class="mb-0">
                                                            @csrf
                                                            @method('DELETE')
                                                            <input type="hidden" class="d-inline" name="id"
                                                                value="{{ $product->Product_ID }}">
                                                            <input type="submit"
                                                                class="btn btn-link text-decoration-none small text-danger"
                                                                value="Delete">
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <p><span class="text-success card-title">Total quantity : <span class="text-warning card-title">
                                        {{ $totalQuantity }}</span></span>

                            </p>
                        </table>

                    </div>

                </div>
            </div><!-- End Top Selling -->
        </div>
    </section>
@endsection
