<!-- resources/views/admin/pricing.blade.php -->

@extends('layouts.app')

@section('content')
<div class="Dashboard-heading">
    <!-- <h1>Pricing</h1> -->
    <div class="modal-body">
        <form>
            <div class="form-group">
                <label for="updateTitle">Title:</label>
                <input type="text" class="form-control" id="updateTitle" required>
            </div>
            <div class="form-group">
                <label for="updateDescription">Description:</label>
                <textarea class="form-control" id="updateDescription" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="updatePrice">Price:</label>
                <input type="number" class="form-control" id="updatePrice" required>
            </div>
            <button type="button" class="btn btn-primary" id="updateBtn">Update</button>
        </form>
    </div>
</div>
</div>
</div>

</div>
<!-- Services specific content goes here -->
@endsection