<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Info</title>
</head>
<body>

   <h2>Registration Form</h2>

  </div>

  <div class="card-body">

  <form id="registeration_form" method="post" enctype="multipart/form-data">

  <div class="row">

    <div class="col-sm-6">

      <div class="row">

      <div class="mb-3 col-sm-6">

        <label for="" class="form-label">Name</label>

        <input type="text"  name="name" class="form-control" id="" aria-describedby="emailHelp" required />

      </div>

  <div class="mb-3 col-sm-6">

    <label for=""  class="form-label">Phone</label>

    <input type="tel" name="phone" class="form-control" required />

  </div>

  <div class="mb-3 col-sm-6">

    <label for="" class="form-label">Age</label>

    <input type="number" min="1" max="90" name="age" class="form-control" required />

  </div>

  <div class="mb-3 col-sm-6">

    <label for="" class="form-label">Email Id</label>

    <input type="email" name="email" class="form-control" required />

  </div>

  <div class="mb-3 col-sm-6">

    <label for="" class="form-label">Image</label>

    <input type="file" name="profile_img" class="form-control" required />

  </div>

  <div class="mb-3 col-sm-6">

    <label for="" class="form-label" style="color:#fa00000;font-weight:600;">Video* (Mandatory)</label>


    <button id="upload_widget" type="button" class="btn btn-danger block">Upload Your Video</button>

    <input type="hidden" name="video_url" value="" id="video_url" required />

  </div>

      </div>

    </div><!-- 6 -->

    <div class="col-sm-6">

      <div class="row">

      <div class="mb-3 col-sm-6">

        <label for="" class="form-label">Category</label>

        <div class="form-check">

          <input class="form-check-input"  type="radio" name="category" id="fashion" value="Fashion">

          <label class="form-check-label" for="fashion">

           Fashion

          </label>

        </div>

        <div class="form-check">

          <input class="form-check-input" type="radio" name="category" id="beauty" value="Beauty">

          <label class="form-check-label" for="beauty">

            Beauty

          </label>

        </div>



        <div class="form-check">

          <input class="form-check-input" type="radio" name="category" id="Entertainment" value="Entertainment" >

          <label class="form-check-label" for="Entertainment">

            Entertainment

          </label>

        </div>



        <select class="form-select" name="sub_category"  id="sub_category">

          <option value="" >-- Select Sub Category</option>

          <option value="Singing"> Singing</option>

          <option value="Dancing">Dancing </option>

          <option value="Comedy">Comedy </option>

          <option value="Sports">Sports </option>

          <option value="DJ">DJ</option>

        </select>

        <div class="mb-3">

            <label for="password" class="form-label">Password</label>

            <input name="password" type="password" class="form-control" id="password" />

          </div>



          <div class="mb-3">

            <label for="new_password" class="form-label">Confirm Password</label>

            <input name="confirmpassword" type="password" class="form-control" id="new_password"/>

          </div>

    </div>  <!-- mb 3 -->

    <div class="mb-3 col-sm-6">

          <div class="mb-3">

            <label for="insta_handle" class="form-label">Instagram Handle</label>

            <input name="insta_handle" class="form-control" id="insta_handle" />

          </div>

          <div class="mb-3">

            <label for="bio" class="form-label">Add Your Bio</label>

            <textarea name="candidate_bio" class="form-control" id="bio" rows="3"></textarea>

          </div>

          

        <button type="submit" id="submit" class="btn btn-warning" style="margin-top:22;">Submit</button>

        

      </div> <!-- mb 3 -->

    </div> <!-- row -->

</div>

<img class="loading" src="https://arabasiastarz.com/home/img/colorful-loading.gif" />

</form>

  </div>

</div>

</div> <!-- container -->

</section>	

</body>
</html>
