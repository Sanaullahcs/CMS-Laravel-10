<!-- resources/views/admin/services.blade.php -->

@extends('layouts.app')

@section('content')
<div class="Dashboard-heading">
    <!-- <h1>services</h1> -->
    <div class="container rowBlogWrapper mt-5">
        <h2 class="mb-4 blogHeading">Services</h2>

        <!-- Service Form -->
        <form id="serviceForm">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label class="blogLabel" for="servicePhoto">Service Photo:</label>
                    <input type="file" class="form-control" id="servicePhoto" accept="image/*" required>
                </div>
                <div class="form-group col-md-4">
                    <label class="blogLabel" for="serviceTitle">Service Title:</label>
                    <input type="text" class="form-control" id="serviceTitle" required>
                </div>
                <div class="form-group col-md-4">
                    <label class="blogLabel" for="serviceDescription">Service Description:</label>
                    <textarea class="form-control" id="serviceDescription" rows="3" required></textarea>
                </div>
            </div>
            <button type="submit" class="btn BlogSubmitBtn">Add Service</button>
        </form>

    </div>
</div>
<!-- Services specific content goes here -->
@endsection