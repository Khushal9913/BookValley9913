<!DOCTYPE html>
<html>
<head>
  <title>Feedback Form</title>
  <style>
    .rating {
      display: flex;
      flex-direction: row-reverse;
      justify-content: center;
    }

    .rating input {
      display: none;
    }

    .rating label {
      cursor: pointer;
      color: #999;
      font-size: 40px;
      padding: 5px;
    }

    .rating label:before {
      content: "\2605";
    }

    .rating input:checked ~ label {
      color: #ffcc00;
    }

    .submit-btn {
      margin-top: 20px;
    }
  </style>
</head>
<body>
  <h1>Feedback Form</h1>
  <form>
    <h2>Rate your experience:</h2>
    <div class="rating">
      <input type="radio" id="star5" name="rating" value="5">
      <label for="star5"></label>
      <input type="radio" id="star4" name="rating" value="4">
      <label for="star4"></label>
      <input type="radio" id="star3" name="rating" value="3">
      <label for="star3"></label>
      <input type="radio" id="star2" name="rating" value="2">
      <label for="star2"></label>
      <input type="radio" id="star1" name="rating" value="1">
      <label for="star1"></label>
    </div>
    <button type="submit" class="submit-btn">Submit</button>
  </form>
</body>
</html>