@extends('Admin.Layout.app')
@section('title', 'Dashboard')
@section('content')
<section class="admin-content">
        <div class="container-fluid bg-dark m-b-30">
            <div class="row">

                <div class="col-12 text-white p-t-40 p-b-90">

                    <h4 class="  "><span class="btn btn-white-translucent"><i
                                    class="mdi mdi-shape-circle-plus "></i></span> <span class="js-greeting"></span>,
                        Deepak!</h4>
                    <p class="opacity-75 ">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad corporis dolores <br> doloribus
                        esse et iste laboriosam maiores maxime, mollitia nisi numquam omnis praesentium provident quam
                        quasi quia quisquam recusandae vel.
                    </p>
                    <a href="#" class="btn btn-white-translucent">View Reports</a>

                </div>
            </div>
        </div>
        <div class="container-fluid pull-up">
            <div class="row">
                <div class="col m-b-30">
                    <div class="card ">
                        <div class="   text-center card-body">
                            <div class="text-success   ">
                                <div class="avatar avatar-sm ">
                                    <span class="avatar-title rounded-circle badge-soft-success"><i
                                                class="mdi mdi-arrow-up-bold mdi-18px"></i> </span>

                                </div>
                                <h6 class="m-t-5 m-b-0"> 19%</h6>
                            </div>


                            <div class=" text-center">
                                <h3>$199,580 </h3>
                            </div>
                            <div class="text-overline ">
                                CURRENT FISCAL
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col m-b-30">
                    <div class="card ">
                        <div class="   text-center card-body">
                            <div class="text-danger   ">
                                <div class="avatar avatar-sm ">
                                    <span class="avatar-title rounded-circle badge-soft-danger"><i
                                                class="mdi mdi-arrow-down-bold mdi-18px"></i> </span>

                                </div>
                                <h6 class="m-t-5 m-b-0"> 32%</h6>
                            </div>


                            <div class=" text-center">
                                <h3>$65,055 </h3>
                            </div>
                            <div class="text-overline ">
                                Returning AVG
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col m-b-30">
                    <div class="card ">
                        <div class="   text-center card-body">
                            <div class="text-warning   ">
                                <div class="avatar avatar-sm ">
                                    <span class="avatar-title rounded-circle badge-soft-warning"><i
                                                class="mdi mdi-arrange-send-to-back mdi-18px"></i> </span>

                                </div>
                                <h6 class="m-t-5 m-b-0"> 74%</h6>
                            </div>


                            <div class=" text-center">
                                <h3> 35 </h3>
                            </div>
                            <div class="text-overline ">
                                on-going Projects
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col m-b-30">
                    <div class="card ">
                        <div class="   text-center card-body">
                            <div class="text-info   ">
                                <div class="avatar avatar-sm ">
                                    <span class="avatar-title rounded-circle badge-soft-info"><i
                                                class="mdi mdi-account-convert mdi-18px"></i> </span>

                                </div>
                                <h6 class="m-t-5 m-b-0"> 36%</h6>
                            </div>


                            <div class=" text-center">
                                <h3>$899,580 </h3>
                            </div>
                            <div class="text-overline ">
                                Recurring bills
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col d-lg-block d-none m-b-30">
                    <div class="card ">
                        <div class="   text-center card-body">
                            <div class="text-danger   ">
                                <div class="avatar avatar-sm ">
                                    <span class="avatar-title rounded-circle badge-soft-danger"><i
                                                class="mdi mdi-arrow-up-bold mdi-18px"></i> </span>

                                </div>
                                <h6 class="m-t-5 m-b-0"> 49%</h6>
                            </div>


                            <div class=" text-center">
                                <h3>$19,124 </h3>
                            </div>
                            <div class="text-overline ">
                                server cost
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col visible-xlg m-b-30">
                    <div class="card">
                        <div class="   text-center card-body">
                            <div class="text-success   ">
                                <div class="avatar avatar-sm ">
                                    <span class="avatar-title rounded-circle badge-soft-success"><i
                                                class="mdi mdi-arrow-up-bold mdi-18px"></i> </span>

                                </div>
                                <h6 class="m-t-5 m-b-0"> 85%</h6>
                            </div>


                            <div class=" text-center">
                                <h3>$82,580 </h3>
                            </div>
                            <div class="text-overline ">
                                mobile ads
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <div class="row">
                <div class="col-lg-6  m-b-30">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Quarterly User Growth</div>

                            <div class="card-controls">

                                <a href="#" class="js-card-refresh icon"> </a>
                                <div class="dropdown">
                                    <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                                                class="icon mdi  mdi-dots-vertical"></i> </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <button class="dropdown-item" type="button">Action</button>
                                        <button class="dropdown-item" type="button">Another action</button>
                                        <button class="dropdown-item" type="button">Something else here</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card-body">
                            <div id="chart-01"></div>
                        </div>
                        <div class="">
                        </div>
                        <div class="card-footer">
                            <div class="d-flex  justify-content-between">
                                <h6 class="m-b-0 my-auto"><span class="opacity-75"> <i class="mdi mdi-information"></i> Restart your Re-targeting Campaigns</span>
                                </h6>
                                <a href="#!" class="btn btn-white shadow-none">See Campaigns</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6  m-b-30">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Country Wise Distribution</div>

                            <div class="card-controls">

                                <a href="#" class="js-card-refresh icon"> </a>
                                <div class="dropdown">
                                    <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                                                class="icon mdi  mdi-dots-vertical"></i> </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <button class="dropdown-item" type="button">Action</button>
                                        <button class="dropdown-item" type="button">Another action</button>
                                        <button class="dropdown-item" type="button">Something else here</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card-body">


                            <div id="chart-02"></div>
                        </div>
                        <div class="">
                        </div>
                        <div class="card-footer">
                            <div class="d-flex  justify-content-between">
                                <h6 class="m-b-0 my-auto"><span class="opacity-75"> <i class="mdi mdi-information"></i> Restart your Re-targeting Campaigns</span>
                                </h6>
                                <a href="#!" class="btn btn-white shadow-none">See Campaigns</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6  m-b-30">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Top grossing Products</div>

                            <div class="card-controls">

                                <a href="#" class="js-card-refresh icon"> </a>
                                <div class="dropdown">
                                    <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                                                class="icon mdi  mdi-dots-vertical"></i> </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <button class="dropdown-item" type="button">Action</button>
                                        <button class="dropdown-item" type="button">Another action</button>
                                        <button class="dropdown-item" type="button">Something else here</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card-body">


                            <div id="chart-03"></div>
                        </div>
                        <div class="">
                        </div>
                        <div class="card-footer">
                            <div class="d-flex  justify-content-between">
                                <h6 class="m-b-0 my-auto"><span class="opacity-75"> <i class="mdi mdi-information"></i> Restart your Re-targeting Campaigns</span>
                                </h6>
                                <a href="#!" class="btn btn-white shadow-none">See Campaigns</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6  m-b-30">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Gender Based</div>

                            <div class="card-controls">

                                <a href="#" class="js-card-refresh icon"> </a>
                                <div class="dropdown">
                                    <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                                                class="icon mdi  mdi-dots-vertical"></i> </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <button class="dropdown-item" type="button">Action</button>
                                        <button class="dropdown-item" type="button">Another action</button>
                                        <button class="dropdown-item" type="button">Something else here</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card-body">


                            <div id="chart-04"></div>
                        </div>
                        <div class="">
                        </div>
                        <div class="card-footer">
                            <div class="d-flex  justify-content-between">
                                <h6 class="m-b-0 my-auto"><span class="opacity-75"> <i class="mdi mdi-information"></i> Restart your Re-targeting Campaigns</span>
                                </h6>
                                <a href="#!" class="btn btn-white shadow-none">See Campaigns</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-8 m-b-30">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">User Renewals</div>

                            <div class="card-controls">

                                <a href="#" class="js-card-refresh icon"> </a>
                                <div class="dropdown">
                                    <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                                                class="icon mdi  mdi-dots-vertical"></i> </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <button class="dropdown-item" type="button">Action</button>
                                        <button class="dropdown-item" type="button">Another action</button>
                                        <button class="dropdown-item" type="button">Something else here</button>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="table-responsive">

                            <table class="table table-hover table-sm ">
                                <thead>
                                <tr>
                                    <th>Avatar</th>
                                    <th>Team</th>
                                    <th>location</th>
                                    <th>Progress</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="align-middle">
                                        <div class="avatar avatar-sm avatar-online"><img
                                                    src="assets/img/users/user-1.jpg"
                                                    class="avatar-img avatar-sm rounded-circle" alt="user-image"></div>
                                        <span class="ml-2">Tiger Nixon</span></td>

                                    <td class="align-middle"><span class="badge badge-soft-danger badge-light"> System Architect</span>
                                    </td>
                                    <td class="align-middle">Edinburgh</td>
                                    <td class="align-middle">
                                        <div class="progress">
                                            <div class="progress-bar" style="width: 12%"></div>
                                        </div>
                                    </td>
                                    <td class="text-center align-middle"><a class="btn btn-primary btn-sm" href="#">
                                            Connect</a></td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        <div class="avatar avatar-sm avatar-online"><img
                                                    src="assets/img/users/user-2.jpg"
                                                    class="avatar-img avatar-sm rounded-circle" alt="user-image"></div>
                                        <span class="ml-2">Garrett Rose</span></td>

                                    <td class="align-middle"><span class="badge badge-soft-success"> Accounts</span>
                                    </td>
                                    <td class="align-middle">Tokyo</td>
                                    <td class="align-middle">
                                        <div class="progress">
                                            <div class="progress-bar" style="width: 80%"></div>
                                        </div>
                                    </td>
                                    <td class="text-center align-middle"><a class="btn btn-primary btn-sm" href="#">
                                            Connect</a></td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        <div class="avatar avatar-sm avatar-offline"><img
                                                    src="assets/img/users/user-3.jpg"
                                                    class="avatar-img avatar-sm rounded-circle" alt="user-image"></div>
                                        <span class="ml-2">Ashton Cox</span></td>

                                    <td class="align-middle"><span class="badge badge-soft-primary"> Development</span>
                                    </td>
                                    <td class="align-middle">San Francisco</td>
                                    <td class="align-middle">
                                        <div class="progress">
                                            <div class="progress-bar" style="width: 60%"></div>
                                        </div>
                                    </td>
                                    <td class="text-center align-middle"><a class="btn btn-primary btn-sm" href="#">
                                            Connect</a></td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        <div class="avatar avatar-sm avatar-offline"><img
                                                    src="assets/img/users/user-4.jpg"
                                                    class="avatar-img avatar-sm rounded-circle" alt="user-image"></div>
                                        <span class="ml-2">Cedric Kelly</span></td>

                                    <td class="align-middle"><span class="badge badge-soft-primary"> Development</span>
                                    </td>
                                    <td class="align-middle">Edinburgh</td>
                                    <td class="align-middle">
                                        <div class="progress">
                                            <div class="progress-bar" style="width: 56%"></div>
                                        </div>
                                    </td>
                                    <td class="text-center align-middle"><a class="btn btn-primary btn-sm" href="#">
                                            Connect</a></td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        <div class="avatar avatar-sm avatar-online"><img
                                                    src="assets/img/users/user-5.jpg"
                                                    class="avatar-img avatar-sm rounded-circle" alt="user-image"></div>
                                        <span class="ml-2">Airi Satou</span></td>

                                    <td class="align-middle"><span class="badge badge-soft-primary"> Development</span>
                                    </td>
                                    <td class="align-middle">Tokyo</td>
                                    <td class="align-middle">
                                        <div class="progress">
                                            <div class="progress-bar" style="width: 40%"></div>
                                        </div>
                                    </td>
                                    <td class="text-center align-middle"><a class="btn btn-primary btn-sm" href="#">
                                            Connect</a></td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        <div class="avatar avatar-sm avatar-offline"><img
                                                    src="assets/img/users/user-6.jpg"
                                                    class="avatar-img avatar-sm rounded-circle" alt="user-image"></div>
                                        <span class="ml-2">Brielle Will</span></td>

                                    <td class="align-middle"><span class="badge badge-soft-dark"> Integration </span>
                                    </td>
                                    <td class="align-middle">New York</td>
                                    <td class="align-middle">
                                        <div class="progress">
                                            <div class="progress-bar" style="width: 20%"></div>
                                        </div>
                                    </td>
                                    <td class="text-center align-middle"><a class="btn btn-primary btn-sm" href="#">
                                            Connect</a></td>
                                </tr>


                                </tbody>
                            </table>

                        </div>
                        <div class="card-footer">
                            <div class="d-flex  justify-content-between">
                                <h6 class="m-b-0 my-auto"><span class="opacity-75"> <i class="mdi mdi-information"></i>  List based on your communication history.</span>
                                </h6>
                                <a href="#!" class="btn btn-dark">View All</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 m-b-30">
                    <div class="card ">
                        <div class="card-header">
                            <div class="card-title">Files Library</div>

                            <div class="card-controls">

                                <a href="#" class="js-card-refresh icon"> </a>
                                <div class="dropdown">
                                    <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                                                class="icon mdi  mdi-dots-vertical"></i> </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <button class="dropdown-item" type="button">Action</button>
                                        <button class="dropdown-item" type="button">Another action</button>
                                        <button class="dropdown-item" type="button">Something else here</button>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="list-group list-group-flush ">


                            <div class="list-group-item d-flex  align-items-center">
                                <div class="m-r-20">
                                    <div class="avatar avatar-sm "><img src="assets/img/social/s5.jpg"
                                                                        class="avatar-img avatar-sm rounded" alt="user-image">
                                    </div>
                                </div>
                                <div class="">
                                    <div>Recess.jpg</div>
                                    <div class="text-muted">350 Kb</div>
                                </div>

                                <div class="ml-auto">
                                    <div class="dropdown">
                                        <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="mdi  mdi-dots-vertical mdi-18px"></i> </a>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <button class="dropdown-item" type="button">Action</button>
                                            <button class="dropdown-item" type="button">Another action</button>
                                            <button class="dropdown-item" type="button">Something else here</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="list-group-item d-flex  align-items-center">
                                <div class="m-r-20">
                                    <div class="avatar avatar-sm "><img src="assets/img/social/s4.jpg"
                                                                        class="avatar-img avatar-sm rounded" alt="user-image">
                                    </div>
                                </div>
                                <div class="">
                                    <div>Outing.jpg</div>
                                    <div class="text-muted">1.2 Mb</div>
                                </div>

                                <div class="ml-auto">
                                    <div class="dropdown">
                                        <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="mdi  mdi-dots-vertical mdi-18px"></i> </a>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <button class="dropdown-item" type="button">Action</button>
                                            <button class="dropdown-item" type="button">Another action</button>
                                            <button class="dropdown-item" type="button">Something else here</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="list-group-item d-flex  align-items-center">
                                <div class="m-r-20">
                                    <div class="avatar avatar-sm "><img src="assets/img/logos/nytimes.jpg"
                                                                        class="avatar-img avatar-sm rounded" alt="user-image">
                                    </div>
                                </div>
                                <div class="">
                                    <div>Client.png</div>
                                    <div class="text-muted">45 Mb</div>
                                </div>

                                <div class="ml-auto">
                                    <div class="dropdown">
                                        <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="mdi  mdi-dots-vertical mdi-18px"></i> </a>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <button class="dropdown-item" type="button">Action</button>
                                            <button class="dropdown-item" type="button">Another action</button>
                                            <button class="dropdown-item" type="button">Something else here</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="list-group-item d-flex  align-items-center">
                                <div class="m-r-20">
                                    <div class="avatar avatar-sm ">
                                        <div class="avatar-title bg-dark rounded"><i
                                                    class="mdi mdi-24px mdi-file-pdf"></i></div>
                                    </div>
                                </div>
                                <div class="">
                                    <div>SRS Document</div>
                                    <div class="text-muted">25.5 Mb</div>
                                </div>

                                <div class="ml-auto">
                                    <div class="dropdown">
                                        <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="mdi  mdi-dots-vertical mdi-18px"></i> </a>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <button class="dropdown-item" type="button">Action</button>
                                            <button class="dropdown-item" type="button">Another action</button>
                                            <button class="dropdown-item" type="button">Something else here</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="list-group-item d-flex  align-items-center">
                                <div class="m-r-20">
                                    <div class="avatar avatar-sm ">
                                        <div class="avatar-title bg-dark rounded"><i
                                                    class="mdi mdi-24px mdi-file-document-box"></i></div>
                                    </div>
                                </div>
                                <div class="">
                                    <div>Design Guide.pdf</div>
                                    <div class="text-muted">9 Mb</div>
                                </div>

                                <div class="ml-auto">
                                    <div class="dropdown">
                                        <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="mdi  mdi-dots-vertical mdi-18px"></i> </a>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <button class="dropdown-item" type="button">Action</button>
                                            <button class="dropdown-item" type="button">Another action</button>
                                            <button class="dropdown-item" type="button">Something else here</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="list-group-item d-flex  align-items-center">
                                <div class="m-r-20">
                                    <div class="avatar avatar-sm ">
                                        <div class="avatar avatar-sm ">
                                            <div class="avatar-title  rounded"><i
                                                        class="mdi mdi-24px mdi-code-braces"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <div>response.json</div>
                                    <div class="text-muted">15 Kb</div>
                                </div>

                                <div class="ml-auto">
                                    <div class="dropdown">
                                        <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="mdi  mdi-dots-vertical mdi-18px"></i> </a>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <button class="dropdown-item" type="button">Action</button>
                                            <button class="dropdown-item" type="button">Another action</button>
                                            <button class="dropdown-item" type="button">Something else here</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="list-group-item d-flex  align-items-center">
                                <div class="m-r-20">
                                    <div class="avatar avatar-sm ">
                                        <div class="avatar avatar-sm ">
                                            <div class="avatar-title bg-green rounded"><i
                                                        class="mdi mdi-24px mdi-file-excel"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <div>June Accounts.xls</div>
                                    <div class="text-muted">6 Mb</div>
                                </div>

                                <div class="ml-auto">
                                    <div class="dropdown">
                                        <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="mdi  mdi-dots-vertical mdi-18px"></i> </a>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <button class="dropdown-item" type="button">Action</button>
                                            <button class="dropdown-item" type="button">Another action</button>
                                            <button class="dropdown-item" type="button">Something else here</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>
@endsection()