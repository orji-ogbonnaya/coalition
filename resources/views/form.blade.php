@extends('layouts.master')

@section('title')
Complete the following form
@endsection
        
@section('content')
<div>
    <form method="" id="form" action="" class="coalition-form">
        @csrf

        <div class="form-group">
            <label for="name">Product Name</label>
            <input type="text" class="form-control" name="name" id="name">
        </div>

        <div class="form-group">
            <label for="qty">Quantity in stock</label>
            <input type="number" class="form-control" name="qty" id="qty" required>
        </div>

        <div class="form-group">
            <label for="price">Price Per Item</label>
            <input type="text" class="form-control" name="price" id="price" required>
        </div>


        <button class="btn btn-primary" id="submit" name="submit">Submit</button>
    </form>
    <div id="hidden_table">

    </div>
    <div class="col-xs-12 table-space-top summary_table" id="summary_table" style="display:none">
        <div class="admin-table table-responsive">

          <table class="table" id="main_table">
            <thead>
            <tr>
                <th>Product Name</th>
                <th>Qty In Stock</th>
                <th>Price Per Item</th>
                <th>Date/Time Submitted</th>
                <th>Total Value Number</th>
            </tr>
            </thead>
            <tbody>
            <tr style="display:none">

            </tr>

            </tbody>
            </table>
        </div>
      </div>

</div>
@endsection
<script src="/js/jquery-3.2.1.min.js"></script>

<script>
$(document).ready(function() {
    console.log("Ready!!");

    $("#submit").click(function(){
        $name = $("#name").val();
        $qty = $("#qty").val();
        $price = $("#price").val();
        $date = '01/01/01';

        var table = document.getElementById('main_table').style.display='block';

        var markup = "<tr id='dataRow'><td id='name'>" + $name + "</td><td id='qty'>" + $qty + "</td><td>" + $price + "</td><td>" + $date + "</td><td class='price'>" +$qty*$price + "</td></tr>";

        var table = document.getElementById('main_table').display=true;;

        $('#main_table tr:last').after(markup);
       
    });

    // $("#form").submit(function(e){
    //     // alert("Submitted");
    //     e.preventDefault();
    //     $name = $("#name").val();
    //     $qty = $("#qty").val();
    //     $price = $("#price").val();
    //     $date = '01/01/01';


    //     // alert($name);

    //     var markup = "<tr id='dataRow'><td id='name'>" + $name + "</td><td id='qty'>" + $qty + "</td><td>" + $price + "</td><td>" + $date + "</td><td class='price'>" +$qty*$price + "</td></tr>";

    //     var table = document.getElementById('main_table').display=true;;

    //     $('#main_table tr:last').after(markup);

    // });

    
});
</script>