<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-dark"></i>
                            <div class="ms-3">
                                
                                <p class="mb-2">Today Articles</p>
                                <h6 class="mb-0">{{count($news)}}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-dark"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Authors</p>
                                <h6 class="mb-0">{{count($authors)}}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-dark"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Readers</p>
                                <h6 class="mb-0">{{count($users)}}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-pie fa-3x text-dark"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Views</p>
                                <h6 class="mb-0">23,982,744</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>