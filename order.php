<?php

?>

<?php include "templates/header.html"; ?>
<?php include "templates/navbar.html"; ?>

<h2 id="order-header">Build Your Own Pizza</h2>

<form class="order" method="post">
  <fieldset id="meats">
    <legend>Meats and Pseudo-Meats</legend>

    <div class="toppings">
      <label for="ca-bacon">
        <input id="ca-bacon" type="checkbox" > <!-- Write JS to display topping location if checked -->
        Canadian Bacon
      </label>

      <select class="meat-style">
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

    <div class="toppings">
      <label for="chicken">
        <input id="chicken" type="checkbox" > <!-- Write JS to display topping location if checked -->
        Chicken
      </label>

      <select class="meat-style">
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

    <div class="toppings">
      <label for="hamburger">
        <input id="hamburger" type="checkbox" > <!-- Write JS to display topping location if checked -->
        Hamburger
      </label>

      <select class="meat-style">
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

    <div class="toppings">
      <label for="pepperoni">
        <input id="pepperoni" type="checkbox" > <!-- Write JS to display topping location if checked -->
        Pepperoni
      </label>

      <select class="meat-style">
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

    <div class="toppings">
      <label for="sausage">
        <input id="sausage" type="checkbox" > <!-- Write JS to display topping location if checked -->
        Sausage
      </label>

      <select class="meat-style">
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

  <fieldset id="plants">
    <legend>Vegetables (and Pineapple)</legend>

    <div class="toppings">
      <label for="mushroom">
        <input id="mushroom" type="checkbox" > <!-- Write JS to display topping location if checked -->
        Mushrooms
      </label>
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

    <div class="toppings">
      <label for="onion">
        <input id="onion" type="checkbox" > <!-- Write JS to display topping location if checked -->
        Onion
      </label>
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

    <div class="toppings">
      <label for="red-onion">
        <input id="red-onion" type="checkbox" > <!-- Write JS to display topping location if checked -->
        Red Onion
      </label>
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

    <div class="toppings">
      <label for="red-pepper">
        <input id="red-pepper" type="checkbox" > <!-- Write JS to display topping location if checked -->
        Red Pepper
      </label>
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

    <div class="toppings">
      <label for="grn-pepper">
        <input id="grn-pepper" type="checkbox" > <!-- Write JS to display topping location if checked -->
        Green Pepper
      </label>
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

    <div class="toppings">
      <label for="pineapple">
        <input id="pineapple" type="checkbox" > <!-- Write JS to display topping location if checked -->
        Pineapple
      </label>
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

    <div class="toppings">
      <label for="spinach">
        <input id="spinach" type="checkbox" > <!-- Write JS to display topping location if checked -->
        Spinach
      </label>
      <div class="toppings-location">
        <label>Left
        <input type="radio" name="spinach-position" value="left" >
        </label>
        <label>Whole
        <input type="radio" name="spinach-position" value="whole" checked >
        </label>
        <label>Right
        <input type="radio" name="spinach-position" value="right" >
        </label>
      </div>
    </div>
  </fieldset>
</form>

<div id="order-buttons">
  <button id="submit" type="button" name="submit">Submit</button>
  <button id="cancel" type="button" name="cancel">Cancel</button>
</div>

<?php include "templates/footer.html"; ?>
