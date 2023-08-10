@extends('Admin.layoutadmin')
@section('content')
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
                            <th>feedback content</th>
                            <th>user</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Thiss is so freaking goood</td>
                            <td>Duongngohehe</td>
                        </tr>

                </table>

            </div>

        </div>
    </div><!-- End Top Selling -->
@endsection