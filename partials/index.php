<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP VOTING SYSTEM</title>

    <!--Bootstarp link to skip the css part -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="bg-dark">
    <h1 class="text-center text-info p-3">Voting System</h1>
    <div class="bg-info py-4">
        <h2 class="text-center">Login</h2>
        <div class="container text-center">
            <form action="../actions/login.php" method="POST">
                <!--div class="mb-3">
                    <input type="text" class="form-control w-50 m-auto" placeholder="Enter your name" required="required" name="username">
                </div-->
                <div class="mb-3">
                    <input type="text" class="form-control w-50 m-auto" placeholder="Enter your mobile number" required="required" name="mobile">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control w-50 m-auto" placeholder="Enter your password" required="required" name="password">
                </div>
                <div class="mb-3">
                    <select name="std" class="form-select w-50 m-auto">
                        <option value="group">Group</option>
                        <option value="voter">Voter</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-dark my-4">Login <a href="../actions/login.php"></a>
                </button>
                <p>Don`t have an account? <a href="../partials/registration.php" class="text-white">Register here</a></p>
            </form>
        </div>
    </div>
    
</body>
</html>