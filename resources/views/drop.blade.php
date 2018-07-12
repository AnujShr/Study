@extends('layouts.master')
@section('page-content')
    <h1>Dropdown demo</h1>
    <form method="post">
        <select id="make" name="make">
            <option>Select Car Make</option>
            <option value="1">Toyota</option>
            <option value="2">Honda</option>
            <option value="3">Mercedes</option>
            <option value="4">BMW</option>
        </select>
        <br>
        <select id="model" name="model">
            <option>Please choose car make first</option>
        </select>
    </form>

    <script>
        $(document).ready(function ($) {
            $('#make').change(function () {
                var data = $('#make').val();
                $.ajax({
                    url: 'api/dropdown',
                    data: {option: data},
                    type: 'get',
                    dataType: 'json',
                    success: function (response) {
                        var model = $('#model');
                        model.empty();
                        $.each((response.data), function (key, value) {
                            model.append("<option value='" + key + "'>" + value.name + "</option>");
                        });
                    }

                });

            });
        });

    </script>
@endsection
