<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title> Job Application </title>
    <style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: monospace;
}

body {
  background-color: #ccc;
}

.container {
  max-width: 900px;
  margin: 20px auto;
}

.input_container {
  max-width: 600px;
  background-color: white;
  padding: 20px;
  box-shadow: 5px 3px 5px rgba(1, 1, 1, 0.5);
  margin: 0 auto;
  margin-top: 40px;
  border-radius: 10px;
}

.spanclass {
  font-size: 20px;
}

.form_container {
  margin-top: 20px;
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
  grid-gap: 20px;
}

.input_form {
  display: flex;
  flex-direction: column;
}

label {
  font-size: 18px;
  margin: 5px;
}

input, select, textarea {
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 10px;
  font-size: 15px;
  box-shadow: 5px 2px 5px rgb(158, 197, 231);
}

input:focus {
  outline-color: rgb(81, 218, 194);
}

select:focus {
  outline-color: rgb(81, 218, 194);
}

textarea:focus {
  outline-color: rgb(81, 218, 194);
}

.submit {
  margin-top: 20px;
  display: flex;
  justify-content: flex-end;
}

button {
  border: none;
  padding: 10px;
  background-color: rgb(47, 237, 207);
  border-radius: 8px;
  cursor: pointer;
  transition: 0.3s, ease-in;
}

button:hover {
  transition: 0.3s;
  transform: translate(-10px);
}

.form_textarea {
  grid-column: 1/span 2;
}

.form_textarea textarea {
  width: 100%;
}

.input_container>h1 {
  text-align: center;
}

@media (max-width:460px; ) {
  .form_textarea {
    grid-column: 1/span 1;
  }
}
    </style>
  </head>

  <body>
    <div class="container">
      <div class="input_container">
        <h1>Register Form </h1>
        <form class="" action="index.html" method="post">
          <div class="form_container">
            <div class="input_form">
              <label for="first_name">First Name</label>
              <input type="text" name="first_name" value="" id="first_name" placeholder="Enter First Name.." required>
            </div>
            <div class="input_form">
              <label for="last_name">Last Name</label>
              <input type="text" name="last_name" value="" id="last_name" placeholder="Enter Last Name.." required>
            </div>
            <div class="input_form">
              <label for="email">E-mail</label>
              <input type="email" name="email" value="" id="email" placeholder="Enter Mail.." required>
            </div>
            <div class="input_form">
              <label for="start">Password</label>
              <input type="password" name="password" id="date" placeholder="xxxxxxx" required>
            </div>
            
            <div class="form_textarea">
              <label for="address">Address</label>
              <textarea name="address" rows="4" cols="50" id="address" placeholder="Your Address.." required></textarea>
            </div>
            <div class="input_form">
              <label for="city">City</label>
              <input type="text" name="city" value="" id="city" placeholder="Enter City Name.." required>
            </div>
            <div class="input_form">
              <label for="pincode">Pin Code</label>
              <input type="number" name="pincode" value="" id="pincode" placeholder="City Pin Code " required>
            </div>
            <div class="input_form">
              <label for="jobrole">Job Role</label>
              <select class="dropdown" name="" id="jobrole" required>
                <option value="ADMIN"> ADMIN </option>
                <option value="STUDENT">STUDENT </option>
                <option value="TEACHER ">TEACHER </option>
              </select>
            </div>
            <div class="input_form">
              <label for="phone">Mobile No.</label>
              <input type="tel" name="pincode" value="" id="phone" placeholder="Optional" >
            </div>
          </div>
        </form>
        <div class="submit">
          <button type="submit" name="button">Apply Now </button>
        </div>
      </div>
    </div>

  </body>

</html>