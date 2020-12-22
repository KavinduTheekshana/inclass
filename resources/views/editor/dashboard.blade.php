
@extends('layouts.editor')
   
   @section('content')

            <div class="border-bottom-2 py-32pt position-relative z-1">
                <div
                    class="container-fluid page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
                    <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">

                        <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                            <h2 class="mb-0">Teacher Dashboard</h2>

                            <ol class="breadcrumb p-0 m-0">
                                <li class="breadcrumb-item"><a href="dashboard">Home</a></li>

                                <li class="breadcrumb-item active">

                                    Teacher Dashboard

                                </li>

                            </ol>

                        </div>

                        <div class="dropdown">
                            <a href="" class="border rounded d-flex align-items-center p-16pt" data-toggle="dropdown"
                                data-caret="false">

                                <div class="avatar avatar-sm mr-8pt">

                                    <span class="avatar-title rounded bg-primary">FM</span>

                                </div>

                                <small class="ml-4pt flex">
                                    <span class="d-flex align-items-center">
                                        <span class="flex d-flex flex-column">
                                            <strong class="text-100">FrontendMatter Inc.</strong>
                                            <span class="text-50">Select company</span>
                                        </span>
                                        <i class="material-icons icon-16pt text-50 ml-4pt">arrow_drop_down</i>
                                    </span>
                                </small>
                            </a>
                            <div class="dropdown-menu w-100">
                                <div class="dropdown-header"><strong>Select company</strong></div>
                                <a href="" class="dropdown-item active d-flex align-items-center">

                                    <div class="avatar avatar-sm mr-8pt">

                                        <span class="avatar-title rounded bg-primary">FM</span>

                                    </div>

                                    <small class="ml-4pt flex">
                                        <span class="d-flex flex-column">
                                            <strong class="text-black-100">FrontendMatter Inc.</strong>
                                            <span class="text-black-50">Administrator</span>
                                        </span>
                                    </small>
                                </a>
                                <a href="" class="dropdown-item d-flex align-items-center">

                                    <div class="avatar avatar-sm mr-8pt">

                                        <span class="avatar-title rounded bg-accent">HH</span>

                                    </div>

                                    <small class="ml-4pt flex">
                                        <span class="d-flex flex-column">
                                            <strong class="text-black-100">HumaHuma Inc.</strong>
                                            <span class="text-black-50">Publisher</span>
                                        </span>
                                    </small>
                                </a>
                            </div>
                        </div>

                    </div>

                    <div class="row" role="tablist">
                        <div class="col-auto d-flex flex-column">
                            <h6 class="m-0">&dollar;12.3k</h6>
                            <p class="text-50 mb-0 d-flex align-items-center">
                                Earnings
                                <i class="material-icons text-accent ml-4pt icon-16pt">keyboard_arrow_up</i>
                            </p>
                        </div>
                        <div class="col-auto border-left">
                            <h6 class="m-0">264</h6>
                            <p class="text-50 mb-0 d-flex align-items-center">
                                Sales
                                <i class="material-icons text-accent ml-4pt icon-16pt">keyboard_arrow_up</i>
                            </p>
                        </div>
                        <div class="col-auto border-left">
                            <a href="" class="btn btn-accent">New Report</a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="container-fluid page__container">
                <div class="page-section">

                    <div class="row mb-lg-8pt">
                        <div class="col-lg-8">

                            <div class="page-separator">
                                <div class="page-separator__text">Overview</div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">

                                    <div class="card ">
                                        <div class="card-header pb-0 border-0 d-flex">
                                            <div class="flex">
                                                <div class="h2 mb-0">65</div>
                                                <p class="mb-0"><strong>Employees</strong></p>
                                            </div>
                                            <i class="material-icons text-50">more_horiz</i>
                                        </div>
                                        <div class="card-body">
                                            <div class="text-50 mb-16pt">

                                                <div class="mb-4pt">
                                                    <p class="d-flex align-items-center mb-0">
                                                        <small class="flex lh-24pt">In-time</small>
                                                        <small class="lh-24pt">60</small>
                                                    </p>
                                                    <div class="progress" style="height: 4px;">
                                                        <div class="progress-bar bg-primary" role="progressbar"
                                                            style="width: 91%;" aria-valuenow="91" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>

                                                <div class="mb-4pt">
                                                    <p class="d-flex align-items-center mb-0">
                                                        <small class="flex lh-24pt">Late</small>
                                                        <small class="lh-24pt">15</small>
                                                    </p>
                                                    <div class="progress" style="height: 4px;">
                                                        <div class="progress-bar bg-accent" role="progressbar"
                                                            style="width: 22%;" aria-valuenow="22" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>

                                                <div class="mb-4pt">
                                                    <p class="d-flex align-items-center mb-0">
                                                        <small class="flex lh-24pt">Absents</small>
                                                        <small class="lh-24pt">4</small>
                                                    </p>
                                                    <div class="progress" style="height: 4px;">
                                                        <div class="progress-bar bg-warning" role="progressbar"
                                                            style="width: 5%;" aria-valuenow="5" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>

                                                <div>
                                                    <p class="d-flex align-items-center mb-0">
                                                        <small class="flex lh-24pt">Out on Vacation</small>
                                                        <small class="lh-24pt">1</small>
                                                    </p>
                                                    <div class="progress" style="height: 4px;">
                                                        <div class="progress-bar bg-warning" role="progressbar"
                                                            style="width: 1.06%;" aria-valuenow="1.06" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="text-center">
                                                <a href="" class="btn btn-outline-secondary">View employees</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6">

                                    <div class="card ">
                                        <div class="card-header pb-0 border-0 d-flex">
                                            <div class="flex">
                                                <div class="h2 mb-0">12</div>
                                                <p class="mb-0"><strong>Departments</strong></p>
                                            </div>
                                            <i class="material-icons text-50">more_horiz</i>
                                        </div>
                                        <div class="card-body">
                                            <div class="text-50 mb-16pt">

                                                <div class="mb-4pt">
                                                    <p class="d-flex align-items-center mb-0">
                                                        <small class="flex lh-24pt">Human Resources</small>
                                                        <small class="lh-24pt">2</small>
                                                    </p>
                                                    <div class="progress" style="height: 4px;">
                                                        <div class="progress-bar bg-primary" role="progressbar"
                                                            style="width: 7%;" aria-valuenow="7" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>

                                                <div class="mb-4pt">
                                                    <p class="d-flex align-items-center mb-0">
                                                        <small class="flex lh-24pt">Entrepreneurship</small>
                                                        <small class="lh-24pt">8</small>
                                                    </p>
                                                    <div class="progress" style="height: 4px;">
                                                        <div class="progress-bar bg-primary" role="progressbar"
                                                            style="width: 29%;" aria-valuenow="29" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>

                                                <div class="mb-4pt">
                                                    <p class="d-flex align-items-center mb-0">
                                                        <small class="flex lh-24pt">Operations</small>
                                                        <small class="lh-24pt">7</small>
                                                    </p>
                                                    <div class="progress" style="height: 4px;">
                                                        <div class="progress-bar bg-primary" role="progressbar"
                                                            style="width: 25%;" aria-valuenow="25" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>

                                                <div>
                                                    <p class="d-flex align-items-center mb-0">
                                                        <small class="flex lh-24pt">Engineering</small>
                                                        <small class="lh-24pt">10</small>
                                                    </p>
                                                    <div class="progress" style="height: 4px;">
                                                        <div class="progress-bar bg-primary" role="progressbar"
                                                            style="width: 37%;" aria-valuenow="37" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="text-center">
                                                <a href="" class="btn btn-outline-secondary">View departments</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="col-lg-4">

                            <div class="page-separator">
                                <div class="page-separator__text">Birthdays</div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <div class="d-flex align-items-center">
                                        <div class="flex">
                                            <strong>Today</strong>
                                        </div>
                                        <i class="material-icons text-50">more_horiz</i>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="alert alert-soft-warning mb-0 p-8pt">
                                        <div class="d-flex align-items-start">
                                            <div class="mr-8pt">
                                                <i class="material-icons">card_giftcard</i>
                                            </div>
                                            <div class="flex">
                                                <small class="text-100">Take a minute and congratulate them on their
                                                    special day!</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="list-group list-group-flush border-top">

                                    <div class="list-group-item p-16pt">
                                        <div class="d-flex align-items-center" style="white-space: nowrap;">

                                            <div class="avatar avatar-32pt mr-8pt">

                                                <img src="assets/images/256_rsz_1andy-lee-642320-unsplash.jpg"
                                                    alt="Avatar" class="avatar-img rounded-circle">

                                            </div>

                                            <div class="flex ml-4pt">
                                                <div class="d-flex flex-column">
                                                    <p class="mb-0"><strong>Gilbert Barrett</strong></p>
                                                    <small class="text-50">paolo.zieme@gmail.com</small>
                                                </div>
                                            </div>
                                            <a href=""><i class="material-icons text-20 icon-16pt">email</i></a>
                                        </div>
                                    </div>

                                    <div class="list-group-item p-16pt">
                                        <div class="d-flex align-items-center" style="white-space: nowrap;">

                                            <div class="avatar avatar-32pt mr-8pt">

                                                <img src="assets/images/256_michael-dam-258165-unsplash.jpg"
                                                    alt="Avatar" class="avatar-img rounded-circle">

                                            </div>

                                            <div class="flex ml-4pt">
                                                <div class="d-flex flex-column">
                                                    <p class="mb-0"><strong>Noah Allen</strong></p>
                                                    <small class="text-50">shanny.sawayn@yahoo.com</small>
                                                </div>
                                            </div>
                                            <a href=""><i class="material-icons text-20 icon-16pt">email</i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row mb-lg-8pt">
                        <div class="col-lg-8">

                            <div class="page-separator">
                                <div class="page-separator__text">Attendance</div>
                            </div>

                            <div class="card">
                                <div class="card-body p-24pt">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="chart" style="height: 262px;">
                                                <div
                                                    class="text-center fullbleed d-flex align-items-center justify-content-center flex-column z-0">
                                                    <h2 class="m-0">25%</h2>
                                                    <strong>In-time</strong>
                                                </div>
                                                <canvas class="chart-canvas position-relative z-1"
                                                    id="attendanceDoughnutChart"
                                                    data-chart-legend="#attendanceDoughnutChartLegend"
                                                    data-chart-line-background-color="primary;teal;gray.700;gray">
                                                    <span style="font-size: 1rem;"
                                                        class="text-muted"><strong>Attendance</strong> doughnut chart
                                                        goes here.</span>
                                                </canvas>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="nav border-0">
                                                <div class="row no-gutters flex" role="tablist">
                                                    <div class="col-auto">
                                                        <div class="d-flex align-items-center">
                                                            <div class="h2 mb-0 mr-3">17</div>
                                                            <div class="flex">
                                                                <p class="mb-0"><strong>Leave requests</strong></p>
                                                                <p class="text-50 mb-0 lh-1">
                                                                    <small>Last 30 days</small>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto ml-sm-auto">
                                                        <a href="#"><i class="material-icons text-50">more_horiz</i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="attendanceDoughnutChartLegend"
                                                class="chart-legend chart-legend--vertical mt-24pt"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-4">

                            <div class="page-separator">
                                <div class="page-separator__text">Self service</div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <div class="d-flex align-items-center">
                                        <div class="flex">
                                            <strong>Attendance</strong>
                                        </div>
                                        <i class="material-icons text-50">more_horiz</i>
                                    </div>
                                </div>
                                <div
                                    class="card-body d-flex flex-column align-items-center justify-content-center p-24pt">
                                    <div class="mb-24pt d-inline-flex flex-column text-center">
                                        <i class="material-icons text-50 icon-32pt">access_time</i>
                                        <div class="d-flex align-items-center">
                                            <h2 class="m-0">08:58:05</h2>
                                            <strong class="text-50 ml-8pt">am</strong>
                                        </div>
                                    </div>
                                    <div class="d-inline-flex">
                                        <div>
                                            <a href="" class="btn btn-accent mb-16pt">Checkin</a>
                                            <p class="text-70 m-0"><strong>Time</strong></p>
                                            <div class="lh-1"><small class="text-50">08:30 am</small></div>
                                        </div>
                                        <div class="ml-16pt">
                                            <a href="" class="btn btn-secondary disabled mb-16pt">Checkout</a>
                                            <p class="text-70 m-0"><strong>Duration</strong></p>
                                            <div class="lh-1"><small class="text-50">00:28:05</small></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="page-separator">
                        <div class="page-separator__text">Shift distribution</div>
                    </div>

                    <div class="card mb-0">

                        <div class="table-responsive" data-toggle="lists" data-lists-values='["js-lists-values-name"]'>

                            <table class="table table-bordered table-flush mb-0 thead-border-top-0 table-nowrap">
                                <thead>
                                    <tr>

                                        <th style="width: 18px;" class="pr-0 border-right-0">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input js-toggle-check-all"
                                                    data-target="#contacts" id="customCheckAll_contacts">
                                                <label class="custom-control-label" for="customCheckAll_contacts"><span
                                                        class="text-hide">Toggle all</span></label>
                                            </div>
                                        </th>

                                        <th class="border-left-0">
                                            <a href="javascript:void(0)" class="sort"
                                                data-sort="js-lists-values-name">Name</a>
                                        </th>
                                        <th>
                                            <div class="lh-1 d-flex flex-column text-50 my-4pt">
                                                Monday <small>25/02/2019</small>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="lh-1 d-flex flex-column text-50 my-4pt">
                                                Tuesday <small>26/02/2019</small>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="lh-1 d-flex flex-column text-50 my-4pt">
                                                Wednesday <small>27/02/2019</small>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="lh-1 d-flex flex-column text-50 my-4pt">
                                                Thursday <small>28/02/2019</small>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="lh-1 d-flex flex-column text-50 my-4pt">
                                                Friday <small>01/03/2019</small>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="lh-1 d-flex flex-column text-50 my-4pt">
                                                Saturday <small>02/03/2019</small>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="lh-1 d-flex flex-column text-50 my-4pt">
                                                Sunday <small>03/03/2019</small>
                                            </div>
                                        </th>
                                        <th style="width: 24px;"></th>
                                    </tr>
                                </thead>
                                <tbody class="list" id="contacts">

                                    <tr>

                                        <td class="pr-0 border-right-0">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox"
                                                    class="custom-control-input js-check-selected-row"
                                                    id="customCheck1_contacts_1">
                                                <label class="custom-control-label" for="customCheck1_contacts_1"><span
                                                        class="text-hide">Check</span></label>
                                            </div>
                                        </td>

                                        <td class="border-left-0">

                                            <div class="media flex-nowrap align-items-center"
                                                style="white-space: nowrap;">
                                                <div class="avatar avatar-32pt mr-8pt">

                                                    <span
                                                        class="avatar-title rounded-circle bg-white border text-100">BN</span>

                                                </div>
                                                <div class="media-body ml-4pt">

                                                    <p class="mb-0"><strong class="js-lists-values-name">Billy
                                                            Nunez</strong></p>

                                                </div>
                                            </div>

                                        </td>
                                        <td>

                                            <a class="d-flex flex-column border-1 rounded bg-light px-8pt py-4pt lh-1"
                                                href="">
                                                <small><strong
                                                        class="js-lists-values-name text-black-100">Night</strong></small>
                                                <small class="text-black-50">20:00 - 08:00</small>
                                            </a>

                                        </td>
                                        <td>

                                            <a class="d-flex flex-column border-1 rounded bg-light px-8pt py-4pt lh-1"
                                                href="">
                                                <small><strong
                                                        class="js-lists-values-name text-black-100">Night</strong></small>
                                                <small class="text-black-50">20:00 - 08:00</small>
                                            </a>

                                        </td>
                                        <td>

                                        </td>
                                        <td>

                                        </td>
                                        <td>

                                            <a class="d-flex flex-column border-1 rounded bg-light px-8pt py-4pt lh-1"
                                                href="">
                                                <small><strong
                                                        class="js-lists-values-name text-black-100">Day</strong></small>
                                                <small class="text-black-50">07:30 - 20:00</small>
                                            </a>

                                        </td>
                                        <td>

                                            <a class="d-flex flex-column border-1 rounded bg-light px-8pt py-4pt lh-1"
                                                href="">
                                                <small><strong
                                                        class="js-lists-values-name text-black-100">Day</strong></small>
                                                <small class="text-black-50">07:30 - 20:00</small>
                                            </a>

                                        </td>
                                        <td>

                                            <a class="d-flex flex-column border-1 rounded bg-light px-8pt py-4pt lh-1"
                                                href="">
                                                <small><strong
                                                        class="js-lists-values-name text-black-100">Day</strong></small>
                                                <small class="text-black-50">07:30 - 20:00</small>
                                            </a>

                                        </td>
                                        <td class="text-right">
                                            <a href="" class="text-50"><i class="material-icons">more_vert</i></a>
                                        </td>
                                    </tr>

                                    <tr>

                                        <td class="pr-0 border-right-0">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox"
                                                    class="custom-control-input js-check-selected-row"
                                                    id="customCheck1_contacts_2">
                                                <label class="custom-control-label" for="customCheck1_contacts_2"><span
                                                        class="text-hide">Check</span></label>
                                            </div>
                                        </td>

                                        <td class="border-left-0">

                                            <div class="media flex-nowrap align-items-center"
                                                style="white-space: nowrap;">
                                                <div class="avatar avatar-32pt mr-8pt">

                                                    <span
                                                        class="avatar-title rounded-circle bg-white border text-100">TP</span>

                                                </div>
                                                <div class="media-body ml-4pt">

                                                    <p class="mb-0"><strong class="js-lists-values-name">Tony
                                                            Parks</strong></p>

                                                </div>
                                            </div>

                                        </td>
                                        <td>

                                        </td>
                                        <td>

                                        </td>
                                        <td>

                                            <a class="d-flex flex-column border-1 rounded bg-light px-8pt py-4pt lh-1"
                                                href="">
                                                <small><strong
                                                        class="js-lists-values-name text-black-100">Night</strong></small>
                                                <small class="text-black-50">20:00 - 08:00</small>
                                            </a>

                                        </td>
                                        <td>

                                            <a class="d-flex flex-column border-1 rounded bg-light px-8pt py-4pt lh-1"
                                                href="">
                                                <small><strong
                                                        class="js-lists-values-name text-black-100">Night</strong></small>
                                                <small class="text-black-50">20:00 - 08:00</small>
                                            </a>

                                        </td>
                                        <td>

                                        </td>
                                        <td>

                                        </td>
                                        <td>

                                        </td>
                                        <td class="text-right">
                                            <a href="" class="text-50"><i class="material-icons">more_vert</i></a>
                                        </td>
                                    </tr>

                                    <tr class="selected">

                                        <td class="pr-0 border-right-0">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox"
                                                    class="custom-control-input js-check-selected-row" checked=""
                                                    id="customCheck1_contacts_3">
                                                <label class="custom-control-label" for="customCheck1_contacts_3"><span
                                                        class="text-hide">Check</span></label>
                                            </div>
                                        </td>

                                        <td class="border-left-0">

                                            <div class="media flex-nowrap align-items-center"
                                                style="white-space: nowrap;">
                                                <div class="avatar avatar-32pt mr-8pt">

                                                    <img src="assets/images/people/110/guy-1.jpg" alt="Avatar"
                                                        class="avatar-img rounded-circle">

                                                </div>
                                                <div class="media-body ml-4pt">

                                                    <p class="mb-0"><strong class="js-lists-values-name">Gilbert
                                                            Barrett</strong></p>

                                                </div>
                                            </div>

                                        </td>
                                        <td>

                                            <a class="d-flex flex-column border-1 rounded bg-light px-8pt py-4pt lh-1"
                                                href="">
                                                <small><strong
                                                        class="js-lists-values-name text-black-100">Day</strong></small>
                                                <small class="text-black-50">07:30 - 20:00</small>
                                            </a>

                                        </td>
                                        <td>

                                            <a class="d-flex flex-column border-1 rounded bg-light px-8pt py-4pt lh-1"
                                                href="">
                                                <small><strong
                                                        class="js-lists-values-name text-black-100">Day</strong></small>
                                                <small class="text-black-50">07:30 - 20:00</small>
                                            </a>

                                        </td>
                                        <td>

                                        </td>
                                        <td>

                                        </td>
                                        <td>

                                            <a class="d-flex flex-column border-1 rounded bg-light px-8pt py-4pt lh-1"
                                                href="">
                                                <small><strong
                                                        class="js-lists-values-name text-black-100">Night</strong></small>
                                                <small class="text-black-50">20:00 - 08:00</small>
                                            </a>

                                        </td>
                                        <td>

                                            <a class="d-flex flex-column border-1 rounded bg-light px-8pt py-4pt lh-1"
                                                href="">
                                                <small><strong
                                                        class="js-lists-values-name text-black-100">Night</strong></small>
                                                <small class="text-black-50">20:00 - 08:00</small>
                                            </a>

                                        </td>
                                        <td>

                                            <a class="d-flex flex-column border-1 rounded bg-light px-8pt py-4pt lh-1"
                                                href="">
                                                <small><strong
                                                        class="js-lists-values-name text-black-100">Night</strong></small>
                                                <small class="text-black-50">20:00 - 08:00</small>
                                            </a>

                                        </td>
                                        <td class="text-right">
                                            <a href="" class="text-50"><i class="material-icons">more_vert</i></a>
                                        </td>
                                    </tr>

                                    <tr>

                                        <td class="pr-0 border-right-0">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox"
                                                    class="custom-control-input js-check-selected-row"
                                                    id="customCheck1_contacts_4">
                                                <label class="custom-control-label" for="customCheck1_contacts_4"><span
                                                        class="text-hide">Check</span></label>
                                            </div>
                                        </td>

                                        <td class="border-left-0">

                                            <div class="media flex-nowrap align-items-center"
                                                style="white-space: nowrap;">
                                                <div class="avatar avatar-32pt mr-8pt">

                                                    <img src="assets/images/people/110/guy-2.jpg" alt="Avatar"
                                                        class="avatar-img rounded-circle">

                                                </div>
                                                <div class="media-body ml-4pt">

                                                    <p class="mb-0"><strong class="js-lists-values-name">Ollie
                                                            Wallace</strong></p>

                                                </div>
                                            </div>

                                        </td>
                                        <td>

                                        </td>
                                        <td>

                                        </td>
                                        <td>

                                            <a class="d-flex flex-column border-1 rounded bg-light px-8pt py-4pt lh-1"
                                                href="">
                                                <small><strong
                                                        class="js-lists-values-name text-black-100">Day</strong></small>
                                                <small class="text-black-50">07:30 - 20:00</small>
                                            </a>

                                        </td>
                                        <td>

                                            <a class="d-flex flex-column border-1 rounded bg-light px-8pt py-4pt lh-1"
                                                href="">
                                                <small><strong
                                                        class="js-lists-values-name text-black-100">Day</strong></small>
                                                <small class="text-black-50">07:30 - 20:00</small>
                                            </a>

                                        </td>
                                        <td>

                                        </td>
                                        <td>

                                        </td>
                                        <td>

                                        </td>
                                        <td class="text-right">
                                            <a href="" class="text-50"><i class="material-icons">more_vert</i></a>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

                        <div class="card-footer border-0 p-8pt">

                            <ul class="pagination justify-content-start pagination-xsm m-0">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true" class="material-icons">chevron_left</span>
                                        <span>Prev</span>
                                    </a>
                                </li>
                                <li class="page-item dropdown">
                                    <a class="page-link dropdown-toggle" data-toggle="dropdown" href="#"
                                        aria-label="Page">
                                        <span>1</span>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a href="" class="dropdown-item active">1</a>
                                        <a href="" class="dropdown-item">2</a>
                                        <a href="" class="dropdown-item">3</a>
                                        <a href="" class="dropdown-item">4</a>
                                        <a href="" class="dropdown-item">5</a>
                                    </div>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span>Next</span>
                                        <span aria-hidden="true" class="material-icons">chevron_right</span>
                                    </a>
                                </li>
                            </ul>

                        </div>


                    </div>

                </div>
            </div>

           

        @endsection