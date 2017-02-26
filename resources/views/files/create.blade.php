<div class="modal b" id="modal_file" tabindex="-1" role="dialog" aria-labelledby="SubirArchivo">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <form method="post" action="/files" id="uploadForm" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label>Nombres</label>
                        <input type="text" class="form-control" name="first_name">
                        <input type="hidden" name="title" id="title">
                        <input type="hidden" name="contest_id" value="{{ $contest->slug }}">
                    </div>
                    <div class="form-group">
                        <label>Apellidos</label>
                        <input type="text" class="form-control" name="last_name">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                        <input type="file" class="" name="file" id="file">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Cargar</button>
                    </div>

                    @include('layouts.errors')
                </form>

            </div>
        </div>
    </div>
</div>
<script src="/js/validator.js"></script>
<script>
    $().ready(function() {

        $("#uploadForm").validate({
            rules: {
                first_name: "required",
                last_name: "required",
                email: {
                    required: true,
                    email: true
                },
                file: "required"
            },
            messages: {
                first_name: "Please enter your first name",
                last_name: "Please enter your last name",
                email: "Please enter a valid email address",
                file: "Please select a file"
            }
        });
    });
</script>
<style>
    #uploadForm label.error{
        color: red;
    }
</style>

<script>
    $(document).ready(function() {
        $('#file').change(function() {
            $lowerc = $('#file').val();
            $('#title').val($lowerc.split(/[\\\/]/).pop());
        });
    });
</script>