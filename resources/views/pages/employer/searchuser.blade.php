@extends('pages.layout-company')
@section('title','Thêm Công Việc')
@section('content')
<div class="tr-breadcrumb bg-image section-before">
    <div class="container">
        <div class="breadcrumb-info text-center">
            <div class="page-title">
                <h1 style="color: aliceblue;">Đăng Công Việc Mới</h1>
            </div>
            <ol class="breadcrumb">
                <li><a href="index.html">Trang chủ</a></li>
                <li class="active">Đăng công việc</li>
            </ol>
        </div>
    </div>
</div>
<div class="tr-post-job page-content">
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="s009">
                    <form action="{{ route('company.get.show')}}" method="get">
                        {{csrf_field()}}
                      <div class="inner-form">
                        <div class="basic-search">
                          <div class="input-field">
                            <input id="search" name="searchuser" type="text" placeholder="Gõ tên vị trí nhân sự bạn muốn tìm VD : Developer Backend" />
                            <div class="icon-wrap">
                                    <button type="submit">Tìm kiếm</button>
                            </div>
                          </div>
                        </div>
                        {{-- <div class="advance-search">
                          <span class="desc">Tìm Kiếm Nâng Cao</span>
                          <div class="row">
                            <div class="input-field">
                              <div class="input-select">
                                <select data-trigger="" name="choices-single-defaul">
                                  <option placeholder="" value="">Khu Vực</option>
                                  <option>Subject b</option>
                                  <option>Subject c</option>
                                </select>
                              </div>
                            </div>
                            <div class="input-field">
                              <div class="input-select">
                                <select data-trigger="" name="choices-single-defaul">
                                  <option placeholder="" value="">Có những từ khóa</option>
                                  <option>Subject b</option>
                                  <option>Subject c</option>
                                </select>
                              </div>
                            </div>

                          </div>

                          <div class="row third">
                            <div class="input-field">
                              <div class="result-count">
                                <span>108 </span>results</div>
                              <div class="group-btn">
                                <button class="btn-delete" id="delete">RESET</button>
                                <button class="btn-search">SEARCH</button>
                              </div>
                            </div>
                          </div>
                        </div> --}}
                      </div>
                    </form>
                  </div>
            </div>

            <div class="col-md-3">
                <div class="section quick-rules">
                    <span class="tr-title">Quick Rules</span>
                    <p>Posting an ad on <a href="#">Seeker.com</a> is free! However, all post must follow our rules:</p>
                    <ul class="tr-list">
                        <li>Make sure you post in the correct category.</li>
                        <li>Do not post the same ad more than once or repost an ad within 48 hours.</li>
                        <li>Do not upload pictures with watermarks.</li>
                        <li>Do not post ads containing multiple items unless it's a package deal.</li>
                        <li>Do not put your email or phone numbers in the title or description.</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>
<script !src="">
    function show1(){
        document.getElementById('div1').style.display ='block';
        document.getElementById('div2').style.display ='none';
    }
    function show2(){
        document.getElementById('div2').style.display = 'block';
    }
    function show3(){
        document.getElementById('div1').style.display ='block';
        document.getElementById('div2').style.display ='none';
    }
</script>
@endsection
