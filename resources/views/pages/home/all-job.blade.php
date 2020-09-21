@extends('pages.layout')
@section('title', 'Thêm Công Việc')
@section('content')
    <div class="tr-breadcrumb bg-image section-before">
        <div class="container">
            <div class="breadcrumb-info text-center">
                <div class="page-title">
                    <h1>Graphics Designer</h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Graphics Design</li>
                </ol>
                <div class="banner-form">
                    <form action="#">
                        <input type="text" class="form-control" placeholder="Job Keyword">
                        <div class="dropdown tr-change-dropdown">
                            <a data-toggle="dropdown" href="#" aria-expanded="false"><span
                                    class="change-text">Location</span><i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu tr-change">
                                <li><a href="#">Location</a></li>
                                <li><a href="#">Location 1</a></li>
                                <li><a href="#">Location 2</a></li>
                                <li><a href="#">Location 3</a></li>
                            </ul>
                        </div>
                        <button type="submit" class="btn btn-primary" value="Search">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="jobs-listing section-padding">
        <div class="container">
            <div class="job-topbar">
                <span class="pull-left">Filter jobs by</span>
                <ul class="nav nav-tabs job-tabs" role="tablist">
                    <li>235 Total jobs</li>
                    <li role="presentation" class="active"><a href="#four-colum" aria-controls="four-colum" role="tab"
                            data-toggle="tab"><i class="fa fa-th" aria-hidden="true"></i></a></li>
                    <li role="presentation"><a href="#two-column" aria-controls="two-column" role="tab" data-toggle="tab"><i
                                class="fa fa-th-list" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <div class="list-menu text-center clearfix">
                <ul class="tr-list">
                    <li class="dropdown tr-change-dropdown">
                        Category:
                        <a data-toggle="dropdown" href="#" aria-expanded="false"><span class="change-text">Designer</span><i
                                class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu tr-change">
                            <li><a href="#">Designer</a></li>
                            <li><a href="#">Marketing</a></li>
                            <li><a href="#">Developement</a></li>
                        </ul>
                    </li>
                    <li class="dropdown tr-change-dropdown">
                        Level:
                        <a data-toggle="dropdown" href="#" aria-expanded="false"><span class="change-text">Mid</span><i
                                class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu tr-change">
                            <li><a href="#">Top Level</a></li>
                            <li><a href="#">Mid Level</a></li>
                            <li><a href="#">Entry Level</a></li>
                        </ul>
                    </li>
                    <li class="dropdown tr-change-dropdown">
                        Org Type:
                        <a data-toggle="dropdown" href="#" aria-expanded="false"><span class="change-text">Private</span><i
                                class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu tr-change">
                            <li><a href="#">Private</a></li>
                            <li><a href="#">public</a></li>
                        </ul>
                    </li>
                    <li class="dropdown tr-change-dropdown">
                        Location:
                        <a data-toggle="dropdown" href="#" aria-expanded="false"><span class="change-text">USA</span><i
                                class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu tr-change">
                            <li><a href="#">USA</a></li>
                            <li><a href="#">London</a></li>
                            <li><a href="#">New York</a></li>
                        </ul>
                    </li>
                    <li class="dropdown tr-change-dropdown">
                        Salary:
                        <a data-toggle="dropdown" href="#" aria-expanded="false"><span class="change-text">0 - 50K</span><i
                                class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu tr-change">
                            <li><a href="#">0 - 50K</a></li>
                            <li><a href="#">50k - 70K</a></li>
                            <li><a href="#">70k - 85K</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="tab-content tr-job-posted">
                <div role="tabpanel" class="tab-pane fade show active" id="four-colum">
                    <div class="row">
                        @foreach ($jobs as $item)
                            <div class="col-md-6 col-lg-3">
                                <div class="job-item">
                                    <div class="item-overlay">
                                        <div class="job-info">
                                            <span class="tr-title">
                                                <a style="text-transform: capitalize;"
                                                    href="{{ route('detail', ['id' => $item->id]) }}">{{ $item->job_name }}</a>
                                                @foreach ($company as $com)
                                                    @if ($item['company_user_id'] == $com['id'])
                                                        <span><a href="#">{{ $com->name }}</a></span>
                                                    @endif
                                                @endforeach
                                            </span>
                                            <ul class="tr-list job-meta">
                                                <li><i class="fa fa-map-marker fa-lg" aria-hidden="true"></i>
                                                    @foreach ($zones as $zo)
                                                        @if ($item['id_zone'] == $zo['id'])
                                                            <span>{{ $zo->name_zone }}</span>
                                                        @endif
                                                    @endforeach
                                                </li>
                                                <li><i class="fa fa-briefcase"
                                                        aria-hidden="true"></i>{{ $item->experience }}</li>
                                                <li><i class="fa fa-money" aria-hidden="true"></i>{{ $item->salary_type }} :
                                                    {{ $item->salary_from }}tr
                                                    @if ($item['salary_to'] != null)
                                                        <span>-</span>
                                                    @endif
                                                    {{ $item->salary_to }}
                                                    @if ($item['salary_to'] != null)
                                                        <span>tr</span>
                                                    @endif
                                                </li>
                                                <li><i class="fa fa-street-view" aria-hidden="true"></i>{{ $item->address }}
                                                </li>

                                            </ul>

                                            <ul class="job-social tr-list">

                                                <li><a href="{{ route('detail', ['id' => $item->id]) }}"><i
                                                            class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="job-info">
                                        <div class="company-logo">
                                            @foreach ($company as $com)
                                                @if ($item['company_user_id'] == $com['id'])
                                                    <center><img src="{{ $com->avatar }}" alt="images" id="image_company"
                                                            height="140" width="140" onerror="this.style.display='none'">
                                                    </center>
                                                @endif
                                            @endforeach

                                        </div>
                                        <span class="tr-title">
                                            <a id="maxname" style="text-transform: capitalize;"
                                                href="{{ route('detail', ['id' => $item->id]) }}">{{ $item->job_name }}</a>
                                            @foreach ($company as $com)
                                                @if ($item['company_user_id'] == $com['id'])
                                                    <span><a href="#" id="maxname">{{ $com->name }}</a></span>
                                                @endif
                                            @endforeach
                                        </span>
                                        <ul class="tr-list job-meta">
                                            <li><span><i class="fa fa-map-marker fa-lg" aria-hidden="true"></i>
                                                    @foreach ($zones as $zo)
                                                        @if ($item['id_zone'] == $zo['id'])
                                                            {{ $zo->name_zone }}
                                                        @endif
                                                    @endforeach
                                            </li>
                                            <li><span><i class="fa fa-briefcase"
                                                        aria-hidden="true"></i></span>{{ $item->experience }}</li>
                                            <li><span><i class="fa fa-money"
                                                        aria-hidden="true"></i></span>{{ $item->salary_type }} :
                                                {{ $item->salary_from }}tr
                                                @if ($item['salary_to'] != null)
                                                    <span>-</span>
                                                @endif
                                                {{ $item->salary_to }}
                                                @if ($item['salary_to'] != null)
                                                    <span>tr</span>
                                                @endif
                                            </li>

                                        </ul>
                                        @if ($item->formality == 'Full Time')
                                            <div class="time">
                                                <a href="#"><span>{{ $item->formality }}</span></a>
                                            </div>
                                        @elseif($item->formality == 'Part Time')
                                            <div class="time">
                                                <a href="#"><span class="part-time">{{ $item->formality }}</span></a>
                                            </div>
                                        @else
                                            <div class="time">
                                                <a href="#"><span class="freelance">{{ $item->formality }}</span></a>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
                <div role="tabpanel" class="tab-pane fade two-column" id="two-column">
                    <div class="row">
                        @foreach ($jobs as $item)
                        <div class="col-sm-6">
                            <div class="job-item">
                                <div class="job-info">
                                    <div class="clearfix">
                                        <div class="company-logo">
                                            @foreach ($company as $com)
                                                @if ($item['company_user_id'] == $com['id'])
                                                    <center><img src="{{ $com->avatar }}" alt="images" id="image_company"
                                                            height="40" width="40" onerror="this.style.display='none'">
                                                    </center>
                                                @endif
                                            @endforeach
                                        </div>
                                        <span class="tr-title">
                                            <a id="maxname2" style="text-transform: capitalize;"
                                                    href="{{ route('detail', ['id' => $item->id]) }}">{{ $item->job_name }}</a>
                                                    @foreach ($company as $com)
                                                    @if ($item['company_user_id'] == $com['id'])
                                                        <span><a href="#">{{ $com->name }}</a></span>
                                                    @endif
                                                @endforeach
                                        </span>
                                        @if ($item->formality == 'Full Time')
                                        <div class="time">
                                            <a href="#"><span>{{ $item->formality }}</span></a>
                                        </div>
                                    @elseif($item->formality == 'Part Time')
                                        <div class="time">
                                            <a href="#"><span class="part-time">{{ $item->formality }}</span></a>
                                        </div>
                                    @else
                                        <div class="time">
                                            <a href="#"><span class="freelance">{{ $item->formality }}</span></a>
                                        </div>
                                    @endif
                                    </div>
                                    <ul class="tr-list job-meta">
                                        <li><span><i class="fa fa-map-signs" aria-hidden="true"></i></span>  @foreach ($zones as $zo)
                                            @if ($item['id_zone'] == $zo['id'])
                                                <span>{{ $zo->name_zone }}</span>
                                            @endif
                                        @endforeach</li>
                                        <li><span><i class="fa fa-briefcase" aria-hidden="true"></i></span>{{ $item->experience }}</li>
                                        <li><span><i class="fa fa-money"
                                            aria-hidden="true"></i></span>{{ $item->salary_type }} :
                                    {{ $item->salary_from }}tr
                                    @if ($item['salary_to'] != null)
                                        <span>-</span>
                                    @endif
                                    {{ $item->salary_to }}
                                    @if ($item['salary_to'] != null)
                                        <span>tr</span>
                                    @endif
                                </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="tr-cta">
                        <div class="cta-content section">
                            <div class="cta-info">
                                <div class="pull-left">
                                    <h1>Add your resume and let your next job find you.</h1>
                                </div>
                                <a href="#" class="btn btn-primary pull-right">Add Your Resume</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


@endsection
