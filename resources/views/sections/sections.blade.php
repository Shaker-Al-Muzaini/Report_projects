@extends('layouts.master')
<link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
@section('css')
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">الاعدادات</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ الاقسام</span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if(session()->has('Add'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session()->get('Add') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    @if(session()->has('delete'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ session()->get('delete') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    @if(session()->has('edit'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session()->get('edit') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
                            @endif
    @if(session()->has( 'Error'))
                                <div  class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>{{ session()->get( 'Error' ) }}</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times; </span>
                                    </button>
                                </div>
                                @endif
    <!-- row -->
    <div class="row">

        <div class="col-xl-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mg-b-0">Hoverable Rows Table</h4>
                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                    </div>
                    <p class="tx-12 tx-gray-500 mb-2">Example of Valex Hoverable Rows Table.. <a href="">Learn more</a></p>
                </div>
                <div class="card-body">
                    <div class="table-responsive hoverable-table">
                        <a  data-effect="effect-scale" data-toggle="modal"
                            href="#modaldemo8"> <button id="button" class="btn btn-primary mg-b-20">اضافة قسم جديد</button></a>
                        <div class="table-responsive">
                            <table id="example-delete" class="table key-buttons text-md-nowrap" data-page-length='10'>
                                <thead>
                                <tr>
                                    <th class="border-bottom-0">#</th>
                                    <th class="border-bottom-0">اسم القسم</th>
                                    <th class="border-bottom-0">الوصف</th>
                                    <th class="border-bottom-0">العمليات</th>
                                    <th class="border-bottom-0">المشرف</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i =0?>
                                @foreach($sections as $section)
                                        <?php $i++?>
                                    <tr>
                                        <td>{{$i}}</td>
                                        <td>{{$section->section_name}}</td>
                                        <td>{{$section->sections_description}}</td>
                                        <td>
                                            <a class="modal-effect btn btn-sm btn-info" data-effect="effect-scale"
                                               data-id="{{$section->id }}" data-section_name="{{$section->section_name }}"
                                               data-sections_description="{{$section->sections_description }}" data-toggle="modal" href="#exampleModal2"
                                               title="تعديل"><i class="las la-pen"></i></a>

{{--                                            <a class="modal-effect btn btn-sm btn-danger" data-effect="effect-scale"--}}
{{--                                               data-id="{{$section->id }}" data-section_name="{{$section->section_name }}" data-toggle="modal"--}}
{{--                                               href="#modaldemo9" title="حذف"><i class="las la-trash"></i></a>--}}
                                            <a class="modal-effect btn btn-sm btn-danger" data-effect="effect-scale"
                                               data-id="{{ $section->id }}" data-section_name="{{ $section->section_name }}" data-toggle="modal"
                                               href="#modaldemo7" title="حذف"><i class="las la-trash"></i></a>

                                        </td>
                                        <td>{{$section->created_by}}</td>


                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- delete -->
        <div class="modal" id="modaldemo7">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content modal-content-demo">
                    <div class="modal-header">
                        <h6 class="modal-title">حذف القسم</h6><button aria-label="Close" class="close" data-dismiss="modal"
                          type="button"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <form action="{{url('sections/destroy')}}" method="post">
                        {{--                            {{method_field('delete')}}--}}
                        @csrf
                        <div class="modal-body">
                            <p>هل انت متاكد من عملية الحذف ؟</p><br>
                            <input type="hidden" name="id" id="id" value="">
                            <input class="form-control" name="section_name" id="section_name" type="text" readonly>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button>
                            <button type="submit" class="btn btn-danger">تاكيد</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Container closed -->
        </div>

        <div class="modal" id="modaldemo8">
            <div class="modal-dialog" role="document">
                <div class="modal-content modal-content-demo">
                    <div class="modal-header">
                        <h6 class="modal-title">اضافة قسم</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{url('sections/store')}}" method="post">
                           @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">اسم القسم</label>
                                <input type="text" class="form-control" id="section_name" name="section_name"  >
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">ملاحظات</label>
                                <textarea class="form-control" id="sections_description" name="sections_description" rows="3"></textarea>
                            </div>

                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success">تاكيد</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- End Basic modal -->


        </div>
        <!-- edit -->
        <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">تعديل القسم</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{url('sections/update')}}" method="post" autocomplete="off">
                            @csrf
                            <div class="form-group">
                                <input type="hidden" name="id" id="id" value="">
                                <label for="recipient-name" class="col-form-label">اسم القسم:</label>
                                <input class="form-control" name="section_name" id="section_name" type="text">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">ملاحظات:</label>
                                <textarea class="form-control" id="sections_description" name="sections_description"></textarea>
                            </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">تاكيد</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

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
    <script src="{{URL::asset('assets/js/modal.js')}}"></script>

    <script>
        $('#exampleModal2').on('show.bs.modal', function(event) {
            const button = $(event.relatedTarget);
            const id = button.data('id');
            const section_name = button.data('section_name');
            const sections_description = button.data('sections_description');
            const modal = $(this);
            modal.find('.modal-body #id').val(id);
            modal.find('.modal-body #section_name').val(section_name);
            modal.find('.modal-body #sections_description').val(sections_description);
        })
    </script>

                <script>
                    $('#modaldemo7').on('show.bs.modal', function(event) {
                        const button = $(event.relatedTarget);
                        const id = button.data('id');
                        const section_name = button.data('section_name');
                        const modal = $(this);
                        modal.find('.modal-body #id').val(id);
                        modal.find('.modal-body #section_name').val(section_name);
                    })
                </script>

@endsection
