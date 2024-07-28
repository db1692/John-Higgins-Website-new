<?php include('header.php'); ?>


    <h1 class="contact-title">Contact</h1>
    <h2 class="contact-me">I can be contacted at <a href="mailto:johnhigginsw6@gmail.com" target="_blank">johnhigginsw6@gmail.com</a>, or use the form below.</h2>
    <div class="container mt-5">
      <form class="row g-3" action="https://formsubmit.co/johnhigginsw6@gmail.com" method="POST">

        <!-- Honeypot -->
        <input type="text" name="_honey" value="" style="display:none;">

        <!-- Disable Captcha -->
        <input type="hidden" name="_captcha" value="false">

        <!-- Success Message Link -->
        <input type="hidden" name="_next" value="http://www.johnhigginsresearch.com/contact-success.html">

        <div class="col-md-6">
          <label for="firstName" class="form-label">First Name</label>
          <input type="text" class="form-control" name="First&nbsp;Name" id="firstName" required>
        </div>
        <div class="col-md-6">
          <label for="lastName" class="form-label">Last Name (optional)</label>
          <input type="text" class="form-control" name="Last&nbsp;Name" id="lastName">
        </div>
        <div class="col-md-8">
          <label for="emailInfo" class="form-label">Your E-mail</label>
          <input type="email" class="form-control" name="Email" id="emailInfo" required>
        </div>
        <div class="col-md-4">
          <label for="phoneNumber" class="form-label">Phone Number (optional)</label>
          <input type="text" class="form-control" name="Phone" id="phoneNumber">
        </div>
        <div class="col-md-12">
          <label for="comments" class="form-label">Your message here</label>
          <textarea class="form-control" id="comments" name="Message" rows="3" required></textarea>
        </div>
        <div class="col-md-12">
          <button type="submit" class="btn btn-primary myBtn3">Submit</button>
        </div>
      </form>
    </div>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="javascript.js"></script>

  </body>

</html>
