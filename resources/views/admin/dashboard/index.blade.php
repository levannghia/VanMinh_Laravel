@extends('admin.layout')
@section('title',$row->title)
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body d-flex flex-column justify-content-between">
                    <div class="d-flex justify-content-between flex-wrap">
                        <h5 class="card-title mr-4 mr-md-0 pr-4 pr-md-0">Revenue</h5>
                        <ul class="nav nav-pills nav-pills-custom ml-md-auto mr-0 mr-md-2 mr-lg-4"
                            id="pills-tab-custom" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active show" id="pills-home-tab-custom"
                                    data-toggle="pill" href="#pills-week" role="tab"
                                    aria-selected="true">
                                    Month
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-profile-tab-custom"
                                    data-toggle="pill" href="#pills-month" role="tab"
                                    aria-selected="false">
                                    Week
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-contact-tab-custom"
                                    data-toggle="pill" href="#pills-year" role="tab"
                                    aria-selected="false">
                                    Year
                                </a>
                            </li>
                        </ul>
                        <div class="dropdown mb-3 mb-md-0  pb-3 pb-md-0">
                            <button
                                class="btn btn-sm btn-outline-light btn-rounded dropdown-toggle text-dark btn-hover-border-only"
                                type="button" id="dropdownMenuDate2" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="true">
                                2018
                            </button>
                            <div class="dropdown-menu dropdown-menu-right"
                                aria-labelledby="dropdownMenuDate2">
                                <a class="dropdown-item" href="#">2015</a>
                                <a class="dropdown-item" href="#">2016</a>
                                <a class="dropdown-item" href="#">2017</a>
                                <a class="dropdown-item" href="#">2018</a>
                            </div>
                        </div>
                    </div>
                    <canvas class="mr-1 mt-4" id="revenue-chart"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h5 class="cart-title">Goals</h5>
                    <canvas id="goals-chart" class="mt-4 mb-4"></canvas>
                    <div id="goals-legend" class="chartjs-legend pt-4 pb-3 border-bottom"></div>
                    <div class="d-flex flex-column align-items-center mt-4">
                        <p class="font-weight-bold">Revenue</p>
                        <h1 class="text-primary">284</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <h5 class="card-title">Sales</h5>
                        <div class="icon-rounded-primary d-none d-lg-block">
                            <i class="mdi mdi-arrow-top-right icon-md"></i>
                        </div>
                    </div>
                    <h1 class="mt-lg-3">39881</h1>
                    <div class="d-flex mt-2">
                        <p class="text-success mb-0 font-weight-bold"><span
                                class="mdi mdi-arrow-up mr-1"></span>5.15%</p>
                        <p class="text-muted mb-0 ml-2">Since last month</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <h5 class="card-title">Purchases</h5>
                        <div class="icon-rounded-primary d-none d-lg-block">
                            <i class="mdi mdi-basket icon-md"></i>
                        </div>
                    </div>
                    <h1 class="mt-lg-3">42283</h1>
                    <div class="d-flex mt-2">
                        <p class="text-danger mb-0 font-weight-bold"><span
                                class="mdi mdi-arrow-down mr-1"></span>2.83%</p>
                        <p class="text-muted mb-0 ml-2">Since last month</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <h5 class="card-title">Orders</h5>
                        <div class="icon-rounded-primary d-none d-lg-block">
                            <i class="mdi mdi-chart-donut icon-md"></i>
                        </div>
                    </div>
                    <h1 class="mt-lg-3">58470</h1>
                    <div class="d-flex mt-2">
                        <p class="text-success mb-0 font-weight-bold"><span
                                class="mdi mdi-arrow-up mr-1"></span>5.15%</p>
                        <p class="text-muted mb-0 ml-2">Since last month</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="row">
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Overview</h5>
                    <div class="hover-effect-list-primary">
                        <div
                            class="hover-effect-list-item d-flex align-items-center justify-content-between hover-bg-primary active">
                            <div>
                                <p class="font-weight-medium mb-0">Member profite</p>
                            </div>
                            <p class="font-weight-medium mb-0">+38562</p>
                        </div>
                        <div
                            class="hover-effect-list-item d-flex align-items-center justify-content-between hover-bg-primary">
                            <div>
                                <p class="font-weight-medium mb-0">Overdue Cases</p>
                            </div>
                            <p class="font-weight-medium mb-0">+58621</p>
                        </div>
                        <div
                            class="hover-effect-list-item d-flex align-items-center justify-content-between hover-bg-primary">
                            <div>
                                <p class="font-weight-medium mb-0">Support</p>
                            </div>
                            <p class="font-weight-medium mb-0">+15542</p>
                        </div>
                        <div
                            class="hover-effect-list-item d-flex align-items-center justify-content-between hover-bg-primary">
                            <div>
                                <p class="font-weight-medium mb-0">Excess dividents</p>
                            </div>
                            <p class="font-weight-medium mb-0">+48620</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card position-relative">
                <div class="card-body">
                    <h5 class="card-title">Activity feed</h5>
                    <div id="activityFeed"
                        class="carousel slide activity-feed-carousel position-static"
                        data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="d-flex pb-3  hover-text-primary">
                                    <div class="mr-4">
                                        <p class="font-weight-medium mb-3 hover-text">14 Oct 2018</p>
                                        <p class="text-muted">09:00 am</p>
                                        <p class="text-muted">12:05 am</p>
                                    </div>
                                    <div class="ml-3">
                                        <p class="font-weight-medium mb-3 hover-text">System supporter
                                        </p>
                                        <p class="text-muted">new project</p>
                                        <p class="text-muted">Review</p>
                                    </div>
                                </div>
                                <div class="d-flex pb-3 pt-4  hover-text-primary">
                                    <div class="mr-4">
                                        <p class="font-weight-medium mb-3 hover-text">15 Aug 2018</p>
                                        <p class="text-muted mb-2">10:30 am</p>
                                        <p class="text-muted mb-2">11:35 am</p>
                                        <p class="text-muted mb-2">11:10 am</p>
                                    </div>
                                    <div class="ml-3">
                                        <p class="font-weight-medium mb-3 hover-text">Joel Barker</p>
                                        <p class="text-muted mb-2">Support</p>
                                        <p class="text-muted mb-2">Ui design completed</p>
                                        <p class="text-muted mb-2">Project completed</p>
                                    </div>
                                </div>
                                <div class="d-flex pt-4 hover-text-primary">
                                    <div class="mr-4">
                                        <p class="font-weight-medium mb-3 hover-text">15 Aug 2018</p>
                                        <p class="text-muted mb-0">11:00 am</p>
                                    </div>
                                    <div class="ml-3">
                                        <p class="font-weight-medium mb-3 hover-text">Joel Barker</p>
                                        <p class="text-muted mb-0">Levelled Up</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="d-flex pb-3  hover-text-primary">
                                    <div class="mr-4">
                                        <p class="font-weight-medium mb-3 hover-text">21 Nov 2018</p>
                                        <p class="text-muted">10:30 am</p>
                                        <p class="text-muted">11:45 am</p>
                                    </div>
                                    <div class="ml-3">
                                        <p class="font-weight-medium mb-3 hover-text">Frontend engineer
                                        </p>
                                        <p class="text-muted">Project review</p>
                                        <p class="text-muted">Design Started</p>
                                    </div>
                                </div>
                                <div class="d-flex pb-3 pt-4  hover-text-primary">
                                    <div class="mr-4">
                                        <p class="font-weight-medium mb-3 hover-text">25 Jan 2018</p>
                                        <p class="text-muted mb-2">11:35 am</p>
                                        <p class="text-muted mb-2">01:20 am</p>
                                        <p class="text-muted mb-2">10:12 am</p>
                                    </div>
                                    <div class="ml-3">
                                        <p class="font-weight-medium mb-3 hover-text">John Barker</p>
                                        <p class="text-muted mb-2">Project Submitted</p>
                                        <p class="text-muted mb-2">New Project</p>
                                        <p class="text-muted mb-2">UI Design</p>
                                    </div>
                                </div>
                                <div class="d-flex pt-4 hover-text-primary">
                                    <div class="mr-4">
                                        <p class="font-weight-medium mb-3 hover-text">28 Jul 2018</p>
                                        <p class="text-muted mb-0">02:00 pm</p>
                                    </div>
                                    <div class="ml-3">
                                        <p class="font-weight-medium mb-3 hover-text">Joel Barker</p>
                                        <p class="text-muted mb-0">Levelled Up</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="d-flex pb-3  hover-text-primary">
                                    <div class="mr-4">
                                        <p class="font-weight-medium mb-3 hover-text">22 Dec 2018</p>
                                        <p class="text-muted">08:00 am</p>
                                        <p class="text-muted">11:40 am</p>
                                    </div>
                                    <div class="ml-3">
                                        <p class="font-weight-medium mb-3 hover-text">Backend Developer
                                        </p>
                                        <p class="text-muted">Laravel project</p>
                                        <p class="text-muted">Project finished</p>
                                    </div>
                                </div>
                                <div class="d-flex pb-3 pt-4  hover-text-primary">
                                    <div class="mr-4">
                                        <p class="font-weight-medium mb-3 hover-text">24 Nov 2018</p>
                                        <p class="text-muted">06:00 am</p>
                                    </div>
                                    <div class="ml-3">
                                        <p class="font-weight-medium mb-3 hover-text">Joel Barker</p>
                                        <p class="text-muted">Levelled Up</p>
                                    </div>
                                </div>
                                <div class="d-flex pt-4 hover-text-primary">
                                    <div class="mr-4">
                                        <p class="font-weight-medium mb-3 hover-text">15 Aug 2018</p>
                                        <p class="text-muted mb-2">11:40 am</p>
                                        <p class="text-muted mb-2">01:15 am</p>
                                        <p class="text-muted mb-0">04:40 am</p>
                                    </div>
                                    <div class="ml-3">
                                        <p class="font-weight-medium mb-3 hover-text">Villiam Mann</p>
                                        <p class="text-muted mb-2">Support</p>
                                        <p class="text-muted mb-2">Ui design completed</p>
                                        <p class="text-muted mb-0">Project completed</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#activityFeed" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#activityFeed" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body d-flex flex-column justify-content-between">
                    <div class="d-flex justify-content-between flex-wrap">
                        <h5 class="card-title">Sales statitics</h5>
                        <div class="dropdown mb-3 mb-md-0">
                            <button
                                class="btn btn-sm btn-outline-light btn-rounded dropdown-toggle text-dark btn-hover-border-only"
                                type="button" id="dropdownMenuDate1" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="true">
                                2018
                            </button>
                            <div class="dropdown-menu dropdown-menu-right"
                                aria-labelledby="dropdownMenuDate1">
                                <a class="dropdown-item" href="#">2015</a>
                                <a class="dropdown-item" href="#">2016</a>
                                <a class="dropdown-item" href="#">2017</a>
                                <a class="dropdown-item" href="#">2018</a>
                            </div>
                        </div>
                    </div>
                    <h1>39577</h1>
                    <p class="text-success font-weight-bold mb-0">5.15(+20%)</p>
                    <canvas id="sales-statitics-chart"></canvas>
                </div>
                <div class="bg-primary d-flex justify-content-around py-4">
                    <div class="ml-4">
                        <h4 class="text-white">35%</h4>
                        <h6 class="mb-0 text-white">Growth</h6>
                    </div>
                    <div>
                        <h4 class="text-white">45%</h4>
                        <h6 class="mb-0 text-white">Sales</h6>
                    </div>
                    <div class="mr-4">
                        <h4 class="text-white">65%</h4>
                        <h6 class="mb-0 text-white">Orders</h6>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    {{-- <div class="row">
        <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Latest queries</h5>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Basic info</th>
                                    <th>Ticket id</th>
                                    <th>Phone</th>
                                    <th>Created</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="icon-rounded-primary icon-rounded-md">
                                                <h4>H</h4>
                                            </div>
                                            <div class=" ml-4 pl-2">
                                                <p class="font-weight-medium">Heiley Grand</p>
                                                <p class="text-muted mb-0">grand_heiley@yahoo.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="font-weight-medium">
                                        #IDKV121649 </td>
                                    <td class="font-weight-medium">
                                        678-546-2394
                                    </td>
                                    <td class="font-weight-medium">21 March 2018</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="icon-rounded-primary icon-rounded-md">
                                                <h4>J</h4>
                                            </div>
                                            <div class=" ml-4 pl-2">
                                                <p class="font-weight-medium ">Jed Huel</p>
                                                <p class="text-muted mb-0">huel_jed@yahoo.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="font-weight-medium">
                                        #IDKV121389 </td>
                                    <td class="font-weight-medium">
                                        234-564-3495
                                    </td>
                                    <td class="font-weight-medium">21 March 2018</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="icon-rounded-primary icon-rounded-md">
                                                <h4>B</h4>
                                            </div>
                                            <div class=" ml-4 pl-2">
                                                <p class="font-weight-medium">Beahen Burdette</p>
                                                <p class="text-muted mb-0">bruete_beahen@yahoo.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="font-weight-medium">
                                        #IDKV126389 </td>
                                    <td class="font-weight-medium">
                                        456-456-2345
                                    </td>
                                    <td class="font-weight-medium">21 March 2018</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="icon-rounded-primary icon-rounded-md">
                                                <h4>K</h4>
                                            </div>
                                            <div class=" ml-4 pl-2">
                                                <p class="font-weight-medium">Keara Gerhold</p>
                                                <p class="text-muted mb-0">gerhold_keara@yahoo.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="font-weight-medium">
                                        #IDKV121237
                                    </td>
                                    <td class="font-weight-medium">
                                        866-777-8425
                                    </td>
                                    <td class="font-weight-medium">21 March 2018</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="icon-rounded-primary icon-rounded-md">
                                                <h4>H</h4>
                                            </div>
                                            <div class=" ml-4 pl-2">
                                                <p class="font-weight-medium">Heiley Grand</p>
                                                <p class="text-muted mb-0">grand_heiley@yahoo.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="font-weight-medium">
                                        #IDKV121649 </td>
                                    <td class="font-weight-medium">
                                        678-546-2394
                                    </td>
                                    <td class="font-weight-medium">21 March 2018</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Notifications</h5>
                    <div class="d-flex align-items-start pb-4  pt-2 border-bottom">
                        <div>
                            <div class="icon-rounded-primary icon-rounded-md">
                                <h4 class="font-weight-normal">A</h4>
                            </div>
                        </div>
                        <div class="ml-3">
                            <p class="text-muted">11:00 am</p>
                            <p class="text-dark font-weight-medium">Alexander Burns</p>
                            <p class="text-muted">Peace On Earth A Wonderful With But No Way</p>
                            <button class="btn btn-primary btn-sm px-4 mt-2">More</button>
                        </div>
                    </div>
                    <div class="d-flex align-items-start pb-4 pt-4 border-bottom">
                        <div>
                            <div class="icon-rounded-primary icon-rounded-md">
                                <h4 class="font-weight-normal">A</h4>
                            </div>
                        </div>
                        <div class="ml-3">
                            <p class="text-muted">09:30 am</p>
                            <p class="text-dark font-weight-medium">Maud Delgado</p>
                            <p class="text-muted">On Being Human</p>
                            <button class="btn btn-primary btn-sm px-4 mt-2">More</button>
                        </div>
                    </div>
                    <div class="d-flex align-items-start pb-2 pt-4">
                        <div>
                            <div class="icon-rounded-primary icon-rounded-md">
                                <h4 class="font-weight-normal">A</h4>
                            </div>
                        </div>
                        <div class="ml-3">
                            <p class="text-muted">10:30 am</p>
                            <p class="text-dark font-weight-medium">Hettie Douglas</p>
                            <p class="text-muted">Althusser Competing Interpellations And Third
                                Text</p>
                            <button class="btn btn-primary btn-sm px-4 mt-2">More</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</div>
@endsection