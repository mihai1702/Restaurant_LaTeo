<tr>
    <td><?php echo $row["ID"]?></td>
    <td><?php echo $row["Name"]?></td>
    <td><?php echo $row["Price"]?></td>
    <td><?php echo $row["Ingredients"]?></td>
    <td><?php echo $row["Quantity"]?></td>
    <td><?php echo $row["ImageURL"]?></td>
    <td><?php echo $row["CreationDate"]?></td>
    <td>
        <a href="product-form.php?product_id=<?php echo ($row['ID'])?>" ><img title="Edit Product" class="table-icon" src="../icons/edit-icon.svg" alt="."></a>
        <a onclick="deletePopUp(event, this)" href="?method=delete&product_id=<?php echo ($row['ID'])?>"><img title="Delete product" src="../icons/delete-icon.svg" alt="."></a>
    </td>
</tr>