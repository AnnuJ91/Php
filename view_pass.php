<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script type="text/javascript" >
            const PassBtn = document.querySelector('#passBtn');
            PassBtn.addEventListener('click', () => {
            const input = document.querySelector('#passInput');
            input.getAttribute('type') === 'password' ? input.setAttribute('type', 'text') : input.setAttribute('type', 'password');

            if (input.getAttribute('type') === 'text'){
             PassBtn.innerHTML = '<i class="fa fa-eye-slash"></i>';
            } else{
            PassBtn.innerHTML = '<i class="fa fa-eye fa-fw" aria-hidden="true"></i>';
             }

});

            </script>

            <style>
                    .form-wrapper {
  margin: 10rem auto;
  max-width: 30rem;
}
                </style>
    </head>
    <body>

<div class="form-wrapper">
    <form id="form_id" class="form-class">
      <p class="input-group">
      <input id="passInput" class="form-control" placeholder="Your Password" name="password" type="password" size="30" aria-required="false">
      <span class="input-group-addon" role="button" title="veiw password" id="passBtn">
        <i class="fa fa-eye fa-fw" aria-hidden="true"></i>
      </span>
      </p>
    </form>
  </div>
</body>
  </html>