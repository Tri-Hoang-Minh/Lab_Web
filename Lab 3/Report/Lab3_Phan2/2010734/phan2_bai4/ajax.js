$(document).ready(function () {
        fetch_data();
        function fetch_data() {
            $.ajax({
                url: "a.php",
                method: "POST",
                success: function (data) {
                    $('#load-data').html(data);
                }
            })
        }
    
    
    $('#button-insert').on('click', function () {
        var name = $('#name').val();
        var price = $('#price').val();
        var description = $('#description').val();
        var image = $('#image').val();
    
        if ($.trim(name) == '' || $.trim(price) == '') {
            alert('Name and price are required!');
            return;
        }
    
        $.ajax({
            url: "b.php",
            method: "POST",
            data: { name: name, price: price, description: description, image: image },
            dataType: 'json',
            success: function (data) {
                var msg = '';
    
                if ($.trim(data.name) != '') {
                    msg += data.name + '\n';
                }
    
                if ($.trim(data.description) != '') {
                    msg += data.description + '\n';
                }
    
                if ($.trim(data.price) != '') {
                    msg += data.price + '\n';
                }
    
                if ($.trim(data.image) != '') {
                    msg += data.image;
                }
    
                if (msg != '') {
                    alert(msg);
                }
                else {
                    alert("Insert successfully!");
                }
                $('#insert-data')[0].reset();
                fetch_data();
            }
        })
    });
            function edit_data(id, text, column_name) {
                $.ajax({
                    url: "c.php",
                    method: "POST",
                    data: { id: id, text: text, column_name: column_name },
                    success: function (data) {
                        var msg = '';
                        if ($.trim(data) !== '') {
                            msg += data;
                        }
                        if (msg !== '""') {
                            alert(msg);
                        }
                        else {
                            alert('Edit successfully!');
                        }
                        fetch_data();
                    }
                })
            }

            $(document).on('blur', '.name', function () {
                var id = $(this).data('id2');
                var text = $(this).text();
    
                edit_data(id, text, "name");
            })

            $(document).on('blur', '.description', function () {
                var id = $(this).data('id3');
                var text = $(this).text();
    
                edit_data(id, text, "description");
            })
   
            $(document).on('blur', '.price', function () {
                var id = $(this).data('id4');
                var text = $(this).text();
    
                edit_data(id, text, "price");
            })
            $(document).on('blur', '.image', function () {
                var id = $(this).data('id5');
                var text = $(this).text();
    
                edit_data(id, text, "image");
            })

            $(document).on('click', '.delete-data', function () {
                var id = $(this).data('id_delete');
                $.ajax({
                    url: "d.php",
                    method: "POST",
                    data: { id: id },
                    success: function (data) {
                        alert("Delete successfully!");
                        fetch_data();
                    }
                })
            });
        })