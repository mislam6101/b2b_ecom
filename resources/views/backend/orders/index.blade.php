@extends('backend.app')

@section('head')

<head>
    <meta charset="utf-8" />
    <title>অর্ডার তালিকা | বিজনেস প্যানেল</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="অর্ডার ব্যবস্থাপনার জন্য সম্পূর্ণ অ্যাডমিন প্যানেল" name="description" />
    <meta content="Techzaa" name="author" />

    <!-- অ্যাপ ফেভিকন -->
    <link rel="shortcut icon" href="{{url('')}}/assets/images/favicon.ico">

    <!-- ডাটাটেবল সিএসএস -->
    <link href="{{url('')}}/assets/vendor/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="{{url('')}}/assets/vendor/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="{{url('')}}/assets/vendor/datatables.net-fixedcolumns-bs5/css/fixedColumns.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="{{url('')}}/assets/vendor/datatables.net-fixedheader-bs5/css/fixedHeader.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="{{url('')}}/assets/vendor/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="{{url('')}}/assets/vendor/datatables.net-select-bs5/css/select.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- থিম কনফিগ জেএস -->
    <script src="{{url('')}}/assets/js/config.js"></script>

    <!-- অ্যাপ সিএসএস -->
    <link href="{{url('')}}/assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />

    <!-- আইকন সিএসএস -->
    <link href="{{url('')}}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
</head>
@endsection

@section('content')
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">হোম</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">অর্ডার</a></li>
                                <li class="breadcrumb-item active">অর্ডার তালিকা</li>
                            </ol>
                        </div>
                        <h4 class="page-title">অর্ডার তালিকা</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-body">
                            @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                            @endif
                            <br>
                            <table id="selection-datatable" class="table table-striped dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Buyer</th>
                                        <th>Product</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                        <th>Order Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($orders as $key => $order)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $order->buyer->company ?? 'N/A' }}</td>
                                        <td>{{ $order->product->name ?? 'N/A' }}</td>
                                        <td>{{ $order->quantity }}</td>
                                        <td>৳{{ number_format($order->price, 2) }}</td>
                                        <td>
                                            <span class="badge 
                                                @if($order->status == 'pending') bg-warning
                                                @elseif($order->status == 'confirmed') bg-info
                                                @elseif($order->status == 'shipped') bg-primary
                                                @elseif($order->status == 'completed') bg-success
                                                @elseif($order->status == 'cancelled') bg-danger
                                                @endif">
                                                {{ ucfirst($order->status) }}
                                            </span>
                                        </td>
                                        <td>
                                            <form action="{{ route('seller.orders.status', $order->id) }}" method="POST" class="d-flex gap-2">
                                                @csrf
                                                <select name="status" class="form-select form-select-sm">
                                                    <option value="pending" {{ $order->status=='pending' ? 'selected':'' }}>Pending</option>
                                                    <option value="confirmed" {{ $order->status=='confirmed' ? 'selected':'' }}>Confirmed</option>
                                                    <option value="shipped" {{ $order->status=='shipped' ? 'selected':'' }}>Shipped</option>
                                                    <option value="completed" {{ $order->status=='completed' ? 'selected':'' }}>Completed</option>
                                                    <option value="cancelled" {{ $order->status=='cancelled' ? 'selected':'' }}>Cancelled</option>
                                                </select>
                                                <button type="submit" class="btn btn-sm btn-success">Update</button>
                                            </form>
                                        </td>
                                        <td>{{ $order->created_at->format('d M, Y H:i') }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 text-center">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © ভেলোনিক - ডেভেলপ করেছেন <b>মোঃ মাহমুদুল ইসলাম</b>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    document.querySelectorAll('.verify-btn').forEach(button => {
        button.addEventListener('click', function() {
            let productId = this.getAttribute('data-id');
            let btn = this;

            fetch(`/admin/product/verify/${productId}`, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Content-Type': 'application/json'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        document.getElementById('status-badge-' + productId).innerHTML = '<span class="badge bg-success">ভেরিফাইড</span>';
                        btn.remove();
                    }
                });
        });
    });

    // ডাটাটেবল বাংলা ভাষায় সেটআপ
    $(document).ready(function() {
        $('#selection-datatable').DataTable({
            language: {
                search: "অনুসন্ধান:",
                lengthMenu: "দেখান _MENU_ টি এন্ট্রি",
                info: "মোট _TOTAL_ টির মধ্যে _START_ থেকে _END_ দেখানো হচ্ছে",
                paginate: {
                    first: "প্রথম",
                    last: "শেষ",
                    next: "পরবর্তী",
                    previous: "পূর্ববর্তী"
                },
                emptyTable: "কোনো অর্ডার পাওয়া যায়নি",
                infoEmpty: "০ টির মধ্যে ০ থেকে ০ দেখানো হচ্ছে",
                infoFiltered: "(_MAX_ টি মোট এন্ট্রি থেকে ফিল্টার করা হয়েছে)",
                loadingRecords: "লোড হচ্ছে...",
                processing: "প্রসেসিং...",
                zeroRecords: "কোনো মিল পাওয়া যায়নি"
            },
            responsive: true,
            pageLength: 10,
            lengthMenu: [
                [10, 25, 50, 100, -1],
                [10, 25, 50, 100, "সবগুলো"]
            ]
        });
    });
</script>
<script src="{{url('')}}/assets/js/vendor.min.js"></script>

<!-- ডাটাটেবল জেএস -->
<script src="{{url('')}}/assets/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{url('')}}/assets/vendor/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
<script src="{{url('')}}/assets/vendor/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{url('')}}/assets/vendor/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
<script src="{{url('')}}/assets/vendor/datatables.net-fixedcolumns-bs5/js/fixedColumns.bootstrap5.min.js"></script>
<script src="{{url('')}}/assets/vendor/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="{{url('')}}/assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{url('')}}/assets/vendor/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
<script src="{{url('')}}/assets/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="{{url('')}}/assets/vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="{{url('')}}/assets/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="{{url('')}}/assets/vendor/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>

<!-- ডাটাটেবল ডেমো অ্যাপ জেএস -->
<script src="{{url('')}}/assets/js/pages/datatable.init.js"></script>

<!-- অ্যাপ জেএস -->
<script src="{{url('')}}/assets/js/app.min.js"></script>
@endsection