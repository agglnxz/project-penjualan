@extends('layoutsAdmin.app')
@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 col-xl-3">
        <div class="card bg-light-primary shadow-none">
          <div class="card-body p-4">
            <div class="d-flex align-items-center">
              <div class="round rounded bg-primary d-flex align-items-center justify-content-center">
                <i class="cc BTC text-white fs-7" title="BTC"></i>
              </div>
              <h6 class="mb-0 ms-3">BTC</h6>
              <div class="ms-auto text-primary d-flex align-items-center">
                <i class="ti ti-trending-up text-primary fs-6 me-1"></i>
                <span class="fs-2 fw-bold">+ 2.30%</span>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between mt-4">
              <h3 class="mb-0 fw-semibold fs-7">0.1245</h3>
              <span class="fw-bold">$1,015.00</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-xl-3">
        <div class="card bg-light-danger shadow-none">
          <div class="card-body p-4">
            <div class="d-flex align-items-center">
              <div class="round rounded bg-danger d-flex align-items-center justify-content-center">
                <i class="cc ETH text-white fs-7" title="ETH"></i>
              </div>
              <h6 class="mb-0 ms-3">ETH</h6>
              <div class="ms-auto text-danger d-flex align-items-center">
                <i class="ti ti-trending-up text-danger fs-6 me-1"></i>
                <span class="fs-2 fw-bold">+ 3.20%</span>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between mt-4">
              <h3 class="mb-0 fw-semibold fs-7">0.5620</h3>
              <span class="fw-bold">$2,110.00</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-xl-3">
        <div class="card bg-light-success shadow-none">
          <div class="card-body p-4">
            <div class="d-flex align-items-center">
              <div class="round rounded bg-success d-flex align-items-center justify-content-center">
                <i class="cc LTC text-white fs-7" title="LTC"></i>
              </div>
              <h6 class="mb-0 ms-3">LTC</h6>
              <div class="ms-auto text-info d-flex align-items-center">
                <i class="ti ti-trending-down text-success fs-6 me-1"></i>
                <span class="fs-2 fw-bold text-success">+ 3.20%</span>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between mt-4">
              <h3 class="mb-0 fw-semibold fs-7">1.200</h3>
              <span class="fw-bold">$1,100.00</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-xl-3">
        <div class="card bg-light-warning shadow-none">
          <div class="card-body p-4">
            <div class="d-flex align-items-center">
              <div class="round rounded bg-warning d-flex align-items-center justify-content-center">
                <i class="cc XRP text-white fs-7" title="XRP"></i>
              </div>
              <h6 class="mb-0 ms-3">XRP</h6>
              <div class="ms-auto text-info d-flex align-items-center">
                <i class="ti ti-trending-down text-warning fs-6 me-1"></i>
                <span class="fs-2 fw-bold text-warning">+ 2.20%</span>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between mt-4">
              <h3 class="mb-0 fw-semibold fs-7">1.150</h3>
              <span class="fw-bold">$2,150.00</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-9">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title fw-semibold">Featured BTCs</h5>
            <p class="card-subtitle mb-0">The Top BTCs for New Investors</p>
            <div class="row mt-4">
              <div class="col-md-4">
                <div class="card overflow-hidden shadow-none border card-hover mb-4 mb-md-0">
                  <img src="../../dist/images/crypto/c1.jpg" alt="img" />
                  <div class="card-body p-4">
                    <div class="d-flex align-items-center justify-content-between">
                      <div>
                        <h6 class="mb-0 fs-5 fw-semibold">Els Idunn</h6>
                        <span>els@email</span>
                      </div>
                      <img src="../../dist/images/profile/user-1.jpg" alt="user1" width="35" class="rounded-circle" />
                    </div>
                    <div class="d-flex align-items-start justify-content-between mt-3">
                      <span>Price</span>
                      <div class="text-end">
                        <h5 class="mb-0 fs-5 fw-semibold">
                          <i class="cc BTC" title="BTC"></i> 0.25 BTC
                        </h5>
                        <span class="fs-3">$21,23,000</span>
                      </div>
                    </div>
                    <div class="d-flex align-items-start justify-content-between mt-3">
                      <span>
                        <i class="ti ti-clock-hour-4 me-1 fs-4"></i>5d 16h </span>
                      <span>
                        <i class="ti ti-eye fs-4 me-1"></i>2.5k </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card overflow-hidden shadow-none border card-hover mb-4 mb-md-0">
                  <img src="../../dist/images/crypto/c2.jpg" alt="img" />
                  <div class="card-body p-4">
                    <div class="d-flex align-items-center justify-content-between">
                      <div>
                        <h6 class="mb-0 fs-5 fw-semibold">Liam William</h6>
                        <span>lian@email</span>
                      </div>
                      <img src="../../dist/images/profile/user-2.jpg" alt="user1" width="35" class="rounded-circle" />
                    </div>
                    <div class="d-flex align-items-start justify-content-between mt-3">
                      <span>Price</span>
                      <div class="text-end">
                        <h5 class="mb-0 fs-5 fw-semibold">
                          <i class="cc ETH" title="ETH"></i> 1.42 ETH
                        </h5>
                        <span class="fs-3">$15,000</span>
                      </div>
                    </div>
                    <div class="d-flex align-items-start justify-content-between mt-3">
                      <span>
                        <i class="ti ti-clock-hour-4 me-1 fs-4"></i>3d 1h </span>
                      <span>
                        <i class="ti ti-eye fs-4 me-1"></i>1.2k </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card overflow-hidden shadow-none border card-hover mb-4 mb-md-0">
                  <img src="../../dist/images/crypto/c3.jpg" alt="img" />
                  <div class="card-body p-4">
                    <div class="d-flex align-items-center justify-content-between">
                      <div>
                        <h6 class="mb-0 fs-5 fw-semibold">John Smith</h6>
                        <span>john@email</span>
                      </div>
                      <img src="../../dist/images/profile/user-3.jpg" alt="user1" width="35" class="rounded-circle" />
                    </div>
                    <div class="d-flex align-items-start justify-content-between mt-3">
                      <span>Price</span>
                      <div class="text-end">
                        <h5 class="mb-0 fs-5 fw-semibold">
                          <i class="cc XRP" title="XRP"></i> 0.25 XRP
                        </h5>
                        <span class="fs-3">$61,25,000</span>
                      </div>
                    </div>
                    <div class="d-flex align-items-start justify-content-between mt-3">
                      <span>
                        <i class="ti ti-clock-hour-4 me-1 fs-4"></i>2d 11h </span>
                      <span>
                        <i class="ti ti-eye fs-4 me-1"></i>5.3k </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
