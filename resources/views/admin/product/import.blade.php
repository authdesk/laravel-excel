@extends('admin.dashboard')
@section('admin_content')
<div class="row wrapper border-bottom white-bg page-heading animated fadeInRight">
    <div class="col-lg-6">
        <h2>{{__('Product')}}</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{route('admin.dashboard')}}">{{__('Home')}}</a>

                
                 
            </li>

            <li class="breadcrumb-item"><a href="{{route('admin.product.index')}}">{{__('Product Index')}}</a></li>
            
            <li class="breadcrumb-item active">
                <strong>{{__('Import Products')}}</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-6 align-self-center ">
        <div class="my-auto ">
        
            <a class="btn btn-primary btn-md float-right" href="{{route('admin.product.index')}}">{{__('Product Index')}}</a>
            <a class="btn btn-primary btn-md float-right mx-1" href="{{route('admin.product.create')}}">{{__('Create Product')}}</a>
            <a class="btn btn-primary btn-md float-right mx-1" href="{{route('admin.export-product')}}"> {{__('Download Xlsx File')}}</a>
        </div>
    </div>


</div>


<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
        <div class="ibox ">
            <div class="ibox-title">
                <h5>{{__('Create Product Form')}}</h5>
           
            </div>
            <div class="ibox-content">

                    <!-- Horizontal Form -->
                    <div class="card">
                       
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form class="form-horizontal" action="{{url('/admin/import')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="card-body">

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="import_file" class=" form-control-label">Xlsx File Import</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="file"  name="import_file"    required>
                                    </div>
                                </div>

                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Upload</button>
                            
                            </div>
                            <!-- /.card-footer -->
                        </form>

                        
                        
                    </div>
                    <!-- /.card -->

                    <br>
                        
                    <p><b>Note:</b> Download the xlsx file (included requird columns as example) format, fill all the fields (if have no value of specific field set "null" or "0") with products information and import the file. </p>
                        


                

            </div>
        </div>
    </div>
    </div>
</div>







@endsection