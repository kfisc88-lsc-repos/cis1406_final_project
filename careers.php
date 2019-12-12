<?php include "templates/header.html"; ?>
<?php include "templates/navbar.html"; ?>

<form class="application" action="#" method="post">

  <fieldset>
    <legend>Contact Information</legend>
    <div>
      <label for="fname">First Name</label>
      <input id="fname" type="text" name="fname" >
    </div>
    <div>
      <label for="lname">Last Name</label>
      <input id="lname" type="text" name="lname" >
    </div>
    <div>
      <label for="address">Address</label>
      <input id="address" type="text" name="address">
    </div>
    <div>
      <label for="city">City</label>
      <input id="city" type="text" name="city" >
    </div>
    <div>
      <label for="state">State</label>
      <input id="state" type="text" name="state" > <!-- Add pattern for state -->
    </div>
    <div>
      <label for="zip">ZIP</label>
      <input id="zip" type="text" name="zip" > <!-- Add pattern for zip -->
    </div>
    <div>
      <label for="phone">Phone</label>
      <input id="phone" type="tel" name="phone" > <!-- Add pattern for telephone -->
    </div>
    <div>
      <label for="email">Email</label>
      <input id="email" type="email" name="email" >
    </div>
  </fieldset>

  <fieldset>
      <legend>Work History</legend>
    <fieldset>
      <div>
        <label for="employer-1-name">Employer</label>
        <input id="employer-1-name" type="text" name="employer-1-name" >
      </div>
      <div>
        <label for="employer-1-phone">Phone</label>
        <input id="employer-1-phone" type="tel" name="employer-1-phone" >
      </div>
      <div>
        <label for="employer-1-start">Start Date</label>
        <input id="employer-1-start" type="date" name="employer-1-start" >
      </div>
      <div>
        <label for="employer-1-end">End Date</label>
        <input id="employer-1-end" type="date" name="employer-1-end" >
      </div>
      <div>
        <label for="employer-1-title">Job Title</label>
        <input id="employer-1-title" type="text" name="employer-1-title" >
      </div>
      <div>
        <label for="employer-1-desc">Job Description</label>
        <textarea id="employer-1-desc" name="employer-1-desc" rows="4" cols="60"></textarea>
      </div>
      <div>
        <label for="employer-1-leave">Reason for Leaving</label>
        <textarea id="employer-1-leave" name="employer-1-leave" rows="4" cols="60"></textarea>
      </div>
    </fieldset>
    <button type="button" name="add-work-hist">Add Employer</button> <!-- Create JS to add more work history -->
  </fieldset>

  <fieldset>
    <legend>References</legend>
    <div>
      <label for="ref1-name">Name</label>
      <input id="ref1-name" type="text" name="reference1" >
      <label for="ref1-phone">Phone</label>
      <input id="ref1-phone" type="tel" name="ref1-phone" >
      <label for="ref1-relation">Relationship</label>
      <textarea id="ref1-relation" name="ref1-relation" rows="2" cols="40"></textarea>
    </div>

    <div>
      <label for="ref2-name">Name</label>
      <input id="ref2-name" type="text" name="reference2" >
      <label for="ref2-phone">Phone</label>
      <input id="ref2-phone" type="tel" name="ref2-phone" >
      <label for="ref2-relation">Relationship</label>
      <textarea id="ref2-relation" name="ref2-relation" rows="2" cols="40"></textarea>
    </div>

    <div>
      <label for="ref3-name">Name</label>
      <input id="ref3-name" type="text" name="reference3" >
      <label for="ref3-phone">Phone</label>
      <input id="ref3-phone" type="tel" name="ref3-phone" >
      <label for="ref3-relation">Relationship</label>
      <textarea id="ref3-relation" name="ref3-relation" rows="2" cols="40"></textarea>
    </div>
  </fieldset>

  <button type="button" name="submit">Submit</button>
  <button type="button" name="cancel">Cancel</button>

</form>

<?php include "templates/footer.html"; ?>
