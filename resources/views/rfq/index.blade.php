@extends('backend.app')

@section('head')

<head>
    <meta charset="utf-8" />
    <title>আমার কোটেশন ও সরবরাহকারীর জবাব | বিজনেস প্যানেল</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="ক্রেতা ও সরবরাহকারীর মধ্যে কোটেশন ব্যবস্থাপনার জন্য সম্পূর্ণ অ্যাডমিন প্যানেল" name="description" />
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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">কোটেশন</a></li>
                                <li class="breadcrumb-item active">আমার অনুরোধ ও জবাব</li>
                            </ol>
                        </div>
                        <h4 class="page-title">আমার কোটেশন অনুরোধ ও সরবরাহকারীর জবাব</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-body">
                            @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                            @endif

                            @foreach($rfqs as $rfq)
                            <div class="mt-4 mb-3 p-3 bg-light rounded">
                                <h4 class="d-flex justify-content-between align-items-center">
                                    <span><i class="fas fa-box me-2"></i>{{ $rfq->product_name }}</span>
                                    <span class="badge bg-primary">পরিমাণ: {{ $rfq->quantity }} পিস</span>
                                </h4>
                                <p class="text-muted ms-4"><i class="fas fa-comment me-2"></i>{{ $rfq->message }}</p>
                            </div>

                            <table id="selection-datatable-{{ $rfq->id }}" class="table table-striped dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>সরবরাহকারী</th>
                                        <th>বার্তা</th>
                                        <th>প্রস্তাবিত মূল্য</th>
                                        <th>ডেলিভারি তারিখ</th>
                                        <th>অবস্থা / অ্যাকশন</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($rfq->replies as $reply)
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-sm me-2">
                                                    <span class="avatar-title bg-primary-light rounded-circle">
                                                        {{ substr($reply->seller->name, 0, 1) }}
                                                    </span>
                                                </div>
                                                <div>
                                                    <strong>{{ $reply->seller->name }}</strong>
                                                    @if($reply->seller->company)
                                                    <br><small class="text-muted">{{ $reply->seller->company }}</small>
                                                    @endif
                                                </div>
                                            </div>
                                        </td>
                                        <td>{{ $reply->message ?? '-' }}</td>
                                        <td>
                                            @if($reply->quoted_price)
                                            <span class="fw-bold text-primary">${{ number_format($reply->quoted_price, 2) }}</span>
                                            @else
                                            <span class="text-muted">-</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if($reply->delivery_date)
                                            {{ \Carbon\Carbon::parse($reply->delivery_date)->format('d M, Y') }}
                                            @else
                                            <span class="text-muted">-</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if($reply->status == 'pending')
                                            <div class="d-flex gap-2">
                                                <form action="{{ route('buyer.rfq.respond', $reply->id) }}" method="POST">
                                                    @csrf
                                                    <button type="submit" name="action" value="accepted" class="btn btn-success btn-sm" onclick="return confirm('আপনি কি এই অফারটি গ্রহণ করতে চান?')">
                                                        <i class="fas fa-check me-1"></i>গ্রহণ করুন
                                                    </button>
                                                    <button type="submit" name="action" value="rejected" class="btn btn-danger btn-sm" onclick="return confirm('আপনি কি এই অফারটি প্রত্যাখ্যান করতে চান?')">
                                                        <i class="fas fa-times me-1"></i>প্রত্যাখ্যান
                                                    </button>
                                                </form>
                                            </div>
                                            @else
                                            <span class="badge {{ $reply->status == 'accepted' ? 'bg-success' : 'bg-danger' }} p-2">
                                                {{ $reply->status == 'accepted' ? 'গ্রহণ করা হয়েছে' : 'প্রত্যাখ্যান করা হয়েছে' }}
                                            </span>
                                            @endif
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="5" class="text-center py-4">
                                            <i class="fas fa-inbox fa-2x text-muted mb-2"></i>
                                            <p class="text-muted">এখনও কোনো জবাব পাওয়া যায়নি</p>
                                        </td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            @endforeach
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
                        document.getElementById('status-badge-' + productId).innerHTML = '<span class="badge bg-success">Verified</span>';
                        btn.remove();
                    }
                });
        });
    });
</script>
<script src="{{url('')}}/assets/js/vendor.min.js"></script>

<!-- Datatables js -->
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
<!-- <script src="{{url('')}}/assets/vendor/datatables.net-select/js/dataTables.select.min.js"></script> -->

<!-- Datatable Demo Aapp js -->
<script src="{{url('')}}/assets/js/pages/datatable.init.js"></script>

<!-- App js -->
<script src="{{url('')}}/assets/js/app.min.js"></script>
@endsection