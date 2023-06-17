
<!DOCTYPE html>
<html>
<!-- Mirrored from gambolthemes.net/workwise-new/jobs.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Mar 2021 08:54:39 GMT -->
<head>
    <meta charset="UTF-8">
    <title>WorkWise Html Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/frontend-assets/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/frontend-assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/frontend-assets/css/jquery.range.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/frontend-assets/css/line-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/frontend-assets/css/line-awesome-font-awesome.min.css') }}">
    <link href="{{ asset('/frontend-assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/frontend-assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/frontend-assets/lib/slick/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/frontend-assets/lib/slick/slick-theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/frontend-assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/frontend-assets/css/responsive.css') }}">
</head>
<style>
    .nav-pills.tabs-my .nav-link.active, .nav-pills.tabs-my .show>.nav-link {
        background: #e44d3a;
        color: #fff;
    }
    .nav-pills.tabs-my .nav-link {
        color: #e44d3a;
    }
</style>
<body oncontextmenu="return false;">
<div class="wrapper">
    <header>
        <div class="container">
            <div class="header-data">
                <div class="logo">
                    <a href="/" title=""><img src="{{ asset('/frontend-assets/images/logo.png') }}" alt=""></a>
                </div>
                <div class="search-bar"></div>
                <nav>
                    <ul>
                        <li>
                            <a href="jobs" title="">
                                <span><img src="{{ asset('/frontend-assets/images/icon5.png') }}" alt=""></span>
                                Jobs
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="menu-btn">
                    <a href="#" title=""><i class="fa fa-bars"></i></a>
                </div>
                <div class="user-account">
                    <div class="user-info">
                        <img src="{{ asset('/frontend-assets/images/resources/user.png') }}" alt="">
                        <a href="#" title="">{{ auth()->user()->full_name  }}</a>
                        <i class="la la-sort-down"></i>
                    </div>
                    <div class="user-account-settingss">
                        <h3 class="tc"><a href="{{ route('logout') }}" title="">Logout</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="main-section">
            <div class="container">
                <div class="main-section-data">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="filter-secs">
                                <div class="filter-heading">
                                    <h3>Filters</h3>
                                    <a href="#" title="">Clear all filters</a>
                                </div>
                                <div class="paddy">
                                    <div class="filter-dd">
                                        <div class="filter-ttl">
                                            <h3>Skills</h3>
                                        </div>
                                        <input class="form-control form-control-sm" type="text" name="search-skills" placeholder="Search skills">
                                    </div>
                                    <div class="filter-dd">
                                        <div class="filter-ttl">
                                            <h3>Availabilty</h3>
                                        </div>
                                        <ul class="avail-checks">
                                            <li>
                                                <input type="radio" name="cc" id="c1">
                                                <label for="c1">
                                                    <span></span>
                                                </label>
                                                <small>Hourly</small>
                                            </li>
                                            <li>
                                                <input type="radio" name="cc" id="c2">
                                                <label for="c2">
                                                    <span></span>
                                                </label>
                                                <small>Part Time</small>
                                            </li>
                                            <li>
                                                <input type="radio" name="cc" id="c3">
                                                <label for="c3">
                                                    <span></span>
                                                </label>
                                                <small>Full Time</small>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="filter-dd">
                                        <div class="filter-ttl">
                                            <h3>Job Type</h3>
                                        </div>
                                        <select class="form-control form-control-sm">
                                            <option>Filter By Job Types</option>
                                            @forelse($types as $type )
                                            <option>{{ $type->title }}</option>
                                            @empty
                                                <option>No Job Types Found!</option>
                                            @endforelse
                                        </select>
                                    </div>
                                    <div class="filter-dd">
                                        <div class="filter-ttl">
                                            <h3>Pay Rate / Hr ($)</h3>
                                        </div>
                                        <div class="rg-slider">
                                            <input class="rn-slider slider-input" type="hidden" value="5,50" />
                                        </div>
                                        <div class="rg-limit">
                                            <h4>1</h4>
                                            <h4>100+</h4>
                                        </div>
                                    </div>
                                    <div class="filter-dd">
                                        <div class="filter-ttl">
                                            <h3>Countries</h3>
                                        </div>
                                        <select class="form-control form-control-sm all_countries">
                                            <option>Filter By Country</option>
                                            @forelse($countries as $country)
                                            <option>{{ $country->name }}</option>
                                                @empty
                                                <option>No Country Found</option>
                                            @endforelse
                                        </select>
                                    </div>
                                    <input class="btn btn-block text-white" type="button" value="Filter" style="background-color: #e44d3a;">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="main-ws-sec">
                                <div class="posts-section">
                                    <ul class="nav nav-pills nav-justified mb-3 tabs-my" id="pills-tab" role="tablist">
                                        <li class="nav-item" >
                                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">My Post</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">All Post</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                            @forelse($myJobs as $myJob)
                                                <div class="posty">
                                                    <div class="post-bar no-margin">
                                                        <div class="post_topbar">
                                                            <div class="usy-dt">
                                                                <img src="{{ asset('/frontend-assets/images/resources/us-pc2.png') }}" alt="">
                                                                <div class="usy-name">
                                                                    <h3>{{ $myJob->user->full_name  }}</h3>
                                                                    <span><img src="{{ asset('/frontend-assets/images/clock.png') }}" alt="">{{ $myJob->created_at->format('l, h:i:s A') }}</span>
                                                                </div>
                                                            </div>
                                                            <div class="ed-opts">
                                                                <a href="#" title="" class="ed-opts-open">
                                                                    <i class="la la-ellipsis-v"></i>
                                                                </a>
                                                                <ul class="ed-options">
                                                                    <li><a href="#" title="">Edit Post</a></li>
                                                                    <li><a href="#" title="">Unsaved</a></li>
                                                                    <li><a href="#" title="">Unbid</a></li>
                                                                    <li><a href="#" title="">Close</a></li>
                                                                    <li><a href="#" title="">Hide</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="epi-sec">
                                                            <ul class="descp">
                                                                <li><img src="{{ asset('/frontend-assets/images/icon8.png') }}" alt=""><span>Epic Coder</span>
                                                                </li>
                                                                <li><img src="{{ asset('/frontend-assets/images/icon9.png') }}" alt=""><span>{{ $myJob->user->country->name  }}</span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="job_descp">
                                                            <h3>{{ $myJob->title }}</h3>
                                                            <ul class="job-dt">
                                                                <li><a href="#" title="">{{ $myJob->jobType->title }}</a></li>
                                                                <li><span>${{ $myJob->rate }} / hr</span></li>
                                                            </ul>
                                                            <p>{{ $myJob->description }}<a href="job?id=1" title="">view more</a></p>
                                                            <ul class="skill-tags">
                                                                @foreach (explode(',', $myJob->tages) as $item)
                                                                    <li><a href='#' title='php'>{{ $item }}</a></li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                        <div class="job-status-bar">
                                                            <ul class="like-com">
                                                                <li>
                                                                    <a href="#" class="active"><i class="fa fa-heart"></i> Like</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                @empty
                                                <div class="posty">
                                                    <div class="post-bar no-margin">
                                                        <div class="post_topbar">
                                                            <p>No Jobs Found!</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforelse
                                        </div>
                                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                            @forelse($allJobs as $allJob)
                                                <div class="posty">
                                                    <div class="post-bar no-margin">
                                                        <div class="post_topbar">
                                                            <div class="usy-dt">
                                                                <img src="{{ asset('/frontend-assets/images/resources/us-pc2.png') }}" alt="">
                                                                <div class="usy-name">
                                                                    <h3>{{ $allJob->user->full_name  }}</h3>
                                                                    <span><img src="{{ asset('/frontend-assets/images/clock.png') }}" alt="">{{ $allJob->created_at->format('l, h:i:s A') }}</span>
                                                                </div>
                                                            </div>
                                                            <div class="ed-opts">
                                                                <a href="#" title="" class="ed-opts-open">
                                                                    <i class="la la-ellipsis-v"></i>
                                                                </a>
                                                                <ul class="ed-options">
                                                                    <li><a href="#" title="">Edit Post</a></li>
                                                                    <li><a href="#" title="">Unsaved</a></li>
                                                                    <li><a href="#" title="">Unbid</a></li>
                                                                    <li><a href="#" title="">Close</a></li>
                                                                    <li><a href="#" title="">Hide</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="epi-sec">
                                                            <ul class="descp">
                                                                <li><img src="{{ asset('/frontend-assets/images/icon8.png') }}" alt=""><span>Epic Coder</span>
                                                                </li>
                                                                <li><img src="{{ asset('/frontend-assets/images/icon9.png') }}" alt=""><span>{{ $allJob->user->country->name  }}</span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="job_descp">
                                                            <h3>{{ $allJob->title }}</h3>
                                                            <ul class="job-dt">
                                                                <li><a href="#" title="">{{ $allJob->jobType->title }}</a></li>
                                                                <li><span>${{ $allJob->rate }} / hr</span></li>
                                                            </ul>
                                                            <p>{{ $allJob->description }}<a href="job?id=1" title="">view more</a></p>
                                                            <ul class="skill-tags">
                                                                @foreach (explode(',', $allJob->tages) as $item)
                                                                    <li><a href='#' title='php'>{{ $item }}</a></li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                        <div class="job-status-bar">
                                                            <ul class="like-com">
                                                                <li>
                                                                    <a href="#" class="active"><i class="fa fa-heart"></i> Like</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            @empty
                                                <div class="posty">
                                                    <div class="post-bar no-margin">
                                                        <div class="post_topbar">
                                                            <p>No Jobs Found!</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforelse
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>
</div>
<footer>
    <div class="footy-sec mn no-margin">
        <div class="container">
            <ul>
                <li><a href="help-center.html" title="">Help Center</a></li>
                <li><a href="about.html" title="">About</a></li>
                <li><a href="#" title="">Privacy Policy</a></li>
                <li><a href="#" title="">Community Guidelines</a></li>
                <li><a href="#" title="">Cookies Policy</a></li>
                <li><a href="#" title="">Career</a></li>
                <li><a href="forum.html" title="">Forum</a></li>
                <li><a href="#" title="">Language</a></li>
                <li><a href="#" title="">Copyright Policy</a></li>
            </ul>
            <p><img src="{{ asset('/frontend-assets/images/copy-icon2.png') }}" alt="">Copyright 2019</p>
            <img class="fl-rgt" src="{{ asset('/frontend-assets/images/logo2.png') }}" alt="">
        </div>
    </div>
</footer>
<script type="text/javascript" src="{{ asset('/frontend-assets/js/jquery.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script type="text/javascript" src="{{ asset('/frontend-assets/js/popper.js') }}"></script>
<script type="text/javascript" src="{{ asset('/frontend-assets/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/frontend-assets/js/jquery.range-min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/frontend-assets/lib/slick/slick.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/frontend-assets/js/script.js') }}"></script>
<script>
    $(document).ready(function() {
        $('.all_countries').select2();
    });
</script>
</body>
</html>