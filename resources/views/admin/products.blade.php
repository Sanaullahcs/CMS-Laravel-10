<!-- resources/views/admin/products.blade.php -->

@extends('layouts.app')

@section('content')
<div class="Dashboard-heading">
    <!-- <h1>products</h1> -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h2 class="text-center mb-4">Upload a Product</h2>
                <form>
                    <!-- Product Name Input -->
                    <div class="form-group">
                        <label for="productName">Product Name</label>
                        <input type="text" class="form-control" id="productName" name="productName" required>
                    </div>

                    <!-- Price Input -->
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" class="form-control" id="price" name="price" required>
                    </div>

                    <!-- Description Input -->
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                    </div>

                    <!-- Photo Upload Inputs -->
                    <div class="form-group">
                        <label for="photo1">Photo 1</label>
                        <input type="file" class="form-control-file" id="photo1" name="photo1" required>
                    </div>

                    <div class="form-group">
                        <label for="photo2">Photo 2</label>
                        <input type="file" class="form-control-file" id="photo2" name="photo2" required>
                    </div>

                    <div class="form-group">
                        <label for="photo3">Photo 3</label>
                        <input type="file" class="form-control-file" id="photo3" name="photo3" required>
                    </div>

                    <div class="form-group">
                        <label for="photo4">Photo 4</label>
                        <input type="file" class="form-control-file" id="photo4" name="photo4" required>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary">Upload Product</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Dashboard specific content goes here -->
@endsection