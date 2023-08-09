<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/style.css">
  <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Open+Sans|Montserrat" rel="stylesheet">
  <title>Event Management</title>
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

</head>
<body>
    <div class="hero-nav">
      <div class="hero-nav__inner">
        <div class="hero-nav__button">
          <a href="#" class="btn"></a>
        </div>
        <div class="search-container">
          <input type="text" id="search-input" class="form-control" placeholder="Search events...">
          <button type="button" id="search-button" class="btn btn-primary">Search</button>
          <button type="button" id="clear-search-button" class="btn btn-secondary">Clear</button>
        </div>
      </div>
    </div>

    <div class="page-content">
      <p class="about_events">
        به دنیای شگفت‌انگیز رویدادها خوش آمدید! در شرکت مدیریت رویداد ما، به ساخت تجربیاتی بی‌فراموش اختصاص داده‌ایم که اثری دائمی بر جوانب زندگی بگذارد. آیا این یک کنفرانس شرکتی است، یک معرفی محصول بزرگ یا یک جمع‌آوری جامعه دلنشین؟ ما به هر رویداد با خلاقیت و برنامه‌ریزی دقیق پرداخته و آن را به یک تجربه بی‌نظیر تبدیل می‌کنیم. تیم اختصاصی ما متعهد به تبدیل ایده‌های شما به واقعیت است، تا هر رویداد ترکیبی سهولت‌آور از نوآوری، شیک‌پوشی و هدف باشد. از مفهوم تا اجرا، ما هر جزئی را با دقت انجام داده و شما را قادر می‌سازیم تا از رویداد لذت ببرید و خاطراتی گرانبها را ایجاد کنید.
      </p>
    </div>

    <div class="container">
      <form id="event-form" action="add_event.php" method="post">
        <div class="mb-3">
          <label for="title" class="form-label">Event Title:</label>
          <input type="text" id="title" name="title" class="form-control" required>
        </div>
        
        <div class="mb-3">
          <label for="speaker" class="form-label">Speaker:</label>
          <input type="text" id="speaker" name="speaker" class="form-control" required>
        </div>
        
        <div class="mb-3">
          <label for="duration" class="form-label">Duration (mins):</label>
          <input type="number" id="duration" name="duration" class="form-control" required>
        </div>

        <div class="mb-3">
          <label for="description" class="form-label">Description:</label>
          <textarea id="description" name="description" class="form-control" rows="4"></textarea>
        </div>
        
        <div class="mb-3">
          <label for="time" class="form-label">Time:</label>
          <input type="datetime-local" id="time" name="time" class="form-control" required>
        </div>
        
        <div class="mb-3">
          <label for="place" class="form-label">Place:</label>
          <input type="text" id="place" name="place" class="form-control" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Add Event</button>
      </form></br></br></br>
    </div>

    <div class="container">
      <form id="edit-form" style="display:none ;" action="edit_event.php" method="post">   


        <input type="hidden" id="edit-id" name="edit-id">
        
        <div class="mb-3">
        <label class="form-label" for="edit-title">Edit Title:</label>
        <input class="form-control" type="text" id="edit-title" name="edit-title" required>
        </div>

        <div class="mb-3">
        <label class="form-label" for="edit-speaker">Edit Speaker:</label>
        <input class="form-control" type="text" id="edit-speaker" name="edit-speaker" required>
        </div>

        <div class="mb-3">
        <label class="form-label" for="edit-duration">Edit Duration (mins):</label>
        <input class="form-control" type="number" id="edit-duration" name="edit-duration" required>
        </div>

        <div class="mb-3">
        <label class="form-label" for="edit-description">Edit Description:</label>
        <textarea class="form-control" id="edit-description" name="edit-description" rows="4" required></textarea>
        </div>

        <div class="mb-3">
        <label class="form-label" for="edit-time">Edit Time:</label>
        <input class="form-control" type="datetime-local" id="edit-time" name="edit-time" required>
        </div>

        <div class="mb-3">
        <label class="form-label" for="edit-place">Edit Place:</label>
        <input class="form-control" type="text" id="edit-place" name="edit-place" required>
        </div>

        <button class="btn btn-primary" type="submit">Save Changes</button>
      </form>      
    </div></br></br></br>

    <div class="cart-container wrapper">
      <?php include 'get_events.php'; ?>
    </div>
  
    <button class="back-to-top">
      <i class="fa fa-arrow-up fa-md" aria-hidden="true"></i>
    </button>

    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

</body>
</html>

