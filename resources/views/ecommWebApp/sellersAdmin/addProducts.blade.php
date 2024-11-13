@extends('ecommWebApp.sellersAdmin.sellersCommonlayout')

@section('sellersContents')
<div class="breadcrumb-option mb-3" style="margin-top:-4%">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__links">
                    <a href="{{route('SalesDashboard')}}"><i class="fa fa-home"></i>Sellers Dashboard</a>
                    <span>ADD PRODUCTS</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-4">

   <form  id="addProducts" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-4 mb-3">
            <label for="product_category" class="form-label" style="font-weight: bold">Product Category:</label>
            <input type="text" class="form-control" id="product_category" name="product_category" placeholder="Enter Product Category Name...">
        </div>
        <div class="col-md-4 mb-3">
            <label for="product_name" class="form-label" style="font-weight: bold">Product Name:</label>
            <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Enter Product Name...">
        </div>
        <div class="col-md-4 mb-3">
            <label for="product_price" class="form-label" style="font-weight: bold">Product Price:</label>
            <div class="input-group">
                <span class="input-group-text">	&#128176</span>
                <input type="text" class="form-control" id="product_price" name="product_price" placeholder="Enter Product Price...">
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <label for="product_quantity" class="form-label" style="font-weight: bold">Product Quantity:</label>
            <input type="number" class="form-control" id="product_quantity" name="product_quantity" placeholder="Enter Product Quantity...">
        </div>
        <div class="col-md-4 mb-3">
            <label for="product_image" class="form-label" style="font-weight: bold">Product Image 1:</label>
            <input type="file" class="" id="product_image1" name="product_image1">
        </div>
        <div class="col-md-4 mb-3">
            <label for="product_image" class="form-label" style="font-weight: bold">Product Image 2(Optional):</label>
            <input type="file" class="" id="product_image2" name="product_image2">
        </div>
        <div class="col-md-4 mb-3">
            <label for="product_description" class="form-label" style="font-weight: bold">Product Description:</label>
            <textarea class="form-control" id="product_description" name="product_description" rows="3" placeholder="Enter Product Description..."></textarea>
        </div>
        <div class="col-md-4 mb-3">
            <label for="product_keywords" class="form-label" style="font-weight: bold">Product Keywords:</label>
            <textarea class="form-control" id="product_keywords" name="product_keywords" rows="3" placeholder="Enter Product Keywords for Searching..."></textarea>
        </div>
    </div>
    <div class="row float-right">
        <div class="col text-end">
            <button type="submit" class="btn btn-success" style="font-weight: bold">SUBMIT</button>
        </div>
    </div>
   </form>
</div>

<div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
    <div id="toastMessage" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <strong class="me-auto">Notification</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            <!-- Toast message will appear here -->
        </div>
    </div>
</div>

{{-- @endsection --}}

{{-- @section('scripts') --}}
<script>
    $(document).ready(function() {
        $('#addProducts').submit(function(event) {
            // Prevent default form submission
            event.preventDefault();

            // Serialize form data
            var formData = new FormData($(this)[0]);

            // Send AJAX request
            $.ajax({
                url: '{{ route('add_Products') }}',
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    // Show success toast
                    showToast('Success', 'Product added successfully');
                    // Optionally, reset the form after successful submission
                    $('#addProducts')[0].reset();
                },
                error: function(xhr, status, error) {
                    // Show error toast
                    showToast('Error', 'Failed to add product');
                }
            });
        });

        // Function to display toast notification
        function showToast(title, message) {
            var toast = new bootstrap.Toast(document.getElementById('toastMessage'));
            $('.toast-body').text(message);
            toast.show();

            // Hide toast after 10 seconds
            setTimeout(function() {
                toast.hide();
            }, 10000);
        }
    });
</script>
@endsection
