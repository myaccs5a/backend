@extends('.pages.layout')
@section('content')

    <div class="tr-profile section-padding">
        <div class="container">
            <div class="row">
                @include('pages.users.siderbar-user')
                <div class="col-md-8 col-lg-9">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in show active account-info" id="account-info">
                            <div class="tr-fun-fact">
                            </div>
                            @if (session('thongbao'))
                                <div class="alert alert-success">
                                    {{ session('thongbao') }}
                                </div>
                            @endif
                            <form action="{{ route('post-edit') }}" class="tr-form" method="post"
                                enctype="multipart/form-data">
                                {{ csrf_field() }}

                                <div class="section display-information">
                                    <div class="title title-after">
                                        <div class="icon"><img src="frontend/images/icons/2.png" alt="Icon"
                                                class="img-fluid"></div>
                                        <span>Thông tin của bạn</span>
                                    </div>
                                    <div class="change-photo">
                                        <div class="user-image">
                                            <img id="showImage" src="images/users/{{ $nguoidung->avatar }}" alt="Image"
                                                class="img-fluid">
                                        </div>
                                        <div class="upload-photo">
                                            <label class="btn btn-primary" for="upload-photo">
                                                <input type="file" id="upload-photo" name="avatar">
                                                Thay ảnh
                                            </label>
                                            <!-- <span class="max-size">Max 20 MB</span> -->
                                        </div>
                                    </div>
                                    <ul class="tr-list account-details">

                                        <div class="form-group">
                                            <li>Tên hiển thị
                                                <input type="text" class="form-control" name="name"
                                                    value="{{ $nguoidung->name }}">
                                                @if ($errors->first('name'))
                                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                                @endif
                                            </li>

                                        </div>
                                        <div class="form-group">
                                            <li>Địa chỉ
                                                <input type="text" class="form-control" name="address"
                                                    value="{{ $nguoidung->address }}">
                                                @if ($errors->first('address'))
                                                    <span class="text-danger">{{ $errors->first('address') }}</span>
                                                @endif
                                            </li>
                                        </div>
                                        <div class="form-group">
                                            <li>Số điện thoại
                                                <input type="number" class="form-control" name="phone_number"
                                                    value="{{ $nguoidung->phone_number }}">
                                                @if ($errors->first('phone_number'))
                                                    <span class="text-danger">{{ $errors->first('phone_number') }}</span>
                                                @endif
                                            </li>
                                        </div>
                                        <div class="form-group">
                                            <li>Ngày sinh
                                                <input type="date" class="form-control" name="birthday"
                                                    value="{{ $nguoidung->birthday }}">
                                            </li>
                                        </div>
                                        <div class="form-group">
                                            <li style="height: 200px;" >Ngôn ngữ
                                                <select
                                            class="form-control"
                                            id="choices-remove-button"
                                            multiple
                                            placeholder="Vd : pts ,php,ai"
                                            data-default="{{ json_encode(explode('|', $nguoidung->language)) }}"
                                        >
                                            <?php $languageSelect = explode('|',$nguoidung['language']) ?>
                                            @foreach ($language as $lag)
                                                <?php $isSelected = in_array($lag->name_language, $languageSelect) ?>
                                                <option value="{{ $lag->name_language }}" {{ $isSelected ? 'selected' : '' }}>{{ $lag->name_language }}</option>
                                            @endforeach
                                        </select>
                                        <input type="hidden" name="language" value="{{ $nguoidung->language }}">
                                            </li>
                                        </div>
                                        <div class="form-group">
                                            <li>Khu vực
                                                <select class="form-control" name="id_zone">
                                                    @foreach ($zones as $zo)
                                                        <option @if ($zo->id == $nguoidung->id_zone)
                                                            {{ 'selected' }}
                                                    @endif

                                                    value="{{ $zo->id }}">{{ $zo->name_zone }}</option>
                                                    @endforeach
                                                </select>

                                            </li>
                                        </div>
                                        <p>

                                            <button class="btn btn-primary" type="submit">Cập nhật</button>
                                        </p>


                                    </ul>
                                </div>

                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        var img = document.querySelector('[name="avatar"]');
        img.onchange = function() {
            var anh = this.files[0];
            if (anh == undefined) {
                document.querySelector('#showImage').src = "";
            } else {
                getBase64(anh, '#showImage');
            }
            getBase64(anh, '#showImage');
        }

        function getBase64(file, selector) {
            var reader = new FileReader();
            reader.readAsDataURL(file);
            reader.onload = function() {
                document.querySelector(selector).src = reader.result;
            };
            reader.onerror = function(error) {
                console.log('Error: ', error);
            };
        }

    </script>
    <script>
        window.addEventListener('DOMContentLoaded', (event) => {
            var aryIDCkeditor = ['job_desc', 'request', 'interest'];
            for (var id of aryIDCkeditor) {
                if (typeof CKEditor != 'undefined') {
                    CKEditor.replace(id);
                }
            }

            var obj = {
                removeItemButton: true
            }

            var idLanguageElement = document.querySelector('input[name=language]');

            settingChoice('choices-remove-button', obj,
                function addItem(event) {
                    var idSelect = event.detail.value;
                    var $language = $(idLanguageElement);
                    var oldDataLanguage = $language.val();
                    if (oldDataLanguage == '') {
                        $language.val(idSelect)
                    } else {
                        $language.val(oldDataLanguage + '|' + idSelect);
                    }
                },
                function removeItem(event) {
                    var idRemove = event.detail.value;
                    var $language = $(idLanguageElement);
                    var oldDataLanguage = $language.val().split('|');
                    for (var i in oldDataLanguage) {
                        if (oldDataLanguage[i] == idRemove) {
                            oldDataLanguage.splice(i, 1);
                            break;
                        }
                    }
                    $language.val(oldDataLanguage.join('|'));
                }
            );

        });

        function settingChoice(id, obj, addEvent, removeItem) {
            const element = document.getElementById(id);
            var choice = new Choices(element, obj);

            if (typeof addEvent == 'function') {
                element.addEventListener('addItem', addEvent, false);
            }
            if (typeof removeItem == 'function') {
                element.addEventListener('removeItem', removeItem, false);
            }
        }

    </script>
@endsection
