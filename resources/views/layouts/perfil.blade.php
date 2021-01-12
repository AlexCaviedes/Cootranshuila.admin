<div class="user_div">
    <h5 class="brand-name mb-4">User<a href="javascript:void(0)" class="user_btn"><i class="icon-close"></i></a></h5>
    <div class="card">
       {{-- <img class="card-img-top" src="{{ asset('assets/images/gallery/6.jpg') }}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Daniel Kristeen</h5>
            <p class="card-text">795 Folsom Ave, Suite 600 San Francisco, 94107</p>
            <div class="row">
                <div class="col-4">
                    <h6><strong>3265</strong></h6>
                    <small>Post</small>
                </div>
                <div class="col-4">
                    <h6><strong>1358</strong></h6>
                    <small>Followers</small>
                </div>
                <div class="col-4">
                    <h6><strong>10K</strong></h6>
                    <small>Likes</small>
                </div>
            </div>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">michael@example.com</li>
            <li class="list-group-item">+ 202-555-2828</li>
            <li class="list-group-item">October 22th, 1990</li>
        </ul>
        <div class="card-body">
            <a href="javascript:void(0);" class="card-link">View More</a>
            <a href="javascript:void(0);" class="card-link">Another link</a>
        </div>--}}
        
        <div class="right ">
            <div class="notification d-flex">
                <a class="btn btn-facebook" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-power-off mr-2 font-size-16 align-middle mr-1"></i> Salir</a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="form-group">
                <h5 class="card-title">Usuario: {{ \Auth::user()->name }}</h5>
                <h5 class="card-title">Identificacion: {{ \Auth::user()->identificacion }}<h5></p>
                <h5 class="card-title">Email: {{ \Auth::user()->email }}<h5></p>
                <h5 class="card-title">Estado usuario: {{ \Auth::user()->estado }}<h5></p>
            </div>
            {{--<div class="form-group">
                <label class="d-block">Total Expenses <span class="float-right">50%</span></label>
                <div class="progress progress-xs">
                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                </div>
            </div>
            <div class="form-group mb-0">
                <label class="d-block">Gross Profit <span class="float-right">23%</span></label>
                <div class="progress progress-xs">
                    <div class="progress-bar bg-green" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width: 23%;"></div>
                </div>
            </div>--}}
        </div>
    </div>
    {{--<div class="form-group">
        <label class="d-block">Storage <span class="float-right">77%</span></label>
        <div class="progress progress-sm">
            <div class="progress-bar" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;"></div>
        </div>
        <button type="button" class="btn btn-primary btn-block mt-3">Upgrade Storage</button>
    </div>--}}
</div>