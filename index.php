    <?php include_once "./_head.php"?>
<body>
    <form action="index.php/#" method ="post">
        <label for="infinitif">Verbe du premier groupe à l'infinitif</label>
        <input type="text" id ="infintif" name ="infinitif">
        <select name="temps" id="temps">
            <option value="present">Présent</option>
            <option value="futur">Futur</option>
            <option value="imparfait">Imparfait</option>
        </select>
        <button>Conjuguer</button>
    </form>
   <?php 
   require_once "./_temps.php"
       ?>   
   <ul>
    <li>
        <?=$futur?>
    </li>
   </ul>

</body>
</html>