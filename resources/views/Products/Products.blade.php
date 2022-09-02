{{--<link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />--}}
{{--<link href="{{URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">--}}
{{--<link href="{{URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />--}}
{{--<link href="{{URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">--}}
{{--<link href="{{URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">--}}
{{--<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">--}}
{{--@extends('layouts.master')--}}
{{--@section('css')--}}
{{--@endsection--}}
{{--@section('page-header')--}}
{{--				<!-- breadcrumb -->--}}
{{--				<div class="breadcrumb-header justify-content-between">--}}
{{--					<div class="my-auto">--}}
{{--						<div class="d-flex">--}}
{{--							<h4 class="content-title mb-0 my-auto">الإعدادات</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ المنتجات</span>--}}
{{--						</div>--}}
{{--					</div>--}}
{{--					<div class="d-flex my-xl-auto right-content">--}}
{{--						<div class="pr-1 mb-3 mb-xl-0">--}}
{{--							<button type="button" class="btn btn-info btn-icon ml-2"><i class="mdi mdi-filter-variant"></i></button>--}}
{{--						</div>--}}
{{--						<div class="pr-1 mb-3 mb-xl-0">--}}
{{--							<button type="button" class="btn btn-danger btn-icon ml-2"><i class="mdi mdi-star"></i></button>--}}
{{--						</div>--}}
{{--						<div class="pr-1 mb-3 mb-xl-0">--}}
{{--							<button type="button" class="btn btn-warning  btn-icon ml-2"><i class="mdi mdi-refresh"></i></button>--}}
{{--						</div>--}}
{{--						<div class="mb-3 mb-xl-0">--}}
{{--							<div class="btn-group dropdown">--}}
{{--								<button type="button" class="btn btn-primary">14 Aug 2019</button>--}}
{{--								<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" id="dropdownMenuDate" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--								<span class="sr-only">Toggle Dropdown</span>--}}
{{--								</button>--}}
{{--								<div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenuDate" data-x-placement="bottom-end">--}}
{{--									<a class="dropdown-item" href="#">2015</a>--}}
{{--									<a class="dropdown-item" href="#">2016</a>--}}
{{--									<a class="dropdown-item" href="#">2017</a>--}}
{{--									<a class="dropdown-item" href="#">2018</a>--}}
{{--								</div>--}}
{{--							</div>--}}
{{--						</div>--}}
{{--					</div>--}}
{{--				</div>--}}
{{--				<!-- breadcrumb -->--}}
{{--@endsection--}}
{{--@section('content')--}}
{{--				<!-- row -->--}}
{{--				<div class="row">--}}
{{--                    <div class="col-xl-12">--}}
{{--                        <div class="card mg-b-20">--}}
{{--                            <div class="card-header pb-0">--}}
{{--                                <div class="d-flex justify-content-between">--}}
{{--                                    <h4 class="card-title mg-b-0">Bordered Table</h4>--}}
{{--                                    <i class="mdi mdi-dots-horizontal text-gray"></i>--}}
{{--                                </div>--}}
{{--                                <p class="tx-12 tx-gray-500 mb-2">Example of Valex Bordered Table.. <a href="">Learn more</a></p>--}}
{{--                            </div>--}}
{{--                            <div class="col-sm-6 col-md-3">--}}
{{--                                <button class="btn btn-primary">أضافه منتج جديد</button>--}}
{{--                            </div>--}}
{{--                            <div class="card-body">--}}
{{--                                <div class="table-responsive">--}}
{{--                                    <table id="example" class="table table-hover">--}}
{{--                                        <thead>--}}
{{--                                        <tr>--}}
{{--                                            <th class="border-bottom-0">#</th>--}}
{{--                                            <th class="border-bottom-0">اسم المنتج</th>--}}
{{--                                            <th class="border-bottom-0">الوصف</th>--}}
{{--                                            <th class="border-bottom-0">القسم</th>--}}
{{--                                            <th class="border-bottom-0">المشرف</th>--}}
{{--                                            <th class="border-bottom-0">العمليات</th>--}}

{{--                                        </tr>--}}
{{--                                        </thead>--}}

{{--                                        <tbody>--}}
{{--                                        @foreach($Products as $Product)--}}
{{--                                        <tr>--}}
{{--                                            <td>{{$Product->id}}</td>--}}
{{--                                            <td>{{$Product->product_name}}</td>--}}
{{--                                            <td>{{$Product->description}}</td>--}}
{{--                                            <td>{{$Product->section_id}}</td>--}}
{{--                                            <td>shaker</td>--}}
{{--                                            <td>--}}
{{--                                            </td>--}}
{{--                                        </tr>--}}

{{--                                        @endforeach--}}
{{--                                        </tbody>--}}
{{--                                    </table>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--				</div>--}}
{{--				<!-- row closed -->--}}
{{--			</div>--}}
{{--			<!-- Container closed -->--}}
{{--		</div>--}}
{{--		<!-- main-content closed -->--}}
{{--@endsection--}}
{{--@section('js')--}}
{{--    <script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>--}}
{{--    <script src="{{URL::asset('assets/plugins/datatable/js/dataTables.dataTables.min.js')}}"></script>--}}
{{--    <script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>--}}
{{--    <script src="{{URL::asset('assets/plugins/datatable/js/responsive.dataTables.min.js')}}"></script>--}}
{{--    <script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.js')}}"></script>--}}
{{--    <script src="{{URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>--}}
{{--    <script src="{{URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>--}}
{{--    <script src="{{URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>--}}
{{--    <script src="{{URL::asset('assets/plugins/datatable/js/jszip.min.js')}}"></script>--}}
{{--    <script src="{{URL::asset('assets/plugins/datatable/js/pdfmake.min.js')}}"></script>--}}
{{--    <script src="{{URL::asset('assets/plugins/datatable/js/vfs_fonts.js')}}"></script>--}}
{{--    <script src="{{URL::asset('assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>--}}
{{--    <script src="{{URL::asset('assets/plugins/datatable/js/buttons.print.min.js')}}"></script>--}}
{{--    <script src="{{URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>--}}
{{--    <script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>--}}
{{--    <script src="{{URL::asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js')}}"></script>--}}
{{--    <!--Internal  Datatable js -->--}}
{{--    <script src="{{URL::asset('assets/js/table-data.js')}}"></script>--}}
{{--    <script src="{{URL::asset('assets/js/modal.js')}}"></script>--}}
{{--@endsection--}}
@extends('layouts.master')
<link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">
@section('css')
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">الاعدادات</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ المنتجات</span>
            </div>
        </div>

    </div>
    <!-- breadcrumb -->
@endsection
@section('content')


    @if(session()->has('Add'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session()->get('Add') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if (session()->has('Edit'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session()->get('Edit') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    @if (session()->has('delete'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ session()->get('delete') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    @if (session()->has('Error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ session()->get('Error') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <!-- row -->
    <div class="row">

        <div class="col-xl-12">
            <div class="card mg-b-20">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <button type="button" class="btn btn-primary x-small" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus"></i>&nbsp; اضافة منتج</button><br><br>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example1" class="table key-buttons text-md-nowrap" data-page-length='50'>
                            <thead>
                            <tr>
                                <th class="border-bottom-0">#</th>
                                <th class="border-bottom-0">اسم المنتج</th>
                                <th class="border-bottom-0">اسم القسم</th>
                                <th class="border-bottom-0">ملاحظات</th>
                                <th class="border-bottom-0">العمليات</th>

                            </tr>
                            </thead>
                            <tbody>
                            @php
                            $i=0;
                            @endphp
                            @foreach($Products as $Product)
                               @php $i++ @endphp
                                <tr>
                                    <td>{{$i}}</td>
                                    <td>{{$Product->product_name}}</td>
                                    <td>{{$Product->section->section_name}}</td>
                                    <td>{{$Product->description}}</td>
                                    <td>
                                        <button class="btn btn-success btn-sm"
                                                data-name="{{ $Product->product_name }}" data-pro_id="{{ $Product->id }}"
                                                data-section_name="{{ $Product->section->section_name }}"
                                                data-description="{{ $Product->description }}" data-toggle="modal"
                                                data-target="#edit_Product"><i class="las la-pen"></i></button>
                                        <button class="btn btn-danger btn-sm " data-pro_id="{{ $Product->id }}"
                                                data-product_name="{{ $Product->product_name }}" data-toggle="modal"
                                                data-target="#modaldemo9"><i class="las la-trash"></i></button>
                                    </td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- add -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">اضافة منتج</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{URL('Products/store')}}" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">اسم المنتج</label>
                                <input type="text" class="form-control" id="product_name" name="product_name" required >

                            </div>

                            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">القسم</label>
                            <select name="section_id" id="section_id" class="form-control" required>
                                <option value="" selected disabled> --حدد القسم--</option>
                                @foreach ($sections as $section)
                                    <option value="{{ $section->id }}">{{ $section->section_name }}</option>
                                @endforeach
                            </select>

                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">ملاحظات</label>
                                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">تاكيد</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

{{--        edit--}}

        <div class="modal fade" id="edit_Product" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">تعديل منتج</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{URL('Products/update')}}" method="post">
{{--                        {{ method_field('patch') }}--}}
                        @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="title">اسم المنتج :</label>
                                <input type="hidden" class="form-control" name="pro_id" id="pro_id" value="">
                                <input type="text" class="form-control" name="Product_name" id="Product_name">
                            </div>
                            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">القسم</label>
                            <select name="section_name" id="section_name" class="custom-select my-1 mr-sm-2" required>
                                @foreach ($sections as $section)
                                    <option selected>{{$section->section_name }}</option>
                                @endforeach

                                </select>
                                <div class="form-group">
                                    <label for="des">ملاحظات :</label>
                                    <textarea name="description" cols="20" rows="5" id='description'
                                              class="form-control"></textarea>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">تعديل البيانات</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- delete -->
        <div class="modal fade" id="modaldemo9" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">حذف المنتج</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{URL('Products/destroy')}}" method="post">
{{--                        method_field('delete') }}--}}
                        @csrf
                        <div class="modal-body">
                            <p>هل انت متاكد من عملية الحذف ؟</p><br>
                            <input type="hidden" name="pro_id" id="pro_id" value="">
                            <input class="form-control" name="product_name" id="product_name" type="text" readonly>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button>
                            <button type="submit" class="btn btn-danger">تاكيد</button>
                        </div>
                    </form>
                </div>
            </div>



    </div>
    <!-- row closed -->
    </div>


    <!-- Container closed -->

    <!-- main-content closed -->

@endsection
@section('js')
    <!-- Internal Data tables -->
    <script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/dataTables.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/responsive.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/jszip.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/pdfmake.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/vfs_fonts.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js')}}"></script>
    <!--Internal  Datatable js -->
    <script src="{{URL::asset('assets/js/table-data.js')}}"></script>
    <!-- Internal Prism js-->
            <script src="{{URL::asset('assets/plugins/prism/prism.js')}}"></script>


<script>
            $('#edit_Product').on('show.bs.modal', function(event){
                const button = $(event.relatedTarget);
                const Product_name = button.data('name');
                const section_name = button.data('section_name');
                const pro_id = button.data('pro_id');
                const description = button.data('description');
                const modal = $(this);
                modal.find('.modal-body #Product_name').val(Product_name);
            modal.find('.modal-body #section_name').val(section_name);
            modal.find('.modal-body #description').val(description);
            modal.find('.modal-body #pro_id').val(pro_id);

        })
</script>

<script>
            $('#modaldemo9').on('show.bs.modal', function(event) {
                const button = $(event.relatedTarget);
                const pro_id = button.data('pro_id');
                const product_name = button.data('product_name');
                const modal = $(this);

                modal.find('.modal-body #pro_id').val(pro_id);
            modal.find('.modal-body #product_name').val(product_name);
        })
    </script>


@endsection
