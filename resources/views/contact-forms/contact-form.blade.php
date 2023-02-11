<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Site</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container my-5">
        <form method="POST" action="{{ route('forms.contact') }}">
            @csrf
            <div class="form-group row mb-3">
                <label for="name" class="col-sm-2 col-form-label col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-sm" id="name" name="name" placeholder=" Enter your name "
                        required>
                </div>
            </div>

            <div class="form-group row mb-3">
                <label for="email" class="col-sm-2 col-form-label col-form-label">E-mail</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control form-control-sm" id="email" name="email"
                        placeholder=" Enter your e-mail address " required>
                </div>
            </div>

            <div class="form-group row mb-3">
                <label for="messageContent" class="col-sm-2 col-form-label col-form-label">Message</label>
                <div class="col-sm-10">
                    <textarea
                        class="form-control form-control-sm"
                        id="messageContent" name="messageContent" placeholder=" Enter your messageContent " required></textarea>
                </div>
            </div>

            <div class="form-group row mb-3">
                <div class="col-sm-10 col-md-4">
                    <button type="submit" class="btn btn-success btn-block btn-md">Submit</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
