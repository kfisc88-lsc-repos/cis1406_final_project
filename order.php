<?php

?>

<?php include "templates/header.html"; ?>
<?php include "templates/navbar.html"; ?>

<h3>ORDER YOUR PIZZA</h3>

<form class="order" method="post">
  <fieldset>
    <legend>Meats and Pseudo-Meats</legend>

    <div>
      <input id="ca-bacon" type="checkbox" > <!-- Write JS to display topping location if checked -->
      <label for="ca-bacon">Canadian Bacon</label>

      <select>
        <option value="regular">Regular</option>
        <option value="vegetarian">Vegetarian</option>
        <option value="vegan">Vegan</option>
        <option value="glutenfree">Gluten Free</option>
      </select>

      <div class="toppings-location">
        <label>Left
        <input type="radio" name="ca-bacon-position" value="left" >
        </label>
        <label>Whole
        <input type="radio" name="ca-bacon-position" value="whole" checked >
        </label>
        <label>Right
        <input type="radio" name="ca-bacon-position" value="right" >
        </label>
      </div>
    </div>

    <div>
      <input id="chicken" type="checkbox" > <!-- Write JS to display topping location if checked -->
      <label for="chicken">Chicken</label>

      <select>
        <option value="regular">Regular</option>
        <option value="vegetarian">Vegetarian</option>
        <option value="vegan">Vegan</option>
        <option value="glutenfree">Gluten Free</option>
      </select>

      <div class="toppings-location">
        <label>Left
        <input type="radio" name="chicken-position" value="left" >
        </label>
        <label>Whole
        <input type="radio" name="chicken-position" value="whole" checked >
        </label>
        <label>Right
        <input type="radio" name="chicken-position" value="right" >
        </label>
      </div>
    </div>

    <div>
      <input id="hamburger" type="checkbox" > <!-- Write JS to display topping location if checked -->
      <label for="hamburger">Hamburger</label>

      <select>
        <option value="regular">Regular</option>
        <option value="vegetarian">Vegetarian</option>
        <option value="vegan">Vegan</option>
        <option value="glutenfree">Gluten Free</option>
      </select>

      <div class="toppings-location">
        <label>Left
        <input type="radio" name="hamburger-position" value="left" >
        </label>
        <label>Whole
        <input type="radio" name="hamburger-position" value="whole" checked >
        </label>
        <label>Right
        <input type="radio" name="hamburger-position" value="right" >
        </label>
      </div>
    </div>

    <div>
      <input id="pepperoni" type="checkbox" > <!-- Write JS to display topping location if checked -->
      <label for="pepperoni">Pepperoni</label>

      <select>
        <option value="regular">Regular</option>
        <option value="vegetarian">Vegetarian</option>
        <option value="vegan">Vegan</option>
        <option value="glutenfree">Gluten Free</option>
      </select>

      <div class="toppings-location">
        <label>Left
        <input type="radio" name="pepperoni-position" value="left" >
        </label>
        <label>Whole
        <input type="radio" name="pepperoni-position" value="whole" checked >
        </label>
        <label>Right
        <input type="radio" name="pepperoni-position" value="right" >
        </label>
      </div>
    </div>

    <div>
      <input id="sausage" type="checkbox" > <!-- Write JS to display topping location if checked -->
      <label for="sausage">Sausage</label>

      <select>
        <option value="regular">Regular</option>
        <option value="vegetarian">Vegetarian</option>
        <option value="vegan">Vegan</option>
        <option value="glutenfree">Gluten Free</option>
      </select>

      <div class="toppings-location">
        <label>Left
        <input type="radio" name="sausage-position" value="left" >
        </label>
        <label>Whole
        <input type="radio" name="sausage-position" value="whole" checked >
        </label>
        <label>Right
        <input type="radio" name="sausage-position" value="right" >
        </label>
      </div>
    </div>

  </fieldset>

  <fieldset>
    <legend>Fruits and Vegetables</legend>

    <div>
      <label for="mushroom">Mushrooms</label>
      <input id="mushroom" type="checkbox" > <!-- Write JS to display topping location if checked -->
      <div class="toppings-location">
        <label>Left
        <input type="radio" name="mushroom-position" value="left" >
        </label>
        <label>Whole
        <input type="radio" name="mushroom-position" value="whole" checked >
        </label>
        <label>Right
        <input type="radio" name="mushroom-position" value="right" >
        </label>
      </div>
    </div>

    <div>
      <label for="onion">Onion</label>
      <input id="onion" type="checkbox" > <!-- Write JS to display topping location if checked -->
      <div class="toppings-location">
        <label>Left
        <input type="radio" name="onion-position" value="left" >
        </label>
        <label>Whole
        <input type="radio" name="onion-position" value="whole" checked >
        </label>
        <label>Right
        <input type="radio" name="onion-position" value="right" >
        </label>
      </div>
    </div>

    <div>
      <label for="red-onion">Red Onion</label>
      <input id="red-onion" type="checkbox" > <!-- Write JS to display topping location if checked -->
      <div class="toppings-location">
        <label>Left
          <input type="radio" name="red-onion-position" value="left" >
        </label>
        <label>Whole
          <input type="radio" name="red-onion-position" value="whole" checked >
        </label>
        <label>Right
          <input type="radio" name="red-onion-position" value="right" >
        </label>
      </div>
    </div>

    <div>
      <label for="red-pepper">Red Pepper</label>
      <input id="red-pepper" type="checkbox" > <!-- Write JS to display topping location if checked -->
      <div class="toppings-location">
        <label>Left
        <input type="radio" name="red-pepper-position" value="left" >
        </label>
        <label>Whole
        <input type="radio" name="red-pepper-position" value="whole" checked >
        </label>
        <label>Right
        <input type="radio" name="red-pepper-position" value="right" >
        </label>
      </div>
    </div>

    <div>
      <label for="grn-pepper">Green Pepper</label>
      <input id="grn-pepper" type="checkbox" > <!-- Write JS to display topping location if checked -->
      <div class="toppings-location">
        <label>Left
        <input type="radio" name="grn-pepper-position" value="left" >
        </label>
        <label>Whole
        <input type="radio" name="grn-pepper-position" value="whole" checked >
        </label>
        <label>Right
        <input type="radio" name="grn-pepper-position" value="right" >
        </label>
      </div>
    </div>

    <div>
      <label for="pineapple">Pineapple</label>
      <input id="pineapple" type="checkbox" > <!-- Write JS to display topping location if checked -->
      <div class="toppings-location">
        <label>Left
        <input type="radio" name="pineapple-position" value="left" >
        </label>
        <label>Whole
        <input type="radio" name="pineapple-position" value="whole" checked >
        </label>
        <label>Right
        <input type="radio" name="pineapple-position" value="right" >
        </label>
      </div>
    </div>

    <div>
      <label for="spinach">Spinach</label>
      <input id="spinach" type="checkbox" > <!-- Write JS to display topping location if checked -->
      <div class="toppings-location">
        <label>Left Side
        <input type="radio" name="spinach-position" value="left" >
        </label>
        <label>Whole
        <input type="radio" name="spinach-position" value="whole" checked >
        </label>
        <label>Right Side
        <input type="radio" name="spinach-position" value="right" >
        </label>
      </div>
    </div>
  </fieldset>

<button type="button" name="submit">Submit</button>
<button type="button" name="cancel">Cancel</button>

</form>

<?php include "templates/footer.html"; ?>
