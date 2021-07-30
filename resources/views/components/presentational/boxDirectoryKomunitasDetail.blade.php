<div class="container mb-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="box__rec3">
                    <div class="container p-0">
                        <div class="row">
                            <div class="col-3 d-flex align-items-start justify-content-center">
                                <div class="rounded_img">
                                    <img width="100%" height="100%" src="{{$foto}}" alt="dokter" />
                                </div>
                            </div>
                            <div class="col-9 d-flex flex-column align-items-start">
                                <h3><strong>{{ $name }}</strong></h3>
                                <ul>
                                    <li class="d-flex align-items-start">
                                        <img class="me-4" src="{{asset('images/placeholder.svg')}}" width="14px" alt="icon web">
                                        <p>{{ $address }}<br></p>
                                    </li>
                                    <li class="mt-3 d-flex align-items-start">
                                        <img class="me-4" src="{{asset('images/phone-call.svg')}}" width="14px" alt="icon web">
                                        <p>{{ $phone }}</p>
                                    </li>
                                    <li class="d-flex align-items-start mb-4">
                                        <img class="me-4" src="{{asset('images/phone-call.svg')}}" width="14px" alt="icon web">
                                        <p>{{ $fax }}</p>
                                    </li>
                                    <li class="d-flex align-items-start">
                                        <img class="me-4" src="{{asset('images/global.svg')}}" width="14px" alt="icon web">
                                        <a href="//{{ $website }}" target="blank" style="color: #00A2E3">{{ $website }}</a>
                                    </li>
                                </ul>
                                {{-- <img src="{{asset('images/global.svg')}}" alt=""> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="jam_op-title">
                    <p>Description</p>
                </div>
                <div class="row jam_op-sch">
                    <div class="col-12">
                        <ul class="list-unstyled">
                            <li></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

