<!-- List Table -->
<table class="table table-bordered bordered-info table-striped" style="background-color: aliceblue">
    <thead>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>DESCRIPTION</th>
            <th>PRICE</th>
            <th>IMAGE</th>
            <th>DELETE</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">
        <?php 
            $conn = mysqli_connect('localhost', 'root', '', 'shop');
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            $result = mysqli_query($conn, "SELECT * FROM products");
            foreach ($result as $row): 
        ?>
        <tr>
            <td contenteditable class="id" data-id1="<?php echo $row['id']?>">
                <?php echo $row['id']?>
            </td>
            <td contenteditable class="name" data-id2="<?php echo $row['id']?>">
                <?php echo $row['name']?>
            </td>
            <td contenteditable class="description" data-id3="<?php echo $row['id']?>">
                <?php echo $row['description']?>
            </td>
            <td contenteditable class="price" data-id4="<?php echo $row['id']?>">
                <?php echo $row['price']?>
            </td>
            <td contenteditable class="image" id="imageCell" data-id5="<?php echo $row['id']?>">
                <img src="<?php echo $row['image'] ?>" height=100px />
            </td>
            <td><button type="button" class="btn btn-outline-danger delete-data" name="delete-data" data-id_delete="<?php echo $row['id']; ?>">Delete</button></td>
        </tr>
        <?php endforeach; 
        mysqli_close($conn); ?>
    </tbody>
</table>