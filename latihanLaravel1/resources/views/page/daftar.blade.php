<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Buat Account Baru!</h2>

    <h3>Sign Up Form</h3>

    <form action="/home" method="POST">
    @csrf
    <label >Nama Depan</label> <br>
    <input type="text" name="fname"> <br> <br>

   
    <label >Nama Belakang</label> <br>
    <input type="text" name="lname"><br> <br>

    <label>Gender:</label> <br /> <br />
    <input type="radio" name="gender" value="1" /> Male <br />
    <input type="radio" name="gender" value="2" /> Famale <br />
    <input type="radio" name="gender" value="3" /> Other <br /> <br />

    <label>Nationality:</label> <br /> <br />

    <select name="nationality">
        <option value="1">Indonesian</option>
        <option value="2">Malaysian</option>
        <option value="3">Singaporean</option>
        <option value="4">Australian</option>
    </select>

    <br />
    <br />

    <label>Language Spoken:</label> <br /> <br />
    <input type="checkbox" name="language" value="1" />Bahasa Indonesia <br />
    <input type="checkbox" name="language" value="2" />English <br />
    <input type="checkbox" name="language" value="3" />Other <br /> <br />

    <label>Bio:</label> <br /> <br />
    <textarea name="bio" cols="20" rows="10"></textarea> <br />

    

    <input type="submit" value="Sign Up" /> <br> <br>

    <a href="/"> <h2>Kembali ke Dashboard </h2> </a>
    </form>
</body>
</html>