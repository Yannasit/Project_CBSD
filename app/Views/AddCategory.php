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
            <a href="/index" class="w3-bar-item w3-button"><b>KM</b> Rice</a>
            <!-- Float links to the right. Hide them on small screens -->
            <div class="w3-right w3-hide-small">
                <a href="#projects" class="w3-bar-item w3-button">หมวดหมู่</a>
                <a href="#about" class="w3-bar-item w3-button">ข้อมูลต่างๆ</a>
                <a href="#contact" class="w3-bar-item w3-button">ติดต่อ</a>
            </div>
        </div>
    </div>

    <H3 style="margin-top: 70px;">เพิ่มหมวดหมู่</H3>
    <hr>
    <div class="container mt-5">
        <form id="add_create" method="post" id="addname" name="addname" action="<?= site_url('/submit-form') ?>">

            <div class="form-group">
                <label>ไอดีหมวดหมู่</label>
                <input type="text" name="group_id" id="group_id" class="form-control">
            </div> <br>

            <div class="form-group">
                <label>ชื่อหมวดหมู่</label>
                <input type="text" name="group_name" id="group_name" class="form-control">
            </div> <br>

            <div class="form-group">
                <label>รูปหมวดหมู่</label>
                <input type="text" name="group_pic" id="group_pic" class="form-control">
            </div> <br>

            <div class="form-group">
                <button type="submit" class="btn btn-success">เพิ่มหมวดหมู่</button>
            </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
    <script>
        if ($("#add_create").length > 0) {
            $("#add_create").validate({
                rules: {
                    group_id: {
                        required: true,
                    },
                    group_name: {
                        required: true,
                    },

                },
                messages: {
                    group_id: {
                        required: "ต้องกรอกไอดีหมวดหมู่",
                    },
                    group_name: {
                        required: "ต้องกรอกชื่อหมวดหมู่",
                    },
                },
            })
        }
    </script>

</body>

</html>