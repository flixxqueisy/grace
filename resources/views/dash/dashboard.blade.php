@extends('layout.main')
@section('content')
    <div class="app-content-padding flex-grow-1 overflow-hidden" data-scrollbar="true" data-height="100%">

        <ol class="breadcrumb float-xl-end">
            <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
            <li class="breadcrumb-item"><a href="javascript:;">Dashboard</a></li>
            <li class="breadcrumb-item active">Dashboard v2</li>
        </ol>


        <h1 class="page-header">Dashboard<small>header small text goes here...</small></h1>

        <div class="row">

            <div class="col-xl-3 col-md-6">
                <div class="widget widget-stats bg-teal">
                    <div class="stats-icon stats-icon-lg"><i class="fa fa-globe fa-fw"></i></div>
                    <div class="stats-content">
                        <div class="stats-title">TODAY'S VISITS</div>
                        <div class="stats-number">7,842,900</div>
                        <div class="stats-progress progress">
                            <div class="progress-bar" style="width: 70.1%;"></div>
                        </div>
                        <div class="stats-desc">Better than last week (70.1%)</div>
                    </div>
                </div>
            </div>


            <div class="col-xl-3 col-md-6">
                <div class="widget widget-stats bg-blue">
                    <div class="stats-icon stats-icon-lg"><i class="fa fa-dollar-sign fa-fw"></i></div>
                    <div class="stats-content">
                        <div class="stats-title">TODAY'S PROFIT</div>
                        <div class="stats-number">180,200</div>
                        <div class="stats-progress progress">
                            <div class="progress-bar" style="width: 40.5%;"></div>
                        </div>
                        <div class="stats-desc">Better than last week (40.5%)</div>
                    </div>
                </div>
            </div>


            <div class="col-xl-3 col-md-6">
                <div class="widget widget-stats bg-indigo">
                    <div class="stats-icon stats-icon-lg"><i class="fa fa-archive fa-fw"></i></div>
                    <div class="stats-content">
                        <div class="stats-title">NEW ORDERS</div>
                        <div class="stats-number">38,900</div>
                        <div class="stats-progress progress">
                            <div class="progress-bar" style="width: 76.3%;"></div>
                        </div>
                        <div class="stats-desc">Better than last week (76.3%)</div>
                    </div>
                </div>
            </div>


            <div class="col-xl-3 col-md-6">
                <div class="widget widget-stats bg-gray-900">
                    <div class="stats-icon stats-icon-lg"><i class="fa fa-comment-alt fa-fw"></i></div>
                    <div class="stats-content">
                        <div class="stats-title">NEW COMMENTS</div>
                        <div class="stats-number">3,988</div>
                        <div class="stats-progress progress">
                            <div class="progress-bar" style="width: 54.9%;"></div>
                        </div>
                        <div class="stats-desc">Better than last week (54.9%)</div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">

            <div class="col-xl-8">
                <div class="widget-chart with-sidebar" data-bs-theme="dark">
                    <div class="widget-chart-content bg-gray-800">
                        <h4 class="chart-title">
                            Visitors Analytics
                            <small>Where do our visitors come from</small>
                        </h4>
                        <div id="visitors-line-chart" class="widget-chart-full-width dark-mode" style="height: 257px;">
                        </div>
                    </div>
                    <div class="widget-chart-sidebar bg-gray-900">
                        <div class="chart-number">
                            1,225,729
                            <small>Total visitors</small>
                        </div>
                        <div class="flex-grow-1 d-flex align-items-center">
                            <div id="visitors-donut-chart" data-bs-theme="dark" style="height: 180px"></div>
                        </div>
                        <ul class="chart-legend fs-11px">
                            <li><i class="fa fa-circle fa-fw text-blue fs-9px me-5px t-minus-1"></i> 34.0% <span>New
                                    Visitors</span></li>
                            <li><i class="fa fa-circle fa-fw text-teal fs-9px me-5px t-minus-1"></i> 56.0% <span>Return
                                    Visitors</span></li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="col-xl-4">
                <div class="panel panel-inverse" data-sortable-id="index-1">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            Visitors Origin
                        </h4>
                    </div>
                    <div id="visitors-map" class="bg-gray-900" data-bs-theme="dark" style="height: 170px;"></div>
                    <div class="list-group list-group-flush " data-bs-theme="dark">
                        <a href="javascript:;" class="list-group-item list-group-item-action d-flex">
                            <span class="flex-1">1. United State</span>
                            <span class="badge bg-teal fs-10px">20.95%</span>
                        </a>
                        <a href="javascript:;" class="list-group-item list-group-item-action d-flex">
                            <span class="flex-1">2. India</span>
                            <span class="badge bg-blue fs-10px">16.12%</span>
                        </a>
                        <a href="javascript:;" class="list-group-item list-group-item-action d-flex rounded-bottom">
                            <span class="flex-1">3. Mongolia</span>
                            <span class="badge bg-gray-600 fs-10px">14.99%</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>




    </div>
@endsection


@push('css')
    <link href="{{ asset('assets/plugins/jvectormap-next/jquery-jvectormap.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/gritter/css/jquery.gritter.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/nvd3/build/nv.d3.css') }}" rel="stylesheet" />

@endpush

@push('scripts')
    <script src="{{ asset('assets/plugins/d3/d3.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/nvd3/build/nv.d3.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/jvectormap-next/jquery-jvectormap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/jvectormap-content/world-mill.js') }}" type="text/javascript"></script>

    <script src="{{ asset('assets/plugins/gritter/js/jquery.gritter.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/demo/dashboard-v2.js') }}" type="text/javascript"></script>
@endpush
