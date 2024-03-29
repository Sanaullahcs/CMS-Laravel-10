<!-- resources/views/admin/gallery.blade.php -->

@extends('layouts.app')

@section('content')
<div class="Dashboard-heading">
    <!-- <h1>Gallery</h1> -->
    <div class="container rowBlogWrapper mt-5">
        <div class="row">
            <div class="col">
                <h2 class="text-center mb-4 blogHeading">Upload Photos</h2>
                <form enctype="multipart/form-data" method="post">
                    @csrf
                    <!-- Photo Input -->
                    <div class="form-group">
                        <label class="blogLabel" for="photos">Select Photos</label>
                        <input type="file" class="form-control-file" id="photos" name="photos[]" multiple accept="image/*">
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn BlogSubmitBtn">Upload Photos</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Gallery specific content goes here -->
@endsection