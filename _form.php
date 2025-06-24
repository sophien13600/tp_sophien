<form class="row m-5" action="index.php" method ="post">
     <div class="col">
             <label for="infinitif">Verbe du premier groupe à l'infinitif</label>
        </div>   
   
        <div class="col">
        <input class="form-control" type="text" id ="infinitif" name ="infinitif">
        </div>
       <div class="col">
            <select class="form-select" name="temps" id="temps">
            <option value="present">Présent</option>
            <option value="futur">Futur</option>
            <option value="imparfait">Imparfait</option>
        </select>
        </div> 
       <div class="col">
            <button class="btn btn-primary">Conjuguer</button>
        </div> 
        
    </form>