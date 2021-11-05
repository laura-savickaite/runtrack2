<table>
<thead>
    <th>
        arguments
    </th>
    <th>
        valeurs
    </th>
</thead>
<tbody>
    <tr><td>username</td>
    <td><?php echo $_POST ["username"]?></td></tr>

    <tr><td>password</td>
        <td><?php echo $_POST ["password"] ?></td></tr>
        
</tbody>
</table>

<form action="index.php" method="post">
    <div>
        <label for="nom">username :</label>
        <input type="text" id="name" name="username">
    </div>
    <div>
        <label for="prenom">password :</label>
        <input type="password" id="pass" name="password">
    </div>
    <button type="submit">Submit</button>
</form>