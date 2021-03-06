@extends('.pages.layout')
@section('content')

    <div class="tr-profile section-padding">
        <div class="container">
            <div class="row">
                @include('pages.users.siderbar-user')
                <div class="col-md-8 col-lg-9">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in show active account-info" id="account-info">
                            <div role="tabpanel" class="tab-pane bookmark active show" id="bookmark">
                                <div class="row">
                                    @foreach ($savejob as $key => $value)
                                    <div class="col-md-4 remove-item">
                                        <div class="job-item">
                                            <a onclick="return xoaSanPham();" href="{{ route('unsavejob', $value->savejob->id) }}"><span class="remove-icon"><i class="fa fa-times" aria-hidden="true"></i></span></a>
                                            <div class="item-overlay">
                                                <div class="job-info">

                                                    <span class="tr-title">
                                                        <a href="{{ route('detail', ['id' => $value->savejob->id]) }}">{{ $value->savejob->job_name }}</a></span>
                                                        <span><a
                                                            href="{{ route('detailc', ['id' => $value->companyuser->id]) }}">{{ $value->companyuser->name }}</a></span>
                                                    </span>
                                                    <ul class="tr-list job-meta">
                                                        <li><i class="fa fa-map-signs" aria-hidden="true"></i>{{ $value->savejob->address }}</li>
                                                        <li><i class="fa fa-briefcase" aria-hidden="true"></i>{{ $value->savejob->experience }}</li>
                                                        <li><i class="fa fa-money"
                                                            aria-hidden="true"></i>{{ $value->savejob->salary_type }} :
                                                        {{ $value->savejob->salary_from }}tr
                                                        @if ($value->savejob->salary_to != null)
                                                            <span>-</span>
                                                        @endif
                                                        {{ $value->savejob->salary_to }}
                                                        @if ($value->savejob->salary_to != null)
                                                            <span>tr</span>
                                                        @endif
                                                    </li>
                                                    </ul>
                                                    <ul class="job-social tr-list">
                                                        <li><a href="{{ route('detail', ['id' =>  $value->savejob->id]) }}"><i
                                                            class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="job-info">
                                                <div class="company-logo">
                                                    <center> <img src="{{ $value->companyuser->avatar }}" id="image_company" height="140" width="140" class="img-fluid"></center>
                                                </div>
                                                <span class="tr-title">
                                                    <a id="maxname" style="text-transform: capitalize;" href="{{ route('detail', ['id' => $value->savejob->id]) }}">{{ $value->savejob->job_name }}</a></span>
                                                    <a
                                                            href="{{ route('detailc', ['id' => $value->companyuser->id]) }}">{{ $value->companyuser->name }}</a>
                                                </span>
                                                <ul class="tr-list job-meta">
                                                    <li><i class="fa fa-map-signs" aria-hidden="true"></i>{{ $value->savejob->address }}</li>
                                                    <li><i class="fa fa-briefcase" aria-hidden="true"></i>{{ $value->savejob->experience }}</li>
                                                    <li><i class="fa fa-money"
                                                        aria-hidden="true"></i>{{ $value->savejob->salary_type }} :
                                                    {{ $value->savejob->salary_from }}tr
                                                    @if ($value->savejob->salary_to != null)
                                                        <span>-</span>
                                                    @endif
                                                    {{ $value->savejob->salary_to }}
                                                    @if ($value->savejob->salary_to != null)
                                                        <span>tr</span>
                                                    @endif
                                                </li>
                                                </ul>

                                            @if ($value->savejob->formality == 'Full Time')
                                                <div class="time">
                                                    <a href="#"><span>{{ $value->savejob->formality }}</span></a>
                                                </div>
                                            @elseif($value->savejob->formality == 'Part Time')
                                                <div class="time">
                                                    <a href="#"><span class="part-time">{{ $value->savejob->formality }}</span></a>
                                                </div>
                                            @else
                                                <div class="time">
                                                    <a href="#"><span class="freelance">{{ $value->savejob->formality }}</span></a>
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
        </div>
    </div>
    <script>
        function xoaSanPham(){
            var conf=confirm("Bạn có chắc chắn muốn xóa công việc đã lưu này?");
            return conf;
        }
        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove();
            });
        }, 2000);
    </script>
@endsection
