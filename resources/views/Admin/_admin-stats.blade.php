<div class="container-fluid pt-4 px-4 h-50 mb-5">
                <div class="row g-4 ">
                    <div class="w-50 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-5">
                            <i class="fa fa-chart-line fa-4x text-dark"></i>
                            <div class="ms-3">
                                
                                <h6 class="mb-2 text-muted">All News</h6>
                                <h1 class="mb-0">{{count($news)}}</h1>
                            </div>
                        </div>
                    </div>
                    <div class="w-50 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-5">
                            <i class="fa fa-chart-bar fa-4x text-dark"></i>
                            <div class="ms-3">
                                <h6 class="mb-2 text-muted">Total Users</h6>
                                <h1 class="mb-0">{{count($users)}}</h1>
                            </div>
                        </div>
                    </div>
                    <div class="w-50 col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-5">
                        <i class="fas fa-list-alt fa-4x text-dark"></i>
                            <div class="ms-3">
                                <h6 class="mb-2 text-muted">Total Categories</h6>
                                <h1 class="mb-0">{{count($categories)}}</h1>
                            </div>
                        </div>
                    </div>
                    <div class="w-50 col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-5">
                        <i class="fas fa-comment fa-4x text-dark"></i>
                            <div class="ms-3">
                                <h6 class="mb-2 text-muted">Total Comments</h6>
                                <h1 class="mb-0">{{count($comments)}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>