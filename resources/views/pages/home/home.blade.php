@extends('.pages.layout')
@section('content')
    <script>
        window.onload = function() {
            document.getElementById('exampleModal');
        };

    </script>
    <style>
        #image_company {
            border-radius: 50%;
        }

    </style>
    <div class="tr-banner section-before bg-image">
        <div class="container">
            <div class="banner-content text-center">
                <h1 style="font-size: 28px; text-transform: capitalize;">TÌM VIỆC LÀM IT NHANH NHẤT VIỆT NAM</h1>

                <div class="banner-form">
                    <form method="POST" action="{{ route('search') }}">
                        {{ csrf_field() }}
                        <input type="text" class="form-control" id="search" name="Tìm kiếm công việc">
                        <div class="dropdown tr-change-dropdown">
                            <select style=" border: 0;
                                        outline: 1px solid #CCC;
                                        background-color: white;
                                        font-size: 18px;
                                   }

                                      " name="zone" class="form-control" class="dropdown-menu tr-change">
                                <option value="">Tất cả</option>
                                @foreach ($zones as $zo)
                                    <option value="{{ $zo->id }}">{{ $zo->name_zone }}</option>

                                @endforeach

                            </select>


                        </div>
                        <button type="submit" class="btn btn-primary" value="Search">Search</button>
                    </form>
                    {{-- <form method="POST" action="{{ route('search') }}">
                        {{ csrf_field() }}
                        <input type="text" class="form-control" id="search" name="search">
                        <div class="dropdown tr-change-dropdown">
                            <!-- <a data-toggle="dropdown" href="#" aria-expanded="false"><span
                                                class="change-text">Location</span><i class="fa fa-angle-down"></i></a>
                                        <ul class="dropdown-menu tr-change">
                                            for
                                            <li><a href="#">Location</a></li>
                                            <li><a href="#">Location 1</a></li>
                                            <li><a href="#">Location 2</a></li>
                                            <li><a href="#">Location 3</a></li>
                                        </ul> -->
                            <select name="zone" class="form-control">

                                @foreach ($zones as $zo)

                                    <option value="{{ $zo->id }}">{{ $zo->name_zone }}</option>

                                @endforeach

                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary" value="Search">Search</button>
                    </form> --}}
                    <!-- <div id="search-suggest" class="s-suggest"></div> -->
                </div>
            </div>
        </div>
    </div>




    <!--     <div class="tr-category section-padding">
                    <div class="container">
                        <div class="section-title">
                            <h1>Browse Jobs By Category</h1>
                        </div>
                        <ul class="category-list tr-list">
                            <li>
                                <a href="#">
            <span class="icon">
            <img src="frontend/images/icons/category1.png" alt="Icon" class="img-fluid">
            </span>
                                    <span class="category-title">Accounting/Finance</span>
                                    <span class="category-quantity">(1298)</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
            <span class="icon">
            <img src="frontend/images/icons/category2.png" alt="Icon" class="img-fluid">
            </span>
                                    <span class="category-title">Education/Training</span>
                                    <span class="category-quantity">(76212)</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
            <span class="icon">
            <img src="frontend/images/icons/category3.png" alt="Icon" class="img-fluid">
            </span>
                                    <span class="category-title">Engineer/Architects</span>
                                    <span class="category-quantity">(212)</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
            <span class="icon">
            <img src="frontend/images/icons/category4.png" alt="Icon" class="img-fluid">
            </span>
                                    <span class="category-title">Garments/Textile</span>
                                    <span class="category-quantity">(972)</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="category-list tr-list">
                            <li>
                                <a href="#">
            <span class="icon">
            <img src="frontend/images/icons/category5.png" alt="Icon" class="img-fluid">
            </span>
                                    <span class="category-title">HR/Org. Development</span>
                                    <span class="category-quantity">(1298)</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
            <span class="icon">
            <img src="frontend/images/icons/category6.png" alt="Icon" class="img-fluid">
            </span>
                                    <span class="category-title">Design/Creative</span>
                                    <span class="category-quantity">(76212)</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
            <span class="icon">
            <img src="frontend/images/icons/category7.png" alt="Icon" class="img-fluid">
            </span>
                                    <span class="category-title">Research/Consultancy</span>
                                    <span class="category-quantity">(1298)</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
            <span class="icon">
            <img src="frontend/images/icons/category8.png" alt="Icon" class="img-fluid">
            </span>
                                    <span class="category-title">Medical/Pharma</span>
                                    <span class="category-quantity">(76212)</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="category-list category-list-bottom tr-list">
                            <li>
                                <a href="#">
            <span class="icon">
            <img src="frontend/images/icons/category9.png" alt="Icon" class="img-fluid">
            </span>
                                    <span class="category-title">Music & Arts</span>
                                    <span class="category-quantity">(212)</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
            <span class="icon">
            <img src="frontend/images/icons/category10.png" alt="Icon" class="img-fluid">
            </span>
                                    <span class="category-title">Marketing/Sales</span>
                                    <span class="category-quantity">(972)</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
            <span class="icon">
            <img src="frontend/images/icons/category11.png" alt="Icon" class="img-fluid">
            </span>
                                    <span class="category-title">Production/Operation</span>
                                    <span class="category-quantity">(212)</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
            <span class="icon">
            <img src="frontend/images/icons/category12.png" alt="Icon" class="img-fluid">
            </span>
                                    <span class="category-title">Miscellaneous</span>
                                    <span class="category-quantity">(972)</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div> -->
    <!--     <div class="tr-cta">
                    <div class="container">
                        <div class="cta-content section">
                            <div class="cta-info">
                                <div class="pull-left">
                                    <h1>Add your resume and let your next job find you.</h1>
                                </div>
                                <a href="#" class="btn btn-primary pull-right">Add Your Resume</a>
                            </div>
                        </div>
                    </div>
                </div> -->
    <div class="tr-job-posted section-padding">
        <div class="container">
            <div class="section-title">
                <h2 class="text_ellipsis uppercase"><i class="fa fa-certificate" aria-hidden="true"></i> TIN TUYỂN DỤNG,
                    VIỆC LÀM TỐT NHẤT
                    <span class="pull-right feature-job-link"><a href="#">» Xem tất cả</a></span></h2><br>
            </div>
            <div class="job-tab text-center">
                <div class="tab-content text-left">
                    <div role="tabpanel" class="tab-pane fade show active" id="hot-jobs">
                        <div class="row">
                            @foreach ($job as $item)
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
                                                    <li><i class="fa fa-money"
                                                            aria-hidden="true"></i>{{ $item->salary_type }} :
                                                        {{ $item->salary_from }}tr
                                                        @if ($item['salary_to'] != null)
                                                            <span>-</span>
                                                        @endif
                                                        {{ $item->salary_to }}
                                                        @if ($item['salary_to'] != null)
                                                            <span>tr</span>
                                                        @endif
                                                    </li>
                                                    <li><i class="fa fa-street-view"
                                                            aria-hidden="true"></i>{{ $item->address }}</li>

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
                                                        <center><img src="{{ $com->avatar }}" alt="images"
                                                                id="image_company" height="140" width="140"
                                                                onerror="this.style.display='none'"></center>
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
                </div>
            </div>
        </div>
    </div>




    <div class="tr-job-posted section-padding">
        <div class="container">
            <div class="section-title">
                <h2 class="text_ellipsis uppercase"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> GỢI Ý VIỆC LÀM PHÙ
                    HỢP
                    <span class="pull-right feature-job-link"><a href="#">» Xem tất cả</a></span></h2><br>
            </div>
            <div class="job-tab text-center">

                <div class="tab-content text-left">
                    <div role="tabpanel" class="tab-pane fade show active" id="hot-jobs">


                        <div class="row">
                            @if (Auth::check() && $jobzone != null )
                                    @foreach ($jobzone as $item)
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
                                                                <li><i class="fa fa-money"
                                                                        aria-hidden="true"></i>{{ $item->salary_type }} :
                                                                    {{ $item->salary_from }}tr
                                                                    @if ($item['salary_to'] != null)
                                                                        <span>-</span>
                                                                    @endif
                                                                    {{ $item->salary_to }}
                                                                    @if ($item['salary_to'] != null)
                                                                        <span>tr</span>
                                                                    @endif
                                                                </li>
                                                                <li><i class="fa fa-street-view"
                                                                        aria-hidden="true"></i>{{ $item->address }}</li>

                                                            </ul>

                                                            <ul class="job-social tr-list">

                                                                <li><a href="{{ route('detail', ['id' => $item->id]) }}"><i
                                                                            class="fa fa-long-arrow-right"
                                                                            aria-hidden="true"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="job-info">
                                                        <div class="company-logo">
                                                            @foreach ($company as $com)
                                                                @if ($item['company_user_id'] == $com['id'])
                                                                    <center><img src="{{ $com->avatar }}" alt="images"
                                                                            id="image_company" height="140" width="140"
                                                                            onerror="this.style.display='none'"></center>
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
                                                                <a href="#"><span
                                                                        class="part-time">{{ $item->formality }}</span></a>
                                                            </div>
                                                        @else
                                                            <div class="time">
                                                                <a href="#"><span
                                                                        class="freelance">{{ $item->formality }}</span></a>
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                    @endforeach
                            @elseif($jobzone == null)
                                    @foreach ($joball as $item)
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
                                                        <li><i class="fa fa-money"
                                                                aria-hidden="true"></i>{{ $item->salary_type }} :
                                                            {{ $item->salary_from }}tr
                                                            @if ($item['salary_to'] != null)
                                                                <span>-</span>
                                                            @endif
                                                            {{ $item->salary_to }}
                                                            @if ($item['salary_to'] != null)
                                                                <span>tr</span>
                                                            @endif
                                                        </li>
                                                        <li><i class="fa fa-street-view"
                                                                aria-hidden="true"></i>{{ $item->address }}</li>

                                                    </ul>

                                                    <ul class="job-social tr-list">

                                                        <li><a href="{{ route('detail', ['id' => $item->id]) }}"><i
                                                                    class="fa fa-long-arrow-right"
                                                                    aria-hidden="true"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="job-info">
                                                <div class="company-logo">
                                                    @foreach ($company as $com)
                                                        @if ($item['company_user_id'] == $com['id'])
                                                            <center><img src="{{ $com->avatar }}" alt="images"
                                                                    id="image_company" height="140" width="140"
                                                                    onerror="this.style.display='none'"></center>
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
                                                        <a href="#"><span
                                                                class="part-time">{{ $item->formality }}</span></a>
                                                    </div>
                                                @else
                                                    <div class="time">
                                                        <a href="#"><span
                                                                class="freelance">{{ $item->formality }}</span></a>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                            @elseif ($jobcc == true)
                                @foreach ($jobcc as $item)
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
                                                        <li><i class="fa fa-money"
                                                                aria-hidden="true"></i>{{ $item->salary_type }} :
                                                            {{ $item->salary_from }}tr
                                                            @if ($item['salary_to'] != null)
                                                                <span>-</span>
                                                            @endif
                                                            {{ $item->salary_to }}
                                                            @if ($item['salary_to'] != null)
                                                                <span>tr</span>
                                                            @endif
                                                        </li>
                                                        <li><i class="fa fa-street-view"
                                                                aria-hidden="true"></i>{{ $item->address }}</li>

                                                    </ul>

                                                    <ul class="job-social tr-list">

                                                        <li><a href="{{ route('detail', ['id' => $item->id]) }}"><i
                                                                    class="fa fa-long-arrow-right"
                                                                    aria-hidden="true"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="job-info">
                                                <div class="company-logo">
                                                    @foreach ($company as $com)
                                                        @if ($item['company_user_id'] == $com['id'])
                                                            <center><img src="{{ $com->avatar }}" alt="images"
                                                                    id="image_company" height="140" width="140"
                                                                    onerror="this.style.display='none'"></center>
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
                                                        <a href="#"><span
                                                                class="part-time">{{ $item->formality }}</span></a>
                                                    </div>
                                                @else
                                                    <div class="time">
                                                        <a href="#"><span
                                                                class="freelance">{{ $item->formality }}</span></a>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                @foreach ($joball as $item)
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
                                                        <li><i class="fa fa-money"
                                                                aria-hidden="true"></i>{{ $item->salary_type }} :
                                                            {{ $item->salary_from }}tr
                                                            @if ($item['salary_to'] != null)
                                                                <span>-</span>
                                                            @endif
                                                            {{ $item->salary_to }}
                                                            @if ($item['salary_to'] != null)
                                                                <span>tr</span>
                                                            @endif
                                                        </li>
                                                        <li><i class="fa fa-street-view"
                                                                aria-hidden="true"></i>{{ $item->address }}</li>

                                                    </ul>

                                                    <ul class="job-social tr-list">

                                                        <li><a href="{{ route('detail', ['id' => $item->id]) }}"><i
                                                                    class="fa fa-long-arrow-right"
                                                                    aria-hidden="true"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="job-info">
                                                <div class="company-logo">
                                                    @foreach ($company as $com)
                                                        @if ($item['company_user_id'] == $com['id'])
                                                            <center><img src="{{ $com->avatar }}" alt="images"
                                                                    id="image_company" height="140" width="140"
                                                                    onerror="this.style.display='none'"></center>
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
                                                        <a href="#"><span
                                                                class="part-time">{{ $item->formality }}</span></a>
                                                    </div>
                                                @else
                                                    <div class="time">
                                                        <a href="#"><span
                                                                class="freelance">{{ $item->formality }}</span></a>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
