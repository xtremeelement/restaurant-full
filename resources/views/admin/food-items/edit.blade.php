@extends('layouts.admin')

@section('content')
    
            <div class="container-fluid  dashboard-content">
                <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">New Food Item</h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="/admin/food-items" class="breadcrumb-link">All Food Items</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Edit Food Item</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
             
                   
                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- basic form -->
                        <!-- ============================================================== -->
                        <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Edit Item</h5>
                                <div class="card-body">
                                    <form action="#" id="basicform" data-parsley-validate="">
                                        <div class="form-group">
                                            <label for="inputItem">Item Name</label>
                                            <input id="inputItem" type="text" name="title" data-parsley-trigger="change" required="" placeholder="Enter Item Name" autocomplete="off" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPrice">Item Price</label>
                                            <input id="inputPrice" type="text" name="price" data-parsley-trigger="change" required="" placeholder="Enter Item Price" autocomplete="off" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputItemImageUrl">Image Url</label>
                                            <input id="inputItemImageUrl" type="text" name="image_url" data-parsley-trigger="change" required="" placeholder="http://imgur.com" autocomplete="off" class="form-control">
                                        </div>
                                        <div class="row">                                            
                                            <div class="col-sm-6 pl-0">
                                                <p class="text-right">
                                                    <button type="submit" class="btn btn-space btn-primary">Submit</button>                                                    
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end basic form -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- horizontal form -->
                        <!-- ============================================================== -->
                       
           
            </div>
            </div>
               
           
    

@endsection

