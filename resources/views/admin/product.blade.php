@include('admin.header')
@include('success_message')
@include('errors')

@section('admin.admin')
<body>
<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('dashboard')}}">
                            <span data-feather="home"></span>
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/orders">
                            <span data-feather="file"></span>
                            Orders
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.products')}}">
                            <span data-feather="shopping-cart"></span>
                            Products
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/users">
                            <span data-feather="users"></span>
                            Customers
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="bar-chart-2"></span>
                            Reports
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="layers"></span>
                            Integrations
                        </a>
                    </li>
                </ul>

            </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

            <h2>Products</h2>
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">catalog_id</th>
                        <th scope="col">code</th>
                        <th scope="col">set_id</th>
                        <th scope="col">vendor_code</th>
                        <th scope="col">name</th>
                        <th scope="col">measures</th>
                        <th scope="col">prices</th>
                        <th scope="col">manufacturer</th>
                        <th scope="col">country_import</th>
                        <th scope="col">country_origin</th>
                        <th scope="col">warranty</th>
                        <th scope="col">barcode</th>
                        <th scope="col">intro</th>

                        <th scope="col">description</th>
                        <th scope="col">image</th>
                        <th scope="col">properties</th>
                        <th scope="col">quantity</th>
                        <th scope="col">status</th>


                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->catalog_id}}</td>
                        <td>{{$product->code}}</td>
                        <td>{{$product->set_id}}</td>
                        <td>{{$product->vendor_code}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->measures}}</td>
                        <td>{{$product->prices}}</td>
                        <td>{{$product->manufacturer}}</td>
                        <td>{{$product->country_import}}</td>
                        <td>{{$product->country_origin}}</td>
                        <td>{{$product->warranty}}</td>
                        <td>{{$product->barcode}}</td>
                        <td>{{$product->intro}}</td>

                        <td>{{$product->description}}</td>
                        <td>{{$product->image}}</td>
                        <td>{{$product->properties}}</td>
                        <td>{{$product->quantity}}</td>
                        <td>{{$product->status}}</td>
                        <td>{{$product->created_at}}</td>
                        <td>{{$product->updated_at}}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</div>
<div class="d-flex justify-content-center">
    {{  $products->onEachSide(1)->links('vendor.pagination.bootstrap-4')}}
</div>

@endsection
@yield('admin.admin')
@include('admin.footer')

