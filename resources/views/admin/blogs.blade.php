<!-- resources/views/admin/blogs.blade.php -->

@extends('layouts.app')

@section('content')
<div class="Dashboard-heading">
    <!-- <h1>blog</h1> -->
    <div class="container rowBlogWrapper mt-5">
        <div class="row">
            <div class="col">
                <h2 class="text-center mb-4 blogHeading">Create a New Blog</h2>
                <form>
                    <!-- Photo Input -->
                    <div class="form-group">
                        <label class="blogLabel" for="photo">Blog Photo</label>
                        <input type="file" class="form-control-file" id="photo" name="photo">
                    </div>

                    <!-- Blog Title Input -->
                    <div class="form-group">
                        <label class="blogLabel" for="blogTitle">Blog Title</label>
                        <input type="text" class="form-control" id="blogTitle" name="blogTitle"
                            placeholder="Enter blog title">
                    </div>

                    <!-- Blog Description Input -->
                    <div class="form-group">
                        <label class="blogLabel" for="blogDescription">Blog Description</label>
                        <textarea class="form-control" id="blogDescription" name="blogDescription" rows="4"
                            placeholder="Enter blog description"></textarea>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn BlogSubmitBtn">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <div class="container rowBlogWrapper mt-5">
        <div class="row">
            <div class="col">
                <h2 class="text-center mb-4 blogHeading">Blog Details</h2>

                <!-- Display Current Blog Information -->
                <div class="mb-3">
                    <strong class="blogLabel">Current Blog Title:</strong> Current Blog Title
                </div>
                <div class="mb-3">
                    <strong class="blogLabel">Current Blog Description:</strong> Current Blog Description
                </div>
                <!-- Display Current Blog Photo (if available) -->
                <div class="mb-3">
                    <strong class="blogLabel">Current Blog Photo:</strong>
                    <img src="path/to/current/photo.jpg" alt="Current Blog Photo" class="img-fluid">
                </div>

                <!-- Update Button to Reveal Options -->
                <button class="btn BlogSubmitBtn" id="updateBtn">Update</button>

                <!-- Update Options (Initially Hidden) -->
                <div id="updateOptions" style="display: none;">
                    <form>
                        <!-- Blog Title Input -->
                        <div class="form-group">
                            <label class="blogLabel" for="blogTitle">Update Blog Title</label>
                            <input type="text" class="form-control" id="blogTitle" name="blogTitle">
                        </div>

                        <!-- Blog Description Input -->
                        <div class="form-group">
                            <label class="blogLabel" for="blogDescription">Update Blog Description</label>
                            <textarea class="form-control" id="blogDescription" name="blogDescription"
                                rows="3"></textarea>
                        </div>

                        <!-- Photo Upload Input (Optional) -->
                        <div class="form-group">
                            <label class="blogLabel" for="blogPhoto">Update Blog Photo (Optional)</label>
                            <input type="file" class="form-control-file" id="blogPhoto" name="blogPhoto">
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn BlogSubmitBtn">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Show/Hide Update Options on Button Click
        document.getElementById('updateBtn').addEventListener('click', function () {
            document.getElementById('updateOptions').style.display = 'block';
        });
    });
</script>
<!-- Blogs specific content goes here -->
@endsection