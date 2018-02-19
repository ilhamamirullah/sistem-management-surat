$(document).ready(function(){

    var url = "/gl/daftar_client/show_client";

    //display modal form for client editing
    $('.open-modal').click(function(){
        var client_id = $(this).val();

        $.get(url + '/' + client_id, function (data) {
            //success data
            console.log(data);
            $('#client_id').val(data.id);
            $('#nama').val(data.nama);
            $('#tanggal_lahir').val(data.tanggal_lahir);
            $('#jenis_kelamin').val(data.jenis_kelamin);
            $('#agama').val(data.agama);
            $('#no_identitas').val(data.no_identitas);
            $('#alamat').val(data.alamat);
            $('#no_telp').val(data.no_telp);
            $('#email').val(data.email);
            $('#instansi').val(data.instansi);
            $('#jabatan').val(data.jabatan);
            $('#alamat_instansi').val(data.alamat_instansi);
            // $('#btn-save').val("update");

            $('#myModal').modal('show');
        })
    });

    //display modal form for creating new client
    $('#btn-add').click(function(){
        $('#btn-save').val("add");
        $('#frmclients').trigger("reset");
        $('#myModal').modal('show');
    });

    //delete client and remove it from list
    $('.delete-client').click(function(){
        var client_id = $(this).val();

        $.ajax({

            type: "DELETE",
            url: url + '/' + client_id,
            success: function (data) {
                console.log(data);

                $("#client" + client_id).remove();
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });

    //create new client / update existing client
    $("#btn-save").click(function (e) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })

        e.preventDefault();

        var formData = {
            client: $('#client').val(),
            description: $('#description').val(),
        }

        //used to determine the http verb to use [add=POST], [update=PUT]
        var state = $('#btn-save').val();

        var type = "POST"; //for creating new resource
        var client_id = $('#client_id').val();;
        var my_url = url;

        if (state == "update"){
            type = "PUT"; //for updating existing resource
            my_url += '/' + client_id;
        }

        console.log(formData);

        $.ajax({

            type: type,
            url: my_url,
            data: formData,
            dataType: 'json',
            success: function (data) {
                console.log(data);

                var client = '<tr id="client' + data.id + '"><td>' + data.id + '</td><td>' + data.client + '</td><td>' + data.description + '</td><td>' + data.created_at + '</td>';
                client += '<td><button class="btn btn-warning btn-xs btn-detail open-modal" value="' + data.id + '">Edit</button>';
                client += '<button class="btn btn-danger btn-xs btn-delete delete-client" value="' + data.id + '">Delete</button></td></tr>';

                if (state == "add"){ //if user added a new record
                    $('#clients-list').append(client);
                }else{ //if user updated an existing record

                    $("#client" + client_id).replaceWith( client );
                }

                $('#frmclients').trigger("reset");

                $('#myModal').modal('hide')
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });
});
