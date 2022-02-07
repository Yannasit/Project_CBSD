<!DOCTYPE html>
<html>
<title>KM Rice</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!-- การลิ้ง javascript ของ bootstrap เเบบ cdn -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- การลิ้ง icon เพื่อใช้งาน icon -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

<body>

    <!-- Navbar (sit on top) -->
    <div class="w3-top">
        <div class="w3-bar w3-white w3-wide w3-padding w3-card">
        <a href="/" class="w3-bar-item w3-button"><b>KM</b> Rice</a>
            <!-- Float links to the right. Hide them on small screens -->
            <div class="w3-right w3-hide-small">
                <a href="/Category" class="w3-bar-item w3-button">หมวดหมู่</a>
                <a href="/Name" class="w3-bar-item w3-button">ข้อมูลต่างๆ</a>
                <a href="#contact" class="w3-bar-item w3-button">ติดต่อ</a>
            </div>
        </div>
    </div>

    <H3 style="margin-top: 70px;">ข้อมูลทั้งหมด</H3>
    <div class="d-flex justify-content-end">
        <a href="/AddName" class="btn btn-primary">เพิ่มข้อมูล</a>
    </div>
    <hr>
    <div class="row justify-content-md-center">
        <!-- data table ใช้เเสดงข้อมูลเเละเเบ่งหน้าให้อัตโนมัติ -->
        <div class="col-12">
            <table class="table table-striped table-bordered table-hover table-responsive-sm" id="name-list">
                <thead class="thead-light">
                    <tr style="text-align: center;">
                        <th>ไอดีรายงาน</th>
                        <th>ชื่อรายงาน</th>
                        <th>รูปภาพ</th>
                        <th>หมวดหมู่</th>
                        <th>จัดการ</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($name) : ?>
                        <?php foreach ($name as $data) : ?>
                            <tr style="text-align: center;">

                                <td><?php echo $data['km_id']; ?></td>
                                <td><?php echo $data['km_name']; ?></td>
                                <td><img src="<?php echo $data['km_pic']; ?>" width="100" height="100"></td>
                                <td><?php echo $data['km_group']; ?></td>

                                <td>
                                    <a href="<?php echo base_url('editName/' . $data['km_id']); ?>" class="btn btn-warning">แก้ไข</a>
                                    <a href="<?php echo base_url('deleteName/' . $data['km_id']); ?>" class="btn btn-danger">ลบ</a>
                                </td>

                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#name-list').DataTable();
            });
        </script>
        <script src="/main.js"></script>

</body>

</html>