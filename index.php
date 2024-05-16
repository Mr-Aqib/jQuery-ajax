<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <!-- form -->
    <form class="w-25 mx-auto my-2">
        <label>Name</label>
        <input class="form-control" type="text" id="name">
        <label for="">Roll No</label>
        <input class="form-control" type="number" id="rollno">
        <label for="">Email</label>
        <input class="form-control" type="email" id="email">
        <label for="">Gender</label>
        <input class="form-control" type="text" id="gender">
        <button class="btn formbtn btn-success w-100 my-2 py-2">Add Data</button>
    </form>
    <!-- Search -->
    <form class="w-25 mx-auto my-2">
        <label for="">Search</label>
        <input type="text" class="search form-control" id="">
    </form>
    <!-- table -->
    <button class="getbtn btn btn-dark mx-auto d-block mt-3">Get data</button>
    <table Class='table container mx-auto text-center mt-4 text-capitalize table-striped table-dark'>

        <thead>
            <th>name</th>
            <th>Roll No</th>
            <th>Email</th>
            <th>Gender</th>
        </thead>
        <tbody>

        </tbody>
    </table>

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script>
        // data fetching
        $('.getbtn').on('click', function() {
            $.ajax({
                url: './show-data.php',
                type: 'GET',
                data: {},
                success: function(res) {
                    $('tbody').html(res)
                }
            })
        })
        // insertdata

        let name = $('#name');
        let rollno = $('#rollno');
        let email = $('#email');
        let gender = $('#gender');
        $('.formbtn').on('click', function(e) {
            e.preventDefault()
            $.ajax({
                url: './add-data.php',
                type: 'POST',
                data: {
                    name: name.val(),
                    rollno: rollno.val(),
                    email: email.val(),
                    gender: gender.val()

                },
                success: function(res) {
                    gedata();

                }


            })
        })
        // Making get data function
        function gedata() {
            $.ajax({
                url: './show-data.php',
                type: 'GET',
                data: {},
                success: function(res) {
                    $('tbody').html(res)
                }
            })
        }
        // search from data base

        $('.search').on('keyup', function() {
            let find = $('.search').val()
            // console.log(find)
            $.ajax({
                url: './search-data.php',
                type: 'POST',
                data: {
                    srch: find
                },
                success: function(res) {
                    $('tbody').html(res)
                }
            })
        })
    </script>
</body>

</html>