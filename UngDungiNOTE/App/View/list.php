<a href="index.php?page=note-create">Create</a>
<table>
    <thead>
    <tr>
        <th>stt</th>
        <th>title</th>
        <th>content</th>
        <th colspan="3">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($datas as $key => $data):?>
    <tr>
        <td><?php echo $key+1?></td>
        <td><?php echo $data->title?></td>
        <td><?php echo $data->content?></td>
        <td><a href="index.php?page=note-update&id=<?php echo $data->id?>">Update</a></td>
        <td><a onclick="return confirm('Bạn có thực sự muốn xóa khum ạ ?????????????')" href="index.php?page=note-delete&id=<?php echo $data->id?>">Delete</a></td>
    </tr>
    <?php endforeach;?>
    </tbody>
</table>
