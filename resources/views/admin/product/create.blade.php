@extends('admin.dashboard')
@section('admin_content')
<div class="row wrapper border-bottom white-bg page-heading animated fadeInRight">
    <div class="col-lg-10">
        <h2>{{__('Product')}}</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{route('admin.dashboard')}}">{{__('Home')}}</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{route('admin.product.index')}}">{{__('Product')}}</a>
            </li>
            <li class="breadcrumb-item active">
                <strong>{{__('Create Product')}}</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2 align-self-center ">
        <div class="my-auto">
            <a class="btn btn-primary btn-md float-right" href="{{route('admin.product.index')}}">{{__('Product List')}}</a>
        </div>
    </div>

</div>

<div class="wrapper wrapper-content animated fadeInRight">

    
    <div class="row">
        
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>{{__('Create Product')}}</h5>
                    
                </div>
                <div class="ibox-content">
                    <form action="{{route('admin.product.store')}}" method="POST" enctype="multipart/form-data">  
                        @csrf
                        <div class="form-group  row">
                            
                            <label class="col-sm-2 col-form-label">{{__('Product Name')}} <span class="text-danger">*</span></label>

                            <div class="col-sm-10">
                                <input type="text" name="product_name" placeholder="Product Name" class="form-control">
                            </div>
                        </div>

                        <div class="form-group  row">
                            
                            <label class="col-sm-2 col-form-label">{{__('Price')}} <span class="text-danger">*</span></label>

                            <div class="col-sm-10">
                                <input type="text" name="product_price" placeholder="Price" class="form-control" >
                            </div>
                        </div>



                        <div class="form-group  row">
                            
                            <label class="col-sm-2 col-form-label">{{__('Brand')}}</label>

                            <div class="col-sm-10">
                                <input type="text" name="product_brand" placeholder="Brand" class="form-control" >
                            </div>
                        </div>

                        

                        <div class="form-group  row">
                            
                            <label class="col-sm-2 col-form-label">{{__('Processor')}}</label>

                            <div class="col-sm-10">
                                <input type="text" name="product_processor" placeholder="Processor" class="form-control" >
                            </div>
                        </div>

                        <div class="form-group  row">
                            
                            <label class="col-sm-2 col-form-label">{{__('Ram')}} </label>

                            <div class="col-sm-10">
                                <input type="text" name="product_ram" placeholder="Ram"  class="form-control">
                               
                            </div>
                        </div>



                        <div class="form-group  row">
                            
                            <label class="col-sm-2 col-form-label">{{__('Storage')}}</label>

                            <div class="col-sm-10">
                                <input type="text" name="product_storage" placeholder="Storage" class="form-control" >
                            </div>
                        </div>

                        <div class="form-group  row">
                            
                            <label class="col-sm-2 col-form-label">{{__('Screen')}} </label>

                            <div class="col-sm-10">
                                <input type="text" name="product_screen" placeholder="Screen"  class="form-control">
                               
                            </div>
                        </div>

                        

                        <div class="form-group  row">
                            
                            <label class="col-sm-2 col-form-label">{{__('Image')}}</label>

                            <div class="col-sm-10">
                                <div class="custom-file">
                                    
                                    <input id="product_image" type="file" name="product_image" class="custom-file-input" accept="image/*" onchange="readURL(this);" >
                                    <label for="product_image" class="custom-file-label">{{__('Choose file')}}...</label>
                                    
                                </div> 
                            </div>
                        </div>

                        <div class="form-group  row">
                            
                            <label class="col-sm-2 col-form-label"></label>

                            <div class="col-sm-10">
                                <img id="image" src="" >
                            </div>
                        </div>


                        <div class="form-group row">
                            
                            <label class="col-sm-2 col-form-label">{{__('Active Status')}} <span class="text-danger">*</span></label>


                            <div class="col-sm-10">
                                <select class="form-control custom-select" name="status">
                                    <option value="1">{{__('Active')}}</option>
                                    <option value="0">{{__('Inacive')}}</option>
                                </select>


                            </div>
                        </div>

                        

                        <div class="hr-line-dashed"></div>
                       
                        <div class="form-group row">
                            <div class="col-sm-4 col-sm-offset-2">

                                <button class="btn btn-primary btn-md" type="submit">{{__('Create New')}}</button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>


<script>
    function readURL(input)
    {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#image')
                .attr('src', e.target.result)
                .width(80)
                .height(80);
                
            };
            reader.readAsDataURL(input.files[0]);
        }

    }
</script>

@endsection