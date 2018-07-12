@extends ('layouts.master')

@section('page-content')

    {!! Form::open(array('url'=>'add/save','class'=>'form-horizontal','id'=>'add-form','novalidate'=>'novalidate')) !!}
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Add Vendor</h5>
        </div>

    </div>
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Ingrdients / Supplies</h5>
        </div>
        <div class="panel-body table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <td></td>
                    <td>Name/ID#</td>
                    <td>Description</td>
                    <td>Qty</td>
                </tr>
                </thead>
                <tbody id="ingredient-list">
                <tr>
                    <td>1</td>
                    <td>{!! Form::text('name_1',null,array('class'=>'form-control','id'=>'name_1')) !!}</td>
                    <td>{!! Form::text('description_1',null,array('class'=>'form-control')) !!}</td>
                    <td>{!! Form::text('qty_1',null,array('class'=>'form-control','id'=>'qty_1')) !!}</td>
                </tr>
                </tbody>
            </table>
            <a href="" id="add-new-ingredient">+</a>
            <input type="hidden" name="counter" value="1" id="ingredient-counter"/>
            <div class="row text-center">
                {!! Form::submit('Save',['class'=>'btn btn-primary','id'=>'add-save']) !!}
            </div>
            <div id="modal">
                @foreach($lists as $index=>$list)
                <li id="list_{{$index+1}}">{{$list->name}}</li>
                @endforeach
            </div>
        </div>
    </div>
    {!! Form::close() !!}
    <script>
        $(document).ready(function () {
            var counter = 0;
            $('#add-new-ingredient').click(function (e) {
                e.preventDefault();
                $('#ingredient-list').append(generateInputs());
            });
            $('#add-save').click(function (e) {
                e.preventDefault();
                var form = $('#add-form').serialize();
                $.ajax({
                    url: 'add/save',
                    data: form,
                    dataType: 'json',
                    type: 'post',
                    success: function (response) {
                        if (response.success === "Ok") {
                            $("#add-form")[0].reset();
                            $("p").remove();

                            $("#ingredient-counter").val(1);
                            $.each((response.list), function (key, value) {
                                $("#list_"+(key+1)).html(value.name);
                            });
                        }
                    }
                })
            });
        });

        function generateInputs() {
            var counter = parseInt($('#ingredient-counter').val()) + 1;
            var inputs = '<tr id="dynamic">'+
                '<td>' + counter + '</td>' +
                '<td><input type="text" class="form-control" name="name_' + counter + '" id="name_' + counter + '" /><span class="error"></span></td>' +
                '<td><input type="text" class="form-control" name="description_' + counter + '" /></td>' +
                '<td><input type="text" class="form-control" name="qty_' + counter + '" id="qty_' + counter + '" /><span class="error"></span></td>' +
                '</tr>';
            $('#ingredient-counter').val(counter);
            return inputs;
        }
    </script>


@endsection