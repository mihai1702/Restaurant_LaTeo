<div class="menu-comp">
    <div>
        <div>
            <img src="../images/menu-images/<?php echo $row["ImageURL"]?>" alt=".">
        </div>
        <div class="name-price">
            <h4>
                <?php
                    echo $row["Name"];
                ?>
            </h4>
            <p>
                <span>Pret: </span>
                <?php
                    echo $row["Price"];
                ?>
                <span>RON</span>
            </p>
        </div>
        <p class="ingredients">
            <span>Ingrediente: </span>
            <?php
                echo $row["Ingredients"];
            ?>
        </p>
        <p class="quantity">
            <span>Cantitate: </span>
            <?php
                echo $row["Quantity"];
            ?>
            g
        </p>
    </div>
</div>
