<?php
 $sql_lietke_danhmucgiay = "SELECT * FROM tbl_danhmuc ORDER BY thutu DESC";
 $query_lietke_danhmucgiay =   mysqli_query($mysqli,$sql_lietke_danhmucgiay);
?>
<h6 style="text-align: center;text-transform: uppercase;font-weight: bold;margin-top: 20px">Liệt kê danh mục món</h6>
<table style="width: 100%;" border="1" style="border-collapse: collapse; margin-top:20px">
  <tr>
    <th>ID</th>
    <th>Tên danh mục</th>
    <th>Quản lý</th>
    
  </tr>
  <?php 
    $i=0;
    while($row = mysqli_fetch_array($query_lietke_danhmucgiay)){
      $i++;  
    ?>
  <tr>
    <td><?php echo $i ?></td>
    <td><?php echo $row['tendanhmuc'] ?></td> 
    <td><a class="btn btn-primary" href="modules/quanlydanhmucsanpham/xuly.php?iddanhmuc=<?php echo  $row['id_danhmuc']?>">Xóa</a> | 
    <a  class="btn btn-secondary" href="index.php?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo  $row['id_danhmuc']?>">Sửa</a></td>
  </tr>
  <?php } ?>
</table>