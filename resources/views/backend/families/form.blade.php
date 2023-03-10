<x-app-layout>

    @push('styles')
        <!-- BEGIN Page Level CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('template/app-assets/vendors/css/forms/selects/select2.min.css') }}">
        <!-- END Page Level CSS-->
    @endpush

    <x-slot name="header">
        <div class="content-header-left col-md-6 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">لوحة التحكم</a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{ route('family.index') }}">ادارة الاسر</a>
                    </li>
                    <li class="breadcrumb-item active"> اضافة
                    </li>
                </ol>
                </div>
            </div>
            <h3 class="content-header-title mb-0">اضافه اسره جديده</h3>
        </div>
        <div class="content-header-right col-md-6 col-12">
            {{-- <div class="float-md-right" role="group">
                <a href="{{ route('family.index') }}" class="btn btn-info round box-shadow-2 px-2 d-flex" id="btnGroupDrop1">
                    رجوع
                    <i class="la la-chevron-left fa-lg"></i> 
                </a>
            </div> --}}
        </div>
    </x-slot>

    

        <section class="row">
            <div class="col-md-12">

                @include('backend.layout.alerts.validation')

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">
                            اضافه اسره
                        </h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            
                            <form action="{{route('family.store')}}" method="POST" class="form">
                                @csrf
                                <div class="form-body">
                                    <ul class="nav nav-tabs nav-top-border no-hover-bg">
                                        <li class="nav-item">
                                        <a class="nav-link active" id="active-tab1" data-toggle="tab" href="#active1" aria-controls="active1" aria-expanded="true">البيانات</a>
                                        </li>
                                        <li class="nav-item">
                                        <a class="nav-link" id="link-tab1" data-toggle="tab" href="#link1" aria-controls="link1" aria-expanded="false">الابناء</a>
                                        </li>
                                    </ul>
                                    <div x-data="{
                                        is_divorced: false,
                                        cities: [],
                                        async getCountryCities(country_id){
                                            console.log(country_id)
                                            if (country_id) {
                                                console.log('{{ route('getCountryCities') }}' + '/?country_id=' + country_id)
                                                this.cities = await (await fetch('{{ route('getCountryCities') }}' + '/?country_id=' + country_id)).json();
                                    
                                                // log out all the posts to the console
                                                console.log(this.cities);
                                            }else{
                                                this.cities = [];
                                            }
                                        }
                                    }" class="tab-content px-1 pt-1">
                                        <div role="tabpanel" class="tab-pane active" id="active1" aria-labelledby="active-tab1" aria-expanded="true">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="companyName">الاب <strong class="text-danger text-sm">*مطلوب</strong></label>
                                                        <p class="text-sm text-danger">الرجاء اختيار الاسماء المقترحة من قبل النظام في حال وجودها</p>
                                                        <select x-init="$($el).select2()" data-tags="true" type="text" class="form-control w-100" name="father_id">
                                                            <option value=""></option>
                                                            @foreach($males as $male)
                                                                <option value="{{$male->id}}">{{$male->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="companyName">الام <strong class="text-danger text-sm">*مطلوب</strong></label>
                                                        <p class="text-sm text-danger">الرجاء اختيار الاسماء المقترحة من قبل النظام في حال وجودها</p>
                                                        <select x-init="$($el).select2()" data-tags="true" class="form-control w-100" name="mother_id">
                                                            <option value=""></option>
                                                            @foreach($females as $female)
                                                                <option value="{{$female->id}}">{{$female->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="companyName">مكان السكن</label>
                                                        <select @change="getCountryCities($($el).val())" type="text" class="form-control" name="country_id" >
                                                            <option value=""></option>
                                                            @foreach($countries as $country)
                                                                <option value="{{$country->id}}">{{$country->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="companyName">المدينة</label>
                                                        <select class="form-control" name="city_id">
                                                            <option value=""></option>
                                                            <template x-for="city in cities">
                                                                <option :value="city.id" x-text="city.name"></option>
                                                            </template>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="companyName">تاريخ الزواج</label>
                                                        <input type="date" class="form-control" name="marriage_date">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="">ملاحظة</label>
                                                    <textarea id="" rows="5" class="form-control" name="note"></textarea>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-md-3 d-flex align-items-center">
                                                    <div class="form-group">
                                                        <input type="checkbox" @change=" is_divorced = $el.checked" class="checkbox mr-1" name="is_divorced">
                                                        <label for="companyName">الاسرة مطلقه</label>
                                                    </div>
                                                </div>
                                                <div x-show="is_divorced" x-transition class="col-md-9">
                                                    <div class="form-group">
                                                        <label for="companyName">تاريخ الطلاق</label>
                                                        <input type="date" class="form-control" name="divorce_date">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div  class="tab-pane" id="link1" role="tabpanel" aria-labelledby="link-tab1" aria-expanded="false">
                                            <div x-data="{
                                                rows_count: 0,
                                                sons: {{$males}},
                                                daughters: {{$females}},
                                                addRows (rows_count, source) {
                                                    
                                                    let container = source == 'male' ? $($refs.sons_container) : $($refs.daughters_container);
                                                    let sons_template = `
                                                        <div class='form-group mt-2'>
                                                            <label class='text-danger'>قم بادخال الاسم الاول فقط</label>
                                                            <select  x-init='$($el).select2()' data-tags='true' type='text' placeholder='ادخل الاسم' class='form-control' name='sons[]'>
                                                                <option value=''>اختر الابن</option>
                                                                <template x-for='son in sons'>
                                                                    <option :value='son.id' x-text='son.name'></option>
                                                                </template>
                                                            </select>
                                                        </div>
                                                    `;
                                                    let daughters_template = `
                                                        <div class='form-group mt-2'>
                                                            <label class='text-danger'>قم بادخال الاسم الاول فقط</label>
                                                            <select  x-init='$($el).select2()' data-tags='true' type='text' placeholder='ادخل الاسم' class='form-control' name='daughters[]'>
                                                                <option value=''>اختر الابنة</option>
                                                                <template x-for='son in daughters'>
                                                                    <option :value='son.id' x-text='son.name'></option>
                                                                </template>
                                                            </select>
                                                        </div>
                                                    `;
                                                    let template = source == 'male' ? sons_template : daughters_template;
                                                    let rowsArr = [];
                                                    container.empty();
                                                    for(let i = 0; i < rows_count; i++ ){
                                                        rowsArr.push(template);
                                                    }
                                                    for (let index = 0; index < rowsArr.length; index++) {
                                                        container.append(rowsArr[index]);
                                                    }
                                                    console.log(this.daughters);
                                                }
                                            }" class="row">
                                                <div  class="col-md-6">
                                                    <div class="d-flex justify-content-center align-items-end">
                                                        <div>
                                                            <label for="">عدد الذكور</label>
                                                            <input type="number" x-ref="sons_count" class="form-control" name="sons_count">
                                                        </div>
                                                        <div>
                                                            <button type="button" @click="addRows($refs.sons_count.value, 'male')" class="btn btn-rounded btn-success btn-icon">
                                                                <i class="la la-plus"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                        
                                                    <div x-ref="sons_container"></div>
                                                    
                                                </div>
                                                
                                                <div class="col-md-6">
                                                    <div class="d-flex justify-content-center align-items-end">
                                                        <div>
                                                            <label for="">عدد الاناث</label>
                                                            <input type="number" x-ref="daughters_count"  class="form-control" name="daughters_count">
                                                        </div>
                                                        <div>
                                                            <button type="button" @click="addRows($refs.daughters_count.value, 'daughters')" class="btn btn-rounded btn-success btn-icon">
                                                                <i class="la la-plus"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div x-ref="daughters_container"></div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <button class="btn btn-rounded btn-success">اضافة</button>
                                    <a href="{{route('family.index')}}" class="btn btn-rounded btn-secondary">الغاء</a>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    

    @push('scripts')
        <!-- BEGIN PAGE LEVEL JS-->
        <script src="{{ asset('template/app-assets/vendors/js/forms/select/select2.full.min.js') }}" type="text/javascript"></script>
        <!-- END PAGE LEVEL JS-->
    @endpush
</x-app-layout>