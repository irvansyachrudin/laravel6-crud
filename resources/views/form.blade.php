<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Buat Akun Baru</h1>
    <h4>Sign Up form</h4>
    <form action="/welcome" method="post">
        @csrf
        <p>First name</p>
        <input type="text" name="first_name">
        <p>Last name</p>
        <input type="text" name="last_name">

        <p>Gender :</p>
        <input type="radio" value="male"> Male <br>
        <input type="radio" value="female"> Female <br>
        <input type="radio" value="Other"> Other <br>

        <p>Nationality</p>
        <select name="national">
            <option value="indo"> Bahasa Indonesia</option>
            <option value="English"> English</option>
            <option value="other"> other</option>
        </select>

        <p>Gender :</p>
        <input type="checkbox" value="indo"> Bahasa Indonesia <br>
        <input type="checkbox" value="English"> English <br>
        <input type="checkbox" value="Other"> Other <br>

        <p for="Bio">
            <textarea name="bio" id="bio" cols="30" rows="10"></textarea>
        </p>

        <button type="submit" value="submit"> Sign up</button>
    </form>


</body>

</html>