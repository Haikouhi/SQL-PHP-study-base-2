<!-- action : la page qui traitera mon formulaire -->

<!-- method : la méthode HTTP de transmission des données -->


<form action="save.php" method="post">

        <!-- Pour chaque champ nécessaire, je créée un label/input cohérent !-->
        <!-- Obligatoire: mettre un "name" pour chaque input. Idéalement, mettez comme "name" le même nom que son champ dans la BDD ! -->
        <label for="brand">Brands</label>
        <select class="form-control" name="brands" id="shoesBrand" required>
            <option value="nike">Nike</option>
            <option value="adidas">Adidas</option>
            <option value="doc_martens">Doc Martens</option>
        </select>

        <br><br>

        <label for="name">Name</label>
        <input type="text" name="bName" id="brandName" required>

        <br><br>

        <label for="style">Style</label>
        <select class="form-control" name="styles" id="shoeStyle">
            <option value="boots">Boots</option>
            <option value="sneakers">Sneakers</option>
            <option value="heels">Heels</option>
            <option value="thigh_highs">Thigh Highs</option>
        </select>

        <br><br>

        <label for="price">Prices:</label>
        <input type="range" min="1" max="100" value="50"name="prices" id="shoePrices">
        

        <br><br>

        <label for="size">Sizes</label>
        <input type="number" name="sizes" id="shoeSizes" min="18" max="52">

        <br><br>

        <label for="closer">Closer</label>
        <select class="form-control" name="closers" id="shoeCloser">
            <option value="zipper">Zipper</option>
            <option value="ties">Ties</option>
            <option value="scratch">Scratch</option>
        </select>

        <br><br>

        <label for="quantity">Quantity</label>
        <input type="number" name="quatities" id="shoeQuantity" min="1" max="25"required>

        <br><br>        

        <!-- Je n'oublie pas mon bouton type="submit" -->
        <button type="submit">Rechercher</button>
    </form>