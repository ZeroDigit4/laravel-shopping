@extends('layouts.admin.master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Products
        <small>Add</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="/admin/products">Products</a></li>
        <li class="active">Add</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    	<form method="post" action="" class="form form-horizontal">
      @csrf
      <div class="row form-group">
        <div class="col-md-3">
          <label>Name</label>
        </div>
        <div class="col-md-9">
          <input type="text" name="product_name" placeholder="Product Name" class="form-control">
        </div>
      </div>
      <div class="row form-group">
        <div class="col-md-3">
          <label>Type</label>
        </div>
        <div class="col-md-9">
          <select name="product_type" class="form-control">
            <option selected disabled>Select type</option>
            <option value="1">Crepe</option>
            <option value="2">Banh kem</option>     
            <option value="3">Banh bong lan</option>     
          </select>
        </div>
      </div>
      <div class="row form-group">
        <div class="col-md-3">
          <label>Description</label>
        </div>
        <div class="col-md-9">
          <textarea name="product_desc" class="form-control"></textarea>
        </div>
      </div>
      <div class="row form-group">
        <div class="col-md-3">
          <label>Unit price</label>
        </div>
        <div class="col-md-3">
          <input type="number" name="product_unit_price" placeholder="Unit price" class="form-control" step="10" min="0">
        </div>
        <div class="col-md-3">
          <label>Promotion price</label>
        </div>
        <div class="col-md-3">
          <input type="number" name="product_promotion_price" placeholder="Promotion price" class="form-control" step="10" min="0">
        </div>
      </div>
      <div class="row form-group">
        <div class="col-md-3">
          <label>Unit</label>
        </div>
        <div class="col-md-9">
          <input type="text" name="product_unit" placeholder="Unit" class="form-control">
        </div>
      </div>
      <div class="row form-group">
        <div class="col-md-3">
          <label>Is new?</label>
        </div>
        <div class="col-md-9">
          <div class="col-md-2">
            <div class="input-group">
              <div class="input-group-text">
                <input class="form-check-input" type="radio" name="product_new" value="1" aria-label="Radio button for following text input">
                <label> Yes</label>
              </div>          
            </div>
          </div>
          <div class="col-md-2">
            <div class="input-group">
              <div class="input-group-text">
                <input class="form-check-input" type="radio" name="product_new" value="0" aria-label="Radio button for following text input">
                <label> No</label>
              </div>          
            </div>
          </div>                    
        </div>
      </div>
      <div class="row form-group">
        <div class="col-md-3">
          <label>Image</label>
        </div>
        <div class="col-md-9">
          <div class="input-group mb-3">
            <input type="file" name="product-image" class="form-control">          
          </div>
        </div>
      </div>
      <div class="row form-group">
        <div class="col-md-12 text-right">
          <button type="reset" class="btn btn-default">Reset</button>
          <button type="submit" class="btn btn-success">Add</button>
        </div>
      </div>
      </form>
    </section>
  </div>
@endsection